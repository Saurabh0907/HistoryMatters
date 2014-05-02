
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
	<html>
	<head>
	</head>
	<body>
		<h1> Employee details starting employee name with 'p' or 'n' </h1>
		<table border="2">
			<tr>
				<th>	Employee Name	</th>
				<th>	Street			</th>
				<th>	City			</th>
			</tr>
			<xsl:for-each select="data/employee">
				<tr>
					<td>	<xsl:value-of select="employee_name"/> </td>
					<td>	<xsl:value-of select="street"/>	   	  </td>
					<td>	<xsl:value-of select="city"/>		  </td>
				</tr>
			</xsl:for-each>
		</table>
	</body>
	</html>
</xsl:template>
</xsl:stylesheet>