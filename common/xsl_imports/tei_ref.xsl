<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0"
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
  xmlns:tei="http://www.tei-c.org/ns/1.0"
  xmlns:xi="http://www.w3.org/2001/XInclude"
  xmlns:teix="http://www.tei-c.org/ns/Examples"
  xmlns:custom="http://whatever"
  >
  <!--<REF>
  substring-before is used here to insert what comes before .php in the value of the @target (e.g. so that msi_apparatus.php becomes
  msi_apparatus). The truncated value is then passed to xmlVar.

  xmlVar is used here to pass the XML path to a file (e.g. apparatuses/mis_apparatus.xml) to the doc-available test.

  doc-available checks the XML path. If an XML document exists at the end of that path, an <href> is inserted in the HTML document. Otherwise,
  the <ref> is not transformed.

  phpVar is used here to insert the appropriate php path to a file (e.g. ../apparatuses/msi_apparatus.php, ../essays/poetry_essay.php) based
  upon the @type and @target of a <ref>.-->

  
  <xsl:template match="tei:ref">
    <xsl:variable name="xmlVar"><xsl:value-of select="substring-before(./@target, '.php')"/>.xml</xsl:variable>
    
    <xsl:if test='not(@type)'>
      <xsl:message terminate="yes">"ref" must have a "type" attribute</xsl:message>
    </xsl:if>
        
    <xsl:variable name="justNameVar">
      <xsl:call-template name="string-replace-all">
        <xsl:with-param name="text" select="@target" />
        <xsl:with-param name="replace" select="'.php'" />
        <xsl:with-param name="by" select="''" />
      </xsl:call-template>
    </xsl:variable>
    
    <xsl:choose>
      <xsl:when test="@type='apparatus'">
        <xsl:call-template name="custom:build_url_and_render_anchor">
          <xsl:with-param name="href" select="concat('apparatuses/',@target)" />
          <xsl:with-param name="withoutPhp" select="1" />
        </xsl:call-template>
      </xsl:when>

      <xsl:when test="@type='figure'">
        <xsl:call-template name="custom:build_url_and_render_anchor">
          <xsl:with-param name="href" select="concat('figures/',@target)" />
        </xsl:call-template>
      </xsl:when>

      <xsl:when test="@type='bibliography'">
        <xsl:call-template name="custom:build_url_and_render_anchor">
          <xsl:with-param name="href" select="concat('notes/',@target)" />
          <xsl:with-param name="withoutPhp" select="1" />
        </xsl:call-template>
      </xsl:when>

      <xsl:when test="@type='drawing'">
        <xsl:call-template name="custom:build_url_and_render_anchor">
          <xsl:with-param name="href" select="concat('figures/',@target)" />
        </xsl:call-template>
      </xsl:when>

      <xsl:when test="@type='essay'">
        <xsl:call-template name="custom:build_url_and_render_anchor">
          <xsl:with-param name="href" select="concat('essays/',@target)" />
          <xsl:with-param name="withoutPhp" select="1" />
        </xsl:call-template>
      </xsl:when>

      <xsl:when test="@type='internal'">
        <a href="{@target}">
          <xsl:apply-templates/>
        </a>
      </xsl:when>
      
      <xsl:when test="@type='external'">
        <a href="{@target}" target="_blank">
          <xsl:apply-templates/>
        </a>
      </xsl:when>

      <xsl:when test="@type='note'">
        <xsl:call-template name="custom:build_url_and_render_anchor">
          <xsl:with-param name="href" select="concat('notes/',@target)" />
          <xsl:with-param name="withoutPhp" select="1" />
        </xsl:call-template>
      </xsl:when>

      <xsl:when test="@type='gloss_contextual' or @type='gloss_textual'">
        
        <xsl:variable name="refVar">
          &#x003C;a href=&#x0022;<xsl:value-of select="$newServerPath"/>/glosses/<xsl:value-of select="$justNameVar"/>&#x0022; target=&#x022;_blank&#x022; class=&#x022;inactive&#x022;&#x003E;
          
          <span>
            <xsl:choose>
              <xsl:when test="@type='gloss_textual'">
                <xsl:variable name="nVar" select="floor(count(preceding::tei:ref[@type='gloss_textual'])+1)"/>

                &#x003C;span class=&#x022;gloss-textual&#x022;&#x003E;
                <xsl:value-of select="custom:getAlphabeticIndex($nVar)"/>
                &#x003C;/span&#x003E;

              </xsl:when>
              <xsl:otherwise>
                <xsl:variable name="nVar">
                  <xsl:value-of select="format-number(count(preceding::tei:ref[@type='gloss_contextual'])+1,'0')"/>
                </xsl:variable>
                &#x003C;span class=&#x022;gloss-contextual&#x022;&#x003E;
                <xsl:value-of select="$nVar"/>
                &#x003C;/span&#x003E;
              </xsl:otherwise>
            </xsl:choose>
          </span>
        </xsl:variable>


        <xsl:choose>
          <xsl:when test="doc-available($xmlVar)">
            <span class="glosses">
              <xsl:value-of select="$refVar" disable-output-escaping="yes"/>

              <xsl:value-of select="$xaVar" disable-output-escaping="yes"/>
            </span>
          </xsl:when>

          <!--Code for jQuery- and CSS-controlled inactive links until the document is made available.-->
          <xsl:otherwise>
            <span class="gloss-inline">
              <xsl:value-of select="$refVar" disable-output-escaping="yes"/>

              <xsl:value-of select="$xaVar" disable-output-escaping="yes"/>
            </span>
          </xsl:otherwise>

        </xsl:choose>

      </xsl:when>

      <xsl:when test="@type='webpage'">
        <xsl:call-template name="custom:build_url_and_render_anchor">
          <xsl:with-param name="href" select="concat('webpages/',@target)" />
          <xsl:with-param name="withoutPhp" select="1" />
        </xsl:call-template>
      </xsl:when>

      <xsl:when test="@type='witness'">
        <xsl:call-template name="custom:build_url_and_render_anchor">
          <xsl:with-param name="href" select="concat('witnesses/',@target)" />
        </xsl:call-template>
      </xsl:when>
      
      <xsl:when test="@type='corpus'">
        <xsl:call-template name="custom:build_url_and_render_anchor">
          <xsl:with-param name="href" select="concat('corpuses/',@target)" />
        </xsl:call-template>
      </xsl:when>

    </xsl:choose>
  </xsl:template>
</xsl:stylesheet>
