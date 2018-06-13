<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns:tei="http://www.tei-c.org/ns/1.0"
    xmlns:teix="http://www.tei-c.org/ns/Examples"
    xmlns:custom="http://whatever"
    >
    <xsl:param name="outputFullWitnessPage"/>

<!--A B O U T   T H I S   D O C U M E N T
    Filename:               ruskin.xls
    Version:                2.0
    Original Release Date:
    Last Modified Date:     04/10/2016
    Author:                 Charles W. Borchers, IV
    Project Title:          The Early Works of John Ruskin (1826-42)
    Project Director:       David C. Hanson
    Project Email Address:  ruskinproject@selu.edu
    Copyright Notice:       This document was created exclusively for The Early Works of John Ruskin (1826-42), a Digital Humanities project of
                            Southeastern Louisiana University's Department of English. The contents of this document may not be used or reproduced in
                            any form without the express permission of the Author and the Project Director.-->

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

<!--V A R I A B L E S
    The following assigns variables to frequently-used code and/or to code that, if not assigned a variable, would fail to validate and/or fail to
    output correctly. Variables appear after "name="; output in the associated comment to the right. Variables that begin with "x" output closing
    tags.-->

    <xsl:variable name="brVar">&#x003C;br/&#x003E;</xsl:variable>                   <!--<br/>       -->
    <xsl:variable name="xaVar">&#x003C;/a&#x003E;</xsl:variable>                    <!--</a>        -->
    <xsl:variable name="xdivVar">&#x003C;/div&#x003E;</xsl:variable>                <!--</div>      -->
    <xsl:variable name="xspanVar">&#x003C;/span&#x003E;</xsl:variable>              <!--</span>     -->
    <xsl:variable name="xtableVar">&#x003C;/table&#x003E;</xsl:variable>            <!--</table>    -->


    <!-- Generate alphabetic indices-->
    <xsl:function name="custom:getAlphabeticIndex">
        <xsl:param name="number"/>

        <xsl:variable name="val" select="floor($number)" />

        <xsl:variable name="remainder" select="floor($val mod 26)"/>
        <xsl:variable name="quotient" select="(($val - $remainder) div 26)"/>


        <xsl:choose>
            <xsl:when test="$quotient &gt; 0">
                <xsl:value-of select="custom:getAlphabeticIndex($quotient)" />
                <xsl:value-of select="codepoints-to-string(96 + $remainder)"/>
            </xsl:when>
            <xsl:otherwise>
                <xsl:value-of select="codepoints-to-string(round(96 + $remainder))"/>
                <!-- <xsl:text>Quotient: </xsl:text><xsl:value-of select="$quotient"/> -->
                <!-- <xsl:text>Remainder: </xsl:text><xsl:value-of select="$remainder"/> -->
            </xsl:otherwise>
        </xsl:choose>

    </xsl:function>

    <xsl:function name="custom:printAuthors">
        <xsl:param name="root"/>
        <xsl:choose>
          <xsl:when test="count($root) = 0">
          </xsl:when>
          <xsl:otherwise>
            <xsl:for-each select="$root">
              <xsl:choose>
                <xsl:when test="./tei:orgName">
                  <xsl:choose>
                    <xsl:when test="position() = 1">
                      <xsl:apply-templates select="./tei:orgName" /></xsl:when>
                    <xsl:otherwise>, and<xsl:apply-templates select="./tei:orgName" /></xsl:otherwise>
                  </xsl:choose>
                </xsl:when>
                <xsl:otherwise>
                  <xsl:choose>
                    <xsl:when test="position() = 1">

                      <xsl:apply-templates select="./tei:persName/tei:surname" />
                      <xsl:choose>
                        <xsl:when test="./tei:persName/tei:forename">,
                          <xsl:apply-templates select="./tei:persName/tei:forename" />
                        </xsl:when>
                      </xsl:choose>
                    </xsl:when>
                    <xsl:otherwise>, and
                      <xsl:apply-templates select="./tei:persName/tei:forename" />
                      <xsl:value-of select="' '" />
                      <xsl:apply-templates select="./tei:persName/tei:surname" /></xsl:otherwise>
                  </xsl:choose>
                </xsl:otherwise>
              </xsl:choose>
            </xsl:for-each>

            <xsl:choose>
              <xsl:when test="count($root) = 1">
                <xsl:if test="substring($root/tei:persName[1]/tei:forename, string-length($root/tei:persName[1]/tei:forename), 1) != '.'" >
                  <xsl:value-of select="'.'" />
                </xsl:if>
                <xsl:value-of select="' '" />
              </xsl:when>
              <xsl:otherwise>
                <xsl:if test="substring($root[last()]/tei:persName/tei:surname, string-length($root[last()]/tei:persName/tei:surname), 1) != '.'" >
                  <xsl:value-of select="'.'" />
                </xsl:if>
                <xsl:value-of select="' '" />
              </xsl:otherwise>
            </xsl:choose>

          </xsl:otherwise>
        </xsl:choose>



    </xsl:function>

    <xsl:function name="custom:printRespStmt">
        <xsl:param name="root"/>

        <xsl:for-each select="$root">
          <xsl:apply-templates select="./tei:resp" />
          <xsl:value-of select="' '" />
          <xsl:choose>
            <xsl:when test="position() = last()">
              <xsl:apply-templates select="./tei:persName/tei:forename" />
              <xsl:value-of select="' '" />
              <xsl:apply-templates select="./tei:persName/tei:surname" />.
              </xsl:when>
            <xsl:when test="position() = 1">
              <xsl:apply-templates select="./tei:persName/tei:forename" />
              <xsl:value-of select="' '" />
              <xsl:apply-templates select="./tei:persName/tei:surname" /></xsl:when>
            <xsl:otherwise>, and
              <xsl:apply-templates select="./tei:persName/tei:forename" />
              <xsl:value-of select="' '" />
              <xsl:apply-templates select="./tei:persName/tei:surname" />
              <xsl:value-of select="' '" />
            </xsl:otherwise>
          </xsl:choose>
        </xsl:for-each>


    </xsl:function>
    <xsl:function name="custom:printEditors">
        <xsl:param name="root"/>
        <xsl:choose>
          <xsl:when test="count($root) &gt; 0">
            Ed.
          </xsl:when>
        </xsl:choose>
        <xsl:for-each select="$root">
          <xsl:choose>
            <xsl:when test="position() = 1">
              <xsl:apply-templates select="./tei:persName/tei:forename" />
              <xsl:value-of select="' '" />
              <xsl:apply-templates select="./tei:persName/tei:surname" />
            </xsl:when>
            <xsl:otherwise>
              <xsl:value-of select="', and '" />
              <xsl:apply-templates select="./tei:persName/tei:forename" />
              <xsl:value-of select="' '" />
              <xsl:apply-templates select="./tei:persName/tei:surname" />
            </xsl:otherwise>
          </xsl:choose>
        </xsl:for-each>
        <xsl:choose>
          <xsl:when test="count($root) &gt; 0">. </xsl:when>
        </xsl:choose>


    </xsl:function>

    <xsl:function name="custom:printPublisher">
        <xsl:param name="root"/>
        <xsl:for-each select="$root">
          <!-- <xsl:value-of select="name(.)" /> -->
          <!-- <xsl:value-of select="name(./*[1])" /> -->
          <xsl:choose>
            <xsl:when test="name(./*[1]) = 'publisher'">

              <xsl:if test="./tei:publisher">
                <xsl:apply-templates select="./tei:publisher" />
                <xsl:value-of select="'. '" />
              </xsl:if>

              <xsl:if test="./tei:pubPlace">
                <xsl:apply-templates select="./tei:pubPlace" />
                <xsl:value-of select="'. '" />
              </xsl:if>

            </xsl:when>
            <xsl:otherwise>
              <xsl:if test="./tei:pubPlace">
                <xsl:apply-templates select="./tei:pubPlace" />

                <xsl:if test="./tei:publisher">
                  <xsl:value-of select="': '" />
                </xsl:if>
              </xsl:if>

              <xsl:if test="./tei:publisher">
                <xsl:apply-templates select="./tei:publisher" />
              </xsl:if>

              <xsl:if test="./tei:date and (./tei:publisher or ./tei:pubPlace)" >
                <xsl:value-of select="', '" />
              </xsl:if>
              <xsl:value-of select="./tei:date" />
              <xsl:value-of select="'.'" />

            </xsl:otherwise>
          </xsl:choose>
        </xsl:for-each>


    </xsl:function>



    <!--The following is an example of a variable's use in this XSL document:

        <xsl:value-of select="$brVar" disable-output-escaping="yes"/>.

    disable-output-escaping ensures that the variable's output - in the example above, <br/> - is not rendered as text.-->

