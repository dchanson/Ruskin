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
Plan for Continuation of the Account of a Tour on the Continent
EOT
);
define("FACS_FILE_NAMES", <<<EOT
msviii/MSVIIIback_flyleafv-back_flyleafr.jpg
EOT
);
      ?>
    <?php require_once(ROOT_PATH."layout_includes/showcase_top.inc.php"); ?><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-left"><img id="facs_preview" src="" width="100%"><img id="facs" src="" width="100%" style="display:none"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-splitter"></div><div xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude" id="content-right">
   <div class="backToApparatusLink"><a href="/apparatuses/apparatuses/account_of_a_tour_on_the_continent_apparatus#account_of_a_tour_on_the_continent_msviii" target="_self">Back to apparatus</a><br/></div>
   <div class="fileName"><span>Plan for Continuation of the Account of a Tour on the Continent</span></div>
   <div class="witness">
      <div class="bibliography_text" id="account_of_a_tour_on_the_continent_toc_msviii_main">
         
         <h1 class="page-title">Lists of Proposed Additional Contents for the “Account”</h1>
         
         <div class="tablespace" id="account_toc_msviii_addictional_sections_table">
            <span class="head-section">Table 1. List of Proposed Additional Sections and/or Works<br/>(See <a href="/apparatuses/account_of_a_tour_on_the_continent_apparatus#PROPOSEDCONTENTS" target="_self">“Account” Apparatus: The Plan for Completion of the Work</a>.)</span>
            
            <table>
               
               <tr class="label">
                  
                  <td>1.<i>a</i>. Meta‐textual Mark</td>
                  
                  <td>1.<i>b</i>. Ruskinʼs Numbering (Sequence of Sections and/or Works)</td>
                  
                  <td>1.<i>c</i>. Title of Section or Work</td>
                  </tr>
               
               <tr class="data">
                  
                  <td><span class="metamark-unknown">\</span></td>
                  
                  <td>1</td>
                  
                  <td><span class="title-composite-JRANDERNACHTCOMP"><span class="placeName-ANDERNACH">Andernacht</span></span></td>
                  </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCEHRENBREITSTEIN">
               
               <td></td>
               
               <td>2</td>
               
               <td><span class="title-composite-JREHRENBREITSTEINCOMP"><span class="geogName-EHRENBREISTEIN">Ehrenbreistein</span></span> (see also <a href="#ACCOUNTTOCCOBLENTZILLUS">Table 2 [<span class="title-composite-JREHRENBREITSTEINCOMP"><span class="placeName-COBLENZ">Coblentz</span></span>]</a>)</td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCSTGOAR">
               
               <td><span class="metamark-unknown">\</span></td>
               
               <td>3</td>
               
               <td><span class="title-composite-JRSTGOARCOMP"><span class="placeName-STGOAR">St Goar</span></span> (see also <a href="#ACCOUNTTOCSTGOARILLUS">Table 2</a>)</td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCFRANCFURT">
               
               <td></td>
               
               <td>4</td>
               
               <td><span class="del-strikethrough"><span class="title-composite-JRFRANKFURTCOMP"><span class="placeName-FRANKFURT">Francfort</span></span></span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_glosses_contextual#FRANCFORTGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                1
                </span>
              </a></span></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCHEIDELBERG">
               
               <td></td>
               
               <td>5</td>
               
               <td><span class="title-composite-JRHEIDELBERGCOMP"><span class="placeName-HEIDELBERG">Heidelberg</span></span> (see also <a href="#ACCOUNTTOCHEIDELBERGILLUS">Table 2</a>)</td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCSTRASBURG">
               
               <td></td>
               
               <td>6</td>
               
               <td><span class="title-composite-JRSTRASBURGCOMP"><span class="placeName-STRASBOURG">Strasburg</span></span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_glosses_contextual#STRASBURGGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                2
                </span>
              </a></span> (see also <a href="#ACCOUNTTOCSTRASBURGILLUS">Table 2</a>)</td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCSWISSCOTTAGES">
               
               <td><span class="metamark-unknown">\</span></td>
               
               <td>7</td>
               
               <td><span class="title-composite-JRSWISSCOTTAGESCOMP">The swiss cottages</span></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCSCHAFFHAUSEN">
               
               <td></td>
               
               <td>8</td>
               
               <td><span class="title-composite-JRSCHAFFHAUSENCOMP"><span class="placeName-SCHAFFHAUSEN">Schaffhausen</span></span> (see also <a href="#ACCOUNTTOCSCHAFFHAUSENILLUS">Table 2</a>)</td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCTHEALPS">
               
               <td><span class="metamark-unknown">\</span></td>
               
               <td>9</td>
               
               <td><span class="title-composite-JRTHEALPSCOMP"><span class="geogName-ALPS">The Alps</span></span> (see also <a href="#ACCOUNTTOCTHEALPSILLUS">Table 2</a>)</td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCFALLOFTHERHINE">
               
               <td></td>
               
               <td>10</td>
               
               <td>
                  <span class="title-composite-JRTHEFALLOFTHERHINECOMP"><span class="geogName-RHINEFALLS">The fall of the Rhine</span></span>
                         (see also <a href="#ACCOUNTTOCFALLOFTHERHINEILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCCONSTANCE">
               
               <td></td>
               
               <td>11</td>
               
               <td>
                  <span class="title-composite-JRCONSTANCECOMP">
                     <span class="placeName-CONSTANCE">Constance</span>
                     </span>
                  <span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_glosses_contextual#CONSTANCEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                3
                </span>
              </a></span>
                            (see also <a href="#ACCOUNTTOCCONSTANCEILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCWERDENBERG">
               
               <td></td>
               
               <td>12</td>
               
               <td>
                  <span class="title-composite-JRWERDENBERGCOMP">
                     <span class="placeName-WERDENBERG">Werdenberg</span>
                     </span>
                  <span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_glosses_contextual#WERDENBERGGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                4
                </span>
              </a></span>
                           (see also <a href="#ACCOUNTTOCWERDENBERGILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCPFAFFERS">
               
               <td></td>
               
               <td>13</td>
               
               <td>
                  <span class="title-composite-JRPFAFFERSCOMP">
                     <span class="placeName-PFAFFERS">Pfaffers</span>
                     </span>
                  <span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_glosses_contextual#PFAFFERSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                5
                </span>
              </a></span>
                            (see also <a href="#ACCOUNTTOCPFAFFERSILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCPASSINGTHEALPS">
               
               <td><span class="metamark-unknown">\</span></td>
               
               <td>14</td>
               
               <td>
                  <span class="title-composite-JRPASSINGTHEALPSCOMP">Passing the <span class="geogName-ALPS">Alps</span></span>
                           (see also <a href="#ACCOUNTTOCPASSINGTHEALPSILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCVIAMALA">
               
               <td><span class="metamark-unknown">\</span></td>
               
               <td>15</td>
               
               <td>
                  <span class="title-composite-JRVIAMALACOMP">
                     <span class="geogName-VIAMALA">The via mala</span>
                     </span>
                           (see also <a href="#ACCOUNTTOCVIAMALAILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCSPLUGEN">
               
               <td><span class="metamark-unknown">\</span></td>
               
               <td>16</td>
               
               <td>
                  <span class="title-composite-JRSPLUGENCOMP">
                     <span class="placeName-SPLUGEN">Splugen</span>
                     </span>
                           (see also <a href="#ACCOUNTTOCSPLUGENILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCTHESUMMIT">
               
               <td>
                  <span class="metamark-insertion">\</span>
                  </td>
               
               <td></td>
               
               <td>
                  <span class="title-composite-JRTHESUMMITCOMP">The Summit</span>
                           (see also <a href="#ACCOUNTTOCTHESUMMITILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCTHEDESCENT">
               
               <td><span class="metamark-unknown">\</span></td>
               
               <td>17</td>
               
               <td>
                  <span class="title-composite-JRTHEDESCENTCOMP">The descent</span>
                           (see also <a href="#ACCOUNTTOCTHEDESCENTILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCITALIA">
               
               <td></td>
               
               <td>18</td>
               
               <td>
                  <span class="title-composite-JRITALIACOMP">
                     <span class="placeName-ITALY">Italia, Italia</span>
                     </span>
                  </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCLAGODICOMO">
               
               <td><span class="metamark-unknown">\</span></td>
               
               <td>19</td>
               
               <td>
                  <span class="title-composite-JRLAGODICOMOCOMP">
                     <span class="geogName-LAKECOMO">Lago di Como</span>
                     </span>
                           (see also <a href="#ACCOUNTTOCLAGODICOMOILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCCADENABBIA">
               
               <td></td>
               
               <td>20</td>
               
               <td>
                  <span class="title-composite-JRCADENABBIACOMP">
                     <span class="placeName-CADENABBIA">Cadenabbia</span>
                     </span>
                           (see also <a href="#ACCOUNTTOCCADENABBIAILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCVILLAPLINIANA">
               
               <td></td>
               
               <td>21</td>
               
               <td>
                  <span class="title-composite-JRVILLAPLINIANACOMP">
                     <span class="placeName-VILLAPLINIANA">Villa pliniana</span>
                     </span>
                           (see also <a href="#ACCOUNTTOCVILLAPLINIANAILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCMILAN">
               
               <td></td>
               
               <td>22</td>
               
               <td>
                  <span class="title-composite-JRMILANCOMP">
                     <span class="placeName-MILAN">Milan</span>
                     </span>
                           (see also <a href="#ACCOUNTTOCMILANILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCDUOMO">
               
               <td><span class="metamark-unknown">\</span></td>
               
               <td>23</td>
               
               <td>
                  <span class="title-composite-JRDUOMOFMILANCOMP">
                     <span class="placeName-building-DUOMOMILAN">The duomo of Milan</span>
                     </span>
                           (see also <a href="#ACCOUNTTOCDUOMOILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCCORSO">
               
               <td></td>
               
               <td>24</td>
               
               <td>
                  <span class="title-composite-JRCORSOFMILANCOMP">
                     <span class="placeName-PORTAVENEZIA">The corso of Milan</span>
                     </span>
                  <span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_glosses_contextual#CORSOGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                6
                </span>
              </a></span>
                            (see also <a href="#ACCOUNTTOCCORSOILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCCERTOSA">
               
               <td></td>
               
               <td>25</td>
               
               <td>
                  <span class="title-composite-JRTHECERTOSACOMP">
                     <span class="placeName-building-CERTOSA">The certosa</span>
                     </span>
                  <span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_glosses_contextual#CERTOSAGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                7
                </span>
              </a></span>
                            (see also <a href="#ACCOUNTTOCCERTOSAILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCAPPENINES">
               
               <td></td>
               
               <td>26</td>
               
               <td>
                  <span class="title-composite-JRTHEAPPENINESCOMP">
                     <span class="geogName-APPENINES">The Appenines</span>
                     </span>
                  <span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_glosses_contextual#APPENINESGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                8
                </span>
              </a></span>
                            (see also <a href="#ACCOUNTTOCAPPENINESILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCGENOA">
               
               <td></td>
               
               <td>27</td>
               
               <td>
                  <span class="title-composite-JRGENOACOMP">
                     <span class="placeName-GENOA">Genoa</span>
                     </span>
                           (see also <a href="#ACCOUNTTOCGENOAILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCHOUSEOFBYRON">
               
               <td></td>
               
               <td>28</td>
               
               <td><span class="del-strikethrough"><span class="title-composite-JRHOUSEOFBYRONCOMP">The <span class="unclear-DCH">house</span> of <span class="persName-GGB">Byron</span></span></span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_glosses_contextual#HOUSEOFBYRONGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                9
                </span>
              </a></span></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCMARENGO">
               
               <td></td>
               
               <td>29</td>
               
               <td>
                  <span class="title-composite-JRMARENGOCOMP">
                     <span class="placeName-MARENGO">Marengo</span>
                     </span>
                  <span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_glosses_contextual#MARENGOGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                10
                </span>
              </a></span>
                            (see also <a href="#ACCOUNTTOCMARENGOILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCTURIN">
               
               <td></td>
               
               <td>30</td>
               
               <td>
                  <span class="title-composite-JRTURINCOMP">
                     <span class="placeName-TURIN">Turin</span>
                     </span>
                  <span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_glosses_contextual#TURINGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                11
                </span>
              </a></span>
                            (see also <a href="#ACCOUNTTOCTURINILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCNOVARA">
               
               <td></td>
               
               <td>31</td>
               
               <td><span class="del-strikethrough"><span class="title-composite-JRMONTCENISCOMP"><span class="geogName-MONTCENIS">Mont Cenis</span></span></span><span class="title-composite-JRNOVARACOMP"><span class="placeName-NOVARA">Novara</span></span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_glosses_contextual#NOVARAGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                12
                </span>
              </a></span>
                             (see also <a href="#ACCOUNTTOCNOVARAILLUS">Table 2</a>)
                           </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCMAGGIORE">
               
               <td></td>
               
               <td>32</td>
               
               <td>
                  <span class="title-composite-JRMAGGIORECOMP">
                     <span class="geogName-LAKEMAGGIORE">Maggiore</span>
                     </span>
                           (see also <a href="#ACCOUNTTOCMAGGIOREILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCMADONNADELMONTE">
               
               <td></td>
               
               <td>33</td>
               
               <td>
                  <span class="title-composite-JRTHEMADONNADELMONTECOMP">
                     <span class="geogName-MADONNADELMONTE">The Madonna del monte</span>
                     </span>
                  <span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_glosses_contextual#MADONNADELMONTEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                13
                </span>
              </a></span>
                            (see also <a href="#ACCOUNTTOCMADONNADELMONTEILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCDOMODOSSOLA">
               
               <td></td>
               
               <td>34</td>
               
               <td>
                  <span class="title-composite-JRDOMODOSSOLACOMP">
                     <span class="placeName-DOMODOSSOLA">Domo dʼOssola</span>
                     </span>
                  <span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_glosses_contextual#DOMODOSSOLAGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                14
                </span>
              </a></span> (see also <a href="#ACCOUNTTOCDOMODOSSOLAILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCFAREWELLTOITALY">
               
               <td></td>
               
               <td>35</td>
               
               <td>
                  <span class="title-composite-JRFAREWELLTOITALYCOMP">Farewell to <span class="placeName-ITALY">Italy</span></span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_glosses_contextual#FAREWELLTOITALYGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                15
                </span>
              </a></span> (see also <a href="#ACCOUNTTOCFAREWELLTOITALYILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCTHEGLACIERS">
               
               <td></td>
               
               <td></td>
               
               <td>
                  <span class="title-composite-JRTHEGLACIERSCOMP">The Glaciers</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_glosses_contextual#THEGLACIERSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                16
                </span>
              </a></span>
                           (see also <a href="#ACCOUNTTOCTHEGLACIERSILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCBRIEG">
               
               <td></td>
               
               <td></td>
               
               <td>
                  <span class="title-composite-JRBRIEGCOMP">
                     <span class="placeName-BRIG">Brieg</span>
                     </span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_glosses_contextual#BRIEGGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                17
                </span>
              </a></span>
                           (see also <a href="#ACCOUNTTOCBRIEGILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCTOURTMAN">
               
               <td></td>
               
               <td></td>
               
               <td>
                  <span class="title-composite-JRTURTMANNCOMP">
                     <span class="placeName-TURTMANN">Tourtman</span>
                     </span>
                  <span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_glosses_contextual#TURTMANNGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                18
                </span>
              </a></span>
                            (see also <a href="#ACCOUNTTOCTOURTMANILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCMARTIGNY">
               
               <td></td>
               
               <td></td>
               
               <td>
                  <span class="title-composite-JRMARTIGNYCOMP">
                     <span class="placeName-MARTIGNY">Martigny</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_glosses_contextual#MARTIGNYGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                19
                </span>
              </a></span>
                     </span>
                           (see also <a href="#ACCOUNTTOCMARTIGNYILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCTHEASCENT">
               
               <td></td>
               
               <td>36</td>
               
               <td>
                  <span class="title-composite-JRTHEASCENTCOMP">The ascent</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_glosses_contextual#ASCENTGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                20
                </span>
              </a></span>
                           (see also <a href="#ACCOUNTTOCTHEASCENTILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCSTBERNARD">
               
               <td></td>
               
               <td></td>
               
               <td>
                  <span class="title-composite-JRTHEGRANDSTBERNARDCOMP">
                     <span class="geogName-STBERNARD">The Grand st Bernard</span>
                     </span>
                           (see also <a href="#ACCOUNTTOCSTBERNARDILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCCOUNTTOCSAINTMAURICE">
               
               <td></td>
               
               <td></td>
               
               <td>
                  <span class="title-composite-JRSAINTMAURICECOMP">
                     <span class="placeName-SAINTMAURICE">St Maurice</span>
                     </span>
                  <span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_glosses_contextual#STMAURICEGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                21
                </span>
              </a></span>
                            (see also <a href="#ACCOUNTTOCSAINTMAURICEILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCLAKEOFGENEVA">
               
               <td></td>
               
               <td></td>
               
               <td>
                  <span class="title-composite-JRTHELAKEOFGENEVACOMP">
                     <span class="geogName-LAKEGENEVA">The lake of Geneva</span>
                     </span>
                           (see also <a href="#ACCOUNTTOCLAKEOFGENEVAILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCCHILLON">
               
               <td></td>
               
               <td></td>
               
               <td>
                  <span class="title-composite-JRCHILLONCASTLECOMP">
                     <span class="placeName-building-CHILLONCASTLE">Chillon</span>
                     </span>
                           (see also <a href="#ACCOUNTTOCCHILLONILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCLAUSANNE">
               
               <td></td>
               
               <td>40</td>
               
               <td>
                  <span class="title-composite-JRLAUSANNECOMP">
                     <span class="placeName-LAUSANNE">Lausanne</span>
                     </span>
                           (see also <a href="#ACCOUNTTOCLAUSANNEILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCFRIBOURG">
               
               <td></td>
               
               <td></td>
               
               <td>
                  <span class="title-composite-JRFRIBOURGCOMP">
                     <span class="placeName-FRIBOURG">Fribourg</span>
                     </span>
                           (see also <a href="#ACCOUNTTOCFRIBOURGILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCBERNE">
               
               <td></td>
               
               <td></td>
               
               <td>
                  <span class="title-composite-JRBERNECOMP">
                     <span class="geogName-BERNE">Berne</span>
                     </span>
                           (see also <a href="#ACCOUNTTOCBERNEILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCTHUN">
               
               <td></td>
               
               <td></td>
               
               <td>
                  <span class="title-composite-JRTHUNCOMP">
                     <span class="placeName-THUN">Thun</span>
                     </span>
                           (see also <a href="#ACCOUNTTOCTHUNILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCINTERLAKEN">
               
               <td></td>
               
               <td></td>
               
               <td>
                  <span class="title-composite-JRINTERLAKENCOMP">
                     <span class="placeName-INTERLAKEN">Interlaken</span>
                     </span>
                           (see also <a href="#ACCOUNTTOCINTERLAKENILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCJUNGFRAU">
               
               <td></td>
               
               <td>45</td>
               
               <td>
                  <span class="title-composite-JRJUNFRAUCOMP">
                     <span class="geogName-JUNGFRAU">The Jungfrau</span>
                     </span>
                           (see also <a href="#ACCOUNTTOCJUNGFRAUILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCGIESBACH">
               
               <td></td>
               
               <td></td>
               
               <td>
                  <span class="title-composite-JRGIESSBACHFALLSCOMP">
                     <span class="geogName-GIESSBACHFALLS">The Giesbach</span>
                     </span>
                           (see also <a href="#ACCOUNTTOCGIESBACHILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCLUCERNE">
               
               <td></td>
               
               <td></td>
               
               <td>
                  <span class="title-composite-JRLUCERNECOMP">
                     <span class="placeName-LUCERNE">Lucerne</span>
                     </span>
                           (see also <a href="#ACCOUNTTOCLUCERNEILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCAART">
               
               <td></td>
               
               <td></td>
               
               <td>
                  <span class="title-composite-JRARTHCOMP">
                     <span class="placeName-ARTH">Aart</span>
                     </span>
                  <span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_glosses_contextual#AARTGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                22
                </span>
              </a></span>
                            (see also <a href="#ACCOUNTTOCAARTILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCRIGI">
               
               <td></td>
               
               <td></td>
               
               <td>
                  <span class="title-composite-JRRIGICOMP">
                     <span class="geogName-">Rigi</span>
                     </span>
                           (see also <a href="#ACCOUNTTOCRIGIILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCGOLDAU">
               
               <td></td>
               
               <td>50</td>
               
               <td>
                  <span class="title-composite-JRGOLDAUCOMP">
                     <span class="placeName-GOLDAU">Goldau</span>
                     </span>
                           (see also <a href="#ACCOUNTTOCGOLDAUILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCSCHWYTZ">
               
               <td></td>
               
               <td></td>
               
               <td>
                  <span class="title-composite-JRSCHWYTZCOMP">
                     <span class="placeName-SCHWYZ">Schwytz</span>
                     </span>
                           (see also <a href="#ACCOUNTTOCSCHWYTZILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCEINSIDELN">
               
               <td></td>
               
               <td></td>
               
               <td>
                  <span class="title-composite-JREINSIEDELNCOMP">
                     <span class="placeName-">Einsideln</span>
                     </span>
                           (see also <a href="#ACCOUNTTOCEINSIDELNILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCLAKEOFZURICH">
               
               <td></td>
               
               <td></td>
               
               <td>
                  <span class="title-composite-JRLAKEOFZURICHCOMP">
                     <span class="geogName-LAKEZURICH">The lake of Zurich</span>
                     </span>
                           (see also <a href="#ACCOUNTTOCLAKEOFZURICHILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCBASLE">
               
               <td></td>
               
               <td></td>
               
               <td>
                  <span class="title-composite-JRBASLECOMP">
                     <span class="placeName-BASLE">Basle</span>
                     </span>
                           (see also <a href="#ACCOUNTTOCBASLEILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCTHERHINE">
               
               <td></td>
               
               <td>55</td>
               
               <td>
                  <span class="title-composite-JRTHERHINECOMP">
                     <span class="geogName-RHINE">The Rhine</span>
                     </span>
                           (see also <a href="#ACCOUNTTOCTHERHINEILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCBALSTALL">
               
               <td></td>
               
               <td></td>
               
               <td>
                  <span class="title-composite-JRBALSTALLCOMP">
                     <span class="placeName-BALSTHAL">Balstall</span>
                     </span>
                           (see also <a href="#ACCOUNTTOCBALSTALLILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCSOLEUR">
               
               <td></td>
               
               <td></td>
               
               <td>
                  <span class="title-composite-">
                     <span class="del-strikethrough">
                        <span class="placeName-SOLEURE">Soleure</span>
                        </span>
                     </span>
                  </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCNEUFCHATEL">
               
               <td></td>
               
               <td></td>
               
               <td>
                  <span class="title-composite-JRNEUFCHATELCOMP">
                     <span class="placeName-NEUFCHATEL">Neufchatel</span>
                     </span>
                           (see also <a href="#ACCOUNTTOCNEUFCHATELILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCGENEVA">
               
               <td></td>
               
               <td></td>
               
               <td>
                  <span class="title-composite-JRGENEVACOMP">
                     <span class="placeName-GENEVA">Geneva</span>
                     </span>
                           (see also <a href="#ACCOUNTTOCGENEVAILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCCHAMOUNI">
               
               <td><span class="metamark-unknown">\</span></td>
               
               <td>60</td>
               
               <td>
                  <span class="title-composite-JRCHAMOUNICOMP">
                     <span class="placeName-CHAMOUNI">Chamouni</span>
                     </span>
                           (see also <a href="#ACCOUNTTOCCHAMOUNIILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCTHEMONTBLANC">
               
               <td><span class="metamark-unknown">\</span></td>
               
               <td></td>
               
               <td>
                  <span class="title-composite-JRTHEMONTBLANCCOMP">
                     <span class="geogName-MONTBLANC">The Mont Blanc</span>
                     </span>
                           (see also <a href="#ACCOUNTTOCTHEMONTBLANCILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCSOURCEOFTHEARVERON">
               
               <td><span class="metamark-unknown">\</span></td>
               
               <td></td>
               
               <td>
                  <span class="title-composite-JRSOURCEOFTHEARVERONCOMP">
                     <span class="geogName-ARVERON">The source of the Arveron</span>
                     </span>
                           (see also <a href="#ACCOUNTTOCSOURCEOFTHEARVERONILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCTHEMORNING">
               
               <td><span class="metamark-unknown">\</span></td>
               
               <td></td>
               
               <td>
                  <span class="title-composite-JRTHEMORNINGCOMP">The morning</span>
                           (see also <a href="#ACCOUNTTOCTHEMORNINGILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCTHEMONTANVERT">
               
               <td></td>
               
               <td></td>
               
               <td>
                  <span class="title-composite-JRTHEMONTANVERTCOMP">
                     <span class="geogName-MONTANVERT">The Montanvert</span>
                     </span>
                           (see also <a href="#ACCOUNTTOCTHEMONTANVERTILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCTHEMERDEGLACE">
               
               <td></td>
               
               <td>65</td>
               
               <td>
                  <span class="title-composite-JRTHEMERDEGLACECOMP">
                     <span class="geogName-MERDEGLACE">The Mer de Glace</span>
                     </span>
                           (see also <a href="#ACCOUNTTOCTHEMERDEGLACEILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCOURLASTWALK">
               
               <td></td>
               
               <td></td>
               
               <td>
                  <span class="title-composite-JROURLASTWALKCOMP">Our last walk.</span>
                           (see also <a href="#ACCOUNTTOCOURLASTWALKILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCFAREWELL">
               
               <td></td>
               
               <td></td>
               
               <td>
                  <span class="title-composite-JRFAREWELLCOMP">Farewell.</span>
                           (see also <a href="#ACCOUNTTOCFAREWELLILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCLYONS">
               
               <td></td>
               
               <td></td>
               
               <td>
                  <span class="title-composite-JRLYONSCOMP">
                     <span class="placeName-LYONS">Lyons</span>
                     </span>
                           (see also <a href="#ACCOUNTTOCLYONSILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCDIJON">
               
               <td></td>
               
               <td></td>
               
               <td>
                  <span class="title-composite-JRDIJONCOMP">
                     <span class="placeName-DIJON">Dijon</span>
                     </span>
                           (see also <a href="#ACCOUNTTOCDIJONILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCPARIS">
               
               <td></td>
               
               <td>70</td>
               
               <td>
                  <span class="title-composite-JRPARISCOMP">
                     <span class="placeName-PARIS">Paris</span>
                     </span>
                           (see also <a href="#ACCOUNTTOCPARISILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCPERELACHAISE">
               
               <td></td>
               
               <td></td>
               
               <td>
                  <span class="title-composite-JRPERELACHAISECOMP">
                     <span class="placeName-PERELACHAISE">Pere la chaise</span>
                     </span>
                           (see also <a href="#ACCOUNTTOCPERELACHAISEILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCTHELASTNIGHTINFRANCE">
               
               <td></td>
               
               <td></td>
               
               <td>
                  <span class="title-composite-JRTHELASTNIGHTINFRANCECOMP">The last night in France</span>
                           (see also <a href="#ACCOUNTTOCTHELASTNIGHTINFRANCEILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCOLDENGLAND">
               
               <td></td>
               
               <td></td>
               
               <td>
                  <span class="title-composite-JROLDENGLANDCOMP">Old England.</span>
                           (see also <a href="#ACCOUNTTOCOLDENGLANDILLUS">Table 2</a>)
                         </td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCPEACETOTHEE">
               
               <td></td>
               
               <td></td>
               
               <td><span class="del-strikethrough">Peace to thee</span></td>
               </tr>
               </table>
            </div>
         
         
         
         <div class="tablespace" id="account_toc_msviii_table_2">
            <span class="head-section">Table 2. List of Proposed Additional Sections and/or Works with Associated Illustrations<br/>(See <a href="/apparatuses/account_of_a_tour_on_the_continent_apparatus#PROPOSEDCONTENTS" target="_self">“Account” Apparatus: The Plan for Completion of the Work</a>.)</span>
            
            <table>
               
               <tr class="label">
                  
                  <td>2.<i>a</i>. Ruskinʼs Numbering (Items “Wanted”)</td>
                  
                  <td>2.<i>b</i>. Title of Section or Work</td>
                  
                  <td>2.<i>c</i>. Identities and Sources of Illustrations</td>
                  
                  <td>2.<i>d</i>. Ruskinʼs Numbering (Illustrations Completed?)</td>
                  </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCHEIDELBERGILLUS">
               
               <td>0</td>
               
               <td><span class="title-composite-JRHEIDELBERGCOMP"><span class="placeName-HEIDELBERG">Heidelberg</span></span> (see also <a href="#ACCOUNTTOCHEIDELBERG">Table 1</a>)</td>
               
               <td>Begin with <span class="del-strikethrough">mountain.</span> Tournament. Spectre. <span class="del-strikethrough">the</span> Castle by moonlight. <span class="persName-SP">Prout</span> Old House <span class="persName-SP">Prout</span> on the <span class="geogName-RHINE">Rhine</span>. <span class="placeName-BRAUBACH">Braubach</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_illus_glosses_contextual#HEIDELBERGILLUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                23
                </span>
              </a></span></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCSTGOARILLUS">
               
               <td>0</td>
               
               <td>
                  <span class="title-composite-JRSTGOARCOMP">
                     <span class="placeName-STGOAR">St Goar</span> 
                     </span>
                                  (see also <a href="#ACCOUNTTOCSTGOAR">Table 1</a>)
                                </td>
               
               <td>Whirlpool. <span class="placeName-GODESBERG">Godesberg</span>. <span class="placeName-RHEINFELS">Rheinfels</span>. <span class="geogName-DRACHENFELS">Drachenfels</span>.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_illus_glosses_contextual#STGOARILLUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                24
                </span>
              </a></span></td>
               
               <td>— 0</td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCCOBLENTZILLUS">
               
               <td>0</td>
               
               <td>
                  <span class="title-composite-JREHRENBREITSTEINCOMP"><span class="placeName-COBLENZ">Coblentz</span></span>
                                  (see also <a href="#ACCOUNTTOCEHRENBREITSTEIN">Table 1 [<span class="title-composite-JREHRENBREITSTEINCOMP"><span class="geogName-EHRENBREISTEIN">Ehrenbreistein</span></span></a>])</td>
               
               <td>Vignette tower, <span class="persName-SP">Prout</span>. <span class="del-strikethrough">Fortress.</span> <span class="del-strikethrough">Fortress my own.</span> <span class="del-strikethrough">Pines.</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_illus_glosses_contextual#COBLENTZILLUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                25
                </span>
              </a></span></td>
               
               <td>— 0</td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCSTRASBURGILLUS">
               
               <td>02</td>
               
               <td>
                  <span class="title-composite-JRSTRASBURGCOMP"><span class="placeName-STRASBOURG">Strasburg</span></span>
                                  (see also <a href="#ACCOUNTTOCSTRASBURG">Table 1</a>)
                                </td>
               
               <td><span class="persName-SP">Prout</span>. The well. | The swiss cottages | × Un de les; <span class="persName-WCW">William Tell</span> <span class="title-book-CLARKEBOYSOWNBOOK">Boys Own Book</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_illus_glosses_contextual#STRASBURGILLUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                26
                </span>
              </a></span></td>
               
               <td>— 1</td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCSCHAFFHAUSENILLUS">
               
               <td>4</td>
               
               <td>
                  <span class="title-composite-JRSCHAFFHAUSENCOMP"><span class="placeName-SCHAFFHAUSEN">Schaffhaus</span> [i.e., Schaffhausen]</span>
                                (see also <a href="#ACCOUNTTOCSCHAFFHAUSEN">Table 1</a>)
                                </td>
               
               <td></td>
               
               <td>— 4</td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCTHEALPSILLUS">
               
               <td>3</td>
               
               <td>
                  <span class="title-composite-JRTHEALPSCOMP"><span class="geogName-ALPS">The Alps</span>.</span>
                                (see also <a href="#ACCOUNTTOCTHEALPS">Table 1</a>)
                                </td>
               
               <td>My own</td>
               
               <td>— 3</td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCFALLOFTHERHINEILLUS">
               
               <td>3</td>
               
               <td>
                  <span class="title-composite-JRFALLOFTHERHINECOMP">
                     <span class="geogName-RHINEFALLS">Fall of the Rhine</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCFALLOFTHERHINE">Table 1</a>)
                                </td>
               
               <td>Turner<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_illus_glosses_contextual#FALLOFTHERHINEILLUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                27
                </span>
              </a></span></td>
               
               <td>— 3</td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCCONSTANCEILLUS">
               
               <td>3</td>
               
               <td>
                  <span class="title-composite-JRCONSTANCECOMP">
                     <span class="placeName-CONSTANCE">Constance</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCCONSTANCE">Table 1</a>)
                                </td>
               
               <td>Recollection<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_illus_glosses_contextual#CONSTANCEILLUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                28
                </span>
              </a></span></td>
               
               <td>— 3</td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCWERDENBERGILLUS">
               
               <td>3</td>
               
               <td>
                  <span class="title-composite-JRWERDENBERGCOMP">
                     <span class="placeName-WERDENBERG">Werdenberg</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCWERDENBERG">Table 1</a>)
                                </td>
               
               <td><span class="del-strikethrough">On the <span class="geogName-RHINE">Rhine</span></span> near <span class="placeName-SARGENS">Sargans</span> with thunder — Also — Haymakers.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_illus_glosses_contextual#WERDENBERGILLUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                29
                </span>
              </a></span></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCPFAFFERSILLUS">
               
               <td>1</td>
               
               <td>
                  <span class="title-composite-JRPFAFFERSCOMP">
                     <span class="placeName-PFAFFERS">Pfaffers</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCPFAFFERS">Table 1</a>)
                                </td>
               
               <td>Ravine, On the <span class="geogName-RHINE">Rhine</span> near Tusis, <span class="placeName-COIRE">Coire</span> — Chateau of Trostberg. Brockedon<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_illus_glosses_contextual#PFAFFERSILLUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                30
                </span>
              </a></span></td>
               
               <td>— 0</td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCPASSINGTHEALPSILLUS">
               
               <td>3</td>
               
               <td>
                  <span class="title-composite-JRPASSINGTHEALPSCOMP">Passing <span class="geogName-ALPS">Alps</span></span>
                                  (see also <a href="#ACCOUNTTOCPASSINGTHEALPS">Table 1</a>)
                                </td>
               
               <td><span class="persName-HANNIBAL">Hannibal</span> <span class="del-strikethrough">Alps at Daybreak</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_illus_glosses_contextual#PASSINGTHEALPSILLUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                31
                </span>
              </a></span></td>
               
               <td>—</td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCVIAMALAILLUS">
               
               <td>0</td>
               
               <td>
                  <span class="title-composite-">
                     <span class="geogName-VIAMALA">Via mala</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCVIAMALA">Table 1</a>)
                                </td>
               
               <td><span class="persName-WBI">Brockedon</span>, goats. Two from coloured plates<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_illus_glosses_contextual#VIAMALAILLUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                32
                </span>
              </a></span></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCSPLUGENILLUS">
               
               <td>0</td>
               
               <td>
                  <span class="title-composite-JRSPLUGENCOMP">
                     <span class="geogName-SPLUGEN">Splugen</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCSPLUGEN">Table 1</a>)
                                </td>
               
               <td>Covered bridge, <span class="gap" style="padding-left:3.2em"> </span> Galleries coloured, Fountain. <span class="geogName-">Ravine of Rofla</span>.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_illus_glosses_contextual#SPLUGENILLUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                33
                </span>
              </a></span></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCTHESUMMITILLUS">
               
               <td>2</td>
               
               <td>
                  <span class="title-composite-JRTHESUMMITCOMP">The summit</span>
                                  (see also <a href="#ACCOUNTTOCTHESUMMIT">Table 1</a>)
                                </td>
               
               <td>Arch of snow with <span class="gap" style="padding-left:0.8em"> </span> torrent <span class="geogName-HELVELLYN">Helvellyn</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_illus_glosses_contextual#THESUMMITILLUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                34
                </span>
              </a></span></td>
               
               <td>—</td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCTHEDESCENTILLUS">
               
               <td>0</td>
               
               <td>
                  <span class="title-composite-JRTHEDESCENTCOMP">The descent</span>
                                  (see also <a href="#ACCOUNTTOCTHEDESCENT">Table 1</a>)
                                </td>
               
               <td><span class="persName-WBI">Brockedon</span>. Passage of Cardinele coloured. Cascade. Vineyards of <span class="placeName-CHIAVENNA">Chiavenna</span>.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_illus_glosses_contextual#THEDESCENTILLUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                35
                </span>
              </a></span></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCLAGODICOMOILLUS">
               
               <td>2</td>
               
               <td>
                  <span class="title-composite-JRLAGODICOMOCOMP"><span class="geogName-LAKECOMO">Como</span>.</span>
                                  (see also <a href="#ACCOUNTTOCLAGODICOMO">Table 1</a>)
                                </td>
               
               <td>Sketch on lake of Chiavenna with boat. <span class="placeName-COMO">Como</span> from <span class="persName-CFS">Stanfield</span>, Small part town<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_illus_glosses_contextual#LAGODICOMOILLUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                36
                </span>
              </a></span></td>
               
               <td>— 1</td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCCADENABBIAILLUS">
               
               <td>1</td>
               
               <td>
                  <span class="title-composite-JRCADENABBIACOMP">
                     <span class="placeName-CADENABBIA">Cadenabia [i.e., Cadenabbia]</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCCADENABBIA">Table 1</a>)
                                </td>
               
               <td><span class="persName-SR">Rogers</span> <span class="placeName-ITALY">Italy</span>. Como from <span class="persName-GGB">Lord Byron</span>, Lecco from <span class="persName-WBI">Brockedon</span>. <span class="persName-JMWT">Turner</span>. beginning of <span class="persName-SR">Rogers</span> memory<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_illus_glosses_contextual#CADENABBIAILLUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                37
                </span>
              </a></span></td>
               
               <td>0</td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCVILLAPLINIANAILLUS">
               
               <td>2</td>
               
               <td>
                  <span class="title-composite-JRVILLAPLINIANACOMP"><span class="placeName-VILLAPLINIANINA">Villa plin</span> [i.e., Villa pliniana]</span>
                                  (see also <a href="#ACCOUNTTOCVILLAPLINIANA">Table 1</a>)
                                </td>
               
               <td>Villa Poro. <span class="geogName-CASCATADNESSO">Cascata di Nesso</span>. <span class="persName-SP">Prouts</span> port of Como Como from Road to <span class="placeName-ERBA">Erba</span>. <span class="persName-WBI">Brockedon</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_illus_glosses_contextual#VILLAPLINIANAILLUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                38
                </span>
              </a></span></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCMILANILLUS">
               
               <td>4</td>
               
               <td>
                  <span class="title-composite-JRMILANCOMP">
                     <span class="placeName-MILAN">Milan</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCMILAN">Table 1</a>)
                                </td>
               
               <td><span class="del-strikethrough">the cathed</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_illus_glosses_contextual#MILANILLUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                39
                </span>
              </a></span></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCDUOMOILLUS">
               
               <td>2</td>
               
               <td>
                  <span class="title-composite-JRDUOMOMILANCOMP">
                     <span class="placeName-building-DUOMOMILAN">The duomo</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCDUOMO">Table 1</a>)
                                </td>
               
               <td>2 of the cathedral<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_illus_glosses_contextual#MILANDUOMOILLUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                40
                </span>
              </a></span></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCCORSOILLUS">
               
               <td>3</td>
               
               <td>
                  <span class="title-composite-JRCORSOMILANCOMP">
                     <span class="placeName-building-PORTAVENEZIA">The corso</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCCORSO">Table 1</a>)
                                </td>
               
               <td>The town with cathedral recollected<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_illus_glosses_contextual#MILANCORSOILLUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                41
                </span>
              </a></span></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCCERTOSAILLUS">
               
               <td>4</td>
               
               <td>
                  <span class="title-composite-JRTHERCERTOSACOMP">
                     <span class="placeName-building-CERTOSA">The certosa</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCCERTOSA">Table 1</a>)
                                </td>
               
               <td></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCAPPENINESILLUS">
               
               <td>0</td>
               
               <td>
                  <span class="title-composite-JRTHEAPPENINESCOMP"><span class="geogName-APPENINES">Appenines</span>.</span>
                                  (see also <a href="#ACCOUNTTOCAPPENINES">Table 1</a>)
                                </td>
               
               <td>mediterranean. 3 among the Appenines<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_illus_glosses_contextual#APPENINESILLUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                42
                </span>
              </a></span></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCGENOAILLUS">
               
               <td>1</td>
               
               <td>
                  <span class="title-composite-JRGENOACOMP">
                     <span class="placeName-GENOA">Genoa</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCGENOA">Table 1</a>)
                                </td>
               
               <td><span class="persName-WBI">Brokedons</span> Martello Tower.</td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCMARENGOILLUS">
               
               <td>1</td>
               
               <td>
                  <span class="title-composite-JRMARENGOCOMP">
                     <span class="placeName-MARENGO">Marengo</span>
                     </span>
                                   (see also <a href="#ACCOUNTTOCMARENGO">Table 1</a>)
                                </td>
               
               <td><span class="persName-SR">Rogers</span>. view of <span class="geogName-THEALPS">the Alps</span> near <span class="placeName-TURIN">Turin</span> ditto of the <span class="geogName-APPENINES">Appenines</span>.</td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCTURINILLUS">
               
               <td>2</td>
               
               <td>
                  <span class="title-composite-JRTURINCOMP">
                     <span class="placeName-TURIN">Turin</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCTURIN">Table 1</a>)
                                </td>
               
               <td><span class="persName-WBI">Brockedons</span> <span class="placeName-TURIN">Turin</span>. My view.</td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCNOVARAILLUS">
               
               <td>2</td>
               
               <td>
                  <span class="title-composite-JRNOVARACOMP">
                     <span class="placeName-NOVARA">Novara</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCNOVARA">Table 1</a>)
                                </td>
               
               <td><span class="geogName-MONTEROSA">Mont Rosa</span>, From Baths of Vallegio,</td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCMAGGIOREILLUS">
               
               <td><span class="del-strikethrough">1</span></td>
               
               <td>
                  <span class="title-composite-JRMAGGIORECOMP">
                     <span class="geogName-LAKEMAGGIORE">Maggiore</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCMAGGIORE">Table 1</a>)
                                </td>
               
               <td>On <span class="geogName-LAKEMAGGIORE">Lake of Maggiore</span> [Illegible] my own <span class="persName-WBI">Brockedon</span> with Carlo .<span class="del-strikethrough">???</span> Mary's <span class="placeName-BORROMEANISLANDS">Borromean isles</span>. <span class="geogName-MONTEROSA">Monte Rosa</span> from near Lou??. <span class="persName-WBI">Brockedon</span>.</td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCMADONNADELMONTEILLUS">
               
               <td>4</td>
               
               <td>
                  <span class="title-composite-JRTHEMADONNADELMONTECOMP"><span class="geogName-MADONNADELMONTE">Madonna</span> [i.e., Madonna del monte]</span>
                                  (see also <a href="#ACCOUNTTOCMADONNADELMONTE">Table 1</a>)
                                </td>
               
               <td></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCDOMODOSSOLAILLUS">
               
               <td>0</td>
               
               <td>
                  <span class="title-composite-JRDOMODOSSOLACOMP">
                     <span class="placeName-DOMODOSSOLA">Domo dʼOssola</span>
                     </span> (see also <a href="#ACCOUNTTOCDOMODOSSOLA">Table 1</a>)
                                </td>
               
               <td><span class="placeName-">Isola bella</span>. <span class="persName-SR">Rogers</span>. <span class="placeName-">Domo dʼossola</span>. from <span class="persName-WBI">Brockedon</span> (not from defile of <span class="geogName-SIMPLON">Simplon</span>) My own view with crags<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_illus_glosses_contextual#DOMODOSSOLAILLUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                43
                </span>
              </a></span></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCFAREWELLTOITALYILLUS">
               
               <td>0</td>
               
               <td>
                  <span class="title-composite-JRFAREWELLTOITALYCOMP">Farewell</span>
                                  (see also <a href="#ACCOUNTTOCFAREWELLTOITALY">Table 1</a>)
                                </td>
               
               <td><span class="persName-WBI">Brockedon</span> from defile with <span class="placeName-DOMODOSSOLA">Domo d'Ossola</span>. Entrance to Gondo Gallery. vignette. my own two.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_illus_glosses_contextual#FAREWELLTOITALYILLUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                44
                </span>
              </a></span></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCTHEGLACIERSILLUS">
               
               <td>2</td>
               
               <td>
                  <span class="title-composite-JRTHEGLACIERSCOMP">Glaciers</span>
                                  (see also <a href="#ACCOUNTTOCTHEGLACIERS">Table 1</a>)
                                </td>
               
               <td><span class="persName-WBI">Brockedon</span> Defile of Dovedro looking back. <span class="geogName-BERNESEALPS">Bernese Alps</span> from Simplon. An adventure rogers<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_illus_glosses_contextual#THEGLACIERSILLUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                45
                </span>
              </a></span></td>
               
               <td>—1</td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCBRIEGILLUS">
               
               <td>4</td>
               
               <td>
                  <span class="title-composite-JRBRIEGCOMP">
                     <span class="placeName-BRIEG">Brieg</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCBRIEG">Table 1</a>)
                                </td>
               
               <td>My recollection — 3. The glaciers of the <span class="geogName-RHONE">Rhone</span>.<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_illus_glosses_contextual#BRIEGILLUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                46
                </span>
              </a></span></td>
               
               <td>— 2</td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCTOURTMANILLUS">
               
               <td>2</td>
               
               <td><span class="title-composite-"><span class="placeName-TURTMANN">Tourtman</span></span>
                                 (see also <a href="#ACCOUNTTOCTOURTMAN">Table 1</a>)
                                </td>
               
               <td>Waterfall, my own volcano view<span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_illus_glosses_contextual#TURTMANNILLUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                47
                </span>
              </a></span></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCMARTIGNYILLUS">
               
               <td>2</td>
               
               <td>
                  <span class="title-composite-JRMARTIGNYCOMP">
                     <span class="placeName-MARTIGNY">Martigny</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCMARTIGNY">Table 1</a>)
                                </td>
               
               <td><span class="persName-SR">Rogers</span>. The <span class="geogName-RHONEVALLEY">valley of Rhône</span> above, <span class="placeName-MARTIGNY">Martigny</span> from <span class="persName-WBI">Brockedon</span><span class="gloss-inline">
          <a href="https://erm.selu.edu/glosses/account_of_a_tour_on_the_continent_toc_illus_glosses_contextual#MARTIGNYILLUSGLOSS" target="_blank" class="inactive">
          
          
                <span class="gloss-contextual">
                48
                </span>
              </a></span></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCTHEASCENTILLUS">
               
               <td>1</td>
               
               <td>
                  <span class="title-composite-JRTHEASCENTCOMP">Ascent</span>
                                  (see also <a href="#ACCOUNTTOCTHEASCENT">Table 1</a>)
                                </td>
               
               <td><span class="persName-WBI">Brockedons</span> [Illegible] of <span class="placeName-SAINTPIERRE">St. Pierre</span></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCSTBERNARDILLUS">
               
               <td>0</td>
               
               <td>
                  <span class="title-composite-JRGRANDSTBERNARDCOMP"><span class="geogName-STBERNARD">great St B</span> [i.e., The Grand St. Bernard]</span>
                                  (see also <a href="#ACCOUNTTOCSTBERNARD">Table 1</a>)
                                </td>
               
               <td></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCSAINTMAURICEILLUS">
               
               <td>1</td>
               
               <td>
                  <span class="title-composite-JRSAINTMAURICECOMP">
                     <span class="placeName-SAINTMAURICE">St. Maurice</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCSAINTMAURICE">Table 1</a>)
                                </td>
               
               <td></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCLAKEOFGENEVAILLUS">
               
               <td>3</td>
               
               <td>
                  <span class="title-composite-JRTHELAKEOFGENEVACOMP"><span class="geogName-LAKEGENEVA">lake of Gen</span> [i.e., The Lake of Geneva]</span>
                                  (see also <a href="#ACCOUNTTOCLAKEOFGENEVA">Table 1</a>)
                                </td>
               
               <td></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCCHILLONILLUS">
               
               <td>2</td>
               
               <td>
                  <span class="title-composite-JRCHILLONCASTLECOMP">
                     <span class="placeName-building-CHILLONCASTLE">Chillon</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCCHILLON">Table 1</a>)
                                </td>
               
               <td></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCLAUSANNEILLUS">
               
               <td>3</td>
               
               <td>
                  <span class="title-composite-JRLAUSANNECOMP">
                     <span class="placeName-LAUSANNE">Lausanne</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCLAUSANNE">Table 1</a>)
                                </td>
               
               <td></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCFRIBOURGILLUS">
               
               <td><span class="del-strikethrough">3</span></td>
               
               <td>
                  <span class="title-composite-JRFRIBOURGCOMP">
                     <span class="placeName-FRIBOURG">Fribourg</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCFRIBOURG">Table 1</a>)
                                </td>
               
               <td></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCBERNEILLUS">
               
               <td>2</td>
               
               <td>
                  <span class="title-composite-JRBERNECOMP">
                     <span class="placeName-BERNE">Berne</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCBERNE">Table 1</a>)
                                </td>
               
               <td></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCTHUNILLUS">
               
               <td>3</td>
               
               <td>
                  <span class="title-composite-JRTHUNCOMP">
                     <span class="placeName-THUN">Thun</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCTHUN">Table 1</a>)
                                </td>
               
               <td></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCINTERLAKENILLUS">
               
               <td>3</td>
               
               <td>
                  <span class="title-composite-JRINTERLAKENCOMP">
                     <span class="placeName-INTERLAKEN">Interlaken</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCINTERLAKEN">Table 1</a>)
                                </td>
               
               <td></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCJUNGFRAUILLUS">
               
               <td>2</td>
               
               <td>
                  <span class="title-composite-JRJUNGFRAUCOMP">
                     <span class="placeName-JUNGFRAU">Jungfrau</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCJUNGFRAU">Table 1</a>)
                                </td>
               
               <td></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCGIESBACHILLUS">
               
               <td>0</td>
               
               <td>
                  <span class="title-composite-JRGIESSBACHFALLSCOMP">
                     <span class="geogName-GIESSBACHFALLS">The Giesbach</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCGIESBACH">Table 1</a>)
                                </td>
               
               <td></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCLUCERNEILLUS">
               
               <td>0</td>
               
               <td>
                  <span class="title-composite-JRLUCERNECOMP">
                     <span class="placeName-LUCERNE">Lucerne</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCLUCERNE">Table 1</a>)
                                </td>
               
               <td></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCAARTILLUS">
               
               <td>3</td>
               
               <td>
                  <span class="title-composite-JRARTHCOMP">
                     <span class="placeName-ARTH">Aart</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCAART">Table 1</a>)
                                </td>
               
               <td></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCRIGIILLUS">
               
               <td>1</td>
               
               <td>
                  <span class="title-composite-JRRIGICOMP">
                     <span class="geogName-MONTRIGI">Rigi</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCRIGI">Table 1</a>)
                                </td>
               
               <td></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCGOLDAUILLUS">
               
               <td>4</td>
               
               <td>
                  <span class="title-composite-JRGOLDAUCOMP">
                     <span class="placeName-GOLDAU">Goldau</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCGOLDAU">Table 1</a>)
                                </td>
               
               <td></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCSCHWYTZILLUS">
               
               <td></td>
               
               <td>
                  <span class="title-composite-JRSCHWYTZCOMP">
                     <span class="placeName-SCHWYZ">Schwytz</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCSCHWYTZ">Table 1</a>)
                                </td>
               
               <td></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCEINSIDELNILLUS">
               
               <td>3</td>
               
               <td>
                  <span class="title-composite-JREINSIEDELNCOMP">
                     <span class="placeName-EINSIEDELN">Einsideln</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCEINSIDELN">Table 1</a>)
                                </td>
               
               <td></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCLAKEOFZURICHILLUS">
               
               <td>4</td>
               
               <td>
                  <span class="title-composite-JRLAKEOFZURICHCOMP">
                     <span class="geogName-LAKEZURICH">Lake of Zurich</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCLAKEOFZURICH">Table 1</a>)
                                </td>
               
               <td></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCBASLEILLUS">
               
               <td>3</td>
               
               <td>
                  <span class="title-composite-JRBASLECOMP">
                     <span class="placeName-BASLE">Basle</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCBASLE">Table 1</a>)
                                </td>
               
               <td></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCTHERHINEILLUS">
               
               <td>2</td>
               
               <td>
                  <span class="title-composite-JRTHERHINECOMP">
                     <span class="geogName-RHINE">Rhine, The</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCTHERHINE">Table 1</a>)
                                </td>
               
               <td></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCBALSTALLILLUS">
               
               <td>2</td>
               
               <td>
                  <span class="title-composite-JRBALSTALLCOMP">
                     <span class="placeName-BALSTHAL">Balstall</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCBALSTALL">Table 1</a>)
                                </td>
               
               <td></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCNEUFCHATELILLUS">
               
               <td>4</td>
               
               <td>
                  <span class="title-composite-JRNEUFCHATELCOMP">
                     <span class="placeName-NEUFCHATEL">Neufchatel</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCNEUFCHATEL">Table 1</a>)
                                </td>
               
               <td></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCGENEVAILLUS">
               
               <td>1</td>
               
               <td>
                  <span class="title-composite-JRGENEVACOMP">
                     <span class="placeName-GENEVA">Geneva</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCGENEVA">Table 1</a>)
                                </td>
               
               <td></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCCHAMOUNIILLUS">
               
               <td></td>
               
               <td>
                  <span class="title-composite-JRCHAMOUNICOMP">
                     <span class="placeName-CHAMOUNI">Chamouni</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCCHAMOUNI">Table 1</a>)
                                </td>
               
               <td></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCTHEMONTBLANCILLUS">
               
               <td>1</td>
               
               <td>
                  <span class="title-composite-JRMONTBLANCCOMP">
                     <span class="geogName-MONTBLANC">Mont Blanc</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCTHEMONTBLANC">Table 1</a>)
                                </td>
               
               <td></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCSOURCEOFTHEARVERONILLUS">
               
               <td>3</td>
               
               <td>
                  <span class="title-composite-JRSOURCEOFTHEARVERONCOMP">
                     <span class="geogName-ARVERON">Source of Arveron</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCSOURCEOFTHEARVERON">Table 1</a>)
                                </td>
               
               <td></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCTHEMORNINGILLUS">
               
               <td>4</td>
               
               <td>
                  <span class="title-composite-JRTHEMORNINGCOMP">The morning</span>
                                  (see also <a href="#ACCOUNTTOCTHEMORNING">Table 1</a>)
                                </td>
               
               <td></td>
               
               <td>Vol 4</td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCTHEMONTANVERTILLUS">
               
               <td>2</td>
               
               <td>
                  <span class="title-composite-JRMONTANVERTCOMP">
                     <span class="placeName-MONTANVERT">Montanvert</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCTHEMONTANVERT">Table 1</a>)
                                </td>
               
               <td></td>
               
               <td>×</td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCTHEMERDEGLACEILLUS">
               
               <td>3</td>
               
               <td>
                  <span class="title-composite-JRTHEMERDEGLACECOMP">
                     <span class="geogName-MERDEGLACE">Mer de Glace</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCTHEMERDEGLACE">Table 1</a>)
                                </td>
               
               <td></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCOURLASTWALKILLUS">
               
               <td>3</td>
               
               <td>
                  <span class="title-composite-JROURLASTWALKCOMP">Last walk</span>
                                  (see also <a href="#ACCOUNTTOCOURLASTWALK">Table 1</a>)
                                </td>
               
               <td></td>
               
               <td>‐ 1</td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCFAREWELLILLUS">
               
               <td>1</td>
               
               <td>
                  <span class="title-composite-JRFAREWELLCOMP">Farewell</span>
                                  (see also <a href="#ACCOUNTTOCFAREWELL">Table 1</a>)
                                </td>
               
               <td></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCLYONSILLUS">
               
               <td>1</td>
               
               <td>
                  <span class="title-composite-JRLYONSCOMP">
                     <span class="placeName-LYONS">Lyons</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCLYONS">Table 1</a>)
                                </td>
               
               <td></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCDIJONILLUS">
               
               <td>2</td>
               
               <td>
                  <span class="title-composite-JRDIJONCOMP">
                     <span class="placeName-DIJON">Dijon</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCDIJON">Table 1</a>)
                                </td>
               
               <td></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCPARISILLUS">
               
               <td></td>
               
               <td>
                  <span class="title-composite-JRPARISCOMP">
                     <span class="placeName-PARIS">Paris</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCPARIS">Table 1</a>)
                                </td>
               
               <td></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCPERELACHAISEILLUS">
               
               <td></td>
               
               <td>
                  <span class="title-composite-JRPERELACHAISECOMP">
                     <span class="placeName-PERELACHAISE">Perelachaise</span>
                     </span>
                                  (see also <a href="#ACCOUNTTOCPERELACHAISE">Table 1</a>)
                                </td>
               
               <td></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCTHELASTNIGHTINFRANCEILLUS">
               
               <td></td>
               
               <td>
                  <span class="title-composite-JRTHELASTNIGHTINFRANCECOMP">Last night</span>
                                  (see also <a href="#ACCOUNTTOCTHELASTNIGHTINFRANCE">Table 1</a>)
                                </td>
               
               <td></td>
               
               <td></td>
               </tr>
               <tr 
          class="data"
          id="ACCOUNTTOCOLDENGLANDILLUS">
               
               <td></td>
               
               <td>
                  <span class="title-composite-JROLDENGLANDCOMP">Old England</span>
                                  (see also <a href="#ACCOUNTTOCOLDENGLAND">Table 1</a>)
                                </td>
               
               <td></td>
               
               <td></td>
               </tr>
               </table>
            </div>
         
         
         </div>
   </div>
   <div id="TOCTABLE2" class="section">
      <span class="head" id="">Table 2</span>
      
      <div class="tablespace" id="account_toc_msviii_table_bottom">
         
         <table>
            
            <div class="head-table" id=""> Table 2. Account of a Tour on the Continent: Table of Contents Chart</div>
            
            <tr class="data">
               
               <td>7</td>
               
               <td>50</td>
               
               <td>96</td>
               
               <td>136</td>
               
               <td>69</td>
               </tr>
            
            <tr class="data">
               
               <td>4</td>
               
               <td>2</td>
               
               <td>1</td>
               
               <td>1</td>
               
               <td>56</td>
               </tr>
            
            <tr class="data">
               
               <td>4</td>
               
               <td>1</td>
               
               <td>1</td>
               
               <td>1</td>
               
               <td>125</td>
               </tr>
            
            <tr class="data">
               
               <td>2</td>
               
               <td>4</td>
               
               <td>2</td>
               
               <td>1</td>
               </tr>
            
            <tr class="data">
               
               <td>2</td>
               
               <td>1</td>
               
               <td>1</td>
               
               <td>3</td>
               </tr>
            
            <tr class="data">
               
               <td>1</td>
               
               <td>3</td>
               
               <td>1</td>
               
               <td>2</td>
               </tr>
            
            <tr class="data">
               
               <td>1</td>
               
               <td>2</td>
               
               <td>2</td>
               
               <td>4</td>
               </tr>
            
            <tr class="data">
               
               <td>1</td>
               
               <td>2</td>
               
               <td>4</td>
               
               <td>4</td>
               </tr>
            
            <tr class="data">
               
               <td>3</td>
               
               <td>4</td>
               
               <td>4</td>
               
               <td>4</td>
               </tr>
            
            <tr class="data">
               
               <td>1</td>
               
               <td>4</td>
               
               <td>1</td>
               
               <td>156</td>
               </tr>
            
            <tr class="data">
               
               <td>4</td>
               
               <td>4</td>
               
               <td>3</td>
               
               <td>125</td>
               </tr>
            
            <tr class="data">
               
               <td>4</td>
               
               <td>2</td>
               
               <td>3</td>
               
               <td>281</td>
               </tr>
            
            <tr class="data">
               
               <td>2</td>
               
               <td>2</td>
               
               <td>1</td>
               </tr>
            
            <tr class="data">
               
               <td>4</td>
               
               <td>2</td>
               
               <td>1</td>
               </tr>
            
            <tr class="data">
               
               <td>41</td>
               
               <td>3</td>
               
               <td>2</td>
               </tr>
            
            <tr class="data">
               
               <td>2</td>
               
               <td>4</td>
               
               <td>3</td>
               </tr>
            
            <tr class="data">
               
               <td>3</td>
               
               <td>3</td>
               
               <td>4</td>
               </tr>
            
            <tr class="data">
               
               <td>4</td>
               
               <td>1</td>
               
               <td>3</td>
               </tr>
            
            <tr class="data">
               
               <td>50</td>
               
               <td>2</td>
               
               <td>1</td>
               </tr>
            
            <tr class="data">
               
               <td></td>
               
               <td>96</td>
               
               <td>2</td>
               </tr>
            
            <tr class="data">
               
               <td></td>
               
               <td></td>
               
               <td>136</td>
               </tr>
            </table>
         </div>
      </div><div id="" class="pb"></div></div><?php require_once(ROOT_PATH."layout_includes/showcase_bottom.inc.php"); ?>