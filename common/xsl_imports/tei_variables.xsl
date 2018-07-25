<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0"
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
  xmlns:tei="http://www.tei-c.org/ns/1.0"
  xmlns:xi="http://www.w3.org/2001/XInclude"
  xmlns:custom="http://whatever"
  >
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
require($root_path."header.inc.php");
?>]]></xsl:variable>

<!--The <!DOCTYPE> below matches the default assigned by Adobe Dreamweaver CS4 and ensures that webpages created outside the application
(through XSLT) match those created inside.-->
<xsl:variable name="docVar">&#x003C;!DOCTYPE html PUBLIC &#x0022;-//W3C//DTD XHTML 1.0 Transitional//EN&#x0022; &#x0022;http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd&#x0022;&#x003E;</xsl:variable>
</xsl:stylesheet>