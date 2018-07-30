<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0"
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
  xmlns:tei="http://www.tei-c.org/ns/1.0"
  xmlns:xi="http://www.w3.org/2001/XInclude"
  xmlns:teix="http://www.tei-c.org/ns/Examples"
  xmlns:custom="http://whatever"
  >
  
  
  <xsl:template name="custom:printLineNumber">
    <xsl:variable name="lineNumber" select="count(./preceding::tei:l) + 1" />
    
    <xsl:if test="$lineNumber mod 5 = 0">
      <div class="s-line-number s-line-number-auto">
        <div class="tooltip">
          System generated line number
        </div>
        <a href="javascript:void(0)">
          <xsl:value-of select="$lineNumber" />
        </a>
      </div>
    </xsl:if>
  </xsl:template>
  
</xsl:stylesheet>
