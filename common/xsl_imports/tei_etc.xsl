<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0"
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
  xmlns:tei="http://www.tei-c.org/ns/1.0"
  xmlns:xi="http://www.w3.org/2001/XInclude"
  xmlns:custom="http://whatever"
  >

  <!--<div>
  The following uses the <div>s of the XML docment as the <div>s of the HTML document. XML @xml:ids and @types become CSS ids and classes in the
  HTML document such that <div type="section" xml:id="TITLE"> becomes <div id="TITLE" class="section">.-->
  <xsl:template match="tei:div">
    <xsl:choose>

      <xsl:when test="@type='section'">
        <div id="{@xml:id}" class="section">
          <xsl:apply-templates/>
        </div>
      </xsl:when>

      <xsl:when test="@type='subsection'">
        <div id="{@xml:id}" class="subsection">
          <xsl:apply-templates/>
        </div>
      </xsl:when>

      <xsl:when test="@type='sub-subsection'">
        <div id="{@xml:id}" class="sub-subsection">
          <xsl:apply-templates/>
        </div>
      </xsl:when>

      <xsl:when test="@subtype">
        <div class="{@type}">
          <div class="{@subtype}" id="{@xml:id}">
            <xsl:apply-templates/>
          </div>
        </div>
      </xsl:when>

      <xsl:when test="@type">
        <div class="{@type}" id="{@xml:id}">
          <xsl:apply-templates/>
        </div>
      </xsl:when>

      <xsl:otherwise>
        <div>
          <xsl:apply-templates/>
        </div>
      </xsl:otherwise>

    </xsl:choose>
  </xsl:template>

  <!--<pb>
  The following transforms each <pb> in the XML document into a <br> in the HTML document. The variable facsVar is used to output <br id="_"/>,
  where _ is extracted from the <pb>'s @facs.-->
  <xsl:template match="tei:pb" name="tei:pb">
    <xsl:variable name="facsVar">&#x003C;div id=&#x0022;<xsl:value-of select="@facs"/>&#x0022; class=&#x0022;pb&#x0022;&#x003E;</xsl:variable>
    <xsl:value-of select="$facsVar" disable-output-escaping="yes"/>
    <xsl:value-of select="$xdivVar" disable-output-escaping="yes"/>
  </xsl:template>

  <!--<fw>-->
  <xsl:template match="tei:fw">
    <xsl:variable name="fwVar">&#x003C;div class=&#x0022;<xsl:value-of select="@type"/>-<xsl:value-of select="@place"/>&#x0022;&#x003E;</xsl:variable>
    <xsl:value-of select="$fwVar" disable-output-escaping="yes"/>
    <xsl:apply-templates/>
    <xsl:value-of select="$xdivVar" disable-output-escaping="yes"/>
    <xsl:value-of select="$brVar" disable-output-escaping="yes"/>
  </xsl:template>



  <!--<p>-->
  <xsl:template match="tei:p">
    <div class="p">
      <xsl:apply-templates/>
    </div>
  </xsl:template>

  <!--<list>-->
  <xsl:template match="tei:list">
    <ul>
      <xsl:apply-templates/>
    </ul>
  </xsl:template>

  <!--<item>-->
  <xsl:template match="tei:item">
    <xsl:choose>
      <xsl:when test="@xml:id">
        <li id="{@xml:id}">
          <xsl:apply-templates/>
        </li>
      </xsl:when>
      <xsl:otherwise>
        <li>
          <xsl:apply-templates/>
        </li>
      </xsl:otherwise>
    </xsl:choose>


  </xsl:template>

    <xsl:template match="tei:gap">
      <xsl:choose>

        <!--Corrected 04/10/16; kempe.xsl to be updated.-->

        <xsl:when test="@reason and @extent='several words'">
          <span class="gap-{string(@reason)}" style="padding-left: 8em"> </span>
        </xsl:when>

        <xsl:when test="@extent='several words'">
          <span class="gap" style="padding-left: 8em"> </span>
        </xsl:when>

        <xsl:when test="@reason and @extent='several characters'">
          <span class="gap-{string(@reason)}" style="padding-left: 2em"> </span>
        </xsl:when>

        <xsl:when test="@extent='several characters'">
          <span class="gap" style="padding-left: 2em"> </span>
        </xsl:when>

        <xsl:otherwise>
          <xsl:variable name="gapVar">&#x003C;span class="gap" style=&#x0022;padding-left:<xsl:value-of select="(format-number((@extent * 0.4), '0.0'))"/>em&#x0022;&#x003E;&#x00A0;&#x003C;/span&#x003E;</xsl:variable>
          <xsl:value-of select="$gapVar" disable-output-escaping="yes"/>
        </xsl:otherwise>

      </xsl:choose>
    </xsl:template>

    <!--<unclear>-->
    <xsl:template match="tei:unclear">
      <xsl:choose>

        <xsl:when test="@reason">
          <span class="unclear-{@reason}-{substring-after(@resp, '#')}">
            <xsl:apply-templates/>
          </span>
        </xsl:when>

        <xsl:otherwise>
          <span class="unclear-{substring-after(@resp, '#')}">
            <xsl:apply-templates/>
          </span>
        </xsl:otherwise>

      </xsl:choose>

    </xsl:template>

    <!--<supplied>-->
    <xsl:template match="tei:supplied">
      <span class="supplied-{substring-after(@resp, '#')}">
        <xsl:apply-templates/>
      </span>
    </xsl:template>

    <!--<lb>
    The following transforms each <lb> in the XML document into a <br> in the HTML document - unless the <lb> is part of a runover (a special
    transformation for this is included later in this XSL document).-->
    <xsl:template match="tei:lb">
      <xsl:choose>

        <xsl:when test="@type='runover' and following-sibling::*[1][self::tei:space]">
          <xsl:call-template name="custom:printLineNumber" />
          <xsl:variable name="runoverVar">&#x003C;span class=&#x0022;runover&#x0022; style=&#x0022;left:<xsl:value-of select="(format-number((following-sibling::*[1][self::tei:space]/@quantity * 0.4), '0.0'))"/>em&#x0022;&#x003E;</xsl:variable>
          <xsl:value-of select="$runoverVar" disable-output-escaping="yes"/>
        </xsl:when>

        <xsl:when test="@type='runover'">
          <xsl:call-template name="custom:printLineNumber" />
          <xsl:variable name="runoverVar">&#x003C;span class=&#x0022;runover&#x0022;&#x003E;</xsl:variable>
          <xsl:value-of select="$runoverVar" disable-output-escaping="yes"/>
        </xsl:when>

        <xsl:otherwise>
          <xsl:value-of select="$brVar" disable-output-escaping="yes"/>
        </xsl:otherwise>

      </xsl:choose>
    </xsl:template>

    <!--</g>-->
    <xsl:template match="tei:g">
      <xsl:choose>

        <xsl:when test="@type='justification'">
          <xsl:variable name="gVar">&#x003C;div class="g-justification" style=&#x0022;width:<xsl:value-of select="(format-number((@n * 0.4), '0.0'))"/>em&#x0022;&#x003E;&#x00A0;&#x003C;/div&#x003E;</xsl:variable>
          <xsl:value-of select="$gVar" disable-output-escaping="yes"/>
        </xsl:when>

        <xsl:otherwise>
          <span class="g-{string(@type)}">
            <xsl:apply-templates/>
          </span>
        </xsl:otherwise>

      </xsl:choose>
    </xsl:template>

    <!--metamark-->
    <xsl:template match="tei:metamark">
      <xsl:choose>

        <xsl:when test="@function and @target">
          <span class="metamark-{string(@function)}-{substring-after(@target, '#')}">
            <xsl:apply-templates/>
          </span>
        </xsl:when>

        <xsl:when test="@function">
          <span class="metamark-{string(@function)}">
            <xsl:apply-templates/>
          </span>
        </xsl:when>

      </xsl:choose>
    </xsl:template>

    <!--<milestone>-->
    <xsl:template match="tei:milestone">
      <xsl:variable name="milestoneVar">&#x003C;div class=&#x0022;<xsl:value-of select="substring-after(@rend, 'hr-')"/>&#x0022;&#x003E;</xsl:variable>
      <xsl:value-of select="$milestoneVar" disable-output-escaping="yes"/>
      <xsl:value-of select="$xdivVar" disable-output-escaping="yes"/>
    </xsl:template>

    <!--<note>-->

    <xsl:template match="tei:note">
      <xsl:choose>

        <xsl:when test="@type='gloss'">
          <xsl:variable name="noteVar">&#x003C;span class=&#x0022;note-gloss-<xsl:value-of select="substring-after(@resp, '#')"/>&#x0022;&#x003E;</xsl:variable>
          <xsl:value-of select="$noteVar" disable-output-escaping="yes"/>
          <xsl:apply-templates/>
          <xsl:value-of select="$xspanVar" disable-output-escaping="yes"/>
        </xsl:when>

        <xsl:otherwise>
          <span id="{@xml:id}">
            <xsl:apply-templates/>
          </span>
          <br/>
          <br/>
        </xsl:otherwise>

      </xsl:choose>
    </xsl:template>

    <!--<sic>-->

    <xsl:template match="tei:sic">
      <span class="sic"><xsl:apply-templates/> &#x005B;sic&#x005D;</span>
    </xsl:template>

    <!--T I T L E S
    The following transforms <title>s in the XML document into <span>s in the HTML document. XML @types, @corresps, and @rends become parts of a CSS
    class in the HTML document such that <title type="anthology corresp="#POEMS1850" rend="italic">Poems</title> becomes
    <span class="title-anthology-POEMS1850-italic>Poems</span>.-->

    <xsl:template match="tei:title" name="tei:title">

      <xsl:choose>

        <xsl:when test="@type and @corresp and @rend">
          <span class="title-{string(@type)}-{substring-after(@corresp, '#')}-{string(@rend)}">
            <xsl:apply-templates/>
          </span>
        </xsl:when>

        <xsl:when test="@type and @corresp">
          <span class="title-{string(@type)}-{substring-after(@corresp, '#')}">
            <xsl:apply-templates/>
          </span>
        </xsl:when>

        <xsl:when test="@corresp">
          <span class="title-{substring-after(@corresp, '#')}">
            <xsl:apply-templates/>
          </span>
        </xsl:when>

      </xsl:choose>
    </xsl:template>

    <!--D A T E S-->
    <xsl:template match="tei:date">
      <xsl:choose>

        <xsl:when test="@notBefore and @notAfter">
          <span class="date-{string(@notBefore)}-{string(@notAfter)}">
            <xsl:apply-templates/>
          </span>
        </xsl:when>

        <xsl:when test="@when">
          <span class="date-{string(@when)}">
            <xsl:apply-templates/>
          </span>
        </xsl:when>

      </xsl:choose>
    </xsl:template>

  </xsl:stylesheet>
