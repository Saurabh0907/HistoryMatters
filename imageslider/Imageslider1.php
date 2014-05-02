<?php
mysql_connect("localhost","root","") or die("Error Occurred-".mysql_error());
mysql_select_db("gallery") or die("Unable to select database");

?>

<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // 3. called after the API code downloads.
    var player;
    function onYouTubeIframeAPIReady() {
        // don't need anything here
    }

    // 4. The API will call this function when the video player is ready.
    function onPlayerReady(event) {
        event.target.playVideo();
    }

    function playMe1() {
        if (window.YT) {
            player = new YT.Player('play11', {
                        height: '480',
                        width: '640',
                        videoId: 'r2svkPscDjM',
                        playerVars: { 'autoplay': 0, 'controls': 0, 'rel': 0, 'showinfo': 0 },
                        events: {
                            'onReady': onPlayerReady
                        }
                    });
        }
		
    }
	function playMe2() {
        if (window.YT) {
            player = new YT.Player('play22', {
                        height: '480',
                        width: '640',
                        videoId: 'U2XkdIr8jqo',
                        playerVars: { 'autoplay': 0, 'controls': 0, 'rel': 0, 'showinfo': 0 },
                        events: {
                            'onReady': onPlayerReady
                        }
                    });
        }
    }
	
	
	function playMe3() {
        if (window.YT) {
            player = new YT.Player('play33', {
                        height: '480',
                        width: '640',
                        videoId: '7ISmwH6ShrE',
                        playerVars: { 'autoplay': 0, 'controls': 0, 'rel': 0, 'showinfo': 0 },
                        events: {
                            'onReady': onPlayerReady
                        }
                    });
        }
    }
	
	
	function playMe4() {
        if (window.YT) {
            player = new YT.Player('play44', {
                        height: '480',
                        width: '640',
                        videoId: 'p86TI1aPiCM',
                        playerVars: { 'autoplay': 0, 'controls': 0, 'rel': 0, 'showinfo': 0 },
                        events: {
                            'onReady': onPlayerReady
                        }
                    });
        }
    }
	
	
	function playMe5() {
        if (window.YT) {
            player = new YT.Player('play55', {
                        height: '480',
                        width: '640',
                        videoId: 'xTjLpKYZ0vM',
                        playerVars: { 'autoplay': 0, 'controls': 0, 'rel': 0, 'showinfo': 0 },
                        events: {
                            'onReady': onPlayerReady
                        }
                    });
        }
    }
	
	
	function playMe6() {
        if (window.YT) {
            player = new YT.Player('play66', {
                        height: '480',
                        width: '640',
                        videoId: '6XojmEmy7kw ',
                        playerVars: { 'autoplay': 0, 'controls': 0, 'rel': 0, 'showinfo': 0 },
                        events: {
                            'onReady': onPlayerReady
                        }
                    });
        }
    }
	
	
	function playMe7() {
        if (window.YT) {
            player = new YT.Player('play77', {
                        height: '480',
                        width: '640',
                        videoId: 'dTcwboZ0NB4',
                        playerVars: { 'autoplay': 0, 'controls': 0, 'rel': 0, 'showinfo': 0 },
                        events: {
                            'onReady': onPlayerReady
                        }
                    });
        }
    }
	
	
	function playMe8() {
        if (window.YT) {
            player = new YT.Player('play88', {
                        height: '480',
                        width: '640',
                        videoId: 'zrRcAjuCV-A',
                        playerVars: { 'autoplay': 0, 'controls': 0, 'rel': 0, 'showinfo': 0 },
                        events: {
                            'onReady': onPlayerReady
                        }
                    });
        }
    }
	
	
	function playMe9() {
        if (window.YT) {
            player = new YT.Player('play99', {
                        height: '480',
                        width: '640',
                        videoId: 'n-fDeSIkrYM ',
                        playerVars: { 'autoplay': 0, 'controls': 0, 'rel': 0, 'showinfo': 0 },
                        events: {
                            'onReady': onPlayerReady
                        }
                    });
        }
    }
	
	
	function playMe10() {
        if (window.YT) {
            player = new YT.Player('play1010', {
                        height: '480',
                        width: '640',
                        videoId: 'j_oIQdTZNcc',
                        playerVars: { 'autoplay': 0, 'controls': 0, 'rel': 0, 'showinfo': 0 },
                        events: {
                            'onReady': onPlayerReady
                        }
                    });
        }
    }
	
	
	
</script>
<script>
$(document).ready(function(){
  $("#play1").click(function(){
    $(this).hide();
	playMe1();
	
  });
});