<!--H Y P E R L I N K S-->

<!--<REF>
    substring-before is used here to insert what comes before .php in the value of the @target (e.g. so that msi_apparatus.php becomes
    msi_apparatus). The truncated value is then passed to xmlVar.

    xmlVar is used here to pass the XML path to a file (e.g. apparatuses/mis_apparatus.xml) to the doc-available test.

    doc-available checks the XML path. If an XML document exists at the end of that path, an <href> is inserted in the HTML document. Otherwise,
    the <ref> is not transformed.

    phpVar is used here to insert the appropriate php path to a file (e.g. ../apparatuses/msi_apparatus.php, ../essays/poetry_essay.php) based
    upon the @type and @target of a <ref>.-->

    <xsl:template match="tei:ref">
        <xsl:choose>

            <xsl:when test="@type='apparatus'">
                <xsl:variable name="xmlVar"><xsl:value-of select="substring-before(@target, '.php')"/>.xml</xsl:variable>
                <xsl:variable name="phpVar">../apparatuses/<xsl:value-of select="@target"/></xsl:variable>

                <xsl:choose>

                    <xsl:when test="doc-available($xmlVar)">
                        <a href="{$phpVar}" target="_blank">
                            <xsl:apply-templates/>
                        </a>
                    </xsl:when>

                    <!--Code for jQuery- and CSS-controlled inactive links until the document is made available.-->
                    <xsl:otherwise>
                        <a href="{$phpVar}" target="_blank" class="inactive">
                            <xsl:apply-templates/>
                        </a>
                    </xsl:otherwise>

                </xsl:choose>

            </xsl:when>

            <xsl:when test="@type='figure'">
                <xsl:variable name="xmlVar"><xsl:value-of select="substring-before(@target, '.php')"/>.xml</xsl:variable>
                <xsl:variable name="phpVar">../witnesses/<xsl:value-of select="@target"/></xsl:variable>


                <a href="{$phpVar}" target="_blank" class="inactive">
                    <xsl:apply-templates/>
                </a>


            </xsl:when>

            <xsl:when test="@type='bibliography'">
                <xsl:variable name="xmlVar"><xsl:value-of select="substring-before(@target, '.php')"/>.xml</xsl:variable>
                <xsl:variable name="phpVar">../bibiliography/<xsl:value-of select="@target"/></xsl:variable>

                <xsl:choose>

                    <xsl:when test="doc-available($xmlVar)">
                        <a href="{$phpVar}" target="_blank">
                            <xsl:apply-templates/>
                        </a>
                    </xsl:when>

                    <!--Code for jQuery- and CSS-controlled inactive links until the document is made available.-->
                    <xsl:otherwise>
                        <a href="{$phpVar}" target="_blank" class="inactive">
                            <xsl:apply-templates/>
                        </a>
                    </xsl:otherwise>

                </xsl:choose>

            </xsl:when>

            <xsl:when test="@type='drawing'">
                <xsl:variable name="xmlVar"><xsl:value-of select="substring-before(@target, '.php')"/>.jpg</xsl:variable>
                <xsl:variable name="phpVar">../drawings/<xsl:value-of select="substring-before(@target, '.php')"/>.jpg</xsl:variable>

                <xsl:choose>

                    <xsl:when test="doc-available($xmlVar)">
                        <a href="{$phpVar}" target="_blank">
                            <xsl:apply-templates/>
                        </a>
                    </xsl:when>

                    <!--Code for jQuery- and CSS-controlled inactive links until the document is made available.-->
                    <xsl:otherwise>
                        <a href="{$phpVar}" target="_blank" class="inactive">
                            <xsl:apply-templates/>
                        </a>
                    </xsl:otherwise>

                </xsl:choose>

            </xsl:when>

            <xsl:when test="@type='essay'">
                <xsl:variable name="xmlVar"><xsl:value-of select="substring-before(@target, '.php')"/>.xml</xsl:variable>
                <xsl:variable name="phpVar">../essays/<xsl:value-of select="@target"/></xsl:variable>

                <xsl:choose>

                    <xsl:when test="doc-available($xmlVar)">
                        <a href="{$phpVar}" target="_blank">
                            <xsl:apply-templates/>
                        </a>
                    </xsl:when>

                    <!--Code for jQuery- and CSS-controlled inactive links until the document is made available.-->
                    <xsl:otherwise>
                        <a href="{$phpVar}" target="_blank" class="inactive">
                            <xsl:apply-templates/>
                        </a>
                    </xsl:otherwise>

                </xsl:choose>

            </xsl:when>

            <xsl:when test="@type='internal'">
                <a href="{@target}">
                    <xsl:apply-templates/>
                </a>
            </xsl:when>

            <xsl:when test="@type='note'">
                <xsl:variable name="xmlVar"><xsl:value-of select="substring-before(@target, '.php')"/>.xml</xsl:variable>
                <xsl:variable name="phpVar">../notes/<xsl:value-of select="@target"/></xsl:variable>

                <xsl:choose>

                    <xsl:when test="doc-available($xmlVar)">
                        <a href="{$phpVar}" target="_blank">
                            <xsl:apply-templates/>
                        </a>
                    </xsl:when>

                   <!--Code for jQuery- and CSS-controlled inactive links until the document is made available.-->
                    <xsl:otherwise>
                        <a href="{$phpVar}" target="_blank" class="inactive">
                            <xsl:apply-templates/>
                        </a>
                    </xsl:otherwise>

                </xsl:choose>

            </xsl:when>

            <xsl:when test="@type='gloss_contextual' or @type='gloss_textual'">


                <xsl:variable name="xmlVar"><xsl:value-of select="substring-before(@target, '.php')"/>.xml</xsl:variable>

                <xsl:variable name="refVar">
                    &#x003C;a href=&#x0022;../glosses/<xsl:value-of select="@target"/>&#x0022; target=&#x022;_blank"&#x022; class=&#x022;inactive&#x022;&#x003E;
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
                <xsl:variable name="xmlVar"><xsl:value-of select="substring-before(@target, '.php')"/>.xml</xsl:variable>
                <xsl:variable name="phpVar">../webpages/<xsl:value-of select="@target"/></xsl:variable>

                <xsl:choose>

                    <xsl:when test="doc-available($xmlVar)">
                        <a href="{$phpVar}" target="_blank">
                            <xsl:apply-templates/>
                        </a>
                    </xsl:when>

                   <!--Code for jQuery- and CSS-controlled inactive links until the document is made available.-->
                    <xsl:otherwise>
                        <a href="{$phpVar}" target="_blank" class="inactive">
                            <xsl:apply-templates/>
                        </a>
                    </xsl:otherwise>

                </xsl:choose>

            </xsl:when>

            <xsl:when test="@type='witness'">
                <xsl:variable name="xmlVar"><xsl:value-of select="substring-before(@target, '.php')"/>.xml</xsl:variable>
                <xsl:variable name="phpVar">../witnesses/<xsl:value-of select="@target"/></xsl:variable>

                <xsl:choose>

                    <xsl:when test="doc-available($xmlVar)">
                        <a href="{$phpVar}">
                            <xsl:apply-templates/>
                        </a>
                    </xsl:when>

                   <!--Code for jQuery- and CSS-controlled inactive links until the document is made available.-->
                    <xsl:otherwise>
                        <a href="{$phpVar}" target="_blank" class="inactive">
                            <xsl:apply-templates/>
                        </a>
                    </xsl:otherwise>

                </xsl:choose>

            </xsl:when>

        </xsl:choose>
    </xsl:template>

