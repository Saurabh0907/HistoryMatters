
<?php
include_once('Database_Connect.php');

include_once("simple_html_dom.php");

ini_set('max_execution_time', 3000);



session_start();
$_SESSION['posts_start'] = 0;
$number_of_posts = 10; //2 at a time
$_SESSION['posts_start'] = $_SESSION['posts_start'] ? $_SESSION['posts_start'] : $number_of_posts;


if (isset($_GET['start']))
{

	$posts = get_posts($_GET['start'], $_GET['desiredPosts']);
	$postsDecoded = json_decode($posts);
	if (!empty($postsDecoded))
	{
		$_SESSION['posts_start']+= count($postsDecoded);
	}
	echo get_posts($_GET['start'], $_GET['desiredPosts']);
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
	
	
	$query = "select * from historytv18 ORDER BY id LIMIT $start,$number_of_posts";
	
	$result = mysql_query($query);
	while ($row = mysql_fetch_assoc($result))
	{
		$row['post_content0'] = $row['img'];
		$row['post_content1'] = $row['header'];
		$row['post_content2'] = $row['des'];
		$row['post_content3'] = $row['link'];
		
		$posts[] = $row;
	}
	return json_encode($posts);
}
?>

<html>
	<head>

		<title>Insert title here</title>
<script src="JS/jquery.min.js"></script>

		<script type="text/javascript">
			$(function() {
				var start = <?php echo $_SESSION['posts_start']; ?>;
				var initialPosts = <?php echo get_posts(0, $_SESSION['posts_start']); ?>;
				var desiredPosts = <?php echo $number_of_posts; ?>;
				var template = '<div class="item">'
					+'<p class="post-content0"></p>'
					+'<p class="post-content1"></p>'
					+'<p class="post-content2"></p>'
					+'<a href="#"><h4 class="post-content3"></h4></a>'
					+'</div>';
			
				var widget = $('#widget'),
				content = widget.find('.content'),
				more = widget.find('.more'),
				counter = widget.find('.badge');

				var alerts = {
					requestEmpty : $('<div class="alert alert-info">No more data</div>'),
					requestFailure : $('<div class="alert alert-error">Could not get the data. Try again!</div>')
				}
				var progressElement = $('<div class="progress" style="margin-bottom:0"><div class="bar"></div></div>');
				var progressBar = progressElement.find('.bar');
				
				var postHandler = function(posts){
					progressBar.css('width', '100%');
					window.setTimeout(function(){more.html('More <span class="caret"></span>')}, 1000);
					for (post in posts){
						var $post = $(template).clone();
						$post.attr('id', 'post-' + posts[post].ID);
						$post.find('.post-title').html(posts[post].post_title);
						$post.find('.post-content0').html(posts[post].post_content0);
						$post.find('.post-content1').html(posts[post].post_content1);
						$post.find('.post-content2').html(posts[post].post_content2);
						$post.find('.post-content3').html(posts[post].post_content3);
						content.append($post);
					}
					content.animate({
						scrollTop: $('#post-' + posts[0].ID).offset().top + (content.scrollTop()- content.offset().top)
					}, 200);
				}

				postHandler(initialPosts);

				more.click(function(){  
					more.empty().append(progressElement);
					$.ajax({
						type: 'GET',
						cache: false,
						data:{  
							'start': start,  
							'desiredPosts': desiredPosts  
							} 
					}).success(function (data, text) {
					
						data = JSON.parse(data);
						if (data.length > 0){
							start += data.length;
							counter.html(start);
							postHandler(data);
						}
						else{
							$alert = alerts.requestEmpty;
							widget.prepend($alert);
							progressBar.css('width', '100%');
							window.setTimeout(function(){more.remove()}, 1000);
							window.setTimeout(function(){$alert.remove()}, 4000);
						}
					}).error(function (request, status, error) {
						$alert = alerts.requestFailure;
						widget.prepend($alert);
						progressBar.css('width', '100%');
						window.setTimeout(function(){more.html('More <span class="caret"></span>')}, 1000);
					});
				});
			});
		</script>
		
		<style>
		.content
		{
		margin-left:30%;
		width:30%;
		display:run-in;
		}
		</style>
		
		
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="span12">
					<div class="row">
						<div class="span6">
							<div id="widget">
								<h4 id="widget-title">
									Widget Title <span class="badge badge-info"><?php echo $_SESSION['posts_start'] ?>
									</span>
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
