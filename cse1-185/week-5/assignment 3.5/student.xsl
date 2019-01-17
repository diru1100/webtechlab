<?xml version="1.0"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
 version="1.0">
<xsl:template match="/">
  <html>
  <body>
    <h2>Student Information</h2>
    <table border="1">
	<tr>
	<th align="center">NAME</th>
	<th align="center">BRANCH</th>
	<th align="center">IDENTITYNO</th>
	<th align="center">EMAIL</th>
	</tr>

       <xsl:for-each select="information/user">
        <tr>
          <td align="center"><xsl:value-of select="name"/></td>
          <td align="center"><xsl:value-of select="branch"/></td>
          <td align="center"><xsl:value-of select="id"/></td>
	  <td align="center"><xsl:value-of select="email"/></td>
        </tr>
      </xsl:for-each>
    </table>
  </body>
  </html>
</xsl:template>
</xsl:stylesheet>
