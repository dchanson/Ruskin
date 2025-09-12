<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0"
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
  xmlns:tei="http://www.tei-c.org/ns/1.0"
  xmlns:xi="http://www.w3.org/2001/XInclude"
  xmlns:teix="http://www.tei-c.org/ns/Examples"
  xmlns:custom="http://whatever">

  <!-- 
    C H A R A C T E R   R E F E R E N C E S
    The following Unicode-hexadecimal character references are used in this XSL document:
    
    Character Reference         Character Name
    &#x0022;                    double quotation marks
    &#x003C;                    left angle bracket
    &#x003E;                    right angle bracket
    &#x00A0;                    non-breaking space
    &#x0009;                    tab
    &#x000D;                    carriage return
  -->

  <xsl:output method="html" encoding="UTF-8" use-character-maps="uni-hex"/>

  <xsl:character-map name="uni-hex">

    <!--
      SPECIAL CHARACTER REFERENCES
      The following character references may not be supported by common fonts, may require a specialized webfont for display,
      and/or may be used in a specialized manner by this project (described after "used here..." in the comments right).
    -->

    <!-- Example: Pilcrow sign/Paragraph sign -->
    <xsl:output-character character="&#x00B6;" string="&#x00B6;"/>       <!-- Pilcrow sign (paragraph sign) -->

    <!-- Example: Modifer letter circumflex accent -->
    <xsl:output-character character="&#x02C6;" string="&#x02C6;"/>       <!-- Modifier letter circumflex accent (used to mark where text should be inserted) -->

    <!-- Example: Caron (used to mark where text should be inserted) -->
    <xsl:output-character character="&#x02C7;" string="&#x02C7;"/>       <!-- Caron (used to mark where text should be inserted) -->

    <!-- Example: Left square bracket upper corner -->
    <xsl:output-character character="&#x23A1;" string="&#x23A1;"/>       <!-- Left square bracket upper corner -->

    <!-- Example: Wavy line -->
    <xsl:output-character character="&#xF1F9;" string="&#xF1F9;"/>       <!-- Wavy line -->

    <!--
      STANDARD CHARACTER REFERENCES
      The following character references are widely supported by common fonts.
    -->

    <xsl:output-character character="&#x0024;" string="&#x0024;"/>       <!-- Dollar sign -->
    <xsl:output-character character="&#x0025;" string="&#x0025;"/>       <!-- Percent sign -->
    <xsl:output-character character="&#x0026;" string="&#x0026;"/>       <!-- Ampersand -->
    <xsl:output-character character="&#x002A;" string="&#x002A;"/>       <!-- Asterisk -->
    <xsl:output-character character="&#x002B;" string="&#x002B;"/>       <!-- Plus sign -->
    <xsl:output-character character="&#x003C;" string="&#x003C;"/>       <!-- Less than sign -->
    <xsl:output-character character="&#x003D;" string="&#x003D;"/>       <!-- Equals sign -->
    <xsl:output-character character="&#x003E;" string="&#x003E;"/>       <!-- Greater than sign -->
    <xsl:output-character character="&#x0040;" string="&#x0040;"/>       <!-- At sign -->
    <xsl:output-character character="&#x005B;" string="&#x005B;"/>       <!-- Left square bracket -->
    <xsl:output-character character="&#x005D;" string="&#x005D;"/>       <!-- Right square bracket -->
    <xsl:output-character character="&#x007C;" string="&#x007C;"/>       <!-- Vertical line -->
    <xsl:output-character character="&#x007E;" string="&#x007E;"/>       <!-- Tilde -->
    <xsl:output-character character="&#x00A2;" string="&#x00A2;"/>       <!-- Cent sign -->
    <xsl:output-character character="&#x00A3;" string="&#x00A3;"/>       <!-- Pound sign -->
    <xsl:output-character character="&#x00A9;" string="&#x00A9;"/>       <!-- Copyright sign -->
    <xsl:output-character character="&#x00BC;" string="&#x00BC;"/>       <!-- One quarter -->
    <xsl:output-character character="&#x00BD;" string="&#x00BD;"/>       <!-- One half -->
    <xsl:output-character character="&#x00BE;" string="&#x00BE;"/>       <!-- Three quarters -->
    <xsl:output-character character="&#x00D7;" string="&#x00D7;"/>       <!-- Multiplication sign -->
    <xsl:output-character character="&#x00E9;" string="&#x00E9;"/>       <!-- Latin small letter e with acute -->
    <xsl:output-character character="&#x00F7;" string="&#x00F7;"/>       <!-- Division sign -->
    <xsl:output-character character="&#x02BC;" string="&#x02BC;"/>       <!-- Apostrophe -->
    <xsl:output-character character="&#x2010;" string="&#x2010;"/>       <!-- Hyphen -->
    <xsl:output-character character="&#x2013;" string="&#x2013;"/>       <!-- En dash -->
    <xsl:output-character character="&#x2014;" string="&#x2014;"/>       <!-- Em dash -->
    <xsl:output-character character="&#x2016;" string="&#x2016;"/>       <!-- Double vertical line -->
    <xsl:output-character character="&#x2018;" string="&#x2018;"/>       <!-- Left single quotation mark -->
    <xsl:output-character character="&#x2019;" string="&#x2019;"/>       <!-- Right single quotation mark -->
    <xsl:output-character character="&#x201C;" string="&#x201C;"/>       <!-- Left double quotation mark -->
    <xsl:output-character character="&#x201D;" string="&#x201D;"/>       <!-- Right double quotation mark -->
    <xsl:output-character character="&#x2038;" string="&#x2038;"/>       <!-- Caret -->
    <xsl:output-character character="&#x2190;" string="&#x2190;"/>       <!-- Leftwards arrow -->
    <xsl:output-character character="&#x2191;" string="&#x2191;"/>       <!-- Upwards arrow -->
    <xsl:output-character character="&#x2192;" string="&#x2192;"/>       <!-- Rightwards arrow -->
    <xsl:output-character character="&#x2193;" string="&#x2193;"/>       <!-- Downwards arrow -->
    <xsl:output-character character="&#x2196;" string="&#x2196;"/>       <!-- North west arrow -->
    <xsl:output-character character="&#x2197;" string="&#x2197;"/>       <!-- North east arrow -->
    <xsl:output-character character="&#x2198;" string="&#x2198;"/>       <!-- South east arrow -->
    <xsl:output-character character="&#x2199;" string="&#x2199;"/>       <!-- South west arrow -->
    <xsl:output-character character="&#x2212;" string="&#x2212;"/>       <!-- Minus sign -->
    <xsl:output-character character="&#x3008;" string="&#x3008;"/>       <!-- Left angle bracket -->
    <xsl:output-character character="&#x3009;" string="&#x3009;"/>       <!-- Right angle bracket -->

  </xsl:character-map>
</xsl:stylesheet>