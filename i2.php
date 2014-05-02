<?php
include_once('Database_Connect.php');

include_once("simple_html_dom.php");

ini_set('max_execution_time', 3000);


/* settings */
session_start();
$_SESSION['posts_start'] = 0;
$number_of_posts = 9; 
$_SESSION['posts_start'] = $_SESSION['posts_start'] ? $_SESSION['posts_start'] : $number_of_posts;

/* loading of stuff */
if (isset($_GET['start']))
{
	/* spit out the posts within the desired range */
	$posts = get_posts($_GET['start'], $_GET['desiredPosts']);
	// decode the result to know the exact length of the result
	// It could be 2 in this case or less
	$postsDecoded = json_decode($posts);
	// If the result is not empty we update the session
	if (!empty($postsDecoded))
	{
		/* save the user's "spot", so to speak */
		$_SESSION['posts_start']+= count($postsDecoded);
	}
	echo get_posts($_GET['start'], $_GET['desiredPosts']);
	/* kill the page */
	die();
}

/* grab stuff */

$html = new simple_html_dom();
$query_URL = "http://www.historyindia.com/shows";
$html->load_file($query_URL);
$results = $html->find(".list li");

for($i=0;$i<141;$i++){
		$text = $results[$i]->find(".show-block");
		$text= $text[0]->find("a");
		$text0= $text[0]->innertext;
		
		$text = $results[$i]->find(".show-block");
		$text= $text[0]->find("div");

		$text1 = $text[0]->find("h4");
		$text1 = $text1[0]->innertext;

		$text2 = $text[0]->find("p");
		$text2 = $text2[0]->innertext;

		$text3 = $text[0]->find("a");
		$text3 = $text3[0]->href;

		$q1 = "select * from historytv18 where header = '$text1'";
		 $sql1 = mysql_query($q1);
	
		if(mysql_num_rows($sql1) == 1)

		{
		}
		else
		{
		$query = "insert into historytv18(img,header,des,link) values('".$text0."','".$text1."','".$text2."','".$text3."')";
		$sql = mysql_query($query);
		}
}


function get_posts($start = 0, $number_of_posts = 2)
{

	$posts = array();
	
	
	/* get the posts */
	$query = "select * from historytv18 ORDER BY id LIMIT $start,$number_of_posts";
	
	$result = mysql_query($query);
	while ($row = mysql_fetch_assoc($result))
	{
		// Remove html tag and truncate the content
		$row['post_content0'] = $row['img'];
		$row['post_content1'] = $row['header'];
		$row['post_content2'] = $row['des'];
		$row['post_content3'] = $row['link'];
		
		$posts[] = $row;
	}
	/* return the posts in the JSON format */
	return json_encode($posts);
}
?>

<html>
	<head>

		<title>Insert title here</title>
<script src="JS/jquery.min.js"></script>
		<script type="text/javascript">
			// Shorthand for $( document ).ready()
			$(function() {
				/* DEMO */
				// initialize variables
				var start = <?php echo $_SESSION['posts_start']; ?>;
				var initialPosts = <?php echo get_posts(0, $_SESSION['posts_start']); ?>;
				var desiredPosts = <?php echo $number_of_posts; ?>;
				// either null or contains the mustache template
				var template = '<div class="item">'
					+'<p class="post-content0"></p>'
					+'<p class="post-content1" style="font-weight:bold;"></p>'
					+'<p class="post-content2"></p>'
					+'<a id="tv_hr" class="post-content3" href="#" style="text-decoration:none;">View Details</a>'
//					+'<p class="post-content3">View Details</p>'
					//+'<a href="#" class="post-content3"></a>'
					+'</div>';
			
				var widget = $('#widget'),
				// Element to load the posts
				content = widget.find('.content'),
				// the more button
				more = widget.find('.more'),
				// the post counter
				counter = widget.find('.badge');

				// Create alerts elements (Display Success or Failure)
				var alerts = {
					requestEmpty : $('<div class="alert alert-info">No more data</div>'),
					requestFailure : $('<div class="alert alert-error">Could not get the data. Try again!</div>')
				}
				var progressElement = $('<div class="progress" style="margin-bottom:0"><div class="bar"></div></div>');
				var progressBar = progressElement.find('.bar');
				
				// function that handle posts
				var postHandler = function(posts){
					// Set the progress bar to 100%
					progressBar.css('width', '100%');
					// Delay the normal more button to come back for a better effect
					window.setTimeout(function(){more.html('More <span class="caret"></span>')}, 1000);
					// insert childrens at the end of the content element
					for (post in posts){
						// Clone the element
						var $post = $(template).clone();
						$post.attr('id', 'post-' + posts[post].ID);
						$post.find('.post-title').html(posts[post].post_title);
						$post.find('.post-content0').html(posts[post].post_content0);
						$post.find('.post-content1').html(posts[post].post_content1);
						$post.find('.post-content2').html(posts[post].post_content2);
						$post.find('.post-content3').html(posts[post].post_content3);
						//document.getElementById("abc").href="xyz.php";
						content.append($post);
					}
					// Scroll to the first element loaded
					content.animate({
						scrollTop: $('#post-' + posts[0].ID).offset().top + (content.scrollTop()- content.offset().top)
					}, 200);
				}

				// place the initial posts in the page
				postHandler(initialPosts);

				// add the click event to the more button
				more.click(function(){  
					// Set the progress bar to 0%
					//progressBar.css('width', '0%');
					// remove the more button innerHTML and insert the progress bar
					more.empty().append(progressElement);
					// AJAX REQUEST
					$.ajax({
						type: 'GET',
						// We do not want IE to cache the result
						cache: false,
						data:{  
							'start': start,  
							'desiredPosts': desiredPosts  
							} 
					}).success(function (data, text) {
					
						data = JSON.parse(data);
						if (data.length > 0){
							// Updat`e the total number of items
							start += data.length;
							// Update the counter
							counter.html(start);
							// load items on the page
							postHandler(data);
						}
						else{
							$alert = alerts.requestEmpty;
							// insert the empty message
							widget.prepend($alert);
							// Set the progress bar to 100%
							progressBar.css('width', '100%');
							// Remove the more button
							window.setTimeout(function(){more.remove()}, 1000);
							// remove the empty message after 4 seconds
							window.setTimeout(function(){$alert.remove()}, 4000);
						}
					}).error(function (request, status, error) {
						$alert = alerts.requestFailure;
						// insert the failure message
						widget.prepend($alert);
						// Set the progress bar to 100%
						progressBar.css('width', '100%');
						// Delay the normal more button to come back for a better effect
						window.setTimeout(function(){more.html('More <span class="caret"></span>')}, 1000);
					});
				});
				
				
				
			});
		</script>
		
		<style>
		.item
		{
		width:30%;
		display:inline-block;
		}

		.content
		{
			margin-left:7%;
		}		
		.more
		{
		margin-left:45%;		
		}
		</style>
		
		
	</head>
	<body bgcolor="#ebe9e2">
		<div class="container">
			<div class="row">
				<div class="span12">
					<div class="row">
						<div class="span6">
							<div id="widget">
								<h4 id="widget-title">
									Shows On HistoryTV18
								</h4>
								<div class="content"></div>
								<button class="more btn btn-block">
									More <span class="caret"></span>
								</button>
							</div>
						</div>
					
					</div>
				</div>	
			</div>
		</div>
	</body>
</html>