<!--N A M E S
    The following transforms <name>s, <geoName>s, <orgName>s, <persName>s, and <placeName>s in the XML document into <span>s in the HTML document.
    XML @types and @corresps become parts of a CSS class in the HTML document such that <persName type="pen_name" corresp="#JR">J.R.</persName> becomes
    <span class="persName-pen_name-JR">J.R.</span>.-->

    <xsl:template match="tei:name">
        <xsl:for-each select="self::*[@corresp]">
            <span class="name-{substring-after(@type, '#')}-{substring-after(@corresp, '#')}">
                <xsl:apply-templates/>
            </span>
        </xsl:for-each>
    </xsl:template>

    <xsl:template match="tei:geogName">
        <xsl:for-each select="self::*[@corresp]">
            <span class="geogName-{substring-after(@corresp, '#')}">
                <xsl:apply-templates/>
            </span>
        </xsl:for-each>
    </xsl:template>

    <xsl:template match="tei:listBibl">

      <xsl:value-of select="$brVar" disable-output-escaping="yes"/>
      <ul>
        <xsl:for-each select="tei:msDesc">
          <li class="bib-item">
            <!-- Bibliography -->
          </li>
        </xsl:for-each>
        <xsl:for-each select="tei:biblStruct">
          <li class="bib-item">
            <xsl:choose>

              <xsl:when test="tei:analytic">
                <!-- Analytic -->
                <xsl:value-of select="custom:printAuthors(./tei:analytic/tei:author)" />

                <text>

                  <xsl:for-each select="./tei:analytic/tei:title">
                    <xsl:apply-templates /><xsl:value-of select="'. '" />
                  </xsl:for-each>
                  <xsl:for-each select="./tei:monogr/tei:title">
                    <xsl:apply-templates /><xsl:value-of select="'. '" />
                  </xsl:for-each>

                </text>

                <xsl:choose>
                  <xsl:when test="tei:monogr/tei:imprint/tei:biblScope[@type='vol']">
                    Vol. <xsl:apply-templates select="tei:monogr/tei:imprint/tei:biblScope[@type='vol']" />,
                  </xsl:when>
                </xsl:choose>
                <xsl:choose>
                  <xsl:when test="tei:monogr/tei:imprint/tei:biblScope[@type='issue']">
                    Issue. <xsl:apply-templates select="tei:monogr/tei:imprint/tei:biblScope[@type='issue']" />,
                  </xsl:when>
                </xsl:choose>
                <xsl:choose>
                  <xsl:when test="tei:monogr/tei:imprint/tei:date">
                    <xsl:apply-templates select="tei:monogr/tei:imprint/tei:date" />.
                  </xsl:when>
                </xsl:choose>
                <xsl:choose>
                  <xsl:when test="tei:monogr/tei:imprint/tei:biblScope[@type='pages']">
                    <xsl:apply-templates select="tei:monogr/tei:imprint/tei:biblScope[@type='pages']" />.
                  </xsl:when>
                </xsl:choose>




              </xsl:when>

              <xsl:otherwise>
                <xsl:value-of select="custom:printAuthors(./tei:monogr/tei:author)" />

                <xsl:for-each select="./tei:monogr/tei:title">
                  <xsl:apply-templates /><text>. </text>
                </xsl:for-each>
                <xsl:value-of select="custom:printRespStmt(./tei:monogr/tei:respStmt)" />
                <xsl:value-of select="custom:printEditors(./tei:monogr/tei:editor)" />
                <xsl:value-of select="custom:printPublisher(./tei:monogr/tei:imprint)" />

              </xsl:otherwise>

            </xsl:choose>

          </li>
        </xsl:for-each>

      </ul>

    </xsl:template>

    <xsl:template match="tei:orgName">
        <xsl:for-each select="self::*[@corresp]">
            <span class="orgName-{substring-after(@corresp, '#')}">
                <xsl:apply-templates/>
            </span>
        </xsl:for-each>
    </xsl:template>

    <xsl:template match="tei:persName">
        <xsl:choose>

            <xsl:when test="@type and @corresp">
                <span class="persName-{string(@type)}-{substring-after(@corresp, '#')}">
                    <xsl:apply-templates/>
                </span>
            </xsl:when>

            <xsl:when test="@corresp">
                <span class="persName-{substring-after(@corresp, '#')}">
                    <xsl:apply-templates/>
                </span>
            </xsl:when>

        </xsl:choose>
    </xsl:template>

    <xsl:template match="tei:placeName">
        <xsl:choose>

            <xsl:when test="@type and @corresp">
                <span class="placeName-{string(@type)}-{substring-after(@corresp, '#')}">
                    <xsl:apply-templates/>
                </span>
            </xsl:when>

            <xsl:when test="@corresp">
                <span class="placeName-{substring-after(@corresp, '#')}">
                    <xsl:apply-templates/>
                </span>
            </xsl:when>

        </xsl:choose>
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

<!--D O C U M E N T-->

