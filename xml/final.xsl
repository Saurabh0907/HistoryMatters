<?xml version="1.0" encoding="ISO-8859-1"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <body>
  <h2 align="center">TIMELINE</h2>
  <table border="1">
    <tr bgcolor="#9acd32">
      <th>YEAR</th>
      <th>DESCRIPTION</th>
    </tr>
    <xsl:for-each select="history/data">
    <tr>
      <td><xsl:value-of select="year"/></td>
      <td><xsl:value-of select="des"/></td>
    </tr>
    </xsl:for-each>
  </table>
  </body>
  </html>
</xsl:template>

</xsl:stylesheet>