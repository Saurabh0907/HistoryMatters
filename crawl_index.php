<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<style>
			
			
			#SearchBox {
				background: url('images/search_box.png');
				float: left;
				height: 60px;
				width: 305px;
			}
			
			#SearchButton {
				float: left;
				height: 60px;
				width: 70px;
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
			
			#SearchResults {
				background: #000000;
				display: none;
				overflow: auto;
				position: absolute;
				width: 330px;
				z-index: 99;
			}
			
			#SearchResults a {
				color: #FFFFFF;
				display: block;
				padding: 5px 5px 5px 15px;
				text-decoration: none;
			}
			
			#SearchResults a .highlight {
				color: #0099FF;
			}
			
			#SearchResults a:hover {
				color: #333333;
				background: #CCCCFF;
				text-decoration: underline;
			}
			
			
				
		</style>
		<script type="text/javascript" src="scripts/jquery-1.3.2.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
			
				$("#SearchInput").focus(function() {
					if($("#SearchInput").val() == "City Search") {
						$("#SearchInput").val("");
					}
					$("#SearchInput").css("color", "#000000");
				});
				
				$("#SearchInput").blur(function() {
					if($("#SearchInput").val() == "") {
						$("#SearchInput").val("City Search");
						$("#SearchInput").css("color", "#999999");
					}
					$("#SearchResults").slideUp();
				});
				
				$("#SearchInput").keydown(function(e) {
					if(e.which == 8) {
						SearchText = $("#SearchInput").val().substring(0, $("#SearchInput").val().length-1);
					}
					else {
						SearchText = $("#SearchInput").val() + String.fromCharCode(e.which);
					}
					$("#SearchResults").load("crawl_ajax.php", { SearchInput: SearchText });
					$("#SearchResults").slideDown();
				});
			
			});
		</script>
	</head>
	
<body>

<form action="" method="post">

<table style="margin: auto; width: 975px;">
	<tr>
		<td>
			<img src="images/logo.png" />
		</td>
		<td width="380">
			<div id="SearchBox">
				<input id="SearchInput" name="SearchInput" value="City Search" />
			</div>
			<div id="SearchButton">
				<input type="image" src="images/search_button.png" />
			</div>
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
			<div style="position: relative; left: 20px; top: -20px;">
				<div id="SearchResults"></div>
			</div>
		</td>
	</tr>
</table>

</form>

</body>
</html>