$(document).ready(function(){
  $("#play2").click(function(){
 $(this).hide();
	playMe2().show();
	
  });
});

$(document).ready(function(){
  $("#play3").click(function(){
    $(this).hide();
	playMe3().show();
  });
});

$(document).ready(function(){
  $("#play4").click(function(){
    $(this).hide();
	playMe4().show();
  });
});$(document).ready(function(){
  $("#play5").click(function(){
    $(this).hide();
	playMe5().show();
  });
});$(document).ready(function(){
  $("#play6").click(function(){
    $(this).hide();
	playMe6().show();
  });
});
$(document).ready(function(){
  $("#play7").click(function(){
    $(this).hide();
	playMe7().show();
  });
});
$(document).ready(function(){
  $("#play8").click(function(){
    $(this).hide();
	playMe8().show();
  });
});
$(document).ready(function(){
  $("#play9").click(function(){
    $(this).hide();
	playMe9().show();
  });
});
$(document).ready(function(){
  $("#play10").click(function(){
    $(this).hide();
	playMe10().show();
  });
});



</script>


<style>
p{
	margin-top:7%;
}


#slides{
 margin-top:3%;
	
	margin-left:23.5%;
	width: 700px;
    height:100%;
	position: relative;
	
}

.slides{padding:0;-webkit-user-select: none;-webkit-touch-callout: none;}

.slides input {display: none;}

.slide-container {display: block;}

.slide {
	
    top: 0;
    opacity: 0;
    width: 700px;
    height: 500px;
    position: absolute;

/*    transform: scale(0);
    -moz-transform: scale(0);
    
	
    transition: all .7s ease-in-out;
    -moz-transition: all .7s ease-in-out;*/
	
    -webkit-transform: scale(0);
	-webkit-transition: all 2s ease-in-out;
}


.slide img {
    width: 100%;
    height: 100%;
}

.nav label {
    width: 200px;
    height: 90%;
    display: none;
    position: absolute;
	margin-top:52px;

	  opacity: 0;
    z-index: 9;
    cursor: pointer;

    /*transition: opacity .2s;
    -moz-transition: opacity .2s;*/
    -webkit-transition: opacity .2s;

    color: #FFF;
    font-size: 156pt;
    text-align: center;
    line-height: 450px;
    font-family: "Varela Round", sans-serif;
    background-color: rgba(255, 255, 255, .3);
    text-shadow: 0px 0px 15px rgb(119, 119, 119);
}


.nav label:hover { opacity: 0.5; }

.nav .next { right: 0; }

input:checked + .slide-container  .slide {
    opacity: 1;

    /*transform: scale(1);
    -moz-transform: scale(1);*/
    -webkit-transform: scale(1);

    /*transition: opacity 1s ease-in-out;
    -moz-transition: opacity 1s ease-in-out;*/
    -webkit-transition: opacity 1s ease-in-out;
}

input:checked + .slide-container .nav label { display: block; }

.nav-dots {
	width: 100%;
	margin-top:25px;
	height: 11px;
	display: block;
	position: absolute;
	text-align: center;
}

.nav-dots .nav-dot {
	top: -5px;
	width: 11px;
	height: 11px;
	margin: 0 8px;
	position: relative;
	border-radius: 100%;
	display: inline-block;
	background-color: rgba(200, 200, 200, 0.6);
}

.nav-dots .nav-dot:hover {
	cursor: pointer;
	background-color: rgba(80, 80, 80, 0.8);
}

