<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0"
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
  xmlns:tei="http://www.tei-c.org/ns/1.0"
  xmlns:xi="http://www.w3.org/2001/XInclude"
  xmlns:teix="http://www.tei-c.org/ns/Examples"
  xmlns:custom="http://whatever"
  >

  <!-- Generate alphabetic indices-->
  <xsl:function name="custom:getAlphabeticIndex">
    <xsl:param name="number"/>

    <xsl:variable name="val" select="floor($number)" />

    <xsl:variable name="remainder" select="floor($val mod 26)"/>
    <xsl:variable name="quotient" select="(($val - $remainder) div 26)"/>


    <xsl:choose>
      <xsl:when test="$quotient &gt; 0">
        <xsl:value-of select="custom:getAlphabeticIndex($quotient)" />
        <xsl:value-of select="codepoints-to-string(96 + $remainder)"/>
      </xsl:when>
      <xsl:otherwise>
        <xsl:value-of select="codepoints-to-string(round(96 + $remainder))"/>
        <!-- <xsl:text>Quotient: </xsl:text><xsl:value-of select="$quotient"/> -->
        <!-- <xsl:text>Remainder: </xsl:text><xsl:value-of select="$remainder"/> -->
      </xsl:otherwise>
    </xsl:choose>

  </xsl:function>

  
      </xsl:stylesheet>
