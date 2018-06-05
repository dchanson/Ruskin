<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    version="2.0" xmlns:tei="http://www.tei-c.org/ns/1.0"><!-- so will match xml document with declared namespace -->
    <xsl:output method="html" encoding="utf-8"
        doctype-system="http://www.w3.org/TR/html4/loose.dtd"
        doctype-public="-//W3C//DTD HTML 4.01 Transitional//EN"/>
    <xsl:template match="/">
        <html><head><body>
            
        
        <xsl:apply-templates select="/tei:TEI/tei:teiHeader"/>
        <xsl:apply-templates select="/tei:TEI/tei:text"/>
            
        </body></head></html>
    </xsl:template><!-- Why is this needed? doesn't do anything; got a match and go to the next -->
    
    <xsl:template match="tei:teiHeader"/>
    <xsl:template match="tei:text">
        
    
        
        <xsl:template match="biblStruct">
            <html><body><table>
        <xsl:choose>
            <xsl:when test="monogr">
                
        <xsl:for-each select="biblStruct">
                
        <xsl:sort select="author//persName//surname"></xsl:sort>,
        <xsl:sort select="author//persName//forename"></xsl:sort>.
        <xsl:sort select="title[@type='main']"></xsl:sort>:
        <xsl:sort select="title[@type='sub']"></xsl:sort>.
            
        
        </xsl:for-each>
           
            </xsl:when>    
        </xsl:choose>
            </table></body></html>
    </xsl:template>
        
    </xsl:template>
</xsl:stylesheet>