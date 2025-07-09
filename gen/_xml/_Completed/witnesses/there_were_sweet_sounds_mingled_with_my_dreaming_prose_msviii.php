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
“There were sweet sounds mingled with my dreaming” [essay]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msviii/MSVIII81v-82r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msviii" target="_self"></a><br/></div>
   <div class="fileName"><span>“There were sweet sounds mingled with my dreaming” [essay]</span></div>
   <div class="witness">
      <div class="essay" id="">
         
         <div class="p">There were sweet sounds mingled with my dreaming<br/>
                    and a thousand airy orbs of many coloured light floated<br/>
                    around me, and a bright shower of silvery light fell upon me<br/>
            <div id="MSVIII82r" class="pb"></div>
            <div class="pageNum-top-right">82</div><br/>
            and I started, and looked up. It was cold, very cold<br/>
                    and the crisp ice of the July morning shot its long<br/>
                    fleecy crystals over the narrow window <span class="space" style="padding-left:1.2em"> </span>Break the veil<br/>
                    away, and look out. There was no sunshine, the Augus‐<br/>
                    tines <span class="del-strikethrough">of</span> have not a perfectly clear day twelve times in<br/>
                    the year, yet the landscape was dazzling white with<br/>
                    broad sheets of pure summer snow that clung to the<br/>
                    rugged crags as if it loved them, and grew broader, and<br/>
                    deeper and whiter as it climbed up into the cloud, <span class="del-strikethrough">and</span><br/>
            <span class="del-strikethrough">th</span> through which it shone like a flood of sunlight<br/>
                    while the tall steep <span class="del-strikethrough">g</span> crags that rose forth of it, past<br/>
                    away into the grey mist.<br/></div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>