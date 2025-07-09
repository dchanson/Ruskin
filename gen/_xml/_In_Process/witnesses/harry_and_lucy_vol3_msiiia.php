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
“Harry and Lucy . . . Vol 3”
EOT
);
define("FACS_FILE_NAMES", <<<EOT
image.jpg image.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><br/></div>
   <div class="fileName"><span>“Harry and Lucy . . . Vol 3”</span></div>
   <div class="witness">
      <div class="lesson" id="">
         
         <h1 class="page-title">Title of Prose Piece</h1>
         
         <div class="chapter" id="">
            <span class="head-chapter" id="">Chapter I</span>
            
            <div class="p">As soon as <span class="persName-fictional-HARRY">harry</span> had left <span class="placeName-DONCASTER">doncaster</span> he went by a very
                            beautiful road to <span class="placeName-SCARTHINGMOOR">scarthing moor</span> here there were a fox and a dog
                            both which <span class="persName-fictional-HARRY">harry</span> saw. From <span class="placeName-SCARTHINGMOOR">scarthing moor</span> they went to <span class="placeName-WITHAMCOMMON">witham
                            common</span> and setting off early in the morning and arriving late at
                            night they gained their home.</div>
            
            <div class="p">It is impossible to describe the bustle, running to and fro
                            and congratulation on this occasion it is sufficient to say that
                            <span class="persName-fictional-HARRY">harry</span> and <span class="persName-fictional-LUCY">Lucy</span> were tired and running to their own room they went
                            to bed.</div>
            
            <div class="p">As soon as <span class="persName-fictional-HARRY">harry</span> rose he determined to allot his time to
                            various employments and he did it thus. In the morning he was to
                            teach <span class="persName-fictional-LUCY">Lucy</span> science, after breakfast he was to learn his lessons,
                            having to draw maps he was to do that till dinner time, he had
                            also to correct some of <span class="persName-PVM">virgil</span> for his <span class="persName-fictional-PAPA">papa</span> that occupied half
                            the afternoon and the rest was spent in map making. After tea as
                            <span class="persName-fictional-PAPA">pa‐pa</span> read <span class="title-book-CERVANTESDONQUIXOTE">Don Quixote</span>, <span class="persName-fictional-HARRY">Harry</span> drew till bedtime.</div>
            
            <div class="p">In pursuance of his first design <span class="persName-fictional-HARRY">Harry</span> took one of his
                            lesson books and made <span class="persName-fictional-LUCY">Lucy</span> learn the following constellations
                            with the number of stars.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/harry_and_lucy_vol3_glosses_contextual#STARS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></div>
            
            
            <div class="p">stars
                            
               <ul>
                  
                  <li><span class="name--URSAMAJOR">The greater bear</span> 105</li>
                  
                  <li><span class="name--URSAMINOR">The lesser bear</span> 12</li>
                  
                  <li><span class="name--DRACO">The dragon</span> 49</li>
                  
                  <li><span class="name--CEPHEUS">Cepheus</span> 40</li>
                  
                  <li><span class="name--CANESVENATICI">The hounds</span> 24</li>
                  
                  <li><span class="name--BOOTES">Bootes</span> 53</li>
                  
                  <li><span class="name--MONSMAENALUS">The mountain of Maenalus</span> 11</li>
                  
                  <li><span class="name--COMABERENICES">Berenices hair</span> 24</li>
                  
                  <li><span class="name--CHARLESSHEART">Charlesʼs heart</span> 1</li>
                  
                  <li><span class="name--CORONABOREALIS">The northern crown</span> 11</li>
                  </ul>
               </div>
            
            
            <div class="p">These were all that <span class="persName-fictional-LUCY">Lucy</span> learned the first day, for she made so
                            many mistakes that it was breakfast time just as she got to the
                            <span class="name--CORONABOREALIS">northern crown</span>. After breakfast <span class="persName-fictional-HARRY">Harry</span> learned his lessons and
                            then went to his map his first one was that of <span class="placeName-ENGLAND">England</span> and <span class="placeName-WALES">Wales</span>,
                            of which taking his atlas he first drew the outlines, he then
                            began to write the names round the outline & then to do the water
                            thus [diagram]<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/harry_and_lucy_vol3_glosses_contextual#WATERGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span> The first day he did of the names and water as
                            far as <span class="geogName-CAERNARFONBAY">Caernarvon Bay</span> and there was forced to go to dinner, after
                            that he corrected of <span class="persName-PVM">Virgil</span> to the <span class="title-poem-VIRGILECLOGUE4">fourth pastoral</span> or pollio, he
                            then went to his map again and finished the names and water.</div>
            
            <div class="p">After tea <span class="persName-fictional-PAPA">papa</span> began to read <span class="title-book-CERVANTESDONQUIXOTE">Don Quixote</span> <span class="persName-fictional-MAMMA">mamma</span> to knit <span class="persName-fictional-LUCY">Lucy</span>
                            to sew and <span class="persName-fictional-HARRY">Harry</span> to draw. <span class="persName-fictional-LUCY">Lucy</span> who had never heard it<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/harry_and_lucy_vol3_glosses_contextual#DONQUIXOTEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span> before,
                            thought from the <span class="persName-fictional-QUIXOTE">Don</span> that it would be very uninteresting but she
                            altered her opinion when she had heard some of it. Unluckily they
                            had been too<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/harry_and_lucy_vol3_glosses_contextual#TOOLATEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                4
                </span>
              </a></span> late in beginning to read and therefore they did
                            not get farther that night than the adventure of the windmills
                            which all were very sorry for. Next morning <span class="persName-fictional-LUCY">lucy</span> learned these
                            constellations</div>
            
            
            <div class="p">stars
                            
               <ul>
                  
                  <li><span class="name--HERCULESCONSTELLATION">Hercules</span> 98</li>
                  
                  <li><span class="name--CERBERUSCONSTELLATION">Cerberus</span> 9</li>
                  
                  <li><span class="name--LYRA">The lyre</span> 24</li>
                  
                  <li><span class="name--CYGNUS">The swan</span> 73</li>
                  
                  <li><span class="name--VULPECULA">The fox</span> 29</li>
                  
                  <li><span class="name--ANSER">The goose</span> 10</li>
                  
                  <li><span class="name--LACERTA">The lizard</span> 12</li>
                  
                  <li><span class="name--CASSIOPEACONSTELLATION">Cassiopea</span> 52</li>
                  
                  <li><span class="name--CAMELOPARDALIS">The cameleopard</span> 23</li>
                  
                  <li><span class="name--OPHIUCHUS">The serpent bearer</span> 67</li>
                  
                  <li><span class="name--CLYPEUSSOBIESKI">Sobieskiʼs sheild</span> [sic] 8</li>
                  
                  <li><span class="name--AQUILACONSTELLATION">The eagle</span> 12</li>
                  </ul>
               </div>
            
            
            <div class="p">But now the breakfast bell rang and <span class="persName-fictional-HARRY">Harry</span> and <span class="persName-fictional-LUCY">Lucy</span> were forced to
                            <span class="del-strikethrough">take</span>go
                            to breakfast. <span class="persName-fictional-HARRY">Harry</span> today got as far in his map as dividing the
                            shires and naming them as <span class="placeName-CORNWALL">Cornwall</span> <span class="placeName-DEVON">Devon</span> <span class="placeName-DORSET">Dorset</span> &c he got to the
                            tenth pastoral after dinner and then finished dividing and naming
                            the shires <span class="persName-fictional-HARRY">Harry</span> was drawing some very beautiful trees that were
                            in a book of his and his father said that it was the best piece
                            of drawing that he had ever done.</div>
            
            <div class="p"><span class="persName-fictional-HARRY">Harry</span> and <span class="persName-fictional-LUCY">Lucy</span> were so fond of <span class="title-book-CERVANTESDONQUIXOTE">Don Quixote</span> that they were
                            quite disappointed when they missed it but they did not miss it
                            that night for they had a good deal of it. In the morning <span class="persName-fictional-LUCY">Lucy</span>
                            learned the following constellations.</div>
            
            
            <div class="p">stars
                            
               <ul>
                  
                  <li><span class="name--ANTINOUSCONSTELLATION">Antinous</span> 34</li>
                  
                  <li><span class="name--TAURUSPONIATOWSKI">Bull of Poniatowski</span> 18</li>
                  
                  <li><span class="name--MEDUSACONSTELLATION">Medusaʼs head</span> 5</li>
                  
                  <li><span class="name--DELPHINUS">The Dolphin</span> 18</li>
                  
                  <li><span class="name--EQUULEUS">The little Horse</span> 12</li>
                  
                  <li><span class="name--SAGITTA">The arrow</span> 13</li>
                  
                  <li><span class="name--ANDROMEDACONSTELLATION">Andromeda</span> 66</li>
                  
                  <li><span class="name--PERSEUSCONSTELLATION">Perseus</span> 67</li>
                  
                  <li><span class="name--PEGASUSCONSTELLATION">Pegasus</span> 67</li>
                  
                  <li><span class="name--AURIGA">The charioteer</span> 46</li>
                  
                  <li><span class="name--LYNX">The lynx</span> 55</li>
                  
                  <li><span class="name--LEOMINOR">The lesser lion</span> 20</li>
                  </ul>
               </div>
            
            
            <div class="p">After <span class="persName-fictional-LUCY">Lucy</span> had finished these they went down to breakfast and
                            when <span class="persName-fictional-HARRY">harry</span> had done his lessons he coloured his map and began to
                            do the names and rivers. This day he finished the pastorals and
                            did some more of the names and rivers In the evening they got on
                            a good deal with <span class="title-book-CERVANTESDONQUIXOTE">Don Quixote</span> after which <span class="persName-fictional-HARRY">Harry</span> went to bed.</div>
            
            <div class="p">And in the morning <span class="persName-fictional-LUCY">Lucy</span> Learned these constellations
                            
               <ul>
                  
                  <li><span class="name--TRIANGULA">The triangle</span> 10</li>
                  
                  <li><span class="name--TRIANGULUMAUSTRALE">The little triangle</span> 5</li>
                  
                  <li><span class="name--MUSCA">The fly</span> 6</li>
                  
                  <li><span class="name--ARIES">The ram</span> 46</li>
                  
                  <li><span class="name--TAURUS">The Bull</span> 109</li>
                  
                  <li><span class="name--GEMINI">The twins</span> 94</li>
                  
                  <li><span class="name--CANCER">The crab</span> 75</li>
                  
                  <li><span class="name--LEO">The Lion</span> 91</li>
                  
                  <li><span class="name--VIRGO">The virgin</span> 93</li>
                  
                  <li><span class="name--LIBRA">The Balance</span> 51</li>
                  
                  <li><span class="name--SCORPIO">The scorpion</span> 44</li>
                  
                  <li><span class="name--SAGITTARIUS">The Archer</span> 48</li>
                  </ul>
                            And then went to breakfast.</div>
            
            <div class="p">After<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/harry_and_lucy_vol3_glosses_contextual#EXTANTDRAFTGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                5
                </span>
              </a></span> <span class="persName-fictional-HARRY">Harry</span> had learned his lessons he went to a poem that
                            he was composing for his father on newyearsday a as he always
                            presented him b with a poem at that period. The subject of it was
                            a battle between the Pretender or Chevalier as <span class="persName-fictional-HARRY">Harry</span> would have
                            him called and the forces or part of the forces of <span class="persName-KG3">George the 3<sup>rd</sup></span>
               <span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/harry_and_lucy_vol3_glosses_contextual#GEORGEIIIGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                6
                </span>
              </a></span> All c the poems which d he had yet given to his father were in
                            what <span class="persName-fictional-HARRY">Harry</span> called single print but he was printing this double in
                            this manner [diagram]<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/harry_and_lucy_vol3_glosses_contextual#DOUBLEPRINTGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                7
                </span>
              </a></span> and e it was most beautifully done you may
                            be sure. It was irregular measure.</div>
            
            <div class="p"><span class="persName-fictional-HARRY">Harry</span> when he had done what he thought a moderate allowance
                            of his poem went to his map But scarcely had the pen touched the
                            paper when in came dinner however that hindrance was soon over
                            and <span class="persName-fictional-HARRY">Harry</span> returned to his map. He f today nearly finished it, & g
                            after having had some of <span class="title-book-CERVANTESDONQUIXOTE">Don Quixote</span> he went to bed.</div>
            
            <div class="p">But whenever the world was left ‘To darkness and to me’ a
                            bright thought came into <span class="persName-fictional-HARRY">harry</span>ʼs mind <span class="persName-fictional-HARRY">Harry</span> h thought<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/harry_and_lucy_vol3_glosses_contextual#HARRYTHOUGHTGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                8
                </span>
              </a></span> that if he
                            could contrive to make a <span class="title-drama-PUNCHANDJUDY">Punches</span> show or rather fantoccini out of
                            paper he could exhibit it when he presented his poem and please
                            his father a little more so he fell to work to plan i one. First
                            he settled the size which was to be about five inches long two
                            broad and two side ways. The top where the figures were to act
                            was to be 2 j inches square.</div>
            
            <div class="p">This settled <span class="persName-fictional-HARRY">Harry</span> began to think how he should make it
                            <span class="persName-fictional-HARRY">Harry</span> k first thought what shape the piece of paper must be before
                            it was put together so as to form the show After he had altered
                            a good deal he found that it must be of this shape [diagram] with
                            margins for joining The piece marked A formed one of the sides,
                            that B the front of the show C was to be bent back and with a
                            small slit in it formed the bottom of the place where the figures
                            were to act D the top of the show E the other side and F the
                            back so that the whole show when put together was like this
                            [diagram] l The figures<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/harry_and_lucy_vol3_glosses_contextual#MSIIIAGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                9
                </span>
              </a></span></div>
            
            <div class="p">Upon this piece of paper a macaw or parrot was to be drawn
                            with the most gay and amusing.</div>
            
            <div class="p">The figures were first to be drawn with pen and ink upon
                            pieces of pasteboard these were then to be cut out and fastened
                            to sticks with gum and being introduced at the bottom of the show
                            were pushed up to the top and there danced about. <span class="persName-fictional-HARRY">Harry</span> now being
                            quite satisfied <in the> with his plan fell asleep and slept
                            soundly and in the morning made <span class="persName-fictional-LUCY">lucy</span> learn these constellations
                            and by the time she had finished them tinkle tinkle went the
                            breakfast bell. Passing over the sundry little mistakes and
                            ocurrances  which made their appearance at breakfast we
                            shall go to <span class="persName-fictional-HARRY">harrys</span> poem Alas he was to use his own words in a
                            hugeous hurry 4 days and he would be entering upon another year
                            how was he to get a poem finished consisting of 89 lines finished
                            in that style of printing with the show it was altogether
                            impossible So <span class="persName-fictional-HARRY">harry</span> put off the show till his fathers birthday.
                            and laboured.</div>
            </div>
         </div>
   </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>