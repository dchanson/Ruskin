<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0"
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
  xmlns:tei="http://www.tei-c.org/ns/1.0"
  xmlns:xi="http://www.w3.org/2001/XInclude"
  xmlns:teix="http://www.tei-c.org/ns/Examples"
  xmlns:custom="http://whatever"
  >

  <xsl:template match="tei:head">
    <xsl:choose>
      
      <xsl:when test="@type='title'">
        <xsl:choose>
          <xsl:when test="child::*[1][self::tei:space]">
            <xsl:choose>

              <xsl:when test="child::*[self::tei:handShift]">                 <!-- Placeholder until <handShift> processing is determined. -->
                <div class="title" id="@{xml:id}">
                  <xsl:apply-templates/>
                </div>
              </xsl:when>

              <xsl:otherwise>
                <div class="title">
                  <xsl:apply-templates/>
                </div>
              </xsl:otherwise>

            </xsl:choose>
          </xsl:when>

          <xsl:when test="ancestor::*[tei:teiHeader/@type='apparatus']">
          
            <div id="top" class="page-title">
              <div class="title-text">
                <xsl:apply-templates/>
              </div>
              <hr />
              <ul class="mini-contents">
                <xsl:for-each select="following-sibling::tei:div[@type='section']">
                  <li>
                    <a href="#{@xml:id}">
                      <xsl:value-of select="./tei:head" />
                    </a>
                    <xsl:if test="position() &lt; last()">
                      | 
                    </xsl:if>
                </li>
                </xsl:for-each>
              </ul>
            </div>

          
          </xsl:when>

      <xsl:otherwise>
        <h1 class="page-title">
          <xsl:apply-templates/>
        </h1>
      </xsl:otherwise>

    </xsl:choose>
  </xsl:when>

  <xsl:when test="@type='section'">
    <span class="head-section">
      <xsl:apply-templates/>
    </span>
  </xsl:when>

  <xsl:when test="@type='subsection'">
    <span class="head-subsection">
      <xsl:apply-templates/>
    </span>
  </xsl:when>

  <xsl:when test="@type='sub-subsection'">
    <span class="head-sub-subsection">
      <xsl:apply-templates/>
    </span>
  </xsl:when>

  <xsl:when test="@type='table'">
    <div class="head-table" id="{@xml:id}">
      <xsl:apply-templates/>
    </div>
  </xsl:when>

  <xsl:when test="@type">
    <span class="head-{@type}" id="{@xml:id}">
      <xsl:apply-templates/>
    </span>
  </xsl:when>

  <xsl:otherwise>
    <span class="head" id="{@xml:id}">
      <xsl:apply-templates/>
    </span>
  </xsl:otherwise>

</xsl:choose>
</xsl:template>
</xsl:stylesheet>
