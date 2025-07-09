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
I Chronicles 28:9
EOT
);
define("FACS_FILE_NAMES", <<<EOT
image.jpg image.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>I Chronicles 28:9</span></div>
   <div class="witness">
      <div class="letter" id="">
         
         <h1 class="page-title">Title of Prose Piece</h1>
         
         <div class="chapter" id="">
            <span class="head-chapter" id="">Title of Chapter</span>
            
            <div class="p">And thou, Solomon my son, know thou the God of thy father, and serve him with a perfect heart and with a willing mind: for the Lord searcheth all hearts, and understandeth all the imaginations of the thoughts: if thou seek Him, He will be found of thee; but if thou forsake Him, He will cast thee off forever. 28st Chronicles 9th v
                    </div>
            
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