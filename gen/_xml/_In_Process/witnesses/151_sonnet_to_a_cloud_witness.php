<?php
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
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php

define("FILE_NAME", <<<EOT
151. "Sonnet to a Cloud" Witness
EOT
);
define("FACS_FILE_NAMES", <<<EOT
image.jpg image.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>151. "Sonnet to a Cloud" Witness</span></div>
   <div class="essay" id="">
      
      <h1 class="page-title">151. "Sonnet to a Cloud" Witness</h1>
      
      <div class="p">151. “Sonnet to a Cloud,” <span class="date-1831-12">December 1831</span> to <span class="date-1832-01">January 1832</span>, 
                    MSS V, VIII. Printed PJR, 1:102; Works, 2:332.</div>
      
      
      <div class="p">See no. 148 for dating. Follows no. 147 in MS V; in MS VIII, nos. 148–50 and stanzas 5–12 of no. 135 intervene 
                    between no. 147 and this poem. In MS VIII, entitled merely “Sonnet.”</div>
      </div>
   <div class="witness">
      <div class="poem" id="">
         
         <h1 class="page-title">Sonnet to a Cloud</h1>
         
         <div class="lg-stanza">
            <span class="l">Thou little roamer of the northern blast</span><br/>
            <span class="l">Mantling the brow of ruby fringèd morn</span><br/>
            <span class="l">So swift so transient whither art thou borne</span><br/>
            <span class="l">Hither and thither by the breezes cast</span><br/>
            <span class="l">Hast shadowed sultry Araby or past
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">Lumed by the lightning on the gloomy storm</span><br/>
            <span class="l">Or dimmed the lustre of the moonès horn </span><br/>
            <span class="l">Or swept oer mountain summit fleet and fast</span><br/>
            <span class="l">Or darkened oer the bosom of the brine</span><br/>
            <span class="l">Or wanton chased the summer breezes sigh 
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">And floated oer a  scorching clime</span><br/>
            <span class="l">Fading upon the clear and azure sky</span><br/>
            <span class="l">Met<div 
          class="subst-del s-subst s-del" >hought</div><div 
          class="s-subst s-add s-inline">hinks</div> I see thee like the wing of time</span><br/>
            <span class="l">Melting away into eternity</span><br/>
            </div>
         </div>
   </div>
   <div class="essay" id="">
      
      <div class="p">Textual note.—As compared with the edited version in Works, <span class="persName-JR">Ruskin’s</span> fair copy in MS V and his draft in MS VIII have all lines 
                    are flush left, without the editors' indentations; and first letters of lines and place names are capitalized. MS VIII version 
                    entirely unpunctuated; MS V unpunctuated, except for accents on “fringèd” (line 2) and “moonès” (line 7). </div>
      
      
      <div class="p">6, MS V, Works lightening] lightning MS VIII</div>
      
      <div class="p">7, MS V moonès] moons MS VIII; Works moonè’s</div>
      
      <div class="p">8, MS V mountain summit] mountains summit MS VIII; Works mountain-summit,</div>
      
      <div class="p">10, MS V wanton fled] wanton [chased] fled MS VIII; Works wanton, fled</div> 
      
      <div class="p">11, MS V a thirsty] a [sultry] thirsty MS VIII; Works a thirsty,</div>
      
      <div class="p">13, MS V Methinks I see thee] Me[thought]thinks I see the MS VIII; Works —Methinks I see thee</div>
      </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>