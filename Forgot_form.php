
<html>
<head>

<title></title>
<script>
function forgot()
{
var z = document.FForm.email.value;
				var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
				if (!(z.match(mailformat)))
					{
						alert("Not a valid e-mail address");
						return false;
					}
					return true;
}

</script>
<style type="text/css">


html{margin: 0; padding: 0; border: none;}
	

        #registration {
				position:absolute;
				margin-top:7%;
				margin-left:31%;
				font-family:sans-serif; 
				font-size: 12px;
				-webkit-user-select: none;
				color: #fff;
				background-color:#1d1711;
				-webkit-border-radius: 10px;
				-moz-border-radius: 10px; border-radius: 10px;*/
				margin: 20px;
				width: 32%;
					}

#registration a {
				color: #8c910b;
				text-shadow: 0px -1px 0px #000;
      }
	  
#registration fieldset {
				padding: 20px;
      }
	  
input.text {
      -webkit-border-radius: 15px;
      -webkit-box-shadow: 0px 2px 15px #999;
	 		  
	  -moz-border-radius: 15px;
      -moz-box-shadow: 0px 5px 15px #777;
		
	  border-radius: 10px;
      background: #fff url('images/formicon.png') no-repeat;
	  
	  border:none;
      
	  font-size: 14px;
      width: 100%;
      padding: 7px 8px 7px 30px;
      color:#1d1711;
      
}	  

 input#email { 
 	background-position: 4px 5px;
	}
	
	
#registration h2 {
	color: #fff;
	text-align: center;
	padding: 18px;
	margin: 0px;
	font-weight: normal;
	font-size: 24px;
	font-family: Helvetica;
	}
	
	#registration p {
      position: relative;
      }
	
#forgotNew {
	width: 203px;
	height: 40px;
	border: none;
	text-indent: -9999px;
	background: url('images/forgot.png') no-repeat;
	cursor: pointer;
	float: right;
	}
	
	#registerNew:hover { background-position: 0px -41px; }
	#registerNew:active { background-position: 0px -82px; }
	
 
</style>
<script>
$(document).ready( function() {
	$("#forgotNew").click(function(event) {
	event.preventDefault();
	var z = forgot();
	if(z == true)
	{
		
		$.ajax({
			url:"extra.php";,
			success: function(txt) {
				alert("Your Password Has been sent to your email Address");
				$("#fade_div").css({"display":"none"});
				$("#forgot_div").css({"display":"none"});
				document.getElementById("#FForm").reset();
			},
			error: function(txt) {
				console.log(txt);
			},
			cache:false
		});
	}
	else
	{
	
	}
	
	});
});

</script>

</head>

<body>
<div id="main_reg">
<div id="registration">
 <h2>Forgot Password</h2>

 <form id="FForm" name="FForm" method="POST" autocomplete="off">
 	<fieldset>
        <p><input id="email" name="email" type="email" class="text" value="" placeholder="Email"/></p>
        <p>
			<!--<a href="javascript:ajaxpage('login.php','main_reg');" title="Already A User" id="Old_User" class="logleft flip" style="left: 0px; opacity: 1;"></a>-->
            <button id="forgotNew" type="submit" name="continue" value="submit" onClick="return forgot();">Register</button>
        </p>
 	</fieldset>

 </form>
</div>
</div>
</body>
</html>
