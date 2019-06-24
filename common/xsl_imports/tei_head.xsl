<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0"
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
  xmlns:tei="http://www.tei-c.org/ns/1.0"
  xmlns:xi="http://www.w3.org/2001/XInclude"
  xmlns:teix="http://www.tei-c.org/ns/Examples"
  xmlns:custom="http://whatever"
  >
  <!--<head>
  child::*[1][self::tei:space] is used here to test whether the first child element of the <head> is a <space>. If it is, speacial processing (see
  <space>) of the <head> is performed before its content is output to a <div>.

  ancestor::*[tei:teiHeader/@type='witness'] is used here to test wether the the ancestor element <teiHeader> is of the @type witness. If it is
  not, normal processing is performed. Otherwise, the content of the <head> is centered within a <div> before normal processing is performed. This
  enables the title of an apparatus, essay, or note to be rendered according to styles.css and the title of a witness to be centered by default.

  Normal processing is also performed for <head>s with the @types section and subsection.-->

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

          <!--<xsl:when test="not(ancestor::*[tei:teiHeader/@type='witness'])">
          <div class="title">
          <xsl:apply-templates/>
        </div>
      </xsl:when>-->

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
