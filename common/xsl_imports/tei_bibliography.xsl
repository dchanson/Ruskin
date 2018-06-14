<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0"
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
  xmlns:tei="http://www.tei-c.org/ns/1.0"
  xmlns:xi="http://www.w3.org/2001/XInclude"
  xmlns:teix="http://www.tei-c.org/ns/Examples"
  xmlns:custom="http://whatever"
  >
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
</xsl:stylesheet>
