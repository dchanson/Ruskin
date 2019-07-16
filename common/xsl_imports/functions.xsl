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
  
  <xsl:function name="custom:printFiliations">
    <xsl:param name="refs" />
    
    <xsl:for-each select="$refs">
      <xsl:variable name='justNameVar'>
        <xsl:call-template name="string-replace-all">
          <xsl:with-param name="text" select="./@target" />
          <xsl:with-param name="replace" select="'.php'" />
          <xsl:with-param name="by" select="''" />
        </xsl:call-template>
      </xsl:variable>
      
      <xsl:variable name="aVar">
        &#x003C;a href=&#x022;<xsl:value-of select="$newServerPath"/>/<xsl:value-of select="$justNameVar" />&#x022;&#x003E;<xsl:value-of select='.' />&#x003C;/a&#x003E;
      </xsl:variable>
      <xsl:value-of select="$aVar" disable-output-escaping="yes" />
      <xsl:value-of select="$brVar" />
    </xsl:for-each>
    
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


  <xsl:template name="custom:render_anchor">
    <xsl:param name="href" />
    <xsl:param name="target" select="'_blank'" />
    
    <xsl:text disable-output-escaping="yes">&lt;a href="</xsl:text>
    <xsl:value-of select="$href" disable-output-escaping="yes" />
    <xsl:text disable-output-escaping="yes">" target="</xsl:text>
    <xsl:value-of select="$target" disable-output-escaping="yes" />
    <xsl:text disable-output-escaping="yes">"&gt;</xsl:text>
    <xsl:apply-templates />
    <xsl:text disable-output-escaping="yes">&lt;/a&gt;</xsl:text>
  </xsl:template>
  
  <xsl:template name="custom:build_url_and_render_anchor">
    <xsl:param name="href" />
    <xsl:param name="target" select="'_self'" />
    
    <xsl:choose>
      <xsl:when test="not($htmlForm)">
        <xsl:variable name="href">&lt;?php echo r_build_url(&quot;<xsl:value-of select="$href"/>&quot;);?&gt;</xsl:variable>
        
        <xsl:call-template name="custom:render_anchor">
          <xsl:with-param name="href" select="$href" />
          <xsl:with-param name="target" select="$target" />
        </xsl:call-template>
      </xsl:when>
      <xsl:otherwise>
        <xsl:variable name="href"><xsl:value-of select="concat('/', substring-before($href, '.php'), substring-after($href, '.php'))"/></xsl:variable>
        
        <xsl:call-template name="custom:render_anchor">
          <xsl:with-param name="href" select="$href" />
          <xsl:with-param name="target" select="$target" />
        </xsl:call-template>
      </xsl:otherwise>
    </xsl:choose>
    
  </xsl:template>
  
</xsl:stylesheet>
