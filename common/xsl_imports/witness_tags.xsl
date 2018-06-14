<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns:tei="http://www.tei-c.org/ns/1.0"
    xmlns:xi="http://www.w3.org/2001/XInclude"
    xmlns:teix="http://www.tei-c.org/ns/Examples"
    xmlns:custom="http://whatever"
    >
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
</xsl:stylesheet>