<!--<TEI> - Enable for Apparatuses, Essays, Notes, and Glosses. Disable for Anthologies, Manuscripts, and Witnesses.
    The following creates the opening and closing tags of the HTML document (/ matches everything). Note that a <!DOCTYPE> is required for
    compatibilty with Internent Explorer 8.-->

    <xsl:template match="/">
      <!-- <xsl:value-of select="tei:TEI" />
      Node -->

      <xsl:choose>
        <xsl:when test="tei:TEI/tei:teiHeader[@type='witness']">
          <xsl:variable name="facsFileNames" select="//tei:teiHeader/tei:fileDesc/tei:sourceDesc/tei:msDesc/tei:msContents/tei:msItem/tei:locus/@facs" />
          <xsl:variable name="facsFile" select="substring-before($facsFileNames, '.jpg')" />
          <xsl:variable name="witnessTitle" select="//tei:teiHeader/tei:fileDesc/tei:titleStmt/tei:title[@type='main']" />

          <xsl:choose>
            <xsl:when test="$outputFullWitnessPage" >
              <xsl:value-of disable-output-escaping="yes">
                &#x003C;?php

                define(&#x022;FILE_NAME&#x022;, &#x003C;&#x003C;&#x003C;EOT
                <xsl:value-of select="$witnessTitle" disable-output-escaping="no"/>
EOT
);

define(&#x022;FACS_FILE_NAMES&#x022;, &#x003C;&#x003C;&#x003C;EOT
<xsl:value-of select="$facsFileNames" disable-output-escaping="no"/>
EOT
);

                include_once(&#x022;../showcase_top.inc.php&#x022;)
                ?&#x003E;
              </xsl:value-of>

              <div id="content-left">
                <img id="facs_preview" src="" width="100%"/>
                <img id="facs" src="" width="100%" style="display:none"/>
                <!--<div id="copyright"><img src="..." alt="..." title="Manuscript images &#x00A9;...." width="30" height="60" /></div>-->
              </div>
              <div id="content-splitter">
              </div>

              <div id="content-right">

                <div id="topFileName">
                  Now showcasing:
                  <span>
                    <xsl:value-of select="//tei:teiHeader/tei:fileDesc/tei:titleStmt/tei:title[@type='main']" />
                  </span><br />

                  Back to:
                  <span>
                     <xsl:apply-templates select="//tei:teiHeader/tei:fileDesc/tei:sourceDesc/tei:msDesc/tei:msContents/tei:msItem/tei:note/tei:ref" />
                  </span>
                </div>

                <xsl:apply-templates select="//tei:body/*"/>
              </div>

              <xsl:value-of disable-output-escaping="yes" select="'&#x003C;?php include_once(&#x022;../showcase_bottom.inc.php&#x022;) ?&#x003E;'" />


            </xsl:when>
            <xsl:otherwise>
              <xsl:apply-templates select="//tei:body/*"/>
            </xsl:otherwise>
          </xsl:choose>


        </xsl:when>
        <xsl:otherwise>
          <!--The <!DOCTYPE> below matches the default assigned by Adobe Dreamweaver CS4 and ensures that webpages created outside the application
              (through XSLT) match those created inside.-->
          <xsl:variable name="docVar">&#x003C;!DOCTYPE html PUBLIC &#x0022;-//W3C//DTD XHTML 1.0 Transitional//EN&#x0022; &#x0022;http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd&#x0022;&#x003E;</xsl:variable>
          <xsl:variable name="headerIncludeVar">&#x003C;?php include_once(&#x022;../header.inc.php&#x022;) ?&#x003E;
          </xsl:variable>
          <xsl:value-of select="$headerIncludeVar" disable-output-escaping="yes"/>
          <xsl:value-of select="$docVar" disable-output-escaping="yes"/>
          <html>
              <xsl:apply-templates/>
          </html>
        </xsl:otherwise>
      </xsl:choose>
    </xsl:template>

<!--<teiHeader> - Enable for Apparatuses, Essays, Notes, and Glosses. Disable for Anthologies, Manuscripts, and Witnesses.
    The following extracts from the XML document the content of the <teiHeader>'s main <title> for the HTML document's title. All other header
    elements in the XML document are ignored.-->

    <xsl:template match="tei:teiHeader">
        <head>

            <xsl:for-each select="tei:fileDesc/tei:titleStmt/tei:title[@type='main']">
                <title>
                    <xsl:apply-templates/>
                </title>

                <xsl:variable name="phpVar">
                    &#x003C;?php include(&#x022;../inactive.inc.php&#x022;); ?&#x003E;
                </xsl:variable>

                <xsl:value-of select="$phpVar" disable-output-escaping="yes"/>

            </xsl:for-each>

    <!--The following associates the appropriate CSS with the HTML document based upon the <teiHeader>'s @type in XML.-->

            <xsl:choose>

                <xsl:when test="self::*[@type='anthology' or @type='manuscript' or @type='witness']">
                    <xsl:variable name="cssVar">
                        &#x003C;link href=&#x022;&#x003C;?php echo r_build_url(&#x022;css/witness_styles.css&#x022;); ?&#x003E;&#x022; rel=&#x022;stylesheet&#x022; type=&#x022;text/css&#x022;&#x003E;
                    </xsl:variable>
                    <xsl:value-of select="$cssVar" disable-output-escaping="yes"/>

                </xsl:when>

                <xsl:otherwise>
                    <!--Remove the ../ in ../styles.css for local testing.-->
                    <xsl:variable name="cssVar">
                        &#x003C;link href=&#x022;&#x003C;?php echo r_build_url(&#x022;css/styles.css&#x022;); ?&#x003E;&#x022; rel=&#x022;stylesheet&#x022; type=&#x022;text/css&#x022;&#x003E;

                    </xsl:variable>
                    <xsl:value-of select="$cssVar" disable-output-escaping="yes"/>
                </xsl:otherwise>

            </xsl:choose>

        </head>
    </xsl:template>

<!--<body> - Enable for Apparatuses, Essays, Notes, and Glosses. Disable for Anthologies, Manuscripts, and Witnesses.
    The following uses the body of the XML docment as the body of the HTML document.-->
    <xsl:variable name="navigationPhpVar">&#x003C;?php include(&#x022;../navigation.inc.php&#x022;); ?&#x003E;</xsl:variable>
    <xsl:variable name="topBtnPhpVar">&#x003C;?php include(&#x022;../top_button.inc.php&#x022;); ?&#x003E;</xsl:variable>
    <xsl:template match="tei:body">
        <xsl:choose>

          <xsl:when test="ancestor::*[tei:floatingText]">
              <body>
                  <div class="floating-text">
                    <xsl:apply-templates/>
                  </div>
              </body>
          </xsl:when>
          <xsl:when test="ancestor::*[tei:teiHeader/@type='apparatus']">
              <body>

                  <xsl:value-of select="$navigationPhpVar" disable-output-escaping="yes"/>
                  <xsl:apply-templates/>
                  <xsl:value-of select="$topBtnPhpVar" disable-output-escaping="yes"/>
              </body>
          </xsl:when>

            <xsl:otherwise>
                <xsl:variable name="phpVar">&#x003C;?php include(&#x022;../navigation.inc.php&#x022;); ?&#x003E;</xsl:variable>
                <xsl:value-of select="$navigationPhpVar" disable-output-escaping="yes"/>
                <xsl:apply-templates/>
            </xsl:otherwise>

        </xsl:choose>
    </xsl:template>

<!--<teiHeader> - Disable for Apparatuses, Essays, Notes, and Glosses. Enable for Anthology, Manuscript, and Witnesses.

    <xsl:template match="tei:teiHeader">

    </xsl:template>-->

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

    <xsl:template match="tei:pb">
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
                                <div class="title">
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

                    <xsl:when test="ancestor::*[tei:teiHeader/@type='anthology' or tei:teiHeader/@type='manuscript' or tei:teiHeader/@type='witness']">
                       <div class="title" style="text-align:center">
                           <xsl:apply-templates/>
                       </div>
                    </xsl:when>

                    <xsl:when test="ancestor::*[tei:teiHeader/@type='apparatus' or @type='note' or @type='figure']">
                        <xsl:choose>

                            <xsl:when test="following::tei:div/@xml:id='LOCATION'">
                                <div id="top" class="page-title">
                                    <xsl:apply-templates/>
                                </div>
                                <xsl:variable name="phpVar">&#x003C;?php include(&#x022;../navigation-manuscript.inc.php&#x022;); ?&#x003E;</xsl:variable>
                                <xsl:value-of select="$phpVar" disable-output-escaping="yes"/>
                            </xsl:when>

                            <xsl:when test="ancestor::*[@type='note']">
                                <div id="top" class="page-title">
                                    <xsl:apply-templates/>
                                </div>
                            </xsl:when>

                            <xsl:when test="ancestor::*[@type='figure']">
                                <div id="top" class="page-title">
                                    <xsl:apply-templates/>
                                </div>
                                <br />
                            </xsl:when>

                            <xsl:otherwise>
                               <div id="top" class="page-title">
                                   <xsl:apply-templates/>
                               </div>
                               <xsl:variable name="phpVar">&#x003C;?php include(&#x022;../navigation-work.inc.php&#x022;); ?&#x003E;</xsl:variable>
                               <xsl:value-of select="$phpVar" disable-output-escaping="yes"/>
                            </xsl:otherwise>

                        </xsl:choose>
                    </xsl:when>

                    <!--<xsl:when test="not(ancestor::*[tei:teiHeader/@type='witness'])">
                       <div class="title">
                           <xsl:apply-templates/>
                       </div>
                    </xsl:when>-->

                    <xsl:otherwise>
                       <div class="page-title">
                           <xsl:apply-templates/>
                       </div>
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
               <div class="head-table">
                   <xsl:apply-templates/>
               </div>
           </xsl:when>

            <xsl:when test="@type">
                <span class="head-{@type}">
                    <xsl:apply-templates/>
                </span>
            </xsl:when>

            <xsl:otherwise>
                <span class="head">
                    <xsl:apply-templates/>
                </span>
            </xsl:otherwise>

        </xsl:choose>
    </xsl:template>

<!--<p>-->

    <xsl:template match="tei:p">
        <p>
            <xsl:apply-templates/>
        </p>
    </xsl:template>

<!--<list>-->

    <xsl:template match="tei:list">
        <ul>
            <xsl:apply-templates/>
        </ul>
    </xsl:template>

<!--<item>-->

    <xsl:template match="tei:item">
        <li>
            <xsl:apply-templates/>
        </li>
    </xsl:template>

<!--<lg>
    Normal processing differentiates between <lg>s with the @types strophe and stanza.-->

    <xsl:template match="tei:lg">
        <xsl:choose>

            <xsl:when test="@type='strophe'">
                <span class="lg-strophe">
                    <xsl:apply-templates/>
                </span>
            </xsl:when>

            <xsl:when test="@type='stanza'">
                <div class="lg-stanza">
                    <xsl:apply-templates/>
                </div>
            </xsl:when>

        </xsl:choose>
    </xsl:template>

<!--<l>
    child is used here to test whether the a <l> contains a <lb> with a @type of runover. If it does, special processing (see <lb>) of the <l> is
    performed before its content is output to a <span>.

    brVar inserts <br/> before each <span> to ensure that proper lineation.

    xdivVar inserts a </div> before the </span> when a <l> contains a <lb>.-->

    <xsl:template match="tei:l">
        <xsl:choose>

            <xsl:when test="child::tei:lb/@type='runover'">
                <span class="l">
                    <xsl:apply-templates/>
                <xsl:value-of select="$xdivVar" disable-output-escaping="yes"/></span>
                <xsl:value-of select="$brVar" disable-output-escaping="yes"/>
            </xsl:when>

            <xsl:otherwise>
                <span class="l">
                    <xsl:apply-templates/>
                </span>
                <xsl:value-of select="$brVar" disable-output-escaping="yes"/>
            </xsl:otherwise>

        </xsl:choose>
    </xsl:template>

<!--<space>
    The following transforms each <space> in the XML document into a <span> in the HTML document - unless the <space> is part of an above- or below-
    below-the-line addition or runover (special transformations for these are included later in this XSL document). The variable spaceVar is used to
    output <span class="space" style="padding-left:_em"> </span>, where _ is calculated as the product of the <space>'s @quantity and 0.4 (to
    approximate the width of 1 character in the variable-width font used by this project). The <span> thus inserts padding to the left of a
    character or word to create space (note that a non-breaking space - &#x00A0; - between the <span>'s opening and closing tags is required for the
    <span> to be output correctly). The XML element name is retained as a CSS class name in the HTML document.-->

    <xsl:template match="tei:space">
        <xsl:choose>

            <xsl:when test="parent::tei:add/@place='above'">
                <xsl:apply-templates/>
            </xsl:when>

            <xsl:when test="parent::tei:add/@place='below'">
                <xsl:apply-templates/>
            </xsl:when>

            <!--Corrected 04/10/16; kempe.xsl to be updated.-->

            <xsl:when test="preceding-sibling::*[1][self::tei:lb/@type='runover']">
                <xsl:apply-templates/>
            </xsl:when>

            <xsl:otherwise>
                <xsl:variable name="spaceVar">&#x003C;span class="space" style=&#x0022;padding-left:<xsl:value-of select="(format-number((@quantity * 0.4), '0.0'))"/>em&#x0022;&#x003E;&#x00A0;&#x003C;/span&#x003E;</xsl:variable>
                <xsl:value-of select="$spaceVar" disable-output-escaping="yes"/>
            </xsl:otherwise>

        </xsl:choose>
    </xsl:template>

