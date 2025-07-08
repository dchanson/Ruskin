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
Advice of the Mother of the Chevalier Bayard on His Leaving Home to Commence the Profession of Arms
EOT
);
define("FACS_FILE_NAMES", <<<EOT
image.jpg image.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>Advice of the Mother of the Chevalier Bayard on His Leaving Home to Commence the Profession of Arms</span></div>
   <div class="witness">
      <div class="letter" id="">
         
         <h1 class="page-title">Title of Prose Piece</h1>
         
         <div class="chapter" id="">
            <span class="head-chapter" id="">Title of Chapter</span>
            
            <div class="p">Peter, my friend, you are going into the service of a noble Prince; as much as a mother can command her child, do I command you three things, which, if you do, rest assured they will enable you to pass through this present life with honour. The first is, that above all things you love and serve God, without offending Him in any way, if it be possible to you. For it is He who gave us life, it is He who will save us, and without Him and His grace we should not have the power to perform a single good work in this world. Recommend yourself to Him every morning and evening and He will give you aid. The second is, that you be mild and courteous to all Gentlemen, casting away pride. Be humble and obliging to everybody. Be not a slanderer or a liar. Keep yourself temperate in regard to eating & drinking. Avoid envy it is a mean vice. Be neither a flatterer nor a tale-bearer, for people of this description do not usually attain to any high degree of excellence. Be loyal in word and deed. Keep your promises. Succour poor widows and orphans, and God will reward you. The third is, that you be bountiful of the goods that God shall give you to the poor and needy, for to give for His honours sake never made any man poor; and believe me, my child, the alms that you shall dispense will greatly profit both your body and soul.
                        .</div>
            
            <div class="p">Body paragraph containing a list:
                        
               <ul>
                  
                  <li>First item in the list.</li>
                  
                  <li>Second item.</li>
                  
                  <li>Third item.</li>
                  </ul>
               </div>
            
            
            <div class="p">
               oh is it raining cried Lucy I am very sorry for I have so many things to do.
                        but however I have plenty of things. to do in the house as well said Lucy
                    </div>
            
            <div class="p">
               yes you have answered her mother.
                    </div>
            </div>
         </div>
   </div>
   <div class="witness">
      <div class="poem" id="">
         
         <h1 class="page-title">Title of Poem</h1>
         
         <div class="lg-stanza">
            <span class="l">First line of poem</span><br/>
            <span class="l">Second line of poem</span><br/>
            </div>
         </div>
   </div>
   <div class="drama" id="">
      
      <h1 class="page-title">Title of Drama</h1>
      
      <div class="act" id="">
         <span class="head-act" id="">Act I</span>
         
         Antony
         (pacing anxiously)
         <span class="l">I come to bury Caesar, not to praise him.</span><br/>
         
         </div>
      </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>