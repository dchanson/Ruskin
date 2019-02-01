<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0"
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
  xmlns:tei="http://www.tei-c.org/ns/1.0"
  xmlns:xi="http://www.w3.org/2001/XInclude"
  xmlns:teix="http://www.tei-c.org/ns/Examples"
  xmlns:custom="http://whatever"
  >
  <xsl:param name="assetUrl" select="'http://ruskin.local:8080/src/images'" />
  <xsl:param name="htmlForm" select="0" />
    
  <xsl:output method="html" use-character-maps="uni-hex"/>
  
  <!--A B O U T   T H I S   D O C U M E N T
  Filename:               ruskin.xsl
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
  
  <xsl:variable name="newServerPath" select="'http://localhost:9001'" />
  <!-- <xsl:variable name="newServerPath" select="'http://147.174.3.208:9001'" /> -->
  
  <xsl:import href="xsl_imports/third_party.xsl"/>
  <xsl:import href="xsl_imports/characters.xsl"/>
  <xsl:import href="xsl_imports/functions.xsl"/>
  <xsl:import href="xsl_imports/names.xsl"/>
  <xsl:import href="xsl_imports/table.xsl"/>
  <xsl:import href="xsl_imports/line_numbers.xsl"/>
  <xsl:import href="xsl_imports/tei_bibliography.xsl"/>
  <xsl:import href="xsl_imports/tei_etc.xsl"/>
  <xsl:import href="xsl_imports/tei_head.xsl"/>
  <xsl:import href="xsl_imports/tei_hi.xsl"/>
  <xsl:import href="xsl_imports/tei_ref.xsl"/>
  <xsl:import href="xsl_imports/tei_main_tags.xsl"/>
  <xsl:import href="xsl_imports/witness_tags.xsl"/>
  <xsl:import href="xsl_imports/tei_variables.xsl"/>
  
  

</xsl:stylesheet>