</style>
<script src="JS/Imageslider.js" ></script>
</head>
<body bgcolor="black">
<font face="verdana" size=5 color="#111111">
<div id="slides">
	<ul class="slides">
	
			<input type="radio" name="radio-btn" id="img-1" checked />
				<li class="slide-container">
					<div class="slide">
					<p align=center>Mehmood Ghaznavi</p>
					
					<div id="play1"><?php echo"<img src='get_img_gallery.php?id=3'/>"; ?></div>
					
					<div id="play11"></div>	
					</div>
					
					
					<div class="nav">
							<label for="img-10" class="prev">&#x2039;</label>
							<label for="img-2" class="next">&#x203a;</label>
					</div>
				</li>

			<input type="radio" name="radio-btn" id="img-2" />
				<li class="slide-container">
					<div class="slide">
					<p align=center>Muhammad of Ghor</p>
							<div id="play2"><?php echo"<img src='get_img_gallery.php?id=4'/>"; ?></div>
							
					
							<div id="play22"></div>
					</div>
					
					
					<div class="nav">
							<label for="img-1" class="prev">&#x2039;</label>
							<label for="img-3" class="next">&#x203a;</label>
					</div>
				</li>

			<input type="radio" name="radio-btn" id="img-3" />
				<li class="slide-container">
					<div class="slide">
					<p align=center>Chandragupta Maurya</p>
							<div id="play3"><?php echo"<img src='get_img_gallery.php?id=2'/>"; ?></div>
							<div id="play33"></div>
					</div>
					<div class="nav">
							<label for="img-2" class="prev">&#x2039;</label>
							<label for="img-4" class="next">&#x203a;</label>
					</div>
				</li>

			<input type="radio" name="radio-btn" id="img-4" />
				<li class="slide-container">
					<div class="slide">
					<p align=center>Sultan Allahudeen Gherzai</p>
							<div id="play4"><?php echo"<img src='get_img_gallery.php?id=5'/>"; ?></div>
							<div id="play44"></div>
					</div>
					<div class="nav">
							<label for="img-3" class="prev">&#x2039;</label>
							<label for="img-5" class="next">&#x203a;</label>
					</div>
				</li>

			<input type="radio" name="radio-btn" id="img-5" />
				<li class="slide-container">
					<div class="slide">
					<p align=center>Sultan Ibrahim Lodhi</p>
					
							<div id="play5"><?php echo"<img src='get_img_gallery.php?id=10'/>"; ?></div>
							<div id="play55"></div>
					</div>
					<div class="nav">
							<label for="img-4" class="prev">&#x2039;</label>
							<label for="img-6" class="next">&#x203a;</label>
					</div>
				</li>

			<input type="radio" name="radio-btn" id="img-6" />
				<li class="slide-container">
					<div class="slide">
					<p align=center>Ashoka</p>
							<div id="play6"><?php echo"<img src='get_img_gallery.php?id=1'/>"; ?></div>
							<div id="play66"></div>
					</div>
					<div class="nav">
							<label for="img-5" class="prev">&#x2039;</label>
							<label for="img-7" class="next">&#x203a;</label>
					</div>
				</li>

				<input type="radio" name="radio-btn" id="img-7" />
				<li class="slide-container">
					<div class="slide">
					<p align=center>Jalaluddin Akbar</p>
							<div id="play7"><?php echo"<img src='get_img_gallery.php?id=6'/>"; ?></div>
							<div id="play77"></div>
					</div>
					<div class="nav">
							<label for="img-6" class="prev">&#x2039;</label>
							<label for="img-8" class="next">&#x203a;</label>
					</div>
				</li>
<input type="radio" name="radio-btn" id="img-8" />
				<li class="slide-container">
					<div class="slide">
					<p align=center>raziya sultan</p>
							<div id="play8"><?php echo"<img src='get_img_gallery.php?id=7'/>"; ?></div>
							<div id="play88"></div>
					</div>
					<div class="nav">
							<label for="img-7" class="prev">&#x2039;</label>
							<label for="img-9" class="next">&#x203a;</label>
					</div>
				</li>
<input type="radio" name="radio-btn" id="img-9" />
				<li class="slide-container">
					<div class="slide">
					<p align=center>sher shah suri</p>
							<div id="play9"><?php echo"<img src='get_img_gallery.php?id=8'/>"; ?></div>
							<div id="play99"></div>
					</div>
					<div class="nav">
							<label for="img-8" class="prev">&#x2039;</label>
							<label for="img-10" class="next">&#x203a;</label>
					</div>
				</li>
<input type="radio" name="radio-btn" id="img-10" />
				<li class="slide-container">
					<div class="slide">
					<p align=center>shivaji </p>
							<div id="play10"><?php echo"<img src='get_img_gallery.php?id=9'/>"; ?></div>
							<div id="play1010"></div>
					</div>
					<div class="nav">
							<label for="img-9" class="prev">&#x2039;</label>
							<label for="img-1" class="next">&#x203a;</label>
					</div>
				</li>

	<li class="nav-dots">
		<label for="img-1" class="nav-dot" id="img-dot-1"></label>
		<label for="img-2" class="nav-dot" id="img-dot-2"></label>
		<label for="img-3" class="nav-dot" id="img-dot-3"></label>
		<label for="img-4" class="nav-dot" id="img-dot-4"></label>
		<label for="img-5" class="nav-dot" id="img-dot-5"></label>
		<label for="img-6" class="nav-dot" id="img-dot-6"></label>
		<label for="img-7" class="nav-dot" id="img-dot-7"></label>
		<label for="img-8" class="nav-dot" id="img-dot-8"></label>
		<label for="img-9" class="nav-dot" id="img-dot-9"></label>
		<label for="img-10" class="nav-dot" id="img-dot-10"></label>
		
	</li>
</ul>
</div>
</font>
</body>
<html>