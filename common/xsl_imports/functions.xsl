<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0"
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
  xmlns:tei="http://www.tei-c.org/ns/1.0"
  xmlns:xi="http://www.w3.org/2001/XInclude"
  xmlns:teix="http://www.tei-c.org/ns/Examples"
  xmlns:custom="http://whatever"
  >
  
  <xsl:function name="custom:printLetterRecursively">
    <xsl:param name="character" />
    <xsl:param name="num_times" />
    
    <xsl:value-of select="$character" />
      
    <xsl:if test="$num_times &gt; 1">
      <xsl:variable name="num_times" select="$num_times - 1" />
      <xsl:value-of select="custom:printLetterRecursively($character, $num_times)" />
    </xsl:if>
  </xsl:function>
  <!-- Generate alphabetic indices-->
  <xsl:function name="custom:getAlphabeticIndex">
    <xsl:param name="number"/>

    <xsl:variable name="val" select="floor($number)" />

    <xsl:variable name="remainder" select="floor(($val - 1) mod 26) + 1"/>
    <xsl:variable name="quotient" select="(($val - $remainder) div 26) + 1"/>
    
    <xsl:variable name="character" select="codepoints-to-string(96 + $remainder)" />
    
    <!-- <xsl:value-of select="$val" /> -->
    <xsl:value-of select="custom:printLetterRecursively($character, $quotient)" />

  </xsl:function>

  
      </xsl:stylesheet>
