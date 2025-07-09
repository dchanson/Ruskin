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
 "Oh are there spirits, can there be" [poem] “Source of the Arveron” [essay] “I woke to hear the lullaby” [“The Arve at Chamouni”] [poem] “Andernacht” [essay] "St. Goar" [essay] “There is a charmed peace that aye” [“The Alps from Schaffhausen”] [poem] “Via Mala” [poem] “Splugen” [poem] “The Summit” [poem] “The Descent” [poem] “The Meuse” [essay] “Cologne” [essay] "Oh, the morn looked bright on hill and dale" ["The Black Forest"] [poem] “It was a wide stretchy sweep” [essay] “Part of Brussels” [essay, part 1] “Oh softly blew the morning breeze” [“Chiavenna”] [poem] “Part of Brussels” [essay, part 2] “Lago di Como” [poem] “Of various trees a vista green” [poem, incorporated into “Genoa”] "It was an eve of summer, mild" ["Lago Maggiore"] [poem] “Aix la Chapelle” [essay] Mountain Sketch [drawing] MS VIII [drawing]—Buildings on Water with Boats “Smiling from those bright rays kiss” [“Heidelberg”] [poem, part 1] “The Rhine” [essay] “Oh warmly down the sunbeams fell” [“Ehrenbreitstein”] [poem] “Continuation Heidelberg” [poem] “Schaffhausen” [poem] “The lake smiled sweetly and the boy” [poem] “Not such the night whose stormy might” [“Evening at Chamouni”] [poem] “It is said that French will carry you over all Europe” [“Ehrenbreitstein”] [essay] “Most beautiful are the paths” [“Heidelberg”] [essay, part 1] “The foam globes round come riding fast” [“The Source of the Arveron”] [poem] "Cont. Heidelberg" [essay, part 2] “So broadly stretched in sapphire sheet” [poem] “All has yielded to it from time immemorial” ["Heidelberg," essay, part 3] “Genoa” [poem] “Cadenabbia” [poem] “Villa Pliniana” [poem] “There were sweet sounds mingled with my dreaming” [essay]
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msviii/MSVIIIp52-53.jpg msviii/MSVIIIp54-55.jpg msviii/MSVIIIp54-55.jpg msviii/MSVIII55v-56r.jpg msviii/MSVIII55v-56r.jpg msviii/MSVIII56v-57r.jpg msviii/MSVIII56v-57r.jpg msviii/MSVIII56v-57r.jpg msviii/MSVIII57v-58r.jpg msviii/MSVIII57v-58r.jpg msviii/MSVIII57v-58r.jpg msviii/MSVIII58v-59r.jpg msviii/MSVIII58v-59r.jpg msviii/MSVIII59v-60r.jpg msviii/MSVIII59v-60r.jpg msviii/MSVIII60v-61r.jpg msviii/MSVIII60v-61r.jpg msviii/MSVIII60v-61r.jpg msviii/MSVIII60v-61r.jpg msviii/MSVIII61v-62r.jpg msviii/MSVIII61v-62r.jpg msviii/MSVIII61v-62r.jpg msviii/MSVIII62v-63r.jpg msviii/MSVIII62v-63r.jpg msviii/MSVIII62v-63r.jpg msviii/MSVIII63v-64r.jpg msviii/MSVIII63v-64r.jpg msviii/MSVIII63v-64r.jpg msviii/MSVIII64v-65r.jpg msviii/MSVIII64v-65r.jpg msviii/MSVIII64v-65r.jpg msviii/MSVIII65v-66r.jpg msviii/MSVIII65v-66r.jpg msviii/MSVIII65v-66r.jpg msviii/MSVIII66v-67r.jpg msviii/MSVIII66v-67r.jpg msviii/MSVIII67v-68r.jpg msviii/MSVIII67v-68r.jpg msviii/MSVIII68v-69r.jpg msviii/MSVIII68v-69r.jpg msviii/MSVIII69v-70r.jpg msviii/MSVIII70v-71r.jpg msviii/MSVIII70v-71r.jpg msviii/MSVIII70v-71r.jpg msviii/MSVIII70v-71r.jpg msviii/MSVIII71v-72r.jpg msviii/MSVIII71v-72r.jpg msviii/MSVIII77v-78r.jpg msviii/MSVIII77v-78r.jpg msviii/MSVIII78v-79r.jpg msviii/MSVIII78v-79r.jpg msviii/MSVIII78v-79r.jpg msviii/MSVIII78v-79r.jpg msviii/MSVIII79v-80r.jpg msviii/MSVIII79v-80r.jpg msviii/MSVIII80v-81r.jpg msviii/MSVIII81v-82r.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msviii" target="_self"></a><br/></div>
   <div class="fileName"><span>"Oh are there spirits, can there be" [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">     
         <div class="half"></div>
         
         <div class="lg-stanza">
            <span class="l">Oh are there spirits, can there be</span><br/>
            <span class="l">Things of such wondrous mystery</span><br/>
            <span class="l">Oh are there spirits, can a mind</span><br/>
            <span class="l">Float bodiless and unconfined</span><br/>
            <span class="l">Or can the air the earth, the sea
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">510</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L5" id="L5">5</a></div></span><br/>
            <span class="l">Be filled with immortality</span><br/>
            <span class="l">Some say that in the cold moonlight</span><br/>
            <span class="l">There hovereth many a changing sprite</span><br/>
            <span class="l">Some say the wind, and who can tell</span><br/>
            <span class="l">Bears spirits voices in its swell
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">515</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L10" id="L10">10</a></div></span><br/>
            <span class="l">But if upon our mortal sense</span><br/>
            <span class="l">There rules <span class="del-strikethrough">a <span class="unclear-">un(?)</span></span> unearthly influence</span><br/>
            <span class="l">If there be sprites in earth or air,</span><br/>
            <span class="l">They surely have their dwelling there<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/oh_are_there_spirits_can_there_be_glosses_contextual#SPRITESINEARTHORAIR" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Source of the Arveron” [essay]</span></div>
   <div class="witness">
      <div class="essay" id="">
         <div id="MSVIIIp54" class="pb"></div>
         
         <div class="title" id="@"><span class="space" style="padding-left:6.4em"> </span><span class="title-essay-JRSOURCEOFTHEARVERON">Source of the Arveron</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/source_of_the_arveron_prose_glosses_textual#SOURCEOFTHEARVERONTITLE" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                a
                </span>
                
              </a></span></div>
         
         <div class="p">What a delicious thing is a reverie, that total abstraction<br/>
                    from all things present, that stilly dreamy waking vision<br/>
                    that places where you are not, that carries you where you<br/>
                    wish tobe, that presents the past to your recollection, and<br/>
                    the future to your fancy, so forcibly, so impressively, so lovelily,<br/>
                    throwing a glow on every circumstance, a halo on every feature<br/>
                    giving the vivid, the magic colouring of the dream to the defined<br/>
                    and distinct recollection of the reality It is thus that I look<br/>
                    back upon our first walk at <span class="placeName-CHAMOUNI">Chamouni</span>, to the Source of<br/>
                    the <span class="geogName-ARVERON">Arveron</span>.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/source_of_the_arveron_prose_glosses_contextual#WALKTOTHESOURCE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span> 
                    What variaties of childish beauty we met with<br/>
                    i<div 
          class="s-subst s-add s-overwrite s-inline">n</div><div 
          class="subst-del s-subst s-del" >t</div> that short walk, every little <span class="del-strikethrough">power</span> mountaineer was a perfect<br/>
                    picture, one little fellow insisted upon conducting us to the source<br/>
                    and as notre guide principale piloted us proudly through the<br/>
                    crowd of little fry who were lying in wait, all expecting <br/>
                    a similar distinction, but who, finding the post of honour<br/>
                    preoccupied, followed <span class="del-strikethrough">grav</span> very gravely, en suite<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/source_of_the_arveron_prose_glosses_contextual#VARIETIESOFCHILDISHBEAUTY" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span> Voila la<br/>
                    source quoth our petit conducteur, as we emerged from<br/>
                    a dark wood of pines bordering on the waves of the flashing<br/>
            <span class="geogName-ARVERON">Arveron</span> It was exceeding lovely. The day had been<br/> 
                    one continued succession of storms but the eve was breaking<br/>
                    and giving fair promise of a <span class="del-strikethrough">clou</span> sunny morrow right<br/>
                    in front a few exhausted, but lingering <span class="del-strikethrough">thundering</span><br/>
                    tempest clouds shadowed the dark masses of pine that<br/>
                    girdle the <span class="geogName-MONTANVERT">Montanvert</span>,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/source_of_the_arveron_prose_glosses_contextual#MONTANVERT" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                4
                </span>
              </a></span> but farther <span class="del-strikethrough">the</span> to the <span class="del-strikethrough">whe</span> west<br/>
                    broke away into fleecy masses scarcely distinguishable from<br/>
                    the eternal snow that flashed through their openings and farther<br/>
                    still a serene evening sky glowed peacefully A lurid ominous<br/>
                    light pervaded the whole air, that stormy and murky lume<br/>
                    the effect of the strange combat between the sun and tempest<br/>
                    the one casting the whole body of <span class="del-strikethrough">mo</span> gigantic mountains into<br/>
            <div id="MSVIIIp55" class="pb"></div>
            <div class="pageNum-top-right">55</div><br/>
                    a dreary darkness, the other <span class="del-strikethrough">shootin</span> pouring a stream of red ghostly<br/>
            <span class="del-strikethrough">lu</span> dusky light up the valley that caught as it past the projecting<br/>
                        pinnacled spires of the <span class="geogName-BOSSONS">glacier des Bossons</span> which flashed dazzling<br/>
                    forth from the gloom of the ribbed crags as the lightning leaps<br/>
                    from the thunder cloud A low hollow melancholy echoing was<br/>
                    heard issuing from the recesses of the mountains, the last sighing<br/>
                    of the passing away tempest the last murmers of the storm<br/>
                    spirit as he yielded up his reign, it past away and the<br/>
                    blue rigidness of the transparent <span class="del-strikethrough">grotto</span> cavern of the glacier<br/>
                    woke rosily to the kiss of the departing sun</div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“I woke to hear the lullaby” [“The Arve at Chamouni”] [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="lg-stanza">
            <span class="l">I woke to hear the lullaby<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/i_woke_to_hear_the_lullaby_poem_glosses_textual#ARVEATCHAMOUNITITLE" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                b
                </span>
                
              </a></span><div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">520</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L15" id="L15">15</a></div></span><br/>
            <span class="l">Of the <span class="del-strikethrough">fie</span> swift river rolling by</span><br/>
            <span class="l">Monotonous yet beautiful</span><br/>
            <span class="l">Ever <span class="del-strikethrough"><span class="unclear-DCH">t</span></span> the gentle pebbly <span class="del-strikethrough">swift</span> swell</span><br/> 
            <span class="l"><span class="del-strikethrough">Of ever</span> And every ripple lent his plash</span><br/>
            <span class="l">Joining in chorus wi<div 
          class="subst-del s-subst s-del" >f</div><div 
          class="s-subst s-add s-overwrite s-inline">t</div>h the dash 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">525</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L20" id="L20">20</a></div></span><br/>
            <span class="l">Of <span class="del-strikethrough">m</span> every mighty mountain stream</span><br/>
            <span class="l">That joyful sung his morning hymn</span><br/>
            <span class="l">His iris glory round him quivering</span><br/>
            <span class="l">Where his white showery falls were shivering</span><br/>
            <span class="l">There is a melancholy smile
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">530</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L25" id="L25">25</a></div></span><br/>
            <span class="l">On natures features fair the while</span><br/>
            <span class="l">When the dank dews descending grey,</span><br/>
            <span class="l">Weep for the loss of parting day</span><br/>
            <span class="l">There is a sad and soft complaining</span><br/>
            <span class="l">In the light breeze when day is waning
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">535</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L30" id="L30">30</a></div></span><br/>
            <span class="l">The evening star is fair and full</span><br/>
            <span class="l">But it is passing sorrowful<span class="del-strikethrough">l</span></span><br/>
            <span class="l">And merry is the laughing light</span><br/>
            <div id="MSVIIIp55v" class="pb"></div>
            <span class="l">That blushes oer the heavens height</span><br/>
            <span class="l">That stream and bird and <span class="del-strikethrough"><span class="unclear-DCH">for</span></span> breeze and tree
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">540</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L35" id="L35">35</a></div></span><br/>
            <span class="l"><span class="del-strikethrough">V</span> For very joy sing merrily</span><br/>
            <span class="l">When wakes the morn the morn the mountain snows</span><br/>
            <span class="l">From their cold fixed pale repose</span><br/>
            <span class="l">It was a most enchanting vision</span><br/>
            <span class="l">The morning mists had upwards risen
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">545</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L40" id="L40">40</a></div></span><br/>
            <span class="l">And floating in the fields of air</span><br/>
            <span class="l">Lay in long lines most calmly there</span><br/>
            <span class="l">You could not call them clouds I wist</span><br/>
            <span class="l">They were not smoke they were not mist</span><br/>
            <span class="l">They were a sort of visible breeze,
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">550</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L45" id="L45">45</a></div></span><br/>
            <span class="l">Touching the tops of the pine trees</span><br/>
            <span class="l">That as we passed beneath, and strook</span><br/>
            <span class="l">Their stretchy branches ever shook</span><br/>
            <span class="l">The laughing showers of <span class="del-underline">lightso</span> dancing dew</span><br/>
            <span class="l">Reflecting every rainbow hue
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">555</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L50" id="L50">50</a></div></span><br/>
            <span class="l">Or clinging to the clusters dank</span><br/>
            <span class="l">of bright green moss upon the bank</span><br/>
            <span class="l">And where those pines their crests had cloven</span><br/>
            <span class="l">How rich the sun was interwoven</span><br/>
            <span class="l">And smiling through the leafy shade
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">560</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L55" id="L55">55</a></div></span><br/>
            <span class="l">Among the spangled grass it played</span><br/>
            <span class="l">And drank the dew from flower and blade</span><br/>
            <span class="l">Melting the heavy drops to air</span><br/>
            <span class="l">That so dragged down the gossamer</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Andernacht” [essay]</span></div>
   <div class="witness">
      <div class="essay" id="">
         
         <div class="title" id="@"><span class="space" style="padding-left:6.4em"> </span>Andernacht</div>
         
         <div class="p">What is it that makes the very heart leap within you<br/> 
                    at the sight of a hills blue outline, that so aetheriallizes the<br/> 
                    soul and ennobles the spirit that so raises you from the<br/>
            <div id="MSVIII56r" class="pb"></div>
            <div class="pageNum-top-right">56</div><br/>
            earth an<div 
          class="subst-del s-subst s-del" >f</div><div 
          class="s-subst s-add s-overwrite s-inline">d</div> from aught of the earth Ist it their apparent proximity<br/> 
                    to the blue heavens inaccessibleness, is it the humbling sense<br/> 
                    of your own littleness, or that immoveable unchangeable mag<br/>nificence of th<div 
          class="subst-del s-subst s-del" >e</div><div 
          class="s-subst s-add s-overwrite s-inline">at</div> <span class="del-strikethrough"><span class="unclear-DCH">pa</span></span> which has seen the beginning of the world<br/> 
                    and will see its end, or is it that the thoughts range insens‐<br/> ibly from the things created to him who created them. I<br/> 
                    know not How it thrilled through me when first, far away<br/> 
                    across the lake like swell of the <span class="del-strikethrough">blue</span><div 
              class="add-above" 
              style="left:14.0em">deep</div> waters of that wondrous<br/> 
                    river rose the cloudy outline of the blue mountains Long time<br/> 
                    has past over me since I saw the swell of a blue hill I have<br/> 
                    longed for them, I have yearned for them as an exile yearns<br/> 
                    for his native land, and I am with them, —. We left <span class="placeName-COLOGNE">Co‐<br/>
                    logne</span> on a misty summer morning, its many turreted spires<br/> 
                    rising colossally but grey and faint amid the wreathing<br/> 
                    columns of mist that smoked upward from the course<br/> 
                    of the Broad <span class="geogName-RHINE">Rhine</span>. There was the huge cathedral, dark<br/> 
                    with the confused richness of its own fretwork, and the<br/> 
                    remains of its magnificent but unfinished tower<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_glosses_contextual#ANDERNACHTCATHEDRALTOWERGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                5
                </span>
              </a></span> show‐<br/>
                    ing ruinlike beside it There were the red sails and<br/> 
                    mingled masts of the innumerable shipping without<br/> 
                    one sail swelling or a flag bending to the morning breeze<br/>
                    There was that peaceful and lovely lassitude over every<br/> 
                    thing that sleep of the earth and the air and the<br/> 
                    sky that charms the mind into a corresponding fascina‐<br/> tion of stillness, the very thoughts seem at rest.</div>
         
         <div class="p">We went on we past <span class="placeName-BONN">Bonne</span> and <span class="placeName-GODESBERG">Godesberg</span>, and<br/> 
            <span class="geogName-DRACHENFELS">Drachenfels</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_glosses_contextual#ANDERNACHTWEWENTONGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                6
                </span>
              </a></span> and sunset was <span class="del-strikethrough">bending</span> <div 
              class="add-above" 
              style="left:11.2em">sorrowing</div> over hill and<br/> 
                    valley when the gloomy and venerable towrs of <span class="placeName-ANDERNACH">Ander‐<br/> nacht</span> frowned over us. I love to look upon the crags that<br/> 
            <span class="persName-JULIUSCAESAR">Caesar</span> has scaled, on<span class="del-strikethrough">t</span> the towers that his legions hav<div 
          class="subst-del s-subst s-del" >i</div><div 
          class="s-subst s-add s-overwrite s-inline">e</div><div 
          class="subst-del-strikethrough s-subst s-del s-strikethrough" >ng</div> founded.<br/> 
            <div id="MSVIII56v" class="pb"></div>
                    The one is now as it was then, looking up to the broad blue heaven, the others<br/> 
            <div 
          class="subst-del s-subst s-del" >is</div><div 
          class="s-subst s-add s-overwrite s-inline">are</div> in ruins.—<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_glosses_contextual#ANDERNACHTTHESEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                7
                </span>
              </a></span> Yet <span class="del-strikethrough">it</span> <div 
              class="add-above" 
              style="left:8.0em">they</div> is here, mighty in <span class="del-strikethrough">its</span> <div 
              class="add-above" 
              style="left:17.2em">their</div> ruin, and majestic in <span class="del-strikethrough">its</span> <div 
              class="add-above" 
              style="left:27.6em">their</div><br/> 
                    decay, but their Lords are departed and forgotten as the waves that <span class="del-strikethrough">then</span> once<br/> 
                    lashed their foundations,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/andernacht_prose_glosses_textual#ANDERNACHTTERMINALCOMMAGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                c
                </span>
                
              </a></span> Other s<div 
          class="s-subst s-add s-overwrite s-inline">n</div><div 
          class="subst-del-strikethrough s-subst s-del s-strikethrough" >h</div>ows have melted and the <span class="geogName-RHINE">Rhine</span> yet flows<br/> 
                    onward unbroken but those waves are lost in the ocean for ever.—<br/>
            </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>"St. Goar" [essay]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="p"><span class="placeName-STGOAR">St Goar</span> is the least and sweetest place on all the <span class="geogName-RHINE">Rhine</span>. There is <span class="placeName-GODESBERG">Godesberg</span><br/> 
                    with its hilltop crested with <span class="placeName-GODESBURG">ruins</span>, there is <span class="placeName-ANDERNACH">Andernacht</span>, with its venerable<br/> 
                    remains of antiquity there is <span class="geogName-EHRENBREITSTEIN">Ehrenbreitstein</span>, on whose cliff never traitor stood<br/> 
                    looking out far away over the <div 
              class="add-above" 
              style="left:10.8em">its</div> sea of rich champaign country, but there<br/> 
                    is nothing like, <span class="placeName-STGOAR">St Goar</span>. It has a lone hill beauty, the little scene round<br/> 
                    it is exceeding small, but it has a modest secluded loveliness,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/st_goar_prose_glosses_textual#STGOARTERMINALCOMMA" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                d
                </span>
                
              </a></span> You look<br/> 
                    on <span class="placeName-ANDERNACH">Andernacht</span> with veneration, on <span class="geogName-EHRENBREITSTEIN">Ehrenbreitstein</span> with awe, but on <span class="placeName-STGOAR">St<br/> 
                        Goar</span> with love<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/st_goar_glosses_contextual#STGOARLOVEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                8
                </span>
              </a></span> There is a voice in all nature,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/st_goar_prose_glosses_textual#STGOARTERMINALCOMMA" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                e
                </span>
                
              </a></span><div 
              class="add-above" 
              style="left:18.4em">List to the rave of the mad sea</div> Speaks it not eloquent‐<br/> 
                    ly, does it not tell of its green weedy caverns and its coral towers<br/> 
            <span class="del-strikethrough">A</span> and the high hills and shelly vallies far far beneath its cold<br/> 
                    blue, and the skulls of the drowned men that grin from<br/> 
                    among its rolled round pebbles.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/st_goar_glosses_contextual#STGOARSKULLSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                9
                </span>
              </a></span> List to the song of the<br/> 
                    summer breeze and does it not tell of the blue heavens<br/> 
                    and the white clouds and other climes and other seasons<br/> 
                    and spicy gales and myrtle bowers and sweet things far away<br/> 
                    How softly the <span class="geogName-RHINE">Rhine</span> sings at <span class="placeName-STGOAR">St Goar</span>, and it tells of the cold<br/> 
                    arched grottoes of the glacier and the crags of the far <span class="geogName-ALPS">Alps</span>, and<br/> 
            <span class="del-strikethrough">it</span> how it joys to dash against grey rocks once more.</div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“There is a charmed peace that aye” [“The Alps from Schaffhausen”] [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="lg-stanza">
            <span class="l">There is a charmed peace, that aye<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/there_is_a_charmed_peace_that_aye_poem_glosses_textual#SCHAFFHAUSENTITLEGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                f
                </span>
                
              </a></span><div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">565</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L60" id="L60">60</a></div></span><br/>
            <span class="l">Sleeps upon the sabbath day</span><br/>
            <span class="l">A rest <span class="del-strikethrough">on</span>around and a calm on high</span><br/>
            <span class="l">Though a still small voice speaks from earth and sky,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/there_is_a_charmed_peace_that_aye_poem_glosses_contextual#STILLSMALLVOICEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                10
                </span>
              </a></span></span><br/>
            <span class="l">Keep holy the sabbath day</span><br/>
            <div id="MSVIII57r" class="pb"></div>
            <div class="pageNum-top-right">57</div><br/>
            <span class="l">Keep it holy ever alway
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">570</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L65" id="L65">65</a></div></span><br/>
            <span class="l">Sabbath morn was <span class="del-strikethrough">co</span> soft and shroudless</span><br/>
            <span class="l">Sabbath noon was calm and cloudless<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/there_is_a_charmed_peace_that_aye_poem_glosses_textual#LINES1TO8GLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                g
                </span>
                
              </a></span></span><br/>
            <span class="l">Sabbath eve is sinking low<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/there_is_a_charmed_peace_that_aye_poem_glosses_contextual#SABBATHDAY" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                11
                </span>
              </a></span></span><br/>
            <span class="l">Oer the blue <span class="geogName-RHINE">Rhine</span>s sullen flow</span><br/>
            <span class="l">He has worn a prisoned way
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">575</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L70" id="L70">70</a></div></span><br/>
            <span class="l">Neath the round hills bending sway</span><br/>
            <span class="l">Far and near their sides you see</span><br/>
            <span class="l">Gay with vivid greenery</span><br/>
            <span class="l">Many a branch and bough is bending</span><br/>
            <span class="l">Oer the grey rocks grim impending
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">580</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L75" id="L75">75</a></div></span><br/>
            <span class="l">Danced the leaves on the bent twigs high</span><br/>
            <span class="l">Skeleton like on the evening sky</span><br/>
            <span class="l">And the oaks threw wide their jagged spray</span><br/>
            <span class="l">On their old straight branches mossed and grey</span><br/>
            <span class="l">And the foam drove down on the waters hue
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">585</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L80" id="L80">80</a></div></span><br/>
            <span class="l">Like a wreath of snow on the sapphires blue</span><br/>
            <span class="l">And a wreath of mist curled faint and far</span><br/>
            <span class="l">Where the cataract drove his dreadful war.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/there_is_a_charmed_peace_that_aye_poem_glosses_contextual#CATARACTGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                12
                </span>
              </a></span></span><br/>
            <span class="l">The <span class="geogName-ALPS">Alps</span>, the <span class="geogName-ALPS">Alps</span>, it is no cloud</span><br/>
            <span class="l">Wreathes the plain with its paly shroud,
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">590</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L85" id="L85">85</a></div></span><br/>
            <span class="l">The <span class="geogName-ALPS">Alps</span> the <span class="geogName-ALPS">Alps</span>,—Full far away</span><br/>
            <span class="l">The long successive ranges lay<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/there_is_a_charmed_peace_that_aye_poem_glosses_contextual#THEALPSTHEALPSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                13
                </span>
              </a></span></span><br/>
            <span class="l">Their <span class="del-strikethrough">firm</span> fixed solidity of size</span><br/>
            <span class="l">Told that they were not of the skies</span><br/>
            <span class="l">For could that rosy line of light
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">595</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L90" id="L90">90</a></div></span><br/>
            <span class="l"><span class="del-strikethrough">The moony gleam of every</span><div 
              class="add-above" 
              style="left:NaNem">Of unimaginable</div> height</span><br/>
            <span class="l">The moony gleam so far that threw</span><br/>
            <span class="l">Its fixed flash above the blue</span><br/>
            <span class="l">Of the far hills and <span class="geogName-MONTRIGI">Rigi</span>s crest<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/there_is_a_charmed_peace_that_aye_poem_glosses_contextual#RIGISCRESTGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                14
                </span>
              </a></span></span><br/>
            <div id="MSVIII57v" class="pb"></div>
            <span class="l">Yet russet from the flamy west, 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">600</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L95" id="L95">95</a></div></span><br/>
            <span class="l">Were they not clouds, whose sudden change</span><br/>
            <span class="l">Had bound them down an icy range</span><br/>
            <span class="l">Was not the wondrous battlement</span><br/>
            <span class="l">A thing of the domy firament</span><br/>
            <span class="l"><span class="del-strikethrough">Can things of such aetherial span</span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L100" id="L100">100</a></div></span><br/>
            <span class="l"><span class="del-strikethrough">Be trodden by the foot of man</span></span><br/>
            <span class="l">Are they of heaven, are they of air.
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">605</a></div></span><br/>
            <span class="l">Or can earth bring forth a thing so fair</span><br/>
            <span class="l">Theres beauty in the sky bound sea</span><br/>
            <span class="l">With its noble sweep of infinity
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L105" id="L105">105</a></div></span><br/>
            <span class="l">Theres beauty in the suns last fire,</span><br/>
            <span class="l">When the lighteth up his funeral pyre 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">610</a></div></span><br/>
            <span class="l">There is lovelines in the heavens hue</span><br/>
            <span class="l">And theres beauty in the mountains blue</span><br/>
            <span class="l">But look once on the <span class="geogName-ALPS">Alps</span> by the sunset quiver
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L110" id="L110">110</a></div></span><br/>
            <span class="l">And think on the moment thenceforward for ever<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/there_is_a_charmed_peace_that_aye_poem_glosses_contextual#THENCEFORWARDFOREVER" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                15
                </span>
              </a></span></span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Via Mala” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="title" id="@"><span class="space" style="padding-left:6.4em"> </span><span class="placeName-VIAMALA">Viamala</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/via_mala_poem_glosses_contextual#VIAMALAPASSINGTHEALPSCLUSTER" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                16
                </span>
              </a></span></div>
         
         <div class="lg-stanza">
            <span class="l">Our path is on the precipice
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">615</a></div></span><br/>
            <span class="l">How far far down those waters hiss</span><br/>
            <span class="l">That like an avalanche below</span><br/>
            <span class="l">Whirl on a stream of foamy snow.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/via_mala_poem_glosses_contextual#VIAMALAPRECIPICE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                17
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L115" id="L115">115</a></div></span><br/>
            <span class="l">Iv<span class="unclear-smudged-">e seen</span> the <span class="geogName-RHINE">Rhine</span> when in his pride</span><br/>
            <span class="l">All unresisted undefied
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">620</a></div></span><br/>
            <span class="l">Rolled smoothly on his aged tide</span><br/>
            <span class="l">Ive seen the <span class="geogName-RHINE">Rhine</span> with younger wave</span><br/>
            <span class="l">Oer every obstacle to rave
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L120" id="L120">120</a></div></span><br/>
            <span class="l">I see the <span class="geogName-RHINE">Rhine</span> in his native wild</span><br/>
            <span class="l">Is still a mighty mountain child 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">625</a></div></span><br/>
            <span class="l">How racked<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/via_mala_poem_glosses_textual#VIAMALARACKED" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                h
                </span>
                
              </a></span> upon his tortuous bed</span><br/>
            <div id="MSVIII58r" class="pb"></div>
            <div class="pageNum-top-right">58</div><br/>
            <span class="l">Came up from the abyss of dread</span><br/>
            <span class="l">The deafing now with softened sound
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L125" id="L125">125</a></div></span><br/>
            <span class="l">Murmuring up from the profound</span><br/>
            <span class="l">Of distance dark where light of day
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">630</a></div></span><br/>
            <span class="l">Pierced <span class="del-strikethrough">t</span> not the thick damp twilight grey</span><br/>
            <span class="l">To the precipices sharp and sheer</span><br/>
            <span class="l">Whence the white foam looked up so clear
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L130" id="L130">130</a></div></span><br/>
            <span class="l">On looking oer the barrier</span><br/>
            
            <span class="l">From that <div 
          class="subst-add-above s-subst s-add s-above" 
          style="left:4.4em">rock</div><div 
          class="subst-del-strikethrough s-subst s-del s-strikethrough" >one</div> shelf, that hung so high<span class="del-strikethrough">t</span><div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">635</a></div></span><br/>
            
            
            <span class="l">Twixt the far depth and the blue sky</span><br/>
            <span class="l">Above, beside, around there stood</span><br/>
            <span class="l">The difficult crags in order rude
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L135" id="L135">135</a></div></span><br/>
            <span class="l">Soaring to the thin cold upper air</span><br/>
            <span class="l"><span class="del-strikethrough">It</span> Looked forth unnaturally clear 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">640</a></div></span><br/>
            <span class="l">Jagged with many a piny spear</span><br/>
            <span class="l">And here and there a patch of snow</span><br/>
            <span class="l">Contrasted strangely with the glow
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L140" id="L140">140</a></div></span><br/>
            <span class="l">Of the red rough mighty cliffs, and shed</span><br/>
            <span class="l">A strange cold light through the yawning dread 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">645</a></div></span><br/>
            <span class="l">Of the Abyssy gulph below</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Splugen” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="title" id="@"><span class="space" style="padding-left:6.4em"> </span><span class="placeName-SPLUGENVILLAGE">Splugen</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/splugen_poem_glosses_contextual#SPLUGENPASSINGTHEALPSCLUSTER" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                18
                </span>
              </a></span></div>
         
         <div class="lg-stanza">
            <span class="l">A little cultivated space</span><br/>
            <span class="l">Amid the rocky wilderness<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/splugen_poem_glosses_contextual#CULTIVATEDSPACE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                19
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L145" id="L145">145</a></div></span><br/>
            <span class="l">It was not so conspicuous seen</span><br/>
            <span class="l">Where every mountain top was green</span><br/>
            <span class="l">But that a little hamlet lay</span><br/>
            <span class="l">With its enclosures, mid the array</span><br/>
            <span class="l">Of the dark pines, most peacefully
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L150" id="L150">150</a></div></span><br/> 
            <span class="l">And a few cattle stray<div 
          class="subst-del s-subst s-del" >ed</div><div 
          class="s-subst s-add s-overwrite s-inline">ing</div> along</span><br/> 
            <span class="l">Browsing the grass the <span class="del-scratchout"><span class="gap-illigible" style="padding-left: 2em"></span></span> rocks among</span><br/>
            <div id="MSVIII58v" class="pb"></div>
            <span class="l">Ringing their bells, and here and there</span><br/>
            <span class="l">Poised on rock pinnacles i the air</span><br/>
            <span class="l">Looked out from his round glassy eye,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L155" id="L155">155</a></div></span><br/>
            <span class="l">The mountain goat suspiciously</span><br/>
            <span class="l">And drop by drop a little spring
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">660</a></div></span><br/>
            <span class="l">Down the smooth crag came glistering,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/splugen_poem_glosses_contextual#GLISTERING" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                20
                </span>
              </a></span></span><br/>
            <span class="l">With a sweet tinkling sound, and fell</span><br/>
            <span class="l">Into a massed receptacled
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L160" id="L160">160</a></div></span><br/>
            <span class="l">The long trunk of an aged fir,</span><br/>
            <span class="l">You scarce could see the water there
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">665</a></div></span><br/>
            <span class="l">So clear it ran, and sparkled round</span><br/>
            <span class="l">Then gurgled oer the grassy ground</span><br/>
            <span class="l">Marking its course by the fresh green
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L165" id="L165">165</a></div></span><br/>
            <span class="l">Of the grass blades it danced between</span><br/>
            <span class="l">I drank, and rested, and would fain
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">670</a></div></span><br/>
            <span class="l">have stopped to gaze and gaze again</span><br/>
            <span class="l">And rest awhile the wearied eye,</span><br/>
            <span class="l">Wearied with wild sublimity
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L170" id="L170">170</a></div></span><br/>
            <span class="l">No, on, the peaceful bourne is past</span><br/>
            <span class="l">The rocks around are closing fast,
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">675</a></div></span><br/>
            <span class="l">Higher and higher towards the heaven
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">6</a></div></span><br/> 
            <span class="l">Betwixt the cliffs our road is riven,</span><br/>
            <span class="l">Or twining round the hill side bare
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L175" id="L175">175</a></div></span><br/>
            <span class="l">With many a bend,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/splugen_poem_glosses_contextual#HIGHERANDHIGHER" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                21
                </span>
              </a></span> where the <span class="del-strikethrough">thin</span><div 
              class="add-above" 
              style="left:11.6em">high</div>air</span><br/> 
            <span class="l">Gan to blow cold, and damp and keen,
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">680</a></div></span><br/>
            <span class="l">But sharp and pressureless, the green,</span><br/>
            <span class="l">Though fresh upon the mountain side</span><br/>
            <span class="l">Was now mere thinly scattered
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L180" id="L180">180</a></div></span><br/>
            <span class="l">Now you might see, in sheltered nook</span><br/>
            <span class="l">The snow arch oer the icy brook
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">685</a></div></span><br/>
            <div id="MSVIII59r" class="pb"></div>
            <div class="pageNum-top-right">59</div><br/>
            <span class="l">With strange white delicate bridgy curve</span><br/>
            <span class="l">That the green light shot through above</span><br/>
            <span class="l">And round, beneath, beside there grew,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L185" id="L185">185</a></div></span><br/>
            <span class="l">The <span class="geogName-ALPS">Alpine</span> roses heathery hue<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/splugen_poem_glosses_contextual#ALPINEROSE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                22
                </span>
              </a></span></span><br/>
            <span class="l">That blushed along the mountain head,
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">690</a></div></span><br/>
            <span class="l">Was never flow'r so regal red</span><br/>
            <span class="l">If <span class="del-strikethrough">you</span> climbed the scathed old rocks along,</span><br/>
            <span class="l"><span class="del-strikethrough">It</span> Looked out the cold white snow among
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L190" id="L190">190</a></div></span><br/>
            <span class="l">And where no other flower would blow</span><br/>
            <span class="l">There you might see the red rose grow
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">695</a></div></span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“The Summit” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="title" id="@"><span class="space" style="padding-left:6.4em"> </span>The <span class="del-strikethrough">descent</span> Summit<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_summit_poem_glosses_contextual#THESUMMITPASSINGTHEALPSCLUSTER" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                23
                </span>
              </a></span></div>
         
         <div class="lg-stanza">
            <span class="l">Oh we are on the mountain top</span><br/>
            <span class="l">The clouds float by in fleecy flock</span><br/>
            <span class="l">Heavy and dank, Around below
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L195" id="L195">195</a></div></span><br/>
            <span class="l">A wilderness of turf and snow</span><br/>
            <span class="l">Scanty rock turf, or <span class="del-strikethrough">sandstone</span><div 
              class="add-above" 
              style="left:6.0em">marble</div> bare
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">700</a></div></span><br/>
            <span class="l">Without a living thing, for there</span><br/>
            <span class="l">Not a bird clove the thin cold air</span><br/>
            <span class="l">With labouring wing, the very goat
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L200" id="L200">200</a></div></span><br/>
            <span class="l">To such a height ascendeth not</span><br/>
            <span class="l">And if the clouds thick drapery
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">705</a></div></span><br/>
            <span class="l">Clove for a moment, you would see</span><br/>
            <span class="l"><div 
          class="s-subst s-add s-inline">The</div><div 
          class="subst-del-strikethrough s-subst s-del s-strikethrough" >A</div> long white snowfields on each side</span><br/> 
            <span class="l">Clasping the mountain breast, or heaped
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L205" id="L205">205</a></div></span><br/>
            <span class="l">In high wreathed hills whence torrents leaped</span><br/>
            <span class="l">And gathering force, as down<span class="del-strikethrough">ward</span><div 
              class="add-above" 
              style="left:9.2em">they</div> well<span class="del-strikethrough">ing</span><div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">710</a></div></span><br/>
            <span class="l">To aid the <span class="del-strikethrough">broad</span><div 
              class="add-above" 
              style="left:4.8em">swift</div> <span class="geogName-RHINE">Rhine</span>s headlong swell</span><br/>
            <span class="l">And <span class="del-strikethrough">and</span>here and there a mouldring cross</span><br/>
            <span class="l">Of dark pine matted oer with moss
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L210" id="L210">210</a></div></span><br/>
            <span class="l">Hung oer the precipice, to tell</span><br/>
            <div id="MSVIII59v" class="pb"></div>
            <span class="l">Where some benighted traveller fell.
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">715</a></div></span><br/>
            <span class="l">Or where the avalanches leap</span><br/>
            <span class="l">Hurled down with its wild thunder sweep</span><br/>
            <span class="l">Him unexpecting, and to pray
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L215" id="L215">215</a></div></span><br/>
            <span class="l">The passing traveller to stay</span><br/>
            <span class="l">And looking from the precipice,
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">720</a></div></span><br/>
            <span class="l">Dizzily down <span class="del-strikethrough">from</span><div 
              class="add-above" 
              style="left:6.0em">to</div> the abyss</span><br/>
            <span class="l">To wing to heaven one short prayer</span><br/>
            <span class="l">One, for the soul that parted there.
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L220" id="L220">220</a></div></span><br/>
            <span class="l">I thought as, by the cross I past</span><br/>
            <span class="l">Of far <span class="geogName-HELVELLYN">Helvellyn</span>s dreary waste
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">725</a></div></span><br/>
            <span class="l">Mid my own hills, and legend strange,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_summit_poem_glosses_contextual#GOUGH" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                24
                </span>
              </a></span></span><br/>
            <span class="l">How from dark <span class="geogName-STRIDINGEDGE">Striden</span>s ridgy range,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_summit_poem_glosses_contextual#STRIDINGEDGE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                25
                </span>
              </a></span></span><br/>
            <span class="l">One fell, upon a wintry day
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L225" id="L225">225</a></div></span><br/>
            <span class="l">When snow wreaths white concealed his way</span><br/>
            <span class="l">And died, beside a <span class="placeName-REDTARN">small dark tarn</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_summit_poem_glosses_contextual#REDTARN" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                26
                </span>
              </a></span><div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">730</a></div></span><br/>
            <span class="l">Oerlooked by crags, whose foreheads stern</span><br/>
            <span class="l">Shut in a little vale, a spot</span><br/>
            <span class="l">By man unknown and trodden not
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L230" id="L230">230</a></div></span><br/>
            <span class="l">Green, and most beautiful, and lay,</span><br/>
            <span class="l">His bones there whitening many a day,
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">735</a></div></span><br/>
            <span class="l">Though sun and rain might work their will</span><br/>
            <span class="l">From bird and wolf protected still</span><br/>
            <span class="l">For he had one companion, one,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L235" id="L235">235</a></div></span><br/>
            <span class="l">Watched oer him in the desert lone</span><br/>
            <span class="l">That faithful dog beside sat aye,
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">740</a></div></span><br/>
            <span class="l">Baying the vulture from his prey,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_summit_poem_glosses_textual#SUNANDRAIN" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                i
                </span>
                
              </a></span></span><br/>
            <span class="l">Else moved not, slept not, stirred not, still,</span><br/>
            <span class="l">Oer lake and mountain, rock and hill
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L240" id="L240">240</a></div></span><br/>
            <span class="l">Rung his short plaintive timid cry<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_summit_poem_glosses_textual#TIMIDCRY" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                j
                </span>
                
              </a></span></span><br/>
            <div id="MSVIII60r" class="pb"></div>
            <div class="pageNum-top-right">60</div><br/>
            <span class="l">Most melancholy, None passed by,
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">745</a></div></span><br/>
            <span class="l">None ‸<div 
              class="add-above" 
              style="left:2.4em">heard</div> his sorrowing call for aid</span><br/>
            <span class="l">Yet still beside the corse he staid</span><br/>
            <span class="l">And watched it moulder, and the day
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L245" id="L245">245</a></div></span><br/>
            <span class="l">When three long months had past away</span><br/>
            <span class="l">It was discovered where it lay
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">750</a></div></span><br/>
            <span class="l">And he beside it. Would that, we could love</span><br/>
            <span class="l">As he did.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_summit_poem_glosses_textual#LOVEASHEDID" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                k
                </span>
                
              </a></span></span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“The Descent” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="title" id="@"><span class="space" style="padding-left:6.4em"> </span>The descent<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_descent_poem_glosses_textual#THEDESCENTGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                l
                </span>
                
              </a></span></div>
         
         <div class="lg-stanza">
            <span class="l">A fearful mountain wall whose sweep<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_descent_glosses_contextual#THEDESCENTPASSINGTHEALPSCLUSTER" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                27
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L250" id="L250">250</a></div></span><br/>
            <span class="l">At one sheer plunge six thousand feet<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_descent_glosses_contextual#SIXTHOUSANDFEETGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                28
                </span>
              </a></span></span><br/>
            <span class="l">Stoops to the valley, on each side,</span><br/>
            <span class="l">Is tossed a very ocean<span class="del-strikethrough">y</span> tide,
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">755</a></div></span><br/>
            <span class="l">Of surgy snowy mountain crest</span><br/>
            <span class="l">And all along that hills steep breast
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L255" id="L255">255</a></div></span><br/>
            <span class="l">With snakelike coilings, wound our way,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_descent_glosses_contextual#WOUNDOURWAYGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                29
                </span>
              </a></span></span><br/>
            <span class="l">On narrow shelves of rock, that lay</span><br/>
            <span class="l">Almost oerhanging, and so sheer
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">760</a></div></span><br/>
            <span class="l">Twas terror to look down, so near,</span><br/>
            <span class="l">To such a precipice of fear
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L260" id="L260">260</a></div></span><br/>
            <span class="l">And far before, and far behind</span><br/>
            <span class="l">We tracked our dread ways mazy wind</span><br/>
            <span class="l">Continuous, and descending low,
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">765</a></div></span><br/>
            <span class="l">At length looked up to the white snow,</span><br/>
            <span class="l">From the deep valley, it would seem,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L265" id="L265">265</a></div></span><br/>
            <span class="l">Incredible, a very dream</span><br/>
            <span class="l">That we had scaled a ridge so high</span><br/>
            <span class="l">Or climbed so near the domy sky
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">770</a></div></span><br/>
            <span class="l">And we wound<span class="del-strikethrough">,</span> on, beside the course</span><br/>
            <span class="l">Of a roaring torrents flashing force,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_descent_glosses_contextual#SCALEDARIDGESOHIGH" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                30
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L270" id="L270">270</a></div></span><br/>
            <div id="MSVIII60v" class="pb"></div>
            <span class="l">And many a fall of minor stream</span><br/>
            <span class="l">Down the smooth rocks came thundering</span><br/>
            <span class="l">Or in white sheets of gauzy foam,
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">775</a></div></span><br/>
            <span class="l">Mingled with archy iris shone</span><br/>
            <span class="l">Among the forest pines
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L275" id="L275">275</a></div></span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“The Meuse” [essay]</span></div>
   <div class="witness">
      <div class="essay" id="">
         <div id="MSVIII60v" class="pb"></div>
         
         <div class="title" id="@"><span class="space" style="padding-left:6.4em"> </span>The <span class="geogName-MEUSE">Meuse</span></div>
         
         <div class="p">How <span class="del-strikethrough">be</span> lightly the waves of the broad <span class="geogName-MEUSE">Meuse</span>, crisped<br/> 
                        with the first breath of the morning, as we swept over<br/>
                        the long bridge that crosses the river from <span class="placeName-NAMUR">Namur</span>,<br/> 
                        and looked back on the rich dome of its small, but<br/> 
                        beautiful cathedral,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_glosses_contextual#LONGBRIDGEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                31
                </span>
              </a></span> as it began to smile to the<br/> 
                        first glance <span class="del-strikethrough">th</span> of the joyous sun, that was drink‐<br/> 
                        ing up the delicate mists, which clung to the hills and<br/> 
                        rested <div 
          class="subst-del s-subst s-del" >i</div><div 
          class="s-subst s-add s-overwrite s-inline">o</div>n the valley in which the fair city reposed<br/> 
                        so peacefully, and then <span class="del-strikethrough">plunged</span> dashed along the<br/> 
                        valley of the <span class="geogName-MEUSE">Meuse</span>. I know not, if it was because<br/> 
                        this was our first initiation into the scenery of<br/> 
                        continental rivers, but this part of the <span class="geogName-MEUSE">Meuse</span><br/> 
                        appeared to me infinitely preferable, (not in point<br/> 
                        of sublimity, or immensity but in that romantic<br/> 
                        and picturesque fairy beauty, which is, in many<br/>
                        cases preferable to either) to any thing which I ever<br/> 
                        afterwards saw on the shores of the farfamed <span class="geogName-RHINE">Rhine</span>.<br/> 
                        There was, to me, a great sameness throughout the whole<br/> 
                        of the ‸ <div 
              class="add-above" 
              style="left:2.8em">course of the</div> latter river, and ‸ <div 
              class="add-above" 
              style="left:10.0em">as</div> to its fortresses, it is positively too<br/> 
                        much of a good thing, a tiresome repitition of ruins,<br/> 
                        and ruins too, which do not altogether come up to my<br/> 
                        idea of what ruins ought to be,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_prose_glosses_textual#TERMINALCOMMA" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                m
                </span>
                
              </a></span> But for the <span class="geogName-MEUSE">Meuse</span>,<br/> 
                        the infinite variety of scenery, the almost confusing<br/> 
                        succession of delightful changes, the impossibility of <span class="del-strikethrough">examining</span><div 
              class="add-below" 
              style="left:22.8em">seeing</div><br/>
            <div id="MSVIII61r" class="pb"></div>
            <div class="pageNum-top-right">61</div><br/>
            every successive change as you feel that it ought to be seen, and<br/> 
                        finally, the tantalizing rate at which you dash away (capital<br/> 
                        road) from that which you could feast upon, and look upon<br/> 
                        and dwell upon, for—ages I was going to say, months, I<br/> 
                        will say, are enough to enchant you with anything.  If you<br/> 
                        wish to see rock scenery in perfection, go to the <span class="geogName-MEUSE">Meuse</span>,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_glosses_contextual#GOTOTHEMEUSEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                32
                </span>
              </a></span> for<br/> 
                        never were rocks more beautifully disposed, more richly and<br/> 
                        delicately wooded or more finely contrasted with the amaz‐<br/>
                        ing luxuriance of‸ <div 
              class="add-above" 
              style="left:7.6em">the</div> surrounding scenery. But alas. it was<br/> 
                        but a forenoon ride, and the eve saw us quit the magnificent<br/>
            <span class="geogName-MEUSE">Meuse</span> with sorrow for the smoky streets and coal wharfs<br/>
                        of <span class="placeName-LIEGE">Liege</span>, and the round, dumpy, shapeless hills of <span class="placeName-SPA">Spa</span>.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_meuse_glosses_contextual#LIEGESPAGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                33
                </span>
              </a></span><br/></div>
         
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Cologne” [essay]</span></div>
   <div class="witness">
      <div class="essay" id="">
         
         <div class="title" id="@"><span class="space" style="padding-left:6.4em"> </span><span class="placeName-">Cologne</span>.</div>
         
         <div class="p">And this is the birth place of <span class="persName-PPR">Rubens</span>. Sink these<br/> 
                    french bad roads<span class="g-terminal_comma">,</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cologne_prose_glosses_textual#TERMINALCOMMA" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                n
                </span>
                
              </a></span> <span class="del-strikethrough">f</span> A long days journey over them<br/> 
                    under a burning <div 
          class="subst-del s-subst s-del" >s</div><div 
          class="s-subst s-add s-overwrite s-inline">S</div>un, together with a perambulation<br/> 
                    on a damp evening at <span class="persName-">Aix la Chapelle</span>, so knocked<br/> 
                    me up, that I was forced to diet it, and quiet it<br/> 
                    And could not stir out to see <span class="del-strikethrough">the</span> <span class="persName-PPR">Rubens</span>ʼ last picture<br/> 
                    the masterpiece of the master, the <span class="title-artwork-RUBENSCRUCIFIXIONSTPETER">crucifixion of <span class="persName-STPETER">St<br/> 
                    Peter</span></span>, bequeathed by him at his death to his native<br/> 
                    city, and, yet more, his birthchamber, — fragment,<br/>
            </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>"Oh, the morn looked bright on hill and dale" ["The Black Forest"] [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="lg-stanza">
            <span class="l"><span class="del-strikethrough">The</span> Oh the morn looked bright o<div 
          class="subst-del s-subst s-del" >v</div><div 
          class="s-subst s-add s-overwrite s-inline">n</div><span class="del-strikethrough">er</span> hill and dale</span><br/>
            <span class="l">As we left the walls of merry <span class="unclear-">däyle</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/oh_the_morn_looked_bright_on_hill_and_dale_poem_glosses_contextual#DAYLE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                34
                </span>
              </a></span></span><br/>
            <span class="l">And towrds the long hill ridges wound</span><br/>
            <span class="l">That ramparted the plain around
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">780</a></div></span><br/>
            <span class="l">That greener growing as we neared
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L280" id="L280">280</a></div></span><br/>
            <span class="l">At length with meadows decked appeared</span><br/>
            <span class="l">Fair as our fields in May; and then</span><br/>
            <div id="MSVIII61v" class="pb"></div>
            <span class="l">We entered on a little glen
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">780</a></div></span><br/>
            <span class="l">Those miniature <span class="geogName-ALPS">Alps</span> among,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/oh_the_morn_looked_bright_on_hill_and_dale_poem_glosses_contextual#MINIATUREALPS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                35
                </span>
              </a></span></span><br/>
            <span class="l">All smiling with a morning sun
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L285" id="L285">285</a></div></span><br/>
            <span class="l">Grassy and woody, and most sweet</span><br/>
            <span class="l">As ever fairy her retreat</span><br/>
            <span class="l">Formed for her midnight dances,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/oh_the_morn_looked_bright_on_hill_and_dale_poem_glosses_textual#TERMINALCOMMA" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                o
                </span>
                
              </a></span> Through
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">785</a></div></span><br/>
            <span class="l">Tracing, in mazy winds anew,</span><br/>
            <span class="l">The spots it had passed oer, as fain
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L290" id="L290">290</a></div></span><br/>
            <span class="l">To run its sweet course oer again,—</span><br/>
            <span class="l">Flowed a small tributary stream</span><br/>
            <span class="l">That the <span class="geogName-RHINE">Rhine</span> levied all between<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/oh_the_morn_looked_bright_on_hill_and_dale_poem_glosses_contextual#KINZIGRIVER" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                36
                </span>
              </a></span><div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">790</a></div></span><br/>
            <span class="l">The frontlets of the fair fresh hills<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/oh_the_morn_looked_bright_on_hill_and_dale_poem_glosses_textual#FLOWED" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                p
                </span>
                
              </a></span></span><br/>
            <span class="l"><div 
          class="subst-add-above s-subst s-add s-above" 
          style="left:1.2em">Leaped</div><div 
          class="subst-del-strikethrough s-subst s-del s-strikethrough" >Sprang</div> merrily the glad young rills,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L295" id="L295">295</a></div></span><br/>
            <span class="l">Smiling in silver as they sprang,</span><br/>
            <span class="l">And merry were the notes they sang,</span><br/>
            <span class="l">For they were joyful at their birth
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">795</a></div></span><br/>
            <span class="l">From the cold prisons of the earth</span><br/>
            <span class="l">To the warm sun and open sky,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L300" id="L300">300</a></div></span><br/>
            <span class="l">And their song was all of liberty</span><br/>
            <span class="l">But the dell narrowed as we went</span><br/>
            <span class="l">Till, twixt the promontories pent
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">800</a></div></span><br/>
            <span class="l">It upward ran, and the clear stream</span><br/>
            <span class="l">Now forward shot its banks between,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L305" id="L305">305</a></div></span><br/>
            <span class="l">Fast flashing, till from the obscure</span><br/>
            <span class="l">Emerged we on a lofty moor,</span><br/>
            <span class="l">Open, and shelterless, and bare,
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">805</a></div></span><br/> 
            <span class="l">And gently undulating far<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/oh_the_morn_looked_bright_on_hill_and_dale_poem_glosses_contextual#LOFTYMOOR" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                37
                </span>
              </a></span></span><br/>
            <span class="l">With here and there a patch of pine
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L310" id="L310">310</a></div></span><br/>
            <span class="l">Breaking the smoothness of its line,</span><br/>
            <span class="l">Toward the south horizon!<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/oh_the_morn_looked_bright_on_hill_and_dale_poem_glosses_textual#SOUTHHORIZON" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                q
                </span>
                
              </a></span></span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“It was a wide stretchy sweep” [essay]</span></div>
   <div class="witness">
      <div class="essay" id="">
         <div id="MSVIII62r" class="pb"></div>
         <div class="pageNum-top-right">62</div><br/>
         
         <div class="p">It was a wide stretchy sweep of lovely blue champaign,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/it_was_a_wide_and_stretchy_sweep_prose_glosses_textual#PLACEMENT" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                r
                </span>
                
              </a></span> richly<br/>
                   cultivated, and beautifully wooded, and bounded by magnificent<br/>
                   mountain ranges, here fading away, faint and blue & cloudlike<br/>
                   toward the south,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/it_was_a_wide_and_stretchy_sweep_glosses_contextual#SOUTH" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                38
                </span>
              </a></span> there distinct and near and lofty, with the<br/>
                   green cultivation climbing up their broad flanks. I had read, that<br/>
                   the snowy summit of the <span class="geogName-MONTTITLIS">Mont Titlis</span>, was visible from <span class="placeName-STRASBOURG">Strasburg</span>,<br/>
                   the consequence of which marvellous information was, that I metamor‐<br/>
                   phosed every cloud I saw into a mountain, strained my eyes<br/>
                   with looking for that which was out of sight,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/it_was_a_wide_and_stretchy_sweep_glosses_contextual#TITLIS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                39
                </span>
              </a></span> and <span class="unclear-smudged-">had</span> at last,<br/>
                   very nearly argued myself into a conviction, that blue hills<br/>
                   were white <span class="unclear-smudges-">ones</span> until our entrance into the narrow dell above<br/>
                   mentioned, precluded all farther observations upon the clouds.—<br/></div>
         
         <div class="p">A swiss Cottage is a celebrated thing, celebrated far and wide—<br/>
                   it has modelled the Tivolian villas of—<span class="placeName-HIGHTGATE">Highgate</span> and <span class="placeName-HAMPSTEAD">Hamp<br/>
                       stead</span>,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/it_was_a_wide_and_stretchy_sweep_glosses_contextual#HIGHGATE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                40
                </span>
              </a></span> the mock waterfalls <span class="del-strikethrough">of</span> and crocodile stools of the Coliseum<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/it_was_a_wide_and_stretchy_sweep_glosses_contextual#COLISEUM" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                41
                </span>
              </a></span><br/>
                   have extended its fame, and much it delighted me when first<br/>
                   the wide projecting wooden roof and carved galleries and external<br/>
                   stairs looked out to greet us from among the dark pines— What<br/>
                   a host of associations and recollections tumbled in upon me.<br/>
                   Mountains avalanches, glaciers, cottages, <span class="persName-HANNIBAL">Hannibal</span>, vinegar,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/it_was_a_wide_and_stretchy_sweep_glosses_contextual#VINEGAR" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                42
                </span>
              </a></span> <span class="persName-fictional_person-WT">Tell</span>, <span class="geogName-ALPS">Alps</span><br/>
                   apples, tyrants and crossbows, came crowding into my brain jumbled<br/>
                   together in most admired disorder, I thought of nothing connected<br/>
                   the whole day</div>  
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Part of Brussels” [essay, part 1]</span></div>
   <div class="witness">
      <div class="essay" id="">
         
         <div class="title" id="@"><span class="space" style="padding-left:6.4em"> </span>Part of Brussels</div>
         
         <div class="p"><span class="placeName-BRUSSELS">Brussels</span> is a lovely, a queenlike city from a distance, sweeping<br/>
                    up the flanks of its hill, battlement over battlement swelling up,<br/>
                    higher and higher and higher, and the massive darkness of the two<br/> 
                    huge square cathedral towrs looming over the <div 
          class="subst-del s-subst s-del" >l</div><div 
          class="s-subst s-add s-overwrite s-inline">w</div>hole and contrasted<br/> 
                    strangely with the delicate sharp spireness of the steeple of the 
                    <span class="placeName-building-HOTELDEVILLEBRUSSELS">hotel de 
                        <span class="runover" style="left:26.4em">
               ville<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_glosses_contextual#CATHEDRALHOTELDEVILLEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                43
                </span>
              </a></span></span>
            
            <br/>
            <div id="MSVIII62v" class="pb"></div>.
                    <span class="placeName-PARIS">Paris</span> would look like an assemblage of brick kilns beside<br/> 
                    it.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_glosses_contextual#PARISBRICKKILNSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                44
                </span>
              </a></span> We saw <span class="placeName-BRUSSELS">Brussels</span> at 11 miles distance, its spires rising<br/> 
                    dark and spearlike out of the horizon— It was waxing dark<br/>
                    as we entered the city, and the lights began to twinkle in the<br/>
                    few, the very few shop windows. I love to pass through a city<br/> 
            <span class="del-strikethrough">by</span> at night, the hum of the voices rises so softly out of<br/> 
                    the obscurity, and the figures flit about dark and batlike and<br/>
                    the cold starlight mingles so strangely with the red swarthy<br/> 
                    gleam of the lamps <span class="del-strikethrough">light</span>,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_prose_glosses_textual#LAMPLIGHT" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                s
                </span>
                
              </a></span> and when you look up, the narrow<br/> 
                    strip of sky is of such a dark dark blue, you may see it<br/> 
                    appear to quiver with the starlight if you look long, and the<br/> 
                    white housefronts rise so ghastly so ghostlike against <div 
          class="s-subst s-add s-overwrite s-inline">i</div><div 
          class="subst-del s-subst s-del" >,</div>t, and<br/>
                    the windows seem grinning maliciously askan<div 
          class="s-subst s-add s-overwrite s-inline">ce</div><div 
          class="subst-del s-subst s-del" >t</div> at you, It makes<br/> 
                    one shiver <u>to</u> think of it.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_glosses_contextual#WAXINGDARKGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                45
                </span>
              </a></span> Cities are exceedingly picturesque when built<br/> 
                    upon hills, but for exploring, for circumnavigating, for <span class="del-strikethrough">traversing</span>,<br/> 
            </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Oh softly blew the morning breeze” [“Chiavenna”] [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="lg-stanza">
            <span class="l">oh softly blew<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/oh_softly_blew_the_morning_breeze_poem_glosses_textual#CHIAVENNATITLE" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                t
                </span>
                
              </a></span> the mo<div 
          class="s-subst s-add s-overwrite s-inline">r</div><div 
          class="subst-del s-subst s-del" >u</div>n<div 
          class="s-subst s-add s-overwrite s-inline">i</div><div 
          class="subst-del s-subst s-del" >t</div>ng breeze<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/oh_softly_blew_the_morning_breeze_poem_glosses_textual#MOUNTINGBREEZE" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                u
                </span>
                
              </a></span><div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">810</a></div></span><br/>
            <span class="l">Through <span class="placeName-CHIAVENNA">Chiavenna</span>s <span class="name--MYRTLE">myrtle trees</span>,</span><br/>
            <span class="l">And oer the green hills viny spread
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L315" id="L315">315</a></div></span><br/>
            <span class="l">That rose in many a rounded head</span><br/>
            <span class="l">Beneath the <span class="geogName-ALPS">Alpine</span> rocks of red</span><br/>
            <span class="l">And the fresh snow had fallʼn that night
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">815</a></div></span><br/>
            <span class="l">And sprinkled with its mantle white</span><br/>
            <span class="l">The mountain amphitheatre
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L320" id="L320">320</a></div></span><br/>
            <span class="l">That rose around us far and near</span><br/>
            <span class="l">Though in such far confusion hurled</span><br/>
            <span class="l">They looked to rule oer all the world
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">820</a></div></span><br/>
            <span class="l">And the white clouds seemed to immerse,</span><br/>
            <span class="l">Another ruinʼd universe.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/oh_softly_blew_the_morning_breeze_poem_glosses_contextual#MOUNTAINAMPHITHEATRE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                46
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L325" id="L325">325</a></div></span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Part of Brussels” [essay, part 2]</span></div>
   <div class="witness">
      <div class="essay" id="">
         <div id="MSVIII63r" class="pb"></div>
         <div class="pageNum-top-right">63</div><br/>
         
         <div class="p">perambulating, Oh woe to the walker,<div 
              class="add-below" 
              style="left:14.8em">‸</div> <div 
              class="add-above" 
              style="left:15.2em">he</div> who is compelled,<br/>
                        to drag himself up their steeps, those tiresome paved steeps,<br/>
                        those hard unyielding provokingly smooth flagstones, or to go<br/>
                        thundering down, his rapidity increasing every instant, when he<br/>
                        is once in for it, lurching tremendously <div 
          class="subst-del-strikethrough s-subst s-del s-strikethrough" >j</div><div 
          class="s-subst s-add s-overwrite s-inline">l</div>ike a ship in a swell<br/> 
                        jerk<span class="del-scratchout">ing</span>, jerk, jerking <span class="del-strikethrough">down</span>, Oh facilis descensus Averni,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_glosses_contextual#FACILISDESCENSUSAVERNIGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                47
                </span>
              </a></span><br/> 
                        sed, sed,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_glosses_contextual#SEDSEDGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                48
                </span>
              </a></span> Ay theres the rub<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_glosses_contextual#THERESTHERUBGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                49
                </span>
              </a></span> The <span class="placeName-building-HOTELDEBELLEVUE">hotel de bellevue</span> at <span class="placeName-BRUSSELS">Brussels</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_glosses_contextual#HOTELDEBELLEVUEBRUSSELSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                50
                </span>
              </a></span><br/> 
                        ought to have a belle vue, for you might as well scale the<br/> 
                        crags of <span class="placeName-GIBRALTAR">Gibraltar</span>, as storm the heights of the <span class="placeName-building-HOTELDEBELLEVUE">Hotel de Bellevue</span><br/> 
                        whence, for all the boast of its title, I never could discover<br/> 
                        more belle vue, than a dusty square, some formal houses,<br/> 
                        and a few murky park trees.  We left <span class="placeName-BRUSSELS">Brussels</span> on Wednesday<br/> 
                        Morning<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_glosses_contextual#WEDNESDAYMORNING" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                51
                </span>
              </a></span> for <span class="placeName-WATERLOO">Waterloo</span>. The sun beamed sweetly among the long,<br/> 
                        tall trunks of the aged trees of the <span class="geogName-SONIANFOREST">forest of Soigny</span>,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_glosses_contextual#FORESTOFSOIGNYGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                52
                </span>
              </a></span> and their damp<br/> 
                        bark glistened dewily as it rose up taller and taller, branching off<br/>
                        into the bending boughs and slender sprays <span class="del-strikethrough">each</span> with the delicate<br/>
                        foliage scattered through, here <span class="del-strikethrough">w</span> every leaf defined separately and<br/>
                        clearly as you looked up to the broad sky there in <span class="del-strikethrough">delicate</span><br/>
                        light spready masses, partially concealing the long<br/> 
                        tapery trunks which retired back, farther and <div 
          class="subst-add-above s-subst s-add s-above" 
          style="left:18.4em">still</div><div 
          class="subst-del-strikethrough s-subst s-del s-strikethrough" >yet</div> farther<br/>
                        Yet distinctly grouped, and those groups separated by the gleamy<br/> 
                        streams of yellow sunshine, which <div 
          class="subst-add-above s-subst s-add s-above" 
          style="left:14.4em">shone full on</div><div 
          class="subst-del-strikethrough s-subst s-del s-strikethrough" >caught</div> the sides of the swelling<br/> 
                        green <div 
              class="add-below" 
              style="left:2.0em">‸</div><div 
              class="add-above" 
              style="left:2.0em">grassy</div> banks then broken by the intervening hollows then climbing<br/> 
                        again up the dewy moss and white trunks, It was exceeding beau‐<br/>
                        tiful<u>. I</u> could have fancied the glister<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_glosses_contextual#GLISTERGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                53
                </span>
              </a></span> of <span class="del-strikethrough">the</span> bright bayonets changing,<br/>
                        like starlight on a wavy ocean, among the retiring foliage<br/> 
                        of those ancient trees—I forgot how many long years<br/>
                        had past by since that eventful day.—* * *<br/></div>
         
         
         <div class="p">This is the field of <span class="placeName-WATERLOO">Waterloo</span>.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_glosses_contextual#FIELDOFWATERLOOGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                54
                </span>
              </a></span> The round hills of green<br/> 
                    pasture lay<span class="del"><span class="unclear-DCH">e</span></span> unbroken before me, without a single tree, except<br/>
            <div id="MSVIII63v" class="pb"></div>
                    where far to the right the rich forest country commenced<br/>
                    again, spreading away in rounded masses, till lost in the<br/> 
                    blue of the faint horizon.<div 
              class="add-below" 
              style="left:10.4em">‸</div><div 
              class="add-above" 
              style="left:10.4em">All is peace now</div> English men may feel proud<br/> 
                    upon the field of <span class="placeName-WATERLOO">Waterloo</span>, perhaps I did, But there is something<br/>
                    mingled with it,—— Poor Napolean The grass is very green<br/>
                    on the field of <span class="placeName-WATERLOO">Waterloo</span>, for it has grown from the dust of<br/> 
                    our bravest, Oh tread on it softly<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/brussels_glosses_contextual#TREADSOFTLYGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                55
                </span>
              </a></span><br/></div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Lago di Como” [poem]</span></div>
   <div class="witness">
      <div class="poem" id=""> 
         <div id="MSVII63v" class="pb"></div>
         
         <div class="title"><span class="space" style="padding-left:6.4em"> </span><span class="placeName-LAKECOMO">Lago di Como</span></div>
         
         <div class="lg-stanza">
            <span class="l">It was a little peaceful bay<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lago_di_como_glosses_contextual#PEACEFULBAY" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                56
                </span>
              </a></span></span><br/>
            <span class="l">Beneath the precipices grey<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lago_di_como_glosses_contextual#PRECIPICES" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                57
                </span>
              </a></span></span><br/>
            <span class="l">Lay deep, and blue, and calm, but clear,
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">825</a></div></span><br/>
            <span class="l">As is the sapphire, and you saw</span><br/>
            <span class="l">The precipices sharp and sheer
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L330" id="L330">330</a></div></span><br/>
            <span class="l">And the white clouds careering war</span><br/>
            <span class="l">And the blue sky and the high hills</span><br/>
            <span class="l">Neath the cold waters <span class="del-strikethrough">as</span> <div 
              class="add-above" 
              style="left:8.0em">where</div> they slept
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">830</a></div></span><br/>
            <span class="l">Seemed fed by thousand mountain rills</span><br/>
            <span class="l">Flowed upward from the crystal depth
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L335" id="L335">335</a></div></span><br/>
            <span class="l">And all along that quiet bay<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lago_di_como_poem_glosses_textual#QUIETBAY" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                v
                </span>
                
              </a></span></span><br/>
            <span class="l">A range of little shipping lay</span><br/>
            <span class="l">With their red flags drooped downward right
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">835</a></div></span><br/>
            <span class="l">And sheltered by their awnings white</span><br/>
            <span class="l">From the high suns red scorching look
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L340" id="L340">340</a></div></span><br/>
            <span class="l">That oer the living waters shook</span><br/>
            <span class="l">A blaze of hot, and swarthy glow</span><br/>
            <span class="l">When we had launched from below
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">840</a></div></span><br/>
            <span class="l">The shade of the tall cliffs, and came</span><br/>
            <span class="l">Where <span class="placeName-LAKECOMO">Como</span> rolled his breast of flame
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L345" id="L345">345</a></div></span><br/>
            <span class="l">Down southward winding far away</span><br/>
            <span class="l">The olives tints of gentle gray</span><br/>
            <div id="MSVII64r" class="pb"></div>
            <div class="pageNum-top-right">64</div><br/>
            <span class="l">Stooped to his borders from between
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">845</a></div></span><br/>
            <span class="l">The hills uncultivated green</span><br/>
            <span class="l">And orange groves him girded round
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L350" id="L350">350</a></div></span><br/>
            <span class="l">Blossoming oer him fragrantly</span><br/>
            <span class="l">And in the sleep of his profound</span><br/>
            <span class="l">White villages shone silently<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lago_di_como_poem_glosses_textual#WHITEVILLAGES" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                w
                </span>
                
              </a></span><div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">850</a></div></span><br/>
            <span class="l">And from our prow the ripples flash</span><br/>
            <span class="l">Threw forth its little sparkles paly
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L355" id="L355">355</a></div></span><br/>
            <span class="l">The light sound of the oars dash</span><br/>
            <span class="l">Came dancing oer the waters gaily</span><br/>
            <span class="l">There was blue above, and blue below 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">855</a></div></span><br/>
            <span class="l">And the gleam of the eternal snow</span><br/>
            <span class="l">Forth from the fastnesses it came
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L360" id="L360">360</a></div></span><br/>
            <span class="l">Of the high <span class="geogName-ALPS">alps</span> retiring <span class="del-strikethrough">th</span> chain<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/lago_di_como_poem_glosses_textual#FASTNESSES" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                x
                </span>
                
              </a></span></span><br/>
            <span class="l">And all along the shored whereer,</span><br/>
            <span class="l">The stormwinds wont to chafe the wave 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">860</a></div></span><br/>
            <span class="l"><div 
          class="s-subst s-add s-overwrite s-inline">The</div><div 
          class="subst-del s-subst s-del" >A</div> <span class="del-strikethrough">crucif</span> crucifix is shrined there</span><br/>
            <span class="l">That <span class="persName-scriptural-JESUSCHRIST">Christ</span> may hear the passioned prayer
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L365" id="L365">365</a></div></span><br/>
            <span class="l">May hear, may <span class="del-strikethrough">listen</span><div 
              class="add-below" 
              style="left:6.4em">pity</div>, and may save</span><br/>
            </div>
         <div class="threequarter"></div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Of various trees a vista green” [poem, incorporated into “Genoa”]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="lg-stanza">
            <span class="l">Of various trees a vista green<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/genoa_poem_glosses_textual#OFVARIOUSTREESGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                y
                </span>
                
              </a></span></span><br/>
            <span class="l">Into <div 
          class="s-subst s-add s-overwrite s-inline">the</div><div 
          class="subst-del s-subst s-del" >a</div> streamlet looking down 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">865</a></div></span><br/>
            <span class="l">Whose living crystal shot between</span><br/>
            <span class="l">All trembling with the leafy gleam
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L370" id="L370">370</a></div></span><br/>
            <span class="l">And coolly on a high arch span</span><br/>
            <span class="l">The sportive light reflected ran</span><br/>
            <span class="l">Thither and thither fast,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/genoa_poem_glosses_textual#THITHERGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                z
                </span>
                
              </a></span> and through 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">870</a></div></span><br/>
            <span class="l">That natural arched avenue</span><br/>               
            <span class="l">There showed a rich and mighty plain<div class="add-bottom-right">×</div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L375" id="L375">375</a></div></span><br/>
            <div id="MSVIII64v" class="pb"></div> 
            <span class="l">Rolling its wooded waves away</span><br/>           
            <span class="l">And through the stretch of that champaign</span><br/>
            <span class="l">A noble river wound its way<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/genoa_poem_glosses_contextual#NAVIGLIODIPAVIAGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                58
                </span>
              </a></span> 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">875</a></div></span><br/>             
            <span class="l">And on the horizon to the north</span><br/>
            <span class="l">Pale gleams of icy snow came forth<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/genoa_poem_glosses_textual#SUNGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                aa
                </span>
                
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L380" id="L380">380</a></div></span><br/>             
            <span class="l">From the <span class="geogName-STBERNARD">St Bernard</span>s fastnesses,</span><br/>
            <span class="l">White as the wreathed salt sea spray</span><br/>               
            <span class="l">With the snow wreaths that ever press, 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">880</a></div></span><br/>
            <span class="l">Upon that heaven girt boundary,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/genoa_poem_glosses_contextual#STBERNARDGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                59
                </span>
              </a></span></span><br/>          
            <span class="l">Boundary meet for <span class="placeName-ITALY">Italy</span>,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L385" id="L385">385</a></div></span><br/>
            <span class="l">Most meet for such a lovely clime,</span><br/>                 
            <span class="l">As it looks oer <span class="placeName-MARENGO">Marengo</span>s sea,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/genoa_poem_glosses_contextual#MARENGOSSEAGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                60
                </span>
              </a></span></span><br/>
            <span class="l">Unto the <span class="geogName-APENNINES">Apennine</span>. 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">885</a></div></span><br/>                  
            <span class="l">Tis sweet a topmost mountain ridge,</span><br/>
            <span class="l">Impatiently to climb,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L390" id="L390">390</a></div></span><br/>               
            <span class="l">And there to stand and dream away,</span><br/>
            <span class="l">A little space of time.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/genoa_poem_glosses_contextual#APENNINEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                61
                </span>
              </a></span> </span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>"It was an eve of summer, mild" ["Lago Maggiore"] [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         <div id="MSVIII64v" class="pb"></div>
         
         <div class="lg-stanza">
            <span class="l">It was an eve of summer, mild,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/it_was_an_eve_of_summer_mild_poem_glosses_textual#TITLE" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                bb
                </span>
                
              </a></span> 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">890</a></div></span><br/>
            <span class="l">As ever looked the pale moon through</span><br/>
            <span class="l">That the deep waters were beguiled
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L395" id="L395">395</a></div></span><br/>
            <span class="l">Into such rest, that as the blue,</span><br/>
            <span class="l">The moveless blue of the high heaven</span><br/>
            <span class="l">Such sleep was to the <span class="del-strikethrough">waters</span><div 
              class="add-above" 
              style="left:9.2em">low lake</div> given 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">895</a></div></span><br/>
            <span class="l">That as in lethargy it lay<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/it_was_an_eve_of_summer_mild_poem_glosses_contextual#LETHARGY" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                62
                </span>
              </a></span></span><br/>
            <span class="l">Waveless and tideless, soft and grey
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L400" id="L400">400</a></div></span><br/>
            <span class="l">As chasmless glacier,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/it_was_an_eve_of_summer_mild_poem_glosses_textual#TERMINALCOMMA" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                cc
                </span>
                
              </a></span> Voicelessly</span><br/>
            <span class="l">The little barks came gliding by</span><br/>
            <span class="l">Apparently without a wind 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">900</a></div></span><br/>
            <span class="l">Leaving long ripply wakes behind,</span><br/>
            <div id="MSVIII65r" class="pb"></div>
            <div class="pageNum-top-right">65</div><br/>
            <span class="l">It would have seemed a lifeless sea
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L405" id="L405">405</a></div></span><br/>
            <span class="l">But there arose colossally<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/it_was_an_eve_of_summer_mild_poem_glosses_contextual#COLOSSALLY" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                63
                </span>
              </a></span></span><br/>
            <span class="l">Beyond the mist horizon, where,</span><br/>
            <span class="l">The waters mingled with the air 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">905</a></div></span><br/>
            <span class="l">The spirits of gigantic things,</span><br/>          
            <span class="l">Lords of the earth and air and sky.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/it_was_an_eve_of_summer_mild_poem_glosses_contextual#SPIRITS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                64
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L410" id="L410">410</a></div></span><br/>
            <span class="l">Where <span class="del-strikethrough">the</span> white heaven cloud in his gathering<div 
              class="add-above" 
              style="left:12.4em">around them</div> flings</span><br/>
            <span class="l">Concealment everlastingly</span><br/>
            <span class="l">The mountain snow, like scattered flocks 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">910</a></div></span><br/> 
            <span class="l">Speckled on high the red ribbed rocks,</span><br/> 
            <span class="l">Or down the ravines rolling blue
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L415" id="L415">415</a></div></span><br/> 
            <span class="l">Its crisped surge oer the green fields threw</span><br/> 
            <span class="l">Flinging the icewaves far and wide</span><br/> 
            <span class="l">Like the tortured spray of the ocean tide 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">915</a></div></span><br/> 
            <span class="l"><span class="del-strikethrough">On the <span class="unclear-DCH"></span> green of the meadows and mountain side</span><div 
              class="add-above" 
              style="left:0.4em">Breaking broad oer the mountain side</div></span><br/> 
            <span class="l">Yet was there such a softness shed
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L420" id="L420">420</a></div></span><br/> 
            <span class="l">Upon the rude <span class="geogName-ALPS">alp</span>s stormy head</span><br/> 
            <span class="l">On massive wood and <span class="del-strikethrough">stormy</span><div 
              class="add-above" 
              style="left:8.8em">russet</div> brake</span><br/> 
            <span class="l">Flashing river and polished <span class="del-strikethrough">g</span> lake<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/it_was_an_eve_of_summer_mild_poem_glosses_textual#SOBROADLYSTRETCHED" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                dd
                </span>
                
              </a></span> 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">920</a></div></span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Aix la Chapelle” [essay]</span></div>
   <div class="witness">
      <div class="essay" id="">
         
         <div class="title" id="@"><span class="space" style="padding-left:6.4em"> </span>Aix la Chapelle</div>
         
         <div class="p">Hast ever heard of the peace of <span class="placeName-AIXLACHAPELLE">Aix la Chapelle</span>,<br/>
                    reader.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_contextual#PEACEOFAIXLACHAPELLEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                65
                </span>
              </a></span> If thou ever travellest from
                    <span class="placeName-SPA">Spa</span> to <span class="placeName-AIXLACHAPELLE">Aix</span>,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_contextual#SPATOAIXGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                66
                </span>
              </a></span>
            <div 
          class="s-subst s-add s-overwrite s-inline">or</div><div 
          class="subst-del s-subst s-del" >and</div> from<br/>
            <span class="placeName-AIXLACHAPELLE">Aix</span> to <span class="placeName-COLOGNE">Cologne</span>, thou shalt find various treaties of<br/>
                    peace have been ratified, which thou wilt not approve<br/>
                    of. Thou shalt find atreaty,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_textual#ATREATY" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                ee
                </span>
                
              </a></span> whereof the first condition is.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_textual#PAUSEPERIOD" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                ff
                </span>
                
              </a></span><br/>
                    that the postillions whip be not closely acquainted with the<br/>
                    back of his quadrupeds, more than three times in a stage,<br/>
                    orso,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_textual#ORSO" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                gg
                </span>
                
              </a></span> Item, that the above mentioned quadrupeds, be not<br/>
                    compelled to draw any carriage, chariot, gig, or other vehicle,<br/>
                    whatsoever, at a greater rate than two miles an hour.<br/>
            <div id="MSVIII65v" class="pb"></div>
                    Item, that the above mentioned quadrupeds be not compelled<br/>
                    to trot upon the paved centre of the road, but that they<br/>
                    be permitted to draw the carriage, chariot, gig, or other vehicle<br/>
                    afore said, into the beds of sand and dust, denominated<br/>
                    by the postillion, la terre, even although the carriage, char‐<br/>
                    iot gig, or other vehicle, be in imminent danger of being overset<br/>
                    into the ditch which bordereth upon the road. Item, that<br/>
                    postillion be permitted, when upon the backs of his horses,<br/>
                    to indulge himself with a comfortable pipe, and half<br/>
                    hours nap, or so, during which time, his above mentioned<br/>
                    quadrupeds be surrendered to their own will, and gui‐<br/>
                    dance,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_contextual#POSTILIONAIXLACHAPELLEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                67
                </span>
              </a></span> Alas every article of this treaty was strictly<br/>
                    fulfilled with regard to us, and the consequence was,<br/>
                    that during a <div 
          class="subst-del-strikethrough s-subst s-del s-strikethrough" >half</div><div 
          class="subst-add-above s-subst s-add s-above" 
          style="left:6.0em">six</div> hours ride of 12 miles, I was first<br/>
                    fevered by the burning sun, then smothered by the<br/>
                    dust, and finally—but let that pass for the present.<br/>
                    A <span class="title-AACHENCATHEDRAL">cathedral</span> is a noble, a beautiful, a sublime thing,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_contextual#CATHEDRALGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                68
                </span>
              </a></span> by<br/>
                    twilight, with its white, fretted, marble columns, looking<br/>
                    out from the dark retiring immensity of the long aisles,<br/>
                    and the faint streams of coloured and variegated light<br/>
                    falling faintly through the Gothic windows, streaming<br/>
                    at intervals along the chequered floors, or ruddily lighting<br/>
                    up the countenances of the marble figures, giving a<br/>
                    ghastly resemblance to reality, a mockery of life, that<br/>
                    makes you start when you look upon the hollow eyes,<br/>
                    and rigid muscles starting out of the stone,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_textual#TERMINALCOMMA" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                hh
                </span>
                
              </a></span> You<br/>
                    almost think that the dead forms of departed monarchs<br/>
                    have sprung forth from their narrow dwellings beneath that<br/>
                    ancient pavement, and the peers of <span class="persName-CHARLEMAGNE">Charlemagne</span> are rallying<br/>
                    again around their monarch. Wake—<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_contextual#WAKEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                69
                </span>
              </a></span><br/></div>
         <div id="MSVIII66r" class="pb"></div>
         <div class="pageNum-top-right">66</div><br/>
         
         <div class="p">Saw <span class="persName-CHARLEMAGNE">Charlemagne</span>s easy chair.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_contextual#EASYCHAIRGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                70
                </span>
              </a></span> Arms stone, back stone<br/>
                    hard unaccommodating independent <span class="name--GRANITE">granite</span> Thin velvet<br/>
                    cushion however on the seat as a mediator Very ancient<br/>
                    affair, product of the dark ages I suppose. Sarcophagus<br/>
                    sculptured, Grecian, basso relievo.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_contextual#SARCOPHAGUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                71
                </span>
              </a></span> The revolutionists am‐<br/>
                    used themselves by depriving the poor stone gentlemen<br/>
                    of their olfactory nerves, alias noses, consequence they<br/>
                    look all terrible flats. <span class="del-strikethrough">Twili</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_textual#TWILIGHTGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                ii
                </span>
                
              </a></span> Night coming on. Left<br/>
                    the cathedral just in time to be tantalized by grinning<br/>
                    at a magnificent picture when it was pitch dark. Last judg‐<br/>
                    ment.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_textual#PAUSEPERIOD" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                jj
                </span>
                
              </a></span> <span class="gap" style="padding-left:4.8em"> </span> I think.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_textual#PAUSEPERIOD" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                kk
                </span>
                
              </a></span> in the <span class="placeName-HOTELDEVILLEAIX">hotel de ville</span>.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/aix_la_chapelle_prose_glosses_contextual#ITHINKGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                72
                </span>
              </a></span> Returnʼd to<br/>
                    the inn in very bad humour. Off early next morning for<br/>
            <span class="placeName-COLOGNE">Cologne</span>. Goodnight.<br/>
            </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>Mountain Sketch [drawing]</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         <h1 class="page-title"><span class="title-artwork-JRMOUNTAINMSVIII">Mountain Sketch</span></h1>
         Pen and ink, approx. ? × ? cm (image only). A slight sketch of a mountain scene. The peak in the foreground may be intended for a volcano.
                    
         
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>MS VIII [drawing]—Buildings on Water with Boats</span></div>
   <div class="figure">
      <div class="drawing" id="">
         
         
         <h1 class="page-title"><span class="title-artwork-JRBUILDINGSONWATERMSVIII">Sketch of Buildings on Water with Boats</span></h1>
         Pen and ink, approx. ? × ? cm (image only), placed immediately beneath the drawing, <span class="title-artwork-JRMOUNTAINMSVIII">Mountain Sketch</span>.
         
         <div class="p">The drawing is a slight sketch of buildings with steps leading directly to water, with boats moored near the steps. 
                        The location is unknown, but the calm water and heavy window awnings shading from the sun suggest <span class="placeName-ITALY">Italy</span>. 
                        The drawing was made over top of a previous drawing of mountain outlines, and also over top of marginal numbers 925, 930, and 935, intended for reception 
                        of ongoing verse composition, the last poem composed being <span class="title-poem-JRLAGOMAGGIORE">“It was an eve of summer mild” [“Lago Maggiore”]</span> 
                        ending on a line numbered 920 (65r). Between this poem and the two drawings, <span class="persName-JR">Ruskin</span> drafted the prose essay, 
                        <span class="title-essay-JRAIXLACHAPELLE">“Aix La Chapelle”</span> (65r–66r).</div>
         
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Smiling from those bright rays kiss” [“Heidelberg”] [poem, part 1]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="lg-stanza">
            <span class="l">Smiling <span class="del-strikethrough">with</span><div 
              class="add-below" 
              style="left:4.0em">from</div> those bright rays kiss<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_poem_glosses_textual#FROMBEHINDATHUNDERCLOUD" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                ll
                </span>
                
              </a></span></span><br/>
            <span class="l">Shoot<div 
          class="subst-del s-subst s-del" >g</div><div 
          class="s-subst s-add s-overwrite s-inline">i</div>ng round effulgence moony
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">940</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L425" id="L425">425</a></div></span><br/>
            <span class="l">Like a lovely Oasis</span><br/>
            <span class="l">Mid a desert dark and gloomy<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_poem_glosses_textual#FROMBEHINDATHUNDERCLOUD" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                mm
                </span>
                
              </a></span></span><br/>
            <span class="l">But a moment— darkly down</span><br/>
            <span class="l">Came the cloudy heavens frown</span><br/>
            <span class="l">Mong the leaves a fitful shaking.
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">945</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L430" id="L430">430</a></div></span><br/>
            <span class="l">Told the hoarse nightwind was waking</span><br/>
            <span class="l">Grey upon his mountain throne</span><br/>
            <span class="l"><span class="placeName-HEIDELBERG">Heidelberg</span> his ruins lone</span><br/>
            <span class="l">Reared colossally,</span><br/>
            <span class="l">All begirt with mighty trees
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">950</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L435" id="L435">435</a></div></span><br/>
            <span class="l"><span class="del-strikethrough">Bending to</span><div 
              class="add-above" 
              style="left:0.4em">Whistling</div> with the evens breeze</span><br/>
            <span class="l">Flapp<div 
          class="subst-del s-subst s-del" >g</div><div 
          class="s-subst s-add s-overwrite s-inline">i</div>ng faintly by.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_glosses_contextual#HEIDELBERGHISRUINS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                73
                </span>
              </a></span></span><br/>
            <span class="l">It was morning. from the height,</span><br/>
            <span class="l">Cumbered with its ruins <span class="del-strikethrough">o</span> hoar</span><br/>
            <span class="l">All the lovely valley bright
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">955</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L440" id="L440">440</a></div></span><br/>
            <span class="l">We were looking oer,</span><br/>
            <span class="l">With its silver river bending</span><br/>
            <span class="l">Vineyards to its banks descending<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_glosses_contextual#LOVELYVALLEY" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                74
                </span>
              </a></span> *</span><br/>
            <span class="l">Many a distant mountain chain</span><br/>
            <span class="l">Girded round the mighty plain.
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">960</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L445" id="L445">445</a></div></span><br/>
            <span class="l">Here the sky was clear and bright</span><br/>
            <span class="l">But upon their distant height</span><br/>
            <span class="l">Like a monster oer his prey</span><br/>
            <span class="l">Rain and tempest scowling lay</span><br/>
            <span class="l">Like a mighty ocean wave
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">965</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L450" id="L450">450</a></div></span><br/>
            <span class="l">All along the horizon sweeping</span><br/>
            <div id="MSVIII67r" class="pb"></div>
            <div class="pageNum-top-right">67</div><br/>
            <span class="l">Flinging far its cloudy spray</span><br/>
            <span class="l">Oer the peaceful heaven beating</span><br/>
            </div>
         <div class="half"></div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“The Rhine” [essay]</span></div>
   <div class="witness">
      <div class="essay" id="">
         
         <div class="p">The traditions of the <span class="geogName-RHINE">Rhine</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_rhine_glosses_contextual#THERHINETITLE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                75
                </span>
              </a></span> have long been celebrated, and I<br/> 
                    hope, long will be so, for the terror and amusement, if not the<br/>
                    benefit, of the rising generation. The two districts of the<br/>
            <span class="geogName-RHINE">Rhine</span>, and the <span class="geogName-HARZ">Hartz</span>,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_rhine_glosses_contextual#HARTZ" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                76
                </span>
              </a></span> have been selected, from time immem<br/>
                    orial, as fitting theatres for the gambols of brownies, fairies<br/> 
                    Gnomes and all other fashionable hobgoblins, of every shape,<br/>
                    sort, and size, and the consequence is, that a midnight<br/>
                    walk through the forests of the <span class="geogName-HARZ">Hartz</span>, or the vaulted cham<br/>
                    bers of <span class="placeName-RHEINFELS">Rheinfels</span>,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_rhine_glosses_contextual#RHEINFELS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                77
                </span>
              </a></span> would be considered, by many persons<br/>
                    possessʼd of considerable strength of nerve in the daytime &<br/>
                    in places not haunted, as a very disagreeable, if not pos<br/>
                    itively dangerous affair,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_rhine_prose_glosses_textual#TERMINALCOMMA" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                nn
                </span>
                
              </a></span> Marvel not therefore reader<br/> 
                    if I inform you, that I considered myself upon sus<br/>
                    picious, if not enchanted, or even haunted ground, as<br/>
                    soon as we came in sight of the crags of <span class="geogName-DRACHENFELS">Drachenfels</span>,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_rhine_glosses_contextual#DRACHENFELS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                78
                </span>
              </a></span><br/>
                    and that my thirst for ancient rhyme or story became<br/> 
                    considerably augmented, as we advanced farther into<br/> 
                    that wilderness of rock and fortress, which must be<br/>
                    traversed by the voyageur, who passes between <span class="placeName-EHRENBREITSTEIN">Ehrenbreit<br/>
                        stein</span>, and <span class="placeName-STGOAR">St Goar</span>.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_rhine_glosses_contextual#TRADITIONS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                79
                </span>
              </a></span> I could not hope for much tra<br/>
                    ditionary<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_rhine_prose_glosses_textual#TRADITIONARY" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                oo
                </span>
                
              </a></span> lore from most of the personages whom<span class="del-strikethrough">e</span> we en<br/>
                    countered <div 
          class="subst-del s-subst s-del" >i</div><div 
          class="s-subst s-add s-overwrite s-inline">o</div>n any of our perambulations, judging from<br/>
                    their countenances at least. I do not, at present,<br/> 
            <span class="del-strikethrough">exhibit</span> remember any phisiognomies, which exhibit so<br/> 
                    so much of, let me see, a combination of the stupidity<br/> 
                    lifelessness, and laziness of the owl, with the ugliness of the<br/> 
                    monkey, as do those of the generality of the <span class="placeName-GERMANY">German</span> pea<br/>
            <div id="MSVIII67v" class="pb"></div>
                    santry, and lower classes,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_rhine_glosses_contextual#GERMANPEASANTRY" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                80
                </span>
              </a></span> and I was therefore not partic<br/> 
                    ularly tempted to interrogate any of them, upon the sub<br/>
                    jects before alluded to, until at length Fortune threw an in<br/>
                    dividual in my way who appeared likely to be able to<br/> 
                    answer any inquiries which I might make, entirely to my<br/>
                    own satisfaction.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_rhine_glosses_contextual#FORTUNE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                81
                </span>
              </a></span></div>
         <div class="half"></div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Oh warmly down the sunbeams fell” [“Ehrenbreitstein”] [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="lg-stanza">
            <span class="l">Oh warmly down the sunbeams fell,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_poem_glosses_textual#EHRENBREITSTEINPENCILLINE1GLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                pp
                </span>
                
              </a></span></span><br/>
            <span class="l">Along the broad and fierce <span class="geogName-MOSELLE">Moselle</span>.
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L455" id="L455">455</a></div></span><br/>
            <span class="l">And on the <span class="del-strikethrough">city, and</span> distant mountain ridge, 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">975</a></div></span><br/>
            <span class="l">And on the city, and the bridge,</span><br/>
            <span class="l">So beautiful that stood,</span><br/>
            <span class="l">Tall tower and spire or gloomy fort,</span><br/>
            <span class="l">Were made, and shattered in the sport,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L460" id="L460">460</a></div></span><br/>
            <span class="l">Of that impetuous flood, 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">980</a></div></span><br/>
            <span class="l">That on the one side washed the wall,</span><br/>
            <span class="l">Of Gothic mansion fair and tall,</span><br/>
            <span class="l">And on the other side was seen,</span><br/>
            <span class="l">Checked by broad meadows rich and green,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L465" id="L465">465</a></div></span><br/>
            <span class="l">And scattering spray, that sparkling flew, 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">985</a></div></span><br/>
            <span class="l">And fed the grass with constant dew.</span><br/>
            <span class="l">With broader stream, and mightier wrath,</span><br/>
            <span class="l">The <span class="geogName-RHINE">Rhine</span> had chosen bolder path,</span><br/>
            <span class="l">All, yielding to his forceful will,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L470" id="L470">470</a></div></span><br/>
            <span class="l">Through <span class="name--BASALT">basalt</span> gorge, and rock ribbed hill, 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">990</a></div></span><br/>
            <span class="l">Still flashed his deep right on.</span><br/>
            <span class="l">It checked not at the battled pride</span><br/>
            <span class="l">Where <span class="geogName-EHRENBREITSTEIN">Ehrenbreitstein</span> walled his side,</span><br/>
            <span class="l">Stretching across with giant stride
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L475" id="L475">475</a></div></span><br/>
            <span class="l">The mighty waves the rock deride, 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">995</a></div></span><br/>
            <div id="MSVIII68r" class="pb"></div>
            <div class="pageNum-top-right">68</div><br/>
            <span class="l">And on the crag like armies ride,</span><br/>
            <span class="l">Flinging the white foam far and wide</span><br/>
            <span class="l">Upon the rough grey stone.</span><br/>
            <span class="l">Beneath the sweep of yon dark fell,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L480" id="L480">480</a></div></span><br/>
            <span class="l">Join the two brothers, the <span class="geogName-MOSELLE">Moselle</span>, 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1000</a></div></span><br/>
            <span class="l">Greeting the <span class="geogName-RHINE">Rhine</span> in friendly guise,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_glosses_contextual#EHRENBREITSTEINTWOBROTHERSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                82
                </span>
              </a></span></span><br/>
            <span class="l">To join his headlong current flies,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_glosses_contextual#EHRENBREITSTEINBROWGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                83
                </span>
              </a></span></span><br/>
            <span class="l">Together down the rivers go,</span><br/>
            <span class="l">Resistless oer their rocky foe,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L485" id="L485">485</a></div></span><br/>
            <span class="l">As lovers joining hand in hand 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1005</a></div></span><br/>
            <span class="l">Toward the west beside their strand,</span><br/>
            <span class="l">The<span class="add">y</span> <span class="del-strikethrough">rivers</span> pass <span class="del-strikethrough">full</span> <div 
              class="add-above" 
              style="left:6.4em">together</div> playfully,</span><br/>
            <span class="l">Like Allied armies mingled band,</span><br/>
            <span class="l">Toward the east white whirls of sand,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L490" id="L490">490</a></div></span><br/>
            <span class="l">The <span class="del-strikethrough">river</span><div 
              class="add-above" 
              style="left:2.0em">torrent</div> tosses by,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_glosses_contextual#EHRENBREITSTEINPLAYFULLYGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                84
                </span>
              </a></span> 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1010</a></div></span><br/>
            <span class="l">The morning came, and rosy light<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_poem_glosses_textual#EHRENBREITSTEINPENCILLINE2GLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                qq
                </span>
                
              </a></span></span><br/>
            <span class="l">Blushed oer the bastions and the height</span><br/>
            <span class="l">Where traitor never stood,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_glosses_contextual#EHRENBREITSTEINBASTIONSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                85
                </span>
              </a></span></span><br/>
            <span class="l"><span class="del-underline">And</span><div 
              class="add-above" 
              style="left:0.4em">While</div> far beneath in misty night
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L495" id="L495">495</a></div></span><br/>
            <span class="l">The waters wheeled their sullen flight, 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1015</a></div></span><br/>
            <span class="l">Till oer them far for many a rood,</span><br/>
            <span class="l">The red sun scattered tinge of blood,</span><br/>
            <span class="l"><span class="del-strikethrough">Till</span> ‸ <div 
              class="add-above" 
              style="left:2.0em">Then</div> broadening into brighter day</span><br/>
            <span class="l">On the rich plain the lustre lay
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L500" id="L500">500</a></div></span><br/>
            <span class="l">And distant spire and village white 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1020</a></div></span><br/>
            <span class="l">Confessed the kiss of dawn</span><br/>
            <span class="l">Still multiplying on the sight<div 
              class="add-above" 
              style="left:2.4em">Amid the forests shining bright</div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_poem_glosses_textual#EHRENBREITSTEINAMIDGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                rr
                </span>
                
              </a></span></span><br/>
            <span class="l">As sunnier grew the morn,</span><br/>
            <span class="l">We climbed the crag, we scaled the ridge,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L505" id="L505">505</a></div></span><br/>
            <span class="l">On <span class="placeName-COBLENTZ">Coblentz</span> looked adown, 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1025</a></div></span><br/>
            <div id="MSVIII68v" class="pb"></div>
            <span class="l">The tall red roofs the long white bridge,</span><br/>
            <span class="l">And on the eyelike frown</span><br/>
            <span class="l">Of the portals of her palaces,</span><br/>
            <span class="l">And on her peoples busy press,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L510" id="L510">510</a></div></span><br/>
            <span class="l">There never was a fair<div 
          class="subst-del s-subst s-del" >y</div><div 
          class="s-subst s-add s-overwrite s-inline">er</div> town 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1030</a></div></span><br/>
            <span class="l">Between two rivers as it lay</span><br/>
            <span class="l">Whence morning mist was curling grey,</span><br/>
            <span class="l">On the plains edge, beside the hill</span><br/>
            <span class="l">Oh it was lying calm and still
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L515" id="L515">515</a></div></span><br/>
            <span class="l">In mornings chastened glow, 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1035</a></div></span><br/>
            <span class="l">The multitudes were thronging by,</span><br/>
            <span class="l">But we were dizzily on high,</span><br/>
            <span class="l">And we might not one murmur hear</span><br/>
            <span class="l">Nor whisper tingling on the ear
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L520" id="L520">520</a></div></span><br/>
            <span class="l">From the far depth below. 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1040</a></div></span><br/>
            <span class="l">The bridge of boats, the bridge of boats,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_poem_glosses_textual#EHRENBREITSTEINPENCILLINE3GLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                ss
                </span>
                
              </a></span></span><br/>
            <span class="l">Across the hot tide how it floats,</span><br/>
            <span class="l">In one dark bending line,</span><br/>
            <span class="l">For other bridge were swept away
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L525" id="L525">525</a></div></span><br/>
            <span class="l">Such shackle loveth not the play 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1045</a></div></span><br/>
            <span class="l">Of the impetuous <span class="geogName-RHINE">Rhine</span>,</span><br/>
            <span class="l">The feeble bridge, that bends below,</span><br/>
            <span class="l">The tread of one weak man,</span><br/>
            <span class="l">It yet can stem the forceful flow,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L530" id="L530">530</a></div></span><br/>
            <span class="l">Which nought unyielding can, 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1050</a></div></span><br/>
            <span class="l">The bar of shingle stems the sea</span><br/>
            <span class="l">The <span class="name--GRANITE">granite</span> cliffs are worn away</span><br/>
            <span class="l">The bending reed can bear the blast,</span><br/>
            <span class="l">When English oak were downward cast,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L535" id="L535">535</a></div></span><br/>
            <span class="l">The bridge of boats the <span class="geogName-RHINE">Rhine</span> can chain, 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1055</a></div></span><br/>
            <div id="MSVIII69r" class="pb"></div>
            <div class="pageNum-top-right">69</div><br/>
            <span class="l">Where strength of stone were all in vain,</span><br/>
            <span class="l">Oh fast and faster on the stream,</span><br/>
            <span class="l">An island driveth down.</span><br/>
            <span class="l">The Schwartzwald pine hath shed its green
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L540" id="L540">540</a></div></span><br/>
            <span class="l">But not at autumns frown. 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1060</a></div></span><br/>
            <span class="l">A sharper winter stripped them there,</span><br/>
            <span class="l">The tall straight trunks are bald and bare,</span><br/>
            <span class="l">The peasant on some <span class="geogName-ALPS">Alpine</span> brow,</span><br/>
            <span class="l">Hath cut the root and lopped the bough,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L545" id="L545">545</a></div></span><br/>
            <span class="l">The eagle heard the echoing fall 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1065</a></div></span><br/>
            <span class="l">And soared away to his high eyrie,</span><br/>
            <span class="l">The chamois gave his warning call</span><br/>
            <span class="l">And higher on the mountain tall</span><br/>
            <span class="l">Pursued his way unweary,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L550" id="L550">550</a></div></span><br/>
            <span class="l">They come they come the long pine floats 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1070</a></div></span><br/>
            <span class="l">Unchain the bridge, and<div 
              class="add-above" 
              style="left:8.0em">throw</div> loose the boats,</span><br/>
            <span class="l">Lest by the raft so rudely driven,</span><br/>
            <span class="l">The iron bolts be burst and riven,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_glosses_contextual#EHRENBREITSTEINRAFTGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                86
                </span>
              </a></span></span><br/>
            <span class="l">They come, they come, careering fast,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L555" id="L555">555</a></div></span><br/>
            <span class="l">The bridge is gained, the bridge is past, 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1075</a></div></span><br/>
            <span class="l">Before the flashing foam they flee,</span><br/>
            <span class="l">Toward the ocean rapidly</span><br/>
            <span class="l">There firmly bound by builders care,</span><br/>
            <span class="l">The rage of wave and wind to dare,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L560" id="L560">560</a></div></span><br/>
            <span class="l">Or burst of battle shock to bear 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1080</a></div></span><br/>
            <span class="l">Upon the boundless sea.</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Continuation Heidelberg” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="title" id="@"><span class="space" style="padding-left:6.4em"> </span>Continuation Heidelberg</div>
         
         <div class="lg-stanza">
            <span class="delSpan--delend01"></span>
            <span class="l">But climbed the cloud yet more and more</span><br/>
            <span class="l">Into the heaven dancing</span><br/>
            <span class="l">Till, like the scouring bands, before
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1085</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L565" id="L565">565</a></div></span><br/><span id="delend01"></span>
            <div id="MSVIII69v" class="pb"></div>
            <span class="delSpan--delend02"></span>
            <span class="l">Embattled armies path advancing</span><br/>
            <span class="l">Circling the sun with mazy ring</span><br/>
            <span class="l">They wildly on came scattering,</span><br/>
            <span class="l">Then darker, deeper, heavier grew,:</span><br/>
            <span class="l">Till fitful light the red sun throw
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1090</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L570" id="L570">570</a></div></span><br/><span id="delend02"></span>
            <span class="addSpan--"></span><span class="l">Then gathering <span class="runover" style="left:1.6em">round the reddening sun,</span></span><br/><span class="l">Throwing darkness drear <span class="runover" style="left:1.2em">and dun</span></span><br/><span id="addend01"></span>
            <span class="l">On the gaunt ruins ghostly wall</span><br/>
            <span class="l"><span class="del-strikethrough">And coursing oer the sloping meadow</span></span><br/>
            <span class="l"><span class="del-strikethrough">Strong was the light, and deep the shadow,</span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L575" id="L575">575</a></div></span><br/>
            <span class="l">Till rustling through the pinetrees tall,</span><br/>
            <span class="l">Came quick the sound of raindrop fall,
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1095</a></div></span><br/>
            <span class="l">Increasing fast the leafy rattle,</span><br/>
            <span class="l"><span class="del-strikethrough">And distant growls of</span><div 
              class="add-above" 
              style="left:1.2em">Warned us of the</div> tempest battle<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_poem_glosses_textual#TEMPESTBATTLE" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                tt
                </span>
                
              </a></span></span><br/>
            <span class="l">Enter then the chambers cold,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L580" id="L580">580</a></div></span><br/>
            <span class="l">Cold and lifeless, bald and bare,</span><br/>
            <span class="l">Though with banners decked of old,
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1100</a></div></span><br/>
            <span class="l">Ivy <span class="unclear-smeared-"></span> tendrils flickering flare,</span><br/>
            <span class="l">Are the only banners there,</span><br/>
            <span class="l">You would start, to hear your tread,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L585" id="L585">585</a></div></span><br/>
            <span class="l">Given back by echoes dead,</span><br/>
            <span class="l">You would look around to see,
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1105</a></div></span><br/>
            <span class="l">If a sprite was watching thee</span><br/>
            <span class="l">Yet a vision would come oer thee</span><br/>
            <span class="l">Of the scenes, had past before thee,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L590" id="L590">590</a></div></span><br/>
            <span class="l">Of the time, when many a guest,</span><br/>
            <span class="l">Blessed the baron for his feast
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1110</a></div></span><br/>
            <span class="l">When the peasant homeward stealing,</span><br/>
            <span class="l">Dusky night the hills concealing.</span><br/>
            <span class="l">Heard the swell of wassail wild,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L595" id="L595">595</a></div></span><br/>
            <span class="l">Cadence from the castle coming,</span><br/>
            <span class="l">Mingling with the night breeze humming</span><br/>
            <div id="MSVIII70r" class="pb"></div>
            <div class="pageNum-top-right">70</div><br/>
            <span class="l">And, until<span class="del-strikethrough">l</span> the morning mild</span><br/>
            <span class="l">Woke that mass of wall and tower,</span><br/>
            <span class="l">Beacon light from hour to hour,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L600" id="L600">600</a></div></span><br/>
            <span class="l">Breaking from the windows tall</span><br/>
            <span class="l">Of the barons ancient hall
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1120</a></div></span><br/>
            <span class="l">Where the shout around was ringing</span><br/>
            <span class="l">And the troubadour was singing</span><br/>
            <span class="l">Ancient air, and ancient rhyme,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L605" id="L605">605</a></div></span><br/>
            <span class="l">Legend of the ancient time,</span><br/>
            <span class="l">Of some knights blood nobly spilt,
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1125</a></div></span><br/>
            <span class="l">In the melee, or the tilt;</span><br/>
            <span class="l">Or the deeds of some brave band</span><br/>
            <span class="l">Oath bound in the holy land,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L610" id="L610">610</a></div></span><br/>
            <span class="l">Such as iron <span class="persName-KR1">Richard</span> led,</span><br/>
            <span class="l">Steeled without, and steeled within
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1130</a></div></span><br/>
            <span class="l">True in hand and heart and head,</span><br/>
            <span class="l">Worthy foe of <span class="persName-SALADIN">Saladin</span>.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_glosses_contextual#RICHARDSALADIN" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                87
                </span>
              </a></span></span><br/>
            <span class="l">Or, it might please a darker theme,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L615" id="L615">615</a></div></span><br/>
            <span class="l">Of spectres huge in twilight seen,</span><br/>
            <span class="l">Above some battlefield,
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1135</a></div></span><br/>
            <span class="l">And mimicking, with motion dread</span><br/>
            <span class="l">Past combat of those lying dead</span><br/>
            <span class="l">Beneath their cloudy pinions spread.
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L620" id="L620">620</a></div></span><br/>
            <span class="l">Crested helm and spear and shield,</span><br/>
            <span class="l">In the red cloud blazoned,
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1140</a></div></span><br/>
            <span class="l">Thus with <span class="del-strikethrough"><span class="unclear-DCH">wo</span></span> feast and revelry</span><br/>
            <span class="l">Oft the huge halls rang with glee,</span><br/>
            <span class="l">And reckless of the withering woe,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L625" id="L625">625</a></div></span><br/>
            <span class="l">Reigned in their dungeons damp below,</span><br/>
            <span class="l">Where in the lone hours sullen flight
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1145</a></div></span><br/>
            <div id="MSVIII70v" class="pb"></div>
            <span class="l">The masked day mingled with the night</span><br/>
            <span class="l">Until the <span class="del-strikethrough">prison</span> captives practised eye</span><br/>
            <span class="l">Could pierce the dense obscurity,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L630" id="L630">630</a></div></span><br/>
            <span class="l">Could see the fetters glance, or tell,</span><br/>
            <span class="l">The stones which formed his narrow cell,
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1150</a></div></span><br/>
            <span class="l"><div 
          class="s-subst s-add s-inline">Till</div><div 
          class="subst-del s-subst s-del" >Unt</div> <div 
          class="s-subst s-add s-inline">a</div><div 
          class="subst-del s-subst s-del" >A</div>t the time the warder came</span><br/>
            <span class="l">His dusky lamps half smothered flame,</span><br/>
            <span class="l">Flashed on him like that sun, whose ray
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L635" id="L635">635</a></div></span><br/>
            <span class="l">And all the smile of lightsome day,</span><br/>
            <span class="l">He has almost forgotten.</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Schaffhausen” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         <div id="MSVIII70v" class="pb"></div>
         
         <div class="title" id="@"><span class="space" style="padding-left:6.4em"> </span><span class="placeName-">Schaffhausen</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/there_is_a_charmed_peace_that_aye_poem_glosses_textual#SCHAFFHAUSENTITLEGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                uu
                </span>
                
              </a></span></div>
         <div class="quarter"></div>
         
         <div class="lg-stanza">
            <span class="l">The eve was darkening, as we climbed,</span><br/>
            <span class="l">The summit of the hill,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/there_is_a_charmed_peace_that_aye_poem_glosses_contextual#THEALPSTHEALPSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                88
                </span>
              </a></span></span><br/>
            <span class="l">And cradled mid the mountain pine,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L640" id="L640">640</a></div></span><br/>
            <span class="l">The <span class="del-strikethrough">breeze</span> <div 
              class="add-above" 
              style="left:2.4em">wind</div> was lying still 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1151</a></div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/schaffhausen_poem_glosses_textual#LINENUMBERINGGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                vv
                </span>
                
              </a></span></span><br/>
            <span class="l">Beneath the forests shadowy,</span><br/>
            <span class="l">Long time our path wound on,</span><br/>
            <span class="l">One narrow strip of starry sky,</span><br/>
            <span class="l">Between the dark firs shone, 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1155</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L645" id="L645">645</a></div></span><br/>
            <span class="l">The drowsy gnats had ceased their song 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)"><span class="del-strikethrough">11</span></a></div><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/schaffhausen_poem_glosses_textual#DELETEDNUMBERGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                ww
                </span>
                
              </a></span></span><br/>
            <span class="l">The birds upon the bough were sleeping,</span><br/>
            <span class="l">And stealthily across our path,</span><br/>
            <span class="l">The leveret<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/schaffhausen_poem_glosses_textual#LEVERETGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                xx
                </span>
                
              </a></span> was leaping,</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“The lake smiled sweetly and the boy” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         <div id="MSVIII70v" class="pb"></div>
         
         <div class="lg-stanza">
            <span class="l">The lake smiled sweetly, and the boy,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_lake_smiled_sweetlly_and_the_boy_poem_glosses_textual#STATUSGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                yy
                </span>
                
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L650" id="L650">650</a></div></span><br/>
            <span class="l">Who lay upon its border sleeping,</span><br/>
            <span class="l">Dreamed that he plunged beneath with joy,</span><br/>
            <span class="l">And heard a sound like billows beating</span><br/>
            <span class="l">Or like the angels hymns that rise,</span><br/>
            <span class="l">From the high thrones of <span class="placeName-scriptural-HEAVEN">Paradise</span>,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L655" id="L655">655</a></div></span><br/>
            <div id="MSVIII71r" class="pb"></div>
            <div class="pageNum-top-right">71</div><br/>
            <span class="l">And, as he woke him from his sleep,</span><br/>
            <span class="l">(The vision floats before him)</span><br/>
            <span class="l">High oer his head the waters leap</span><br/>
            <span class="l">And voices murmured from the deep.</span><br/>
            <span class="l">“I snatch the sleeper into sleep)<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_lake_smiled_sweetlly_and_the_boy_poem_glosses_textual#PARENGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                zz
                </span>
                
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L660" id="L660">660</a></div></span><br/>
            <span class="l">And whirl my white waves oer him.</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Not such the night whose stormy might” [“Evening at Chamouni”] [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">          
         
         <div class="lg-stanza">
            <span class="l">Not such the night whose stormy might, 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1160</a></div></span><br/>
            <span class="l">Heroic <span class="persName-JBM">Balma</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/not_such_the_night_whose_stormy_might_poem_glosses_contextual#BALMATGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                89
                </span>
              </a></span> braved,</span><br/>
            <span class="l">When darkening on the Goutes height,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/not_such_the_night_whose_stormy_might_poem_glosses_contextual#GOUTERGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                90
                </span>
              </a></span></span><br/>
            <span class="l">The tempest howled and raved.
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L665" id="L665">665</a></div></span><br/>
            <span class="l">Upon the mighty hill forlorn</span><br/>
            <span class="l">He stood alone amid the storm, 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1165</a></div></span><br/>
            <span class="l">Watching the last day gleams decay</span><br/>
            <span class="l">Supposing its returning ray,</span><br/>
            <span class="l">Should see him lying there asleep
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L670" id="L670">670</a></div></span><br/>
            <span class="l">With <span class="geogName-ALPS">Alpine</span> snow for winding sheet.</span><br/>
            <span class="l">Methinks I see him, as he stood 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1170</a></div></span><br/>
            <span class="l">Upon the ridge of snow,</span><br/>
            <span class="l">The battering burst of winds above</span><br/>
            <span class="l">The cloudy precipice below
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L675" id="L675">675</a></div></span><br/>
            <span class="l">Watching the dawn.  With proud delight</span><br/>
            <span class="l">He saw that long <span class="del-strikethrough">and</span> tempest<div 
              class="add-above" 
              style="left:11.6em">uous</div> night, 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1175</a></div></span><br/>
            <span class="l">Drive to the westward, and unfold,</span><br/>
            <span class="l">The ocean snowfields upwards rolled,</span><br/>
            <span class="l">Bright with the mornings glance of gold,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L680" id="L680">680</a></div></span><br/>
            <span class="l">It past away, the <span class="del-strikethrough">headlon</span> tossing flood</span><br/>
            <span class="l">Of changing vapour headlong riding 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1180</a></div></span><br/>
            <span class="l">And lo, the untrodden summit stood,</span><br/>
            <span class="l">Accessibly beside him,</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“It is said that French will carry you over all Europe” [“Ehrenbreitstein”] [essay]</span></div>
   <div class="witness">
      <div class="essay" id="">
         <div id="MSVIII71v" class="pb"></div>
         
         <div class="p">It is said that French will carry you over all <span class="geogName-EUROPE">Europe</span>,
                    <br/>over all civilised <span class="geogName-EUROPE">Europe</span>at least, and that may be,
                    <br/>but it will not carry you over <span class="placeName-GERMANY">Germany</span>
            <br/>You might manage with the Grand Turk, but
                    <br/>you will not manage with the Germans<span class="g-terminal_comma">,</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_prose_glosses_textual#TERMINALCOMMA" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                aaa
                </span>
                
              </a></span> Wishing
                    <br/>to see the interior of <span class="placeName-EHRENBREITSTEINFORT">Ehrenbreitstein</span>, we got a
                    <br/>young German guide, and coming to a place
                    <br/>where two roads met considered him to be going
                    <br/>the wrong way. Here was a poser, how could we
                    <br/>stop him. Nein, Nein, we called after him. Ya, quoth
                    <br/>he. Nein. So he went the way we chose. After
                    <br/>a<span class="del-scratchout">f</span> very hard pull, up an abominably cramp<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_glosses_contextual#EHRENBREITSTEINCRAMPGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                91
                </span>
              </a></span> hill
                    <br/>we behold the top of the flagstaff. Here we are, all
                    <br/>right. There was the fortress certainly, but between
                    <br/>us and it a ravine nearly a hundred feet deep walled
                    <br/>up the sides so as to form a very unhandsome ditch,
                    <br/>and two or three dozen impudent, enormous, open
                    <br/>mouthed guns grinning at us from the battlements.
                    <br/>Well, <span class="del-strikethrough">what</span> there was nothing for it, so we went back
                    <br/>and took the other path.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_glosses_contextual#EHRENBREITSTEINPATHGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                92
                </span>
              </a></span> This time all was right and
                    <br/>we got into the fortress, first however prudently
                    <br/>stepping up to asentinel<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_prose_glosses_textual#ASENTINELGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                bbb
                </span>
                
              </a></span> to ask permission, and he
                    <br/>brought an officer upon us. Do you speak English
                    <br/>Sir. A stare. Francais. A vibratory motion of the
                    <br/>head, and A Nein. Deutsch? Ya. and there we stuck.
                    <br/>Well, we pulled out our passport, but it was in
                    <br/>French and the officer couldnt read it So he looks
                    <br/>up, and down, and at <span class="del-strikethrough">him</span> us, and we looked up,
                    <br/>and down and at him What was to be done.
                    <br/>We bowed, and he bowed, and we looked over the
                    <br/>battlements, <span class="del-strikethrough">with</span> and we trotted down again, having
                    <div id="MSVIII72r" class="pb"></div>
            <div class="pageNum-top-right">72</div><br/>
            <br/>a very high idea of the height of German hills, the
                    <br/>strength of German walls, the size of German cannon,
                    <br/>and the stupidity of all German brains.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/ehrenbreitstein_glosses_contextual#EHRENBREITSTEINGERMANBRAINS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                93
                </span>
              </a></span></div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Most beautiful are the paths” [“Heidelberg”] [essay, part 1]</span></div>
   <div class="witness">
      <div class="essay" id="">
         
         <div class="p">Most beautiful are the paths which scale the face of the<br/>
                    hill which is crowned by the <span class="placeName-building-HEIDELBERGCASTLE">castle of Heidelberg</span>,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_glosses_contextual#BEAUTIFULPATHS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                94
                </span>
              </a></span> <span class="del-strikethrough">fairylike</span>,<br/>
                            winding beneath the twisted branches of green woods, with<br/>
                            here and there a grey crag lifting up its lichened head<br/>
                    from the wilderness of brake<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_glosses_contextual#BRAKE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                95
                </span>
              </a></span> and grass and flowr, that con‐<br/>
                    cealed the mass of that ancient <span class="name--GRANITE">granite</span>, sometimes<br/>
                            supporting a fragment of the remains of the old walls,<br/>
                            with here and there an arrowslit choked up with ivy,<br/>
                            then emerging on narrow vallies, or steep and rocky dells,<br/> 
                            or lovely sweeps of dewy green sward, fresh and flowery,<br/>
                            as ever fairies circled on, and ending on a lofty terrace,<br/>
                            whose precipice base was begirt with meadow land,<br/>
                            at the point where a narrow mountain gorge opened<br/>
                            into the mighty plains of the <span class="geogName-RHINE">Rhine</span>, having in its<br/>
                    embouchure<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_glosses_contextual#EMBOUCHURE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                96
                </span>
              </a></span> the little town of <span class="placeName-HEIDELBERG">Heidelberg</span> with its river<br/>
                            and its tall arched bridge, all glistening under that<br/>
                            most lovely of all lights, the first glow of sunshine,<br/> 
                            after a spring shower. <span class="del-scratchout"><span class="unclear-DCH"></span></span> 18<br/>
            
            </div>         
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“The foam globes round come riding fast” [“The Source of the Arveron”] [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="lg-stanza">
            <span class="l">The foam globes round come riding fast<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_foam_globes_round_come_riding_fast_poem_glosses_contextual#FOAMGLOBES" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                97
                </span>
              </a></span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L685" id="L685">685</a></div></span><br/>
            <span class="l">Like snow upon the eddies cast</span><br/>
            <span class="l">Forth from his cold & silent tomb</span><br/>
            <span class="l">Forth flies the river from the gloom<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_foam_globes_round_come_riding_fast_poem_glosses_contextual#RIVERFROMTHEGLOOM" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                98
                </span>
              </a></span></span><br/>
            <span class="l">The bars that echoed to his roaring</span><br/>
            <span class="l">Those icy bars have burst before him
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L690" id="L690">690</a></div></span><br/>
            <span class="l">And now his chafed surges see</span><br/>
            <span class="l">Bound high in laughing liberty</span><br/>
            <span class="l">Oh frigidly the glacier pale</span><br/>
            <span class="l">Bears broadly to the nether vale</span><br/>
            <div id="MSVIII78r" class="pb"></div>
            <div class="pageNum-top-right">78</div><br/>
            <span class="l">Right in his cliffy shivered side
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L695" id="L695">695</a></div></span><br/>
            <span class="l">Yawneth a chasm high & wide</span><br/>
            <span class="l">And from the portal arched & strong</span><br/>
            <span class="l"><span class="del-strikethrough"><span class="unclear-DCH">Leap</span></span> Springs gladsome forth the <span class="geogName-ARVERON">Arveron</span></span><br/>
            <span class="l">Seems it an ancient forteresse<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_foam_globes_round_come_riding_fast_poem_glosses_textual#FORTERESSE" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                ccc
                </span>
                
              </a></span></span><br/>
            <span class="l">All shattered in its mightiness
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L700" id="L700">700</a></div></span><br/>
            <span class="l">The higher towers all rent & riven</span><br/>
            <span class="l">The battlements all downward driven<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_foam_globes_round_come_riding_fast_poem_glosses_textual#BATTLEMENTSALL" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                ddd
                </span>
                
              </a></span></span><br/>
            <span class="l">And that its form thou now couldst trace</span><br/>
            <span class="l">Froze to an icy wilderness.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/the_foam_globes_round_come_riding_fast_poem_glosses_textual#ANICYWILDERNESS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                eee
                </span>
                
              </a></span></span><br/>
            <span class="l">And that its portal vast & old
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L705" id="L705">705</a></div></span><br/>
            <span class="l">All arched by the crisp ice cold.</span><br/>
            <span class="l">And through whose chasms of paly green</span><br/>
            <span class="l">The shivery sunshine shot between</span><br/>
            <span class="l">Or trembling with a meteor light</span><br/>
            <span class="l">Or dancing in the billows bright
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L710" id="L710">710</a></div></span><br/>
            <span class="l">Smiling aetherially through</span><br/>
            <span class="l">The ghostlights of the crystal blue.</span><br/>
            
            
            </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>"Cont. Heidelberg" [essay, part 2]</span></div>
   <div class="witness">
      <div class="essay" id="">
         
         <div class="title" id="@"><span class="space" style="padding-left:6.4em"> </span>Cont. Heidelberg</div>
         
         <div class="p">The <span class="placeName-building-HEIDELBERGCASTLE">castle of Heidelberg</span> is exceeding desolate.  Armies<br/>
                    have razed its foundations, the thunder hath riven its<br/>
                            towers and there is no sound in its courts, and the<br/>
                    wind is still in the open galleries.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_glosses_contextual#DESOLATE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                99
                </span>
              </a></span> The grass is very green<br/>
                            on the floor of the hall of the banquet, and the wild<br/>
                            birds build their nests in the watchtowers, and they<br/>
                            dwell in the dwellings of man, for they are forsaken<br/> 
                            and left and there is no voice there — there is no<br/>
                            complaining in the dungeon, and where is the voice of<br/> 
                            gladness in the hall.  It is a ruin, a ruin, a<br/>
                            desolate ruin, the husbandman sees it on the height of<br/>
            <div id="MSVIII78v" class="pb"></div>
                            the hill, as he looks up from the green valley and remem<br/>
                            bers the power of his ancient princes, and knows not<br/>
                            if he should grieve that there power is past away.<br/>
            I know not how it is, but all nations in all ages<br/>
                            seem to have respected the juice of the fruit of the vine<br/></div>            
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“So broadly stretched in sapphire sheet” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         
         <div class="lg-stanza">
            <span class="l">So broadly stretched in sapphire sheet<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/it_was_an_eve_of_summer_mild_poem_glosses_textual#SOBROADLYSTRETCHED" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                fff
                </span>
                
              </a></span></span><br/>
            <span class="l">Another heaven neath our feet
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1370</a></div></span><br/>
            <span class="l">Of deeper, darker lovelier blue
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L715" id="L715">715</a></div></span><br/>
            <span class="l">It seemed that we were sailing through</span><br/>
            <span class="l">Those aether fields, so pure, so high</span><br/>
            <span class="l">Above the concave of the sky
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">40</a></div></span><br/>
            <span class="l">Where nor storm nor tempest cometh nigh
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1375</a></div></span><br/>
            <span class="l">And the moon she sits in her majesty
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L720" id="L720">720</a></div></span><br/>          
            </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“All has yielded to it from time immemorial” ["Heidelberg," essay, part 3]</span></div>
   <div class="witness">
      <div class="essay" id="">
         <div id="MSVIII78v" class="pb"></div>
         
         <div class="p">All has yielded to it from time immemorial,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_prose_glosses_textual#TERMINALCOMMA" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                ggg
                </span>
                
              </a></span> When Marshal<br/>
            <span class="persName-TURENNE">Turenne</span> attacked the castle in question,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_glosses_contextual#TURENNE" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                100
                </span>
              </a></span> it was but a touch and go<br/>
                    The foundations <span class="del-strikethrough">being</span> <div 
              class="add-above" 
              style="left:7.6em">were</div> were blown up, the battlements <span class="del-strikethrough">were</span> knocked<br/>
                    down, the towers snapt like so many sticks of barley sugar,<br/>
                    the statues decapitated, the carving crashed, the ditches filled,<br/>
                    the castle ruined.  but the cellars— Walk into them sir,<br/>
                    walk into them.  there is not a rat dispossessed or in any manner<br/>
                    disturbed,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_prose_glosses_textual#TERMINALCOMMA" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                hhh
                </span>
                
              </a></span> Why they seem to have stopped <span class="del-strikethrough">firing</span> puffing off powder<br/>
                    here as if they were afraid of shaking up the lees of the good old respectable<br/>
                    wines,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_prose_glosses_textual#TERMINALCOMMA" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                iii
                </span>
                
              </a></span> Even the timbers of the <span class="del-strikethrough"><span class="unclear-DCH"></span>ca</span> <div 
              class="add-above" 
              style="left:12.0em">newfangled</div><div 
              class="add-below" 
              style="left:12.0em">‸</div> fashionable cask, (which, following<br/>
                    the example of the ladies now adays has gone without hoops) are<br/>
                    not a whit disturbed, but sit there in peaceful placidity, clasping<br/>
                    each other in brotherly affection: but dry very dry unconscionably dry<br/>
                    And the celebrated butt sounds mournfully hollow,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_glosses_contextual#CELEBRATEDBUTT" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                101
                </span>
              </a></span> no <span class="del-strikethrough"><span class="unclear-DCH">spl</span></span> rich<br/>
                    splash from the enclosed vinum,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/heidelberg_glosses_contextual#VINUM" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                102
                </span>
              </a></span> no ruby red <span class="del-strikethrough">fo</span> tinging the joints<br/>
            <div id="MSVIII79r" class="pb"></div>
            <div class="pageNum-top-right">79</div><br/>
            of the timbers. Oh <span class="placeName-fictional-BACCHUS">Bacchus</span>, <span class="placeName-fictional-BACCHUS">Bacchus</span>, come not into the cellars<br/>
                    of <span class="placeName-HEIDELBERG">Heidelberg</span>, lest thou shouldst die of thirst<br/></div>           
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Genoa” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         <div id="MSVIII77r" class="pb"></div>
         
         <div class="title" id="@"><span class="space" style="padding-left:6.4em"> </span><span class="placeName-GENOA">Genoa</span></div>
         
         <div class="lg-stanza">
            <span class="l">Now rouse thee ho. For <span class="placeName-GENOA">Genoa</span> straight</span><br/>
            <span class="l">We did not for the dawning wait</span><br/>
            <span class="l">The stars shone pale on <span class="placeName-NOVI">Novi</span>s Gate,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/genoa_poem_glosses_contextual#NOVISGATEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                103
                </span>
              </a></span></span><br/>
            <span class="l">And on the airy <span class="geogName-APENNINES">Apennine</span> 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1380</a></div></span><br/>
            <span class="l">Whose towery steeps, with morn elate,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L725" id="L725">725</a></div></span><br/>
            <span class="l">Lay southward in a lengthened line</span><br/>
            <span class="l">And we knew, and we knew, and we knew</span><br/>
            <span class="l">That from <span class="geogName-ELBA">Elba</span> to the <span class="geogName-Alps">Alps</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/genoa_poem_glosses_contextual#ELBAGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                104
                </span>
              </a></span> oer the seas broad blue<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/genoa_poem_glosses_textual#SEASBROADBLUEGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                jjj
                </span>
                
              </a></span></span><br/>
            <span class="l">Where the wild waves wander, and white ripples shine 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1385</a></div></span><br/>
            <span class="l">Looked the cloudy crest of the tall <span class="geogName-APENNINES">Apennine</span><div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L730" id="L730">730</a></div></span><br/>
            <span class="l">From the Torrents barren bed,</span><br/>
            <span class="l">Bound by blocks of <span class="name--GRANITE">granite</span> red,</span><br/>
            <span class="l">Came the gay Cicadas song</span><br/>
            <span class="l">Wheresoeer the dew was dank, 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1390</a></div></span><br/>
            <span class="l">On the tree, the shrub the bank,
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L735" id="L735">735</a></div></span><br/>
            <span class="l">All our scorching road along</span><br/>
            <span class="l">Came the gay Cicadas song,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/genoa_poem_glosses_contextual#CICADAGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                105
                </span>
              </a></span></span><br/>
            <span class="l">While beside our path was seen</span><br/>
            <span class="l">Of various trees a vista green, <span class="metamark-insertion">&c.</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/genoa_poem_glosses_textual#OFVARIOUSTREESGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                kkk
                </span>
                
              </a></span> 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1395</a></div></span><br/>
            <span class="l">Into a streamlet looking down 
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L740" id="L740">740</a></div></span><br/>
            <span class="l">Whose living crystal shot between <span class="metamark-insertion">&.</span> 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">50</a></div></span><br/>
            <span class="l"><span class="del-strikethrough">A <div 
              class="add-above" 
              style="left:NaNem"></div> little space of time</span></span><br/>
            <span class="l"><span class="del-strikethrough">And think how wide the world must be</span></span><br/>
            <span class="l"><span class="del-strikethrough">Across from pole to pole</span></span><br/>
            <span class="l"><span class="del-strikethrough">When ‸<div 
              class="add-above" 
              style="left:2.4em">all</div> that there you look upon</span> 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">× 80</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L745" id="L745">745</a></div></span><br/>
            <span class="l"><div 
              class="add-above" 
              style="left:-1.2em">Oh</div><span class="del-strikethrough">And</span> is there one remembers not</span><br/>
            <span class="l">When first he saw the living deep,</span><br/>
            <div id="MSVIII79v" class="pb"></div>
            <span class="l">With panting bosom, crimson shot,</span><br/>
            <span class="l">Call its soothed billows from their sleep,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/genoa_poem_glosses_textual#SOOTHEDGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                lll
                </span>
                
              </a></span></span><br/>
            <span class="l">That shout<span class="space" style="padding-left:1.2em"> </span>The mo<div 
          class="s-subst s-add s-overwrite s-inline">r</div><div 
          class="subst-del s-subst s-del" >a</div>n, from steep to steep. 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1400</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L750" id="L750">750</a></div></span><br/>
            <span class="l">When far away to seaward show<span class="g-pause-period">.</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/genoa_poem_glosses_textual#PAUSEPERIOD" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                mmm
                </span>
                
              </a></span></span><br/>
            <span class="l">Her first beams solitary glow.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/genoa_poem_glosses_textual#SOLITARYGLOWGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                nnn
                </span>
                
              </a></span></span><br/>
            <span class="l"><div 
          class="s-subst s-add s-overwrite s-inline">W</div><div 
          class="subst-del s-subst s-del" >T</div>hoeʼr thou art, who hast not felt</span><br/>
            <span class="l">Thou lovedst to be where seabirds dwelt</span><br/>
            <span class="l">To wander on the weary beach 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1405</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L755" id="L755">755</a></div></span><br/>
            <span class="l">Just on the line the wild waves reach,</span><br/>
            <span class="l">Or watch the petrels flit before</span><br/>
            <span class="l">The marching tempests warning roar.</span><br/>
            <span class="l">And ocean eagles dark and proud,</span><br/>
            <span class="l">And white winged ospreys skim the cloud 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1410</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L760" id="L760">760</a></div></span><br/>
            <span class="l">And if thou neer hast felt as if</span><br/>
            <span class="l">The ocean had a mind</span><br/>
            <span class="l"><div 
          class="s-subst s-add s-overwrite s-inline">Nor</div><div 
          class="subst-del s-subst s-del" >And</div> held communion with the deep</span><br/>
            <span class="l"><div 
          class="s-subst s-add s-overwrite s-inline">Nor</div><div 
          class="subst-del s-subst s-del" >And</div> converse with the wind</span><br/>
            <span class="l">When broad black waves before it roll — 
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1415</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L765" id="L765">765</a></div></span><br/>
            <span class="l">I would not think thou hadst a soul.</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Cadenabbia” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         <div id="MSVII79v" class="pb"></div>
         
         <div class="title" id="@"><span class="space" style="padding-left:6.4em"> </span><span class="placeName-CADENABBIA">Cadenabbia</span></div>
         
         <div class="lg-stanza">
            <span class="l">Oh <span class="del-strikethrough">love</span> coolly came on <span class="geogName-LAKECOMO">Comos lake</span></span><br/>
            <span class="l">The lovely beams of morning mild,</span><br/>
            <span class="l">That oer the <span class="placeName-LECCO">Lecco</span> mountains break,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cadenabbia_poem_glosses_contextual#LECCOGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                106
                </span>
              </a></span></span><br/>
            <span class="l">And red their summits piled,
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1420</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L770" id="L770">770</a></div></span><br/>
            <span class="l">That high above their dim shore,</span><br/>
            <span class="l">Their weary winter garments bore,</span><br/>
            <span class="l">The broad boat lay along the tide</span><br/>
            <span class="l">The light waves lapped its sloping side</span><br/>
            <span class="l">And soft perfume of <span class="name--ORANGE">orange trees</span><div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1425</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L775" id="L775">775</a></div></span><br/>
            <span class="l">By fits came on the landward breeze</span><br/>
            <div id="MSVII80r" class="pb"></div>
            <div class="pageNum-top-right">80</div><br/>
            <span class="l">The trouts shot through the waters blue</span><br/>
            <span class="l">Like small stars in the heaven glance</span><br/>
            <span class="l">Or hid them where the broad weeds grew</span><br/>
            <span class="l">With wavy motion dancing.
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1430</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L780" id="L780">780</a></div></span><br/>
            <span class="l">Away, away, across the lake<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cadenabbia_poem_glosses_contextual#EASTERNLAKEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                107
                </span>
              </a></span></span><br/>
            <span class="l">How fast retires yon <span class="name--MYRTLE">myrtle</span> brake</span><br/>
            <span class="l">All sprinkled with a silver shower.</span><br/>
            <span class="l"><div 
          class="subst-del s-subst s-del" >On</div><div 
          class="s-subst s-add s-overwrite s-inline">Thro</div><div 
              class="add-below" 
              style="left:2.0em">ugh</div> the dark leaves of lemon flower.</span><br/>
            <span class="l">Clear, as if near, nor faint, though far
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1435<span class="space" style="padding-left:0.4em"> </span>
                     <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                        <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">40</a></div></a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L785" id="L785">785</a></div></span><br/>
            <span class="l">Shines on the mountain, like a star.</span><br/>
            <span class="l">The rock born torrents milky spray</span><br/>
            <span class="l">And many a small boat on its way</span><br/>
            <span class="l">Urged by a breeze that bore them well</span><br/>
            <span class="l">Though unfelt as invisible
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1440</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L790" id="L790">790</a></div></span><br/>
            <span class="l">With sunshine on their winglike sail,</span><br/>
            <span class="l">Past like young Eaglets on the gale.</span><br/>
            <span class="l">The steps were broken. mossed and steep.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cadenabbia_poem_glosses_textual#PAUSEPERIOD" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                ooo
                </span>
                
              </a></span></span><br/>
            <span class="l">The waters sparkling, clear, and deep.</span><br/>
            <span class="l">The rock was high, the cavern dark
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1445</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L795" id="L795">795</a></div></span><br/>
            <span class="l">Scarce lit up by the jewelled spark,</span><br/>
            <span class="l">Of the cold stream, that under earth</span><br/>
            <span class="l">Was <span class="del-strikethrough">buri</span> darkling buried at its birth.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cadenabbia_poem_glosses_contextual#DARKLINGGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                108
                </span>
              </a></span></span><br/>
            <span class="l">Nor once its wave had sunned, nor seen,</span><br/>
            <span class="l"><div 
          class="s-subst s-add s-overwrite s-inline">A</div><div 
          class="subst-del s-subst s-del" >O</div>ught but dark rock, and ice caves green
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1450</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L800" id="L800">800</a></div></span><br/>
            <span class="l">Where the deep waters, as a home</span><br/>
            <span class="l">Received the torrents churned foam</span><br/>
            <span class="l">We launched again, and downward bore</span><br/>
            <span class="l">Awhile beside the centre shore.</span><br/>
            <span class="l">Then left the shadowy eastern lake
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1455</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L805" id="L805">805</a></div></span><br/>
            <span class="l">Crossed through thick vines the wooded cape.</span><br/>
            <div id="MSVIII81v" class="pb"></div>
            <span class="l">Struck the clear wave with long light oar</span><br/>
            <span class="l">Left a white wake that sought the shore,</span><br/>
            <span class="l">High oer the boat the awning spread,</span><br/>
            <span class="l">And quick as sun<div 
              class="add-below" 
              style="left:6.8em">‸</div><div 
              class="add-above" 
              style="left:6.8em">‐red </div>waves<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/cadenabbia_poem_glosses_textual#SUNREDWAVESGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                ppp
                </span>
                
              </a></span> flashed before
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1460</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L810" id="L810">810</a></div></span><br/>
            <span class="l">Toward the southward fled.</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div>
   <div class="fileName"><span>“Villa Pliniana” [poem]</span></div>
   <div class="witness">
      <div class="poem" id="">
         <div id="MSVIII80v" class="pb"></div>
         
         <div class="title" id="@"><span class="space" style="padding-left:6.4em"> </span><span class="placeName-building-VILLAPLINIANA">Villa Pliniana</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/villa_pliniana_poem_glosses_textual#PUBLICATIONGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                qqq
                </span>
                
              </a></span></div>
         
         <div class="lg-stanza">
            <span class="l">I love to hear the names of those</span><br/>
            <span class="l">Who long ago have past away,<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/villa_pliniana_poem_glosses_contextual#PLINYVILLAGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                109
                </span>
              </a></span></span><br/>
            <span class="l">Though now those names be claimed by clay<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/villa_pliniana_poem_glosses_textual#CLAIMEDGLOSS" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                rrr
                </span>
                
              </a></span></span><br/>
            <span class="l">And who would stand where they repose
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1465</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L815" id="L815">815</a></div></span><br/>
            <span class="l">And look upon their dust, and say,</span><br/>
            <span class="l">That this was <span class="persName-TRAJAN">Trajan</span><span class="g-pause-period">.</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/villa_pliniana_poem_glosses_textual#PAUSEPERIOD" target="_blank" class="inactive">
          
          
                
                <span class="gloss-textual">
                sss
                </span>
                
              </a></span> and below</span><br/>
            <span class="l">This foot of mine, lies cold and low,</span><br/>
            <span class="l">Earth, which compounded long ago</span><br/>
            <span class="l">What held the soul of <span class="persName-JULIUSCAESAR">Cesar</span>.
                        
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">14<div 
          class="s-subst s-add s-inline">7</div><div 
          class="subst-del s-subst s-del" >6</div>0</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L820" id="L820">820</a></div></span><br/>
            <span class="l">How peaceful is the turbulence</span><br/>
            <span class="l">Of spirits, whose high deeds long hence</span><br/>
            <span class="l">Shall still be told as now,</span><br/>
            <span class="l">How strange those mighty powers that hurled</span><br/>
            <span class="l">Wide change and terror oer the world.
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1475 <span class="space" style="padding-left:0.4em"> </span>
                     <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                        <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">80</a></div></a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L825" id="L825">825</a></div></span><br/>
            <span class="l">Should pass away we know not how</span><br/>
            <span class="l">That one would wonder how a thing</span><br/>
            <span class="l">So temporary, perishing</span><br/>
            <span class="l">Should dare such deeds, or work such change</span><br/>
            <span class="l">Iʼ the texture of the world.
               <div class="s-line-number s-line-number-ruskin linenumber-right-JR">
                  <div class="tooltip">
             Ruskin's line number
          </div><a href="javascript:void(0)">1480</a></div>
               <div class="s-line-number s-line-number-auto">
                  <div class="tooltip">
          System generated line number
        </div><a href="#L830" id="L830">830</a></div></span><br/>
            <span class="l">There have been many mighty,</span><br/>
            <span class="l">And many more renowned,</span><br/>
            <span class="l">The ignoble and the glorious,</span><br/>
            <span class="l">Are underneath the ground</span><br/>
            </div>
         </div>
   </div><div id="" class="pb"></div>
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