<!--<damage> and <gap>
    The following transforms each <gap> in the XML document into a <span> in the HTML document - similar to the way that <space>s are transformed
    above. For <gap>s with extents of "several words" or "several characters," the gap (i.e. space) to the left of a character or word is
    approximated (i.e. as 8em or 2em). The variable gapVar is used to output <span class="gap" style="padding-left:_em"> </span>. The XML element
    name is retained as a CSS class name in the HTML document.-->

    <xsl:template match="damage">
        <span class="damage-{string(@agent)}">
            <xsl:apply-templates/>
        </span>
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

            <!--Corrected 04/10/16; kempe.xsl to be updated.-->

            <xsl:when test="@type='runover' and following-sibling::*[1][self::tei:space]">
                <xsl:variable name="runoverVar">&#x003C;div class=&#x0022;runover&#x0022; style=&#x0022;left:<xsl:value-of select="(format-number((following-sibling::*[1][self::tei:space]/@quantity * 0.4), '0.0'))"/>em&#x0022;&#x003E;</xsl:variable>
                <xsl:value-of select="$runoverVar" disable-output-escaping="yes"/>
            </xsl:when>

            <xsl:when test="@type='runover'">
                <xsl:variable name="runoverVar">&#x003C;div class=&#x0022;runover&#x0022;&#x003E;</xsl:variable>
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

