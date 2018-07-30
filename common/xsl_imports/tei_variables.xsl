<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0"
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
  xmlns:tei="http://www.tei-c.org/ns/1.0"
  xmlns:xi="http://www.w3.org/2001/XInclude"
  xmlns:custom="http://whatever"
  >
  <!--V A R I A B L E S
  The following assigns variables to frequently-used code and/or to code that, if not assigned a variable, would fail to validate and/or fail to
  output correctly. Variables appear after "name="; output in the associated comment to the right. Variables that begin with "x" output closing
  tags.-->
  
  <xsl:variable name="headerIncludeVar"><![CDATA[<?php
$paths = array('./', '../', '../../');
$root_path = './';

foreach ($paths  as $path){
$filename = $path.'header.inc.php';

if (file_exists($filename)){
$root_path = $path;
break;
};
}
define('ROOT_PATH', $root_path);
require_once($root_path."header.inc.php");
?>]]></xsl:variable>

<!--The <!DOCTYPE> below matches the default assigned by Adobe Dreamweaver CS4 and ensures that webpages created outside the application
(through XSLT) match those created inside.-->
<xsl:variable name="docVar">&#x003C;!DOCTYPE html PUBLIC &#x0022;-//W3C//DTD XHTML 1.0 Transitional//EN&#x0022; &#x0022;http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd&#x0022;&#x003E;</xsl:variable>


<xsl:variable name="brVar">&#x003C;br/&#x003E;</xsl:variable>                   <!--<br/>       -->
<xsl:variable name="xaVar">&#x003C;/a&#x003E;</xsl:variable>                    <!--</a>        -->
<xsl:variable name="xdivVar">&#x003C;/div&#x003E;</xsl:variable>                <!--</div>      -->
<xsl:variable name="xspanVar">&#x003C;/span&#x003E;</xsl:variable>              <!--</span>     -->
<xsl:variable name="xtableVar">&#x003C;/table&#x003E;</xsl:variable>            <!--</table>    -->
<xsl:variable name="xtrVar">&#x003C;/tr&#x003E;</xsl:variable>            <!--</table>    -->
<xsl:variable name="xtdVar">&#x003C;/td&#x003E;</xsl:variable>            <!--</table>    -->

<xsl:variable name="navigationPhpVar">&#x003C;?php require_once(ROOT_PATH.&#x022;layout_includes/navigation.inc.php&#x022;); ?&#x003E;</xsl:variable>
<xsl:variable name="topBtnPhpVar">&#x003C;?php require_once(ROOT_PATH.&#x022;layout_includes/top_button.inc.php&#x022;); ?&#x003E;</xsl:variable>
<xsl:variable name="siteTopPhpVar">&#x003C;?php require_once(ROOT_PATH.&#x022;layout_includes/site_top.inc.php&#x022;); ?&#x003E;</xsl:variable>
<xsl:variable name="showCaseTopPhpVar">&#x003C;?php require_once(ROOT_PATH.&#x022;layout_includes/showcase_top.inc.php&#x022;); ?&#x003E;</xsl:variable>
<xsl:variable name="showCaseBottomPhpVar">&#x003C;?php require_once(ROOT_PATH.&#x022;layout_includes/showcase_bottom.inc.php&#x022;); ?&#x003E;</xsl:variable>
</xsl:stylesheet>