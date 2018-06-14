<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0"
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
  xmlns:tei="http://www.tei-c.org/ns/1.0"
  xmlns:xi="http://www.w3.org/2001/XInclude"
  xmlns:teix="http://www.tei-c.org/ns/Examples"
  xmlns:custom="http://whatever"
  >

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
      </xsl:stylesheet>
