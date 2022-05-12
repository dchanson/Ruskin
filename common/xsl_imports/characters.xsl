<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0"
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
  xmlns:tei="http://www.tei-c.org/ns/1.0"
  xmlns:xi="http://www.w3.org/2001/XInclude"
  xmlns:teix="http://www.tei-c.org/ns/Examples"
  xmlns:custom="http://whatever"
  >
  <!--C H A R A C T E R   R E F E R E N C E S

  C h a r a c t e r s   R e f e r e n c e s   U s e d   in   t h i s   D o c u m e n t
  The following Unicode-hexadecimal character references are used in this XSL document:

  Character Reference         Character Name
  &#x0022;                    double quotation marks
  &#x003C;                    left angle bracket
  &#x003E;                    right angle brackt
  &#x00A0;                    non-breaking space
  &#x0009;                    tab
  &#x000D;                    carriage return

  C h a r a c t e r   R e f e r e n c e s   O u t p u t   i n   H T M L
  The following character map ensures that Unicode-hexadecimal character references - especially those belonging to private use areas used in the
  Medieval Unicode Font Initiative Character Recommendation - are output in HTML. Character references appear after "character=" and are arranged
  alphanumerically; character names appear in the associated comment to the right. PUA character references are marked with an asterisk (*).
  Characters known not to exist in Andron Scripto Web are marked with a double asterisk (**).-->

  <xsl:output method="html" use-character-maps="uni-hex"/>

  <xsl:character-map name="uni-hex">

    <!--SPECIAL CHARACTER REFERENCES
    The following character references may not be supported by common fonts, may require a specialized webfont for display, and/or may be used in
    a specialized manner by this project (described after "used here..." in the comments right).-->

    <xsl:output-character character="&#x00B6;" string="&#x0026;#x00B6;"/>       <!--pilcrow sign/paragraph sign/section sign                                                                                    -->
    <xsl:output-character character="&#x02C6;" string="&#x0026;#x02C6;"/>       <!--modifer letter circumflex accent (used here to mark where text should be inserted)                                          -->
    <xsl:output-character character="&#x02C7;" string="&#x0026;#x02C7;"/>       <!--caron (used here to mark where text should be inserted)                                                                     -->
    <xsl:output-character character="&#x23A1;" string="&#x0026;#x23A1;"/>       <!--left square bracket upper corner                                                                                            -->
    <xsl:output-character character="&#x23A3;" string="&#x0026;#x23A3;"/>       <!--left square bracket lower corner                                                                                            -->
    <xsl:output-character character="&#x23A4;" string="&#x0026;#x23A4;"/>       <!--right square bracket upper corner                                                                                           -->
    <xsl:output-character character="&#x23A6;" string="&#x0026;#x23A6;"/>       <!--right square bracket lower corner                                                                                           -->
    <xsl:output-character character="&#xF1F9;" string="&#x0026;#xF1F9;"/>       <!--wavy line *                                                                                                                 -->

    <!--STANDARD CHARACTER REFERENCES
    The following character references are widely supported by common fonts.-->

    <xsl:output-character character="&#x0024;" string="&#x0026;#x0024;"/>       <!--dollar sign                                                                                                                 -->
    <xsl:output-character character="&#x0025;" string="&#x0026;#x0025;"/>       <!--percent sign                                                                                                                -->
    <xsl:output-character character="&#x0026;" string="&#x0026;#x0026;"/>       <!--ampersand                                                                                                                   -->
    <xsl:output-character character="&#x002A;" string="&#x0026;#x002A;"/>       <!--asterisk                                                                                                                    -->
    <xsl:output-character character="&#x002B;" string="&#x0026;#x002B;"/>       <!--plus sign                                                                                                                   -->
    <xsl:output-character character="&#x003C;" string="&#x0026;#x003C;"/>       <!--less than sign                                                                                                              -->
    <xsl:output-character character="&#x003D;" string="&#x0026;#x003D;"/>       <!--equals sign                                                                                                                 -->
    <xsl:output-character character="&#x003E;" string="&#x0026;#x003E;"/>       <!--greater than sign                                                                                                           -->
    <xsl:output-character character="&#x0040;" string="&#x0026;#x0040;"/>       <!--at sign                                                                                                                     -->
    <xsl:output-character character="&#x005B;" string="&#x0026;#x005B;"/>       <!--left square bracket                                                                                                         -->
    <xsl:output-character character="&#x005D;" string="&#x0026;#x005D;"/>       <!--right square bracket                                                                                                        -->
    <xsl:output-character character="&#x007C;" string="&#x0026;#x007C;"/>       <!--vertical line                                                                                                               -->
    <xsl:output-character character="&#x007E;" string="&#x0026;#x007E;"/>       <!--tilde                                                                                                                       -->
    <xsl:output-character character="&#x00A2;" string="&#x0026;#x00A2;"/>       <!--cent sign                                                                                                                   -->
    <xsl:output-character character="&#x00A3;" string="&#x0026;#x00A3;"/>       <!--pound sign                                                                                                                  -->
    <xsl:output-character character="&#x00A9;" string="&#x0026;#x00A9;"/>       <!--copyright sign                                                                                                              -->
    <xsl:output-character character="&#x00BC;" string="&#x0026;#x00BC;"/>       <!--one quarter                                                                                                                 -->
    <xsl:output-character character="&#x00BD;" string="&#x0026;#x00BD;"/>       <!--one half                                                                                                                    -->
    <xsl:output-character character="&#x00BE;" string="&#x0026;#x00BE;"/>       <!--three quarters                                                                                                              -->
    <xsl:output-character character="&#x00D7;" string="&#x0026;#x00D7;"/>       <!--multiplication sign                                                                                                         -->
    <xsl:output-character character="&#x00E9;" string="&#x0026;#x00E9;"/>       <!--latin small letter e with acute                                                                                             -->
    <xsl:output-character character="&#x00F7;" string="&#x0026;#x00F7;"/>       <!--division sign                                                                                                               -->
    <xsl:output-character character="&#x02BC;" string="&#x0026;#x02BC;"/>       <!--apostrophe                                                                                                                  -->
    <xsl:output-character character="&#x2010;" string="&#x0026;#x2010;"/>       <!--hyphen                                                                                                                      -->
    <xsl:output-character character="&#x2013;" string="&#x0026;#x2013;"/>       <!--en dash                                                                                                                     -->
    <xsl:output-character character="&#x2014;" string="&#x0026;#x2014;"/>       <!--em dash                                                                                                                     -->
    <xsl:output-character character="&#x2016;" string="&#x0026;#x2016;"/>       <!--double vertical line                                                                                                        -->
    <xsl:output-character character="&#x2018;" string="&#x0026;#x2018;"/>       <!--left single quotation mark                                                                                                  -->
    <xsl:output-character character="&#x2019;" string="&#x0026;#x2019;"/>       <!--right single quotation mark                                                                                                 -->
    <xsl:output-character character="&#x201C;" string="&#x0026;#x201C;"/>       <!--left double quotation mark                                                                                                  -->
    <xsl:output-character character="&#x201D;" string="&#x0026;#x201D;"/>       <!--right double quotation mark                                                                                                 -->
    <xsl:output-character character="&#x2038;" string="&#x0026;#x2038;"/>       <!--caret                                                                                                                       -->
    <xsl:output-character character="&#x2190;" string="&#x0026;#x2190;"/>       <!--leftwards arrow                                                                                                             -->
    <xsl:output-character character="&#x2191;" string="&#x0026;#x2191;"/>       <!--upwards arrow                                                                                                               -->
    <xsl:output-character character="&#x2192;" string="&#x0026;#x2192;"/>       <!--rightwards arrow                                                                                                            -->
    <xsl:output-character character="&#x2193;" string="&#x0026;#x2193;"/>       <!--downwards arrow                                                                                                             -->
    <xsl:output-character character="&#x2196;" string="&#x0026;#x2196;"/>       <!--north west arrow **                                                                                                         -->
    <xsl:output-character character="&#x2197;" string="&#x0026;#x2197;"/>       <!--north east arrow **                                                                                                         -->
    <xsl:output-character character="&#x2198;" string="&#x0026;#x2198;"/>       <!--south east arrow **                                                                                                         -->
    <xsl:output-character character="&#x2199;" string="&#x0026;#x2199;"/>       <!--south west arrow **                                                                                                         -->
    <xsl:output-character character="&#x2212;" string="&#x0026;#x2212;"/>       <!--minus sign                                                                                                                  -->
    <xsl:output-character character="&#x3008;" string="&#x0026;#x3008;"/>       <!--left angle bracket                                                                                                          -->
    <xsl:output-character character="&#x3009;" string="&#x0026;#x3009;"/>       <!--right angle bracket                                                                                                         -->

  </xsl:character-map>
</xsl:stylesheet>
