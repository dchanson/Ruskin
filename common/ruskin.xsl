<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0"
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
  xmlns:tei="http://www.tei-c.org/ns/1.0"
  xmlns:xi="http://www.w3.org/2001/XInclude"
  xmlns:teix="http://www.tei-c.org/ns/Examples"
  xmlns:custom="http://whatever"
  >
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

  <xsl:import href="xsl_imports/characters.xsl"/>
  <xsl:import href="xsl_imports/functions.xsl"/>
  <xsl:import href="xsl_imports/names.xsl"/>
  <xsl:import href="xsl_imports/table.xsl"/>
  <xsl:import href="xsl_imports/tei_bibliography.xsl"/>
  <xsl:import href="xsl_imports/tei_etc.xsl"/>
  <xsl:import href="xsl_imports/tei_head.xsl"/>
  <xsl:import href="xsl_imports/tei_hi.xsl"/>
  <xsl:import href="xsl_imports/tei_main_tags.xsl"/>
  <xsl:import href="xsl_imports/tei_ref.xsl"/>
  <xsl:import href="xsl_imports/witness_tags.xsl"/>

  <!--V A R I A B L E S
  The following assigns variables to frequently-used code and/or to code that, if not assigned a variable, would fail to validate and/or fail to
  output correctly. Variables appear after "name="; output in the associated comment to the right. Variables that begin with "x" output closing
  tags.-->

  <xsl:variable name="brVar">&#x003C;br/&#x003E;</xsl:variable>                   <!--<br/>       -->
  <xsl:variable name="xaVar">&#x003C;/a&#x003E;</xsl:variable>                    <!--</a>        -->
  <xsl:variable name="xdivVar">&#x003C;/div&#x003E;</xsl:variable>                <!--</div>      -->
  <xsl:variable name="xspanVar">&#x003C;/span&#x003E;</xsl:variable>              <!--</span>     -->
  <xsl:variable name="xtableVar">&#x003C;/table&#x003E;</xsl:variable>            <!--</table>    -->
  <xsl:variable name="navigationPhpVar">&#x003C;?php include(&#x022;../navigation.inc.php&#x022;); ?&#x003E;</xsl:variable>
  <xsl:variable name="topBtnPhpVar">&#x003C;?php include(&#x022;../top_button.inc.php&#x022;); ?&#x003E;</xsl:variable>

</xsl:stylesheet>
