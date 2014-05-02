<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<html>

<div id='main_hist'>
<xsl:for-each select="history/tv18">
			<img src ="<xsl:value-of select='imagelink' />" />
			<p id='xx'><xsl:value-of select="header" /></p>
			<p id='xx1'><xsl:value-of select="des" /></p>
			<a id='xx2' href="<xsl:value-of select='link' />" target='_blank' style='text-decoration:none;'>View Details</a> 
			<xsl:value-of select="link" />
</xsl:for-each>

<p style='align:center'><a id='xx2' href='i2.php' target='_blank' style='text-decoration:none'>Click To View All</a></p>;

</html>