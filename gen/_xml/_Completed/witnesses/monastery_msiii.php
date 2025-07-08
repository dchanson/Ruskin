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
“The Monastery”
EOT
);
define("FACS_FILE_NAMES", <<<EOT
1229189.jpg 1229190.jpg 1229191.jpg 1229192.jpg 1229193.jpg 1229194.jpg 1229179.jpg 1229180.jpg 1229181.jpg 1229182.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>“The Monastery”</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <h1 class="page-title"><span class="space" style="padding-left:4.0em"> </span><span class="caps">THE MONASTERY</span></h1>
         
         <div class="book" id="book1">
            <span class="head-book" id=""><span class="space" style="padding-left:6.4em"> </span><span class="smallcaps">BOOK FIRST</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_textual#BOOKSGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span></span>
            
            <div class="lg-stanza">
               <span class="l"><span class="caps">WHITE</span> lady <span class="persName-fictional-WHITELADY">white lady</span> sing on in the glen,</span><br/>
               <span class="l">of <span class="geogName-GLENDEARG">glendarg</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_contextual#GLENDEARGGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span> but do not do ill to men,</span><br/>
               <span class="l">many a haunt and many a nook,</span><br/>
               <span class="l">many a thought and many a look,</span><br/>
               <div id="" class="pb"></div>
               <div class="head-top"><span class="space" style="padding-left:4.4em"> </span><span class="smallcaps">BOOK FIRST</span></div><br/>
               <div class="pageNum-top"><span class="space" style="padding-left:6.8em"> </span>71</div><br/>                       
               <span class="l"><span class="add">5</span>has been reported of that place,
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
               <span class="l">of the people of thy race.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_contextual#WHITELADYWHITELADYGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span></span><br/>
               <span class="l">there was a river called the <span class="geogName-TWEEDRIVER">tweed</span>,</span><br/>
               <span class="l">where the sheep and cattle fed:</span><br/>
               <span class="l">there was a drawbridge over the stream,</span><br/>
               <span class="l"><span class="add">10</span>to let over travelling men,
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
               <span class="l">that came down the narrow glen.</span><br/>
               <span class="l">at the bridge there was a warder <span class="unclear-illegible-">|</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_textual#UNKNOWNMARKGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span>.</span><br/>
               <span class="l">he lived in a lonly tower,</span><br/>
               <span class="l">to let down the drawbridge when:</span><br/>
               <span class="l"><span class="add">15</span>there came over tra<div 
          class="subst-del s-subst s-del" ><span class="unclear-DCH">lll</span></div><div 
          class="s-subst s-add s-overwrite s-inline">ve</div>lling men;<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_textual#INVERTEDSEMICOLONGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                c
                </span>
                
              </a></span><div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
               <span class="l">but from them he exacted pay,</span><br/>
               <span class="l">before he let them on their way.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_contextual#BRIDGEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span></span><br/>
               <span class="l">one day a monk<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_contextual#MONKGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                4
                </span>
              </a></span> was going by,</span><br/>
               <span class="l">to go home to his monastery:</span><br/>
               <span class="l"><span class="add">20</span>the monk was forced to <div 
              class="add-above" 
              style="left:9.2em">go to</div> a ford,
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
               <span class="l">he was not quite so rich as a lord,</span><br/>
               <span class="l">he would not give the warder pay,</span><br/>
               <span class="l">the warder told him to go that way.</span><br/>
               <span class="l">when he came to the side of the stream,</span><br/>
               <span class="l"><span class="add">25</span>where his mule was to go in,
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/>
               <div id="1229190" class="pb"></div>
               <div class="head-top"><span class="space" style="padding-left:6.0em"> </span><span class="smallcaps">BOOK FIRST</span></div><br/>
               <div class="pageNum-top"><span class="space" style="padding-left:7.2em"> </span>72</div><br/>
               <span class="l"><span class="add"><span class="del-strikethrough">30</span></span>he saw a figure in great grief:</span><br/>
               <span class="l">the monk resolved to give her relief,</span><br/>
               <span class="l">she seemed as if to pass the water,</span><br/>
               <span class="l">was her wish the cruel warder;<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_textual#INVERTEDSEMICOLONGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                d
                </span>
                
              </a></span></span><br/>
               <span class="l"><span class="add">30</span>perhaps deprived her of her way,
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L30" id="L30">30</a></div></span><br/>
               <span class="l">but what it was she did not say.</span><br/>
               <span class="l">she jumped upon his mule behind,</span><br/>
               <span class="l">swifter even than the wind:</span><br/>
               <span class="l">the mule did kick and plunge and leaped,</span><br/>
               <span class="l"><span class="add">35</span>the monk did sit upon the beast and whipped:
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L35" id="L35">35</a></div></span><br/>
               <span class="l">at length she plunged into the river,</span><br/>
               <span class="l">leaping oer a bunch of heather;<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_textual#INVERTEDSEMICOLONGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                e
                </span>
                
              </a></span></span><br/>
               <span class="l">the ford was deep the current bore,</span><br/>
               <span class="l">the mule along the winding shore.</span><br/>
               <span class="l"><span class="add">50</span>the maiden then began to chaunt,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_textual#WRONGLINENUMBERGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                f
                </span>
                
              </a></span><div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L40" id="L40">40</a></div></span><br/>
               <span class="l">the stories of her <span class="persName-fictional-AVENEL">avenel</span> haunt:<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_contextual#AVENELHAUNTGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                5
                </span>
              </a></span></span><br/>
               <span class="l">which frightened still the monk much more,</span><br/>
               <span class="l">as they swam along the winding shore.</span><br/>
               <span class="l">they came at length to a water fall deep,</span><br/>
               <span class="l"><span class="add">55</span>deeper een than a salmons leap,
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L45" id="L45">45</a></div></span><br/>
               <span class="l">the mule attempted on to go,</span><br/>
               <div id="" class="pb"></div>
               <div class="head-top"><span class="space" style="padding-left:5.2em"> </span><span class="smallcaps">BOOK FIRST</span></div><br/>
               <div class="pageNum-top"><span class="space" style="padding-left:5.6em"> </span>73</div><br/>
               <span class="l">the abbot now was in great woe,</span><br/>
               <span class="l">upon a black volume<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_contextual#BLACKVOLUMEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                6
                </span>
              </a></span> his hand he laid;</span><br/>
               <span class="l">because he was much much afraid:</span><br/>
               <span class="l"><span class="add">60</span>the maiden pitched him from the saddle,
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L50" id="L50">50</a></div></span><br/>
               <span class="l">out as well as he could to waddle:</span><br/>
               <span class="l">and when he set his foot on land,</span><br/>
               <span class="l">he sunk upon the yellow sand.</span><br/>
               <span class="l">when the abbot did arise,</span><br/>
               <span class="l"><span class="add">65</span>to behold the earth and skies,
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L55" id="L55">55</a></div></span><br/>
               <span class="l">home wards he did bend his way;<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_textual#INVERTEDSEMICOLONGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                g
                </span>
                
              </a></span></span><br/>
               <span class="l">on a bed his head to lay.</span><br/>
               <span class="l">but the monks around him crowd,</span><br/>
               <span class="l">to hear his story told aloud,</span><br/>
               <span class="l"><span class="add">70</span>and the first words he uttered then;<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_textual#INVERTEDSEMICOLONGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                h
                </span>
                
              </a></span><div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L60" id="L60">60</a></div></span><br/>
               <span class="l">were the maidens song when in the glen.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_contextual#MAIDENSONGGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                7
                </span>
              </a></span></span><br/>
               <span class="l">the abbot<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_contextual#THEABBOTGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                8
                </span>
              </a></span> did start when he heard the song,</span><br/>
               <span class="l">and he said to his brother how long how long,</span><br/>
               <span class="l">wilt thou keep up that spirits song</span><br/>
               <span class="l"><span class="add">75</span>at length the monk did go his way,
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L65" id="L65">65</a></div></span><br/>
               <span class="l">to bed and glad he was to lay,</span><br/>
               <span class="l">his head upon his pillow then,</span><br/>
               <div id="1229191" class="pb"></div>
               <div class="head-top"><span class="space" style="padding-left:4.8em"> </span><span class="smallcaps">BOOK FIRST</span></div><br/>
               <div class="pageNum-top"><span class="space" style="padding-left:6.4em"> </span>74</div><br/>
               <span class="l">we must return to the haunted glen.</span><br/>
               <span class="l">the abbot when he first arose</span><br/>
               <span class="l"><span class="add">80</span>which was when first the good cock crows,
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L70" id="L70">70</a></div></span><br/>
               <span class="l">he called good <span class="persName-fictional-FATHEREUSTACE">father eustace</span> to:</span><br/>
               <span class="l">his chamber and thus spoke to him lo.</span><br/>
               <span class="l">our brother is no less than haunted,</span><br/>
               <span class="l">with a spirit which to him chaunted;<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_textual#INVERTEDSEMICOLONGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                i
                </span>
                
              </a></span></span><br/>
               <span class="l"><span class="add">85</span>some words which now we must not name,
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L75" id="L75">75</a></div></span><br/>
               <span class="l">lest open wide mouthed tattling fame:</span><br/>
               <span class="l">should spread these curious news abroad,</span><br/>
               <span class="l">and for the people pave the road,</span><br/>
               <span class="l">to superstitions house to go:<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_contextual#SUPERSTITIONGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                9
                </span>
              </a></span></span><br/>
               <span class="l"><span class="add">90</span>and plunge them in a sea of woe.
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L80" id="L80">80</a></div></span><br/>
               <span class="l">now brother <span class="persName-fictional-FATHEREUSTACE">eustace</span> go to the glen,</span><br/>
               <span class="l">oer river bog or ford or fen,</span><br/>
               <span class="l">and if a spirit shall arise<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_textual#INVERTEDSEMICOLONGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                j
                </span>
                
              </a></span></span><br/>
               <span class="l">and stand before your wondering eyes:</span><br/>
               <span class="l"><span class="add">95</span>bring home the curious tale to me,
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L85" id="L85">85</a></div></span><br/>
               <span class="l">and iʼll believe what you do see.</span><br/>
               <span class="l">the monk obeyed and off he rode,</span><br/>
               <span class="l">before again the good cock crowed,</span><br/>
               <div id="" class="pb"></div>
               <div class="head-top"><span class="space" style="padding-left:4.4em"> </span><span class="smallcaps">BOOK SECOND</span></div><br/>
               <div class="pageNum-top"><span class="space" style="padding-left:5.2em"> </span>75</div><br/>
               <span class="l">and rode on speedily through the glen,</span><br/>
               <span class="l"><span class="add">100</span>oer river bog or ford or fen.
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L90" id="L90">90</a></div></span><br/></div>
         </div>
         [Diamond‐shaped ornament]
         <div class="half"></div>
         
         <div class="book" id="book2">
            <span class="head-book" id=""><span class="space" style="padding-left:3.6em"> </span><span class="caps">BOOK SECOND</span></span>
            
            <div class="lg-stanza">
               <span class="l"><span class="caps"><span class="doubleletter-fill">UP</span></span> the glen a little way,</span><br/>
               <span class="l">where a pretty meadow lay,</span><br/>
               <span class="l">there was a <span class="placeName-fictional-TOWEROFGLENDEARG">tower</span> upon the hill:</span><br/>
               <span class="l">close beside the pretty rill.</span><br/>
               <span class="l"><span class="add">5</span>at the <span class="date-1547-09-10">battle of pinkie</span> where,
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L95" id="L95">95</a></div></span><br/>
               <span class="l">the scotch fled like the <span class="sic">frigtened [sic]</span> hare:<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_contextual#BATTLEOFPINKIEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                10
                </span>
              </a></span></span><br/>
               <span class="l">the owner of this <span class="placeName-fictional-TOWEROFGLENDEARG">tower</span> expired,</span><br/>
               <span class="l">rushed on his fate by anger fired:</span><br/>
               <span class="l">the grey goose shaft did pierce him through,</span><br/>
               <span class="l"><span class="add">10</span>to the rejoicing of the foe.
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L100" id="L100">100</a></div></span><br/>
               <span class="l">far from this towʼr there was a barons seat,</span><br/>
               <span class="l">and woods and landscapes at its feet:</span><br/>
               <span class="l">and the name of this baron was great <span class="persName-fictional-WALTERAVENEL">avenel</span>,</span><br/>
               <span class="l">for the good of his country in battle he fell:</span><br/>
               <span class="l"><span class="add">15</span>and <span class="persName-fictional-LADYAVENEL">his widow</span> was left to provide for <span class="persName-fictional-MARYAVENEL">her child</span>,
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L105" id="L105">105</a></div></span><br/>
               <span class="l">and beautiful was she and still more mild.</span><br/>
               <div id="1229192" class="pb"></div>
               <div class="pageNum-top"><span class="space" style="padding-left:6.8em"> </span>76</div><br/>
               <span class="l">and farther on there was some land,</span><br/>
               <span class="l">alotted to a farmers hand:</span><br/>
               <span class="l">and the farmers name that did live there,</span><br/>
               <span class="l"><span class="add">20</span>was <span class="persName-fictional-MTACKET">martin</span> and though they had but poor fare:
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L110" id="L110">110</a></div></span><br/>
               <span class="l">they were happy and good <span class="persName-fictional-TTACKET">tibb tacket</span> his consort,</span><br/>
               <span class="l">would do every thing for her husbands comfort.</span><br/>
               <span class="l">and the <span class="persName-fictional-LADYAVENEL">widow of avenel the baron</span> did go,</span><br/>
               <span class="l">away to this farmers for fear of the foe.</span><br/>
               <span class="l"><span class="add">25</span>but shortly she staid there for soon came a band,
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L115" id="L115">115</a></div></span><br/>
               <span class="l">of english barbarians that plunder the land:</span><br/>
               <span class="l">and they robbed the poor farmer of cow and of sheep,</span><br/>
               <span class="l">and hardly would leave him poor <span class="name--SHAGRAMSCOTTMONASTERY">shagram</span> to keep.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_contextual#FOEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                11
                </span>
              </a></span></span><br/>
               <span class="l">now must we leave poor <span class="persName-fictional-MTACKET">martin</span> there,</span><br/>
               <span class="l"><span class="add">30</span>while we relate the <span class="placeName-fictional-TOWEROFGLENDEARG">tower</span>s fare.
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L120" id="L120">120</a></div></span><br/>
               <span class="l">a band of english soldiers marched,</span><br/>
               <span class="l">close by the <span class="placeName-fictional-TOWEROFGLENDEARG">tower</span> and as they passed;<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_textual#INVERTEDSEMICOLONGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                k
                </span>
                
              </a></span></span><br/>
               <span class="l">good <span class="persName-fictional-ELSPETGLENDINNING">dame glendinning</span> her sons led,</span><br/>
               <span class="l">out from the gate and thus she said.</span><br/>
               <span class="l"><span class="add">35</span>no means of fighting have I on this land,
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L125" id="L125">125</a></div></span><br/>
               <span class="l">and I am at the mercy of your hand.</span><br/>
               <span class="l">the <span class="persName-fictional-STAWARTHBOLTON">serjeant of the troop</span> replied,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_contextual#SERJEANTGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                12
                </span>
              </a></span></span><br/>
               <div id="" class="pb"></div>
               <div class="pageNum-top"><span class="space" style="padding-left:4.4em"> </span>77</div><br/>
               <span class="l">though I have means of fighting on my side:</span><br/>
               <span class="l">I scorn with women now to strive,</span><br/>
               <span class="l"><span class="add">40</span>go to your <span class="placeName-fictional-TOWEROFGLENDEARG">tower</span> again and live.
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L130" id="L130">130</a></div></span><br/>
               <span class="l">yet dame I own I envy you,</span><br/>
               <span class="l">that <span class="persName-fictional-EDWARDGLENDINNING">little rogue with eyes so blue</span>.</span><br/>
               <span class="l">and will you come with me my lad,</span><br/>
               <span class="l">the <span class="persName-fictional-STAWARTHBOLTON">serjeant of the troop</span> he said.</span><br/>
               <span class="l"><span class="add">45</span>no said the blue eyed <span class="persName-fictional-EDWARDGLENDINNING">edward</span> no,
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L135" id="L135">135</a></div></span><br/>
               <span class="l">because you are to us a foe:</span><br/>
               <span class="l">not only that but then you are,</span><br/>
               <span class="l">a heretic and fond of war.</span><br/>
               <span class="l">why god a mercy <span class="persName-fictional-STAWARTHBOLTON">old stawarth</span> did say,</span><br/>
               <span class="l"><span class="add">50</span>I see that alone I must go my way.
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L140" id="L140">140</a></div></span><br/>
               <span class="l">but stay <span class="persName-fictional-HALBERTGLENDINNING">thou black eyed</span> come with me,</span><br/>
               <span class="l">and many a fine sight thou shalt see.</span><br/>
               <span class="l">no cried the furious <span class="persName-fictional-HALBERTGLENDINNING">halbert</span> no,</span><br/>
               <span class="l">because thou art to us a foe:</span><br/>
               <span class="l"><span class="add">55</span>and when Im older thou shalt see,
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L145" id="L145">145</a></div></span><br/>
               <span class="l">the effects of my fathers sword on thee.</span><br/>
               <span class="l">why again god a mercy <span class="persName-fictional-STAWARTHBOLTON">old stawarth</span> did say,</span><br/>
               <span class="l">I see that alone I must go my way:</span><br/>
               <div id="1229193" class="pb"></div>
               <div class="pageNum-top"><span class="space" style="padding-left:6.4em"> </span>78</div><br/>
               <span class="l">but stay heres a token that if some men,</span><br/>
               <span class="l"><span class="add">60</span>come riding down this narrow glen:
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L150" id="L150">150</a></div></span><br/>
               <span class="l">they may know that you are under my,</span><br/>
               <span class="l">protection then I say goodbye.</span><br/>
               <span class="l">so saying from his bonnet he,</span><br/>
               <span class="l">took a red cross<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_contextual#REDCROSSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                13
                </span>
              </a></span> and said dost see;<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_textual#INVERTEDSEMICOLONGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                l
                </span>
                
              </a></span></span><br/>
               <span class="l"><span class="add">65</span>this token, here <span class="persName-fictional-HALBERTGLENDINNING">thou blackeyed boy</span>,
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L155" id="L155">155</a></div></span><br/>
               <span class="l">take it and may it give thee joy:</span><br/>
               <span class="l">give me thy bonnet off thy head,</span><br/>
               <span class="l">the <span class="persName-fictional-STAWARTHBOLTON">commander of the troop</span> he said.</span><br/>
               <span class="l"><span class="persName-fictional-HALBERTGLENDINNING">halbert</span> was silent and would not stir,</span><br/>
               <span class="l"><span class="add">70</span>more than the lofty towering fir:
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L160" id="L160">160</a></div></span><br/>
               <span class="l">command it to stir from the place where it stands,</span><br/>
               <span class="l">and it will not without the help of hands:</span><br/>
               <span class="l">but yet its green branches do wave in the wind,</span><br/>
               <span class="l">and even so was proud <span class="persName-fictional-HALBERTGLENDINNING">halbert</span>s mind:<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_contextual#TOWERINGFIRGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                14
                </span>
              </a></span></span><br/>
               <span class="l"><span class="add">75</span>but from his head the <span class="persName-fictional-ELSPETGLENDINNING">mother</span> snatched,
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L165" id="L165">165</a></div></span><br/>
               <span class="l">his cap at which young <span class="persName-fictional-HALBERTGLENDINNING">halbert</span> catched:</span><br/>
               <span class="l">but missed his aim the <span class="persName-fictional-ELSPETGLENDINNING">mother</span> then,</span><br/>
               <span class="l">gave it to the <span class="persName-fictional-STAWARTHBOLTON">serjeant</span> when:</span><br/>
               <span class="l">he stuck the cross into the band</span><br/>
               <div id="" class="pb"></div>
               <div class="pageNum-top"><span class="space" style="padding-left:6.8em"> </span>79</div><br/>
               <span class="l"><span class="add">80</span>and put it in young <span class="persName-fictional-HALBERTGLENDINNING">halbert</span>s hand
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L170" id="L170">170</a></div></span><br/>
               <span class="l">no sooner had he done so but</span><br/>
               <span class="l">young <span class="persName-fictional-HALBERTGLENDINNING">halbert</span> with a furious look</span><br/>
               <span class="l">took the cross and threw it in</span><br/>
               <span class="l">the very pretty murmuring stream</span><br/>
               <span class="l"><span class="add">85</span>young <span class="persName-fictional-EDWARDGLENDINNING">edward</span> was instantly in the water
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L175" id="L175">175</a></div></span><br/>
               <span class="l">and brought it out safe to its rightful owner</span><br/>
               <span class="l">why how now said the <span class="persName-fictional-STAWARTHBOLTON">serjeant</span> with some surprise</span><br/>
               <span class="l">whats the reason of this my good blue eyes</span><br/>
               <span class="l">that young rogue there throws it into the stream</span><br/>
               <span class="l"><span class="add">90</span>and when heʼs done so you leap in
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L180" id="L180">180</a></div></span><br/>
               <span class="l">and fetch it out and I demand</span><br/>
               <span class="l">why you did throw it off the land</span><br/>
               <span class="l"><span class="persName-STGEORGE">st george</span>s cross and why did you</span><br/>
               <span class="l"><span class="persName-STGEORGE">st George</span>s cross so soon pursue</span><br/>
               <span class="l"><span class="add">95</span>because <span class="persName-STGEORGE">st george</span> said <span class="persName-fictional-HALBERTGLENDINNING">halbert</span> is
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L185" id="L185">185</a></div></span><br/>
               <span class="l">a southern saint, and the cross thats his</span><br/>
               <span class="l">I will not wear in my bonnet or hat</span><br/>
               <span class="l">why now said old <span class="persName-fictional-CAPTAINBOLTON">stawarth</span> I think that that</span><br/>
               <span class="l">is a very good reason and why did you</span><br/>
               <span class="l"><span class="add">100</span><span class="persName-STGEORGE">st George</span>s cross so soon pursue
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L190" id="L190">190</a></div></span><br/>
               <div id="1229194" class="pb"></div>
               <div class="pageNum-top"><span class="space" style="padding-left:8.0em"> </span>80</div><br/>
               <span class="l">because the cross is the sign of our lord</span><br/>
               <span class="l">and not only that but his blessed word</span><br/>
               <span class="l">well good bye said old <span class="persName-fictional-CAPTAINBOLTON">stawarth</span> but theres the cross</span><br/>
               <span class="l">if you lose it twill be a very great loss<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_contextual#BLESSEDWORDGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                15
                </span>
              </a></span></span><br/>
               <span class="l">so saying he rode down the glen
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L195" id="L195">195</a></div></span><br/>
               <span class="l"><span class="add">106</span>oer river bog or ford or fen</span><br/></div>
            
            <div class="half"></div><br/>
            <span class="space" style="padding-left:3.2em"> </span><span class="metamark-insertion">go back to page 52</span><br/>
            <span class="space" style="padding-left:2.0em"> </span><span class="caps">END OF BOOK SECOND</span>
            <div class="half"></div><br/></div>
         
         <div class="colophon" id="">
            
            <div class="p"><span class="placeName-building-HERNE"><span class="caps">HERN HILL</span></span><br/>
               <span class="placeName-DULWICH"><span class="caps">DULWICH</span></span></div>
         </div>
         
         
         <div class="book" id="book3">
            <div id="1229179" class="pb"></div>
            <div class="pageNum-top"><span class="space" style="padding-left:6.0em"> </span><span class="doubleletter">52</span></div><br/>
            <span class="head-book" id=""><span class="space" style="padding-left:5.6em"> </span><span class="caps">BOOK THIRD</span></span>
            
            <div class="lg-stanza">
               <span class="l"><span class="caps">I</span> <span class="smallcaps">MUST</span> return to <span class="persName-fictional-MTACKET">martin</span> now</span><br/>
               <span class="l">whom I left standing in the bow</span><br/>
               <span class="l">window of his cottage sweet<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_contextual#COTTAGESWEETGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                16
                </span>
              </a></span></span><br/>
               <span class="l">well to this <span class="placeName-fictional-TOWEROFGLENDEARG">tower</span> they sped their feet
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L200" id="L200">200</a></div></span><br/>
               <span class="l"><span class="add">5</span>and <span class="persName-fictional-MTACKET">martin</span> and <span class="persName-fictional-TTACKET">tibb tack</span> did go</span><br/>
               <span class="l">away to this <span class="placeName-fictional-TOWEROFGLENDEARG">tower</span> for fear of the foe</span><br/>
               <span class="l">and the <span class="persName-fictional-LADYAVENEL">widow of avenel</span> with them did go</span><br/>
               <span class="l">but between the <span class="placeName-fictional-TOWEROFGLENDEARG">tower</span> and them</span><br/>
               <span class="l">on the way to <span class="geogName-GLENDEARG">glendarg glen</span><div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L205" id="L205">205</a></div></span><br/>
               <span class="l"><span class="add"><span class="doubleletter">1</span>0</span>there was a bog and oer this part</span><br/>
               <span class="l">where even the lightfooted hart</span><br/>
               <span class="l">go could <div 
              class="add-above" 
              style="left:3.6em">not</div> for his feet in clay</span><br/>
               <span class="l">sunk as he sped him on his way</span><br/>
               <span class="l">not only <span class="persName-fictional-MTACKET">martin</span> had to pass
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L210" id="L210">210</a></div></span><br/>
               <span class="l"><span class="add">15</span>but een good <span class="name--SHAGRAMSCOTTMONASTERY">shagram</span> with the lass</span><br/>
               <span class="l">named <span class="persName-fictional-MARYAVENEL">mary avenel</span> and when</span><br/>
               <span class="l">they had come nearer to the <span class="geogName-GLENDEARG">glen</span></span><br/>
               <span class="l">it was so bad that <span class="sic">their [sic]</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_textual#THEIRGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                m
                </span>
                
              </a></span> they stuck</span><br/>
               <span class="l">for stir they could not een a foot
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L215" id="L215">215</a></div></span><br/>
               <span class="l"><span class="add">20</span>so <span class="persName-fictional-MTACKET">martin</span> took his task as guide</span><br/>
               <div id="1229180" class="pb"></div>
               <div class="pageNum-top"><span class="space" style="padding-left:5.6em"> </span>53</div><br/>
               <span class="l">and all the women did in him confide</span><br/>
               <span class="l"><span class="persName-fictional-MTACKET">martin</span> then did look about</span><br/>
               <span class="l">to see where he could spy an out</span><br/>
               <span class="l">let.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_textual#OUTLETGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                n
                </span>
                
              </a></span> then selecting the safest way
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L220" id="L220">220</a></div></span><br/>
               <span class="l"><span class="add">25</span>he to <span class="name--SHAGRAMSCOTTMONASTERY">shagram</span> began to say</span><br/>
               <span class="l">come on good horse and let us see</span><br/>
               <span class="l">whether thou wilt obey thy master me<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_contextual#GOODHORSEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                17
                </span>
              </a></span></span><br/>
               <span class="l">come on but <span class="name--SHAGRAMSCOTTMONASTERY">shagram</span> would not go</span><br/>
               <span class="l">though mute he very well said no
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L225" id="L225">225</a></div></span><br/>
               <span class="l"><span class="add">30</span>for <span class="name--SHAGRAMSCOTTMONASTERY">shagram</span> snorted laid his paws</span><br/>
               <span class="l"><span class="doubleletter-fill">A</span>s if he encountered a great bears jaws<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_contextual#BEARSJAWSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                18
                </span>
              </a></span></span><br/>
               <span class="l">And would not go, <span class="doubleletter-fill">E</span>en tak your ain</span><br/>
               <span class="l"><span class="doubleletter-fill">W</span>ay said the shepherd I would fain</span><br/>
               <span class="l"><span class="doubleletter-fill">G</span>et oʼer to tʼother side and be
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L230" id="L230">230</a></div></span><br/>
               <span class="l"><span class="add">35</span><span class="doubleletter-fill">S</span>afe on our way so let us see</span><br/>
               <span class="l"><span class="doubleletter-fill">W</span>hat you can do for us and when</span><br/>
               <span class="l"><span class="doubleletter-fill">W</span>e are safe at <span class="geogName-GLENDEARG">glendarg glen</span></span><br/>
               <span class="l"><span class="doubleletter-fill">S</span>afe in stable you shall stand</span><br/>
               <span class="l"><span class="doubleletter-fill">W</span>ith plenty hay and fodder at your hand
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L235" id="L235">235</a></div></span><br/>
               <span class="l"><span class="add">40</span><span class="doubleletter-fill">J</span>ust at this moment <span class="persName-fictional-MARYAVENEL">mary</span> saw</span><br/>
               <span class="l"><span class="doubleletter-fill">J</span>ust as good <span class="name--SHAGRAMSCOTTMONASTERY">shagram</span> raised his paw</span><br/>
               <div id="" class="pb"></div>
               <div class="pageNum-top"><span class="space" style="padding-left:4.8em"> </span>54</div><br/>
               <span class="l">A <span class="persName-fictional-WHITELADY">beauteous lady</span> far away</span><br/>
               <span class="l">And seeing her she thus did say</span><br/>
               <span class="l">I see a lady just up there
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L240" id="L240">240</a></div></span><br/>
               <span class="l"><span class="add">45</span>And I must say exeeding<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_textual#EXCEEDINGGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                o
                </span>
                
              </a></span> fair</span><br/>
               <span class="l">Where where cried the whole of the family then</span><br/>
               <span class="l">Why very near to <span class="geogName-GLENDEARG">glendarg glen</span></span><br/>
               <span class="l">She signs to us to come yon gate</span><br/>
               <span class="l"><span class="doubleletter-fill">B</span>ut it was great avenels fate
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L245" id="L245">245</a></div></span><br/>
               <span class="l"><span class="add">50</span><span class="doubleletter">T</span>o have a spirit in their line</span><br/>
               <span class="l">And so it was in this odd time<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_textual#AVENELSFATEGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                p
                </span>
                
              </a></span></span><br/>
               <span class="l"><span class="doubleletter-fill">T</span>his <span class="persName-fictional-TTACKET">tibb tacket</span> thought it then</span><br/>
               <span class="l"><span class="doubleletter-fill">F</span>or twas near to <span class="geogName-GLENDEARG">glendarg glen</span></span><br/>
               <span class="l"><span class="doubleletter-fill">A</span>nd her haunt was near this part
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L250" id="L250">250</a></div></span><br/>
               <span class="l"><span class="add">55</span><span class="doubleletter-fill">W</span>here oft the very slender hart</span><br/>
               <span class="l">Had drank at this place but was ne<span class="unclear-smudged-DCH">e</span>r</span><br/>
               <span class="l">Frightened by her very fair</span><br/>
               <span class="l">Form appearing like a fog</span><br/>
               <span class="l">And this I suspect was that seen in the bog.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_contextual#WHITELADYSHAUNTGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                19
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L255" id="L255">255</a></div></span><br/>
               <span class="l"><span class="add">60</span><span class="name--SHAGRAMSCOTTMONASTERY">shagram</span> at his own free will</span><br/>
               <span class="l">Did no longer stand stock still</span><br/>
               <span class="l">But set off at ao<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_textual#AOGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                q
                </span>
                
              </a></span> good rate</span><br/>
               <span class="l">And then it was good <span class="name--SHAGRAMSCOTTMONASTERY">shagram</span>s fate</span><br/>
               <div id="1229181" class="pb"></div>
               <div class="pageNum-top"><span class="space" style="padding-left:8.0em"> </span>55</div><br/>
               <span class="l">To take them safely through the bog
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L260" id="L260">260</a></div></span><br/>
               <span class="l"><span class="add">65</span><span class="doubleletter-fill">I</span>ndeed he did so though a fog</span><br/>
               <span class="l">Oerspread the land. But worthy tis</span><br/>
               <span class="l">OF remark that <span class="persName-fictional-MARYAVENEL">the little miss</span></span><br/>
               <span class="l">Oft mentioned to the servants round</span><br/>
               <span class="l">While they were still on boggy ground
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L265" id="L265">265</a></div></span><br/>
               <span class="l"><span class="add">70</span>The lady and her signals and</span><br/>
               <span class="l">When they were off the boggy land</span><br/>
               <span class="l">The servants changed expressive looks</span><br/>
               <span class="l">With each other, for the nooks</span><br/>
               <span class="l">Of fairies were supposed to be
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L270" id="L270">270</a></div></span><br/>
               <span class="l"><span class="add">75</span>Just in the glen and they thought theyʼd see</span><br/>
               <span class="l">A fairy peeping out from moss</span><br/>
               <span class="l">Or perhaps it might peep from a great morass</span><br/>
               <span class="l">All halloween said <span class="persName-fictional-TTACKET">tibby</span> to</span><br/>
               <span class="l"><span class="persName-fictional-MTACKET">Martin</span>. Woman you are too
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L275" id="L275">275</a></div></span><br/>
               <span class="l"><span class="add">80</span>Said <span class="persName-fictional-MTACKET">martin</span> or you would not dare</span><br/>
               <span class="l">To speak of fairies ony mair.</span><br/>
               <span class="l">When once more on firm ground they were</span><br/>
               <span class="l">And had rid themselves of fear</span><br/>
               <span class="l"><span class="persName-fictional-MTACKET">Martin</span> saw some landmarks high
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L280" id="L280">280</a></div></span><br/>
               <div id="" class="pb"></div>
               <div class="pageNum-top"><span class="space" style="padding-left:9.6em"> </span>56</div><br/>
               <span class="l"><span class="add">85</span>Upon a hill against the sky</span><br/>
               <span class="l">And taking them for his good guide</span><br/>
               <span class="l">And ever keeping by their side</span><br/>
               <span class="l"><span class="add">88</span>Very soon at the <span class="placeName-fictional-TOWEROFGLENDEARG">tower of glendarg</span> they arrived</span><br/></div>
         </div>
         
         <div class="book" id="book4">
            <div class="half"></div>
            <span class="head-book" id="">BOOK 4</span>
            <div class="half"></div>
            
            <div class="lg-stanza">
               <span class="l"><span class="caps">O</span><span class="smallcaps">NE</span> night when all the winds combined
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L285" id="L285">285</a></div></span><br/>
               <span class="l">To frighten een the strongest mind</span><br/>
               <span class="l">And halloween it was and all</span><br/>
               <span class="l">The fairies seemed and elves to call</span><br/>
               <span class="l"><span class="add">5</span>In the loud wind that roared round</span><br/>
               <span class="l">The <span class="placeName-fictional-TOWEROFGLENDEARG">tower</span> with its awful sound
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L290" id="L290">290</a></div></span><br/>
               <span class="l">And when in gambols mongst the trees</span><br/>
               <span class="l">The brownies used themselves to please</span><br/>
               <span class="l">And when the kelpies liked to take</span><br/>
               <span class="l"><span class="add">10</span>The careless traveller to the lake</span><br/>
               <span class="l">And plunge him in and hear his cry
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L295" id="L295">295</a></div></span><br/>
               <span class="l">Ascending to the stormy sky</span><br/>
               <span class="l">Well on this night of spirits power</span><br/>
               <div id="1229182" class="pb"></div>
               <div class="pageNum-top"><span class="space" style="padding-left:8.8em"> </span>57</div><br/>                        
               <span class="l">Thats greatest at the midnight hour<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_contextual#HALLOWEENGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                20
                </span>
              </a></span></span><br/>
               <span class="l"><span class="add">15</span><span class="persName-fictional-TTACKET">Tibb</span> and the rest sat round the fire</span><br/>
               <span class="l">Unmindful of the tempest dire
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L300" id="L300">300</a></div></span><br/>
               <span class="l">While from the bible <span class="persName-fictional-LADYAVENEL">alice</span> read</span><br/>
               <span class="l">Stories of saints that long were dead</span><br/>
               <span class="l"><span class="persName-fictional-MTACKET">Martin</span> hammered bored or sawed</span><br/>
               <span class="l"><span class="add">20</span>The substance of the hardy board</span><br/>
               <span class="l"><span class="persName-fictional-TTACKET">Tibb</span> watched the process of scalding the whey
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L305" id="L305">305</a></div></span><br/>
               <span class="l">While <span class="persName-fictional-MTACKET">martin</span> sawed or bored away</span><br/>
               <span class="l"><span class="persName-fictional-ELSPETGLENDINNING">Dame elspeth</span> pulling the thread sate</span><br/>
               <span class="l">From her distaff near her mate<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_contextual#HERMATE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                21
                </span>
              </a></span></span><br/>
               <span class="l"><span class="add">25</span><span class="persName-fictional-MARYAVENEL">Mary of avenel</span> <span class="persName-fictional-HALBERTGLENDINNING">halbert</span> and all</span><br/>
               <span class="l">Were allowed to run up and down the hall
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L310" id="L310">310</a></div></span><br/>
               <span class="l">There were some rooms adjacent to</span><br/>
               <span class="l">The hall where sometimes they would go</span><br/>
               <span class="l">I mean the children and at length</span><br/>
               <span class="l"><span class="add">30</span>Into these rooms they all were sent</span><br/>
               <span class="l">But from them openmouthed there came
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L315" id="L315">315</a></div></span><br/>
               <span class="l">To spread abroad the ghost like fame</span><br/>
               <span class="l">The boys and they indeed did tell</span><br/>
               <span class="l">That a man like <span class="persName-fictional-CHRISTIEOFCLINTHILL">he of the clinthill</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/monastery_glosses_contextual#CLINTHILLGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                22
                </span>
              </a></span></span><br/>
               <div id="" class="pb"></div>
               <div class="pageNum-top"><span class="space" style="padding-left:7.6em"> </span>58</div><br/>
               <span class="l"><span class="add">35</span>Was in the spence. then <span class="persName-fictional-LADYAVENEL">Alice</span> said</span><br/>
               <span class="l">Where is my child and so she led
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L320" id="L320">320</a></div></span><br/>
               <span class="l"><span class="persName-fictional-HALBERTGLENDINNING">Halbert glendinning</span> first to arm</span><br/>
               <span class="l">With an old sword his open palm</span><br/>
               <span class="l">And <span class="persName-fictional-EDWARDGLENDINNING">Edward</span> seized the ladys book</span><br/>
               <span class="l"><span class="add">40</span>And the ladys fear they all then took</span><br/>
               <span class="l">And then unto the spence they went
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L325" id="L325">325</a></div></span><br/>
               <span class="l">When their alarm soon from them went</span><br/>
               <span class="l">For no man armed there appeared</span><br/>
               <span class="l">And what made you ye false misleard</span><br/>
               <span class="l"><span class="add">45</span>Said good <span class="persName-fictional-ELSPETGLENDINNING">dame elspeth</span> to her bairns</span><br/>
               <span class="l">And what made you ye misleard loons
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L330" id="L330">330</a></div></span><br/>
               <span class="l">Come there yon gate into the hall</span><br/>
               <span class="l">Roaring I am sure like a bull</span><br/>
               <span class="l">And could ye find nae night for daffing</span><br/>
               <span class="l"><span class="add">50</span>Save halloween when <span class="persName-fictional-LADYAVENEL">the leddy</span> was reading</span><br/>
               <span class="l">The elder boy bent eyes on ground
                  <div class="s-line-number s-line-number-auto">
                     <div class="tooltip">
          System generated line number
        </div><a href="#L335" id="L335">335</a></div></span><br/>
               <span class="l">With the youngest tears their access found.</span><br/></div>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>