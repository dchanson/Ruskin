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
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:xi="http://www.w3.org/2001/XInclude" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:custom="http://whatever">
   
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset&#x003D;UTF-8">
      <title>Bibliography</title><?php require_once(ROOT_PATH."layout_includes/site_top.inc.php"); ?>
        <link href="<?php echo r_build_url("style.php?p=site_styles.scss"); ?>" rel="stylesheet" type="text/css">
      
   </head>
   
   
   <?php require_once(ROOT_PATH."layout_includes/navigation.inc.php"); ?>
   
   <div class="note" id="">
      
      <div class="page-title">Bibliography</div>
      
      <div id="" class="section">
         <span class="head-section">Manuscript Sources</span>
         
         <div id="" class="subsection">
            <span class="head-subsection">Works in Manuscript by Ruskin and the Ruskin Family Other Than the Manuscripts Constituting This Edition</span>
            
            <br/>
            <ul>
               <li class="bib-item" id="RFT48">Richardson, Mary (1815&#x2013;49). Diary (1833). Typescript transcription by Gertrude Atthill, granddaughter of Mary Bolding (n&#x00E9;e Richardson).
            RF T 48,
      Ruskin Foundation,
      Ruskin Library,
      Lancaster University,
      Lancaster, Lancashire,
      United Kingdom.</li>
               <li class="bib-item" id="JRBALSTALLANDMONTBLANC">Ruskin, John (1819&#x2013;1900). Balsthal; Mont Blanc from Geneva. Drawing, pen and ink, 8 1/2 &#x00D7; 5 inches.
            RF 1140,
      Ruskin Foundation,
      Ruskin Library,
      Lancaster University,
      Lancaster, Lancashire,
      United Kingdom.</li>
               <li class="bib-item" id="JRCHURCHDIJON1833">Ruskin, John (1819&#x2013;1900). Church. DIJON. Drawing, pen and ink; 11 3/4 &#x00D7; 8 1/4 inches.
            280/63,
      Abbot Hall Art Gallery,
      Kendal, Cumbria,
      United Kingdom.</li>
               <li class="bib-item" id="RFMS13">Ruskin, John (1819&#x2013;1900). Diary (1861, 1862, 1863, 1870).
            RF MS 13,
      Ruskin Foundation,
      Ruskin Library,
      Lancaster University,
      Lancaster, Lancashire,
      United Kingdom.</li>
               <li class="bib-item" id="JRHOTELDEVILLEBRUSSELSPML">Ruskin, John (1819&#x2013;1900). Hotel de Ville, Brussels (1833). Drawing, pencil, 12 &#x00D7; 9 inches.
            1974.49:174,
      Viljoen Bequest V.13,
      Pierpont Morgan Library,
      New York, New York,
      United States.</li>
               <li class="bib-item" id="JRHOTELDEVILLEBRUSSELSPROUT">Ruskin, John (1819&#x2013;1900). Hotel de Ville, Brussels, after Samuel Prout. Drawing, pen and ink, with pencil wash; 6 3/4 &#x00D7; 4 1/4 inches.
            RF 1449,
      Ruskin Foundation,
      Ruskin Library,
      Lancaster University,
      Lancaster, Lancashire,
      United Kingdom.</li>
               <li class="bib-item" id="JRHOTELDEVILLECASSEL">Ruskin, John (1819&#x2013;1900). Hotel de Ville, Cassel. Drawing, pencil, ink, ink wash, and bodycolor; 16 &#x00D7; 11 inches.
            RF 1198,
      Ruskin Foundation,
      Ruskin Library,
      Lancaster University,
      Lancaster, Lancashire,
      United Kingdom.</li>
               <li class="bib-item" id="JRHOTELDEVILLELOUVAINPROUT">Ruskin, John (1819&#x2013;1900). Hotel de Ville, Louvain, after Prout. Drawing, pencil on buff paper; 8 1/4 &#x00D7; 10 1/4 inches.
            1996P1450,
      Ruskin Foundation,
      Ruskin Library,
      Lancaster University,
      Lancaster, Lancashire,
      United Kingdom.</li>
               <li class="bib-item" id="ALSJRTOAW">Ruskin, John (1819&#x2013;1900). Letters: 40 ALS, 63 ALI, 3 AL, 3 AL/incomplete, 2 AL/copies, AL/copy/incomplete
                      to Alexander Dundas Ogilvy Wedderburn, 1874&#x2013;1888, undated; and 3 ALS to May Wedderburn, 11 February 1881, undated;
                      and AL from Wedderburn to Ruskin, undated.
            Box 5, Folders 2&#x2010;3,
      John Ruskin Collection, 1845&#x2013;1960, undated,
      Harry Ransom Center,
      University of Texas,
      Austin, Texas,
      United States.</li>
               <li class="bib-item" id="JRLAKEOFTHUN">Ruskin, John (1819&#x2013;1900). Near Oberhofen, Lake of Thun. Drawing, pen and ink; 8 1/2 &#x00D7; 5 inches.
            RF 1549,
      Ruskin Foundation,
      Ruskin Library,
      Lancaster University,
      Lancaster, Lancashire,
      United Kingdom.</li>
               <li class="bib-item" id="JRSIXVIEWS">Ruskin, John (1819&#x2013;1900). Sheet of Six Swiss and Italian Views (1833). Pen and ink on paper, 23 &#x00D7; 29.4 cm.
            52.361 (https://www.mfa.org/collections/object/sheet-of-six-swiss-and-italian-views-255603),
      Gift of Mrs. H. Ropes Cabot,
      Museum of Fine Arts,
      Boston, Massachusetts,
      United States.</li>
               <li class="bib-item" id="JRCHURCHATCOLOGNE">Ruskin, John (1819&#x2013;1900). Street in Cologne, &#x005B;?Cathedral&#x005D; behind. Pen and ink, 13 1/4 &#x00D7; 9 inches.
            RF 2041,
      Ruskin Foundation,
      Ruskin Library,
      Lancaster University,
      Lancaster, Lancashire,
      United Kingdom.</li>
               <li class="bib-item" id="JRVIEWOFCOBLENTZ">Ruskin, John (1819&#x2013;1900). View of Coblentz. Verso: Slight Architectural Sketch &#x005B;Baroque Gable with Volutes&#x005D; (1833). Pen and gray ink on paper, 9 5/16 &#x00D7; 14 3/4 inches (237 &#x00D7; 375 mm).
            1963.14 (https://www.themorgan.org/drawings/item/108911),
      Gift of Norman H. Strouse,
      Pierpont Morgan Library,
      New York, New York,
      United States.</li>
               <li class="bib-item" id="RFMS28">Ruskin, John James (1785&#x2013;1864). Account Book (1827&#x2013;45).
            RF MS 28,
      Ruskin Foundation,
      Ruskin Library,
      Lancaster University,
      Lancaster, Lancashire,
      United Kingdom.</li>
               <li class="bib-item" id="RFMS33A">Ruskin, John James (1785&#x2013;1864). Diary (1833&#x2013;46).
            RF MS 33A,
      Ruskin Foundation,
      Ruskin Library,
      Lancaster University,
      Lancaster, Lancashire,
      United Kingdom.</li>
               <li class="bib-item" id="MSL002-003">Ruskin, John James (1785&#x2013;1864). Letters (1829&#x2013;1862) to John Ruskin (1819&#x2013;1900).
            RF MSL 002/003,
      Ruskin Foundation,
      Ruskin Manuscript Letters,
      Ruskin Library,
      Lancaster University,
      Lancaster, Lancashire,
      United Kingdom.</li>
               <li class="bib-item" id="RFMSL5">Ruskin, John James (1785&#x2013;1864). Letters (1838&#x2013;1853) to W. H. Harrison (ca. 1792&#x2013;1878).
            RF MSL 003/004,
      Ruskin Foundation,
      Ruskin Manuscript Letters,
      Ruskin Library,
      Lancaster University,
      Lancaster, Lancashire,
      United Kingdom.</li>
            </ul>
            
         </div>
         
         
         <div id="" class="subsection">
            <span class="head-subsection">Works in Manuscript by Authors Other Than the Ruskins</span>
            
            
            
            United States
            New Brunswick
            Rutgers University
            Rutgers University Libraries, Special Collections and University Archives
            J. Alexander Symington Collection
            W. G. Collingwood (1854&#x2013;1932), Joan Severn (1846&#x2013;1924), and E. T. Cook (1857&#x2013;1919), ALS to Thomas J. Wise (1859&#x2013;1937)
            
            
            
            <br/>
            <ul>
               <li class="bib-item" id="GOODSPEEDALSBEINECKEMSIA">Charles E. Goodspeed (1867&#x2013;1950), ALS to Chauncey B. Tinker (1876&#x2013;1963).
            MS Vault Ruskin,
      Beinecke Rare Book and Manuscript Library,
      Yale University,
      New Haven,
      United States.</li>
               <li class="bib-item" id="VILJOENPAPERS">Helen Gill Viijoen (1899&#x2013;1974), &#x201C;Helen Gill Viljoen Papers&#x201D;.
            Pierpont Morgan Library,
      New York City,
      New York,
      United States.</li>
            </ul>
            
            
            
            
            
         </div>
         
      </div>
      
      
      <div id="" class="section">
         <span class="head-section">Published Sources</span>
         
         
         <div id="" class="subsection">
            <span class="head-subsection">Works by Ruskin in Published Editions</span>
            
            <br/>
            <ul>
               <li class="bib-item" id="POEMS1850">J.R. &#x005B;Ruskin, John&#x005D;. <i>Poems</i><text>. </text>1850. Collected.
               </li>
               <li class="bib-item" id="JRLINESCUMBERLAND1829">R&#x2014; &#x005B;Ruskin, John&#x005D;. &#x201C;Lines Written at the Lakes in Cumberland. &#x007C; <i>Derwentwater</i>&#x201D;, <i>The Spiritual Times</i>: <i>A Monthly Magazine</i>. 1.4
              (<span class="date-1829-08-01">1 August 1829</span>): 150.
            
               </li>
               <li class="bib-item" id="JRONSKIDDAWANDDERWENTWATER1830">R. &#x005B;Ruskin, John&#x005D;. &#x201C;On Skiddaw and Derwent&#x2010;Water&#x201D;, <i>The Spiritual Times</i>: <i>A Monthly Magazine</i>. 1.10
              (<span class="date-1830-02">February 1830</span>): 72&#x2013;73.
            
               </li>
               <li class="bib-item" id="JRDIARIES">Ruskin,

                      John. <i>The Diaries of John Ruskin</i><text>. </text>
        Ed.
      Joan Evans  John Howard, and John Howard Whitehouse.
      Oxford: Clarendon Press, 1956&#x2013;59. 
               </li>
               <li class="bib-item" id="JRDIARY1835">Ruskin,

                      John. <i>Diary Notebook of John Ruskin, <span class="date-1835">1835</span></i><text>. </text>The John Ruskin Digital Archive, Victorian Lives and Letters Consortium, 2011. http://tundra.csd.sc.edu/vllc/ruskin.  University of South Carolina, University Libraries, Digital Collections, 2011. http://digital.tcl.sc.edu/cdm/search/collection/vllc.  
               </li>
               <li class="bib-item" id="MPIELEC">Ruskin,

                      John. <a href="http://www.lancs.ac.uk/fass/ruskin/empi/index.htm" target="_blank"><i>An Electronic Edition of John Ruskin&#x02BC;s</i> Modern Painters I</a><text>. </text>
        Ed.
      Lawrence Woof  Ray, Ray Haslam  Roger, and Roger Garside.
      Ruskin Library, Lancaster University, 2002. http://www.lancs.ac.uk/fass/ruskin/empi/index.htm.  
               </li>
               <li class="bib-item" id="BRETONSEVENTEEN">Ruskin,

                      John. <i>From Seven to Seventeen: Poems by John Ruskin</i><text>. </text>
        Ed.
      Rob Breton  Alayna, Alayna Becker  Katrina, and Katrina Schurter.
      Sydney: Juvenilia Press, 2012. 
               </li>
               <li class="bib-item" id="DEARDENITERIAD">Ruskin,

                      John. <i>Iteriad, or Three Weeks among the Lakes</i><text>. </text>
        Ed.
      James S. Dearden.
      Newcastle upon Tyne: Frank Graham, 1969. 
               </li>
               <li class="bib-item" id="HANLEYHULLJRTOUR1835">Ruskin,

                      John. <i>John Ruskin&#x02BC;s Continental Tour 1835: The Written Records and Drawings</i><text>. </text>
        Ed.
      Keith Hanley  Caroline S., and Caroline S. Hull.
      Cambridge: Legenda, 2016. 
               </li>
               <li class="bib-item" id="JRLETTERSTOWARD">Ruskin,

                      John. <i>John Ruskin&#x02BC;s Letters to William Ward</i><text>. </text>With a short biography of William Ward by William C.  Ward .
        and an introduction by  Alfred Mansfield  Brooks.
        Boston: Marshall Jones Co., 1922. 
               </li>
               <li class="bib-item" id="JRLETTERSTOACOLLEGEFRIEND1894">Ruskin,

                      John. <i>Letters Addressed to a College Friend, during the Years <span class="date-1840-1845">1840&#x2013;1845</span></i><text>. </text>Orpington and London: George Allen, 1894. 
               </li>
               <li class="bib-item" id="JRLETTERS">Ruskin,

                      John. &#x201C;Letters of John Ruskin&#x201D;, <i>The Atlantic Monthly</i>. 93, 
              (<span class="date-1904">1904</span>): 577&#x2013;88,
                          797&#x2013;806.
            94, 
              (<span class="date-1904">1904</span>): 8&#x2013;19, 161&#x2013;70,
                          378&#x2013;88.
            
               </li>
               <li class="bib-item" id="JRLETTERSNORTON">Ruskin,

                      John. <i>Letters of John Ruskin to Charles Eliot Norton</i><text>. </text>
        Ed.
      Charles Eliot Norton.
      Boston: Houghton Mifflin, 1904. 
               </li>
               <li class="bib-item" id="JRMYFIRSTEDITOR1878">Ruskin,

                      John. &#x201C;My First Editor: An Autobiographical Reminiscence&#x201D;, <i>Dublin University Magazine</i>. 1 (n.s.), 
              (<span class="date-1878-04">April 1878</span>): 385&#x2013;91.
            
               </li>
               <li class="bib-item" id="JRPOEMS1882">Ruskin,

                      John. <i>Poems by John Ruskin</i><text>. </text>
        Ed.
      James Osborne Wright.
      New York: John Wiley &#x0026; Sons, 1882. 
               </li>
               <li class="bib-item" id="JRPOEMS1886">Ruskin,

                      John. <i>Poems by John Ruskin</i><text>. </text>
        Ed.
      James Osborne Wright.
      New York: John Wiley &#x0026; Sons, 1886. 
               </li>
               <li class="bib-item" id="JRPOEMS4D1891">Ruskin,

                      John. <i>The Poems of John Ruskin: Now First Collected from Original Manuscript and Printed Sources; and Edited, in Chronological Order, with Notes, Biographical and Critical</i><text>. </text>4<sup>o</sup>. 
        Ed.
      W. G. Collingwood.
      Orpington and London: George Allen, 1891. 
               </li>
               <li class="bib-item" id="JRPOEMS8D1891">Ruskin,

                      John. <i>The Poems of John Ruskin: Now First Collected from Original Manuscript and Printed Sources; and Edited, in Chronological Order, with Notes, Biographical and Critical</i><text>. </text>8<sup>o</sup>. 
        Ed.
      W. G. Collingwood.
      Orpington and London: George Allen, 1891. 
               </li>
               <li class="bib-item" id="JRPOETRYOFARCHITECTURE1893">Ruskin,

                      John. <i>The Poetry of Architecture: Or, The Architecture of the Nations of Europe Considered in Its Association with Natural Scenery and National Character</i><text>. </text>Orpington and London: George Allen, 1893. 
               </li>
               <li class="bib-item" id="RFL">Ruskin,

                      John. <i>The Ruskin Family Letters</i><text>. </text><i>The Correspondence of John James Ruskin, His Wife, and Their Son, John, <span class="date-1801-1843">1801&#x2013;1843</span></i><text>. </text>
        Ed.
      Van Akin Burd.
      Ithaca, N.Y.: Cornell University Press, 1973. 
               </li>
               <li class="bib-item" id="RUSKININITALY">Ruskin,

                      John. <i>Ruskin in Italy: Letters to His Parents, <span class="date-1845">1845</span></i><text>. </text>
        Ed.
      Harold I. Shapiro.
      Oxford: Clarendon Press, 1972. 
               </li>
               <li class="bib-item" id="RUSKINTHREELAKELANDPOEMS">Ruskin,

                      John. <i>Three Lakeland Poems</i><text>. </text>
        Ed.
      J. S. Dearden.
      Bembridge: Yellowsands Press, 1971. 
               </li>
               <li class="bib-item" id="JRTHREELETTERS1893">Ruskin,

                      John. <i>Three Letters and an Essay, <span class="date-1836-1841">1836&#x2013;1841</span>; Found in His Tutor&#x02BC;s Desk</i><text>. </text>
        Ed.
      Helen Pelham Dale.
      Orpington and London: George Allen, 1893. 
               </li>
               <li class="bib-item" id="TOURLAKES">Ruskin,

                      John. <i>A Tour to the Lakes in Cumberland</i><text>. </text><i>John Ruskin&#x02BC;s Diary for <span class="date-1830">1830</span></i><text>. </text>
        Ed.
      Van Akin Burd  James S., and James S. Dearden.
      Aldershot: Scolar, 1990. 
               </li>
               <li class="bib-item" id="WINNINGTONLETTERS">Ruskin,

                      John. <i>The Winnington Letters</i><text>. </text><i>John Ruskin&#x02BC;s Correspondence with Margaret Alexis Bell and the Children at Winnington Hall</i><text>. </text>
        Ed.
      Van Akin Burd.
      Cambridge, Mass.: Belknap Press of Harvard University Press, 1969. 
               </li>
               <li class="bib-item" id="JRWORKSLE">Ruskin,

                      John. <i>The Works of John Ruskin</i><text>. </text><i>Library Edition</i><text>. </text>
        Ed.
      E. T. Cook  Alexander, and Alexander Wedderburn.
      London: George Allen, 1903&#x2013;12. 
               </li>
            </ul>
            
         </div>
         
         
         
         <div id="" class="subsection">
            <span class="head-subsection">Secondary Sources, along with Primary Sources in Published Editions of Authors Other Than Ruskin</span>
            
            <br/>
            <ul>
               <li class="bib-item" id="ACKERMANVILLA">Ackerman,

                      James S. <i>The Villa: Form and Ideology of Country Houses</i><text>. </text>Princeton: Princeton University Press, 1990. A. W. Mellon Lectures in the Fine Arts, National Gallery of Art, Washington, D.C., 1985; Bollingen Series no. 35, vol. 34.
               </li>
               <li class="bib-item" id="AIKINBARBAULDEVENINGS">Aikin,

                      John, and Anna Letitia Barbauld. <i>Evenings at Home; or, the Juvenile Budget Opened</i><text>. </text><i>Consisting of a Variety of Miscellaneous Pieces for the Instruction and Amusement of Young Persons</i><text>. </text>12th ed.. London: Baldwin, Cradock, and Joy; R. Hunter, 1819. 
               </li>
               <li class="bib-item" id="AIKINMEMOIR">Aikin,

                      Lucy. <i>Memoir of John Aikin, M.D., with a Selection of His Miscellaneous Pieces, Biographical, Moral, and Critical</i><text>. </text>London: Baldwin, Cradock, and Joy, 1823. 
               </li>
               <li class="bib-item" id="KAATZERAIX"><i>Aix&#x2010;la&#x2010;Chapelle et ses environs</i><text>. </text><i>Guide pour les &#x00E9;trangers</i><text>. </text>Aix&#x2010;la&#x2010;Chapelle: Veuve Kaatzer, n.d. &#x005B;ca. 1830&#x005D;. 
               </li>
               <li class="bib-item" id="ALMOTHERSMORNINGKISS">A.L.. &#x201C;A Mother&#x02BC;s Morning Kiss to Her Child&#x201D;, <i>London Literary Gazette, and Journal of Belles Lettres, Arts, Sciences, &#x0026;c.</i>. London,
            254
              (<span class="date-1821-12-01">1 December 1821</span>): 764.
            
               </li>
               <li class="bib-item" id="ALEXANDERDEFINING">Alexander,

                      Christine. &#x201C;Defining and Representing Literary Juvenilia&#x201D;, <i>The Child Writer from Austen to Woolf</i>. 
        Ed.
      Christine Alexander  Juliet, and Juliet McMaster.
      Cambridge,
            Cambridge University Press.
              
            
              (<span class="date-2005">2005</span>): 70&#x2013;97.
            
               </li>
               <li class="bib-item" id="ALEXANDEREARLYWRITINGS">Alexander,

                      Christine. <i>The Early Writings of Charlotte Brontë</i><text>. </text>Buffalo, N.Y.: Prometheus, 1983. 
               </li>
               <li class="bib-item" id="ALEXANDERPLAYANDAPPRENTICESHIP">Alexander,

                      Christine. &#x201C;Play and Apprenticeship: The Culture of Family Magazines&#x201D;, <i>The Child Writer from Austen to Woolf</i>. 
        Ed.
      Christine Alexander  Juliet, and Juliet McMaster.
      Cambridge,
            Cambridge University Press.
              
            
              (<span class="date-2005">2005</span>): 31&#x2013;50.
            
               </li>
               <li class="bib-item" id="ALEXANDERREADERSANDWRITERS">Alexander,

                      Christine. &#x201C;Readers and Writers: <i>Blackwood&#x02BC;s</i> and the Brontës&#x201D;, <i>The Gaskell Society Journal</i>. 8, 
              (<span class="date-1994">1994</span>): 54&#x2013;69.
            
               </li>
               <li class="bib-item" id="ALEXANDERBRONTEANNUALS">Alexander,

                      Christine. &#x201C;&#x2018;That Kingdom of Gloom&#x2019;: Charlotte Brontë, the Annuals, and the Gothic&#x201D;, <i><span class="date-1801-1900">Nineteenth&#x2010;Century</span> Literature</i>. 47.4
              (<span class="date-1993-03">March 1993</span>): 409&#x2013;36.
            
               </li>
               <li class="bib-item" id="ALEXANDERMCMASTERINTRODUCTION">Alexander,

                      Christine, and Juliet McMaster. &#x201C;Introduction&#x201D;, <i>The Child Writer from Austen to Woolf</i>. 
        Ed.
      Christine Alexander  Juliet, and Juliet McMaster.
      Cambridge,
            Cambridge University Press.
              
            
              (<span class="date-2005">2005</span>): 1&#x2013;7.
            
               </li>
               <li class="bib-item" id="ALLENPAULMELLONSLEGACY">Allen,

                      Brian. &#x201C;Paul Mellon and Scholarship in the History of British Art&#x201D;, <i>Paul Mellon&#x02BC;s Legacy</i>: <i>A Passion for British Art</i>. 
        Ed.
      Brian Allen  John, John Baskett  Jules David, Jules David Prown  William, William Reese  Duncan, and Duncan Robinson.
      New Haven, Conn.,
            Yale University Press.
              
            
              (<span class="date-2007">2007</span>). 
               </li>
               <li class="bib-item" id="ALTICKSHOWSOFLONDON">Altick,

                      Richard D. <i>The Shows of London</i><text>. </text>Cambridge, Mass.: Belknap Press of Harvard University Press, 1978. 
               </li>
               <li class="bib-item" id="ANDREWSPICTURESQUE">Andrews,

                      Malcolm. <i>The Search for the Picturesque</i><text>. </text><i>Landscape Aesthetics and Tourism in Britain, <span class="date-1760-1800">1760&#x2013;1800</span></i><text>. </text>Stanford: Stanford University Press, 1989. 
               </li>
               <li class="bib-item" id="ANNUALSOFFORMERDAYS">&#x201C;The Annuals of Former Days&#x201D;, <i>Bookseller</i>. London,
            
              (<span class="date-1858-11-29">29 November 1858</span>): 493&#x2013;99.
            
               </li>
               <li class="bib-item" id="ANSTRUTHERCOVENTRYPATMORESANGEL">Anstruther,

                      Ian. <i>Coventry Patmore&#x02BC;s Angel</i><text>. </text><i>A Study of Coventry Patmore, His Wife Emily, and &#x201C;The Angel in the House&#x201D;</i><text>. </text>London: Haggerston Press, 1992. 
               </li>
               <li class="bib-item" id="BURTONDNB">Arnold,

                      Dana. &#x201C;Burton, Decimus (<span class="date-1800-1881">1800&#x2013;1881</span>)&#x201D;, <i>Oxford Dictionary of National Biography Online Edition</i>. http://www.oxforddnb.com/view/article/4125 (accessed <span class="date-2012-03-30">22 April 2017</span>),
            Oxford University Press.
              
            
              (<span class="date-2004">2004</span>). 
               </li>
               <li class="bib-item" id="ARNOLDFAMILYAFFAIR">Arnold,

                      Dana. &#x201C;A Family Affair: Decimus Burton&#x02BC;s Designs for the Regent&#x02BC;s Park Villas&#x201D;, <i>The Georgian Villa</i>. 
        Ed.
      Dana Arnold.
      Stroud,
            Alan Sutton.
              
            
              (<span class="date-1996">1996</span>): 105&#x2013;17.
            
               </li>
               <li class="bib-item" id="HORNORDNB">Baigent,

                      Elizabeth. &#x201C;Hornor, Thomas (<span class="date-1785-1844">1785&#x2013;1844</span>)&#x201D;, <i>Oxford Dictionary of National Biography Online Edition</i>. http://www.oxforddnb.com/view/article/41113 (accessed <span class="date-2012-03-30">22 April 2017</span>),
            Oxford University Press.
              
            
              (<span class="date-2004">2004</span>). 
               </li>
               <li class="bib-item" id="INGLISDNB">Baigent,

                      Elizabeth. &#x201C;Inglis, Henry David (<span class="date-1795-1835">1795&#x2013;1835</span>)&#x201D;, <i>Oxford Dictionary of National Biography Online Edition</i>. http://www.oxforddnb.com/view/article/14400 (accessed <span class="date-2014-06-15">15 June 2014</span>),
            Oxford University Press.
              
            
              (<span class="date-2004">2004</span>). 
               </li>
               <li class="bib-item" id="BAINGIFTBOOKILLUSTRATIONS">Bain,

                      Iain. &#x201C;Gift Book and Annual Illustrations: Some Notes on Their Production&#x201D;, <i>Literary Annuals and Gift Books</i>: <i>A Bibliography, <span class="date-1823-1903">1823&#x2013;1903</span></i>. 
        Ed.
      Frederick W. Faxon.
      Pinner, Middlesex,
            Private Libraries Association.
              
            
              (<span class="date-1973">1973</span>): 19&#x2013;25.
            Reprinted from <span class="date-1912">1912</span> edition.
            
               </li>
               <li class="bib-item" id="BAINPERTHSTEAM">Bain,

                      J. Colin. &#x201C;The Perth Steam Packet Company and the <i>Atholl:</i> An Example of the Life of an Early Steamship Company and Its Ship&#x201D;, <i>The Mariner&#x02BC;s Mirror</i>. 91.3
              (<span class="date-2005-08">August 2005</span>): 410&#x2013;20.
            
               </li>
               <li class="bib-item" id="BACKHOUSEBAPTISM">&#x201C;Baptisms at St Peter in the City of Liverpool&#x201D; (Register for <span class="date-1818-1819">1818&#x2013;1819</span>), Lancashire Online Parish Clerks. http://www.lan-opc.org.uk/Liverpool/Liverpool-Central/stpeter/baptisms_1819e.html (accessed <span class="date-2014-01-15">15 January 2014</span>),
            County of Lancashire, United Kingdom.
              
            
              (<span class="date">n.d.</span>). 
               </li>
               <li class="bib-item" id="BARBAULDPOEMS">Barbauld,

                      Anna Letitia. <i>The Poems of Anna Letitia Barbauld</i><text>. </text>
        Ed.
      William McCarthy  , and  .
      Athens: University of Georgia Press, 1994. 
               </li>
               <li class="bib-item" id="BARBAULDWORKS">Barbauld,

                      Anna Letitia. <i>The Works of Anna Lætitia Barbauld, with a Memoir</i><text>. </text>
        Ed.
      Lucy Aikin.
      London: Longman, Hurst, Rees, Orme, Brown, and Green, 1825. 
               </li>
               <li class="bib-item" id="SEQUELTOENQUIRY">Barker,

                      Nicolas, and John Collins. <i>A Sequel to &#x201C;An Enquiry into the Nature of Certain <span class="date-1801-1900">Nineteenth&#x2010;Century</span> Pamphlets&#x201D; by John Carter and Graham Pollard</i>:<i>The Forgeries of H. Buxton Forman and T. J. Wise Re&#x2010;Examined</i><text>. </text>London: Scolar, 1983. 
               </li>
               <li class="bib-item" id="BARNESMICHELANGELOSLASTJUDGMENT">Barnes,

                      Bernadine Ann. <i>Michelangelo&#x02BC;s Last Judgment: The Renaissance Response</i><text>. </text>Berkeley: University of California Press, 1998. 
               </li>
               <li class="bib-item" id="BARRETTBROWNINGEARLIERPOEMS1878">Barrett Browning,

                      Elizabeth. <i>The Earlier Poems of Elizabeth Barrett Browning, <span class="date-1826-1833">1826&#x2013;1833</span></i><text>. </text>
        Ed.
      Richard Herne Shepherd.
      London: Bartholomew Robson, 1878. 
               </li>
               <li class="bib-item" id="BARROWFAMILYJOURNEY">&#x005B;Barrow,

                      John&#x005D;. <i>A Family Tour through South Holland; up the Rhine; and across the Netherlands, to Ostend</i><text>. </text>London: John Murray, 1831. 
               </li>
               <li class="bib-item" id="BASIRECOLOSSEUMPLAN">Basire,

                      James. <i>Ground Plan of the Royal Colosseum, Regents Park, London</i> &#x005B;lithograph, <span class="date-1855">1855</span>&#x005D;
                  <text>. </text>British Library Online Gallery, n.d.. http://www.bl.uk/onlinegallery/onlineex/crace/g/007000000000014u00036000.html (accessed  19 May 2017) .  
               </li>
               <li class="bib-item" id="BATTENPLEASURABLEINSTRUCTION">Batten,

                      Charles L. <i>Pleasurable Instruction</i>: <i>Form and Convention in <span class="date-1701-1800">Eighteenth&#x2010;Century</span> Travel Literature</i><text>. </text>Berkeley and Los Angeles: University of California Press, 1978. 
               </li>
               <li class="bib-item" id="SCOTLANDILLUSTRATED">Beattie,

                      William. <i>Scotland Illustrated</i>: <i>In a Series of Views Taken Expressly for This Work</i><text>. </text>Illustrated by T. Allom,  W. H. Bartlett, and  H. M&#x2018;Culloch.
        London: George Virtue, 1838. 
               </li>
               <li class="bib-item" id="BEATTIESWITZERLANDILLUSTRATED">Beattie,

                      William. <i>Switzerland Illustrated</i>:<i>In a Series of Views Taken Expressly for This Work</i><text>. </text>Illustrated by W. H. Bartlett.
        London: George Virtue, 1836. 
               </li>
               <li class="bib-item" id="SMITHDNB">Bell,

                      Bill. &#x201C;Smith, George Murray (<span class="date-1824-1901">1824&#x2013;1901</span>)&#x201D;, <i>Oxford Dictionary of National Biography Online Edition</i>. http://www.oxforddnb.com/view/article/36138 (accessed <span class="date-2014-01-15">15 January 2014</span>),
            Oxford University Press.
              
            
              (<span class="date-2004">2004</span>). 
               </li>
               <li class="bib-item" id="BEAUTIES">Benedict,

                      Barbara M. &#x201C;The &#x2018;Beauties&#x2019; of Literature, <span class="date-1750-1820">1750&#x2013;1820</span>: Tasteful Prose and Fine Rhyme for Private Consumption&#x201D;, <i><span class="date-1650-1850">1650&#x2013;1850</span>: Ideas, Aesthetics and Inquiries in the Early Modern Era</i>. 1, 
              (<span class="date-1994">1994</span>): 317&#x2013;46.
            
               </li>
               <li class="bib-item" id="MISCELLANIES">Benedict,

                      Barbara M. &#x201C;Literary Miscellanies: The Cultural Mediation of Fragmented Feeling&#x201D;, <i>ELH</i>. 57.2
              (<span class="date-1990">1990</span>): 407&#x2013;30.
            
               </li>
               <li class="bib-item" id="BENNETTSTOTHARD">Bennett,

                      Shelley M. <i>Thomas Stothard</i>:<i>The Mechanisms of Art Patronage in England, circa <span class="date-1800">1800</span></i><text>. </text>Columbia: University of Missouri Press, 1988. 
               </li>
               <li class="bib-item" id="BENSONPRINTEDPICTURE">Benson,

                      Richard. <i>The Printed Picture</i><text>. </text>New York: Museum of Modern Art, 2008. 
               </li>
               <li class="bib-item" id="BIGELOWALPS">&#x005B;Bigelow,

                      Jacob&#x005D;. &#x201C;The Alps&#x201D;, <i>North American Review</i>. 38.83
              (<span class="date-1834-04-01">1 April 1834</span>): 405&#x2013;24.
            
               </li>
               <li class="bib-item" id="BIGLERPOLITICSOFGERMANPROTESTANTISM">Bigler,

                      Robert M. <i>The Politics of German Protestantism: The Rise of the Protestant Church Elite in Prussia, 1815-1848</i><text>. </text>Berkeley and Los Angeles: University of California Press, 1972. 
               </li>
               <li class="bib-item" id="BLACKBRITISHABROAD">Black,

                      Jeremy. <i>The British Abroad: The Grand Tour in the <span class="date-1701-1800">Eighteenth Century</span></i><text>. </text>Stroud, Gloucestershire: History Press, 2009 &#x005B;1992&#x005D;. 
               </li>
               <li class="bib-item" id="BLACKITALY">Black,

                      Jeremy. <i>Italy and the Grand Tour</i><text>. </text>New Haven, Conn.: Yale University Press, 2003. 
               </li>
               <li class="bib-item" id="BLAKEPOEMS1874">Blake,

                      William. <i>Poems of William Blake</i><text>. </text>
        Ed.
      Richard Herne Shepherd.
      London: Basil Montagu Pickering, 1874. 
               </li>
               <li class="bib-item" id="BLAKESONGS1866">Blake,

                      William. <i>Songs of Innocence and Experience, with Other Poems</i><text>. </text>
        Ed.
      Richard Herne Shepherd.
      London: Basil Montagu Pickering, 1866. 
               </li>
               <li class="bib-item" id="BOCKAUTHORSHIP">Bock,

                      Carol. &#x201C;Authorship, the Brontës, and <i>Fraser&#x02BC;s Magazine</i>: &#x2018;Coming Forward&#x2019; as an Author in Early Victorian England&#x201D;, <i>Victorian Literature and Culture</i>. 29, 
              (<span class="date-2001">2001</span>): 241&#x2013;66.
            
               </li>
               <li class="bib-item" id="BOCKOURPLAYS">Bock,

                      Carol. &#x201C;&#x2018;Our Plays&#x2019;: The Brontë Juvenilia&#x201D;, <i>The Cambridge Companion to the Brontës</i>. 
        Ed.
      Heather Glen.
      Cambridge,
            Cambridge University Press.
              
            
              (<span class="date-2002">2002</span>): 34&#x2013;52.
            
               </li>
               <li class="bib-item" id="OLIVERBOYDADVERTISEMENT">&#x201C;Books Published by Oliver &#x0026; Boyd, Edinburgh&#x201D;, <i>Edinburgh Review</i>. 42, 
              (<span class="date-1825-04-1825-08">April&#x2013;August 1825</span>): 1&#x2013;24.
            Separately paginated backmatter.
               </li>
               <li class="bib-item" id="BRAYSTOTHARD">Bray,

                      &#x005B;Anna Eliza&#x005D;. <i>Life of Thomas Stothard, R.A., with Personal Reminiscences</i><text>. </text>London: John Murray, 1851. 
               </li>
               <li class="bib-item" id="BRETONJUVENILIA">Breton,

                      Rob. &#x201C;John Ruskin&#x02BC;s Juvenilia and the Origins of the Pathetic Fallacy&#x201D;, <i>Journal of Pre&#x2010;Raphaelite Studies</i>. 22.1
              (<span class="date-2013">2013</span>): 17&#x2013;36.
            
               </li>
               <li class="bib-item" id="ROBINSONDNB">Brindle,

                      Steven. &#x201C;Robinson, Peter Frederick (<span class="date-1776-1858">1776&#x2013;1858</span>)&#x201D;, <i>Oxford Dictionary of National Biography Online Edition</i>. Oxford University Press.
              
            
              (<span class="date-2004">2004</span>). http://www.oxforddnb.com/view/article/23862 (accessed <span class="date-2012-03-30">22 April 2017</span>)
               </li>
               <li class="bib-item" id="BRISTOWVICTORIANPOETINTRO">Bristow,

                      Joseph. &#x201C;Introduction&#x201D;, <i>The Victorian Poet: Poetics and Persona</i>. 
        Ed.
      Joseph Bristow.
      Beckenham,
            Croom Helm.
              
            
              (<span class="date-1987">1987</span>): 1&#x2013;26.
            
               </li>
               <li class="bib-item" id="BROCKEDONILLUSTRATIONS">Brockedon,

                      William. <i>Illustrations of the Passes of the Alps, by Which Italy Communicates with France, Switzerland, and Germany</i><text>. </text>Illustrated by William Brockedon.
        London: Printed for the Author, 1828&#x2013;29. 
               </li>
               <li class="bib-item" id="BROCKEDONJOURNALS">Brockedon,

                      William. <i>Journals of Excursions in the Alps: The Pennine, Graian, Cottian, Rhetian, Lepontian, and Bernese</i><text>. </text>London: James Duncan, 1833. 
               </li>
               <li class="bib-item" id="BRONTESTALES">Brontë,

                      Anne, Charlotte, Emily, and Branwell. <i>Tales of Glass Town, Angria, and Gondal: Selected Writings</i><text>. </text>
        Ed.
      Christine Alexander.
      Oxford: Oxford University Press, 2010. 
               </li>
               <li class="bib-item" id="BRONTEVILLETTE">Brontë,

                      Charlotte. <i>Villette</i><text>. </text>
        Ed.
      Margaret Smith  Herbert, Herbert Rosengarten  Tim, and Tim Dolan.
      Oxford: Oxford University Press, 2000. 
               </li>
               <li class="bib-item" id="BROWNINGWORKS">Browning,

                      Robert. <i>The Complete Works of Robert Browning</i><text>. </text>
        Ed.
      Roma King.
      Athens: Ohio University Press, 1969&#x2013;2011. 
               </li>
               <li class="bib-item" id="BUDDEWALLRAFMUSEUM">Budde,

                      Rainer. <i>Wallraf&#x2010;Richartz Museum, Cologne</i><text>. </text>Translated by Elizabeth Thussu.
        London: Scala, 1993. 
               </li>
               <li class="bib-item" id="BULWERLYTTONPILGRIMS">&#x005B;Bulwer&#x2010;Lytton,

                      Edward&#x005D;. <i>The Pilgrims of the Rhine</i><text>. </text>London: Saunders and Otley, 1834. 
               </li>
               <li class="bib-item" id="RFLINTRO">Burd,

                      Van Akin. &#x201C;Introduction&#x201D;, Ruskin,

                      John. <i>The Ruskin Family Letters:The Correspondence of John James Ruskin, His Wife, and Their Son, John, <span class="date-1801-1843">1801&#x2013;1843</span></i>. 
        Ed.
      Van Akin Burd.
      Ithaca, N.Y.,
            Cornell University Press.
              
            2 vols., 
              (<span class="date-1973">1973</span>): 1:xv&#x2013;xvli.
            
               </li>
               <li class="bib-item" id="TOURLAKESINTRO">Burd,

                      Van Akin. &#x201C;Introduction&#x201D;, Ruskin,

                      John. <i>A Tour to the Lakes in Cumberland: John Ruskin&#x02BC;s Diary for <span class="date-1830">1830</span></i>. 
        Ed.
      Van Akin Burd  James S., and James S. Dearden.
      Aldershot,
            Scolar.
              
            
              (<span class="date-1990">1990</span>): 1&#x2013;??.
            
               </li>
               <li class="bib-item" id="WINNINGTONLETTERSINTRO">Burd,

                      Van Akin. &#x201C;Introduction&#x201D;, Ruskin,

                      John. <i>The Winnington Letters:John Ruskin&#x02BC;s Correspondence with Margaret Alexis Bell and the Children at Winnington Hall</i>. 
        Ed.
      Van Akin Burd.
      Cambridge, Mass.,
            Belknap Press of Harvard University Press.
              
            
              (<span class="date-1969">1969</span>): 1&#x2013;??.
            
               </li>
               <li class="bib-item" id="BURDRUSKINSTESTAMENT">Burd,

                      Van Akin. &#x201C;Ruskin&#x02BC;s Testament of His Boyhood Faith: <i>Sermons on the Pentateuch</i>&#x201D;, <i>New Approaches to Ruskin</i>. 
        Ed.
      Robert Hewison.
      London,
            Routledge &#x0026; Kegan Paul.
              
            
              (<span class="date-1981">1981</span>): 1&#x2013;16.
            
               </li>
               <li class="bib-item" id="BURNEJONESMEMORIALS">Burne&#x2010;Jones,

                      Georgiana. <i>Memorials of Edward Burne&#x2010;Jones</i><text>. </text>New York: Macmillan, 1904. 
               </li>
               <li class="bib-item" id="BURTSTATISTICALACCOUNT">Burt,

                      Alexander. &#x201C;Parish of Arngask&#x201D;, <i>The New Statistical Account of Scotland</i>. 10, 
              (<span class="date-1845">1845</span>): 882&#x2013;96.
            
               </li>
               <li class="bib-item" id="BUTLERSHIBBOLETH">Butler,

                      Janet. &#x201C;A Pre&#x2010;Raphaelite Shibboleth: Joseph&#x201D;, <i>Pre&#x2010;Raphaelite Review</i>. 1.3
              (<span class="date-1982">1982</span>): 78&#x2013;90.
            
               </li>
               <li class="bib-item" id="BUZARDBEATEN">Buzard,

                      James. <i>The Beaten Track: European Tourism, Literature, and the Ways to Culture, <span class="date-1800-1918">1800&#x2013;1918</span></i><text>. </text>Oxford: Clarendon Press, 1993. 
               </li>
               <li class="bib-item" id="CARDINALALPINEIDEAL">Cardinal,

                      Roger. &#x201C;Ruskin and the Alpine Ideal&#x201D;, <i>Ruskin in Perspective: Contemporary Essays</i>. 
        Ed.
      Carmen Casaliggi  Paul, and Paul March&#x2010;Russell.
      Newcastle upon Tyne,
            Cambridge Scholars Publishing.
              
            
              (<span class="date-2007">2007</span>): 157&#x2013;76.
            
               </li>
               <li class="bib-item" id="CARTERBOOKCOLLECTORS">Carter,

                      John. <i>Books and Book&#x2010;Collectors</i><text>. </text>London: Rupert Hart&#x2010;Davies, 1956. 
               </li>
               <li class="bib-item" id="CARTERTASTEANDTECHNIQUE">Carter,

                      John. <i>Taste and Technique in Book&#x2010;Collecting: A Study of Recent Developments in Great Britain and the United Statesc</i><text>. </text>Cambridge: Cambridge University Press, 1948 &#x005B;rpt. 1949&#x005D;. 
               </li>
               <li class="bib-item" id="CARTERPOLLARDENQUIRY">Carter,

                      John, and Graham Pollard. <i>An Enquiry into the Nature of Certain <span class="date-1801-1900">Nineteenth&#x2010;Century</span> Pamphlets</i><text>. </text>London: Constable, 1934. 
               </li>
               <li class="bib-item" id="CERVANTESQUIXOTELOCKHART">Cervantes,

                      Miguel de. <i>The History of the Ingenious Gentleman, Don Quixote of La Mancha</i><text>. </text>Translated by Peter Anthony Motteux.
        
        Ed.
      John Gibson Lockhart.
      Edinburgh: Constable, 1822. 
               </li>
               <li class="bib-item" id="CHADWICKSTOMERS">Chadwick,

                      Hubert. <i>St. Omers to Stonyhurst: A History of Two Centuries</i><text>. </text>London: Burns &#x0026; Oates, 1962. 
               </li>
               <li class="bib-item" id="CHANDLERSOUTHEYSGERMANSUBLIMITY">Chandler,

                      David. &#x201C;Southey&#x02BC;s &#x2018;German Sublimity&#x2019; and Coleridge&#x02BC;s &#x2018;Dutch Attempt&#x2019;&#x201D;, <i>Romanticism on the Net</i>. https://www.erudit.org/fr/revues/ron/2003-n32-33-ron769/009257ar/ (accessed <span class="date-2017-12-21">21 December 2017</span>),
            
              (<span class="date-2003-11-2004-02">November 2003&#x2013;February 2004</span>): 58&#x2013;66.
            
               </li>
               <li class="bib-item" id="CHANDLERNAPOLEON">Chandler,

                      David G. <i>Napoleon</i><text>. </text>Barnsley, South Yorkshire: Leo Cooper, 1973 &#x005B;rpt. 2001&#x005D;. 
               </li>
               <li class="bib-item" id="CHASEEROSANDPSYCHE">Chase,

                      Karen. <i>Eros and Psyche: The Representation of Personality in Charlotte Brontë, Charles Dickens, and George Eliot</i><text>. </text>New York: Methuen, 1984. 
               </li>
               <li class="bib-item" id="CHURCHHEADSWITZERLAND">Church,

                      Clive H., and Randolph C. Head. <i>A Concise History of Switzerland</i><text>. </text>Cambridge: Cambridge University Press, 2013. 
               </li>
               <li class="bib-item" id="CLARKELATIN">Clarke,

                      John. <i>An Introduction to the Making of Latin</i><text>. </text>Unknown. See <span class="persName-JSD">Dearden</span>, <span class="title-book-DEARDENRUSKINLIBRARY"><i>The Library of John Ruskin</i></span>, 73 (no. 530).
               </li>
               <li class="bib-item" id="CLARKEBOYSOWNBOOK">&#x005B;Clarke,

                      William&#x005D;. <i>The Boy&#x02BC;s Own Book: A Complete Encyclopaedia of All the Diversions, Athletic, Scientific, and Recreative, of Boyhood and Youth</i><text>. </text>London: Vizetelly, Branston, 183&#x2013;. 
               </li>
               <li class="bib-item" id="CLAYDENROGERSCONTEMPORARIES">Clayden,

                      P. W. <i>Rogers and His Contemporaries</i><text>. </text>London: Smith, Elder, 1889. 
               </li>
               <li class="bib-item" id="LAURIEDNB">Clayton,

                      Timothy, and Anita McConnell. &#x201C;Laurie, Robert (<span class="date-1755-1836">1755&#x2013;1836&#x201D;)</span>, <i>Oxford Dictionary of National Biography Online Edition</i>. http://www.oxforddnb.com/view/article/16134 (accessed <span class="date-2015-06-26">26 June 2015</span>),
            Oxford University Press.
              
            
              (<span class="date-2004">2004</span>). 
               </li>
               <li class="bib-item" id="CLEALSTORYCONGREGATIONALISM">Cleal,

                      Edward E. <i>The Story of Congregationalism in Surrey</i><text>. </text>Assisted by T. G. Crippen.
        London: James Clarke, 1908. 
               </li>
               <li class="bib-item" id="JPCSIMPLON">Cockburn,

                      Major &#x005B;James Pattison&#x005D;. <i>Views to Illustrate the Route of the Simplon</i><text>. </text>Drawn on Stone by J. &#x005B;D.&#x005D; Harding.
        London: Bodwell and Martin, 1822. 
               </li>
               <li class="bib-item" id="COHENFASHIONING">Cohen,

                      Michèle. <i>Fashioning Masculinity: National Identity and Language in the Eighteenth Century</i><text>. </text>London: Routledge, 1996. 
               </li>
               <li class="bib-item" id="PRIDEAUXBM">&#x201C;Col. W. F. Prideaux&#x201D;, The British Museum Collection Database. http://www.britishmuseum.org/research/search_the_collection_database/ term_details.aspx?bioId&#x003D;73561 (accessed <span class="date-2012-05-26">26 May 2012</span>),
            The British Museum Collection Online.
              
            
              (<span class="date-2012">2012</span>). 
               </li>
               <li class="bib-item" id="BRITONS">Colley,

                      Linda. <i>Britons: Forging the Nation, <span class="date-1707-1837">1707&#x2013;1837</span></i><text>. </text>New Haven, Conn.: Yale University Press, 1992. 
               </li>
               <li class="bib-item" id="WGCLIFEOFJR1893">Collingwood,

                      W. G. <i>The Life and Work of John Ruskin</i><text>. </text>London: Methuen, 1893. Cambridge, Mass.: Riverside, 1893. 
               </li>
               <li class="bib-item" id="WGCLIFEOFJR1900">Collingwood,

                      W. G. <i>The Life of John Ruskin</i><text>. </text>London: Methuen, 1900. Cambridge, Mass.: Riverside, 1902. 
               </li>
               <li class="bib-item" id="WGCRUSKINEXHIBITION1900">&#x005B;Collingwood,

                      W. G.&#x005D;. <i>Ruskin Exhibition, July 21 to Sept. 8, 1900</i><text>. </text>Rev. ed.. Ulverston: William Holmes, 1900. 
               </li>
               <li class="bib-item" id="SHEPHERDDNB">Collins,

                      J. F. R. &#x201C;Shepherd, Richard Herne (<span class="date-1840-1895">1840&#x2013;1895</span>)&#x201D;, <i>Oxford Dictionary of National Biography Online Edition</i>. http://www.oxforddnb.com/view/article/25337 (accessed <span class="date-2012-01-01">1 January 2012</span>),
            Oxford University Press.
              
            
              (<span class="date-2004">2004</span>). 
               </li>
               <li class="bib-item" id="COLLINSTWOFORGERS">Collins,

                      J. F. R. <i>The Two Forgers: A Biography of Harry Buxton Forman and Thomas James Wise</i><text>. </text>Aldershot: Scolar, 1992. 
               </li>
               <li class="bib-item" id="COLLINSEARLYPOEMSTENNYSON">Collins,

                      John Churton. <i>The Early Poems of Alfred Lord Tennyson</i><text>. </text>London: Methuen &#x0026; Co., 1900. 
               </li>
               <li class="bib-item" id="CONDERITALY">Conder,

                      Josiah. <i>Italy</i><text>. </text>London: James Duncan, 1831. 
               </li>
               <li class="bib-item" id="CONTINENTALANNUAL1832"><i>The Continental Annual, and Romantic Cabinet, for <span class="date-1832">1832</span></i><text>. </text>Illustrated by Samuel Prout.
        
        Ed.
      William Kennedy.
      London: Smith, Elder, 1831&#x2013;32. 
               </li>
               <li class="bib-item" id="COOKLIFEOFRUSKIN">Cook,

                      E. T. <i>The Life of John Ruskin</i><text>. </text>London: George Allen, 1912. 
               </li>
               <li class="bib-item" id="COOPERPATRIOT">Cooper,

                      J. Nicoll. &#x201C;Dissenters and National Journalism: <i>The Patriot</i> in the <span class="date-1830-1839">1830s</span>&#x201D;, <i>Victorian Periodicals Review</i>. 14.2
              (<span class="date-1981">Summer 1981</span>): 58&#x2013;66.
            
               </li>
               <li class="bib-item" id="COPEEARLYANALYSIS">Cope,

                      Jackson I. &#x201C;An Early Analysis of &#x2018;The Victorian Age&#x2019; in Literature&#x201D;, <i>Modern Language Notes</i>. 71.1
              (<span class="date-1956">1956</span>): 14&#x2013;17.
            
               </li>
               <li class="bib-item" id="COWPERPOEMS">Cowper,

                      William. <i>The Poems of William Cowper</i><text>. </text>
        Ed.
      John D. Baird  Charles, and Charles Ryskamp.
      Oxford: Clarendon Press, 1980&#x2013;95. 
               </li>
               <li class="bib-item" id="COXHEADSTOTHARD">Coxhead,

                      A. C. <i>Thomas Stothard, R.A.: An Illustrated Monograph</i><text>. </text>London: A. H. Bullen, 1906. 
               </li>
               <li class="bib-item" id="CRAIKHISTORY">Craik,

                      George Lillie. <i>A Compendious History of English Literature and of the English Language, from the Norman Conquest</i><text>. </text>New York: Charles Scribner, 1863. 
               </li>
               <li class="bib-item" id="CRAMSIEGRAPHIC">Cramsie,

                      Patrick. <i>The Story of Graphic Design: From the Invention of Writing to the Birth of Digital Design</i><text>. </text>London: British Library, 2010. 
               </li>
               <li class="bib-item" id="CRANECHATTERTON">Crane,

                      Julie. &#x201C;&#x2018;Wandering between Two Worlds&#x2019; The Victorian Afterlife of Thomas Chatterton&#x201D;, <i>Romantic Echoes in the Victorian Era</i>. 
        Ed.
      Andrew Radford  Mark, and Mark Sandy.
      Aldershot,
            Ashgate.
              
            
              (<span class="date-2008">2008</span>): 27&#x2013;37.
            
               </li>
               <li class="bib-item" id="CURRIEINTROHOGGANNUALS">Currie,

                      Janette. &#x201C;Introduction&#x201D;, Hogg,

                      James. <i>Contributions to Annuals and Gift&#x2010;Books</i>. 
        Ed.
      Janette Currie  Gillian, and Gillian Hughes.
      Edinburgh,
            Edinburgh University Press.
              
            
              (<span class="date-2006">2006</span>): xiii&#x2013;xli.
            
               </li>
               <li class="bib-item" id="CURTISBOTANICALMAGAZINE"><i>Curtis&#x02BC;s Botanical Magazine; or, Flower&#x2010;Garden Displayed: In Which the Most Ornamental Foreign Plants, Cultivated in the Open Ground, the Green&#x2010;House, and the Stove, Are Accurately Represented in Their Natural Colours</i><text>. </text>London: Sherwood, Neely, &#x0026; Jones, 1787&#x2013;. 
               </li>
               <li class="bib-item" id="DAFFORNESTANFIELD">Dafforne,

                      James. <i>Pictures by Clarkson Stanfield, R.A., with Descriptions and a Biographical Sketch of the Painter</i><text>. </text>Philadelphia: J. B. Lippincott, &#x005B;ca. 1870s&#x005D;. 
               </li>
               <li class="bib-item" id="DARWINWORKS">Darwin,

                      Erasmus. <i>The Poetical Works of Erasmus Darwin</i><text>. </text>London: J. Johnson, 1806. 
               </li>
               <li class="bib-item" id="DAYHISTORY">&#x005B;Day,

                      Thomas&#x005D;. <i>The History of Little Jack</i><text>. </text>London: J. Bysh, 1820. 
               </li>
               <li class="bib-item" id="DEARDENCUNLIFFE">Dearden,

                      James S. &#x201C;The Cunliffe Collection of Ruskin Drawings&#x201D;, <i>The Connoisseur</i>. 171.690
              (<span class="date-1969-08">August 1969</span>): 237&#x2013;40.
            
               </li>
               <li class="bib-item" id="DEARDENFIRSTPUB">Dearden,

                      James S. &#x201C;John Ruskin&#x02BC;s First Published Work&#x201D;, <i>Book Collector</i>. 42, 
              (<span class="date-1994">Summer 1994</span>): 299&#x2013;300.
            
               </li>
               <li class="bib-item" id="DEARDENRUSKINLIBRARY">Dearden,

                      James S. <i>The Library of John Ruskin</i><text>. </text>Oxford: Oxford Bibliographical Society, 2012. 
               </li>
               <li class="bib-item" id="DEARDENPOEMS1850">Dearden,

                      James S. &#x201C;The Production and Distribution of John Ruskin&#x02BC;s <i>Poems</i> <span class="date-1850">1850</span>&#x201D;, <i>Book Collector</i>. 17, 
              (<span class="date-1968">Summer 1968</span>): 151&#x2013;67.
            
               </li>
               <li class="bib-item" id="DEARDENRUSKINBB">Dearden,

                      James S. <i>Ruskin, Bembridge, and Brantwood: The Growth of the Whitehouse Collection</i><text>. </text>Staffordshire: Ryburn, 1994. 
               </li>
               <li class="bib-item" id="DEARDENRUSKINGALLERIES">Dearden,

                      James S. &#x201C;The <span class="persName-JR">Ruskin</span> Galleries at Bembridge School, Isle of Wight&#x201D;, <i>Bulletin of the John Rylands Library, Manchester</i>. 51.2
              (<span class="date-1969">Spring 1969</span>): 310&#x2013;47.
            
               </li>
               <li class="bib-item" id="DEARDENWISERUSKINI">Dearden,

                      James S. &#x201C;Wise and Ruskin I&#x201D;, <i>Book Collector</i>. 18, 
              (<span class="date-1969">Spring 1969</span>): 45&#x2013;56.
            
               </li>
               <li class="bib-item" id="DEARDENWISERUSKINII">Dearden,

                      James S. &#x201C;Wise and Ruskin II&#x201D;, <i>Book Collector</i>. 18, 
              (<span class="date-1969">Summer 1969</span>): 170&#x2013;88.
            
               </li>
               <li class="bib-item" id="WISERUSKINIII">Dearden,

                      James S. &#x201C;Wise and Ruskin III&#x201D;, <i>Book Collector</i>. 18, 
              (<span class="date-1969">Autumn 1969</span>): 318&#x2013;39.
            
               </li>
               <li class="bib-item" id="DICKINSONJOHNCARTER">Dickinson,

                      Donald C. <i>John Carter: The Taste and Technique of a Bookman</i><text>. </text>New Castle, Del.: Oak Knoll, 2004. 
               </li>
               <li class="bib-item" id="JOYCEDNB">Ditchfield,

                      G. M. &#x201C;Joyce, Jeremiah (<span class="date-1763-1816">1763&#x2013;1816</span>)&#x201D;, <i>Oxford Dictionary of National Biography Online Edition</i>. http://www.oxforddnb.com/view/article/15152 (accessed <span class="date-2015-10-23">23 October 2015</span>),
            Oxford University Press.
              
            
              (<span class="date-2004">2004</span>). 
               </li>
               <li class="bib-item" id="DORFMANBLAKE">Dorfman,

                      Deborah. <i>Blake in the <span class="date-1801-1900">Nineteenth Century</span>: His Reputation as a Poet from Gilchrist to Yeats</i><text>. </text>New Haven: Yale University Press, 1969. 
               </li>
               <li class="bib-item" id="DEMPSTERDNB">Du Toit,

                      Alexander. &#x201C;Dempster, Thomas (<span class="date-1579-1625">1579&#x2013;1625</span>)&#x201D;, <i>Oxford Dictionary of National Biography Online Edition</i>. http://www.oxforddnb.com/view/article/7473 (accessed <span class="date-2014-06-15">15 June 2014</span>),
            Oxford University Press.
              
            
              (<span class="date-2004">2004</span>). 
               </li>
               <li class="bib-item" id="EBELVOYAGEURENSUISSE">Ebel,

                      Johann Gottfried. <i><i>Manuel du Voyageur en Suisse</i></i><text>. </text>Paris: Audin, 1830&#x2013;31. 
               </li>
               <li class="bib-item" id="EBELTRAVELLERSGUIDE">Ebel,

                      Johann Gottfried. <i>The Traveller&#x02BC;s Guide through Switzerland . . . with a Complete Atlas, Comprehending Keller&#x02BC;s Map, Panoramic Views of the Mountains, &#x0026;c.</i><text>. </text>Arranged and Improved by Daniel Wall.
        London: Samuel Leigh, 1820. 
               </li>
               <li class="bib-item" id="EDGEWORTHHARRYANDLUCYCONCLUDED">Edgeworth,

                      Maria. <i>Harry and Lucy Concluded: Being the Last Part of Early Lessons</i><text>. </text>London: R. Hunter; Baldwin, Cradock, and Joy, 1825. 
               </li>
               <li class="bib-item" id="EDGEWORTHWORKS">Edgeworth,

                      Maria. <i>The Novels and Selected Works of Maria Edgeworth</i><text>. </text>
        Ed.
      Marilyn Butler.
      London: Pickering &#x0026; Chatto, 2003. 
               </li>
               <li class="bib-item" id="EDGEWORTHADDRES">Edgeworth,

                      Richard Lovell. &#x201C;Address to Mothers&#x201D;, Edgeworth,

                      Maria. <i>Frank: A Book for Boys</i>. New ed.. Baltimore,
            Kelly and Piet.
              
            
              (<span class="date-1868">1868</span>): 3&#x2013;18.
            
               </li>
               <li class="bib-item" id="EMERSONGENESISOFINVENTION">Emerson,

                      Sheila. <i>Ruskin: The Genesis of Invention</i><text>. </text>Cambridge: Cambridge University Press, 1993. 
               </li>
               <li class="bib-item" id="MATHESONENCHANTINGRUIN"><i>Enchanting Ruin: Tintern Abbey and Romantic Tourism in Wales</i><text>. </text>
        Ed.
      C. S. Matheson.
      University of Michigan, 2007. http://www.lib.umich.edu/enchanting-ruin-tintern-abbey-romantic-tourism-wales/introduction.html (accessed  8 May 2015 ).  
               </li>
               <li class="bib-item" id="LIEBERENCYCLOPEDIAAMERICANA"><i>Encyclopædia Americana: A Popular Dictionary of Arts, Sciences, Literature, History, Politics, and Biography, Brought Down to the Present Time; including a Copious Collection of Original Articles in American Biography; on the Basis of the Seventh Edition of the German Conversations&#x2010;Lexicon</i><text>. </text>Assisted by E. Wigglesworth, and   T. G.  Bradford .
        
        Ed.
      Francis Lieber.
      Philadelphia: Carey and Lea, 1829&#x2013;33. 
               </li>
               <li class="bib-item" id="ENFIELDSPEAKER">Enfield,

                      William. <i>The Speaker: Or, Miscellaneous Pieces, Selected from the Best English Writers, and Disposed under Proper Heads, with a View to Facilitate the Improvement of Youth in Reading and Speaking. To Which Are Prefixed Two Essays: I. On Elocution. II. On Reading Works of Taste</i><text>. </text>New ed., corrected and enlarged. London: J. Johnson, 1805. 
               </li>
               <li class="bib-item" id="ERICKSONECONOMY">Erickson,

                      Lee. <i>The Economy of Literary Form: English Literature and the Industrialization of Publishing, <span class="date-1800-1850">1800&#x2013;1850</span></i><text>. </text>Baltimore: Johns Hopkins University Press, 1996. 
               </li>
               <li class="bib-item" id="ETLINSYMBOLICSPACE">Etlin,

                      Richard A. <i>Symbolic Space: French Enlightenment Architecture and Its Legacy</i><text>. </text>Chicago: University of Chicago Press, 1994. 
               </li>
               <li class="bib-item" id="FAIRERCHATTERTON">Fairer,

                      David. &#x201C;Chatterton&#x02BC;s Poetic Afterlife, <span class="date-1770-1794">1770&#x2013;1794</span>: A Context for Coleridge&#x02BC;s <i>Monody</i>&#x201D;, <i>Thomas Chatterton and Romantic Culture</i>. 
        Ed.
      Nick Groom.
      Basingstoke,
            Palgrave Macmillan.
              
            
              (<span class="date-1999">1999</span>): 228&#x2013;52.
            
               </li>
               <li class="bib-item" id="FAXONLITERARYANNUALS">Faxon,

                      Frederick Winthrop. <i>Literary Annuals and Gift&#x2010;Books: A Bibliography with a Descriptive Introduction</i><text>. </text>Boston: Boston Book Company, 1912. 
               </li>
               <li class="bib-item" id="FINLAYWESTERNWRITINGIMPLEMENTS">Finlay,

                      Michael. <i>Western Writing Implements in the Age of the Quill Pen</i><text>. </text>Carlisle: Plains Books, 1990. 
               </li>
               <li class="bib-item" id="FINLEYNATURESCOVENANT">Finley,

                      C. Stephen. <i>Nature&#x003E;&#x02BC;s Covenant: Figures of Landscape in Ruskin</i><text>. </text>University Park: Pennsylvania State University Press, 1992. 
               </li>
               <li class="bib-item" id="FINLEYLANDSCAPESOFMEMORY">Finley,

                      Gerald. <i>Landscapes of Memory: Turner as Illustrator to Scott</i><text>. </text>Berkeley and Los Angeles: University of California Press, 1980. 
               </li>
               <li class="bib-item" id="LAKESOFSCOTLAND">Fleming,

                      John, John M. Leighton, and John Wilson. <i>The Lakes of Scotland: A Series of Views, from Paintings Taken Expressly for the Work, by John Fleming, Esq.; with Historical and Descriptive Illustrations, by John M. Leighton; and Remarks on the Character of the Highland Scenery of Scotland, by John Wilson, Esq.</i><text>. </text>London: A. Fullarton, 1839. 
               </li>
               <li class="bib-item" id="FORD">Ford,

                      John. <i>Ackermann, <span class="date-1783-1983">1783&#x2013;1983</span>: The Business of Art</i><text>. </text>London: Ackermann, 1983. 
               </li>
               <li class="bib-item" id="FORGETMENOT1827"><i>Forget Me Not: A Christmas and New Year&#x02BC;s Present for MDCCCXXVII</i><text>. </text>
        Ed.
      Frederic Shoberl.
      London: R. Ackermann, 1827 &#x005B;ca. 1826&#x005D;. 
               </li>
               <li class="bib-item" id="HARRISFORGETMENOT"><i>Forget Me Not: A Hypertextual Archive of Ackermann&#x02BC;s <span class="date-1801-1900">Nineteenth&#x2010;Century</span> Literary Annual</i><text>. </text>
        Ed.
      Katherine D. Harris.
      Katherine D. Harris, Department of English and Comparative Literature, San Jose University, 2001. www.orgs.muohio.edu/anthologies/fmn/ (accessed  26 February 2014 ).  
               </li>
               <li class="bib-item" id="FRAISTATPOEMANDTHEBOOK">Fraistat,

                      Neil. <i>The Poem and the Book: Interpreting Collections of Romantic Poetry</i><text>. </text>Chapel Hill: University of North Carolina Press, 1985. 
               </li>
               <li class="bib-item" id="FRANCOISBELGIUM">François,

                      Pieter. &#x201C;Belgium&#x2014;Country of Liberals, Protestants, and the Free: British Views on Belgium in the <span class="date-1830-1860">Mid&#x2010;Nineteenth Century</span>&#x201D;, <i>Historical Research</i>. 81, 
              (<span class="date-2008-11">November 2008</span>): 663&#x2013;78.
            
               </li>
               <li class="bib-item" id="FRANCOIS1815">François,

                      Pieter. &#x201C;If It&#x02BC;s <span class="date-1815">1815</span>, This Must Be Belgium: The Origins of the Modern Travel Guide&#x201D;, <i>Book History</i>. 15, 
              (<span class="date-2012">2012</span>): 71&#x2013;92.
            
               </li>
               <li class="bib-item" id="FRANKLINWELTER">Franklin,

                      Wayne. &#x201C;The &#x2018;Library of America&#x2019; and the Welter of American Books&#x201D;, <i>Iowa Review</i>. 15.2
              (<span class="date-1985">Spring&#x2013;Summer 1985</span>): 176&#x2013;94.
            
               </li>
               <li class="bib-item" id="FREDEMANBROWN">Fredeman,

                      William E. &#x201C;Pre&#x2010;Raphaelite Novelist Manqu&#x00E9;: Oliver Madox Brown&#x201D;, <i>Bulletin of the John Rylands University Library of Manchester</i>. 51, 
              (<span class="date-1968">1968</span>): 27&#x2013;72.
            
               </li>
               <li class="bib-item" id="JENSENFRENCHEMPIRE"><i>The French Empire</i><text>. </text>
        Ed.
      Nathan D. Jensen.
      Nathan D. Jensen, 2005&#x2013;. http://www.frenchempire.net/about/ (accessed  1 April 2017 ).  
               </li>
               <li class="bib-item" id="FRIENDSHIPSOFFERING1835"><i>Friendship&#x02BC;s Offering; and Winter&#x02BC;s Wreath: A Christmas and New Year&#x02BC;s Present, for <span class="date-1835">1835</span></i><text>. </text>
        Ed.
      Thomas Pringle.
      London: Smith, Elder, 1835 &#x005B;ca. 1834&#x005D;. 
               </li>
               <li class="bib-item" id="FRIENDSHIPSOFFERING1836"><i>Friendship&#x02BC;s Offering; and Winter&#x02BC;s Wreath: A Christmas and New Year&#x02BC;s Present, for <span class="date-1836">1836</span></i><text>. </text>
        Ed.
      W. H. Harrison.
      London: Smith, Elder, 1836 &#x005B;ca. 1835&#x005D;. 
               </li>
               <li class="bib-item" id="FRIENDSHIPSOFFERING1826"><i>Friendship&#x02BC;s Offering: A Literary Album</i><text>. </text>
        Ed.
      Thomas K. Hervey.
      London: Lupton Relfe, 1826 &#x005B;ca. 1825&#x005D;. 
               </li>
               <li class="bib-item" id="BLESSINGTONBYRON">Gardiner,

                      Marguerite, Countess of Blessington. <i>Conversations of Lord Byron with the Countess of Blessington</i><text>. </text>London: Henry Colburn, 1834. 
               </li>
               <li class="bib-item" id="GARFINKLEDARWIN">Garfinkle,

                      Norton. &#x201C;Science and Religion in England, <span class="date-1760-1800">1760&#x2013;1800</span>: The Critical Response to the Work of Erasmus Darwin&#x201D;, <i>Journal of the History of Ideas</i>. 16, no. 3, 
              (<span class="date-1955-06">June 1955</span>): 376&#x2013;88.
            
               </li>
               <li class="bib-item" id="GILMOURROGERS">Gilmour,

                      J. S. L. &#x201C;The Early Editions of Rogers&#x02BC;s <i>Italy</i>&#x201D;, <i>The Library</i>. s5&#x2010;III.2
              (<span class="date-1948-09">September 1948</span>): 137&#x2013;40.
            
               </li>
               <li class="bib-item" id="GLENLAUNCHINGCLERICALCAREER">Glen,

                      Robert. &#x201C;Launching a Clerical Career in Late Georgian England: Nathaniel K. Pugsley&#x2014;from Hoxton Academy to Industrial Stockport&#x201D;, <i>United Reformed Church History Society</i>. 6.9
              (<span class="date-2001-10">October 2001</span>): 642&#x2013;72.
            
               </li>
               <li class="bib-item" id="GOLDSMITHGEOGRAPHY">Goldsmith,

                      J. <i>A Grammar of General Geography, for the Use of Schools and Young Persons</i><text>. </text>New ed. corrected and modernized. London: Longman, Rees, Orme, Brown and Green, 1831. 
               </li>
               <li class="bib-item" id="GOLDSMITHPARNELLPOEMS">Goldsmith,

                      Oliver, and Thomas Parnell. <i>Poems by Goldsmith and Parnell</i><text>. </text>London: W. Bulmer, 1804. 
               </li>
               <li class="bib-item" id="GOODSPEEDYANKEEBOOKSELLER">Goodspeed,

                      Charles E. <i>Yankee Bookseller: Being the Reminiscences of Charles E. Goodspeed</i><text>. </text>Boston: Houghton Mifflin, 1937. 
               </li>
               <li class="bib-item" id="GOODSPEEDCAT">Goodspeed&#x02BC;s Book Shop. <i>A Catalogue of Paintings, Drawings and Manuscripts by John Ruskin; to which Is Added a Description of Ruskin&#x02BC;s Celestial Globe and of a Few Books from His Library at Brantwood</i><text>. </text>7 Ashurbton Place, Boston, Mass., n. d.. 
               </li>
               <li class="bib-item" id="GORDONFITZGERALD">Gordon,

                      Edmund. &#x201C;C&#x02BC;est qu&#x02BC; elle a v&#x00E9;cu: Penelope Fitzgerald&#x02BC;s Juvenilia&#x2014;and the Long Silence That Followed It&#x201D;, <i>Times Literary Supplement</i>. 
              (<span class="date-2010-07-02">2 July 2010</span>): 14&#x2013;15.
            
               </li>
               <li class="bib-item" id="GRAVESDICTIONARY">Graves,

                      Algernon. <i>A Dictionary of Artists, Who Have Exhibited Works in the Principal London Exhibitions of Oil Paintings from <span class="date-1760-1880">1760 to 1880</span></i><text>. </text>London: George Bell and Sons, 1884. 
               </li>
               <li class="bib-item" id="GRAYPOEMS">Gray,

                      Thomas. <i>The Complete Poems of Thomas Gray: English, Latin, and Greek</i><text>. </text>
        Ed.
         J. R., and J. R. Hendrickson.
      Oxford: Clarendon Press, 1966. 
               </li>
               <li class="bib-item" id="GREENESMOLLETTTHEHISTORIAN">Greene,

                      Donald. &#x201C;Smollett the Historian: A Reappraisal&#x201D;, <i>Tobias Smollett: Bicentennial Essays Presented to Lewis M. Knapp</i>. 
        Ed.
      G. S. Rousseau  P.&#x2010;G., and P.&#x2010;G. Bouc&#x00E9;.
      New York,
            Oxford University Press.
              
            
              (<span class="date-1971">1971</span>): 25&#x2013;56.
            
               </li>
               <li class="bib-item" id="GREGORYNAPOLEONSITALY">Gregory,

                      Desmond. <i>Napoleon&#x02BC;s Italy</i><text>. </text>Cranbury, N.J.: Associated University Presses, 2001. 
               </li>
               <li class="bib-item" id="GRENIERTOURISMANDIDENTITY">Grenier,

                      Katherine Haldane. <i>Tourism and Identity in Scotland, <span class="date-1770-1914">1770&#x2013;1914</span>: Creating Caledonia</i><text>. </text>Aldershot: Ashgate, 2005. 
               </li>
               <li class="bib-item" id="GRIEDERPRATT">Grieder,

                      Josephine. &#x201C;&#x2018;Amiable Writer&#x2019; or &#x2018;Wretch&#x2019;? The Elusive Samuel Jackson Pratt&#x201D;, <i>Bulletin of Research in the Humanities</i>. 81, 
              (<span class="date-1978">1978</span>): 464&#x2013;84.
            
               </li>
               <li class="bib-item" id="CHATTERTONDNB">Groom,

                      Nick. &#x201C;Chatterton, Thomas (<span class="date-1752-1770">1752&#x02BC;70</span>)&#x201D;, <i>Oxford Dictionary of National Biography Online Edition</i>. http://www.oxforddnb.com/view/article/5189 (accessed <span class="date-2014-06-01">1 June 2014</span>),
            Oxford University Press.
              
            
              (<span class="date-2004">2004</span>). 
               </li>
               <li class="bib-item" id="WATTSDUNTONLIFE">Hake,

                      Thomas, and Arthur Compton&#x2010;Rickett. <i>The Life and Letters of Theodore Watts&#x2010;Dunton</i><text>. </text>London: T. C. &#x0026; E. C. Jack, 1916. 
               </li>
               <li class="bib-item" id="HALEROGERSTHEPERFECTIONIST">Hale,

                      J. R. &#x201C;Samuel Rogers the Perfectionist&#x201D;, <i>Huntington Library Quarterly</i>. 25.1
              (<span class="date-1961">November 1961</span>): 61&#x2013;67.
            
               </li>
               <li class="bib-item" id="OURLITERARYDELUGE">Halsey,

                      Francis Whiting. <i>Our Literary Deluge and Some of Its Deeper Waters</i><text>. </text>New York: Doubleday, Page, 1902. 
               </li>
               <li class="bib-item" id="HANSENSUMMITSOFMODERNMAN">Hansen,

                      Peter H. <i>The Summits of Modern Man: Mountaineering after the Enlightenment</i><text>. </text>Cambridge, Mass.: Harvard University Press, 2013. 
               </li>
               <li class="bib-item" id="HANSONPSYCHOLOGY">Hanson,

                      David C. &#x201C;The Psychology of Fragmentation: A Bibliographic and Psychoanalytic Reconsideration of the Ruskin Juvenilia&#x201D;, <i>Text: An Interdisciplinary Annual of Textual Studies</i>. 10, 
              (<span class="date-1998">1998</span>): 237&#x2013;58.
            
               </li>
               <li class="bib-item" id="HANSONDARKWATERS">Hanson,

                      David C. &#x201C;Ruskin, Dante, and the Dark Waters of <i>Praeterita</i>&#x201D;, <i><span class="date-1801-1900">Nineteenth Century</span> Prose</i>. 35.1
              (<span class="date-2008">2008</span>): 58&#x2013;93.
            
               </li>
               <li class="bib-item" id="HANSONRUSKIN1830S">Hanson,

                      David C. &#x201C;Ruskin in the 1830s: Emerging Authorship and the Print Culture of Travel&#x201D;, <i>Continental Tourism, Travel Writing, and the Consumption of Culture in the Nineteenth Century</i>. 
        Ed.
      Benjamin Colbert  Lucy, and Lucy Morrison.
      Basingstoke,
            Palgrave Macmillan.
              
            
              (<span class="date-2015">forthcoming</span>). 
               </li>
               <li class="bib-item" id="HANSONPRAETERITAEVANGELICAL">Hanson,

                      David C. &#x201C;Ruskin&#x02BC;s <i>Praeterita</i> and Landscape in Evangelical Children&#x02BC;s Education&#x201D;, <i><span class="date-1801-1900">Nineteenth&#x2013;Century</span> Literature</i>. 44, 
              (<span class="date-1989">1989</span>): 45&#x2013;66.
            
               </li>
               <li class="bib-item" id="HANSONSELFANDREVISION">Hanson,

                      David C. &#x201C;Self and Revision in Ruskin&#x02BC;s Revaluations of Romanticism, <span class="date-1830-1880">1830&#x2013;1880&#x201D;</span>, <i>Studies in Romanticism</i>. 39.2
              (<span class="date-2000">2000</span>): 255&#x2013;302.
            
               </li>
               <li class="bib-item" id="HANSONSENTIMENTANDMATERIALITY">Hanson,

                      David C. &#x201C;Sentiment and Materiality in Late&#x2010;Victorian Book Collecting&#x201D;, <i>Victorian Literature and Culture</i>. 43.4
              (<span class="date-2015">2015</span>): 785&#x2013;820.
            
               </li>
               <li class="bib-item" id="HARRISBORROWING">Harris,

                      Katherine D. &#x201C;Borrowing, Altering, and Perfecting the Liteary Annual Form&#x2014;or What It Is Not: Emblems, Almanacs, Pocket&#x2010;Books, Albums, Scrapbooks, and Gift&#x2010;Books&#x201D;, <i>Poetess Archive Journal</i>. 1.1
              (<span class="date-2007">2007</span>): 1&#x2013;30.
            http://journals.tdl.org/paj/index.php/paj/article/view/23
               </li>
               <li class="bib-item" id="HARRISGENRESUCCEEDS">Harris,

                      Katherine D. &#x201C;History: A &#x2018;Small&#x2019; Genre Succeeds&#x201D;, <i>Forget Me Not: A Hypertextual Archive of Ackermann&#x02BC;s <span class="date-1801-1900">Nineteenth&#x2010;Century</span> Literary Annual</i>. 
        Ed.
      Katherine D. Harris.
      www.orgs.muohio.edu/anthologies/fmn/ (accessed <span class="date-2014-02-26">26 February 2014</span>),
            Katherine D. Harris, Department of English and Comparative Literature, San Jose University.
              
            
              (<span class="date-2001">2001</span>). 
               </li>
               <li class="bib-item" id="HARRISONREMINISCENCES">Harrison,

                      W. H. &#x201C;Notes and Reminiscences&#x201D;, <i>Dublin University Magazine</i>. 1 (n.s.), 
              (<span class="date-1878">1878</span>): 537&#x2013;47 (May), 698&#x2013;712 (June 1878).
            2 (n.s.), 
              (<span class="date-1878">1878</span>): 56&#x2013;67 (July), 221&#x2013;34 (August), 309&#x2013;23 (September), 433&#x2013;51 (October), 613&#x2013;18 (November), 705&#x2013;36 (December).
            
               </li>
               <li class="bib-item" id="HASKELLITALIANPATRON">Haskell,

                      Francis. <i>An Italian Patron of French Neo&#x2010;Classic Art</i><text>. </text>Oxford: Clarendon Press, 1972. 
               </li>
               <li class="bib-item" id="HASKELLMOREABOUTSOMMARIVA">Haskell,

                      Francis. &#x201C;More about Sommariva&#x201D;, <i>Burlington Magazine</i>. 114.835
              (<span class="date-2015">October 1972</span>): 691&#x2013;95.
            
               </li>
               <li class="bib-item" id="HASKELLREDISCOVERIES">Haskell,

                      Francis. <i>Rediscoveries in Art: Some Aspects of Taste, Fashion, and Collecting in England and France</i><text>. </text>Ithaca, N.Y.: Cornell University Press, 1976. 
               </li>
               <li class="bib-item" id="HAWKINSBYRONCHRONOLOGY">Hawkins,

                      Ann R. &#x201C;The Byron Chronology&#x201D;, Romantic Circles. University of Maryland.
              
            
              (<span class="date">1996&#x2013;</span>). https://www.rc.umd.edu/reference/chronologies/byronchronology/index.html (accessed <span class="date-2018-01-21">21 January 2018</span>)
               </li>
               <li class="bib-item" id="HEALENGLISHWRITINGMASTERS">Heal,

                      Ambrose. <i>The English Writing&#x2010;Masters and Their Copy&#x2010;Books, <span class="date-1570-1800">1570&#x2013;1800</span>: A Biographical Dictionary and a Bibliography</i><text>. </text>Cambridge: Cambridge University Press, 1931. 
               </li>
               <li class="bib-item" id="HEATHRAGLANDCASTLE">Heath,

                      Charles. <i>Historical and Descriptive Accounts of the Ancient and Present State of Ragland Castle: With a Variety of Other Particulars, Deserving the Stranger&#x02BC;s Notice, Relating to That Much&#x2010;Admired Ruin, and Its Neighbourhood. The Whole Never Before Published. Collected from Original Papers and Unquestionable Authorities</i><text>. </text>Monmouth: Charles Heath, 1806. 
               </li>
               <li class="bib-item" id="HEATHTINTERN">Heath,

                      Charles. <i>Historical and Descriptive Accounts of the Ancient and Present State of Tintern Abbey: Including a Variety of Other Particulars, Deserving the Stranger&#x02BC;s Notice, Relating to That Much Admired Ruin, and Its Neighbourhood, Collected from Original Papers, and Unquestionable Authorities</i><text>. </text>Monmouth: Charles Heath, 1829. 
               </li>
               <li class="bib-item" id="HEATHSBOOKOFBEAUTY1846"><i>Heath&#x02BC;s Book of Beauty, <span class="date-1846">1846</span>: With Beautifully Finished Engravings, from Drawings by the First Artists</i><text>. </text>
        Ed.
      Marguerite, Countess of Blessington Gardiner.
      London: Longman, Brown, Green, and Longmans, 1846 &#x005B;ca. November 1835&#x005D;. 
               </li>
               <li class="bib-item" id="HEBERINDIA">Heber,

                      Reginald, lord bishop of Calcutta. <i>Narrative of a Journey through the Upper Provinces of India, from Calcutta to Bombay, 1824-1825 (with Notes upon Ceylon</i><text>. </text>4th ed.. London: John Murray, 1829. 
               </li>
               <li class="bib-item" id="HEBRONROMANTICSANDBRITISHLANDSCAPE">Hebron,

                      Stephen. <i>The Romantics and the British Landscape</i><text>. </text>London: British Library, 2006. 
               </li>
               <li class="bib-item" id="HEMANSSELECTEDPOEMS">Hemans,

                      Felicia. <i>Selected Poems, Letters, Reception Materials</i><text>. </text>
        Ed.
      Susan J. Wolfson.
      Princeton: Princeton University Press, 2000. 
               </li>
               <li class="bib-item" id="BACKHOUSEGRAVE">&#x201C;Henry Fleetwood Backhouse&#x201D; (grave), Find a Grave. Jim Tipton.
              
            
              (<span class="date">1995</span>). http://www.findagrave.com (accessed <span class="date-2012-01-01">1 January 2012</span>)
               </li>
               <li class="bib-item" id="HERRMANNTURNERPRINTS">Herrmann,

                      Luke. <i>Turner Prints: The Engraved Work of J. M. W. Turner</i><text>. </text>Oxford: Phaidon, 1990. 
               </li>
               <li class="bib-item" id="HEWISONETALRUSKINTURNERPRB">Hewison,

                      Robert, Ian Warrell, and Stephen Wildman. <i>Ruskin, Turner, and the Pre&#x2010;Raphaelites</i><text>. </text>London: Tate Gallery, 2000. 
               </li>
               <li class="bib-item" id="HEWISONFATHERANDSON">Hewison,

                      Robert. &#x201C;Father and Son: The Ruskin Family Art Collection&#x201D;, Hewison,

                      Robert. <i>Ruskin&#x02BC;s Artists: Studies in the Victorian Visual Economy</i>. Aldershot,
            Ashgate.
              
            
              (<span class="date-2000">2000</span>): 1&#x2013;14.
            
               </li>
               <li class="bib-item" id="HIBBERTGRANDTOUR">Hibbert,

                      Christopher. <i>The Grand Tour</i><text>. </text>New York: G. P. Putnam&#x02BC;s Sons, 1969. 
               </li>
               <li class="bib-item" id="HILLERECLECTICREVIEW">Hiller,

                      Mary Ruth. &#x201C;The <i>Eclectic Review</i>, <span class="date-1805-1868">1805&#x2013;1868&#x201D;</span>, <i>Vicotorian Periodicals Review</i>. 27.3
              (<span class="date-1994">Fall 1994</span>): 179&#x2013;278.
            
               </li>
               <li class="bib-item" id="HILTONRUSKINEARLYYEARS">Hilton,

                      Tim. <i>John Ruskin: The Early Years</i><text>. </text>New Haven: Yale University Press, 1985. 
               </li>
               <li class="bib-item" id="HILTONRUSKINLATERYEARS">Hilton,

                      Tim. <i>John Ruskin: The Later Years</i><text>. </text>New Haven: Yale University Press, 2000. 
               </li>
               <li class="bib-item" id="BELLEVUEHOTELHISTORY">&#x201C;History&#x201D;, <i>BELvue Museum</i>. King Baudouin Foundation Company.
              
            
              (<span class="date">n.d.</span>). http://belvue.be/en/history (accessed <span class="date-2014-11-14">14 November 2014</span>)
               </li>
               <li class="bib-item" id="YALECOLLECTION">Hogan,

                      Charles Beecher. &#x201C;The Yale Collection of the Manuscripts of John Ruskin&#x201D;, <i>Yale University Library Gazette</i>. 16.4
              (<span class="date-1942-04">April 1942</span>): 61&#x2013;69.
            
               </li>
               <li class="bib-item" id="HOGGWORKSLETTERSVOL3">Hogg,

                      James. <i>The Collected Letters: Volume 3, <span class="date-1832-1835">1832&#x2013;1835</span></i><text>. </text>
        Ed.
      Gillian Hughes.
      Edinburgh: Edinburgh University Press, 2008. 
               </li>
               <li class="bib-item" id="HOGGWORKSANNUALS">Hogg,

                      James. <i>Contributions to Annuals and Gift&#x2010;Books</i><text>. </text>
        Ed.
      Janette Currie  Gillian, and Gillian Hughes.
      Edinburgh: Edinburgh University Press, 2006. 
               </li>
               <li class="bib-item" id="HOLCOMBCLASSICALTURNER">Holcomb,

                      Adele M. &#x201C;A Neglected Phase of Turner&#x02BC;s Art: His Vignettes to Rogers&#x02BC;s <i>Italy</i>&#x201D;, <i>Journal of the Warburg and Courtauld Institutes</i>. 32, 
              (<span class="date-1969">1969</span>): 405&#x2013;10.
            
               </li>
               <li class="bib-item" id="HOLCOMBROGERSREVISITED">Holcomb,

                      Adele M. &#x201C;Turner and Rogers&#x02BC; <i>Italy</i> Revisited&#x201D;, <i>Studies in Romanticism</i>. 27, 
              (<span class="date-1988">1988</span>): 63&#x2013;95.
            
               </li>
               <li class="bib-item" id="AXONDNB">Hollingworth,

                      Brian Charles. &#x201C;Axon, William Edward Armytage (<span class="date-1846-1913">1846&#x2013;1913</span>)&#x201D;, <i>Oxford Dictionary of National Biography Online Edition</i>. Oxford University Press.
              
            
              (<span class="date-2004">2004</span>). http://www.oxforddnb.com/view/article/57406 (accessed <span class="date-2012-03-30">30 March 2012</span>)
               </li>
               <li class="bib-item" id="HONANBROWNINGSTESTIMONY">Honan,

                      Park. &#x201C;Browning&#x02BC;s Testimony on His Essay on Shelley in &#x2018;Shepherd v. Francis&#x2019;&#x201D;, <i>English Language Notes</i>. 2.1
              (<span class="date-1964-09">September 1964</span>): 27&#x2013;31.
            
               </li>
               <li class="bib-item" id="HUGHESHOGGARTANNUALS">Hughes,

                      Gillian. &#x201C;Hogg, Art, and the Annuals&#x201D;, Hogg,

                      James. <i>Contributions to Annuals and Gift&#x2010;Books</i>. 
        Ed.
      Janette Currie  Gillian, and Gillian Hughes.
      Edinburgh,
            Edinburgh University Press.
              
            
              (<span class="date-2006">2006</span>): xlii&#x2013;liv.
            
               </li>
               <li class="bib-item" id="HUGHESINTROHOGGALTRIVE">Hughes,

                      Gillian. <i>Introduction</i>, Hogg,

                      James. <i>Altrive Tales</i>. 
        Ed.
      Gillian Hughes.
      Edinburgh,
            Edinburgh University Press.
              
            
              (<span class="date-2003">2003</span>): xi&#x2013;lxvii.
            
               </li>
               <li class="bib-item" id="HUGHESINTROHOGGLETTERSVOL3">Hughes,

                      Gillian. <i>Introduction</i>, Hogg,

                      James. <i>The Collected Letters: Volume 3, <span class="date-1832-1835">1832&#x2013;1835</span></i>. 
        Ed.
      Gillian Hughes.
      Edinburgh,
            Edinburgh University Press.
              
            
              (<span class="date-2008">2008</span>): xiii&#x2013;xlviii.
            
               </li>
               <li class="bib-item" id="HUGHESINTROHOGGANNUALS">Hughes,

                      Gillian. &#x201C;Introductory and Textual Notes&#x201D;, Hogg,

                      James. <i>Contributions to Annuals and Gift&#x2010;Books</i>. 
        Ed.
      Janette Currie  Gillian, and Gillian Hughes.
      Edinburgh,
            Edinburgh University Press.
              
            
              (<span class="date-2006">2006</span>): 282&#x2013;361.
            
               </li>
               <li class="bib-item" id="HUGHESHOGGLIFE">Hughes,

                      Gillian. <i>James Hogg: A Life</i><text>. </text>Edinburg: Edinburgh University Press, 2007. 
               </li>
               <li class="bib-item" id="HUNNISETTENGRAVEDONSTEEL">Hunnisett,

                      Basil. <i>Engraved on Steel: The History of Picture Production Using Steel Plates</i><text>. </text>Aldershot: Ashgate, 1998. 
               </li>
               <li class="bib-item" id="HUNNISETTSTEELENGRAVED">Hunnisett,

                      Basil. <i>Steel&#x2010;Engraved Book Illustration in England</i><text>. </text>London: Scolar, 1980. 
               </li>
               <li class="bib-item" id="HUNTWIDERSEA">Hunt,

                      John Dixon. <i>The Wider Sea: A Life of John Ruskin</i><text>. </text>New York: Viking, 1982. 
               </li>
               <li class="bib-item" id="HUXLEYHOUSEOFSMITHELDER">Huxley,

                      Leonard. <i>The House of Smith Elder</i><text>. </text>London: Privately printed, 1923. 
               </li>
               <li class="bib-item" id="HYDECOLOSSEUM">Hyde,

                      Ralph. <i>The Regent&#x02BC;s Park Colosseum: Or, &#x201C;without hyperbole, the wonder of the world&#x201D;, being an account of a forgotten pleasure dome and its creators</i><text>. </text>London: Ackermann, 1982. 
               </li>
               <li class="bib-item" id="INGLISIRELAND">Inglis,

                      Henry D. <i>Ireland in <span class="date-1834">1834</span>: A Journey throughout Ireland, during the Spring, Summer, and Autumn of <span class="date-1834">1834</span></i><text>. </text>3d ed.. London: Whittaker, 1835. 
               </li>
               <li class="bib-item" id="INGLISTYROL">Inglis,

                      Henry D. <i>The Tyrol; with a Glance at Bavaria</i><text>. </text>2d ed.. London: Whittaker, Treacher, 1834. 
               </li>
               <li class="bib-item" id="JACKSONTRANSFERTOSTEAM">Jackson,

                      Gordon. &#x201C;Operational Problems of the Transfer to Steam: Dundee, Perth &#x0026; London Shipping Company, <i>c</i>. <span class="date-1820-1845">1820&#x2013;1845&#x201D;</span>, Smout,

                      T. C. <i>Scotland and the Sea</i>. Edinburgh,
            John Donald.
              
            
              (<span class="date-1992">1992</span>): 154&#x2013;81.
            
               </li>
               <li class="bib-item" id="JACKSONVIVELEROI">Jackson,

                      Richard A. <i>Vive le Roi! A History of the French Coronation from Charles V to Charles X</i><text>. </text>Chapel Hill: University of North Carolina Press, 1984. 
               </li>
               <li class="bib-item" id="JAMESONPRIVATEGALLERIES">Jameson,

                      Mrs. &#x005B;Anna&#x005D;. <i>Companion to the Most Celebrated Private Galleries of Art in London</i><text>. </text>London: Saunders and Otley, 1844. 
               </li>
               <li class="bib-item" id="JAMIESONBINDINGSTYLES">Jamieson,

                      Eleanore. &#x201C;The Binding Styles of the Gift Books and Annuals&#x201D;, Faxon,

                      Frederick W. <i>Literary Annuals and Gift Books: A Bibliography, <span class="date-1823-1903">1823&#x2013;1903</span></i>. Pinner, Middlesex,
            Private Libraries Association.
              
            
              (<span class="date-1973">1973</span>): 7&#x2013;17.
            
          Reprinted from <span class="date-1912">1912</span>.a
        
               </li>
               <li class="bib-item" id="JCMOBITCUNLIFFE">. Obituary of Robert Ellis Cunliffe, <i>Memoirs and Proceedings of the Manchester Literary and Philosophical Society</i>. 47.15
              (<span class="date-1902-1903">1902&#x2013;3</span>): xlviii.
            
               </li>
               <li class="bib-item" id="JOHNSONPICTURINGPEDAGOGY">Johnson,

                      Dorothy. &#x201C;Picturing Pedagogy: Education and the Child in the Paintings of Chardin&#x201D;, <i><span class="date-1701-1800">Eighteenth&#x2010;Century</span> Studies</i>. 24.1
              (<span class="date-1990">Autumn 1990</span>): 47&#x2013;68.
            
               </li>
               <li class="bib-item" id="JOYCESCIEDIALOGUES">Joyce,

                      J. <i>Scientific Dialogues: Intended for the Instruction and Entertainment of Young People: In Which the First Principles of Natural and Experimental Philosophy Are Fully Explained</i><text>. </text>New ed., corrected and improved. Philadelphia: M. Carey &#x0026; Son, 1825. 
               </li>
               <li class="bib-item" id="JUNGILLUSTRATED">Jung,

                      Sandro. &#x201C;The Illustrated Pocket Diary: Generic Continuity and Innovation, <span class="date-1820-1840">1820&#x2013;40&#x201D;</span>, <i>Victorian Periodicals Review</i>. 45.1
              (<span class="date-2012">Spring 2012</span>): 23&#x2013;48.
            
               </li>
               <li class="bib-item" id="JUNGSTOTHARD">Jung,

                      Sandro. &#x201C;Print Culture, Marketing, and Thomas Stothard&#x02BC;s Illustrations for <i>The Royal Engagement Pocket Atlas</i>, <span class="date-1779-1826">1779&#x2013;1826&#x201D;</span>, <i>Studies in <span class="date-1701-1800">Eighteenth&#x2010;Century</span> Culture</i>. 41, 
              (<span class="date-2012">2012</span>): 27&#x2013;53.
            
               </li>
               <li class="bib-item" id="KEEPSAKE1846"><i>The Keepsake, <span class="date-1846">1846</span>: With Beautifully Finished Engravings, from Drawings by the First Artists, Engraved under the Superintendence of Mr. Charles Heath</i><text>. </text>
        Ed.
      Marguerite, Countess of Blessington Gardiner.
      London: Longman, Brown, Green, and Longmans, 1846 &#x005B;ca. November 1835&#x005D;. 
               </li>
               <li class="bib-item" id="KEEPSAKE1833"><i>The Keepsake for MDCCCXXXIII</i><text>. </text>
        Ed.
      Frederic Mansel Reynolds.
      London: Longman, Rees, Orme, Brown, Green, and Longman, 1833 &#x005B;ca. 1832&#x005D;. 
               </li>
               <li class="bib-item" id="KEEPSAKEFRANCAIS1831"><i>Keepsake français, ou Souvenir de litt&#x00E9;rature contemporaine. Orn&#x00E9; de dix-huit gravures anglaises. 1831</i><text>. </text>Paris: Giraldon-Bovinet. London: Whittaker, Treacher, 1831. 
               </li>
               <li class="bib-item" id="KELLERSCHWEIZ">Keller,

                      Heinrich. <i>Reisecharte der Schweiz</i><text>. </text>Zürich, 1819. The New York Public Library Digital Collections, n.d..  https://digitalcollections.nypl.org/items/b41097cf-1f22-ff08-e040-e00a180649a9 (accessed <span class="date-2018-07-30">30 July 2018)</span></li>
               <li class="bib-item" id="PICKERING">Keynes,

                      Geoffrey. <i>William Pickering, Publisher: A Memoir and a Check&#x2010;List of His Publications</i><text>. </text>Rev. ed.. London: Galahad, 1969. 
               </li>
               <li class="bib-item" id="MURRAYSHANDBOOKISLEOFWIGHT1888">King,

                      R. J. <i>A Handbook for Travellers in Surrey, Hampshire, and the Isle of Wight</i><text>. </text>4th ed.. Revised by R. W. Maude.
        London: John Murray, 1888. 
               </li>
               <li class="bib-item" id="KINGHELEDARWIN">King&#x2010;Hele,

                      D. G. &#x201C;Erasmus Darwin, Man of Ideas and Inventor of Words&#x201D;, <i>Notes and Records of the Royal Society of London</i>. 42..2
              (<span class="date-1988-07">(July 1988).</span>): 149&#x2013;80.
            
               </li>
               <li class="bib-item" id="KIRKARCHITECTUREITALY">Kirk,

                      Terry. <i>The Architecture of Modern Italy</i><text>. </text>Hudson, N.Y.: Princeton Architectural Press, 2005. 
               </li>
               <li class="bib-item" id="KLANCHERMAKINGAUDIENCES">Klancher,

                      Jon P. <i>The Making of English Reading Audiences, <span class="date-1790-1832">1790&#x2013;1832</span></i><text>. </text>Madison: University of Wisconsin Press, 1987. 
               </li>
               <li class="bib-item" id="KLINEPERDUEDOCUMENTARY">Kline,

                      Mary&#x2010;Jo, and Susan Holbrook Perdue. <i>A Guide to Documentary Editing</i><text>. </text>3d ed.. Charlottesville: University of Virginia Press, 2008. 
               </li>
               <li class="bib-item" id="LAMBSPOETRY">&#x201C;Lamb&#x02BC;s &#x2018;Poetry for Children&#x2019;&#x201D;, <i>Athenaeum</i>. London,
            2621
              (<span class="date-1878-01-19">19 January 1878</span>): 89&#x2013;90.
            
               </li>
               <li class="bib-item" id="THELIBRARY">Lang,

                      Andrew, and Austin Dobson. <i>The Library: With a Chapter on Modern English Illustrated Books, by Austin Dobson</i><text>. </text>London: Macmillan, 1881. 
               </li>
               <li class="bib-item" id="LEDBETTERHEATH">Ledbetter,

                      Kathryn. &#x201C;&#x2018;The Copper and Steel Manufactory&#x2019; of Charles Heath&#x201D;, <i>Victorian Review</i>. 28.2
              (<span class="date-2002">2002</span>): 21&#x2013;30.
            
               </li>
               <li class="bib-item" id="LEIGHRHENISHALBUM">Leigh,

                      James Mathews. <i>The Rhenish Album; Or, Scraps from the Rhine: The Journal of a Travelling Artist through Holland, Up the Rhine to Strasburg, and Returning through Belgium; with Notices of Public Edifices, Hotels, &#x0026;c., Tables of Expenses, and Other Information Useful to the Tourist</i><text>. </text>London: Leigh &#x0026; Son, 1836. 
               </li>
               <li class="bib-item" id="LERNERTELLSATLANTICTRAVELS">Lerner,

                      Marc H. &#x201C;William Tell&#x02BC;s Atlantic Travels in the Revolutionary Era&#x201D;, <i>Studies in <span class="date-1701-1800">Eighteenth&#x2010;Century</span> Culture</i>. 41, 
              (<span class="date-2012">2012</span>): 85&#x2013;114.
            
               </li>
               <li class="bib-item" id="LIGHTMANDEBTTOBARBAULD">Lightman,

                      Naomi. &#x201C;&#x2018;No Man Could Owe More&#x2019;: John Ruskin&#x02BC;s Debt to Anna Barbauld&#x02BC;s Books for Children&#x201D;, McCarthy,

                      William, and Olivia Murphy. <i>Anna Laetitia Barbauld: New Perspectives</i>. Lewisburg,
            Bucknell University Press.
              
            
              (<span class="date-2005">2005</span>): 259&#x2013;76.
            
               </li>
               <li class="bib-item" id="ANONLINESBYAYOUTH">&#x201C;Lines by a Youth &#x007C; Not Alone&#x201D;, <i>The Spiritual Times: A Monthly Magazine</i>. 1.5
              (<span class="date-1829-09-01">1 September 1829</span>): 200&#x2013;201.
            
               </li>
               <li class="bib-item" id="LITERARYGOSSIPNOV76">&#x201C;Literary Gossip&#x201D;, <i>Athenaeum</i>. London,
            2561
              (<span class="date-1876-11-25">25 November 1876</span>): 690.
            
               </li>
               <li class="bib-item" id="LITERARYREVIVALS">&#x201C;Literary Revivals&#x201D; (unsigned review of <i>Studies of Sensation and Event</i>, by Ebenezer Jones, monograph no. 1 of the series <i>Forgotten Books Worth Remembering</i>, and <i>The Early Poems of Henry Wadsworth Longfellow</i>, ed. Richard Herne Shepherd), <i>Athenaeum</i>. London,
            2655
              (<span class="date-1878-09-14">14 September 1878</span>): 331&#x2013;32.
            
               </li>
               <li class="bib-item" id="LIVYHISTORY">Livy (Titus Livius). <i>The History of Rome</i><text>. </text>Books 1&#x2010;8 literally translated with notes and illustrations by D. Spillan.
        Books nine to twenty&#x2010;six literally translated with notes and illustrations by D. Spillan, and  Cyrus Edmonds.
        Books thirty&#x2010;seven to the end, with the epitomes and fragments of the lost books, literally translated by William A. M&#x02BC;Devitte.
        London: Henry G. Bohn, 1849&#x2013;50. Perseus Digital Library.  http://www.perseus.tufts.edu/hopper/
               </li>
               <li class="bib-item" id="LOCKETTPROUT">Lockett,

                      Richard. <i>Samuel Prout, <span class="date-1783-1852">1783&#x2013;1852</span></i><text>. </text>London: B. T. Batsford, 1985. 
               </li>
               <li class="bib-item" id="BYRONWORKS">Lord Byron,

                      George Gordon. <i>The Complete Poetical Works</i><text>. </text>
        Ed.
      Jerome J. McGann.
      Oxford: Clarendon Press, 1980&#x2013;93. 
               </li>
               <li class="bib-item" id="FINDENSILLUSTRATIONSBYRON">Lord Byron,

                      George Gordon. <i>Finden&#x02BC;s Illustrations of the Life and Works of Lord Byron</i><text>. </text>Illustrated by Edward Francis Finden, and  William Finden.
        Engravings introduced by William Brockedon.
        London: John Murray, 1833&#x2013;34. 
               </li>
               <li class="bib-item" id="BYRONLETTERSJOURNALSMOORE1833">Lord Byron,

                      George Gordon. <i>Letters and Journals of Lord Byron; with Notices of His Life</i><text>. </text>3d ed.. Illustrated by William Finden, and  Edward Finden.
        
        Ed.
      Thomas Moore.
      London: John Murray, 1833. 
               </li>
               <li class="bib-item" id="BYRONWORKS1833">Lord Byron,

                      George Gordon. <i>The Works of Lord Byron: with His Letters and Journals, and His Life by <span class="persName-TM">Thomas Moore</span></i><text>. </text>3d ed.. &#x005B;Illustrated by J. M. W. Turner et al.&#x005D;.
        London: John Murray, 1832&#x2013;33. 
               </li>
               <li class="bib-item" id="MAILLESBAYARD">Loyal Servant &#x005B;Jacques de Mailles&#x005D;. <i>The Right Joyous and Pleasant History of the Feats, Gests, and Prowesses of the Chevalier Bayard, the Good Knight without Fear and without Reproach</i><text>. </text>Translated by Sara Coleridge.
        London: John Murray, 1825. 
               </li>
               <li class="bib-item" id="LYNNWARSOFLOUISXIV">Lynn,

                      John A. <i>The Wars of Louis XIV, <span class="date-1667-1714">1667&#x2013;1714</span></i><text>. </text>London: Longman, 1999. 
               </li>
               <li class="bib-item" id="MAIDMENTONLYPRINT">Maidment,

                      B. E. &#x201C;&#x2018;Only Print&#x2019;&#x2014;Ruskin and the Publishers&#x201D;, <i>Durham University Journal</i>. 63.3
              (<span class="date-1971-06">June 1971</span>): 196&#x2013;207.
            
               </li>
               <li class="bib-item" id="CATMANCHESTERRUSKINEXHIBITION1904">The Manchester City Art Gallery. <i>Catalogue of the Ruskin Exhibition</i><text>. </text>&#x005B;London&#x005D;, 1904. 
               </li>
               <li class="bib-item" id="MARGETSONREGENCY">Margetson,

                      Stella. <i>Regency London</i><text>. </text>London: Cassell, 1971. 
               </li>
               <li class="bib-item" id="LIBRARIESOFGLASGOW">Mason,

                      Thomas. <i>Public and Private Libraries of Glasgow</i><text>. </text>Glasgow: Thomas D. Morison, 1885. 
               </li>
               <li class="bib-item" id="MATHESONHEATH">Matheson,

                      C. S. &#x201C;&#x2018;I Wanted Some Intelligent Guide&#x2019;: Charles Heath and the <i>Historical and Descriptive Accounts of the Ancient and Present State of Tintern Abbey</i>&#x201D;, <i>Romanticism</i>. 19.2
              (<span class="date-2013">2013</span>): 138&#x2013;52.
            
               </li>
               <li class="bib-item" id="MATHEWSTHEANNALSOFMONTBLANC">Mathews,

                      Charles Edward. <i>The Annals of Mont Blanc: A Monograph</i><text>. </text>Boston: L. C. Page, 1900. 
               </li>
               <li class="bib-item" id="MATTHEWSDIARYINVALID">Matthews,

                      Henry. <i>The Diary of an Invalid: Being the Journal of a Tour in Pursuit of Health, in Portugal, Italy, Switzerland, and France, in the Years <span class="date-1817">1817</span>, <span class="date-1818">1818</span>, and <span class="date-1819">1819</span></i><text>. </text>2d ed.. London: John Murray, 1820. 
               </li>
               <li class="bib-item" id="MURRAYSHANDBOOKNORTHERNITALY1847">Maule,

                      G. B. <i>Hand&#x2010;book for Travellers in Northern Italy: States of Sardinia, Lombardy and Venice, Parma and Piacenza, Modena, Lucca, Massa&#x2010;Carrara, and Tuscany as Far as the Val d&#x02BC;Arno</i><text>. </text>3rd ed.. London: John Murray, 1847. 
               </li>
               <li class="bib-item" id="MAZZONIMILAN">Mazzoni,

                      Marcello. <i>The Traveller&#x02BC;s Guide of Milan, with a Sketch of the Environs and a Description of the Lakes</i><text>. </text>Milan: Lorenzo Sonzogno, 1836. 
               </li>
               <li class="bib-item" id="MCGANNRADIANT">McGann,

                      Jerome. <i>Radiant Textuality: Literature after the World Wide Web</i><text>. </text>Basingstoke: Palgrave, 2001. 
               </li>
               <li class="bib-item" id="MELVILLEBILLYBUDD">Melville,

                      Herman. <i>Billy Budd, Sailor</i><text>. </text>
        Ed.
      Harrison Hayford  Merton M., and Merton M. Sealts Jr..
      Chicago: University of Chicago Press, 1962. 
               </li>
               <li class="bib-item" id="MEMORABILIAOFPERTH"><i>Memorabilia of the City of Perth</i><text>. </text>Perth: William Morison, 1806. 
               </li>
               <li class="bib-item" id="GARDENMEMORIALS"><i>Memorials of James Hogg, the Ettrick Shepherd</i><text>. </text>3d. 
        Ed.
      Mrs. M. G. Garden.
      Paisley: Alexander Gardner, 1903. 
               </li>
               <li class="bib-item" id="MERKEHISTORYOFGOITRE">Merke,

                      F. <i>History and Iconography of Endemic Goitre and Cretinism</i><text>. </text>Lancaster: MTP Press, 1984. 
               </li>
               <li class="bib-item" id="MERRIAMMOXON">Merriam,

                      Harold G. <i>Edward Moxon: Publisher of Poets</i><text>. </text>New York: Columbia University Press, 1939. 
               </li>
               <li class="bib-item" id="METZLERSPRANGER">Metzler,

                      Sally. <i>Bartholomeus Spranger: Splendor and Eroticism in Imperial Prague</i><text>. </text>New Haven, Conn.: Yale University Press, for the Metropolitan Museum of Art, 2014. 
               </li>
               <li class="bib-item" id="MILLAUTOBIOGRAPHY">Mill,

                      John Stuart. <i>Autobiography and Literary Essays</i><text>. </text>
        Ed.
      John M. Robson  Jack, and Jack Stillinger.
      Toronto: University of Toronto Press, 1963&#x2013;91. Liberty Fund, Online Library of Liberty.  http://oll.libertyfund.org/titles/mill-the-collected-works-of-john-stuart-mill-volume-i-autobiography-and-literary-essays
               </li>
               <li class="bib-item" id="MILLERGROTTO">Miller,

                      Naomi. <i>Heavenly Caves: Reflections on the Garden Grotto</i><text>. </text>New York: George Braziller, 1982. 
               </li>
               <li class="bib-item" id="MILLGATESCOTTSLASTEDITION">Millgate,

                      Jane. <i>Scott&#x02BC;s Last Edition: A Study in Publishing History</i><text>. </text>Edinburgh: Edinburgh University Press, 1987. 
               </li>
               <li class="bib-item" id="TESTAMENTARYACTS">Millgate,

                      Michael. <i>Testamentary Acts: Browning, Tennyson, James, Hardy</i><text>. </text>Oxford: Clarendon, 1992. 
               </li>
               <li class="bib-item" id="MOGGSPICTUREOFLONDON">Mogg,

                      Edward. <i>Mogg&#x02BC;s New Picture of London; or, Strangers&#x02BC; Guide to the British Metropolis</i><text>. </text>11. London: E. Mogg, 1848. 
               </li>
               <li class="bib-item" id="MORISONDEVELOPMENTOFHANDWRITING">Morison,

                      Stanley. &#x201C;The Development of Hand&#x2010;Writing: An Outline&#x201D;, Heal,

                      Ambrose. <i>The English Writing&#x2010;Masters and Their Copy&#x2010;Books, <span class="date-1570-1800">1570&#x2013;1800</span>: A Biographical Dictionary and a Bibliography</i>. Cambridge,
            Cambridge University Press.
              
            
              (<span class="date-1931">1931</span>): xxiii&#x2013;xl.
            
               </li>
               <li class="bib-item" id="MORLEYGOUGH">Morley,

                      Simon. <i>The Unfortunate Tourist of Helvellyn and His Faithful Dog</i><text>. </text>Grasmere: Wordsworth Trust; Utopia Press, 2003. Published to accompany an exhibition by the Wordsworth Trust, Grasmere, <span class="date-2003-01-24-2003-04-25">24 January&#x2013;25 April 2003</span>.
               </li>
               <li class="bib-item" id="MORTENSENEUROPHOBIA">Mortensen,

                      Peter. <i>British Romanticism and Continental Influences: Writing in an Age of Europhobia</i><text>. </text>Basingstoke: Palgrave Macmillan, 2004. 
               </li>
               <li class="bib-item" id="LITERARYGOSSIPDEC76">&#x201C;Mrs. Browning&#x02BC;s Earlier Poems&#x201D; (&#x201C;Literary Gossip,&#x201D; with letter by Richard Herne Shepherd, <span class="date-1876-11-27">27 November 1876</span>, to the editors of the <i>Athenaeum</i>), <i>Athenaeum</i>. London,
            2562
              (<span class="date-1876-12-02">2 December 1876</span>): 722.
            
               </li>
               <li class="bib-item" id="HILLDNB">Munden,

                      A. F. &#x201C;Hill, Rowland (<span class="date-1744-1833">1744&#x2013;1833</span>)&#x201D;, <i>Oxford Dictionary of National Biography Online Edition</i>. Oxford University Press.
              
            
              (<span class="date-2004">2004</span>). http://www.oxforddnb.com/view/article/13297 (accessed <span class="date-2016-01-03">3 January 2016</span>)
               </li>
               <li class="bib-item" id="MURCHMRSBARBAULD">Murch,

                      Jerom. <i>Mrs. Barbauld and Her Contemporaries: Sketches of Some Eminent Literary and Scientific Englishwomen</i><text>. </text>London: Longmans, Green, 1877. 
               </li>
               <li class="bib-item" id="MURRAYSHANDBOOKSWITZERLAND1838">Murray,

                      John (III). <i>A Hand&#x2010;book for Travellers in Switzerland and the Alps of Savoy and Piedmont, including the Protestant Valleys of the Waldenses</i><text>. </text>London: John Murray and Son, 1838. 
               </li>
               <li class="bib-item" id="MURRAYSHANDBOOKCONTINENT1836">Murray,

                      John (III). <i>A Hand&#x2010;book for Travellers on the Continent: Being a Guide through Holland, Belgium, Prussia, and Northern Germany, and along the Rhine, from Holland to Switzerland</i><text>. </text>London: John Murray and Son, 1836. 
               </li>
               <li class="bib-item" id="NICOLLFIRSTPUBLISHEDWRITINGS">Nicoll,

                      W. Robertson. &#x201C;The First Published Writings of Mr. Ruskin&#x201D;, <i>The Bookman: An Illustrated Literary Journal</i>. 8.45
              (<span class="date-1895-06">June 1895</span>): 77&#x2013;78 &#x005B;British edition&#x005D;.
            1.5
              (<span class="date-1895-06">June 1895</span>): 321 &#x005B;American edition&#x005D;.
            
               </li>
               <li class="bib-item" id="NOIRLAMPSOFTHETEMPLE">Noir, L&#x02BC;Agneau &#x005B;Edwin Paxton Hood&#x005D;. <i>The Lamps of the Temple: Shadows from the Lights of the Modern Pulpit</i><text>. </text>London: Partridge &#x0026; Oakey, 1852. 
          Revised as 
          Hood,

                      Edwin Paxton. <i>The Vocation of the Preacher</i><text>. </text>New York: Funk &#x0026; Wagnalls, 1888. 
               </li>
               <li class="bib-item" id="RECENTACQUISITIONSYALEJAN43">&#x201C;Notes on Recent Acquisitions&#x201D;, <i>Yale University Library Gazette</i>. 17.3
              (<span class="date-1943-10">January 1943</span>): 59.
            
               </li>
               <li class="bib-item" id="RECENTACQUISITIONSYALEOCT43">&#x201C;Notes on Recent Acquisitions&#x201D;, <i>Yale University Library Gazette</i>. 18.2
              (<span class="date-1943-10">October 1943</span>): 36.
            
               </li>
               <li class="bib-item" id="NUTTALLTRAININGHOXTON">Nuttall,

                      Geoffrey F. &#x201C;Training for Hoxton and Highbury: Walter Scott of Rothwell and His Pupils&#x201D;, <i>United Reformed Church History Society</i>. 5.8
              (<span class="date-1996-05">May 1996</span>): 477&#x2013;83.
            
               </li>
               <li class="bib-item" id="ODWYERDEANEANDWOODWARD">O&#x02BC;Dwyer,

                      Frederick. <i>The Architecture of Deane and Woodward</i><text>. </text>Cork: Cork University Press, 1997. 
               </li>
               <li class="bib-item" id="OHALLORANILLUSTRATIONS">O&#x02BC;Halloran,

                      Meiko. &#x201C;Hogg, Mary, Queen of Scots, and the Illustrations to <i>The Queen&#x02BC;s Wake</i>&#x201D;, Hogg,

                      James. <i>The Queen&#x02BC;s Wake&#x201D;</i>. 
        Ed.
      Douglas S. Mack.
      Edinburgh,
            Edinburgh University Press.
              
            
              (<span class="date-2004">2004</span>): lxxxvii&#x2013;&#x2013;cxiii.
            
               </li>
               <li class="bib-item" id="OLSENCITY">Olsen,

                      Donald J. <i>The City as a Work of Art: London, Paris, Vienna</i><text>. </text>New Haven: Yale University Press, 1986. 
               </li>
               <li class="bib-item" id="LIVERPOOLORATORY">&#x201C;The Oratory and St. James&#x02BC;s Cemetery&#x201D;, Walker Art Gallery, Liverpool. National Museums, Liverpool.
              
            
              (<span class="date">n.d.</span>). http://www.liverpoolmuseums.org.uk/walker/collections/research/documents/The-Oratory-and-St-James.pdf (accessed <span class="date-2012-05-26">25 May 2018</span>)
               </li>
               <li class="bib-item" id="ORMONDLANDSEER">Ormond,

                      Richard. <i>Sir Edwin Landseer</i><text>. </text>With contributions by Joseph Rishel, and  Robin Hamlyn.
        New York: Rizzoli, in association with the Philadelphia Museum of Art and the Tate Gallery, London, 1981. 
               </li>
               <li class="bib-item" id="OXLEYJACQUESBALMAT">Oxley,

                      T. Louis. <i>Jacques Balmat, or The First Ascent of Mont Blanc: A True Story</i><text>. </text>London: Kerby and Endean, 1881. 
               </li>
               <li class="bib-item" id="TENNYSONSHEPHERDWISE">Paden,

                      W. D. &#x201C;Tennyson&#x02BC;s <i>The Lover&#x2019;s Tale</i>, R. H. Shepherd, and T. J. Wise&#x201D;, <i>Studies in Bibliography</i>. 18, 
              (<span class="date-1965">1965</span>): 111&#x2013;45.
            
               </li>
               <li class="bib-item" id="TENNYSONSHEPHERDBUXTON">Paden,

                      W. D. &#x201C;Tennyson&#x02BC;s <i>The New Timon</i>, R. H. Shepherd, and Harry Buxton Forman&#x201D;, <i>Studies in Bibliography</i>. 34, 
              (<span class="date-1981">1981</span>): 262&#x2013;67.
            
               </li>
               <li class="bib-item" id="PAPAGEORGOPOULOUHYPOTHYROIDISM">Papageorgopoulou,

                      Christina, Kaspar Staub, and Frank Rühli. &#x201C;Hypothyroidism in Switzerland&#x201D;, <i>Rachel Carson Center Perspectives</i>. 3, 
              (<span class="date-2012">2012</span>): 75&#x2013;90.
            
               </li>
               <li class="bib-item" id="PARSONSWORTHTHEDETOUR">Parsons,

                      Nicholas T. <i>Worth the Detour: A History of the Guidebook</i><text>. </text>Stroud: Sutton, 2007. 
               </li>
               <li class="bib-item" id="FORGINGAHEAD">Partington,

                      Wilfred. <i>Forging Ahead: The True Story of the Upward Progress of Thomas James Wise, Prince of Book Collectors, Bibliographer Extraordinary and Otherwise</i><text>. </text>New York: G. P. Putnam&#x02BC;s Sons, 1939. 
               </li>
               <li class="bib-item" id="ORIGINALCLOTH">Partington,

                      Wilfred. <i>Thomas J. Wise in the Original Cloth: The Life and Record of the Forger of the <span class="date-1801-1900">Nineteenth&#x2010;Century</span> Pamphlets</i><text>. </text>London: Robert Hale, 1946. 
               </li>
               <li class="bib-item" id="PATTENDICKENSANDBOZ">Patten,

                      Robert L. <i>Charles Dickens and &#x201C;Boz&#x201D;</i><text>. </text><i>The Birth of the Industrial Age&#x2010;Author</i><text>. </text>Cambridge: Cambridge University Press, 2012. 
               </li>
               <li class="bib-item" id="PELTZFUNNELLLAWRENCE">Peltz,

                      Lucy, and Peter Funnell. &#x201C;Lawrence in Europe: International Career and Reputation&#x201D;, <i>Thomas Lawrence: Regency Power and Brilliance</i>. 
        Ed.
      A. Cassandra Albinson  John, John Baskett  Peter, Peter Funnell  Lucy, and Lucy Peltz.
      New Haven, Conn.,
            Yale University Press.
              
            
              (<span class="date-2010">2010</span>). 
               </li>
               <li class="bib-item" id="PENNANTJOURNEY">Pennant,

                      Thomas. <i>A Journey from London to the Isle of Wight</i><text>. </text>London: Oriental Press, 1801. 
               </li>
               <li class="bib-item" id="PENNYCYCLOPAEDIA"><i>The Penny Cyclopædia of the Society for the Diffusion of Useful Knowledge</i><text>. </text>Edited by George Long.
        London: Charles Knight, 1833&#x2013;43. 
               </li>
               <li class="bib-item" id="PETRARCHSONNETSARMI">. <i>Sonnets and Songs</i><text>. </text>Translated by Anna Maria Armi.
        New York: Grosset &#x0026; Dunlap, 1968 &#x005B;1946&#x005D;. 
               </li>
               <li class="bib-item" id="STONEPICTURESANDPATTERNS"><i>Pictures and Patterns: Victorian Illustrated Books and Bindings from the Peattie Collection</i><text>. </text>
        Ed.
      Caroline Stone.
      St. Johns: Art Gallery of Newfoundland and LabradorQueen Elizabeth II Library, Memorial University of Newfoundland, 2001. Exhibition, <span class="date-2001-01-12-2001-03-25">12 January&#x2013;25 March 2001</span>.
               </li>
               <li class="bib-item" id="PIGGOTTTURNERSVIGNETTES">Piggott,

                      Jan. <i>Turner&#x02BC;s Vignettes</i><text>. </text>London: Oriental Press, 1993. 
               </li>
               <li class="bib-item" id="PLINYLETTERS">Pliny the Younger. <i>Letters</i><text>. </text>With an English translation &#x005B; 1746 &#x005D; by William Melmoth.
        Revised by W. M. L. Hutchinson.
        London: William Heinemann, 1915. 
               </li>
               <li class="bib-item" id="POETESSARCHIVE"><i>Poetess Archive</i><text>. </text>
        Ed.
      Laura Mandell.
      2006&#x2013;. http://idhmc.tamu.edu/poetess/index.html
               </li>
               <li class="bib-item" id="POLYBIUSHISTORIES">Polybius. <i>The Histories</i><text>. </text>Translated by Evelyn S. Shuckburgh.
        London: Macmillan, 1893. Perseus Digital Library.  http://www.perseus.tufts.edu/hopper/
               </li>
               <li class="bib-item" id="POWELLONTHEWING">Powell,

                      Cecilia. &#x201C;On the Wing through Space and Time: The Dynamics of Turner&#x02BC;s Italy&#x201D;, <i>Forum for Modern Language Studies</i>. 39.2
              (<span class="date-2003-04">April 2003</span>): 190&#x2013;201.
            
               </li>
               <li class="bib-item" id="POWELLTURNERSOUTH">Powell,

                      Cecilia. <i>Turner in the South: Rome, Naples, Florence</i><text>. </text>New Haven: Yale University Press, 1987. 
               </li>
               <li class="bib-item" id="POWELLTURNERSVIGNETTES">Powell,

                      Cecilia. &#x201C;Turner&#x02BC;s Vignettes and the Making of Rogers&#x02BC; &#x2018;Italy&#x2019;&#x201D;, <i>Turner Studies</i>. 3.1
              (<span class="date-1983">1983</span>): 2&#x2013;13.
            
               </li>
               <li class="bib-item" id="BECKERPRACTICEOFLETTERS"><i>The Practice of Letters: The Hofer Collection of Writing Manuals, <span class="date-1514-1800">1514&#x2013;1800</span></i><text>. </text>
        Ed.
      David P. Becker.
      Cambridge, Mass.: Harvard College Library, 1997. 
               </li>
               <li class="bib-item" id="PRICEPERILOUSCROWN">Price,

                      Munro. <i>The Perilous Crown: France between Revolutions, <span class="date-1814-1848">1814&#x2013;1848</span></i><text>. </text>London: Macmillan, 2007. 
               </li>
               <li class="bib-item" id="PRIDEAUXWHOSWHO">&#x201C;Prideaux, Col. William Francis&#x201D;, <i>Who&#x02BC;s Who</i>. London,
            Adam and Charles Black.
              
            
              (<span class="date-1905">1905</span>). 
               </li>
               <li class="bib-item" id="COMPLETEBIBLIOGRAPHER">Prideaux,

                      W. F. &#x201C;The Complete Bibliographer&#x201D;, <i>Notes and Queries</i>. 8.126
              (<span class="date-1894-05-26">26 May 1894</span>): 401&#x2013;3.
            
               </li>
               <li class="bib-item" id="PRIESTMANPOETRYOFDARWIN">Priestman,

                      Martin. <i>The Poetry of Erasmus Darwin: Enlightened Spaces, Romantic Times</i><text>. </text>Farnham: Ashgate, 2013. 
               </li>
               <li class="bib-item" id="PROUTSKETCHES">Prout,

                      Samuel. <i>Facsimiles of Sketches Made in Flanders and Germany and Drawn on Stone by Samuel Prout</i><text>. </text>London: Chullmandel&#x02BC;s Lithography, n.d. &#x005B;1833&#x005D;. 
               </li>
               <li class="bib-item" id="RAFFLESLETTERS">Raffles,

                      Thomas. <i>Letters, during a Tour through Some Parts of France, Savoy, Switzerland, Germany, and the Netherlands, in the Summer of <span class="date-1817">1817</span></i><text>. </text>2. Liverpool: Thomas Taylor, 1819. 
               </li>
               <li class="bib-item" id="WGRENGRAVEDTURNER">Rawlinson,

                      W. G. <i>The Engraved Work of J. M. W. Turner, R.A.</i><text>. </text>London: Macmillan, 1908&#x2013;13. 
               </li>
               <li class="bib-item" id="REIMANMODERNMANUSCRIPTS">Reiman,

                      Donald H. <i>The Study of Modern Manuscripts: Public, Confidential and Private</i><text>. </text>Baltimore: Johns Hopkins University Press, 1993. 
               </li>
               <li class="bib-item" id="RENIERFRIENDSHIPSOFFERING">Renier,

                      Anne. <i>Friendship&#x02BC;s Offering: An Essay on the Annuals and Gift Books of the <span class="date-1801-1900">Nineteenth Century</span></i><text>. </text>London: Private Libraries Association, 1964. 
               </li>
               <li class="bib-item" id="REOPENINGOFTHECOLOSSEUM">&#x201C;Re&#x2010;opening of the Colosseum, Regent&#x02BC;s&#x2010;Park&#x201D;, <i>The Illustrated London News</i>. 
              (<span class="date-1845-04-26">26 April 1845</span>): 264&#x2013;65.
            
               </li>
               <li class="bib-item" id="REPTONOBSERVATIONS">Repton,

                      Humphry. <i>Observations on the Theory and Practice of Landscape Gardening: Including Some Remarks on Grecian and Gothic Architecure &#x005B;etc.&#x005D;</i><text>. </text>London: J. Taylor, 1805. 
               </li>
               <li class="bib-item" id="LOUDONREVNEUFRIEDHOF">Review of <i>Der Neue Friedhof vom Frankfurt am Main</i>, <i>Architectural Magazine</i>. 
        Ed.
      John Claudius Loudon.
      2, 
              (<span class="date-1835-03">March 1835</span>): 135&#x2013;36.
            
               </li>
               <li class="bib-item" id="REYNOLDSWORKS1797">Reynolds,

                      Joshua. <i>The Works of Sir Joshua Reynolds, Knight, Late President of the Royal Academy: To Which Is Prefixed an Account of the Life and Writings of the Author, by Edmund Malone</i><text>. </text>London: T. Cadell, Jun., and W. Davies, 1797. 
               </li>
               <li class="bib-item" id="HEATHSANNUAL1832">Ritchie,

                      Leitch. <i>Heath&#x02BC;s Picturesque Annual for <span class="date-1832">1832</span>: Travelling Sketches in the North of Italy, the Tyrol, and on the Rhine</i><text>. </text>Illustrated by Clarkson Stanfield.
        London: Longman, Rees, Orme, Brown, and Green, 1831&#x2013;32. 
               </li>
               <li class="bib-item" id="HEATHSANNUAL1833">Ritchie,

                      Leitch. <i>Heath&#x02BC;s Picturesque Annual for <span class="date-1833">1833</span>: Travelling Sketches on the Rhine, and in Belgium and Holland</i><text>. </text>Illustrated by Clarkson Stanfield.
        London: Longman, Rees, Orme, Brown, Green, and Longman, 1832&#x2013;33. 
               </li>
               <li class="bib-item" id="RITCHIEMEMOIRSPRINGLE">Ritchie,

                      Leitch. &#x201C;Memoirs of Thomas Pringle&#x201D;, Pringle,

                      Thomas. <i>The Poetical Works of Thomas Pringle; with a Sketch of His Life, by Leitch Ritchie: Studies in Retrospect</i>. London,
            Edward Moxon.
              
            
              (<span class="date-1838">1838</span>): ix&#x2013;cxlix.
            
               </li>
               <li class="bib-item" id="ROBERTSBRITISHARTPERIODICALS">Roberts,

                      Helene E. &#x201C;British Art Periodicals of the Eighteenth and Nineteenth Centuries&#x201D;, <i>Victorian Periodicals Newsletter</i>. 9, 
              (<span class="date-1970-07">July 1970</span>): 1&#x2013;183.
            
               </li>
               <li class="bib-item" id="BOOKHUNTER">Roberts,

                      William. <i>The Book&#x2010;Hunter in London: Historical and Other Studies of Collectors and Collecting</i><text>. </text>London: Elliot Stock, 1895. 
               </li>
               <li class="bib-item" id="FIRSTEDITIONMANIA">Roberts,

                      William. &#x201C;The First Edition Mania&#x201D;, <i>Fortnightly Review</i>. 55, n.s., 
              (<span class="date-1894">1894</span>): 347&#x2013;54.
            
               </li>
               <li class="bib-item" id="RAREBOOKS">Roberts,

                      William. <i>Rare Books and Their Prices: With Chapters on Pictures, Pottery, Porcelain, and Postage Stamps</i><text>. </text>London: George Redway, 1895. 
               </li>
               <li class="bib-item" id="ROBINSONRURALARCHITECTURE">Robinson,

                      P. F. <i>Rural Architecture; Being a Series of Designs for Ornamental Cottages</i><text>. </text>3. London: James Carpenter and Son, 1828. 
               </li>
               <li class="bib-item" id="ROGERSJOURNAL">Rogers,

                      Samuel. <i>The Italian Journal of Samuel Rogers</i><text>. </text>
        Ed.
      J. R. Hale.
      London: Faber and Faber, 1956. 
               </li>
               <li class="bib-item" id="ROGERSITALY1830">Rogers,

                      Samuel. <i>Italy</i><text>. </text>London: T. CadellE. Moxon, 1830. 
               </li>
               <li class="bib-item" id="ROGERSITALY1823">Rogers,

                      Samuel. <i>Italy: A Poem</i><text>. </text>London: John Murray, 1823. 
               </li>
               <li class="bib-item" id="ROGERSITALY1828">Rogers,

                      Samuel. <i>Italy: A Poem</i><text>. </text>London: John Murray, 1828. 
               </li>
               <li class="bib-item" id="ROGERSPOEMS1834">Rogers,

                      Samuel. <i>Poems</i><text>. </text>London: T. CadellE. Moxon, 1834. 
               </li>
               <li class="bib-item" id="ROSCOETOURISTSWITZERLANDITALY">Roscoe,

                      Thomas. <i>Jennings&#x02BC;s Landscape Annual for <span class="date-1830">1830</span>: The Tourist in Switzerland and Italy</i><text>. </text>Illustrated from Drawings by Samuel Prout.
        London: Robert Jennings and William Chaplin, 1829&#x2013;30. 
               </li>
               <li class="bib-item" id="ROSCOETOURISTITALY">Roscoe,

                      Thomas. <i>Jennings&#x02BC;s Landscape Annual for <span class="date-1831">1831</span>: The Tourist in Italy</i><text>. </text>Illustrated from Drawings by Samuel Prout.
        London: Robert Jennings and William Chaplin, 1830&#x2013;31. 
               </li>
               <li class="bib-item" id="ROSCOETOURISTITALY1832">Roscoe,

                      Thomas. <i>Jennings&#x02BC;s Landscape Annual for <span class="date-1831">1832</span>: The Tourist in Italy</i><text>. </text>Illustrated from Drawings by J. D. Harding.
        London: Robert Jennings and William Chaplin, 1831&#x2013;32. 
               </li>
               <li class="bib-item" id="ROSENZERNERROMANTICISM">Rosen,

                      Charles, and Henri Zerner. <i>Romanticism and Realism: The Mythology of Nineteenth&#x2010;Century Art</i><text>. </text>New York: W. W. Norton, 1984. 
               </li>
               <li class="bib-item" id="WMROSSETTILETTERS">Rossetti,

                      William Michael. <i>Selected Letters of William Michael Rossetti</i><text>. </text>
        Ed.
      Roger W. Peattie.
      University Park: Pennsylvania State University Press, 1990. 
               </li>
               <li class="bib-item" id="ROUSSEAUCONFESSIONS">Rousseau,

                      Jean&#x2010;Jacques. <i>Confessions</i><text>. </text>Translated by Cohen J. M..
        London: Penguin, 1953. 
               </li>
               <li class="bib-item" id="RULANDLEGENDS">Ruland,

                      Wilhelm. <i>Legends of the Rhine</i><text>. </text>9. Translated by H. Ford.
        Köln am Rhein: Hoursch &#x0026; Bechstedt, 1906. 
               </li>
               <li class="bib-item" id="RUTHERFORDVICTORIANCEMETERY">Rutherford,

                      Sarah. <i>The Victorian Cemetery</i><text>. </text>Oxford: Shire, 2008. 
               </li>
               <li class="bib-item" id="DEVELOPMENTBIBLIOGRAPHICALSTUDY">Sadleir,

                      Michael. &#x201C;The Development during the Last Fifty Years of Bibliographical Study of Books of the <span class="date-1801-1900">XIXth Century</span>&#x201D;, <i>The Bibliographical Society, <span class="date-1892-1942">1892&#x2013;1942</span>: Studies in Retrospect</i>. 
        Ed.
      F. C. Francis.
      London,
            Bibliographical Society.
              
            
              (<span class="date-1945">1945</span>): 146&#x2013;58.
            
               </li>
               <li class="bib-item" id="SADLEIREXCURSIONS">Sadleir,

                      Michael. <i>Excursions in Victorian Bibliography</i><text>. </text>London: Chaundy &#x0026; Cox, 1922. 
               </li>
               <li class="bib-item" id="SAUERLANDERCATHOLICRUBENS">Sauerländer,

                      Willibald. <i>The Catholic Rubens: Saints and Martyrs</i><text>. </text>Translated by David Dollenmayer.
        Los Angeles: Getty Research Institute, 2014. 
               </li>
               <li class="bib-item" id="SAUNDERSREGENTSPARK">Saunders,

                      Ann. <i>Regent&#x02BC;s Park: A Study of the Development of the Area from <span class="date-1086">1086</span> to the Present Day</i><text>. </text>Newton Abbot: David &#x0026; Charles, 1969. 
               </li>
               <li class="bib-item" id="SAUSSUREVOYAGES">Saussure,

                      Horace&#x2010;B&#x00E9;n&#x00E9;dict de. <i>Voyages dans les Alpes: pr&#x00E9;c&#x00E9;d&#x00E9;s d&#x02BC;un essai sur l&#x02BC;histoire naturelle des environs de Genève</i><text>. </text>Geneva and Neuchâtel: Barde, MangetLouis Fauche&#x2010;Borel, 1786&#x2013;96. 
               </li>
               <li class="bib-item" id="BLESSINGTONDNB">Scheuerle,

                      William H. &#x201C;Gardiner &#x005B;n&#x00E9;e Power; other married name, Farmer&#x005D;, Marguerite &#x005B;Margaret&#x005D;, countess of Blessington (<span class="date-1789-1849">1789&#x2013;1849</span>)&#x201D;, <i>Oxford Dictionary of National Biography Online Edition</i>. Oxford University Press.
              
            
              (<span class="date-2004">2004</span>). http://www.oxforddnb.com/view/article/2640 (accessed <span class="date-2018-01-21">21 January 2018</span>)
               </li>
               <li class="bib-item" id="SCHMIDTPICTURESQUE">Schmidt,

                      Martin. &#x201C;From the Picturesque to the Genuine Vernacular: Nature and Nationhood in Ruskin&#x02BC;s Architectural Thought, <span class="date-1830-1860">1830&#x2013;60&#x201D;</span>, <i>Ruskin in Perspective: Contemporary Essays</i>. 
        Ed.
      Carmen Casaliggi  Paul, and Paul March&#x2010;Russell.
      Newcastle upon Tyne,
            Cambridge Scholars Publishing.
              
            
              (<span class="date-2007">2007</span>): 132&#x2013;53.
            
               </li>
               <li class="bib-item" id="SCOTTABBOT1820">Scott,

                      Walter. <i>The Abbot</i><text>. </text>Edinburgh and London: Archibald Constable, and John BallantyneLongman, Hurst, Rees, Orme, and Brown, 1820. 
               </li>
               <li class="bib-item" id="SCOTTESSAYONIMITATIONS">Scott,

                      Walter. &#x201C;Essay on Imitations of the Ancient Ballad&#x201D;, <i>The Walter Scott Digital Archive</i>. Edinburgh University Library.
              
            http://www.walterscott.lib.ed.ac.uk/works/poetry/apology/essay.html
               </li>
               <li class="bib-item" id="SCOTTMARMIONBAYNE">Scott,

                      Walter. <i>Marmion</i><text>. </text>
        Ed.
      Thomas Bayne.
      Oxford: Clarendon, 1889. 
               </li>
               <li class="bib-item" id="SCOTTMISCELLANEOUSPROSE">Scott,

                      Walter. <i>Miscellaneous Prose Works of Sir Walter Scott</i><text>. </text>Edinburgh and London: Robert CadellWhittaker &#x0026; Co., 1834&#x2013;36. 
               </li>
               <li class="bib-item" id="SCOTTPOETICALWORKS">Scott,

                      Walter. <i>Poetical Works of Sir Walter Scott, Bart.</i><text>. </text>
        Ed.
      John Gibson Lockhart.
      Edinburgh and London: Robert CadellWhittaker &#x0026; Co., 1833&#x2013;34. 
               </li>
               <li class="bib-item" id="SCOTTROKEBY1813">Scott,

                      Walter. <i>Rokeby; A Poem</i><text>. </text>Edinburgh and London: John BallantyneLongman, Hurst, Rees, Orme, and Brown, 1813. 
               </li>
               <li class="bib-item" id="SCOTTWORKSCALEDONIAN">Scott,

                      Walter. <i>Works: Caledonian Edition</i><text>. </text>Boston: Houghton Mifflin, 1913. 
               </li>
               <li class="bib-item" id="SCOTTISHTOURIST"><i>The Scottish Tourist, and Itinerary: Or, a Guide to the Scenery and Antiquities of Scotland and the Western Islands; with a Description of the Principal Steam&#x2010;boat Tours</i><text>. </text>3. Edinburgh: Stirling &#x0026; KenneyJohn FairbairnWhittaker &#x0026; Co.James Duncan, 1830. 
               </li>
               <li class="bib-item" id="SHELLEYRAMBLES">Shelley,

                      Mary. <i>Rambles in Germany and Italy, in <span class="date-1840">1840</span>, <span class="date-1842">1842</span>, and <span class="date-1843">1843</span></i><text>. </text>London: Edward Moxon, 1844. 
               </li>
               <li class="bib-item" id="SHELLEYESSAYSLETTERS">Shelley,

                      Percy Bysshe. <i>Letters, Essays from Abroad</i><text>. </text>
        Ed.
      Mary Shelley.
      London: Edward Moxon, 1840. 
               </li>
               <li class="bib-item" id="DICKENSBIBLIOGRAPHYSHEPHERD">Shepherd,

                      Richard Herne. <i>The Bibliography of Dickens: A Bibliographical List Arranged in Chronological Order of the Published Writings in Prose and Verse of Charles Dickens (from <span class="date-1834-1880">1834 to 1880</span>)</i><text>. </text>N.p., N.d. &#x005B;1880?&#x005D;. 
               </li>
               <li class="bib-item" id="RUSKINBIBLIOGRAPHYSHEPHERD4">Shepherd,

                      Richard Herne. <i>The Bibliography of Ruskin: A Bibliographical List Arranged in Chronological Order of the Published Writings in Prose and Verse of John Ruskin, M.A. (from <span class="date-1834-1879">1834 to 1879</span>)</i><text>. </text>4th ed., revised and enlarged. N.p., N.d. &#x005B;1879?&#x005D;. 
               </li>
               <li class="bib-item" id="RUSKINBIBLIOGRAPHYSHEPHERD5">Shepherd,

                      Richard Herne. <i>The Bibliography of Ruskin: A Bibliographical List Arranged in Chronological Order of the Published Writings in Prose and Verse of John Ruskin, M.A. (from <span class="date-1834-1881">1834 to 1881</span>)</i><text>. </text>5th ed., revised and enlarged. London: Elliot Stock, N.d. &#x005B;1881?&#x005D;. 
               </li>
               <li class="bib-item" id="RUSKINBIBLIOGRAPHYSHEPHERD3">Shepherd,

                      Richard Herne. <i>The Bibliography of Ruskin: A Bibliographical List Arranged in Chronological Order of the Published Writings in Prose and Verse of John Ruskin, M.A., from <span class="date-1834-1878-11">1834 to the Present Time (November 1878)</span></i><text>. </text>3. N.p., 1878. 
               </li>
               <li class="bib-item" id="RUSKINBIBLIOGRAPHYSHEPHERD2">Shepherd,

                      Richard Herne. <i>The Bibliography of Ruskin: A Bibliographical List Arranged in Chronological Order of the Published Writings in Prose and Verse of John Ruskin, M.A., from <span class="date-1834-1878-10">1834 to the Present Time (October 1878)</span></i><text>. </text>2. N.p., 1878. 
               </li>
               <li class="bib-item" id="RUSKINBIBLIOGRAPHYSHEPHERD1">Shepherd,

                      Richard Herne. <i>The Bibliography of Ruskin: A Bibliographical List Arranged in Chronological Order of the Published Writings in Prose and Verse of John Ruskin, M.A., from <span class="date-1835-1878-09">1835 to the Present Time (September 1878)</span></i><text>. </text>1. N.p., 1878. 
               </li>
               <li class="bib-item" id="TENNYSONIANA">Shepherd,

                      Richard Herne. <i>Tennysoniana: Notes Bibliographical and Critical</i><text>. </text>London: Basil Montagu Pickering, 1866. 
               </li>
               <li class="bib-item" id="SHEPHERDPOEMS">Shepherd,

                      Richard Herne. <i>Translations from Charles Baudelaire, with a Few Original Poems</i><text>. </text>New ed.. London: B. Robson, 1877. 
               </li>
               <li class="bib-item" id="SHILLINGSBURGFROMGUTENBERG">Shillingsburg,

                      Peter. <i>From Gutenberg to Google: Electronic Representations of Literary Texts</i><text>. </text>Cambridge: Cambridge University Press, 2006. 
               </li>
               <li class="bib-item" id="SCHOLARLYEDITING">Shillingsburg,

                      Peter. <i>Scholarly Editing in the Computer Age: Theory and Practice</i><text>. </text>3. Ann Arbor: University of Michigan Press, 1996. 
               </li>
               <li class="bib-item" id="FIRSTPIRATEDEDITION">Sinclair,

                      David. &#x201C;The First Pirated Edition of Tennyson&#x02BC;s Poems&#x201D;, <i>Book Collector</i>. 22, 
              (<span class="date-1973">1973</span>): 177&#x2013;88.
            
               </li>
               <li class="bib-item" id="HOLMEPROUT"><i>Sketches by Samuel Prout in France, Belgium, Germany, Italy, and Switzerland</i><text>. </text>Text by Ernest G. Halton.
        
        Ed.
      Charles Holme.
      London, Paris, and New York: Studio, 1915. 
               </li>
               <li class="bib-item" id="EARLYEDITIONS">Slater,

                      J. H. <i>Early Editions: A Bibliographical Survey of the Works of Some Popular</i><text>. </text>London: Kegan Paul, Trench, Trübner, 1894. 
               </li>
               <li class="bib-item" id="SLATERHOWTOCOLLECT">Slater,

                      J. H. <i>How to Collect Books</i><text>. </text>London: George Bell &#x0026; Sons, 1905. 
               </li>
               <li class="bib-item" id="SLATERROMANCE">Slater,

                      J. H. <i>The Romance of Book&#x2010;Collecting</i><text>. </text>London: Elliot Stock, 1898. 
               </li>
               <li class="bib-item" id="SMITHTHESTORYOFMONTBLANC">Smith,

                      Albert. <i>The Story of Mont Blanc</i><text>. </text>London: David Bogue, 1853. 
               </li>
               <li class="bib-item" id="SMOLLETTHISTORYOFENGLAND">Smollett,

                      Tobias. <i>The History of England, from the Revolution to the Death of George the Second</i><text>. </text>New ed.. London: T. Cadell, 1785. 
               </li>
               <li class="bib-item" id="SNOWERHINE">Snowe,

                      Joseph. <i>The Rhine: Legends, Traditions, History, from Cologne to Mainz</i><text>. </text>London: F. C. Westley; J. Madden, 1839. 
               </li>
               <li class="bib-item" id="SOTHEBYCAT1931SEVERN">Sotheby &#x02BC; Co.. <i>Catalogue of the Collection of Pictures and Drawings Formerly the Property of the Late Professor John Ruskin, Removed from Brantwood, Coniston (Sold by Order of the Trustees), and the Property of the Late Joseph Arthur Palliser&#x2010;Severn, R.I., R.O.I., Removed from 9, Warwick Square, London, S.W.</i><text>. </text>London: Sotheby &#x0026; Co., 20 May 1931. 
               </li>
               <li class="bib-item" id="SOTHEBYCAT1931">Sotheby &#x02BC; Co.. <i>Catalogue of the Final Portion of the Manuscripts &#x0026; Library of John Ruskin, Removed from His Residence, Brantwood, Coniston, Which Is About To Be Offered for Sale, and the Property of the Late Joseph Arthur Palliser Severn, Esq., Removed from 9, Warwick Square, S.W.; and of a Small Library, Principally of Modern Authors and of Finely Printed and Illustrated Books, the Property of Mrs. Mander, Blacketts, Chorley Wood, Herts.</i><text>. </text>London: Sotheby &#x0026; Co., 18 May 1931. 
               </li>
               <li class="bib-item" id="SOTHEBYCAT1930">Sotheby &#x02BC; Co.. <i>Catalogue of the Manuscripts and Remaining Library of John Ruskin, Removed from His Residence, Brantwood, Coniston, and Sold with the Consent of Arthur Severn, Esq., and of His Trustees</i><text>. </text>London: Sotheby &#x0026; Co., 24 July 1930. 
               </li>
               <li class="bib-item" id="SOTHEBYCAT2011">Sotheby &#x02BC; Co.. <i>Catalogue of Old Master and British Drawings including Property from the Descendants of Walter Brandt</i><text>. </text>London: Sotheby &#x0026; Co., 7 July 2011. 
               </li>
               <li class="bib-item" id="SPATESDARKSTAR">Spates,

                      James L. &#x201C;John Ruskin&#x02BC;s Dark Star: New Lights on His Life Based on the Unpublished Biographical Materials and Research of Helen Gill Viljoen&#x201D;, <i>Bulletin of the John Rylands University Library</i>. 82.1
              (<span class="date-2000">Spring 2000</span>): 135&#x2013;91.
            
               </li>
               <li class="bib-item" id="SPEARRUSKINSITALY">Spear,

                      Jeffrey L. &#x201C;Ruskin&#x02BC;s Italy&#x201D;, <i>Browning Institute Studies</i>. 12, 
              (<span class="date-1984">1984</span>): 73&#x2013;92.
            
               </li>
               <li class="bib-item" id="SPIRITOFTHEANNUALS">&#x201C;Spirit of &#x2018;The Annuals&#x2019; for <span class="date-1828">1828&#x201D;</span>, <i>Mirror of Literature, Amusement, and Instruction</i>. London,
            10.288 (supplementary no.)
              (<span class="date-1828">1828</span>): 409&#x2013;24.
            
               </li>
               <li class="bib-item" id="STAFFORDVOYAGE">Stafford,

                      Barbara Maria. <i>Voyage into Substance: Art, Science, Nature, and the Illustrated Travel Account, 1760&#x2013;1840</i><text>. </text>Cambridge, Mass.: MIT Press, 1984. 
               </li>
               <li class="bib-item" id="STARKETRAVELSINEUROPE">Starke,

                      Mariana. <i>Travels in Europe: For the Use of Travellers on the Continent, and Likewise in the Island of Sicily, to which is added, An Account of the Remains of Ancient Italy, and Also of the Roads Leading to Those Remains</i><text>. </text>8th ed., considerably enlarged. London: John Murray, 1833. 
               </li>
               <li class="bib-item" id="STEARNSBRITISHINDUSTRY">Stearns,

                      Peter. &#x201C;British Industry through the Eyes of French Industrialists (<span class="date-1820-1848">1820&#x2013;1848</span>)&#x201D;, <i>Journal of Modern History</i>. 37, 
              (<span class="date-1965-03">March 1965</span>): 50&#x2013;61.
            
               </li>
               <li class="bib-item" id="STEVENEDINBURGHHIGHSCHOOL">Steven,

                      William. <i>The History of the High School of Edinburgh</i><text>. </text>Edinburgh: Maclachlan &#x0026; Stewart, 1849. 
               </li>
               <li class="bib-item" id="STEWARTROMANTICMAGAZINES">Stewart,

                      David. <i>Romantic Magazines and Metropolitan Literary Culture</i><text>. </text>Basingstoke: Palgrave Macmillan, 2011. 
               </li>
               <li class="bib-item" id="STOKESSADLEIR">Stokes,

                      Roy. <i>Michael Sadleir, <span class="date-1888-1957">1888&#x2013;1957</span></i><text>. </text>Metuchen, N.J.: Scarecrow, 1980. 
               </li>
               <li class="bib-item" id="SUMMERSONARCHITECTUREINBRITAIN">Summerson,

                      John. <i>Architecture in Britain, <span class="date-1530-1830">1530&#x2013;1830</span></i><text>. </text>4. Harmondsworth: Penguin, 1963. 
               </li>
               <li class="bib-item" id="SWINBURNEUNKNOWNPOET">Swinburne,

                      Algernon C. &#x201C;An Unknown Poet&#x201D;, <i>Fortnightly Review</i>. 17.98
              (<span class="date-1875-02-01">1 February 1875</span>): 217&#x2013;32.
            
               </li>
               <li class="bib-item" id="MIRRORSWISSCOTTAGECOLOSSEUM">&#x201C;Swiss Cottage, at the Colosseum, in the Regent&#x02BC;s Park&#x201D;, <i>Mirror of Literature, Amusement, and Instruction</i>. London,
            19.544
              (<span class="date-1832-04-28">28 April 1832</span>): 257&#x2013;59.
            
               </li>
               <li class="bib-item" id="TANSELLEHISTORICISM">Tanselle,

                      G. Thomas. &#x201C;Historicism and Critical Editing, <span class="date-1979-1985">1979&#x2013;1985&#x201D;</span>, <i>Textual Criticism since Greg: A Chronicle, <span class="date-1950-2000">1950&#x2013;2000</span></i>. Charlottesville,
            Bibliographical Society of the University of Virginia.
              
            
              (<span class="date-2005">2005</span>): 109&#x2013;54.
            
               </li>
               <li class="bib-item" id="TAYLORCASTLES">Taylor,

                      Robert R. <i>The Castles of the Rhine: Recreating the Middle Ages in Modern Germany</i><text>. </text>Waterloo, Ont.: Wilfrid Laurier University Press, 1998. 
               </li>
               <li class="bib-item" id="TENNYSONLETTERS">Tennyson,

                      Alfred. <i>The Letters of Alfred Lord Tennyson</i><text>. </text>
        Ed.
      Cecil Y. Lang  Edgar F., and Edgar F. Shannon Jr..
      Oxford: Clarendon, 1982&#x2013;90. 
               </li>
               <li class="bib-item" id="WATKINHOPE"><i>Thomas Hope, Regency Designer</i><text>. </text>
        Ed.
      David Watkin  PhilipHewat-Jaboor, and PhilipHewat-Jaboor .
      New Haven: Yale University Press, 2008. 
               </li>
               <li class="bib-item" id="THOMPSONHOXTON">Thompson,

                      David. &#x201C;Hoxton &#x005B;Independent&#x005D; Academy (<span class="date-1791-1826">1791&#x2013;1826</span>) and Highbury College (<span class="date-1826-1850">1826&#x2013;1850</span>)&#x201D;, <i>Dissenting Academies Online: Database and Encyclopedia</i>. Dr Williams&#x02BC;s Centre for Dissenting Studies.
              
            
              (<span class="date-2012-03">March 2012</span>). http://dissacad.english.qmul.ac.uk (accessed <span class="date-2015-11-20">20 November 2015</span>)
               </li>
               <li class="bib-item" id="THORMAHLENBRONTESEDUCATION">Thormählen,

                      Marianne. <i>The Brontës and Education</i><text>. </text>Cambridge: Cambridge University Press, 2007. 
               </li>
               <li class="bib-item" id="TIMBSCURIOSITIES">Timbs,

                      John. <i>Curiosities of London: Exhibiting the Most Rare and Remarkable Objects of Interest in the Metropolis; with Nearly Fifty Years&#x02BC; Personal Recollections</i><text>. </text>London: David Bogue, 1855. 
               </li>
               <li class="bib-item" id="TOOKEDIVERSIONS">Tooke,

                      John Horne. <i>ΕΠΕΑ ΠΤΕΡΟΕΝΤΑ &#x005B;Epea Pteroenta&#x005D;; or, the Diversions of Purley</i><text>. </text>New ed.. Revised and corrected by Richard Taylor.
        London: Thomas Tegg, 1829. 
               </li>
               <li class="bib-item" id="TRAVELLERSGUIDEBELGIUM"><i>The Traveller&#x02BC;s Guide through Belgium; or New and Complete Geographical, Historical, and Picturesque Account of That Country . . . </i><text>. </text>Brussels: Ad. Wahlen, 1835. 
               </li>
               <li class="bib-item" id="TROLLOPEBELGIUM">Trollope,

                      Mrs. &#x005B;Frances&#x005D;. <i>Belgium and Western Germany in <span class="date-1833">1833</span>: Including Visits to Baden&#x2010;Baden, Wiesbaden, Cassel, Hanover, the Harz Mountains, &#x0026;c. &#x0026;c. </i><text>. </text>Paris: Baudry&#x02BC;s European Library, 1834. 
               </li>
               <li class="bib-item" id="TWYMANBREAKINGTHEMOULD">Twyman,

                      Michael. <i>Breaking the Mould: The First Hundred Years of Lithography</i><text>. </text>London: British Library, 2001. Panizzi Lectures
               </li>
               <li class="bib-item" id="SHEPHERDOBITUARY">Unsigned obituary of Richard Herne Shepherd, <i>The Times</i>. London,
            
              (<span class="date-1895-07-30">30 July 1895</span>). 
               </li>
               <li class="bib-item" id="REVIEWBARRETTBROWNINGEARLIERPOEMS1878">Unsigned review of <i>The Earlier Poems of Elizabeth Barrett Browning</i>, <i>Athenaeum</i>. London,
            2616
              (<span class="date-1877-12-15">15 December 1877</span>): 765&#x2013;67.
            
               </li>
               <li class="bib-item" id="REVIEWMYERSWORDSWORTH">Unsigned review of <i>English Men of Letters&#x2014;Wordsworth</i> by F. W. H. Myers, <i>Athenaeum</i>. London,
            2784
              (<span class="date-1881-03-05">5 March 1881</span>): 328&#x2013;29.
            
               </li>
               <li class="bib-item" id="REVIEWLAMBPOETRY">Unsigned review of <i>Poetry for Children</i> by Charles and Mary Lamb, <i>Athenaeum</i>. London,
            2620
              (<span class="date-1878-01-12">12 January 1878</span>): 47&#x2013;49.
            
               </li>
               <li class="bib-item" id="REVIEWWALTONIANA">Unsigned review of <i>Waltoniana: Inedited Remains in Verse and Prose of Izaak Walton</i> by Richard Herne Shepherd, <i>Athenaeum</i>. London,
            2695
              (<span class="date-1879-06-21">21 June 1879</span>): 785&#x2013;86.
            
               </li>
               <li class="bib-item" id="VANDERMERWESTANFIELD">van der Merwe,

                      Pieter, and Roger Took. <i>The Spectacular Career of Clarkson Stanfield, <span class="date-1793-1867">1793&#x2013;1867</span>: Seaman, Scene&#x2010;Painter, Royal Academician</i><text>. </text>Tyne and Wear: Tyne and Wear County Council Museums, 1979. 
               </li>
               <li class="bib-item" id="VELDEBIRTHOFRUBENS">Van de Velde,

                      Carl, and Prisca Valkeneers. <i>The Birth of Rubens</i><text>. </text>Translated by Jantien Black.
        Ghent: Snoeck, 2013. 
               </li>
               <li class="bib-item" id="VANDERMEULENTANSELLETRANSCRIPTION">Vander Meulen,

                      David L., and G. Thomas Tanselle. &#x201C;A System of Manuscript Transcription&#x201D;, <i>Studies in Bibliography</i>. 52, 
              (<span class="date-1999">1999</span>): 201&#x2013;12.
            
               </li>
               <li class="bib-item" id="JACKSONVICTORIANDICTIONARY"><i>The Victorian Dictionary: Exploring Victorian London</i><text>. </text>
        Ed.
      Lee Jackson.
      2012. http://www.victorianlondon.org/index-2012.htm
               </li>
               <li class="bib-item" id="VIGNEPRINGLE">Vigne,

                      Randolph. <i>Thomas Pringle: South African Pioneer, Poet, and Abolitionist</i><text>. </text>Woodbridge, Suffolk: James Currey, 2012. 
               </li>
               <li class="bib-item" id="VILJOENRUSKINSBACKGROUNDS">Viljoen,

                      Helen Gill. <i>Ruskin&#x02BC;s Backgrounds, Friendships, and Interests, as Reflected in the F. J. Sharp Collection</i><text>. </text>Flushing, N.Y.: Paul Klapper Library, Queens College, City University of New York, 1965. 
               </li>
               <li class="bib-item" id="SCOTTISHHERITAGE">Viljoen,

                      Helen Gill. <i>Ruskin&#x02BC;s Scottish Heritage: A Prelude</i><text>. </text>Urbana: University of Illinois Press, 1956. 
               </li>
               <li class="bib-item" id="WAAGENWORKSOFART">Waagen,

                      Gustav Friedrich. <i>Works of Art and Artists in England</i><text>. </text>Translated by H. E. Lloyd.
        London: John Murray, 1838. 
               </li>
               <li class="bib-item" id="WALTONQUELQUE">Walton,

                      Benjamin. &#x201C;&#x2018;Quelque peu th&#x00E9;âtral&#x2019;: The Operatic Coronation of Charles X&#x201D;, <i><span class="date-1801-1900">Nineteenth&#x2010;Century</span> Music</i>. 26.1
              (<span class="date-2002">Summer 2002</span>): 3&#x2013;22.
            
               </li>
               <li class="bib-item" id="WALTONDRAWINGS">Walton,

                      Paul H. <i>The Drawings of John Ruskin</i><text>. </text>London: Oxford University Press, 1972. New York: Hacker Art Books, 1985. 
               </li>
               <li class="bib-item" id="WEEKSROGERS">Weeks,

                      Donald. &#x201C;Samuel Rogers: Man of Taste&#x201D;, <i>PMLA</i>. 62.2
              (<span class="date-1947-06">June 1947</span>): 472&#x2013;86.
            
               </li>
               <li class="bib-item" id="COLLECTIONRUSKINMANUSCRIPTS">Weihe,

                      Kenneth G. &#x201C;A Collection of Ruskin Manuscripts&#x201D;, <i>Yale University Library Gazette</i>. 5.3
              (<span class="date-1931-01">January 1931</span>): 47&#x2013;49.
            
               </li>
               <li class="bib-item" id="WHITAKERHISTORYRICHMONDSHIRE">Whitaker,

                      Thomas Dunham. <i>History of Richmondshire, in the North Riding of the County of York</i><text>. </text>London: Longman, Hurst, Rees, Orme, and Brown, 1823. 
               </li>
               <li class="bib-item" id="WHITERUBENSANDBRITISHART">White,

                      Christopher. &#x201C;Rubens and British Art, <span class="date-1630-1790">1630&#x2013;1790&#x201D;</span>, <i>&#x201C;Sind Briten hier?&#x201D; Relations between British and Continental Art, <span class="date-1680-1880">1680&#x2013;1880</span></i>. Paderborn,
            Wilhelm Fink.
              
            
              (<span class="date-1981">1981</span>): 27&#x2013;43.
            
               </li>
               <li class="bib-item" id="GOODSPEED">Whitehill,

                      Walter Muir. &#x201C;Charles Eliot Goodspeed&#x201D;, <i>Proceedings of the Massachusetts Historical Society</i>. 3d71, 
              (<span class="date">October 1953&#x2013;May 1957</span>): 362&#x2013;65.
            
               </li>
               <li class="bib-item" id="WILDMANRUSKINANDSWITZERLAND1">Wildman,

                      Stephen. <i>Ruskin and Switzerland, Part 1 (31 March&#x2013;1 July 2001) &#x005B;Exhibition Catalogue&#x005D;</i><text>. </text>Lancaster: Ruskin Library, 2001. 
               </li>
               <li class="bib-item" id="WILDMANRUSKINANDSWITZERLAND2">Wildman,

                      Stephen. <i>Ruskin and Switzerland, Part 2 (3 July&#x2013;30 September 2001) &#x005B;Exhibition Catalogue&#x005D;</i><text>. </text>Lancaster: Ruskin Library, 2001. 
               </li>
               <li class="bib-item" id="WILLIAMSLIFEOFLAWRENCE">Williams,

                      D. E. <i>The Life and Correspondence of Sir Thomas Lawrence</i><text>. </text>London: Henry Colburn and Richard Bentley, 1831. 
               </li>
               <li class="bib-item" id="WILLIAMSARMSTRONGSTEAM">Williams,

                      David M., and John Armstrong. &#x201C;Steam Shipping and the Beginnings of Overseas Tourism: British Travel to North&#x2010;Western Europe, <span class="date-1820-1850">1820&#x2013;1850&#x201D;</span>, <i>Journal of European Economic History</i>. 35.1
              (<span class="date-2006">2006</span>): 125&#x2013;48.
            
               </li>
               <li class="bib-item" id="RUSKINBIBLIOGRAPHYWISE">Wise,

                      Thomas J., and James P. Smart. <i>A Complete Bibliography of the Writings in Prose and Verse of John Ruskin, LL.D.: With a List of the More Important Ruskiniana</i><text>. </text>London: Privately printed, 1893. 
               </li>
               <li class="bib-item" id="WOLK-SIMONNATURALISM">Wolk&#x2010;Simon,

                      Linda. &#x201C;Naturalism in Lombard Drawing from Leonardo to Cerano𠇍, <i>Painters of Reality: The Legacy of Leonardo and Carravaggio in Lombardy</i>. New Haven,
            Yale University Press, for the Metropolitan Museum of Art.
              
            
              (<span class="date-2004">2004</span>): 45&#x2013;63.
            
               </li>
               <li class="bib-item" id="WORDSWORTHPOETICALWORKS">Wordsworth,

                      William. <i>The Poetical Works of William Wordsworth</i><text>. </text>London: Longman, Rees, Orme, Brown, and Green, 1827. 
               </li>
               <li class="bib-item" id="WORPOLELASTLANDSCAPES">Worpole,

                      Ken. <i>Last Landscapes: The Architecture of the Cemetery in the West</i><text>. </text>London: Reaktion, 2003. 
               </li>
               <li class="bib-item" id="BACKHOUSEDNB">Yeldham,

                      Charlotte. &#x201C;Backhouse, Margaret (bap. <span class="date-1818">1818</span>, d. <span class="date-1896">1896</span>)&#x201D;, <i>Oxford Dictionary of National Biography Online Edition</i>. Oxford University Press.
              
            
              (<span class="date-2004">2004</span>). http://www.oxforddnb.com/view/article/48922 (accessed <span class="date-2012-01-01">1 January 2012</span>)
               </li>
            </ul>
            
            
         </div>
         
      </div>
      
      
   </div>
   
   
   
   
</html>