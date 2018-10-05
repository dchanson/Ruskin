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

                <xsl:otherwise>, <xsl:if test="position() = count($root)" >and </xsl:if><xsl:apply-templates select="./tei:orgName"/></xsl:otherwise>
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

                <xsl:otherwise>, <xsl:if test="position() = count($root)" >and </xsl:if>

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
  <xsl:function name="custom:printRespPersons">
    <xsl:param name="root" />
    
    <xsl:for-each select="$root">
      <xsl:apply-templates select="tei:forename" />
      <xsl:value-of select="' '"/>
      <xsl:apply-templates select="tei:surname"/>
    </xsl:for-each>
  </xsl:function>
  
  <xsl:function name="custom:printRespStmt">
    <xsl:param name="root"/>
    
    <xsl:apply-templates select="$root/tei:resp"/>
    
    <xsl:for-each select="$root/tei:persName">
      <xsl:value-of select="' '"/>

      <xsl:choose>
        <xsl:when test="position() = last()">
          
          <xsl:value-of select="custom:printRespPersons(.)" />.
        </xsl:when>

        <xsl:otherwise>
          <xsl:value-of select="custom:printRespPersons(.)" />
          
          <xsl:choose>
            <xsl:when test="position() = last()-1" >
              <xsl:value-of select="', and '" />
            </xsl:when>
            <xsl:otherwise>
              <xsl:value-of select="', '" />
            </xsl:otherwise>
          </xsl:choose>
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
          <xsl:apply-templates select="./tei:editor/tei:surname"/>
          <text> </text>
          <xsl:apply-templates select="./tei:persName/tei:forename"/>
          
          <xsl:choose>            
            <xsl:when test="position() = count($root)" >, and </xsl:when>
            <xsl:otherwise>, </xsl:otherwise>
          </xsl:choose>
          <!-- </xsl:if> -->
          <!-- <xsl:value-of select="', and '"/> -->

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
            <xsl:variable name="count_pub_place" select="count(./tei:pubPlace)" /> 
            <xsl:for-each select="./tei:pubPlace">
              <xsl:apply-templates select="."/>
              <xsl:if test="position() &lt; $count_pub_place"> and </xsl:if>
            </xsl:for-each>

            <xsl:value-of select="'. '"/>
          </xsl:if>

        </xsl:when>

        <xsl:otherwise>

          <xsl:if test="./tei:pubPlace">

            <!-- <xsl:apply-templates select="./tei:pubPlace"/> -->
            <xsl:variable name="count_pub_place" select="count(./tei:pubPlace)" /> 
            <xsl:for-each select="./tei:pubPlace">
              <xsl:apply-templates select="."/>
              <xsl:if test="position() &lt; $count_pub_place"> and </xsl:if>
            </xsl:for-each>

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
  
  <xsl:template match="tei:biblStruct">
    <xsl:choose>

      <xsl:when test="tei:analytic">
        <!-- Analytic -->

        <xsl:value-of select="custom:printAuthors(./tei:analytic/tei:author)"/>


        <xsl:for-each select="./tei:analytic/tei:title">
          <xsl:apply-templates/>
          <xsl:choose>
            <xsl:when test="position() = count(./tei:analytic/tei:title)">
              <xsl:value-of select="'. '"/>
            </xsl:when>
            <xsl:otherwise>
              <xsl:value-of select="', '"/>
            </xsl:otherwise>
          </xsl:choose>
        </xsl:for-each>
        
        <xsl:value-of select="custom:printAuthors(./tei:monogr/tei:author)"/>
        
        
        <xsl:for-each select="./tei:monogr/tei:title">
          <xsl:apply-templates/>
          <xsl:choose>
            <xsl:when test="position() = last()" >
              <xsl:value-of select="'. '"/>
            </xsl:when>
            <xsl:otherwise>
              <xsl:value-of select="': '"/>
            </xsl:otherwise>
          </xsl:choose>
        </xsl:for-each>
        
        <xsl:for-each select="./tei:monogr/tei:edition">
          <xsl:apply-templates/><xsl:value-of select="'. '"/>
        </xsl:for-each>

        <xsl:value-of select="custom:printEditors(./tei:monogr/tei:editor)"/>

        <xsl:for-each select="tei:monogr/tei:imprint">
          <xsl:choose>
            <xsl:when test="./tei:pubPlace">
              <xsl:apply-templates select="./tei:pubPlace"/>,
            </xsl:when>
          </xsl:choose>
          
          <xsl:choose>
            <xsl:when test="./tei:publisher">

              <xsl:apply-templates select="./tei:publisher"/>.
              
            </xsl:when>
          </xsl:choose>
          
          <xsl:choose>

            <xsl:when test="./tei:biblScope[@type='vol']">
              <xsl:apply-templates select="./tei:biblScope[@type='vol']"/>
              <xsl:choose>
                <xsl:when test="./tei:biblScope[@type='vol']/following-sibling::tei:biblScope[@type='issue']">
                  <xsl:value-of select="'.'" />
                </xsl:when>
                <xsl:otherwise><xsl:value-of select="', '"/></xsl:otherwise>
              </xsl:choose>
            </xsl:when>
          </xsl:choose>

          <xsl:choose>

            <xsl:when test="./tei:biblScope[@type='issue']">
              <xsl:apply-templates select="./tei:biblScope[@type='issue']"/>
            </xsl:when>
          </xsl:choose>

          <xsl:choose>
            <xsl:when test="./tei:date">
              (<xsl:apply-templates select="./tei:date"/>
              <xsl:value-of select="')'" />
              <xsl:choose>
                <xsl:when test="./tei:biblScope[@type='pages']">
                  <xsl:value-of select="': '" />
                </xsl:when>
                <xsl:otherwise>
                  <xsl:value-of select="'. '" />
                </xsl:otherwise>
              </xsl:choose>
            </xsl:when>
          </xsl:choose>

          <xsl:choose>

            <xsl:when test="./tei:biblScope[@type='pages']">

              <xsl:apply-templates select="./tei:biblScope[@type='pages']"/>.
            </xsl:when>
          </xsl:choose>
        </xsl:for-each>
        

      </xsl:when>

      <xsl:otherwise>
        <!-- Monogr -->
        <xsl:value-of select="custom:printAuthors(./tei:monogr/tei:author)"/>

        <xsl:for-each select="./tei:monogr/tei:title">
          <xsl:apply-templates/>
          <text>. </text>
        </xsl:for-each>
        
        <xsl:for-each select="./tei:monogr/tei:edition">
          <xsl:apply-templates/><xsl:value-of select="'. '"/>
        </xsl:for-each>
        
        <xsl:for-each select="./tei:monogr/tei:respStmt">
          <xsl:value-of select="custom:printRespStmt(.)"/>
        </xsl:for-each>

        <xsl:value-of select="custom:printEditors(./tei:monogr/tei:editor)"/>
        
        <xsl:for-each select="./tei:monogr/tei:imprint">
          <xsl:value-of select="custom:printPublisher(.)"/>
          <xsl:if test="not(position() = count(./tei:monogr/tei:imprint))">
            <xsl:value-of select="' '" />
          </xsl:if>
        </xsl:for-each>

      </xsl:otherwise>

    </xsl:choose>
    
    <xsl:for-each select="./tei:note">
      <xsl:apply-templates />
    </xsl:for-each>
    
    <xsl:for-each select="./tei:relatedItem">
      <xsl:choose>
        <xsl:when test="@type='reprintedFrom'">
          Reprinted from <xsl:apply-templates select="./tei:bibl/tei:date" />.a
        </xsl:when>
        <xsl:when test="@type='revisedAs'">
          Revised As 
          <xsl:apply-templates select="./tei:biblStruct" />
        </xsl:when>
        <xsl:otherwise>
          <!-- RI Type: <xsl:value-of select="@type" /> -->
          <xsl:message terminate="yes">&lt;relatedItem&gt; needs a valid "type" attribute</xsl:message>
        </xsl:otherwise>
      </xsl:choose>
    </xsl:for-each>
  </xsl:template>
  
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
            <!-- <xsl:variable name="index_count" select="$index_count + count(./tei:country)" /> -->
            
            
          </xsl:for-each>
        </li>
      </xsl:for-each>

      <xsl:for-each select="tei:biblStruct">
        <li class="bib-item" id="{@xml:id}">
          <xsl:apply-templates select="." />
        </li>
      </xsl:for-each>

    </ul>

  </xsl:template>
</xsl:stylesheet>