<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns:sm="http://www.sitemaps.org/schemas/sitemap/0.9">

<xsl:template match="/">
   <html>
   	<head>
   		<style type="text/css">
         body {
            font-size:14px;
            font-family: Arial;
            font-weight: 900;
            background-color: #eee;
            text-align:center;
         }
         table{
         	margin: 0 auto;
            border-radius:5px;
         }
         h3{
         	font-size: 32px;
            font-family: Arial;
            font-weight: 900;
            color:#FD7777;
            text-transform: uppercase;
         }
         td {
         	height:50px;
         	padding: 5px;
         	background-color: rgba(0, 0, 0, 0.5);
            border-radius:5px;
         }
         .whitecol {
         	background-color: rgba(255, 255, 255, 0.5);;
         }
         a  {
         	text-decoration: none;
         	color:white;
         }
         a:hover{
         	color: #FD7777;
         }
      </style>
   	</head>
      <body>
	      <h3> Diamonds </h3>
				<table>
					<tr bgcolor="#FD7777">
					  <th>Location</th>
						<th>Last modification Date</th>
						<th>Change Frequency</th>
						<th>Priority</th>
					</tr>
					<xsl:for-each select="sm:urlset/sm:url">
						<tr>
								<td>
									<xsl:element name="a">
							            <xsl:attribute name="href">
							               <xsl:value-of select="sm:loc"/>
							            </xsl:attribute>
							            <xsl:value-of select="sm:loc"/>
         							</xsl:element>
								</td>
								<td class="whitecol"><xsl:value-of select="sm:lastmod"/></td>
								<td class="whitecol"><xsl:value-of select="sm:changefreq"/></td>
								<td class="whitecol"><xsl:value-of select="sm:priority"/></td>
					    </tr>
					</xsl:for-each>
			  	</table>
	  </body>
   </html>
</xsl:template>
</xsl:stylesheet>
