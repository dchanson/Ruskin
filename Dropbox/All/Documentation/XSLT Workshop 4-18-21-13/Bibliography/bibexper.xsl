<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns:tei="http://www.tei-c.org/ns/1.0"
    version="2.0">
    <xsl:output method="html" encoding="utf-8"
        doctype-system="http://www.w3.org/TR/html4/loose.dtd"
        doctype-public="-//W3C//DTD HTML 4.01 Transitional//EN"/>
    <xsl:template match="/">
        <html>
            <head></head>
            <body>
                <xsl:apply-templates select="/tei:TEI/tei:teiHeader"/>
                <xsl:apply-templates select="/tei:TEI/tei:text"/>   
            </body>
        </html>
    </xsl:template>
    <xsl:template match="tei:teiHeader"/>
    <xsl:template match= "tei:text">

        <xsl:for-each select="tei:body/tei:listBibl/tei:biblStruct">
            <xsl:sort select="*/tei:author[1]"/>
            <xsl:apply-templates select="*/tei:author"/>
            <xsl:apply-templates select="*/tei:title"/>
            <xsl:apply-templates select="*/tei:edition"/>
            <xsl:apply-templates select="*/tei:editor"/>
            <xsl:apply-templates select="*/tei:respStmt"/>
            <xsl:apply-templates select="*/tei:imprint"/>
        </xsl:for-each>
        
    </xsl:template>
    <xsl:template match="tei:author">
        <xsl:choose>
            <xsl:when test="exists(following-sibling::tei:author)">
                <xsl:value-of select="."/><xsl:text>; </xsl:text>
            </xsl:when>
            <xsl:when test="ends-with(.,'.')">
            <xsl:value-of select="."/><xsl:text> </xsl:text>
            </xsl:when>
            <xsl:otherwise>
                <xsl:value-of select="."/><xsl:text>. </xsl:text>
            </xsl:otherwise>
        </xsl:choose>
    </xsl:template>
    <xsl:template match="tei:title">
        <xsl:choose>
            <xsl:when test="@level='a'">
                <xsl:value-of select="."/><xsl:text>. </xsl:text>
            </xsl:when>
            <xsl:when test="@level='j'">
                <i><xsl:value-of select="."/></i><xsl:text> </xsl:text>
            </xsl:when>
            <xsl:when test="@level='m'">
                <i><xsl:value-of select="."/></i><xsl:text>. </xsl:text>
            </xsl:when>
            <xsl:otherwise><font color="red"><xsl:value-of select="."/></font></xsl:otherwise>
        </xsl:choose>
    </xsl:template>
</xsl:stylesheet>