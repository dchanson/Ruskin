<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0"
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
  xmlns:tei="http://www.tei-c.org/ns/1.0"
  xmlns:xi="http://www.w3.org/2001/XInclude"
  xmlns:teix="http://www.tei-c.org/ns/Examples"
  xmlns:custom="http://whatever"
  >
  <!--<table>-->
  <xsl:template match="tei:table">
    <xsl:choose>

      <xsl:when test="@xml:id">
        <xsl:variable name="tableVar">&#x003C;table id=&#x0022;<xsl:value-of select="@xml:id"/>&#x0022;&#x003E;</xsl:variable>
        <xsl:value-of select="$tableVar" disable-output-escaping="yes"/>
        <xsl:apply-templates/>
        <xsl:value-of select="$xtableVar" disable-output-escaping="yes"/>
      </xsl:when>

      <xsl:otherwise>
        <table>
          <xsl:apply-templates/>
        </table>
      </xsl:otherwise>

    </xsl:choose>
  </xsl:template>

  <!--<row>-->
  <xsl:template match="tei:row">
    <xsl:choose>

      <xsl:when test="@role='label'">
        <tr class="label">
          <xsl:apply-templates/>
        </tr>
      </xsl:when>

      <xsl:when test="@role='data'">
        <tr class="data">
          <xsl:apply-templates/>
        </tr>
      </xsl:when>

    </xsl:choose>
  </xsl:template>

  <!--<cell>-->
  <xsl:template match="tei:cell">
    <td>
      <xsl:apply-templates/>
    </td>
  </xsl:template>


</xsl:stylesheet>
