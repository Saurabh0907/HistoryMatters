<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
<script src="ajaxconcept_tb.js"></script>
<script src="JS/Login_formvalidation.js"></script>
<script src="JS/ajaxroutine.js"></script>
<link rel="stylesheet" href="CSS/Loginform.css">
<script>
function createpoststring(){
var email=document.getElementById("LoginUserForm").email.value //get value to post from a form field
var pwd=document.getElementById("LoginUserForm").password.value //get value to post from a form field
var poststr = "email=" + encodeURI(email) + "&password=" + encodeURI(pwd)
return poststr
}

//Step 3: Invoke the Ajax routine method to make the desired Ajax request.
var poststr=createpoststring() //Get contents to post and create query string first
ajaxpack.postAjaxRequest("Login_Login_db1.php", poststr, processGetPost, "txt")
</script>


<div id="login">
 <h2>Login</h2>
 <form id="LoginUserForm" name="LoginUserForm">
 	<fieldset>
        <p><input id="email" name="email" type="email" class="text" value="" placeholder="Email"/></p>
        
        <p><input id="password" name="password" class="text" type="password" placeholder="Password"/></p>
                
        <p>
			<a href="main.php" title="Go To Home Page" id="Home_User" ></a>
			<button id="LoginOld" type="submit" name="continue" value="submit" onClick="return checklogin();">Login</button>
        </p>
 	</fieldset>

 </form>
</div>


