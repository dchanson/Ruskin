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
“Ragland Castle When Newly Built” [drawing]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msiii/1229170.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>“Ragland Castle When Newly Built” [drawing]</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title">“Ragland Castle when newly built”</h1>
         Pencil; full‐page, broadside, with bottom of image oriented to gutter of <a href="/notes/red_book_note" target="_self">Red Book</a>, 
                        <a href="/apparatuses/msiii_apparatus" target="_self"><span class="title-manuscript-MSIII">MS III</span></a>.
         
         
         <div class="p">The drawing shows the gatehouse with battlements and the entrance to the castle, leaving invisible the moated Citadel or Great Tower, 
                        which is situated to the left of and forward from the gatehouse. In 
                        <a href="/notes/bibliography#HEATHRAGLANDCASTLE" target="_self"><span class="title-guidebook-HEATHRAGLANDCASTLE-italic">Historical and Descriptive Accounts of the Ancient and Present State of Ragland Castle</span> [11th ed., <span class="date-1829">1829</span>]</a>, 
                        the <span class="placeName-MONMOUTH">Monmouth</span> printer, <span class="persName-CHMONMOUTH">Charles Heath</span> (<span class="date-1761-1830">1761–1830</span>), 
                        described the approach to the castleʼs entrance as the Ruskins would have seen it: 
                        “This front possesses a grandeur superior to every other part of this magnificent edifice. The towers which defended the principal entrance, 
                        with the broken angle of the Yellow Tower or Citadel [not shown in <span class="persName-JR">Ruskin</span>ʼs drawing], forcibly arrest the strangerʼs attention 
                        on his entrance into this Court [opening from the inside of the gatehouse]. It would be difficult, indeed, to find language sufficient to express, in its just colours, 
                        our admiration of this scene. Like the entrance into <span class="placeName-building-TINTERN">Tintern Abbey</span>, we stand before it overcome by the power of its imposing dignity, 
                        and feel unwilling to proceed to other parts of this extensive ruin” (n.p.). The Ruskinsʼ acquaintance with this guidebook is possibly evidenced by 
                        <span class="persName-JR">John</span>ʼs title for this drawing, 
                        which seems to refer to <span class="persName-CHMONMOUTH">Heath</span>ʼs method of organizing information under the two heads, 
                        “The Castle in Its Present State, as It Is Now Shewn” and “The Castle in Its Splendor”—the latter 
                        reconstructing the castleʼs past state, “when newly built,” as <span class="persName-JR">Ruskin</span> puts it.
                    </div>
         
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>