<!--R E V I S I O N S-->

<!--<subst>
    The following transforms each <del> and <add> that are part of a <subst> in the XML document into a joined pair of <span>s in the HTML document.
    The variable substVar is used to output <[div/span] class="subst-del-[expunction/strikethrough]-SUBSTITUTOR"[ style="left:_em"]> for deletions
    and <[div/span] class="subst-add-[above/below][-][overwriting][-][SUBSTITUTOR]"[ style="left:_em"]> for additions, where the substitutor is
    identified by the <subst>'s @hand (<subst>s without a @hand are assumed to be Salthows) and _ is calculated as the product of an included
    <space>'s @quantity and 0.4. Where the substVar is not used, the following output is possible: <span class="subst-del[-erasure/expunction/
    strikethrough]">...</span> for deletions and <span class="subst-add[-overwriting]">...</span> for additions. Note that, while the following will
    transform a <del> or an <add> without a @rend, the XML should be considered suspect.-->

    <xsl:template match="tei:subst/tei:del">
        <xsl:choose>

            <xsl:when test="parent::tei:subst/@hand">
                <xsl:choose>

                    <xsl:when test="@rend='strikethrough'">
                        <xsl:variable name="substVar">&#x003C;span class=&#x0022;subst-del-strikethrough-<xsl:value-of select="substring-after(parent::tei:subst/@hand, '#')"/>&#x0022;&#x003E;</xsl:variable>
                        <xsl:value-of disable-output-escaping="yes" select="$substVar"/>
                            <xsl:apply-templates/>
                        <xsl:value-of select="$xspanVar" disable-output-escaping="yes"/>
                    </xsl:when>

                    <xsl:otherwise>
                        <span class="subst-del">
                            <xsl:apply-templates/>
                        </span>
                    </xsl:otherwise>

                </xsl:choose>
            </xsl:when>

            <xsl:when test="@rend='erasure'">
                <span class="subst-del-erasure">
                    <xsl:apply-templates/>
                </span>
            </xsl:when>

            <xsl:when test="@rend='strikethrough'">
                <span class="subst-del-strikethrough">
                    <xsl:apply-templates/>
                </span>
            </xsl:when>

            <xsl:otherwise>
                <span class="subst-del">
                    <xsl:apply-templates/>
                </span>
            </xsl:otherwise>

        </xsl:choose>
    </xsl:template>

    <xsl:template match="tei:subst/tei:add">
        <xsl:choose>

            <xsl:when test="parent::tei:subst/@hand">
                <xsl:choose>

                    <xsl:when test="@rend='overwriting' and @place='above' or @place='below'">
                        <xsl:variable name="substVar">&#x003C;div class=&#x0022;subst-add-<xsl:value-of select="@place"/>-overwriting-<xsl:value-of select="substring-after(parent::tei:subst/@hand, '#')"/>&#x0022; style=&#x0022;left:<xsl:value-of select="(format-number((tei:space/@quantity * 0.4), '0.0'))"/>em&#x0022;&#x003E;</xsl:variable>
                        <xsl:value-of disable-output-escaping="yes" select="$substVar"/>
                            <xsl:apply-templates/>
                        <xsl:value-of select="$xdivVar" disable-output-escaping="yes"/>
                    </xsl:when>

                    <xsl:when test="@place='above' or @place='below'">
                        <xsl:variable name="substVar">&#x003C;div class=&#x0022;subst-add-<xsl:value-of select="@place"/>-<xsl:value-of select="substring-after(parent::tei:subst/@hand, '#')"/>&#x0022; style=&#x0022;left:<xsl:value-of select="(format-number((tei:space/@quantity * 0.4), '0.0'))"/>em&#x0022;&#x003E;</xsl:variable>
                        <xsl:value-of disable-output-escaping="yes" select="$substVar"/>
                            <xsl:apply-templates/>
                        <xsl:value-of select="$xdivVar" disable-output-escaping="yes"/>
                    </xsl:when>

                    <xsl:when test="@rend='overwriting'">
                        <xsl:variable name="substVar">&#x003C;span class=&#x0022;subst-add-overwriting-<xsl:value-of select="substring-after(parent::tei:subst/@hand, '#')"/>&#x0022;&#x003E;</xsl:variable>
                        <xsl:value-of disable-output-escaping="yes" select="$substVar"/>
                            <xsl:apply-templates/>
                        <xsl:value-of select="$xspanVar" disable-output-escaping="yes"/>
                    </xsl:when>

                    <xsl:otherwise>
                        <xsl:variable name="substVar">&#x003C;span class=&#x0022;subst-add-<xsl:value-of select="substring-after(parent::tei:subst/@hand, '#')"/>&#x0022;&#x003E;</xsl:variable>
                        <xsl:value-of disable-output-escaping="yes" select="$substVar"/>
                            <xsl:apply-templates/>
                        <xsl:value-of select="$xspanVar" disable-output-escaping="yes"/>
                    </xsl:otherwise>

                </xsl:choose>
            </xsl:when>

            <xsl:when test="@rend='overwriting' and @place='above' or @place='below'">
                <xsl:variable name="substVar">&#x003C;div class=&#x0022;subst-add-<xsl:value-of select="@place"/>-overwriting&#x0022; style=&#x0022;left:<xsl:value-of select="(format-number((tei:space/@quantity * 0.4), '0.0'))"/>em&#x0022;&#x003E;</xsl:variable>
                <xsl:value-of disable-output-escaping="yes" select="$substVar"/>
                    <xsl:apply-templates/>
                <xsl:value-of select="$xdivVar" disable-output-escaping="yes"/>
            </xsl:when>

            <xsl:when test="@place='above' or @place='below'">
                <xsl:variable name="substVar">&#x003C;div class=&#x0022;subst-add-<xsl:value-of select="@place"/>&#x0022; style=&#x0022;left:<xsl:value-of select="(format-number((tei:space/@quantity * 0.4), '0.0'))"/>em&#x0022;&#x003E;</xsl:variable>
                <xsl:value-of disable-output-escaping="yes" select="$substVar"/>
                    <xsl:apply-templates/>
                <xsl:value-of select="$xdivVar" disable-output-escaping="yes"/>
            </xsl:when>

            <xsl:when test="@rend='overwriting'">
                <span class="subst-add-overwriting">
                    <xsl:apply-templates/>
                </span>
            </xsl:when>

            <xsl:otherwise>
                <span class="subst-add">
                    <xsl:apply-templates/>
                </span>
            </xsl:otherwise>

        </xsl:choose>
    </xsl:template>

