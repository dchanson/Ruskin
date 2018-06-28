<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="2.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever">

  <xsl:function name="custom:printAuthors">

    <xsl:param name="root"/>

    <xsl:choose>

      <xsl:when test="count($root) = 0"></xsl:when>

      <xsl:otherwise>

        <xsl:for-each select="$root">

          <xsl:choose>

            <xsl:when test="./tei:orgName">

              <xsl:choose>

                <xsl:when test="position() = 1">
                  <xsl:apply-templates select="./tei:orgName"/></xsl:when>

                <xsl:otherwise>, and<xsl:apply-templates select="./tei:orgName"/></xsl:otherwise>
              </xsl:choose>
            </xsl:when>

            <xsl:otherwise>

              <xsl:choose>

                <xsl:when test="position() = 1">

                  <xsl:apply-templates select="./tei:persName/tei:surname"/>

                  <xsl:choose>

                    <xsl:when test="./tei:persName/tei:forename">,

                      <xsl:apply-templates select="./tei:persName/tei:forename"/>
                    </xsl:when>
                  </xsl:choose>
                </xsl:when>

                <xsl:otherwise>, and

                  <xsl:apply-templates select="./tei:persName/tei:forename"/>

                  <xsl:value-of select="' '"/>

                  <xsl:apply-templates select="./tei:persName/tei:surname"/></xsl:otherwise>
              </xsl:choose>
            </xsl:otherwise>
          </xsl:choose>
        </xsl:for-each>

        <xsl:choose>

          <xsl:when test="count($root) = 1">

            <xsl:if test="substring($root/tei:persName[1]/tei:forename, string-length($root/tei:persName[1]/tei:forename), 1) != '.'">
              <xsl:value-of select="'.'"/>
            </xsl:if>

            <xsl:value-of select="' '"/>
          </xsl:when>

          <xsl:otherwise>

            <xsl:if test="substring($root[last()]/tei:persName/tei:surname, string-length($root[last()]/tei:persName/tei:surname), 1) != '.'">
              <xsl:value-of select="'.'"/>
            </xsl:if>

            <xsl:value-of select="' '"/>
          </xsl:otherwise>
        </xsl:choose>

      </xsl:otherwise>
    </xsl:choose>

  </xsl:function>

  <xsl:function name="custom:printRespStmt">

    <xsl:param name="root"/>

    <xsl:for-each select="$root">

      <xsl:apply-templates select="./tei:resp"/>

      <xsl:value-of select="' '"/>

      <xsl:choose>

        <xsl:when test="position() = last()">

          <xsl:apply-templates select="./tei:persName/tei:forename"/>

          <xsl:value-of select="' '"/>

          <xsl:apply-templates select="./tei:persName/tei:surname"/>.
        </xsl:when>

        <xsl:when test="position() = 1">

          <xsl:apply-templates select="./tei:persName/tei:forename"/>

          <xsl:value-of select="' '"/>

          <xsl:apply-templates select="./tei:persName/tei:surname"/></xsl:when>

        <xsl:otherwise>, and

          <xsl:apply-templates select="./tei:persName/tei:forename"/>

          <xsl:value-of select="' '"/>

          <xsl:apply-templates select="./tei:persName/tei:surname"/>

          <xsl:value-of select="' '"/>
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

          <xsl:apply-templates select="./tei:persName/tei:forename"/>

          <xsl:value-of select="' '"/>

          <xsl:apply-templates select="./tei:persName/tei:surname"/>
        </xsl:when>

        <xsl:otherwise>

          <xsl:value-of select="', and '"/>

          <xsl:apply-templates select="./tei:persName/tei:forename"/>

          <xsl:value-of select="' '"/>

          <xsl:apply-templates select="./tei:persName/tei:surname"/>
        </xsl:otherwise>
      </xsl:choose>
    </xsl:for-each>

    <xsl:choose>

      <xsl:when test="count($root) &gt; 0">.
      </xsl:when>
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

            <xsl:apply-templates select="./tei:publisher"/>

            <xsl:if test="./tei:date">

              <xsl:value-of select="', '"/>

              <xsl:value-of select="./tei:date"/>
            </xsl:if>

            <xsl:value-of select="'. '"/>
          </xsl:if>

          <xsl:if test="./tei:pubPlace">

            <xsl:apply-templates select="./tei:pubPlace"/>

            <xsl:value-of select="'. '"/>
          </xsl:if>

        </xsl:when>

        <xsl:otherwise>

          <xsl:if test="./tei:pubPlace">

            <xsl:apply-templates select="./tei:pubPlace"/>

            <xsl:if test="./tei:publisher">
              <xsl:value-of select="': '"/>
            </xsl:if>
          </xsl:if>

          <xsl:if test="./tei:publisher">
            <xsl:apply-templates select="./tei:publisher"/>
          </xsl:if>

          <xsl:if test="./tei:date and (./tei:publisher or ./tei:pubPlace)">
            <xsl:value-of select="', '"/>
          </xsl:if>

          <xsl:value-of select="./tei:date"/>

          <xsl:value-of select="'.'"/>

        </xsl:otherwise>
      </xsl:choose>
    </xsl:for-each>

  </xsl:function>
  
  <xsl:function name="custom:commaOrPeriod">
    <xsl:param name="index" />
    <xsl:param name="total" />
    <!-- <br />INDEX: <xsl:value-of select="$index" />, total: <xsl:value-of select="$total" /> -->
    <xsl:choose>
      <xsl:when test="$index &lt; $total">,
      </xsl:when>
      <xsl:otherwise>.</xsl:otherwise>
    </xsl:choose>
  </xsl:function>
    
  <xsl:template match="tei:listBibl">
    
    <xsl:value-of select="$brVar" disable-output-escaping="yes"/>
    <ul>

      <xsl:for-each select="tei:msDesc">
        <li class="bib-item" id="{@xml:id}">
          <!-- Manuscript sources -->
          <xsl:for-each select="./tei:msIdentifier">
            <xsl:apply-templates select="./tei:msName" />.
            <xsl:variable name="children_count" select="count(./*)-1" />
            
            <xsl:variable name="index_count" select="0" />
            
            <xsl:for-each select="./tei:idno">
              <xsl:value-of select="." />
              <xsl:variable name="index_count" select="$index_count + 1" />
              <xsl:value-of select="custom:commaOrPeriod($index_count, $children_count)" />
            </xsl:for-each>
            <xsl:variable name="index_count" select="$index_count + count(./tei:idno)" />
            
            <!-- COUNT_P_1: <xsl:value-of select="$index_count + 1" /> -->
            <xsl:for-each select="./tei:collection">
              <xsl:value-of select="." />
              <xsl:variable name="index_count" select="$index_count + 1" />
              <xsl:value-of select="custom:commaOrPeriod($index_count, $children_count)" />
            </xsl:for-each>
            <xsl:variable name="index_count" select="$index_count + count(./tei:collection)" />
            
            <xsl:for-each select="./tei:repository">
              <xsl:value-of select="." />
              <xsl:variable name="index_count" select="$index_count + 1" />
              <xsl:value-of select="custom:commaOrPeriod($index_count, $children_count)" />
            </xsl:for-each>
            <xsl:variable name="index_count" select="$index_count + count(./tei:repository)" />
            
            <xsl:for-each select="./tei:institution">
              <xsl:value-of select="." />
              <xsl:variable name="index_count" select="$index_count + 1" />
              <xsl:value-of select="custom:commaOrPeriod($index_count, $children_count)" />
            </xsl:for-each>
            <xsl:variable name="index_count" select="$index_count + count(./tei:institution)" />
            
            <xsl:for-each select="./tei:settlement">
              <xsl:value-of select="." />
              <xsl:variable name="index_count" select="$index_count + 1" />
              <xsl:value-of select="custom:commaOrPeriod($index_count, $children_count)" />
            </xsl:for-each>
            <xsl:variable name="index_count" select="$index_count + count(./tei:settlement)" />
            
            <xsl:for-each select="./tei:region">
              <xsl:value-of select="." />
              <xsl:variable name="index_count" select="$index_count + 1" />
              <xsl:value-of select="custom:commaOrPeriod($index_count, $children_count)" />
            </xsl:for-each>
            <xsl:variable name="index_count" select="$index_count + count(./tei:region)" />
            
            <xsl:for-each select="./tei:country">
              <xsl:value-of select="." />
              <xsl:variable name="index_count" select="$index_count + 1" />
              <xsl:value-of select="custom:commaOrPeriod($index_count, $children_count)" />
            </xsl:for-each>
            <xsl:variable name="index_count" select="$index_count + count(./tei:country)" />
            
            
          </xsl:for-each>
        </li>
      </xsl:for-each>

      <xsl:for-each select="tei:biblStruct">
        <li class="bib-item">

          <xsl:choose>

            <xsl:when test="tei:analytic">
              <!-- Analytic -->

              <xsl:value-of select="custom:printAuthors(./tei:analytic/tei:author)"/>

              <text>

                <xsl:for-each select="./tei:analytic/tei:title">

                  <xsl:apply-templates/><xsl:value-of select="'. '"/>
                </xsl:for-each>

                <xsl:for-each select="./tei:monogr/tei:title">

                  <xsl:apply-templates/><xsl:value-of select="'. '"/>
                </xsl:for-each>

              </text>

              <xsl:choose>

                <xsl:when test="tei:monogr/tei:imprint/tei:biblScope[@type='vol']">
                  Vol.

                  <xsl:apply-templates select="tei:monogr/tei:imprint/tei:biblScope[@type='vol']"/>,
                </xsl:when>
              </xsl:choose>

              <xsl:choose>

                <xsl:when test="tei:monogr/tei:imprint/tei:biblScope[@type='issue']">
                  Issue.

                  <xsl:apply-templates select="tei:monogr/tei:imprint/tei:biblScope[@type='issue']"/>,
                </xsl:when>
              </xsl:choose>

              <xsl:choose>

                <xsl:when test="tei:monogr/tei:imprint/tei:date">

                  <xsl:apply-templates select="tei:monogr/tei:imprint/tei:date"/>.
                </xsl:when>
              </xsl:choose>

              <xsl:choose>

                <xsl:when test="tei:monogr/tei:imprint/tei:biblScope[@type='pages']">

                  <xsl:apply-templates select="tei:monogr/tei:imprint/tei:biblScope[@type='pages']"/>.
                </xsl:when>
              </xsl:choose>

            </xsl:when>

            <xsl:otherwise>

              <xsl:value-of select="custom:printAuthors(./tei:monogr/tei:author)"/>

              <xsl:for-each select="./tei:monogr/tei:title">

                <xsl:apply-templates/>
                <text>.
                </text>
              </xsl:for-each>

              <xsl:value-of select="custom:printRespStmt(./tei:monogr/tei:respStmt)"/>

              <xsl:value-of select="custom:printEditors(./tei:monogr/tei:editor)"/>

              <xsl:value-of select="custom:printPublisher(./tei:monogr/tei:imprint)"/>

            </xsl:otherwise>

          </xsl:choose>

        </li>
      </xsl:for-each>

    </ul>

  </xsl:template>
</xsl:stylesheet>