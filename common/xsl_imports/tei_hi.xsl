<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0"
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
  xmlns:tei="http://www.tei-c.org/ns/1.0"
  xmlns:xi="http://www.w3.org/2001/XInclude"
  xmlns:teix="http://www.tei-c.org/ns/Examples"
  xmlns:custom="http://whatever"
  >
  <!--<hi>
  The following apply HTML styles, such as bold and italic, based on the @rend of an XML <hi>.-->

  <xsl:template match="tei:hi">
    <xsl:choose>

      <xsl:when test="@rend and @rendition">
        <xsl:choose>

          <xsl:when test="@rend='highlight'">
            <xsl:variable name="hiVar">&#x003C;span class=&#x0022;highlight-<xsl:value-of select="substring-after(@rendition, '#')"/>&#x0022;&#x003E;</xsl:variable>
            <xsl:value-of select="$hiVar" disable-output-escaping="yes"/>
            <xsl:apply-templates/>
            <xsl:value-of select="$xspanVar" disable-output-escaping="yes"/>
          </xsl:when>

          <!--The following tests whether the child of a <hi> is an <add> with a @place containing "margin." If the child is, the <hi> is transformed as
          marginalia (see above). Otherwise, if the <hi> includes a @rend containing "box," the <hi> is transformed....-->

          <xsl:when test="child::tei:add[contains(@place, 'margin')]">
            <xsl:choose>

              <xsl:when test="contains(@rend, 'box')">
                <xsl:apply-templates/>
              </xsl:when>

              <xsl:otherwise>
                <xsl:choose>

                  <xsl:when test="contains(@rend, 'box')">
                    <xsl:variable name="hiVar">&#x003C;span class=&#x0022;<xsl:value-of select="@rend"/>-<xsl:value-of select="substring-after(@rendition, '#')"/>&#x0022;&#x003E;</xsl:variable>
                    <xsl:value-of select="$hiVar" disable-output-escaping="yes"/>
                    <xsl:apply-templates/>
                    <xsl:value-of select="$xspanVar" disable-output-escaping="yes"/>
                  </xsl:when>

                </xsl:choose>
              </xsl:otherwise>

            </xsl:choose>
          </xsl:when>

          <xsl:otherwise>
            <xsl:variable name="hiVar">&#x003C;span class=&#x0022;<xsl:value-of select="@rend"/>-<xsl:value-of select="substring-after(@rendition, '#')"/>&#x0022;&#x003E;</xsl:variable>
            <xsl:value-of select="$hiVar" disable-output-escaping="yes"/>
            <xsl:apply-templates/>
            <xsl:value-of select="$xspanVar" disable-output-escaping="yes"/>
          </xsl:otherwise>

        </xsl:choose>
      </xsl:when>
      
      <xsl:when test="@rend='line-beginning'">
        <h2 class="line-beginning">
          <xsl:apply-templates />
        </h2>
      </xsl:when>
      
      <xsl:when test="@rend='bold'">
        <b>
          <xsl:apply-templates/>
        </b>
      </xsl:when>

      <xsl:when test="@rend='box8'">
        <span class="box8">
          <xsl:apply-templates/>
        </span>
      </xsl:when>

      <xsl:when test="@rend='box14'">
        <span class="box14">
          <xsl:apply-templates/>
        </span>
      </xsl:when>

      <xsl:when test="@rend='bold, caps'">
        <span class="bold-caps">
          <xsl:apply-templates/>
        </span>
      </xsl:when>

      <xsl:when test="@rend='caps'">
        <span class="caps">
          <xsl:apply-templates/>
        </span>
      </xsl:when>

      <xsl:when test="@rend='caps, doubleletter'">
        <span class="caps-doubleletter">
          <xsl:apply-templates/>
        </span>
      </xsl:when>

      <xsl:when test="@rend='center'">
        <span class="center">
          <xsl:apply-templates/>
        </span>
      </xsl:when>

      <xsl:when test="@rend='doubleletter'">
        <span class="doubleletter">
          <xsl:apply-templates/>
        </span>
      </xsl:when>

      <xsl:when test="@rend='doubleletter-fill'">
        <span class="doubleletter-fill">
          <xsl:apply-templates/>
        </span>
      </xsl:when>

      <xsl:when test="@rend='dropcap'">
        <div class="dropcap-x{@n}">
          <xsl:apply-templates/>
        </div>
      </xsl:when>

      <xsl:when test="@rend='italic'">
        <i>
          <xsl:apply-templates/>
        </i>
      </xsl:when>

      <xsl:when test="@rend='overwriting'">
        <span class="overwriting">
          <xsl:apply-templates/>
        </span>
      </xsl:when>

      <xsl:when test="@rend='smallcaps'">
        <span class="smallcaps">
          <xsl:apply-templates/>
        </span>
      </xsl:when>

      <xsl:when test="@rend='subscript'">
        <sub>
          <xsl:apply-templates/>
        </sub>
      </xsl:when>

      <xsl:when test="@rend='superscript'">
        <sup>
          <xsl:apply-templates/>
        </sup>
      </xsl:when>

      <xsl:when test="@rend='underline'">
        <u>
          <xsl:apply-templates/>
        </u>
      </xsl:when>

    </xsl:choose>
  </xsl:template>
</xsl:stylesheet>