<!--del
    The following transforms each <del> that is not part of a <subst> in the XML document into a <span> in the HTML document. The variable delVar is
    used to output <[div/span] class="del[-expunction/strikethrough]"[ style="left:_em"]> for deletions and <[div/span] class="subst-add
    [-above/below][-overwriting][-SUBSTITUTOR]"> for additions, where the substitutor is identified by the <subst>'s @hand (<subst>s without a @hand
    are assumed to be Salthows). Where the substVar is not used, the following output is possible: <span class="subst-del[-erasure/expunction/
    strikethrough]">...</span> for deletions and <span class="subst-add[-above/below][-overwriting][-SUBSTITUTOR]">...</span> for additions. Note
    that, while the following will transform a <del> or an <add> without a @rend, the XML should be considered suspect.-->
    <xsl:template match="tei:del">
        <xsl:choose>

            <xsl:when test="@rend='erasure'">
                <span class="del-erasure">
                    <xsl:apply-templates/>
                </span>
            </xsl:when>

            <xsl:when test="@rend='scratchout'">
                <span class="del-scratchout">
                    <xsl:apply-templates/>
                </span>
            </xsl:when>

            <xsl:when test="@rend='strikethrough'">
                <xsl:choose>

                    <xsl:when test="@hand">
                        <xsl:choose>

                            <xsl:when test="child::tei:del/@rend='strikethrough'">
                                <xsl:variable name="delVar">&#x003C;span class=&#x0022;del-strikethrough-<xsl:value-of select="substring-after(@hand, '#')"/>&#x0022;&#x003E;</xsl:variable>
                                <xsl:value-of disable-output-escaping="yes" select="$delVar"/>
                                    <xsl:apply-templates/>
                                <xsl:value-of select="$xspanVar" disable-output-escaping="yes"/>
                            </xsl:when>

                            <xsl:otherwise>
                                <xsl:variable name="delVar">&#x003C;span class=&#x0022;del-strikethrough-<xsl:value-of select="substring-after(@hand, '#')"/>&#x0022;&#x003E;&#x003C;span class=&#x0022;SALTHOWS&#x0022;&#x003E;</xsl:variable>
                                <xsl:value-of disable-output-escaping="yes" select="$delVar"/>
                                    <xsl:apply-templates/>
                                <xsl:value-of select="$xspanVar" disable-output-escaping="yes"/><xsl:value-of select="$xspanVar" disable-output-escaping="yes"/>
                            </xsl:otherwise>

                        </xsl:choose>

                    </xsl:when>

                    <xsl:otherwise>
                        <xsl:choose>

                            <xsl:when test="parent::tei:del/@rend='strikethrough'">
                                <xsl:variable name="delVar">&#x003C;span class=&#x0022;del-strikethrough-<xsl:value-of select="substring-after(parent::tei:del/@hand, '#')"/>-SALTHOWS&#x0022;&#x003E;</xsl:variable>
                                <xsl:value-of disable-output-escaping="yes" select="$delVar"/>
                                    <xsl:apply-templates/>
                                <xsl:value-of select="$xspanVar" disable-output-escaping="yes"/>
                            </xsl:when>

                            <xsl:otherwise>
                                <span class="del-strikethrough">
                                    <xsl:apply-templates/>
                                </span>
                            </xsl:otherwise>

                        </xsl:choose>
                    </xsl:otherwise>

                </xsl:choose>
            </xsl:when>

            <xsl:when test="@rend='underline'">
                <span class="del-underline">
                    <xsl:apply-templates/>
                </span>
            </xsl:when>

            <xsl:otherwise>
                <span class="del">
                    <xsl:apply-templates/>
                </span>
            </xsl:otherwise>

        </xsl:choose>
    </xsl:template>

