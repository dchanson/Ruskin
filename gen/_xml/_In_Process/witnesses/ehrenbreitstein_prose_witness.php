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
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><!DOCTYPE HTML>
<html xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude">
   
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Ehrenbreitstein Prose</title><?php require_once(ROOT_PATH."layout_includes/site_top.inc.php"); ?>
          <link href="<?php echo r_build_url("style.php?p=site_styles.scss"); ?>" rel="stylesheet" type="text/css">
        </head>
   
   <?php require_once(ROOT_PATH."layout_includes/navigation.inc.php"); ?>
   
   
   <div class="witness">
      <div class="essay" id="">
         
         <h1 class="page-title"><span class="placeName-EHRENBREITSTEIN">Ehrenbreitstein</span> Prose
                &nbsp;  </h1> 
         
         
         <div class="p">It is said that French will carry you over all <span class="geogName-EUROPE">Europe</span>, over all 
                    civilised <span class="geogName-EUROPE">Europe</span> at least, and that may be, but it will not carry you 
                    over <span class="placeName-GERMANY">Germany</span>. You might manage with the Grand Turk, but you will 
                    not manage with the Germans. Wishing to see the interior of <span class="placeName-EHRENBREITSTEIN">Ehren‐ 
                    breitstein</span>, we got a young German guide, and crossing to a place where 
                    two roads met, considered him to be going the wrong way. There was a 
                    poser—how could we stop him? “Nein, nein,” we called aner him. “Ya,” 
                    quoth he. “Nein.” So he went the way we chose.</div> 
         
         
         <div class="p">After a very hard pull up an abominably cramp<sup>2</sup> hill, we beheld the 
                    top of the flagstaff. Here we are all right. No. There was the 
                    fortress certainly, but between us and it a ravine nearly a hundred feet 
                    deep, walled up the sides so as to form a very unhandsome ditch, and two 
                    or three dozen impudent, enormous, open‐mouthed guns grinning at us 
                    from the battlement. Well, there was nothing for it, so we went back 
                    and took the other path. </div>
         
         
         <div class="p">This time all went right, and we got into the fortress, first, however, 
                    prudently stepping up to a sentinel, to ask permission: and he brought 
                    an officer upon us. “Do you speak English, sir?” (A stare.) “Français?” 
                    (A vibratory motion of the head, and a “Nein.”) “Deutsch?” “Ya,” and 
                    there we stuck. Well, we pulled out our passport, but it was in French, 
                    and the officer could not read it. So he looked up and down and at us, 
                    and we looked up and down and at him. What was to be done? We 
                    bowed and he bowed, and we looked over the battlements and trotted 
                    down again, having a very high opinion of the height of German hills, 
                    the strength of German walls, the size of German cannon, and the stupidity 
                    of all German brains.<sup>3</sup></div>
         
         
         <div class="p"><sup>2</sup> [A favourite word with Ruskin in his juvenilia. He uses it of his own handwriting
                    (Vol. I. p. 455), and of the style of Thucydides (below, p.395); and here extends it to
                    a contracted, strait, narrow hill. In the “Tour” of <span class="date-1835">1835</span> (canto i. stanza 11), he uses
                    it of the statues on  (p. 400).]</div>
         
         <div class="p"><sup>3</sup> [Again a space left, for a small drawing.]</div>
         </div>
   </div>
   
   
   </html>