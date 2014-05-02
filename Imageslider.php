<html>

<head>
<style>

#slides{

	margin-top:3%;
	margin-left:23.5%;
	width: 700px;
    height: 500px;
	position: absolute;
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
    height: 100%;
    display: none;
    position: absolute;

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
	ttom: 9px;\\
	height: 11px;
	display: block;
	position: absolute;
	text-align: center;
}

.nav-dots .nav-dot {
	top: -5px;
	width: 11px;
	height: 11px;
	margin: 0 4px;
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
<div id="slides">
	<ul class="slides">
			<input type="radio" name="radio-btn" id="img-1" checked />
				<li class="slide-container">
					<div class="slide" style="background:url('C:\Users\Saurabh\Dropbox\HTML5\ts2.jpg');">
						
					</div>
					
					<div id="thevideo" style="display: none;">
						<iframe id="iframe" width="700" height="500" src="http://www.youtube.com/watch?v=fD0tiq5Z0AI" frameborder="0" allowscriptaccess="always" allowfullscreen="false"></iframe>
					</div>
					
					<div class="nav">
							<label for="img-6" class="prev">&#x2039;</label>
							<label for="img-2" class="next">&#x203a;</label>
					</div>
				</li>

			<input type="radio" name="radio-btn" id="img-2" />
				<li class="slide-container">
					<div class="slide">
							<img src="g2.jpg" />
					</div>
					<div class="nav">
							<label for="img-1" class="prev">&#x2039;</label>
							<label for="img-3" class="next">&#x203a;</label>
					</div>
				</li>

			<input type="radio" name="radio-btn" id="img-3" />
				<li class="slide-container">
					<div class="slide">
							<img src="g3.jpg" />
					</div>
					<div class="nav">
							<label for="img-2" class="prev">&#x2039;</label>
							<label for="img-4" class="next">&#x203a;</label>
					</div>
				</li>

			<input type="radio" name="radio-btn" id="img-4" />
				<li class="slide-container">
					<div class="slide">
							<img src="g6.jpg" />
					</div>
					<div class="nav">
							<label for="img-3" class="prev">&#x2039;</label>
							<label for="img-5" class="next">&#x203a;</label>
					</div>
				</li>

			<input type="radio" name="radio-btn" id="img-5" />
				<li class="slide-container">
					<div class="slide">
							<img src="g10.jpg" />
					</div>
					<div class="nav">
							<label for="img-4" class="prev">&#x2039;</label>
							<label for="img-6" class="next">&#x203a;</label>
					</div>
				</li>

			<input type="radio" name="radio-btn" id="img-6" />
				<li class="slide-container">
					<div class="slide">
							<img src="q5.jpg" />
					</div>
					<div class="nav">
							<label for="img-5" class="prev">&#x2039;</label>
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
	</li>
</ul>
</div>

<html>