<!--add
    'top' or 'top-left' or 'top-left-corner' or 'bottom-left-corner' or 'bottom-left' or 'bottom' or 'bottom-right' or 'bottom-right-corner' or 'margin-right' or 'top-right-corner' or 'top-right'-->

    <xsl:template match="tei:add">
        <xsl:choose>

            <xsl:when test="@place='margin-left' and @rend">
                <div class="add-margin-left-{string(@rend)}">
                    <xsl:apply-templates/>
                </div>
            </xsl:when>

            <xsl:when test="@place='margin-right' and @rend">
                <div class="add-margin-right-{string(@rend)}">
                    <xsl:apply-templates/>
                </div>
            </xsl:when>

            <!--Vet below.-->

            <xsl:when test="contains(@place, 'margin-left') and preceding-sibling::tei:add[contains(@place, 'margin-left')]">
                <xsl:variable name="addVar">&#x003C;div class=&#x0022;add-<xsl:value-of select="@place"/>-<xsl:value-of select="substring-after(@hand, '#')"/>&#x0022; style=&#x0022;left: -5.5em&#x0022;&#x003E;</xsl:variable>
                <xsl:value-of disable-output-escaping="yes" select="$addVar"/>
                    <xsl:apply-templates/>
                <xsl:value-of select="$xdivVar" disable-output-escaping="yes"/>
            </xsl:when>

            <!--Test whether highlighted left-marginalia is preceded by other left-maraginalia on the same line.-->

            <xsl:when test="contains(@place, 'margin-left') and parent::tei:hi and ../preceding-sibling::tei:add[contains(@place, 'margin-left')]">
                <xsl:variable name="addVar">&#x003C;div class=&#x0022;add-<xsl:value-of select="parent::tei:hi/@rend"/>-<xsl:value-of select="substring-after(parent::tei:hi/@rendition, '#')"/>-<xsl:value-of select="@place"/>-<xsl:value-of select="substring-after(@hand, '#')"/>&#x0022; style=&#x0022;left: -5.5em&#x0022;&#x003E;</xsl:variable>
                <xsl:value-of disable-output-escaping="yes" select="$addVar"/>
                    <xsl:apply-templates/>
                <xsl:value-of select="$xdivVar" disable-output-escaping="yes"/>
            </xsl:when>

            <xsl:when test="contains(@place, 'margin-right') and preceding-sibling::tei:add[contains(@place, 'margin-right')]">
                <xsl:variable name="addVar">&#x003C;div class=&#x0022;add-<xsl:value-of select="@place"/>-<xsl:value-of select="substring-after(@hand, '#')"/>&#x0022; style=&#x0022;left: 36em&#x0022;&#x003E;</xsl:variable>
                <xsl:value-of disable-output-escaping="yes" select="$addVar"/>
                    <xsl:apply-templates/>
                <xsl:value-of select="$xdivVar" disable-output-escaping="yes"/>
            </xsl:when>

            <!--Test whether highlighted right-marginalia is preceded by other right-maraginalia on the same line.-->

            <xsl:when test="contains(@place, 'margin-right') and parent::tei:hi and ../preceding-sibling::tei:add[contains(@place, 'margin-right')]">
                <xsl:variable name="addVar">&#x003C;div class=&#x0022;add-<xsl:value-of select="parent::tei:hi/@rend"/>-<xsl:value-of select="substring-after(parent::tei:hi/@rendition, '#')"/>-<xsl:value-of select="@place"/>-<xsl:value-of select="substring-after(@hand, '#')"/>&#x0022; style=&#x0022;left: 36em&#x0022;&#x003E;</xsl:variable>
                <xsl:value-of disable-output-escaping="yes" select="$addVar"/>
                    <xsl:apply-templates/>
                <xsl:value-of select="$xdivVar" disable-output-escaping="yes"/>
            </xsl:when>

            <xsl:when test="parent::tei:add[contains(@place, 'margin')] and self::tei:add[contains(@place, 'margin')]">
                <xsl:variable name="addVar">&#x003C;span class=&#x0022;add-inclusion-<xsl:value-of select="@place"/>-<xsl:value-of select="substring-after(@hand, '#')"/>&#x0022;&#x003E;</xsl:variable>
                <xsl:value-of disable-output-escaping="yes" select="$addVar"/>
                    <xsl:apply-templates/>
                <xsl:value-of select="$xspanVar" disable-output-escaping="yes"/>
            </xsl:when>

            <xsl:when test="parent::tei:hi[contains(@rend, 'box')]">
                <xsl:variable name="addVar">&#x003C;div class=&#x0022;add-<xsl:value-of select="parent::tei:hi/@rend"/>-<xsl:value-of select="substring-after(parent::tei:hi/@rendition, '#')"/>-<xsl:value-of select="@place"/>-<xsl:value-of select="substring-after(@hand, '#')"/>&#x0022;&#x003E;</xsl:variable>
                <xsl:value-of disable-output-escaping="yes" select="$addVar"/>
                    <xsl:apply-templates/>
                <xsl:value-of select="$xdivVar" disable-output-escaping="yes"/>
            </xsl:when>

            <xsl:when test="@place and @hand">
                <xsl:choose>

                    <xsl:when test="@place='above' or @place='below'">
                        <xsl:variable name="addVar">&#x003C;div class=&#x0022;add-<xsl:value-of select="@place"/>-<xsl:value-of select="substring-after(@hand, '#')"/>&#x0022; style=&#x0022;left:<xsl:value-of select="(format-number((tei:space/@quantity * 0.4), '0.0'))"/>em&#x0022;&#x003E;</xsl:variable>
                        <xsl:value-of disable-output-escaping="yes" select="$addVar"/>
                            <xsl:apply-templates/>
                        <xsl:value-of select="$xdivVar" disable-output-escaping="yes"/>
                    </xsl:when>

                    <xsl:otherwise>
                        <xsl:variable name="addVar">&#x003C;div class=&#x0022;add-<xsl:value-of select="@place"/>-<xsl:value-of select="substring-after(@hand, '#')"/>&#x0022;&#x003E;</xsl:variable>
                        <xsl:value-of disable-output-escaping="yes" select="$addVar"/>
                            <xsl:apply-templates/>
                        <xsl:value-of select="$xdivVar" disable-output-escaping="yes"/>
                    </xsl:otherwise>

                </xsl:choose>
            </xsl:when>

            <xsl:when test="@place">
                <xsl:choose>

                    <xsl:when test="@place='above' or @place='below'">
                        <xsl:variable name="addVar">&#x003C;div class=&#x0022;add-<xsl:value-of select="@place"/>&#x0022; style=&#x0022;left:<xsl:value-of select="(format-number((tei:space/@quantity * 0.4), '0.0'))"/>em&#x0022;&#x003E;</xsl:variable>
                        <xsl:value-of disable-output-escaping="yes" select="$addVar"/>
                            <xsl:apply-templates/>
                        <xsl:value-of select="$xdivVar" disable-output-escaping="yes"/>
                    </xsl:when>

                    <xsl:otherwise>
                        <xsl:variable name="addVar">&#x003C;div class=&#x0022;add-<xsl:value-of select="@place"/>&#x0022;&#x003E;</xsl:variable>
                        <xsl:value-of disable-output-escaping="yes" select="$addVar"/>
                            <xsl:apply-templates/>
                        <xsl:value-of select="$xdivVar" disable-output-escaping="yes"/>
                    </xsl:otherwise>

                </xsl:choose>
            </xsl:when>

            <xsl:when test="@rend='overwriting'">
                <span class="add-overwriting">
                    <xsl:apply-templates/>
                </span>
            </xsl:when>

            <xsl:when test="@hand">
                <xsl:variable name="addVar">&#x003C;span class=&#x0022;add-<xsl:value-of select="substring-after(@hand, '#')"/>&#x0022;&#x003E;</xsl:variable>
                <xsl:value-of select="$addVar" disable-output-escaping="yes"/>
                    <xsl:apply-templates/>
                <xsl:value-of select="$xspanVar" disable-output-escaping="yes"/>
            </xsl:when>

            <xsl:when test="@rend='linenumber-right-JR'">
                <div class="linenumber-right-JR">
                    <xsl:apply-templates/>
                </div>
            </xsl:when>

            <xsl:otherwise>
                <span class="add">
                    <xsl:apply-templates/>
                </span>
            </xsl:otherwise>

        </xsl:choose>
    </xsl:template>

<!--delSpan, addSpan, and anchor-->

    <xsl:template match="tei:delSpan">
        <span class="delSpan-{string(@xml:id)}-{substring-after(@spanTo, '#')}">
            <xsl:apply-templates/>
        </span>
    </xsl:template>

    <xsl:template match="tei:addSpan">
        <span class="addSpan-{string(@xml:id)}-{substring-after(@spanTo, '#')}">
            <xsl:apply-templates/>
        </span>
    </xsl:template>

    <xsl:template match="tei:anchor">
        <span id="{string(@xml:id)}"></span>
    </xsl:template>

<!--STYLES-->

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

<!--GLOSSES

    Glosses are like interactive footnotes in the HTML document.

    format-number is used here to convert the sum of the number of preceding <note>s with @types of botwin + 1 into a text string (e.g. such that, if
    the number of such preceding <note>s is 0, the sum is 1 [i.e. 0 + 1 = 1]; if the number is 1, the sum is 2 [i.e. 1 + 1 = 2]; if the number is 2,
    the sum is 3 [i.e. 2 + 1 = 3]; and so on).

    nVar is used here to pass the text string to gnVar and gcVar.

    gnVar inserts <sup id="gloss_number_...">...</sup> where ... is the value of nVar (e.g. <sup id="gloss_number_1">1</sup>). In HTML, this renders
    as a superscripted number.

    gcVar inserts <div id="gloss_content_..." class="gloss_content">...</div> where the first ... is the value of nVar and the second is the content
    of the gloss (e.g. <div id="gloss_content_1" class="gloss-content">This is the first gloss.</div>). In HTML, the <div> is hidden (by the CSS rule
    for .gloss_content) until the superscripted number is clicked-revealing This is the first gloss. at the bottom of the browser window (vis-a-vis
    botwin).-->

    <!--<xsl:template match="tei:note">
        <xsl:for-each select="self::*[@place='botwin']">
            <xsl:variable name="nVar"><xsl:value-of select="format-number(count(preceding::tei:note[@place='botwin'])+1,'0')"/></xsl:variable>
            <xsl:variable name="gnVar">&#x003C;sup id=&#x0022;gloss_number_<xsl:value-of select="$nVar"/>&#x0022;&#x003E;<xsl:value-of select="$nVar"/>&#x003C;/sup&#x003E;</xsl:variable>
            <xsl:variable name="gcVar">&#x003C;div id=&#x0022;gloss_content_<xsl:value-of select="$nVar"/>&#x0022; class=&#x0022;gloss_content&#x0022;&#x003E;</xsl:variable>
            <xsl:value-of select="$gnVar" disable-output-escaping="yes"/>
            <xsl:value-of select="$gcVar" disable-output-escaping="yes"/>
                <xsl:apply-templates/>
            <xsl:value-of select="$xdivVar" disable-output-escaping="yes"/>
        </xsl:for-each>
    </xsl:template>-->

</xsl:stylesheet>
