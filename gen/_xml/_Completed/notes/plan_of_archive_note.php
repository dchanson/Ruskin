&#x003C;?php
&#x0024;paths &#x003D; array('./', '../', '../../');
&#x0024;root_path &#x003D; './';

foreach (&#x0024;paths  as &#x0024;path){
&#x0024;filename &#x003D; &#x0024;path.'header.inc.php';

if (file_exists(&#x0024;filename)){
&#x0024;root_path &#x003D; &#x0024;path;
break;
};
}
define('ROOT_PATH', &#x0024;root_path);
require_once(&#x0024;root_path."header.inc.php");
?&#x003E;&#x003C;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"&#x003E;<!DOCTYPE HTML><html xmlns:custom="http://whatever" xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples" xmlns:xi="http://www.w3.org/2001/XInclude">
   
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset&#x003D;UTF-8">
      <title>The Plan of the Archive</title>&#x003C;?php require_once(ROOT_PATH."layout_includes/site_top.inc.php"); ?&#x003E;
          &#x003C;link href&#x003D;"&#x003C;?php echo r_build_url("style.php?p&#x003D;site_styles.scss"); ?&#x003E;" rel&#x003D;"stylesheet" type&#x003D;"text/css"&#x003E;
        </head>
   
   &#x003C;?php require_once(ROOT_PATH."layout_includes/navigation.inc.php"); ?&#x003E;
   
   <div class="note">
      <div class="bibilographical" id="">
         
         <h1 class="page-title">Plan of the Archive</h1>
         
         <div class="p">The archive <i>Early Ruskin Manuscripts</i> (<i>ERM</i>)
                    contains, at the most fundamental level, two sets of edited primary materials: 
                    <i>works</i> and <i>manuscripts</i>.</div>
         
         <ul>
            
            <li>A <i>work</i> in this edition consists of a discrete text 
                            by <span class="persName-JR">Ruskin</span> (e.g., a poem, an essay, a 
                            sermon, a mathematical proof), introduced by a critical apparatus, 
                            and represented diplomatically by all available witnesses of that text. Each witness is facsimiled 
                            in manuscript and in nineteenth&#x2010;century published forms, if available, and annotated with commentary. 
                            In scope, works range from only a few lines of verse to a composite&#x2010;genre project extending over many lengthy sections of verse, prose, and graphic illustration. 
                            Excluded from the plan of the edition are transcriptions of certain early letters that have been edited by 
                            <span class="persName-VAB">Van Akin Burd</span> in &#x003C;a href&#x003D;"/notes/bibliography#RFL" target&#x003D;"_self"&#x003E;<span class="title-book-RFL"><i>Ruskin Family Letters</i></span>&#x003C;/a&#x003E;. 
                            Facsimiles of holograph letters, however, are included if available; and works contained within early letters, 
                            such as poems, are given full editorial treatment as discreet works.</li> 
            
            
            <li>A <i>manuscript</i> is a physical document manifesting 
                            <span class="persName-JR">Ruskin</span>&#x02BC;s texts. Traditionally in Ruskin studies, 
                            major manuscripts, which were originally bound notebooks or bound later by <span class="persName-JR">Ruskin</span>&#x02BC;s editors, 
                            were numbered by the editors; and the manuscripts&#x02BC; nomenclature and physical arrangement were retained 
                            when distributed among various repositories. In <i>ERM</i>, these major manuscripts 
                            are each represented by a critical apparatus; and facsimiles of the major manuscripts are presented both in whole 
                            and in part, divided into pages associated with each of the discreet <i>works</i> that make up the contents of the manuscripts.</li>
            </ul>
         
         <div class="p">Organizationally, the archive turns on these basic units, 
                    as represented by a given work&#x02BC;s <a href="#WORKSPAGES">Work Pages</a> 
                    and by a given manuscript&#x02BC;s <a href="#MANUSCRIPTPAGES">Manuscript Pages</a>. 
                    The fundamental relation between these two kinds of units is the manuscript as container and the work as contained. 
                    For <span class="persName-JR">Ruskin</span>, however, the separate integrity of these units often posed a creative tension. 
                    He treated some manuscript notebooks as anthologies that assembled many separate works, but he also developed single works 
                    into complex, lengthy composites that usurped the borders of their manuscript witness.
                    The archive aspires to represent and preserve this creative tension in its editorial methodology (see 
                    &#x003C;a href&#x003D;"/notes/editorial_rationale_note" target&#x003D;"_self"&#x003E;Editorial and Encoding Rationale and Methodology&#x003C;/a&#x003E;).</div>
         
         
         <div id="WORKSPAGES" class="section">
            <span class="head-section">Work Pages</span>
            
            <div class="p">A given work is typically represented by the following kinds of documents:</div>
            
            <ul>
               
               <li>the <a href="#WORKAPPARATUSPAGE">Work Apparatus Page</a>;</li>
               
               <li>the <a href="#WORKTEXTPAGES">Work Text Pages</a>, consisting of</li>
               
               <li>
                  
                  <ul>
                     
                     <li><a href="#WORKWITNESSES">transcript(s) of witness(es)</a>;</li>
                     
                     <li>the <a href="#GLOSSES">glosses</a> that annotate specific passages of the witness(es);</li>
                     
                     <li><a href="#WORKFACSIMILES">facsimile(s)</a> associated with the respective witness(es).</li>
                     </ul>
                  </li>
               
               <li><a href="#WORKDRAWINGS">Figures</a> integral to the work.</li>
               </ul>
            
            
            <div class="p">When a user selects a work from the Indicies (by title or first line), or from any other location in the archive, 
                        the selection defaults to the <a href="#WORKAPPARATUSPAGE">Work Apparatus Page</a>.
                        From here, the user may choose from the list of witnesses, and read the main body of commentary on the work. 
                        This page is headed by the editorial title of the work, 
                        a form of the title that is standardized according to rules given in 
                        the &#x003C;a href&#x003D;"/notes/title_citation_note" target&#x003D;"_self"&#x003E;System of Title Citation for Works&#x003C;/a&#x003E;, 
                        in order to insure consistent reference throughout the archive. (The <a href="#WORKAPPARATUSPAGE">Work Apparatus Page</a> also includes 
                        a section, <a href="#TITLE">Title</a>, devoted to explaining <span class="persName-JR">Ruskin</span>&#x02BC;s own title or titles for the work, if any, 
                        along with the often complex subsequent history of entitling the work.)</div>
            
            
            <div id="WORKAPPARATUSPAGE" class="subsection">
               <span class="head-subsection">Work Apparatus Page</span>
               
               <div class="p">The Apparatus Page for each work is divided into seven sections, listed in a menu at the top of the page: 
                        Witnesses, Title, Genre, Manuscripts, Date, Composition and Publication, Discussion.</div>
               
               <ul>
                  
                  <li><i>Witnesses</i>. All available witnesses for a given work are listed, with each item hyperlinked 
                                to an edited transcription. Clicking the item displays the transcript along with its associated facsimile in <a href="#SHOWCASE">Showcase</a>.</li>
                  
                  <li><i>Title</i>. Declares the editorial title of the work, 
                                followed by <span class="persName-JR">Ruskin</span>&#x02BC;s form(s) of the title, if any, 
                                along with discussion of sources or other matters relevant to the entitling of the work by <span class="persName-JR">Ruskin</span> 
                                and/or by his editors.</li>
                  
                  <li><i>Genre</i>. Declares the work&#x02BC;s genre and provides additional relevant information, such as 
                                (in the case of poems) a brief commentary on prosody.</li>
                  
                  <li><i>Manuscripts</i>. All known physical manifestations of the work (e.g., drafts, fair copies, published versions) are listed, 
                                with each item hyperlinked to the Apparatus Page of the manuscript in question (see 
                                <a href="#MANUSCRIPTPAGES">Manuscript Pages</a>).</li>
                  
                  <li><i>Date</i>. Contains the argument for the date assigned to the work.</li>
                  
                  <li><i>Composition and Publication</i>. Analyzes the work&#x02BC;s publication history, if any, 
                                and reconstructs the compositional history.</li>
                  
                  <li><i>Discussion</i>. This final section takes up contextual matters not previously covered, 
                                such as evidence for a work&#x02BC;s sources, the occasion of its
                                composition, and other topics suggested by the work&#x02BC;s contents.</li>
                  </ul>
               </div>
            
            
            <div id="WORKTEXTPAGES" class="subsection">
               <span class="head-subsection">Work Text Pages and Showcase</span>
               
               <div class="p">From the <a href="#WORKAPPARATUSPAGE">Work Apparatus Page</a>, the reader may select available witnesses and corpora connected with the work, 
                        each of which opens a Work Text Page in Showcase, consisting of an edited transcription paired with a corresponding facsimile of the physical witness. 
                        Facsimiles of printed witnesses are limited to nineteenth&#x2010;century publications prior to  
                        &#x003C;a href&#x003D;"/notes/poems_1891_note" target&#x003D;"_self"&#x003E;<i>Poems</i> (<span class="date-1891">1891</span>)&#x003C;/a&#x003E; and the 
                        &#x003C;a href&#x003D;"/notes/library_edition_note" target&#x003D;"_self"&#x003E;Library Edition&#x003C;/a&#x003E; (<span class="date-1903-1912">1903&#x2013;12</span>), which are widely available.</div>
               
               
               <div id="SHOWCASE" class="sub-subsection">
                  <span class="head-sub-subsection">Showcase</span>
                  
                  <div class="p"><i>Showcase</i> is the display space for Text Pages. The controls in Showcase include the following functions, ordered from left to right atop the Showcase window.</div>
                  
                  <ul>
                     
                     <li><i>Arrows</i>. Left and right arrows respectively reverse and advance the reader through a work&#x02BC;s available facsimiles for a particular witness, 
                                provided that witness occupies more than one facsimile. The reader may also select the available facsimiles 
                                from the pull&#x2010;down menu between the arrows.</li>
                     
                     <li><i>Windowpane</i>. A facsimile and its transcript for a particular witness are tied together, and by default they appear side by side in Showcase. 
                                Using the windowpane control, however, the reader may fill the window with the facsimile alone, 
                                or with the transcript alone, and then return to the divided window.</li>
                     
                     <li><i>Magnification</i>. A pull&#x2010;down menu increases or decreases magnification of the facsimile.</li>
                     
                     <li><i>Font</i>. A pull&#x2010;down menu increases or decreases font size of the transcript.</li>
                     
                     <li><i>Hand toggle</i>. A toggle tool (shown as a pen) allows the user to filter multiple hands 
                                in a witness. The default view exhibits all hands without discrimination. A pull-dowm menu allows the user to filter 
                                only <span class="persName-JR">John Ruskin</span>&#x02BC;s hand, or only other hands that may be present, such as 
                                <span class="persName-MR">Margaret Ruskin</span>&#x02BC;s, or 
                                <span class="persName-JJR">John James Ruskin</span>&#x02BC;s.</li>
                     </ul>
                  </div>
               
               
               <div id="WORKWITNESSES" class="sub-subsection">
                  <span class="head-sub-subsection">Witnesses and Commentary</span>
                  
                  <div class="p">For discussion of the transcription and encoding methodologies governing the transcription of witnesses, see 
                        &#x003C;a href&#x003D;"/notes/editorial_rationale_note" target&#x003D;"_self"&#x003E;Editorial and Encoding Rationale and Methodology&#x003C;/a&#x003E;.</div>
                  
                  <div class="p">Transcriptions carry metadiscursive information and editorial commentary tied to specific passages of text. Unlike <a href="#NOTES">Notes</a>, 
                            which deal with global topics hyperlinked throughout the archive, and the <a href="#WORKAPPARATUSPAGE">Apparatus Page</a>, 
                            which supplies general commentary on a work as a whole, these more specialized annotations are accessed primarily at the local level of the textual witness, 
                            although this commentary is also searchable by keyword using the archive&#x02BC;s main Search tool.</div>
                  
                  <ul>
                     <a class="id-holder" id="GLOSSES">N</a><li class="id-holder-data"><i>Glosses</i>. These annotations are tied to specific passages in textual witnesses 
                                by superscript characters (letters or numbers, colored blue to distinguish from the original text). The hyperlinked characters open 
                                a separate window, with the desired commentary shaded for ease of reference. There are two types of glossses.</li>
                     
                     <li>
                        
                        <ul>
                           
                           <li><i>Contextual glosses</i>. Hyperlinked using Arabic numerals, these glosses annotate persons, 
                                        places, literary and mythical references, historical background, and other contextual information needed to appreciate 
                                        a particular passage. Also, annotations by <span class="persName-JR">Ruskin</span>&#x02BC;s earlier editors and by 
                                        <span class="persName-JR">Ruskin</span> himself are included here. These are distinguished from the <i>ERM</i> editor&#x02BC;s 
                                        glosses by a bracketed comment, such as &#x005B;Ruskin&#x02BC;s note&#x005D;.</li>
                           
                           <li><i>Textual glosses</i>. Hyperlinked using lowercase alphabetical Latin characters, these glosses annotate 
                                        textual matters affecting a particular passage, which are too specific to be treated in the <a href="#WORKAPPARATUSPAGE">Apparatus Page</a>.</li>
                           </ul>
                        </li>
                     
                     <li><i>Page notations</i>. A gray bar marks page breaks in the witness, 
                                as reflected in the the corresponding facsimile.</li>
                     
                     <li><i>Line numbers</i>. For poems, line numbering is transcribed from 
                                <span class="persName-JR">Ruskin</span>&#x02BC;s own marginal numbering in a manuscript, since this information 
                                can prove useful for textual analysis. Any misnumbering is not corrected. In addition, editorial line numbering is provided separately.</li>
                     </ul>
                  </div>
               
               
               <div id="WORKFACSIMILES" class="sub-subsection">
                  <span class="head-sub-subsection">Facsimiles</span>
                  
                  <div class="p">Facsimile views, in the case of bound manuscripts, open to the page(s) containing the chosen witness of the work. At present, in most cases, this view will appear as a
                        two&#x2010;page spread. These views are identical to what the reader finds when opening the facsimile from the <a href="#MANUSCRIPTPAGES">Manuscript Pages</a>.</div>
                  
                  <div class="p">For manuscripts that were formerly bound but now disassembled owing to damage, such as those comprised by &#x003C;a href&#x003D;"/apparatuses/msia_apparatus" target&#x003D;"_self"&#x003E;MS IA&#x003C;/a&#x003E;, 
                        the facsimile view is often similar to a two&#x2010;page spread. Loose single&#x2010;sheet manuscripts are shown one side per view, recto followed by verso.</div>
                  </div>
               
               
               <div id="WORKDRAWINGS" class="sub-subsection">
                  <span class="head-sub-subsection">Figures</span>
                  
                  <div class="p">It is not a mission of <i>ERM</i> to catalogue and facsimile comprehensively the artwork that <span class="persName-JR">Ruskin</span> produced within the scope of this edition (i.e., 
                        <span class="date-1826-1842">between 1826 and 1842</span>). However, where artwork forms an integral part of the works and manuscripts in its purview, the archive 
                            does facsimile and comment on those figures. Additionally, some other artworks by <span class="persName-JR">Ruskin</span> as well as 
                            other images relevant to a given work are supplied where possible. Artwork that cannot be facsimiled but is significantly related to the archive&#x02BC;s contents 
                        receives commentary in the form of <a href="#NOTES">Notes</a> and 
                            <a href="#GLOSSES">Glosses</a>.</div>
                  
                  <ul>
                     <a class="id-holder" id="FIGDESC">N</a><li class="id-holder-data"><i>Figure descriptions</i>. Facsimiles of artwork are accompanied by a description that lists dimensions and medium 
                                along with other essential information, followed by commentary on influences and other contextual discussion, if pertinent.</li>
                     <a class="id-holder" id="LETTERS">N</a><li class="id-holder-data"><i>Letters</i>. Given the design of the archive, letters written by <span class="persName-JR">Ruskin</span> and his family should be treated as 
                                <a href="#WORKWITNESSES">Witnesses</a>,  
                                and some letters do have this status in the archive, in cases where epistles either contain a witness of a work (e.g., a verson of a poem 
                                included in a letter) or necessarily constitute a work because a letter or portion of a letter is drafted as part of a manuscript. 
                                Otherwise, since the letters were ably edited by <span class="persName-VAB">Van Akin Burd</span> in &#x003C;a href&#x003D;"/notes/bibliography#RFL" target&#x003D;"_self"&#x003E;<i>The Ruskin Family Letters</i>&#x003C;/a&#x003E;, 
                                <span class="persName-VAB">Burd</span>&#x02BC;s edition is referenced throughout the archive, with <i>ERM</i> supplying only manuscript facsimiles of letters where possible.</li>
                     </ul>
                  </div>
               </div>
            
            
            <div id="MANUSCRIPTPAGES" class="section">
               <span class="head-section">Manuscript Pages</span>
               
               <div class="p">For some manuscripts, Manuscript Pages logically consist only of the <a href="#MANUSCRIPTAPPARATUSPAGE">Manuscript Apparatus Page</a> 
                        and the <a href="#MANUSCRIPTFACSIMILE">Manuscript Facsmile</a>, since a manuscript transcription would amount to 
                        the sum of the Text Pages constituing the work(s) contained within the manuscript. In some cases, however, <i>ERM</i> 
                        compiles <i>corpuses</i>&#x2014;entire manuscripts or parts of manuscripts that <span class="persName-JR">Ruskin</span> 
                        appears to have regarded as coterminous with a composite work or anthology of works (see 
                        &#x003C;a href&#x003D;"/notes/editorial_rationale_note" target&#x003D;"_self"&#x003E;Editorial and Encoding Rationale and Methodology&#x003C;/a&#x003E;).</div>    
               
               
               
               <div id="MANUSCRIPTAPPARATUSPAGE" class="subsection">
                  <span class="head-subsection">Manuscript Apparatus Page</span>
                  
                  <div class="p">The Manuscript Apparatus Page is the default destination for any hyperlinked occurrence of a manuscript title, whether accessed through the Indices, Works Pages, or various forms of commentary. 
                        The page is headed by the manuscript&#x02BC;s editorial title, as governed by rules given in the 
                        &#x003C;a href&#x003D;"/notes/title_citation_for_major_mss_note" target&#x003D;"_self"&#x003E;System of Title Citation for Major Manuscripts&#x003C;/a&#x003E;.</div>
                  
                  <div class="p">The Apparatus consists of seven sections: Title, Location, Provenance, Description, Contents, Discussion.</div>
                  
                  <ul>
                     
                     <li><i>Title</i>. Declares the editorial title and discusses the history of entitling the manuscript, including <span class="persName-JR">Ruskin</span>&#x02BC;s
                                own title, if any, and his editors&#x02BC; titles.</li>
                     
                     <li><i>Location</i>. Identifies where the manuscript is currently held, along with any helpful cataloging information.</li>
                     
                     <li><i>Provenance</i>. Describes the history of ownership and transmission. For several manuscripts, which share a common provenance, this section consists simply of a
                                link to the appropriate section of the master note on &#x003C;a href&#x003D;"/notes/provenance_note" target&#x003D;"_self"&#x003E;Provenance&#x003C;/a&#x003E;; for some other manuscripts, 
                                this section describes a unique history.</li>
                     
                     <li><i>Description</i>. Describes physical characteristics, such as size, color, and kind of binding materials. For several manuscripts, 
                                the description analyzes what &#x003C;a href&#x003D;"/notes/collingwood_w_g_note" target&#x003D;"_self"&#x003E;<span class="persName-WGC">W. G. Collingwood</span>&#x003C;/a&#x003E;, using a geological metaphor, termed a manuscript&#x02BC;s <i>stratification</i>. 
                                Somewhat like an account of the collation of a printed work, stratification describes 
                            <span class="persName-JR">Ruskin</span>&#x02BC;s (and, sometimes, his and/or others&#x02BC;) pagination of the manuscript, 
                                whether applied to an originally blank, bound notebook or to a compilation of originally separate leaves, bound at a later time. 
                                In the case of <span class="persName-JR">Ruskin</span>&#x02BC;s own page numbering, descriptions must often take account of misnumbering of
                                pages and of missing pages. Moreover, this analysis undertakes a reconstruction of 
                                <span class="persName-JR">Ruskin</span>&#x02BC;s patterns of use of the manuscript.</li>
                     
                     <li><i>Contents</i>. Lists sequentially the works contained in the manuscript, with titles hyperlinked to their respective Work Apparatus Pages.</li>
                     
                     <li><i>Date</i>. Provides the inclusive dates for creation of the manuscript by <span class="persName-JR">Ruskin</span> and sometimes by others.</li>
                     
                     <li><i>Discussion</i>. Discusses topics germane to the particular manuscript, often elaborating on the <i>Description</i> by analyzing 
                                specific features of <span class="persName-JR">Ruskin</span>&#x02BC;s palimpsest&#x2010;like uses and reuses of an originally bound manuscript.</li>
                     </ul>
                  
                  </div>
               
               
               <div id="MANUSCRIPTFACSIMILE" class="subsection">
                  <span class="head-subsection">Manuscript Facsimile</span>
                  
                  <div class="p">The complete facsimile of a manuscript&#x2014;from cover to cover, if bound, viewed as a sequence usually of two&#x2010;page spreads&#x2014;is the same as what a reader would view when selecting
                        sequentially the Work Facsimiles it contains.</div>
                  </div>
               </div>
            
            
            <div id="NOTES" class="section">
               <span class="head-section">Notes</span>
               
               <div class="p"><i>Notes</i> contain commentary, which can be hyperlinked from any point in the archive 
                            (unlike <a href="#GLOSSES"><i>Glosses</i></a>, 
                            which anchor commentary to particular passages in <a href="#WORKWITNESSES">witnesses</a>). 
                            Notes are grouped in four subtypes:</div>
               
               <ul>
                  
                  <li>bibliographical</li>
                  
                  <li>biographical</li>
                  
                  <li>contextual</li>
                  
                  <li>geographical.</li>
                  </ul>
               </div>
            
            
            
            
            <div id="BIBLIOGRAPHY" class="section">
               <span class="head-section">Bibliography</span>
               
               <div class="p">The <i>Bibliography</i> is the reference point for bibliographical citations of works, published and unpublished, 
                                exclusive of the manuscripts and edited witnesses of works that comprise the archive itself. Througout the archive, 
                                bibliographical citations are given in short&#x2010;title form, hyperlinked to full citations in the Bibliography. 
                                Viewed as a full document, the Bibliography is divided into sections:</div>
               
               <ul>
                  
                  <li>Manuscript Sources
                                        
                     <ul>
                        
                        <li>Works in Manuscript by Ruskin and the Ruskin Family Other Than the Manuscripts Constituting This Edition</li>
                        
                        <li>Works in Manuscript by Authors Other Than the Ruskins</li>
                        </ul>
                     </li>
                  
                  <li>Published Sources
                                        
                     <ul>
                        
                        <li>Works by <span class="persName-JR">Ruskin</span> in Published Editions</li>
                        
                        <li>Secondary Sources, along with Primary Sources in Published Editions of Authors Other Than Ruskin</li>
                        </ul>
                     </li>
                  </ul>
               
               </div>
            
            
            </div>
         
         </div>
   </div>      
   
   
   </html>