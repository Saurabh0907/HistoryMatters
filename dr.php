<html>
<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <style type="text/css" media="screen">
            body {
                font-family: Helvetica, sans-serif;
                margin: 0;
                padding: 10px;
            }


<!--body::
{  
-webkit-scrollbar;
    display: none;
}

body
{  
    overflow: hidden;
}
-->
#rangeV
{
width:440px;
margin-top:210px;
margin-left:47px;

height:10px;
}


            input[type='range'] {
              -webkit-appearance: slider-vertical;
                -webkit-transform:rotate(90deg);
                -webkit-border-radius: 10px;
                -webkit-box-shadow: inset 0 0 5px #333;
                background-color: green;
                display: block;
                height: 10px;
                left: 10px;
                margin: 20px;
		postion:absolute;
                right: 100px;
            }
            input[type='range']::-webkit-slider-thumb {
                -webkit-appearance: square-button;
                -webkit-border-radius: 5px;
                background-color: orange;
        
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%,orange), color-stop(50%,orange), color-stop(51%,orange), color-stop(100%,orange));
                border: 0px solid orange;
                height: 30px;
                width: 30px;
            }

#wrapper
{
margin-left:1050px;
}


#chosen {

border-radius:1100px;
width:45px;
-webkit-appearance: square-button;
padding-top:10px;
padding-bottom:10px;
background-image: -webkit-linear-gradient(orange, orange, orange);
background-image: -o-linear-gradient(top, orange, orange);
background-image: -moz-linear-gradient(top, orange, orange);
text-align:center;
color:orange;
font-weight:bold; font-size:large;
margin-left:1290px;
}




 
           #range {
   -webkit-appearance:vertical;
                display: block;
                font-size: 100%;
                font-weight: bold;
                margin: 30px;
                text-align: center;
            }
#j
{
margin-left:1285px;
margin-top:0px;
}
            
#i
{
margin-left:1285px;
margin-top:215px;
}




#sm
{

height:620px;width:1275px;
postion:relative;
}

.disp_div
{
line-height:200px;
margin-top:10px;
margin-left:80px;
color:red;
font-size:50px;
}
#disp_des
{
color:yellow;
font-family:"Times New Roman",Times,serif;
font-size:40px;
}



#left
{
width=100%;
}



#right
{
postion:fixed;
}


        </style>


<script type="text/javascript">


function updateSlider(slideAmount) 
{
var display = document.getElementById("chosen");


display.innerHTML=slideAmount;
//ajax pass slideAmount;
$.fn.scrollView = function () {
    return this.each(function () {
        $('html, body').animate({
            scrollTop: $(this).offset().top
        }, 500);
    });
}
$('#'+slideAmount).scrollView();
//window.location.hash = '#'+slideAmount;




var pic = document.getElementById("pic");
//set the dimensions
//pic.style.width=slideAmount-"%";
//pic.style.height=slideAmount-"%";



}




</script>

</head>


<body bgcolor="black">

<div id="main">

<div id="right" style="position:fixed;">


<p id="j"><font size=5 color="orange">1800</font></p>

        <div id="wrapper">
            
            <input type="range" id="rangeV" min="1800" max="2013" value="5" step="1" name="1794" onchange="updateSlider(this.value)" >
            
        </div>
<p id="i"><font size=5 color="orange">2013</font></p>
<div id="chosen" align="right">1800</div>

</div>


<div id="left" style="width:100%;">

<?php
$link = mysql_connect('localhost','root','');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db('new_history', $link);
if (!$db_selected) {
    die ('Can\'t use HistoryMatters : ' . mysql_error());
}
		
			
		

		if (!$result) {
				$message  = 'Invalid query: ' . mysql_error();
				$message .= 'Whole query: ' . $query;
				die($message);
					  }


		
$xml=simplexml_load_file("data.xml");

foreach($xml->children() as $child)
  {
  echo  $child . "<br>";
  
  }
?>			  
						
					
					  
					  
?>
</div>
</div>


</body>
</html>

