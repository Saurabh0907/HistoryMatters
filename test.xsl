
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
	<html>
	<head>
	<style>
#xx
{
font-family: Raleway;
font-color:1d1711;
font-weight:bold;
}

#xx1
{
font-family:Din;
font-color:1d1711;
}

#xx2
{
font-family: Raleway;
}

#main_hist
{
margin-top:2%;
}

#main_hist
{
margin-left:4%;
margin-top:4%;
}
.item1
		{
		padding-right:3%;
		width:30%;
		display:inline-block;
		}




</style>

	</head>
	<body>
	<div id='main_hist'>
	<xsl:for-each select="history/tv18">
			<div class='item1'>
			<img src="{imglink}"><xsl:value-of select="imglink"/></img>
			<p id='xx'><xsl:value-of select="header" /></p>
			<p id='xx1'><xsl:value-of select="des" /></p>
			<a id='xx2' href="{link}" target='_blank' style='text-decoration:none;'><xsl:value-of select="link"/>View Details</a>
			</div>
	</xsl:for-each>
	</div>
	
	</body>
	</html>
</xsl:template>
</xsl:stylesheet>