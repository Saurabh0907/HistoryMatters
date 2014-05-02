
<html>
<head>
<script>
$(“#SearchInput”).focus(function() {
if($(“#SearchInput”).val() == “City Search”) {
$(“#SearchInput”).val(“”);
}
$(“#SearchInput”).css(“color”, “#000000”);
});

$(“#SearchInput”).blur(function() {
if($(“#SearchInput”).val() == “”) {
$(“#SearchInput”).val(“City Search”);
$(“#SearchInput”).css(“color”, “#999999”);
}
$(“#SearchResults”).slideUp();
});
</script>
<style>

#SearchResults {
background: #000000;
display: none;
overflow: auto;
position: absolute;
width: 330px;
z-index: 99;
}

#SearchInput {
background: none;
border: none;
color: #999999;
font-size: 16px;
outline: none;
margin: 20px;
width: 280px;
}

#SearchBox {

float: left;
height: 60px;
width: 305px;
}
#SearchButton {
float: left;
height: 60px;
width: 70px;
}
</style>

<meta http-equiv=”Content-Type” content=”text/html; charset=utf-8”>
</head>
<body>
<form action="" method="POST">
<table style=”margin: auto; width: 975px;”>
<tr>
<td>
<img src=”images/logo.png” />
</td>
<td width=”380”>
<div id=”SearchBox”>
<input id=”SearchInput” name=”SearchInput” value=”City Search” />
</div>

<tr>
<td></td>
<td>
<div style=”position: relative; left: 20px; top: -48px;”>
<div id=”SearchResults”></div>
</div>
</td>
</tr>


<div id=”SearchButton”>
<input type=”image” src=”images/search_button.png” />
</div>
</td>
</tr>
</table>
</form>