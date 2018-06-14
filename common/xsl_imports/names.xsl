<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns:tei="http://www.tei-c.org/ns/1.0"
    xmlns:xi="http://www.w3.org/2001/XInclude"
    xmlns:teix="http://www.tei-c.org/ns/Examples"
    xmlns:custom="http://whatever"
    >
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
</xsl:stylesheet>
