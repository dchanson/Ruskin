<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns:tei="http://www.tei-c.org/ns/1.0" xmlns:teix="http://www.tei-c.org/ns/Examples">
   
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset&#x003D;UTF-8">
      <title>Editorial and Encoding Rationale and Methodology</title><?php include("../inactive.inc.php"); ?><link href="../styles.css" rel="stylesheet" type="text/css">
   </head>
   
   <?php include("../navigation.inc.php"); ?>
   
   <div class="note">
      
      <div class="title">Editorial and Encoding Rationale and Methodology</div>
      
      <div id="" class="section">
         
         <p>For a detailed description of the kinds of webpages contained in the archive and their organization and navigation, 
                        see <a href="../notes/plan_of_archive_note.php" target="_blank">Plan of the Archive</a>. 
                        The present note discusses the more fundamental rationale and methodology for editing and encoding the manuscripts. 
                        Past editorial appproaches are reviewed in 
                        <a href="../notes/history_of_bibliography_and_editing_note.php" target="_blank" class="inactive">History of the Bibliography and Editing of the Early Manuscripts</a>.
         </p> 
         
         <p>The present note is divided into the following sections:</p>
         
         <ul>
            
            <li><a href="#EDITORIALRATIONALE">Editorial Rationale</a></li>
            
            <li>
               
               <ul>
                  
                  <li><a href="#DEFINING">Defining <i>Works</i> and <i>Manuscripts</i></a></li>
                  
                  <li><a href="#TEICORPUS">teiCorpus Markup and the Tension between Works and Corpora</a></li>
                  
                  <li><a href="#MATERIALITY">Expressing the Materiality of Manuscripts</a></li>
                  
                  <li><a href="#PRIVATE">The Private, Confidential, and Public in the Early Manuscripts</a></li>
                  
                  <li><a href="#JUVENILIA">The Documentary Editorial Orientation in Editing Juvenilia and Youthful Writing</a></li>
                  
                  <li><a href="#SCOPE">The Scope of <i>ERM</i></a></li>
                  
                  <li>
                     
                     <ul>
                        
                        <li><a href="#PREVIOUSEDITIONS">The Relation of <i>ERM</i> to Previous Editorial Projects Involving the Early Manuscripts</a></li>
                        
                        <li><a href="#SCOPEOFWORKS">The Scope of Works Included in <i>ERM</i></a></li>
                        
                        <li><a href="#COMMENTARY">The Scope of Commentary in <i>ERM</i>: Apparatuses, Notes, and Annotation</a></li>
                        
                     </ul>
                     
                  </li>
                  
               </ul>
               
            </li>
            
            
            <li><a href="#DOCUMENTARYPRACTICES">Documentary Editorial Practices and Encoding</a></li>
            
            <li>
               
               <ul>
                  
                  <li><a href="#TRANSCRIPTION">Transcription and Markup Protocol</a></li>
                  
                  <li><a href="#ELEMENT">Element, Attribute, and Value Usage</a></li>
                  
                  <li>
                     
                     <ul>
                        
                        <li><a href="#HAND">Handwriting and Special Characters</a></li>
                        
                        <li><a href="#JUSTIFICATION">Justification, Runover, and Word Division</a></li>
                        
                        <li><a href="#COMMA">Commas, Periods, and Other Punctuation</a></li>
                        
                        <li><a href="#DELETIONANDADDITION">Deletion and Addition</a></li>
                        
                        <li><a href="#METAMARKS">Metamarks</a></li>
                        
                        <li><a href="#DAMAGE">Manuscript Damage and Supplying Illegible or Missing Writing</a></li>
                        
                     </ul>
                     
                  </li>
                  
                  <li><a href="#GLOSSES">Glosses</a></li>
                  
               </ul>
            </li>
            
         </ul>
         
      </div>
      
      
      <div id="" class="section">
         <span class="head-section">Editorial Rationale</span>
         
         
         <div id="DEFINING" class="subsection">
            <span class="head-subsection">Defining <i>Works</i> and <i>Manuscripts</i></span>
            
            <p>The archive contains, at the most fundamental level, two sets of edited primary materials: 
                            <i>works</i> and <i>manuscripts</i>.
            </p>
            
            <ul>
               
               <li>A <i>work</i> in this edition consists of a discrete text
                                by <span class="persName-JR">Ruskin</span> (e.g., a poem, an essay, a
                                sermon, a mathematical proof), including all available witnesses of that
                                text (each of these edited and annotated), and accompanied by the
                                work&#x02BC;s explanatory apparatus and available facsimiles.
               </li>
               
               <li>A <i>manuscript</i> is a physical document manifesting
                                <span class="persName-JR">Ruskin</span>&#x02BC;s texts. 
                                A given work may be confined, so far as presently known, to a single text witness found in a single manuscript; 
                                or a work may be made up of multiple text witnesses found in more than one manuscript. In the archive, 
                                a manuscript is represented by an explanatory apparatus; and its contents are represented by the <i>works</i> 
                                (text witness(es) and apparatuses) that constitute the manuscript.
               </li>
               
            </ul>
            
            
            <p>As translated into Web pages, these two sets of materials form a given work&#x02BC;s Work Pages,
                            and a given manuscript&#x02BC;s Manuscript Pages (see <a href="../notes/plan_of_archive_note.php" target="_blank">Plan of the Archive</a>). 
                            This organization arose from the editor&#x02BC;s determination to strive for a double centeredness, reflecting 
                            a creative tension between <span class="persName-JR">Ruskin</span>&#x02BC;s composition of a unitary work and his dynamic conception 
                            of a collection containing that work. From the earliest juvenilia, <span class="persName-JR">Ruskin</span> was evidently fascinated by the dynamic potential of a work 
                            to contain or be contained by something else.
            </p>
            
            <p>Historically, a more static editorial approach to the early manuscripts was adopted by 
                            <a href="../notes/collingwood_w_g_note.php" target="_blank" class="inactive"><span class="persName-WGC">W. G. Collingwood</span></a>, the editor of 
                            <a href="../notes/poems_1891_note.php" target="_blank" class="inactive"><span class="title-book-JRPOEMS1891"><i>Poems</i> (1891)</span></a>, and, 
                            following his suit, by <a href="../notes/cook_e_t_note.php" target="_blank" class="inactive"><span class="persName-ETC">E. T. Cook</span></a> and 
                            <a href="../notes/wedderburn_note.php" target="_blank" class="inactive"><span class="persName-AW">Alexander Wedderburn</span></a>, the editors of the 
                            <a href="../notes/library_edition_note.php" target="_blank" class="inactive"><span class="title-book-JRWORKSLE">Library Edition</span></a>. 
                            They separated the early writing by genre, poetry and prose, with <span class="persName-WGC">Collingwood</span> having taken the lead in dividing the task 
                            into the <span class="title-book-JRPOEMS1891"><i>Poems</i> (1891)</span> and a planned complementary edition of prose&#x2014;the latter never realized under his editorship 
                            (and only in slapdash fashion under <span class="persName-ETC">Cook</span> and <span class="persName-AW">Wedderburn</span>&#x02BC;s). 
                            Accordingly, when <span class="persName-WGC">Collingwood</span> compiled the first descriptive bibliography of the early manuscripts, the 
                            <span class="title-bibliography_text-COLLINGWOODPRELIMINARYNOTE">&#x201C;Preliminary Note on the Original MSS. of the Poems&#x201D;</span>, 
                            published as an appendix to the <span class="title-book-JRPOEMS1891"><i>Poems</i> (1891)</span>, 
                            he awkwardly set apart the verse manuscripts from prose manuscripts in the archive available to him, 
                            describing and chronologically ordering only those manuscripts containing poetry. 
                            The division has proved problematic even on terms of the <span class="title-bibliography_text-COLLINGWOODPRELIMINARYNOTE">&#x201C;Preliminary Note&#x201D;</span> itself, 
                            which neglects to describe or explain prose works (or prose contained within largely verse works) present in some of the manuscripts that it does acknowledge, 
                            and which altogether omits mention of manuscripts that contain solely prose 
                            (<a href="../bibiliography/bibliography.php#JRPOEMS4D1891" target="_blank" class="inactive"><span class="title-book-JRPOEMS4D1891"><i>Poems</i> &#x005B;4<sup>o</sup>, 1891&#x005D;</span></a>,1:261&#x2013;67;
                            <a href="../bibiliography/bibliography.php#JRPOEMS8D1891" target="_blank" class="inactive"><span class="title-book-JRPOEMS8D1891"><i>Poems</i> &#x005B;8<sup>o</sup>, 1891&#x005D;</span></a>, 1:262&#x2013;68).
            </p> 
            
            <p>In the <a href="../notes/library_edition_note.php" target="_blank" class="inactive"><span class="title-book-JRWORKSLE">Library Edition</span></a>, 
                            <span class="persName-ETC">Cook</span> and <span class="persName-AW">Wedderburn</span> addressed the problems raised by this division only imperfectly. 
                            The editors maintained <span class="persName-WGC">Collingwood</span>&#x02BC;s scheme by separately housing early prose and poetry (volumes 1 and 2, respectively), 
                            but in the prose volume they did not attempt to match <span class="persName-WGC">Collingwood</span>&#x02BC;s <span class="title-bibliography_text-COLLINGWOODPRELIMINARYNOTE">&#x201C;Preliminary Note&#x201D;</span> 
                            for the poetry with a corresponding bibliographical description of the prose. Rather, in volume 1 they hastily repackaged 
                            existing republications of early prose from the <span class="date-1890-1899">1890s</span> by 
                            <a href="../notes/allen_george_note" target="_blank" class="inactive"><span class="persName-GA">George Allen</span> (<span class="date-1832-1907">1832&#x2013;1907</span>)</a>. 
                            In the second volume of the <span class="title-book-JRWORKSLE">Library Edition</span>, 
                            &#x201C;Poems,&#x201D; the editors reprinted <span class="persName-WGC">Collingwood</span>&#x02BC;s <span class="title-bibliography_text-COLLINGWOODPRELIMINARYNOTE">&#x201C;Preliminary Note&#x201D;</span>, 
                            expanding it only with brief descriptions of some additional verse manuscripts, and with lists by title of the poems contained in the manuscripts&#x2014;a useful enough enhancement, 
                            so far as it went, but failing to question the fundamental logic or serviceability of separating the poetry manuscripts from the prose in the first place 
                            (<a href="../bibiliography/bibliography.php#JRWORKSLE" target="_blank" class="inactive">Ruskin, <i>Works</i></a>, 2:529&#x2013;41).
            </p>
            
            <p>While organizing the manuscripts that the editors found at <span class="placeName-BRANTWOOD">Brantwood</span> during preparation of the 
                            <span class="title-book-JRWORKSLE">Library Edition</span>, they bound those that contained early prose exclusively, 
                            they bound some along with poems (e.g., forming <a href="../apparatuses/msia_apparatus.php" target="_blank" class="inactive"><span class="title-manuscript-MSIA">MS IA</span></a>), 
                            while omitting mention of those prose pieces in their revision of the bibliographical <span class="title-bibliography_text-COLLINGWOODPRELIMINARYNOTE">&#x201C;Preliminary Note&#x201D;</span>; 
                            and they bound or preserved some other physical manuscripts containing prose early works, relegating their description to the &#x201D;Bibliography&#x201D; volume (vol. 39) 
                            of the <span class="title-book-JRWORKSLE">Library Edition</span>. These latter descriptions were classified as &#x201C;Juvenilia&#x201D;&#x2014;as if 
                            the early poetry manuscripts listed in the <span class="title-bibliography_text-COLLINGWOODPRELIMINARYNOTE">&#x201C;Preliminary Note&#x201D;</span> were not themselves &#x201C;juvenilia.&#x201D; 
                            Thus, <span class="persName-WGC">Collingwood</span>&#x02BC;s editorial scheme&#x2014;which, if flawed in its logic, was at least carried out consistently and reasonably accurately&#x2014;was now 
                            confused by inconsistency and unevenness of bibliographical description and editorial procedure (see also 
                            <a href="../notes/history_of_bibliography_and_editing_note.php" target="_blank" class="inactive">History of the Bibliography and Editing of the Early Manuscripts</a>).
                        
            </p>
            
            <p><span class="persName-WGC">Collingwood</span>&#x02BC;s decision to divide the editorial task by genre, while arguably misguided in itself, 
                            and certainly compromised by <span class="persName-ETC">Cook</span> and <span class="persName-AW">Alexander Wedderburn</span>&#x02BC;s inconsistencies, 
                            is nonetheless significant for reflecting historical conditions of reception. <span class="persName-JR">Ruskin</span> in his late autobiographical writing 
                            encouraged readers to conceptualize his career as divided between an early misdirected ambition to become a poet 
                            and a discovery of his true vocation as a prose writer. Moreover, according to autobiographical accounts in <span class="title-book-JRFORS"><i>Fors Clavigera</i></span> 
                            and <span class="title-book-JRPRAETERITA"><i>Praeterita</i></span>, the prose that <span class="persName-JR">Ruskin</span> intended as representative of his vocation 
                            was not the poetic prose of his youth, but the allegedly more analytical and plain prose of later years. This account of <span class="persName-JR">Ruskin</span>&#x02BC;s 
                            genres is faithfully reflected in fin&#x2010;de&#x2010;siècle biographical and editorial projects, even 
                            at the cost of distorting facts, such as <span class="persName-WGC">Collingwood</span>&#x02BC;s insistence that <span class="persName-JR">Ruskin</span> 
                            started his professional writing life by having first published scientific prose, and not poetry, 
                            although <span class="persName-WGC">Collingwood</span> definitely knew the opposite to be the truth (see 
                            <a href="../apparatuses/on_skiddaw_and_derwentwater_apparatus.php#COMPPUB" target="_blank"><span class="title-poem-JRONSKIDDAWANDDERWENTWATER">&#x201C;On Skiddaw and Derwent Water&#x201D;</span>: Composition and Publication</a>).
            </p>
            
            <p>In <i>ERM</i>, rather than perpetuating the late&#x2010;century conceptualization of the early manuscripts in terms of a vocational watershed, 
                            the archive is organized around the creatively dynamic tension that is perceivable throughout the early writing&#x2014;the tension, namely, 
                            between the unitary work and the larger anthology or collection containing it. In the <a href="../notes/red_book_note.php" target="_blank">Red Books</a> 
                            of the <span class="date-1820-1829">1820s</span>, <span class="persName-JR">Ruskin</span> 
                            projected his prose compositions as &#x201C;volumes&#x201D; in an ongoing multi&#x2010;volume series, while filling out each of these &#x201C;volumes&#x201D; 
                            with poems collected into small anthologies. Eventually, he developed unitary works as multi&#x2010;genre anthologies in themselves, 
                            as in the <a href="../apparatuses/account_of_a_tour_on_the_continent_apparatus.php" target="_blank">Account of a Tour on the Continent</a> 
                            of <span class="date-1833-1834">1833&#x2013;34</span>, which he designed initially as a travelogue solely in verse, 
                            but then re&#x2010;conceived as a composite&#x2010;genre travelogue in verse, prose, and picture. 
                            In his youth, <span class="persName-JR">Ruskin</span> was interested more in the dynamic relation of poetry and prose than in their separation. 
                            At the same time, it is also true, alongside these increasingly complex and lengthy composite projects, <span class="persName-JR">Ruskin</span> observed 
                            the generic boundaries of some poetic, scientific, and theological manuscripts of the mid&#x2010;1830s onward. Inevitably, in <i>ERM</i>, 
                            the organization of the archive into Work Pages and Manuscript Pages tends to dispel some of these tensions even as the plan attempts to represent 
                            <span class="persName-JR">Ruskin</span>&#x02BC;s compositional practices. Offsetting this inevitable cost in the static architecture of the archive, 
                            we have been able to exploit features of a key <span class="orgName-TEI">Text Encoding Initiative (TEI)</span> element in our attempt to capture 
                            some of the dynamism of the relation between container and contained in <span class="persName-JR">Ruskin</span>&#x02BC;s 
                            <span class="title-program-XML">XML</span>&#x2010;like nested structures.
            </p>
            
         </div>
         
         
         <div id="TEICORPUS" class="subsection">
            <span class="head-subsection">&#x3008;teiCorpus&#x3009; Markup and the Tension between Works and Corpora</span>
            
            <p>Editing the early <span class="persName-JR">Ruskin</span> manuscripts therefore calls for representing both the integrity of a unitary work 
                            and what <span class="persName-NF">Neil Fraistat</span> terms its <i>contexture</i>&#x2014;the work&#x02BC;s 
                            potential to contribute to some grander stage of organization (see <a href="../bibiliography/bibliography.php#FRAISTATPOEMANDTHEBOOK" target="_blank" class="inactive">Fraistat, <i>The Poem and the Book</i></a>, 4). 
                            <span class="persName-JR">Ruskin</span> used his manuscripts to build contexture among the works they contain, sometimes exploring loose associations among rapidly drafted, successive fragments in the rough&#x2010;draft notebooks, 
                            <a href="../apparatuses/msvi_apparatus.php" target="_blank" class="inactive"><span class="title-manuscript-MSVI">MS VI</span></a> and <a href="../apparatuses/msviii_apparatus.php" target="_blank"><span class="title-manuscript-MSVIII">MS VIII</span></a>, 
                            and sometimes treating manuscripts as &#x201C;volumes&#x201D; or miscellanies in an expanding corpus&#x2014;the individual volumes themselves often made up partly of anthologies, as 
                            found in several of the <a href="../notes/red_book_note.php" target="_blank">Red Books</a> and in 
                            <a href="../apparatuses/msv_apparatus.php" target="_blank" class="inactive"><span class="title-manuscript-MSV">MS V</span></a>, <a href="../apparatuses/msvii_apparatus.php" target="_blank" class="inactive"><span class="title-manuscript-MSVII">MS VII</span></a>, and 
                            <a href="../apparatuses/msix_apparatus.php" target="_blank" class="inactive"><span class="title-manuscript-MSIX">MS IX</span></a> (see <a href="../notes/overview_of_mss_note.php" target="_blank" class="inactive">Overview of Manuscripts</a>). 
                            To represent both the contexture of the unitary work and the integrity of the unitary work in itself, 
                            <i>ERM</i> uses the <span class="orgName-TEI">TEI</span> element, &#x3008;teiCorpus&#x3009;, 
                            combined with standoff markup using <span class="title-program-XINCLUDE">XInclude</span>. Since &#x3008;teiCorpus&#x3009; can both contain and be contained by other &#x3008;teiCorpus&#x3009; documents, 
                            we have found that the element serves as the most available means to represent <span class="persName-JR">Ruskin</span>&#x02BC;s double centeredness in both work and manuscript, text and contexture.
            </p>
            
            <p>A simplified schematization of the &#x3008;teiCorpus&#x3009; markup representing <a href="../apparatuses/msi_apparatus.php" target="_blank"><span class="title-manuscript-MSI">MS I</span></a> appears as follows.
            </p>
            
            <p>&#x3008;teiCorpus xmlns&#x003D;"http://www.tei-c.org/ns/1.0" xmlns:xi&#x003D;"http://www.w3.org/2001/XInclude"&#x3009;<br/>
               <span class="space" style="padding-left:1.2em"> </span>&#x3008;teiHeader type&#x003D;"manuscript"&#x3009;<br/>
               <span class="space" style="padding-left:2.4em"> </span>&#x3008;fileDesc xml:id&#x003D;"msi"&#x3009;<br/>
               <span class="space" style="padding-left:3.6em"> </span>&#x3008; . . . &#x3009;<br/>
               <span class="space" style="padding-left:1.2em"> </span>&#x3008;/teiHeader&#x3009;<br/>
               <span class="space" style="padding-left:2.4em"> </span>&#x3008;xi:include href&#x003D;"harry_and_lucy_vol1_msi.xml"&#x3009;<br/>
               <span class="space" style="padding-left:3.6em"> </span>&#x3008;/xi:include&#x3009;<br/>
               <span class="space" style="padding-left:2.4em"> </span>&#x3008;xi:include href&#x003D;"poetry_anthology/msi_poetry_anthology.xml"&#x3009;<br/>
               <span class="space" style="padding-left:3.6em"> </span>&#x3008;/xi:include&#x3009;<br/>
                            &#x3008;/teiCorpus&#x3009;<br/>
            </p>
            
            <p>Typically, the highest&#x2010;level entity described as a <i>corpus</i> in <i>ERM</i> 
                            is the bound <i>manuscript</i>, which <a href="../notes/collingwood_w_g_note.php" target="_blank" class="inactive"><span class="persName-WGC">W. G. Collingwood</span></a> 
                            likewise recognized as the chief entity of the archive, and which he numbered 
                            according to a rough chronological sequence by roman numeral in his <span class="title-bibliography_text-COLLINGWOODPRELIMINARYNOTE">&#x201C;Preliminary Note&#x201D;</span>.
                            In the <span class="title-book-JRWORKSLE">Library Edition</span>, <span class="persName-ETC">Cook</span> and <span class="persName-AW">Wedderburn</span> annotated 
                            <span class="persName-WGC">Collingwood</span>&#x02BC;s <span class="title-bibliography_text-COLLINGWOODPRELIMINARYNOTE">&#x201C;Preliminary Note&#x201D;</span> by listing all of the titles of works contained in each of these bound manuscripts, 
                            listing the titles in the sequence in which they occur (which is not necessarily an indication of their order of composition), 
                            and they did the same for collections that were not originally bound but that they gathered and bound themselves (usually in red buckram), entitled with a roman numeral, 
                            and inserted into their version of <span class="persName-WGC">Collingwood</span>&#x02BC;s <span class="title-bibliography_text-COLLINGWOODPRELIMINARYNOTE">&#x201C;Preliminary Note&#x201D;</span>. 
                            This attention to the bound manuscript as a container, in neither <span class="persName-WGC">Collingwood</span>&#x02BC;s nor 
                            <span class="persName-ETC">Cook</span> and <span class="persName-AW">Wedderburn</span>&#x02BC;s case, fundamentally affected an editorial practice 
                            that turned on the discrete text, presented chronologically. In <i>ERM</i> likewise, we transcribe and annotate discrete works 
                            (using a documentary approach, not the earlier editors&#x02BC; eclectic and aesthetic approaches), but we also seek to describe 
                            <span class="persName-JR">Ruskin</span>&#x02BC;s strategies for contexture. The results are expressed as what the user finds listed on the Index Page 
                            as <i>manuscripts</i> and <i>corpora</i>.
            </p>
            
            <p>Manuscripts that were bound when <span class="persName-JR">Ruskin</span> first used them (e.g., the <a href="../notes/red_book_note.php" target="_blank">Red Books</a>, 
                            ledgers, and other half&#x2010; or quarter&#x2010;calf notebooks) presented a space defined by the parameters of their covers, 
                            which he conceptualized filling (at least initially) in some cases as &#x201C;volumes&#x201D; in a series, 
                            such as the volumes of the &#x201C;Harry and Lucy&#x201D; lessons, along with their complementary poetry anthologies (e.g., 
                            <a href="../apparatuses/msi_apparatus.php" target="_blank"><span class="title-manuscript-MSI">MS I</span></a>, 
                            <a href="../apparatuses/msii_apparatus.php" target="_blank" class="inactive"><span class="title-manuscript-MSII">MS II</span></a>, 
                            <a href="../apparatuses/msiii_apparatus.php" target="_blank"><span class="title-manuscript-MSIII">MS III</span></a>, 
                            <a href="../apparatuses/msiiia_apparatus.php" target="_blank" class="inactive"><span class="title-manuscript-MSIIIA">MS IIIA</span></a>); 
                            and which he formed in other cases as miscellanies, such as the 
                            <a href="../apparatuses/battle_of_waterloo_ms_apparatus" target="_blank" class="inactive"><span class="title-manuscript-BATTLEOFWATERLOOMS">&#x201C;Battle of Waterloo, A Play, in Two Acts, with Other Small Poems, Dedicated to His Father&#x201D;</span></a>, 
                            and <a href="../apparatuses/msv_apparatus.php" target="_blank" class="inactive"><span class="title-manuscript-MSV">MS V</span></a>, entitled &#x201C;Miscellaneous Poetry.&#x201D; 
                            The term <i>corpora</i> is reserved in <i>ERM</i> for those collections showing particularly strong contexture, 
                            because <span class="persName-JR">Ruskin</span> developed them as a unified project, often (but not necessarily) assigning an encompassing title. 
                            Corpora include the separate poetry anthologies found in the <a href="../notes/red_book_note.php" target="_blank">Red Books</a>; 
                            the serialized works, each of which may be viewed separately as discrete texts, but which <span class="persName-JR">Ruskin</span> 
                            explicitly linked together as a common project, such as the &#x201C;Harry and Lucy&#x201D; lessons; and most interestingly, works that <span class="persName-JR">Ruskin</span> 
                            evolved as composite, multi&#x2010;genre compilations, such as the 
                            <a href="../apparatuses/account_of_a_tour_on_the_continent_apparatus.php" target="_blank">Account of a Tour on the Continent</a>.
            </p>
            
            <p>A schematization of the &#x3008;teiCorpus&#x3009; markup representing a portion of <a href="../apparatuses/msi_poetry_anthology_apparatus.php" target="_blank"><span class="title-anthology-MSIPOETRYANTHOLOGY">&#x201C;Poetry&#x201D; &#x005B;MS I Poetry Anthology&#x005D;</span></a> looks like this:
            </p>
            
            <p>&#x3008;teiCorpus xmlns&#x003D;"http://www.tei-c.org/ns/1.0" xmlns:xi&#x003D;"http://www.w3.org/2001/XInclude"&#x3009;<br/>
               <span class="space" style="padding-left:1.2em"> </span>&#x3008;teiHeader type&#x003D;"anthology"&#x3009;<br/>
               <span class="space" style="padding-left:2.4em"> </span>&#x3008;fileDesc xml:id&#x003D;"msi_poetry_anthology"&#x3009;<br/>
               <span class="space" style="padding-left:3.6em"> </span>&#x3008; . . . &#x3009;<br/>
               <span class="space" style="padding-left:1.2em"> </span>&#x3008;/teiHeader&#x3009;<br/>
               <span class="space" style="padding-left:2.4em"> </span>&#x3008;xi:include href&#x003D;"msi_poetry_anthology_title.xml"&#x3009;<br/>
               <span class="space" style="padding-left:3.6em"> </span>&#x3008;/xi:include&#x3009;<br/>
               <span class="space" style="padding-left:2.4em"> </span>&#x3008;xi:include href&#x003D;"the_steam_engine_msi.xml"&#x3009;<br/>
               <span class="space" style="padding-left:3.6em"> </span>&#x3008;/xi:include&#x3009;<br/>
               <span class="space" style="padding-left:2.4em"> </span>&#x3008;xi:include href&#x003D;"on_scotland_msi.xml"&#x3009;<br/>
               <span class="space" style="padding-left:3.6em"> </span>&#x3008;/xi:include&#x3009;<br/>
               <span class="space" style="padding-left:3.6em"> </span>&#x3008; . . . &#x3009;<br/>
               <span class="space" style="padding-left:2.4em"> </span>&#x3008;xi:include href&#x003D;"mr_gloss_dating_msi.xml"&#x3009;<br/>
               <span class="space" style="padding-left:3.6em"> </span>&#x3008;/xi:include&#x3009;<br/>
               <span class="space" style="padding-left:3.6em"> </span>&#x3008; . . . &#x3009;<br/>
                            &#x3008;teiCorpus&#x3009;
            </p>
            
            <p>The distinction between corpora and manuscripts admittedly is ambiguous, with the contexture of corpora elevated by only a degree of intentionality above that of manuscripts&#x2014;the 
                            latter exhibiting looser but still definable contexture, such as <a href="../apparatuses/msv_apparatus.php" target="_blank" class="inactive"><span class="title-manuscript-MSV">MS V</span></a>, 
                            which <span class="persName-JR">Ruskin</span> compiled incrementally, open&#x2010;endedly, and somewhat randomly, 
                            one fair&#x2010;copy poem after another, yet still definably as &#x201C;Miscellaneous Poetry.&#x201D; 
                            In terms of <span class="orgName-TEI">TEI</span> markup, both corpora and manuscripts are enclosed by the same &#x3008;teiCorpus&#x3009; element. 
                            The slippage of one category into the other reflects <span class="persName-JR">Ruskin</span>&#x02BC;s 
                            own dynamic process of containment and expansion. He was even apt at times, like <span class="persName-WW">Wordsworth</span>, to think of the entirety 
                            of his &#x201C;works&#x201D; as a single corpus, as suggested by an annotation on 
                            <a href="../apparatuses/msii_apparatus.php" target="_blank" class="inactive"><span class="title-manuscript-MSII">MS II</span></a>.
            </p>
            
            <p>A more conventional way of representing anthologies in <span class="orgName-TEI">TEI</span> markup is to enclose multiple, related texts with the &#x3008;group&#x3009; element. 
                            Since this element can nest only within a &#x3008;TEI&#x3009; document, 
                            and unlike &#x3008;teiCorpus&#x3009; cannot itself contain a &#x3008;TEI&#x3009; document, 
                            the &#x3008;group&#x3009; element is too inflexible to accommodate <i>ERM</i>&#x02BC;s design for both single works and corpora or manuscripts. 
                            Single works are represented by multiple &#x3008;TEI&#x3009; documents&#x2014;typically, an apparatus, multiple witnesses and facsimiles, and glosses&#x2014;while 
                            corpora and manuscripts are also represented by multiple &#x3008;TEI&#x3009; documents, including an apparatus plus the sequence of works comprised by the collection 
                            (each work again consisting of its multiple &#x3008;TEI&#x3009; documents). An advantage that the &#x3008;group&#x3009; element holds over &#x3008;teiCorpus&#x3009; 
                            is that the former is designed to accommodate a &#x3008;head&#x3009; element, which would more satisfyingly encode the title, 
                            <span class="title-anthology-MSIPOETRYANTHOLOGY">&#x201C;Poetry&#x201D; &#x005B;MS I Poetry Anthology&#x005D;</span>, than what is shown in the sample markup above. 
                            Instead, using &#x3008;teiCorpus&#x3009;, either one must attach the anthology title as a &#x3008;head&#x3009; to the germane witness of the first item in the anthology, 
                            which is badly formed markup; or, as we have done above, one must insert the title as a separate <span class="orgName-TEI">TEI</span> document. Arguably, however, 
                            the latter procedure is as well&#x2010;formed as it is valid in the frequent cases in which <span class="persName-JR">Ruskin</span>&#x02BC;s titles and title pages 
                            refuse to conform to the structures that the &#x3008;group&#x3009; element was designed to describe. The &#x3008;teiCorpus&#x3009; element more flexibly 
                            accounts for <span class="persName-JR">Ruskin</span>&#x02BC;s dynamic play with the relation between container and contained.
            </p>
            
            <p>For example, in the originally blank, pre&#x2010;bound notebook that <span class="persName-WGC">Collingwood</span> named 
                            <a href="../apparatuses/msi_apparatus.php" target="_blank"><span class="title-manuscript-MSI">MS I</span></a>, 
                            and that the Ruskin family knew as one of the <a href="../notes/red_book_note.php" target="_blank">Red Books</a>, 
                            <span class="persName-JR">Ruskin</span> used the inside front endboard to make a title page for a text, 
                            <a href="../apparatuses/harry_and_lucy_vol1_apparatus.php" target="_blank" class="inactive"><span class="title-lesson-JRHARRYANDLUCYVOL1">&#x201C;Harry and Lucy,&#x201D; Vol. 1</span></a>, 
                            possibly intending the work, at least initially, to be coextensive with the entirety of the physical notebook 
                            (see <a href="../apparatuses/harry_and_lucy_vol1_apparatus.php#TITLE" target="_blank" class="inactive"><span class="title-lesson-JRHARRYANDLUCYVOL1">&#x201C;Harry and Lucy,&#x201D; Vol. 1</span>: Title</a>, and 
                            <a href="../apparatuses/msi_apparatus.php#TITLE" target="_blank">MS I: Title</a>). Whatever his initial plan was, <span class="persName-JR">Ruskin</span> 
                            completed &#x201C;Volume I&#x201D; of this prose work without filling the notebook&#x2014;a terminus 
                            that he declared by inscribing &#x201C;end of harry and Lucy&#x201D;&#x2014;and he went on to extend the contents with an anthology, 
                            <a href="../apparatuses/msi_poetry_anthology_apparatus.php" target="_blank"><span class="title-anthology-MSIPOETRYANTHOLOGY">&#x201C;Poetry&#x201D; &#x005B;MS I Poetry Anthology&#x005D;</span></a>. 
                            This, too, reached a terminus, which he declared with a colophon:
                            <span class="center">
                                The end<br/>
                  <span class="placeName-HERNE">hernhill</span><br/>
                  <span class="placeName-FOUNTAINST">fountain street</span><br/> 
                  <span class="del-scratchout">end of the poems</span><br/>
                                juvenile library <span class="placeName-FOUNTAINST">fountain street</span>
                  </span>
               
            </p>
            
            <p>The colophon reflects the play of closure by declaring a second ending&#x2014;the &#x201C;end of the poems&#x201D;&#x2014;specifying 
                            the end of the poetry anthology. This declaration was erased by somebody, using a rough pencil scratchout, 
                            perhaps in order to shift the emphasis to the end of a larger entity comprising 
                            <span class="title-lesson-JRHARRYANDLUCYVOL1">volume 1 of &#x201C;Harry and Lucy&#x201D;</span> plus the poetry anthology, 
                            <span class="title-anthology-MSIPOETRYANTHOLOGY">&#x201C;Poetry&#x201D;</span>. The colophon had perceptibly altered the usage of &#x201C;volume&#x201D; 
                            on the title page of <span class="title-manuscript-MSI">MS I</span>, which was clearly meant to apply only to the prose work. 
                            Using the &#x3008;group&#x3009; element, which calls for a &#x3008;front&#x3009; element to contain frontmatter, one cannot represent a title page 
                            that is in flux. One cannot describe <span class="persName-JR">Ruskin</span>&#x02BC;s dynamically developing ideas much more vividly using &#x3008;teiCorpus&#x3009; 
                            or perhaps any other <span class="title-program-XML">XML</span> element, but we strive at least not to misrepresent his ideas.
            </p>
            
            <p>Our usage of &#x3008;teiCorpus&#x3009; also permits description of <span class="persName-JR">Ruskin</span>&#x02BC;s manuscripts and corpora as collaborative or mediated documents, 
                            which were sometimes glossed by his parents. We do not know who scored through &#x201C;end of the poems&#x201D; in the colophon of 
                            <a href="../apparatuses/msi_apparatus.php" target="_blank"><span class="title-manuscript-MSI">MS I</span></a>, 
                            but it was certainly <span class="persName-MR">Ruskin&#x02BC;s mother</span> who inserted a gloss 
                            amid the poems making up <a href="../apparatuses/msi_poetry_anthology_apparatus.php" target="_blank"><span class="title-anthology-MSIPOETRYANTHOLOGY">&#x201C;Poetry&#x201D; &#x005B;MS I Poetry Anthology&#x005D;</span></a>. 
                            She wanted to date precisely her son&#x02BC;s beginning and completion of the manuscript. 
                            The determinacy of <span class="persName-MR">Margaret Ruskin</span>&#x02BC;s gloss, with its definite &#x201C;this book begun&#x201D; and &#x201C;finished,&#x201D; 
                            competes with the ambivalent play of <span class="persName-JR">John</span>&#x02BC;s closure 
                            (see <a href="../apparatuses/mr_gloss_dating_msi_apparatus.php" target="_blank"><span class="title-gloss-MRGLOSSMSI">Margaret Ruskin&#x02BC;s Gloss on the Dating of MS I</span></a>). 
                            While not necessarily intended to impose her will on the manuscript, <span class="persName-MR">Margaret</span>&#x02BC;s gloss gloss has in any case proved 
                            as ambiguous as <span class="persName-JR">Ruskin</span>&#x02BC;s own colophon, 
                            since both are followed by a new work entered on the inside back endboard&#x2014;an emblematical drawing, 
                            <a href="../drawings/.jpg" target="_blank" class="inactive">&#x201C;Heights of Wisdom, Depth of Fools&#x201D;</a>, which 
                            <span class="persName-JR">Ruskin</span> dated a few months later than <span class="persName-MR">his mother</span>&#x02BC;s gloss. 
                            Such play, whether including an edge of competitiveness or joy of collaboration, cannot be fully described in terms of an 
                            <span class="title-program-XML">XML</span> structure; the dynamics of play can be interpreted and discussed only in the archive&#x02BC;s commentary. 
                            However, the contributions of <span class="persName-JR">Ruskin</span>&#x02BC;s parents are very often convincingly encoded as glosses, 
                            which are not in the same class as the editor&#x02BC;s explanatory and textual glosses that hang from and refer only to specific texts, 
                            but which form stand&#x2010;alone <span class="orgName-TEI">TEI</span> documents (including their own apparatuses and transcriptions) 
                            referring to and forming part of the corpus as a whole.
            </p>
            
            <p>Finally, the &#x3008;teiCorpus&#x3009; markup also easily allows for reordering corpora athwart manuscripts. In the case of 
                            <a href="../apparatuses/account_of_a_tour_on_the_continent_apparatus.php" target="_blank"><span class="title-composite-JRACCOUNTTOUR">Account of a Tour on the Continent</span></a>, 
                            an eclectic editorial approach was adopted both by <span class="persName-WGC">W. G. Collingwood</span> and by <span class="persName-ETC">E. T. Cook</span> and <span class="persName-AW">Alexander Wedderburn</span> 
                            on the grounds that <span class="persName-JR">Ruskin</span> left extensive writing for the work in draft 
                            along with an ambitious outline for arranging and completing the work; however, prior to realizing that plan, he abandoned the fair copy, 
                            requiring copytext to be drawn from both the fair copy and the draft. <span class="persName-WGC">Collingwood</span> justified his approach in <span class="date-1891">1891</span> as follows: 
                            &#x201C;&#x005B;A&#x005D;s I find from a list at the end of . . . <a href="../apparatuses/msviii_apparatus.php" target="_blank">&#x005B;MS&#x005D; VIII</a>&#x201D; 
                            (i.e., the <a href="../witnesses/account_of_a_tour_on_the_continent_toc_msviii.php" target="_blank" class="inactive">Proposed Table of Contents for the Account of a Tour on the Continent</a>), 
                            <span class="persName-JR">Ruskin</span> &#x201C;intended this volume &#x005B;the <a href="../witnesses/account_of_a_tour_on_the_continent_msix.php" target="_blank" class="inactive">MS IX fair copy</a>&#x005D; 
                            to contain about 150 pieces of prose and poetry, and at least as many drawings! 
                            And in saying &#x005B;in <i>Praeterita</i>&#x005D; that he did not follow his tour beyond the <span class="geogName-RHINE">Rhine</span>, <span class="persName-JR">Mr. Ruskin</span> 
                            refers only to this volume, <a href="../apparatuses/msix_apparatus.php" target="_blank" class="inactive">No. IX</a>,&#x201D; and not to what he had in fact composed. 
                            &#x201C;I am pretty certain that he was not aware of the amount of material existing in rough copies at the back of his book&#x2010;shelves&#x201D; 
                            (<a href="../bibiliography/bibliography.php#JRPOEMS4D1891" target="_blank" class="inactive"><i>Poems</i> &#x005B;4<sup>o</sup>, 1891&#x005D;</a>, 1:266;
                            <a href="../bibiliography/bibliography.php#JRPOEMS8D1891" target="_blank" class="inactive"><i>Poems</i> &#x005B;8<sup>o</sup>, 1891&#x005D;</a>, 1:267). 
                            In <i>ERM</i>, &#x3008;teiCorpus&#x3009; is used to compile the respective edited corpora that conjecturally reconstruct <span class="persName-JR">Ruskin</span>&#x02BC;s work: 
                            <span class="persName-WGC">Collingwood</span>&#x02BC;s, which includes only poems; <span class="persName-ETC">Cook</span> and <span class="persName-AW">Wedderburn</span>&#x02BC;s, 
                            which includes both poems and prose sections; and <span class="persName-JR">Ruskin</span>&#x02BC;s multiple versions of the <span class="title-composite-JRACCOUNTTOUR">&#x201C;Account&#x201D;</span>, 
                            whereby he evolved the work from a poetic travelogue in collaboration with his father into a composite work of poetry, prose, and illustration.
            </p>
            
            <p>Other compelling candidates for separately and eclectically edited corpora witnessing a composite work include a compilation of the &#x201C;volumes&#x201D; 
                            making up the uncompleted &#x201C;Harry and Lucy&#x201D; narrative, 
                            drawn from <a href="../apparatuses/msi_apparatus.php" target="_blank"><span class="title-manuscript-MSI">MS I</span></a>, 
                            <a href="../apparatuses/msii_apparatus.php" target="_blank" class="inactive"><span class="title-manuscript-MSII">MS II</span></a>
               <a href="../apparatuses/msiii_apparatus.php" target="_blank"><span class="title-manuscript-MSIII">MS III</span></a>, and 
                            <a href="../apparatuses/msiiia_apparatus.php" target="_blank" class="inactive"><span class="title-manuscript-MSIIIA">MS IIIA</span></a>; and the 
                            <a href="../apparatuses/sermons_on_the_pentateuch_apparatus.php" target="_blank" class="inactive"><span class="title-sermon-JRSERMONSONTHEPENTATEUCH">Sermons on the Pentateuch</span></a>, 
                            in which the bonds between the sermon texts are stronger than their ties to the manuscripts in which the texts are found. 
                            While arguably the five handsewn booklets containing the fair copies of the sermons 
                            can be treated as a single corpus, the various <a href="../notes/red_book_note.php" target="_blank">Red Books</a> 
                            containing rough drafts of the sermons present a particularly attenuated claim on the texts as composing a portion of their corpora considered as manuscripts. 
                            By the time <span class="persName-JR">Ruskin</span> entered the sermon drafts in the <a href="../notes/red_book_note.php" target="_blank">Red Books</a>, 
                            these notebooks had been demoted to providing leftover, unused space for miscellaneous draft, and the sermon texts run reverso and upside&#x2010;down to what was once a vital corpus.
            </p>
            
            <p>Yet another candidate for &#x3008;teiCorpus&#x3009; markup to describe multiple and conjectural corpora are those that were compiled neither by <span class="persName-JR">Ruskin</span> 
                            nor his editors, but by members of his circle who were interested in creating anthologies for some special purpose. For example, in <span class="date-1831">1831</span> 
               <span class="persName-MR">Ruskin&#x02BC;s mother</span> proposed that <span class="persName-JJR">John James</span> 
                            make a small &#x201C;parcel&#x201D; of letters and poems to be shared with their intimate friends, the Grays. Such anthologies reveal assumptions 
                            about the intended audience of youthful writing in the nineteenth century (see <a href="#PRIVATE">The Private, Confidential, and Public in the Early Manuscripts</a>).
            </p>
            
         </div>
         
         
         <div id="MATERIALITY" class="subsection">
            <span class="head-subsection">Expressing the Materiality of the Manuscripts</span>
            
            <p><span class="persName-JR">Ruskin</span> thought about text in a manner that included the materiality of its presentation. 
                            If the title page and colophon of <a href="../apparatuses/msi_apparatus.php" target="_blank"><span class="title-manuscript-MSI">MS I</span></a>, 
                            as explained above in <a href="#TEICORPUS">&#x3008;teiCorpus&#x3009; Markup and the Tension between Works and Corpora</a>, 
                            caused <span class="persName-JR">Ruskin</span> perplexities in observing the parameters of text, the enigma lay partly in its textual corpus being co&#x2010;terminous 
                            with the <a href="../notes/red_book_note.php" target="_blank">Red Book</a> containing it. <span class="persName-JR">Ruskin</span>, 
                            like many nineteenth&#x2010;century young authors, modeled his textual production on published texts; and the problem of what constituted &#x201C;Volume I&#x201D; of his 
                            <a href="../apparatuses/harry_and_lucy_vol1_apparatus.php" target="_blank" class="inactive"><span class="title-lesson-JRHARRYANDLUCYVOL1">&#x201C;Harry and Lucy&#x201D;</span></a> arose 
                            from his having borrowed that physical and textual division from the <span class="date-1825">1825</span> title page of 
                            <span class="title-book-EDGEWORTHHARRYANDLUCYCONCLUDED"><i>Harry and Lucy Concluded; Being the Last Part of Early Lessons</i></span> 
                            by <a href="../notes/edgeworth_maria_note.php" target="_blank" class="inactive">Maria Edgeworth (1768&#x2013;1849)</a>&#x2014;a title page that he imitated closely in its typography, 
                            while adapting its publication information to his own circumstances as a &#x201C;little boy&#x201D; who &#x201C;printed and composed&#x201D; and also drew&#x2014;and from his having 
                            conceived of his title page as referring to the space between the red leather covers of the notebook.
            </p>
            
            <p>By pursuing that physical as well as textual imitation to small typographical features, <span class="persName-JR">Ruskin</span> invented marks 
                            that present the digital encoder with odd problems in markup. For example, in order to justify his hand&#x2010;printed text with the right margin, as in a printed book, 
                            he invented an end&#x2010;of&#x2010;line mark that resembles a hyphen, but that varies in length according to what is needed to fill out the physical measure of a line 
                            of text. To encode this mark as a hyphen would be misleading, whereas to ignore the mark altogether would be implicitly to assert that the materiality 
                            of text has no bearing on how we study and think about the youthful productions of nineteenth&#x2010;century authors. In this instance, <i>ERM</i> 
                            uses the <span class="orgName-TEI">TEI</span> glyph element, &#x3008;g&#x3009;, assigning it the &#x0040;type &#x201C;justification&#x201D; 
                            (see <a href="#TRANSCRIPTION">Transcription and Encoding Procedures</a>).
            </p>
            
            <p>The policy of first&#x2010;pass transcription and encoding in <i>ERM</i> is to ignore nothing in the physical witness that can reasonably be inferred as intentional. 
                            Even if we must temporize about solutions to encoding what we see, or revise earlier solutions in light of later and better schooled interpretations, it is inefficient and reckless 
                            to reserve such perplexities for later, after we have captured all the text that seems most &#x201C;significant&#x201D; (read: &#x201C;conventionally text&#x2010;like and interpretable&#x201D;). 
                            Thanks to this policy, we are constantly surprised. For example, we expected that the &#x201C;justification&#x201D; glyph would be required in the course of transcribing only the earliest 
                            and most naive texts, until we discovered <span class="persName-JR">Ruskin</span> employing the end&#x2010;of&#x2010;line mark as late as <span class="date-1834">1834</span> 
                            in the elaborate and sophisticated <a href="../witnesses/account_of_a_tour_on_the_continent_msix.php" target="_blank" class="inactive">MS IX fair copy</a> of the 
                            <a href="../apparatuses/account_of_a_tour_on_the_continent_apparatus.php" target="_blank"><span class="title-composite-JRACCOUNTTOUR">Account of a Tour on the Continent</span></a>.
            </p>
            
            <p><span class="date-1826-1834">Between 1826 and 1834</span>, <span class="persName-JR">Ruskin</span> did increase in sophistication, 
                            but not by abandoning materiality for text as abstraction; rather, he engaged with the forms of materiality in the publishing of his time, 
                            the <span class="date-1830-1839">1830s</span>, and prepared himself to come forward as an author of his decade by imitating new printing technologies, 
                            particularly the reproductive technologies used for images in illustrated travel writing 
                            (see <a href="../bibiliography/bibliography.php#HANSONRUSKIN1830S" target="_blank" class="inactive">Hanson, &#x201C;Ruskin in the 1830s&#x201D;</a>). 
                            <span class="persName-JR">Ruskin</span>&#x02BC;s abiding awareness of the materiality of textual production is why the emphasis on <i>manuscripts</i> 
                            in the title of our archive is so important. The pre&#x2010;bound notebooks, ledgers, handsewn pamphlets, folded sheets, and other media for his early writing was always interesting to 
                            <span class="persName-JR">Ruskin</span>, engaging him as boundaries which he could both exploit as opportunities and resist as flexible barriers. 
                            This exhibition of engagement with the materiality of print culture lends a special kind of authority to the &#x201C;private&#x201D; or &#x201C;confidential&#x201D; 
                            manuscripts of <span class="date-1801-1900">nineteenth&#x2010;century</span> youthful writers.
            </p>
            
            
         </div>
         
         
         <div id="PRIVATE" class="subsection">
            <span class="head-subsection">The Private, Confidential, and Public in the Early Manuscripts</span>
            
            <p>In <span class="title-book-REIMANMODERNMANUSCRIPTS"><i>The Study of Modern Manuscripts</i></span>, 
                            <span class="persName-DHR">Donald Reiman</span> recommends that editors &#x201C;use different procedures for analyzing and editing 
                            private and confidential manuscripts from those they employ in presenting public documents.&#x201D; <span class="persName-DHR">Reiman</span> defines these three categories, 
                            not by the depth of intimacy between writer and reader, nor by the intricacy of artfulness in the writing, 
                            but by &#x201C;the nature and extent of the writer&#x02BC;s intended audience. 
                            A manuscript is <i>private</i> if its author intended it to be read only by one person 
                            or a specific small group of people whose identity he knew in advance; 
                            <i>confidential</i> if it was intended for a predefined but larger audience who may&#x2014;or may not&#x2014;be personally known to or interested in 
                            the author; and <i>public</i> only if it was written to be published or circulated for perusal by a widespread, unspecified audience, 
                            including such abstractions as the nation, the reading public, and posterity&#x201D; 
                            (<a href="../bibiliography/bibliography.php#REIMANMODERNMANUSCRIPTS" target="_blank" class="inactive">Reiman, <i>Study of Modern Manuscripts</i></a>, 43, 65).
            </p>
            
            <p>As an example of a problematic editorial procedure that can arise from ignoring these distinctions between the private, confidential, and public, 
                            <span class="persName-DHR">Reiman</span> points to nineteenth&#x2010;century editions of <span class="persName-PBS">Percy Bysshe Shelley</span>&#x02BC;s 
                            (<span class="date-1792-1822">1792&#x2013;1822</span>) poems that were arranged 
                            &#x201C;primarily by chronology, rather than by the author&#x02BC;s intentions.&#x201D; 
                            This organization resulted in indiscriminate mixing of <span class="persName-PBS">Shelley</span>&#x02BC;s &#x201C;false starts and rejected fragments,&#x201D; 
                            which &#x201C;<span class="persName-MWS">Mary Shelley</span> (<span class="date-1797-1851">1797&#x2013;1851</span>) had so assiduously 
                            rescued from his draft notebooks,&#x201D; with his &#x201C;highly polished completed poems 
                            (with a few fragments) that &#x005B;the poet had&#x005D; released for publication.&#x201D; As a consequence, 
                            readers of these chronologically ordered editions inadvertently developed &#x201C;a less positive picture of <span class="persName-PBS">Shelley</span>&#x02BC;s intelligence&#x201D; 
                            (<a href="../bibiliography/bibliography.php#REIMANMODERNMANUSCRIPTS" target="_blank" class="inactive">Reiman, <i>Study of Modern Manuscripts</i></a>, 43, 53&#x2013;54).
            </p>
            
            <p>Which of these definitions applies to juvenilia and youthful writing, which often imitates public forms&#x2014;even to the extent of mimicking 
                            the appearance of published documents&#x2014;but which, in practical terms, cannot have been intended for an audience beyond the family circle? 
                            In considering an example of juvenilia, <span class="persName-JA">Jane Austen</span>&#x02BC;s (<span class="date-1775-1817">1775&#x2013;1817</span>) 
                            <span class="title-book-AUSTENVOLUMETHEFIRST"><i>Volume the First</i></span> (begun ca. <span class="date-1786-1787">1786&#x2013;87</span>), 
                            <span class="persName-DHR">Reiman</span> proposes a special subcategory, &#x201C;<i>polished</i> private and confidential manuscripts,&#x201D; 
                            and frames the question regarding the intention of such artifacts in terms of manuscript authority. 
                            <span class="date-1801-1900">Nineteenth&#x2010;century</span> juvenilia is a special case among manuscripts belonging to an &#x201C;age of printing&#x201D; 
                            when professional &#x201C;authors realized that their final manuscripts were way stations on the road to a perfected text, rather than the thing itself.&#x201D; 
                            For mature, professional writers in the industrial age of print, <span class="persName-DHR">Reiman</span> continues, &#x201C;the manuscript no longer carried 
                            the same textual authority that it once had, even when it represented the author&#x02BC;s final involvement in such matters as the orthography and punctuation 
                            of most of the text.&#x201D; Authors in the age of print sent &#x201C;their work to press . . . anticipating&#x2014;and in many cases hoping&#x2014;that changes in the text 
                            or its presentation &#x005B;would&#x005D; be introduced by the printers or the publishers.&#x201D; Not so manuscript &#x201C;poems or other compositions that were intended for the perusal 
                            of a few specific individuals&#x2014;in short, <i>private</i> or <i>confidential</i> documents&#x201D;&#x2014;that the author 
                            fair&#x2010;copied for limited distribution, but did not intend for publication. These kinds of artifacts, typical of nineteenth&#x2010;century juvenilia, 
                            bear authority comparable to that of scribal copies of pre&#x2010;modern manuscripts, which &#x201C;the writer never expected . . . to be superseded 
                            by a more authoritative printed text. Such a manuscript had to be more carefully prepared than a press copy, because it would neither be vetted by publisher&#x02BC;s 
                            readers and compositors nor corrected in proof&#x201D; 
                            (<a href="../bibiliography/bibliography.php#REIMANMODERNMANUSCRIPTS" target="_blank" class="inactive">Reiman, <i>Study of Modern Manuscripts</i></a>, 92, 93, 94&#x2013;95).
            </p>
            
            <p><span class="persName-DHR">Reiman</span> is referring to the authority of copytext; and he lists sensible measures for situating an artifact like 
                            <span class="persName-JA">Austen</span>&#x02BC;s <span class="title-book-AUSTENVOLUMETHEFIRST"><i>Volume the First</i></span> 
                            in the category of &#x201C;polished&#x201D; confidential or private manuscripts. 
                            In this particular case, &#x201C;since some neighbors and acquaintances whom &#x005B;<span class="persName-JA">Austen</span>&#x005D; disliked seem to have been targets of her satirical thrusts, 
                            the manuscript was clearly not intended to circulate beyond <span class="persName-JA">Jane Austen</span>&#x02BC;s circle of like&#x2010;minded intimates, 
                            who alone could understand the point of these barbs and share the humor of them&#x201D; 
                            (<a href="../bibiliography/bibliography.php#REIMANMODERNMANUSCRIPTS" target="_blank" class="inactive">Reiman, <i>Study of Modern Manuscripts</i></a>, 94). 
                            Similar evidence is available of <span class="persName-JR">Ruskin</span>&#x02BC;s carefully prepared fair&#x2010;copy manuscripts circulating among a close circle of admiring and sympathetic readers, 
                            such as the couple, <a href="../notes/gray_richard_note.php" target="_blank" class="inactive">Richard</a> and 
                            <a href="../notes/gray_mary_note.php" target="_blank" class="inactive">Mary Gray</a>, who were intimate friends of <span class="persName-MR">Margaret</span> and <span class="persName-JJR">John James Ruskin</span>. 
                            &#x201C;I should like Mr. &#x0026; Mrs. Gray to see Johns letters,&#x201D; <span class="persName-MR">Margaret</span> wrote to her husband in <span class="date-1831-03-01-1831-03-31">March 1831</span>, 
                            suggesting that, when <span class="persName-JJR">John James</span>in his travels neared <span class="placeName-GLASGOW">Glasgow</span>, 
                            where the Grays had recently relocated, he &#x201C;make up a small parcel and send also &#x005B;the poems&#x005D; the fairies&#x2014;the lines on Jessy these on Lord Nelson&#x005B;.&#x005D; 
                            I do not know exactly what you have but any you might wish to send I could let you have&#x2014;Weep for the Dead&#x2014;O to My Heart I should like them to see&#x201D; 
                            (<a href="../bibiliography/bibliography.php#RFL" target="_blank" class="inactive">Burd, ed., <i>Ruskin Family Letters</i></a>, 1:232). For all of these poems, 
                            there survive fair copies in <span class="persName-JR">Ruskin</span>&#x02BC;s hand, and these were probably the manuscripts that <span class="persName-MR">Margaret</span> deemed presentable for perusal by initimate friends&#x2014;in 
                            <span class="persName-DHR">Reiman</span>&#x02BC;s terms, the polished confidential manuscripts, bearing authority of copytext. (<span class="persName-MR">Margaret</span> probably 
                            refers, respectively, to <a href="../apparatuses/the_fairies_apparatus.php" target="_blank" class="inactive"><span class="title-poem-JRTHEFAIRIES">&#x201C;The Fairies&#x201D;</span></a>, 
                            <a href="../apparatuses/on_the_death_of_my_cousin_jessy.php" target="_blank" class="inactive"><span class="title-poem-JRDEATHOFJESSY">&#x201C;On the Death of My Cousin Jessy&#x201D;</span></a>, 
                            either <a href="../apparatuses/trafalgar_apparatus.php" target="_blank" class="inactive"><span class="title-poem-JRTRAFALGAR">&#x201C;Trafalgar&#x201D;</span></a> or 
                            <a href="../apparatuses/a_dirge_for_nelson_apparatus.php" target="_blank" class="inactive"><span class="title-poem-JRDIRGEFORNELSON">&#x201C;A Dirge for Nelson&#x201D;</span></a>, 
                            <a href="../apparatuses/weep_for_the_dead_apparatus.php" target="_blank" class="inactive"><span class="title-poem-JRWEEPFORTHEDEAD">&#x201C;Weep for the Dead&#x201D;</span></a>, and 
                            <a href="../apparatuses/to_my_heart_apparatus.php" target="_blank" class="inactive"><span class="title-poem-JRTOMYHEART">&#x201C;To My Heart&#x201D;</span></a>, 
                            all poems of <span class="date-1830-1831">1830&#x2013;31</span>.)
            </p>
            
            <p>What does this classification indicate for the &#x201C;different procedures&#x201D; that, according to <span class="persName-DHR">Reiman,</span> should be observed in editing and analyzing private or confidential 
                            manuscripts as compared with public? First, the class of manuscripts that derive authority from both their polished presentation and their confidential status 
                            suggests that readers perceived authority in the material artifact itself, which bore direct witness to the authority of the writer&#x2014;or 
                            of something about the writer. &#x201C;I let <span class="persName-JR">John</span>s letters come just as he writes them,&#x201D; <span class="persName-MR">Margaret</span> explained to <span class="persName-JJR">John James</span> when enclosing their son&#x02BC;s letters inside her own, 
                            &#x201C;that you may not be misled in your judgment as to his hopes and feelings&#x201D; 
                            (<span class="date-1829-03-04">4 March 1829</span>, in <a href="../bibiliography/bibliography.php#RFL" target="_blank" class="inactive">Burd, ed., <i>Ruskin Family Letters</i></a>, 1:185). 
                            <span class="persName-MR">Margaret</span> assumes a Romantic idea about writing as an open window to the writer&#x02BC;s expression, which if copied in her own hand 
                            would not only lose authority, but even potentially mislead the reader. 
                            There do survive copies of <span class="persName-JR">Ruskin</span>&#x02BC;s works in his parents&#x02BC; hands, but these are far less common than <span class="persName-JR">Ruskin</span>&#x02BC;s own fair copies; 
                            and it seems unlikely that what <span class="persName-MR">Margaret</span> wanted the Grays to &#x201C;see&#x201D;&#x2014;not just read&#x2014;would have been a fair copy in her own hand, 
                            which derived authority from her adult sophistication of punctuation, spelling, orthography, and the like. 
                            Rather, &#x201C;judgment as to &#x005B;the child writer&#x02BC;s&#x005D; hopes and feelings&#x201D; derived from an intimate experience and knowledge that were available 
                            only through the authoritative original artifact; and by virtue of the artifact&#x02BC;s materiality, 
                            this experience could be extended to a trusted confidential circle.
            </p>
            
            <p>Evidence suggests that <span class="persName-JR">Ruskin</span> shared this sense of an intended confidential audience that, in <span class="persName-DHR">Reiman</span>&#x02BC;s defintion, 
                            was most likely &#x201C;personally known to or interested in the author.&#x201D;  
                            <span class="persName-JR">Ruskin</span>&#x02BC;s understanding of these conditions is indicated by his inclusion of a letter to the Grays&#x02BC; relation, 
                            <a href="../notes/monro_robert_mrs_note.php" target="_blank" class="inactive">Mrs. Robert Monro</a>, 
                            as part of <a href="../apparatuses/msii_apparatus.php" target="_blank" class="inactive">MS II</a>, a manuscript that he entitled &#x201C;vol 1&#x201D; of his &#x201C;Works.&#x201D; 
                            By including a letter to <span class="persName-MONROROBERTMRS">Mrs. Monro</span> as part of the handsewn pamphlet, which otherwise contains poems, 
                            <span class="persName-JR">Ruskin</span> appears implicitly to invite <span class="persName-MONROROBERTMRS">Mrs. Monro</span> to form part his confidential audience beyond the immediate family circle. 
                            The designation &#x201C;Works,&#x201D; moreover, attests to the significance of this production, both as a physical thing, a &#x201C;volume,&#x201D; 
                            and as an abstract promise of more to come.
            </p>
            
            <p>It follows that, as an editorial procedure appropriate to a manuscript&#x02BC;s classification as a polished confidential production, 
                            an edition of <span class="date-1801-1900">nineteenth&#x2010;century</span> juvenilia should include, as does <i>ERM</i>, manuscript images; 
                            diplomatic, and not eclectic or otherwise &#x201C;corrected&#x201D; transcriptions of texts; 
                            and a thorough physical description of the manuscript. In <i>fin de siècle</i> editions of <span class="persName-JR">Ruskin</span>&#x02BC;s early poems and prose, 
                            some interest in the physical manuscripts was attested by facsimiles of selected manuscript pages, 
                            although the basis of selection was rarely made evident, and the sparseness of such examples, which was doubtless legislated in part by cost, was probably also limited also 
                            the perception that such images satisfied curiosity rather than providing essential scholarly information. Manuscript facsimiles in these editions, 
                            like reproductions of <span class="persName-JR">Ruskin</span>&#x02BC;s drawings, were printed on heavier paper stock and bound only into the large&#x2010;paper, 
                            quarto collector&#x02BC;s edition of the <a href="../notes/poems_1891_note.php" target="_blank" class="inactive"><span class="title-poem-JRPOEMS1891"><i>Poems</i> (1891)</span></a>, 
                            and not in the inexpensive octavo editions. In the <a href="../notes/library_edition_note.php" target="_blank" class="inactive"><span class="title-book-JRWORKSLE">Library Edition</span></a>, 
                            manuscript facsimiles seem to gain scholarly purpose, but in fact the manuscripts selected for reproduction tend to be as random and lacking in context 
                            as those in <span class="persName-GA">George Allen</span>&#x02BC;s collector&#x02BC;s editions of the youthful writing published in the <span class="date-1890-1899">1890s</span>. 
                            The early editors did supply descriptive bibliographies of the manuscripts, but the descriptions were limited in detail; and as argued above in 
                            <a href="#DEFINING">Defining <i>Works</i> and <i>Manuscripts</i></a>, lost even more coherence and consistency 
                            in the transition from <span class="title-poem-JRPOEMS1891"><i>Poems</i> (1891)</span> to the <span class="title-book-JRWORKSLE">Library Edition</span>.
            </p>
            
            <p>While there was a perception among late&#x2010;Victorian editors, then, that the confidentiality of early writing needed to be represented through its artifactual status&#x2014;allowing 
                            a child&#x02BC;s manuscripts to &#x201C;come just as he writes them,&#x201D; as <span class="persName-MR">Margaret Ruskin</span> suggested, in order that the reader may form a 
                            &#x201C;judgment as to &#x005B;the child&#x02BC;s&#x005D; hopes and feelings&#x201D;&#x2014;editors apparently believed that they met such a need by supplying a few facsimiles 
                            in &#x201C;large&#x2010;paper&#x201D; editions as curiosities for specialized collectors. Once the readership was widened beyond collectors to include the anonymous, 
                            public consumption of a &#x201C;common&#x201D; edition, such curiosities were dropped, and the editor&#x02BC;s duty remained only (in both common and collectors&#x02BC; editions) to 
                            intervene heavily in the texts in order to &#x201C;improve&#x201D; them according to a public standard of uniform punctuation and formal decorum. 
                            As <span class="persName-CAA">Christine Alexander</span> comments, in late&#x2010;Victorian editions 
                            of nineteenth&#x2010;century authors&#x02BC; juvenilia, heavy&#x2010;handed &#x201C;improvement&#x201D; of texts was typical of editorial approaches 
                            to what were condescendingly termed an author&#x02BC;s juvenile &#x201C;effusions.&#x201D; 
                            <span class="persName-CAA">Alexander</span> somewhat overstates the case that these &#x201C;poorly transcribed, bowdlerized and &#x2018;improved&#x2019;&#x201D; texts 
                            wholely &#x201C;reinforce the attitude of inferiority towards early works and show the kind of 
                            disrespect for childhood that was common well into the twentieth century&#x201D; 
                            (<a href="../bibiliography/bibliography.php#ALEXANDERDEFINING" target="_blank" class="inactive">Alexander, &#x201C;Defining and Representing Literary Juvenilia&#x201D;</a>, 84, and see 81&#x2013;84), given that 
                            this attitude was tempered to some extent by editors&#x02BC; acknowledgement 
                            of the special artifactual status that juvenile manuscripts held for their original, confidential readership. Nonetheless this materiality retained its value 
                            primarily among collectors and did not affect the the editor&#x02BC;s mission to improve the texts for a modern, anonymous audience.
            </p>
            
            <p>In <span class="persName-JR">Ruskin</span> studies, thinking about distinctions between the private, confidential, and public in his manuscripts 
                            is complicated by <span class="persName-JR">Ruskin</span>&#x02BC;s invitation to view his writing as a window to his whole mind, an invitation rendered 
                            paradoxical by his simultaneous insistence on the Carlylean &#x201C;strength&#x201D; required to resist the pathetic fallacy. 
                            Famously, in <span class="title-JRFORS"><i>Fors Clavigera</i></span>, his open letters to &#x201C;workers,&#x201D; 
                            <span class="persName-JR">Ruskin</span> declared that his private letters could be read aloud from the housetops: &#x201C;I never wrote a letter in my life 
                            which all the world are not welcome to read, if they will&#x201D; (letter 59); or, as he expressed the idea more colorfully to the artist, 
                            <span class="persName-">James Smetham</span> (1821&#x2013;89): &#x201C;I never wrote a private letter to any human being 
                            which I would not let a bill&#x2010;sticker chalk up six feet high on <span class="placeName-HYDEPARK">Hyde Park</span> wall, 
                            and stand myself in <span class="placeName-PICCADILLY">Piccadilly</span> and say &#x2018;I said it&#x2019;&#x201D; 
                            (<a href="../bibiliography/bibliography.php#JRWORKSLE" target="_blank" class="inactive">Ruskin, <i>Works</i></a>, 28:449, 14:462). 
                            Looking to the juvenilia for the origins of this position, one wonders if this reckless intimacy was born of necessity, 
                            since <span class="persName-JJR">John James Ruskin</span> carried samples of <span class="persName-JR">John</span>&#x02BC;s letters on 
                            his travels, perhaps ready to show them to any interested stranger. We can only speculate about such causes, but the result seems to have been a collapsing 
                            of private, confidential, and public into a single category, whether in his youthful or mature writing. The difference between the juvenilia and mature writing is that, 
                            whereas one can usefully parse the mature writing in terms of <span class="persName-DHR">Reiman</span>&#x02BC;s distinctions based on authorial intentions about audience,
                            and yet trace a commonality of autobiographical impulse connecting these differing kinds of works, the whole span of youthful writing seems almost indistinguishable 
                            in terms of authorial intention about <i>audience</i>, while an autobiographical register is typically (albeit not universally, in all works) 
                            submerged below the level of detectable intention. In the manuscripts of <span class="persName-JR">Ruskin</span>&#x02BC;s mature writing, 
                            readers tend to look for private emotion universally, even when these manuscripts can be logically and usefully 
                            sorted as private, confidential, and public; in the early writing, readers are presented with a wide range of theatrical, performative emotion, 
                            but private emotion is much less easily detectable as an intention and must be read by the other means that <span class="persName-DHR">Reiman</span> 
                            believes to be misleading for distinguishing the public or confidential from the public&#x2014;the rhetoric of the work, and the depth of the writer&#x02BC;s relation to the person addressed.
            </p>
            
            <p>As <span class="persName-RBRETON">Rob Breton</span> remarks, much of <span class="persName-JR">Ruskin</span>&#x02BC;s &#x201C;early verse is notable for its emotional distance and detachment, 
                            despite the intimate, spontaneous, garrulous personae of the poet and the clear imitation of and inspiration from Romantic writing&#x201D;&#x2014;a quality 
                            of detachment consistent with <span class="persName-JR">Ruskin</span>&#x02BC;s later theory of the pathetic fallacy. If in its &#x201C;refusal of emotion&#x201D; 
                            the early writing nonetheless points also to suppression of &#x201C;pychological burdens,&#x201D; 
                            then the writing often points to those burdens only in terms of their having been &#x201C;duly evaded.&#x201D; 
                            Yet <span class="persName-RBRETON">Breton</span> also observes that the detached quality of <span class="persName-JR">Ruskin</span>&#x02BC;s 
                            early writing &#x201C;complements&#x201D; an investigation into an opposite tendency in the youthful writing&#x2014;namely, 
                            the existence of private &#x201C;signs of &#x2018;psychological disturbance&#x2019;&#x201D; 
                            that, according to <span class="persName-DCH">David Hanson</span>&#x02BC;s reading, were &#x201C;likely caused by his mother&#x02BC;s disapproval of her son&#x02BC;s &#x2018;romantic&#x2019; instincts and devotion to poetry.&#x201D; 
                            It is unlikely that one can coordinate these opposite modes of expression&#x2014;private anger and resentment, and public detachment&#x2014;reliably with authorial intention 
                            respecting private, confidential, and public audience, since most pieces will appear to adopt the detachment appropriate to an imagined public 
                            (i.e., what <span class="persName-DHR">Reiman</span> terms &#x201C;polished&#x201D; confidential manuscripts). 
                            It is true that signs of psychological disturbance seems to emerge more consistently in rough&#x2010;draft works than in 
                            <span class="persName-JR">Ruskin</span>&#x02BC;s fair&#x2010;copy manuscripts, 
                            but we do not know to what extent <span class="persName-JR">Ruskin</span> kept the rough&#x2010;draft notebooks private. 
                            The presence of his father&#x02BC;s hand marking some drafts suggests that these notebooks were never secret. 
                            Ruskin&#x02BC;s intentions, therefore, will seem all but uniformly to point in the direction of &#x201C;polished&#x201D; confidentiality, 
                            as in much nineteenth&#x2010;century juvenilia, while proving a deceptive indicator of the emotional bearings of a work. 
                            Private emotion that jars with an intention of public address (or the imitation of public address) is more likely to be signaled by rhetorical or accidental features 
                            such as fragmentation. It is no accident that, even sixty years after their composition, fragmented works were banned from publication in 
                            <span class="persName-WGC">Collingwood</span>&#x02BC;s edition of the <span class="title-poem-JRPOEMS1891"><i>Poems</i> (1891)</span>, 
                            such works having been deemed by <span class="persName-JR">Ruskin</span> himself or someone in his circle as holding &#x201C;&#x2018;too slight interest&#x2019;&#x201D; 
                            as <span class="persName-CEN">Charles Eliot Norton</span> would have said, but also as indicating what was &#x201C;&#x2018;too personal, too intimate&#x2019;&#x201D;  
                            (<a href="../bibiliography/bibliography.php#BRETONJUVENILIA" target="_blank" class="inactive">Breton, &#x201C;John Ruskin&#x02BC;s Juvenilia&#x201D;</a>, 18, 22&#x2013;23; see also 
                            <a href="../bibiliography/bibliography.php#HANSONPSYCHOLOGY" target="_blank" class="inactive">Hanson, &#x201C;Psychology of Fragmentation&#x201D;</a>; 
                            <a href="../bibiliography/bibliography.php#HANSONSELFANDREVISION" target="_blank" class="inactive">Hanson, &#x201C;Self and Revision in Ruskin&#x02BC;s Revaluations of Romanticism&#x201D;</a>).
            </p>
            
            
         </div>
         
         
         <div id="JUVENILIA" class="subsection">
            <span class="head-subsection">The Documentary Editorial Orientation in Editing Juvenilia and Youthful Writing</span>
            
            <p>Owing to what one stands to learn, then, from the historical, artifactual status of nineteenth&#x2010;century youthful writing as &#x201C;polished&#x201D; private or confidential writing, 
                            we adopt a documenary orientation to editing witnesses of works in <i>ERM</i>. 
                            This approach contrasts with <span class="persName-WGC">W. G. Collingwood</span>&#x02BC;s editorial procedure in 
                            <a href="../notes/poems_1891_note.php" target="_blank" class="inactive"><span class="title-poem-JRPOEMS1891">Poems (1891)</span></a>, 
                            which can be characterized as <i>aesthetic</i> in method, in the sense described by <span class="persName-PLS">Peter Shillingsburg</span> in 
                            <span class="title-book-SHILLINGSBURGSCHOLARLYEDITING"><i>Scholarly Editing in the Computer Age</i></span>: 
                            &#x201C;The choice of copy&#x2010;text and the emendations made,&#x201D; from this standpoint, &#x201C;result from an aesthetic preference for forms found in various documents 
                            over forms with historical integrity derived from the fact that they are contained in a single document,&#x201D; as preferred in a documentary orientation 
                            (<a href="../bibiliography/bibliography.php#SHILLINGSBURGSCHOLARLYEDITING" target="_blank" class="inactive">Shillingsburg, <i>Scholarly Editing</i></a>, 20)&#x2014;or, 
                            as in the case of many of <span class="persName-WGC">Collingwood</span>&#x02BC;s aesthetic choices, the preferences result not from any documentary or historical evidence at all, 
                            but from the editor&#x02BC;s personal taste.
            </p>
            
            <p>Juvenilia as a field of study privileges a documentary over an eclectic editorial methodology. The aim of documentary editing, 
                            as summarized by <span class="persName-MJK">Mary&#x2010;Jo Kline</span> and <span class="persName-SHP">Susan Holbrook Perdue</span>, 
                            is to represent &#x201C;artifacts inscribed on paper or a similar medium . . . whose unique physical characteristics and original nature 
                            give them special evidentiary value&#x201D; 
                            (<a href="../bibiliography/bibliography.php#KLINEPERDUEDOCUMENTARY" target="_blank" class="inactive"><i>Guide to Documentary Editing</i></a>, 3). 
                            In the <span class="date-1985-1987">mid&#x2010;1980s</span>, writing in the first edition of the <span class="title-book-KLINEPERDUEDOCUMENTARY"><i>Guide to Documentary Editing</i></span>, 
                            <span class="persName-MJK">Kline</span> could still generalize about a contrast between the documentary approach of historians and the &#x201C;literary editing&#x201D; theorized and practiced by 
                            textual critics and editors in English departments. In that same decade, however, such scholars as <span class="persName-DFM">Donald McKenzie</span> and <span class="persName-JJM">Jerome McGann</span> 
                            began to sway literary scholars toward a more sociological approach focused on study of the textual artifact in its cultural moment. 
                            Historians came meanwhile to recognize that, in their allegedly purist views of documentary editing, they have tended to overlook their own interventionist and &#x201C;literary&#x201D; practices 
                            (<a href="../bibiliography/bibliography.php#KLINEPERDUEDOCUMENTARY" target="_blank" class="inactive">Kline and Perdue, <i>Guide to Documentary Editing</i></a>, 4&#x2013;25; 
                            <a href="../bibiliography/bibliography.php#TANSELLEHISTORICISM" target="_blank" class="inactive">Tanselle, &#x201C;Historicism and Critical Editing&#x201D;</a>). 
                            The study of juvenilia foregrounds the merits that historians have traditionally claimed 
                            for diplomatic editing of manuscript documents while also highlighting the difficulties of achieving purity in a diplomatic method.
            </p>
            
            <p>Nineteenth&#x2010;century editors of the <span class="persName-JR">Ruskin</span> juvenilia apparently took for granted that readers would benefit by an editorial approach that was almost the opposite of documenting an artifact. 
                            From <span class="persName-JJR">John James Ruskin</span> and <span class="persName-WHH">W. H. Harrison</span> to <span class="persName-WGC">W. G. Collingwood</span>, 
                            and to <span class="persName-ETC">E. T. Cook</span> and <span class="persName-AW">Alexander Wedderburn</span>, the first editors of 
                            <span class="persName-JR">Ruskin</span>&#x02BC;s early writing freely and without acknowledgment regularized punctuation, invented titles, 
                            rewrote lines and reorganized stanzas of poetry, and joined fragments that are unrelated in the manuscripts to form texts that <span class="persName-JR">Ruskin</span> never wrote 
                            (see <a href="../notes/history_of_bibliography_and_editing_note.php" target="_blank" class="inactive">History of the Bibliography and Editing of the Early Ruskin Manuscripts</a>). 
                            In <i>ERM</i>, these heavily edited texts are now themselves treated diplomatically as witnesses to an older conception of <span class="persName-JR">Ruskin</span>&#x02BC;s youthful writing, 
                            bearing evidentiary value for how editors of the <span class="date-1830-1839">1830s</span> believed the boy should be &#x201C;brought forward&#x201D; as an author, 
                            and for how editors of the <span class="date-1880-1899">1880s and 1890s</span> perpetuated a myth of <span class="persName-JR">Ruskin</span>&#x02BC;s boyhood, 
                            formed largely by his autobiographical writing.
            </p>
            
            <p>In twentieth&#x2010;century editing of <span class="persName-JR">Ruskin</span>, even well before the advent of sociological approaches to literary editing, 
                            the orientation swung to a documentary method, prompted in part by <a href="../notes/viljoen_h_g_note.php" target="_blank" class="inactive"><span class="persName-HGV">Helen Gill Viljoen</span></a>&#x02BC;s scorn for the methods 
                            of <span class="persName-ETC">E. T. Cook</span> and <span class="persName-AW">Alexander Wedderburn</span> 
                            in the <a href="../notes/library_edition_note.php" target="_blank" class="inactive"><span class="title-book-JRWORKSLE">Library Edition</span></a>. 
                            (She was less willing to point out similar faults in the practices of <span class="persName-WGC">W. G. Collingwood</span>.) Arguably, the 
                            <span class="title-book-JRWORKSLE">Library Edition</span> can be credited with favoring a more historical approach, 
                            with its policy of printing unpublished materials, albeit selectively and in heavily edited versions. However, a diplomatic approach to transcribing 
                            <span class="persName-JR">Ruskin</span> manuscripts became the norm only with the editorial labors of <span class="persName-VAB">Van Akin Burd</span>, 
                            whose <span class="date-1973">1973</span> edition, <span class="title-book-RFL"><i>The Ruskin Family Letters</i></span>, 
                            influenced Victorian studies by the editor&#x02BC;s insistence on treating the entire family&#x02BC;s historical papers&#x2014;the <i>family</i> 
                            letters&#x2014;as requisite to scholarship, and not just <span class="persName-JR">Ruskin</span>&#x02BC;s side of the correspondence as a literary accomplishment. 
                            <span class="persName-VAB">Burd</span> also attempted faithfully to reproduce the idiosyncrasies of <span class="persName-JR">Ruskin</span>&#x02BC;s punctuation, 
                            recognizing that one can detect the pulse of thought in his hand. Just as telling, for <span class="persName-SE">Sheila Emerson,</span> 
                            is the scarcity of punctuation in <span class="persName-JR">Ruskin</span>&#x02BC;s early writing, which provides a window onto how he 
                            &#x201C;bound his phrases each to each&#x201D; and allowed &#x201C;their movement &#x005B;to jam&#x005D; back and forth in the mind&#x201D; 
                            (<a href="../bibiliography/bibliography.php#GENESISOFINVENTION" target="_blank" class="inactive">Emerson, <i>Genesis of Invention</i></a>, 27). 
                            In effect, twentieth&#x2010;century editors of <span class="persName-JR">Ruskin</span> embraced diplomatic approaches in order to treat 
                            the reader as a confidante, as close as possible to <span class="persName-JR">Ruskin</span>&#x02BC;s &#x201C;hopes and feelings,&#x201D;, 
                            in the belief that those feelings are vividly and importantly legible in the holograph maunscripts.
            </p>
            
            <p>Perhaps <span class="persName-VAB">Burd</span>&#x02BC;s most passionate statement of this position occurs in his edition of the 
                            <span class="title-book-WINNINGTONLETTERS"><i>The Winnington Letters</i></span>
               <span class="persName-JR">Ruskin</span>&#x02BC;s letters to the schoolmistress, <span class="persName-MAB">Margaret Alexis Bell</span>, and the girls at 
                            <span class="placeName-WINNINGTON">Winnington Hall</span>. <span class="persName-VAB">Burd</span> urges that no edited substitute ultimately can capture the experience of reading 
                            <span class="persName-JR">Ruskin</span> in manuscript, where syntax and punctuation &#x201C;convey clearly the flow of his ideas and spirit at the moment of writing. 
                            His punctuation, while unconventional, is logical and expressive of the pause, pitch, and stress of his sentences.&#x201D; <span class="persName-VAB">Burd</span> admits doubt 
                            &#x201C;that print can reproduce the individuality of <span class="persName-JR">Ruskin</span>&#x02BC;s punctuation&#x201D;; 
                            and after a long paragraph entrancingly describing the meaning of every eccentric stroke, his regret is palpable that any endeavor by an editor 
                            &#x201C;to make the transcription of . . . &#x005B;<span class="persName-JR">Ruskin</span>&#x02BC;s&#x005D; punctuation as accurate as printing will permit&#x201D; 
                            can result only in a pale reflection of the experience of reading a <span class="persName-JR">Ruskin</span> letter in manuscript. 
                            The most exacting documentary transcription, <span class="persName-VAB">Burd</span> declares, can &#x201C;never record the story told by his handwriting, which often reflects his moods,&#x201C; 
                            and he defies the &#x201C;printed page &#x005B;to&#x005D; convey the pleasure of opening . . . &#x005B;<span class="persName-JR">Ruskin</span>&#x02BC;s&#x005D; 4&#x00BD; by 2&#x00BD; inch 
                            envelopes, or unfolding his 4&#x00BD; by 7 inch (often double) sheets of blue, grey, or cream stationery&#x201D; 
                            (<a href="../bibiliography/bibliography.php#WINNINGTONLETTERSINTRO" target="_blank" class="inactive">Burd, introduction to <i>Winnington Letters</i></a>, 84&#x2013;87).
            </p>
            
            <p>In his edition of the Ruskin family letters, which followed four years later, <span class="persName-VAB">Burd</span> maintained his practice of a documentary 
                            system of transcription, but with a justification that was advanced in more historicized terms than the hope, 
                            as expressed in the introduction to <i><span class="title-WINNINGTONLETTERS">The Winnington Letters</span></i>, 
                            of bringing the reader &#x201C;close to the flat table on which <span class="persName-JR">Ruskin</span> wrote&#x201D;; rather, 
                            <span class="persName-VAB">Burd</span> more laconically proposed &#x201C;to preserve for the reader the pleasure of discovering . . . &#x005B;the&#x005D; 
                            original flavor&#x201D; of the Ruskins&#x02BC; correspondence, by resisting the editorial impulse to impose 
                            &#x201C;a formality which the writers never intended&#x2014;and to which some of them were never educated&#x201D; 
                            (<a href="../bibiliography/bibliography.php#WINNINGTONLETTERSINTRO" target="_blank" class="inactive">Burd, introduction to <i>Winnington Letters</i></a>, 88; 
                            <a href="../bibiliography/bibliography.php#RFLINTRO" target="_blank" class="inactive">Burd, introduction to <i>Ruskin Family Letters</i></a>, 1:xlv). 
                            In this pattern of basing an approach to manuscript transcription, at first, on an imagined intimacy with a writer and then on a more historicized rationale, 
                            <span class="persName-JR">Ruskin</span> studies reflects a larger context of manuscript and book collecting, 
                            whereby late&#x2010;Victorian collectors sought &#x201C;modern&#x201D; (i.e., nineteenth&#x2010;century) first editions on grounds of the &#x201C;sentiment&#x201D; 
                            that these copies sponsored of a personal connection with a writer&#x2014;a 
                            sentiment that writers on collecting often figuratively expressed, as <span class="persName-VAB">Burd</span> later did, as if following 
                            the author&#x02BC;s hand on his writing table. Subsequently, the New Bibliographers of the <span class="date-1930-1939">1930s</span> rejected 
                            such sentiment in favor of more &#x201C;objective&#x201D; approaches 
                            (see <a href="../notes/collecting_of_modern_authors_note.php" target="_blank">Collecting of Modern Authors in the Late Nineteenth and Early Twentieth Centuries</a>; 
                            and <a href="../bibiliography/bibliography.php#SENTIMENTANDMATERIALITY" target="_blank" class="inactive">Hanson, &#x201C;Sentiment and Materiality in Late&#x2010;Victorian Book Collecting&#x201D;</a>). 
                            In <span class="persName-JR">Ruskin</span> studies, a sentiment of intimacy with the author through collecting or manuscript study seems to have persisted longer, 
                            perhaps because <span class="persName-JR">Ruskin</span> himself sought such immediacy of connection with audiences, and because more than other authors he acknowledged the act and materiality of writing and not just text, 
                            whether as dramatized in <span class="title-JRFORS"><i>Fors Claivigera</i></span> by the act of writing nearly thwarted by piercing steam whistles, 
                            or as represented in <span class="title-JRPRAETERITA"><i>Praeterita</i></span> by a facsimile of his boyhood writing for whatever it might reveal about his youth. 
                            Added to this encouragement by <span class="persName-JR">Ruskin</span> to think about his writing as a physical act was the historical accident 
                            of manuscripts remaining at <span class="placeName-BRANTWOOD">Brantwood</span> for discovery by <span class="persName-HGV">Helen Gill Viljoen</span> 
                            prior to their dispersal in the estate sale&#x2014;an experience that made her suspect of any form of editorial intervention that might work as a conspiracy 
                            against <span class="persName-JR">Ruskin</span>&#x02BC;s ideas. Likewise <span class="persName-VAB">Burd</span>, 
                            at least at the start of his career in the introduction to <span class="title-WINNINGTONLETTERS"><i>The Winnington Letters</i></span>, 
                            jumps quickly from the record of past editors&#x02BC; attempts to regularize <span class="persName-JR">Ruskin</span>&#x02BC;s punctuation and grammar 
                            to an accusation that what past editors truly sought was to suppress (quoting <span class="persName-CEN">Charles Eliot Norton</span>) 
                            the &#x201C;&#x2018;too personal, too intimate, or of too slight interest&#x2019;&#x201D; 
                            (<a href="../bibiliography/bibliography.php#WINNINGTONLETTERSINTRO" target="_blank" class="inactive">Burd, introduction to <i>Winnington Letters</i></a>, 85).
            </p>
            
         </div>
         
         
         <div id="SCOPE" class="subsection">
            <span class="head-subsection">The Scope of <i>ERM</i></span>
            
            <p>For a descriptive survey of the manuscripts planned for inclusion in <i>ERM</i>, 
                            see <a href="../notes/overview_of_mss_note.php" target="_blank" class="inactive">Overview of the Manuscripts</a>.
            </p>
            
            <div id="PREVIOUSEDITIONS" class="sub-subsection">
               <span class="head-sub-subsection">The Relation of <i>ERM</i> to Previous Editorial Projects Involving the Early Manuscripts</span>
               
               <p>The archive aims to include all extant works and manuscripts dateable from <span class="date-1826-1842">1826 through 1842</span>, 
                                exclusive of the <a href="../bibiliography/bibliography.php#JRDIARY1835" target="_blank" class="inactive"><span class="title-manuscript-JRDIARY1835">Diary Notebook, 1835</span></a>, 
                                which is available online as part of the <span class="title-archive_digital-JRDA">John Ruskin Digital Archive</span>, 
                                in the <span class="title-archive_digital-VLLC">Victorian Lives and Letters Consortium</span>; 
                                and the letters as edited by <span class="persName-VAB">Van Akin Burd</span>, 
                                <a href="../bibiliography/bibliography.php#RFL" target="_blank" class="inactive"><span class="title-book-RFL"><i>The Ruskin Family Letters</i></span></a>.
               </p>
               
               <p><span class="persName-VAB">Professor Burd</span> granted permission for this edition to be incorporated into <i>ERM</i>, 
                                so long as his edition&#x02BC;s is maintained in exact integrity (Burd to David C. Hanson, 28 August 2008). At present, 
                                <span class="title-book-RFL"><i>The Ruskin Family Letters</i></span> 
                                remains widely available in paper form, and thanks to the extraordinary quality of <span class="persName-VAB">Burd</span>&#x02BC;s editing, 
                                there is no call at present for a new transcription of the letters. <i>ERM</i> does, however, make available facsimiles of letters 
                                containing works (such as poems or parts of poems), since these witnesses are necessary to the editing of these works. 
                                <i>ERM</i> thoroughly re&#x2010;edits poems that <span class="persName-VAB">Burd</span> included in 
                                <span class="title-book-RFL"><i>The Ruskin Family Letters</i></span> on the grounds of their epistolary presentation, 
                                such as <span class="persName-JR">Ruskin</span>&#x02BC;s copies of <a href="../notes/new_years_poems_note.php" target="_blank" class="inactive">New Year&#x02BC;s Poems</a> 
                                and birthday odes for his <span class="persName-JJR">father</span>. <span class="persName-VAB">Burd</span> printed only the presentation versions 
                                of those works, without attempting comparison or collation with drafts and other fair copies.
               </p>
               
               <p>Another previously published edition of an early <span class="persName-JR">Ruskin</span> manuscript is 
                                <a href="../bibiliography/bibliography.php#TOURLAKES" target="_blank" class="inactive">A Tour to the Lakes in Cumberland</a>, the account of the joint travel diary by 
                                <span class="persName-JR">Ruskin</span> and his cousin, <span class="persName-MBR">Mary Richardson</span>, 
                                edited by <span class="persName-JSD">James S. Dearden</span> and <span class="persName-VAB">Van Akin Burd</span>. 
                                <span class="persName-VAB">Burd</span> and <span class="persName-JSD">Dearden</span> stipulate that any use of their editorial work is to be copied 
                                &#x201C;as it stands, introducing comments or variants as an addendum&#x201D; (Van Akin Burd to David C. Hanson, 14 August 2003; 
                                James S. Dearden to David C. Hanson, 3 September 2003). Since this <span class="date-1830">1830</span> manuscript provides important evidence about such matters 
                                as collaborative writing in the Ruskin family, and the developing relation for <span class="persName-JR">Ruskin</span> between travel and writing, 
                                the manuscript evidence will be discussed in <i>ERM</i>, while referring the reader to Burd&#x02BC;s and Dearden&#x02BC;s edition.
               </p>
               
               <p><span class="persName-JSD">James Dearden</span>&#x02BC;s <span class="date-1969">1969</span> edition of <span class="persName-JR">Ruskin</span>&#x02BC;s 
                                <span class="date-1830">1830</span> Lake District tour poem, <a href="../bibiliography/bibliography.php#DEARDENITERIAD" target="_blank" class="inactive"><i>Iteriad, or Three Weeks among the Lakes</i></a>, 
                                relies for its copytext on the transcript of <span class="persName-JR">Ruskin</span>&#x02BC;s fair copy that 
                                <span class="persName-ETC">Cook</span> and <span class="persName-AW">Wedderburn</span> prepared for use in the <a href="../notes/library_edition_note.php" target="_blank" class="inactive">Library Edition</a>. 
                                Although adequate for <span class="persName-JSD">Dearden</span>&#x02BC;s audience at the time, intended as nonspecialist readers interested in the history 
                                of tourism in the <span class="placeName-LAKEDISTRICT">Lake District</span>, the transcript taken for the 
                                <span class="title-book-JRWORKSLE">Library Edition</span> has limited scholarly interest. <span class="persName-JSD">Dearden</span> has given permission, however, 
                                to quote with attribution from his lively and informed notes for the edition.
               </p>
               
               <p><i>ERM</i> references <a href="../notes/viljoen_h_g_note.php" target="_blank" class="inactive"><span class="persName-HGV">Helen Gill Viljoen</span></a>&#x02BC;s 
                                unpublished scholarly attention to the juvenilia, included as draft and notes for her unfinished biography of <span class="persName-JR">Ruskin</span> 
                                and for her unpublished edition of the so&#x2010;called <i>Sermons on the Pentateuch</i>, which are found among the 
                                <a href="../bibiliography/bibliography.php#VILJOENPAPERS" target="_blank" class="inactive"><span class="title-archive_nondigital-VILJOENPAPERS">Helen Gill Viljoen Papers</span></a> 
                                at the <span class="orgName-MORGANLIBRARY">Pierpont Morgan Library</span>. For the biography, see the account by <span class="persName-JLS">James L. Spates</span> in 
                                <a href="../bibiliography/bibliography.php#SPATESDARKSTAR" target="_blank" class="inactive">&#x201C;John Ruskin&#x02BC;s Dark Star&#x201D;</a>); and for the edition of the sermons, 
                                see the summary by <span class="persName-VAB">Van Akin Burd</span> in 
                                <a href="../bibiliography/bibliography.php#BURDRUSKINSTESTAMENT" target="_blank" class="inactive">&#x201C;Ruskin&#x02BC;s Testament of His Boyhood Faith&#x201D;</a>. 
                                While working in archives, <span class="persName-HGV">Viljoen</span> transcribed numerous early texts by <span class="persName-JR">Ruskin</span>; 
                                and at an early stage of research for <i>ERM</i>, the editor benefited from consulting these typescript transcriptions, 
                                whether as entrusted to him directly by <span class="persName-VAB">Van Akin Burd</span> or as later deposited at the 
                                <span class="orgName-">Pierpont Morgan Library</span>. None of these transcriptions are used as copytext in <i>ERM</i>, 
                                since they are limited in their usefulness owing to mistakes arising from the speed with which <span class="persName-HGV">Viljoen</span> 
                                had to cover an extensive territory. <span class="persName-HGV">Viljoen</span>&#x02BC;s unpublished critical papers on the early writing do remain useful, 
                                however, and are cited in <i>ERM</i>&#x02BC;s commentary as appropriate.
               </p>
               
            </div>
            
            <div id="SCOPEOFWORKS" class="sub-subsection">
               <span class="head-sub-subsection">The Scope of Works Included in <i>ERM</i></span>
               
               <p>Chronologically, a starting point for the scope of works edited in <i>ERM</i> would appear easily determined 
                                by the earliest available manuscripts in <span class="persName-JR">Ruskin</span>&#x02BC;s hand. However, the elusiveness of determining beginnings 
                                of a <span class="persName-JR">Ruskin</span> archive is suggested by the decisions of <span class="persName-HGV">Helen Gill Viljoen</span>, 
                                whose interest in <span class="persName-JR">Ruskin</span>&#x02BC;s early writings drove her farther back in time to his 
                                &#x201C;Scottish heritage&#x201D; in order to understand <span class="persName-JR">Ruskin</span>&#x02BC;s parents. The personalities and influence of 
                                <span class="persName-JJR">John James Ruskin</span> and of <span class="persName-MR">Margaret Ruskin</span>, <span class="persName-HGV">Viljoen</span> 
                                believed, were foundational to an understanding of <span class="persName-JR">Ruskin</span> as a writer 
                                (see <a href="../bibiliography/bibliography.php#SCOTTISHHERITAGE" target="_blank" class="inactive">Viljoen, <i>Ruskin&#x02BC;s Scottish Heritage</i></a>). 
                                Similarly, <span class="persName-VAB">Van Akin Burd</span>&#x02BC;s <span class="title-book-RFL"><i>Ruskin Family Letters</i></span> 
                                begins with the courtship correspondence between <span class="persName-JR">Ruskin</span>&#x02BC;s parents, along with their exchanges with their parents. 
                                <i>ERM</i> is not meant to duplicate either <span class="persName-HGV">Viljoen</span>&#x02BC;s biographical research or 
                                <span class="persName-VAB">Van Akin Burd</span>&#x02BC;s annotation of the family correspondence, but to complement these resources, 
                                gratefully referencing them through commentary. Rather, <i>ERM</i> seeks to contribute a standard of documentary editing in digital format 
                                for <span class="persName-JR">Ruskin</span>&#x02BC;s boyhood and youthful writing. 
                                The logical terminus a quo for the chronological inclusion of manuscripits is with <span class="persName-JR">Ruskin</span>&#x02BC;s earliest extant poem, 
                                which we argue to be <a href="../apparatuses/the_needless_alarm_apparatus.php" target="_blank"><span class="title-poem-">&#x201C;The Needless Alarm&#x201D;</span></a>, 
                                fair&#x2010;copied in <span class="date-1826">1826</span>. Possibly earlier markings by <span class="persName-JR">Ruskin</span> that survive 
                                inside of printed books owned by the family are discussed in the commentary
               </p>
               
               <p>In establishing the overall scope of a corpus of youthful writing for editing, the aim should be to encourage new questions about a category of 
                                writing that <span class="persName-CAA">Christine Alexander</span> and <span class="persName-JMCM">Juliet McMaster</span> call 
                                &#x201C;almost a genre&#x201D;&#x2014;<span class="date-1801-1900">nineteenth&#x2010;century</span> juvenilia by major British writers 
                                (<a href="../bibiliography/bibliography.php#ALEXANDERMCMASTERINTRODUCTION" target="_blank" class="inactive">Alexander and McMaster, &#x201C;Introduction&#x201D;</a>, 3). 
                                In <i>ERM</i>, the modifier <i>early</i> is based on a precedent set by the 
                                <span class="title-book-JRWORKSLE">Library Edition</span>, not because the editors were particularly thoughtful about their 
                                terminology&#x2014;&#x201C;by &#x2018;early&#x2019; writings,&#x201D; they wrote, &#x201C;is meant such as were composed previously to the first volume of 
                                <span class="title-book-JRMODERNPAINTERS"><i>Modern Painters</i></span>,&#x201D; and they tended to use this term interchangeably with <i>juvenilia</i> 
                                (<a href="../bibiliography/bibliography.php#JRWORKSLE" target="_blank" class="inactive">Ruskin, <i>Works</i></a>, 1:xxiii)&#x2014;but because 
                                the relative neutrality of the term <i>early</i> offers the advantage of leaving questions open for investigation. 
                                <i>ERM</i> has been launched at a time when juvenilia studies have been drawing greater curiosity than perhaps ever before; 
                                nevertheless, pejorative views of major authors&#x02BC; childhood writing have a deep history, not least among the authors themselves in their maturity, 
                                and one aim of the archive is not just to combat these prejudices, but to examine the prejudice as a critical problem.
               </p>
               
               <p>For example, a debate formed around the fin de siècle practice of collecting the juvenilia of &#x201C;modern&#x201D; 
                                (i.e., <span class="date-1801-1900">nineteenth&#x2010;century</span>) authors, a practice that arose from a larger aim 
                                of compiling collections of modern authors that aimed at comprehensiveness, including the acquisition of every &#x201C;minor&#x201D; publication such as juvenilia. 
                                The debate, which challenged the significance of what were deemed &#x201C;minor&#x201D; publications and deplored the effect of collecting these on the rare book market, 
                                spilled over into scholarly arguments about appropriate bibliographical approaches to these writers&#x02BC; canons. Much rancor arose over a perceived threat 
                                posed by this collecting, especially of juvenilia, to established literary authority and the control exercised over a literary corpus by an author or by the author&#x02BC;s family 
                                (see <a href="../notes/collecting_of_modern_authors_note.php" target="_blank">The Collecting of Modern Authors in the Late Nineteenth and Early Twentieth Centuries</a>; 
                                and <a href="../bibiliography/bibliography.php#SENTIMENTANDMATERIALITY" target="_blank" class="inactive">Hanson, &#x201C;Sentiment and Materiality in Late&#x2010;Victorian Book Collecting&#x201D;</a>). 
                                <span class="persName-JR">Ruskin</span> collecting held a singular position in this debate, for whereas many authors expressed embarrassment 
                                about their literary juvenilia, and reacted angrily to collectors seeking out early publications, and even prosecuted publishers and editors 
                                who supported this collecting fashion, <span class="persName-JR">Ruskin</span> appeared to sanction this curiosity. As he wrote in 
                                <span class="title-book-"><i>The Queen of the Air</i></span> (<span class="date-1869">1869</span>), 
                                <span class="persName-JR">Ruskin</span> was willing to risk &#x201C;whatever charge of folly may come on me&#x201D; by printing the 
                                <span class="date-1828">1828</span> poem, <a href="../apparatuses/glenfarg_apparatus.php" target="_blank" class="inactive"><span class="title-poem-JRGLENFARG">&#x201C;Glenfarg&#x201D;</span></a>, 
                                since &#x201C;the weak little rhyme already&#x201D; demonstrated &#x201C;all that I ever could be, and all that I cannot be&#x201D; 
                                (<a href="../bibiliography/bibliography.php#JRWORKSLE" target="_blank" class="inactive">Ruskin, <i>Works</i></a>, 19:396). The claim was an exaggeration, 
                                as <span class="persName-JR">Ruskin</span> surely knew; and like other writers, he reacted with skepticism when listings of his earliest published writing 
                                became the foundation of one of the first comprehensive, single&#x2010;author bibliographies, which began appearing in the 
                                <span class="date-1860-1879">1860s&#x2013;70s</span> as finding aids for rarities sought by collectors 
                                (see <a href="../notes/bibliography_of_ruskin_shepherd_note.php" target="_blank"><i>Bibliography of Ruskin</i> (1878&#x2013;81)</a>, 
                                and <a href="../notes/shepherd_r_h_note.php" target="_blank">Richard Herne Shepherd (1840&#x2013;95)</a>). Nonetheless, 
                                whereas <span class="persName-ALT">Alfred Tennyson</span> and <span class="persName-RB">Robert Browning</span> abused such collectors&#x02BC; publications 
                                and hounded the editors and publishers who reprinted their early writings with criminal prosecution for piracy, 
                                <span class="persName-JR">Ruskin</span> chose to compete with this publishing phenomenon by appointing young men in his inner circle, 
                                such as <span class="persName-WGC">W. G. Collingwood</span> and <span class="persName-AW">Alexander Wedderburn</span>, 
                                to edit these ephemeral pieces under his own supervision.
               </p>
               
               <p>The poem <a href="../apparatuses/glenfarg_apparatus.php" target="_blank" class="inactive"><span class="title-poem-JRGLENFARG">&#x201C;Glenfarg&#x201D;</span></a> 
                                may or may not be a &#x201C;weak little rhyme,&#x201D; but the significance that <span class="persName-JR">Ruskin</span> was prepared to bestow on it 
                                indicates the difficulty of winnowing a corpus of early writing by identifying the chaff on grounds of literary quality. For some, 
                                this difficulty only justifies their low opinion of juvenilia studies, but these exclusionary policies often carry a hidden agenda that proves 
                                at least as interesting historically as the allegedly minor writing that such policies disqualify for serious study. 
                                <span class="persName-HGV">Viljoen</span> believed that the scope of materials included in the <span class="title-book-JRWORKSLE">Library Edition</span> 
                                was determined by the guarded decorum of <span class="persName-JR">Ruskin</span>&#x02BC;s inner circle&#x2014;a policy, namely, 
                                that &#x201C;nothing should be made public which might reflect adversely, from &#x005B;the editors&#x02BC;&#x005D; point of view, 
                                either upon <span class="persName-JR">Ruskin</span> or upon any member of the family&#x201D;; and also (and potentially contradictorily) that 
                                &#x201C;all that <span class="persName-JR">Ruskin</span> said autobiographically, especially in <span class="title-book-JRPRAETERITA"><i>Praeterita</i></span>, 
                                about his life and that of his parents should be given unqualified editorial support&#x201D; 
                                (<a href="../bibiliography/bibliography.php#SCOTTISHHERITAGE" target="_blank" class="inactive">Viljoen, <i>Ruskin&#x02BC;s Scottish Heritage</i></a>, 16&#x2013;17; and see 
                                <a href="../bibiliography/bibliography.php#RFL" target="_blank" class="inactive">Burd, ed., <i>Ruskin Family Letters</i></a>, xxviii). While this judgment fails to take due measure 
                                of what many perceived, at the time of its publication, as the scandalous inclusiveness of the edition, specifically defined omissions 
                                in these late-Victorian can prove revealing. As I have argued elsewhere, the limits that <span class="persName-WGC">Collingwood</span> 
                                observed in his edition of <span class="persName-JR">Ruskin</span>&#x02BC;s early poems, 
                                <a href="../notes/poems_1891_note.php" target="_blank" class="inactive"><span class="title-book-JRPOEMS1891"><i>Poems</i> (1891)</span></a>, 
                                by agreeing to publish only &#x201C;completed&#x201D; works (a ban imposed possibly by <span class="persName-JR">Ruskin</span> himself, or by his caretakers, 
                                the Severns, or by his literary executors) had one effect of suppressing fragmentary expressions of <span class="persName-JR">Ruskin</span>&#x02BC;s 
                                anger and frustration over parental attempts to rein in his writing&#x2014;evidence of youthful psychological disturbance that the elderly 
                                <span class="persName-JR">Ruskin</span> would not have wished to be revived and to disturb the tenor of his conciliatory autobiographical project 
                                (see <a href="../bibiliography/bibliography.php#HANSONPSYCHOLOGY" target="_blank" class="inactive">Hanson, &#x201C;Psychology of Fragmentation&#x201D;</a>; and 
                                <a href="../bibiliography/bibliography.php#HANSONSELFANDREVISION" target="_blank" class="inactive">Hanson, &#x201C;Self and Revision in Ruskin&#x02BC;s Revaluations of Romanticism&#x201D;</a>). 
                                What other unforeseen effects of nineteenth&#x2010;century policies of selectiveness and &#x201C;correction&#x201D; have had on <span class="persName-JR">Ruskin</span> studies 
                                will be discovered, it is hoped, with the aid of this archive.
               </p>
               
               <p>Scholarly editing will always raise hackles over the &#x201C;ownership,&#x201D; literal or cultural, of canonical or semi&#x2010;canonical writing. 
                                In the <span class="date-1960-1969">1960s</span>, when <span class="persName-EW">Edmund Wilson</span> (1895&#x2013;1972) took up 
                                <span class="persName-LM">Lewis Mumford</span>&#x02BC;s (1895&#x2013;1990) fight against the <span class="orgName-CEAA">CEAA</span> academics 
                                for forcing lay readers to study <span class="persName-RWE">Ralph Waldo Emerson</span>&#x02BC;s journals through the &#x201C;barbed wire&#x201D; 
                                of editorial apparatus, <span class="persName-EW">Wilson</span> was goaded to a significant extent by his belief that these sophisticated editorial projects 
                                were funded at the expense of his own plan &#x201C;for an American equivalent of the Pl&#x00E9;iade series of Gallimard&#x201D;&#x2014;what became the 
                                <span class="title-series-LOFA">Library of America</span> series of standard works 
                                (<a href="../bibiliography/bibliography.php#FRANKLINWELTER" target="_blank" class="inactive">Franklin, &#x201C;The &#x2018;Library of America&#x2019; and the Welter of American Books&#x201D;</a>, 182, 181). 
                                Similarly, from the <span class="date-1860-1899">1860s through the 1890s</span>, beliefs about what constituted a national <i>literature</i>, 
                                and about how it should be consumed, prompted negative reactions to the editing of juvenilia. Some opponents to the so&#x2010;called &#x201C;first edition mania&#x201D; 
                                were motivated by class snobbery against faddish enthusiasts and speculators who invaded rare book showrooms and caused prices for such &#x201C;minor&#x201D; works 
                                as juvenilia to balloon at the expense of valuing modern classics. More interesting is the intensely emotional resistance by authors themselves to the 
                                &#x201C;resurrection&#x201D; of their juvenile works by editors and bibliographers&#x2014;the term <i>resurrection</i>
                                referring to the illicit exhumation of bodies, and evoking the horror that authors and the literary establishment expressed regarding the 
                                &#x201C;vampiric&#x201D; ravages of editors who sought to reprint juvenilia. In this context, it is worth investigating why <span class="persName-JR">Ruskin</span> 
                                did not share the hostility toward &#x201C;resurrection men,&#x201D; but rather hastened to trump their excavations by reprinting his own fugitive pieces, 
                                and even welcomed a &#x201C;charge of folly&#x201D; for printing a juvenile poem. For <span class="persName-JR">Ruskin</span>, 
                                the &#x201C;dark waters&#x201D; stirred by his review of his juvenilia when writing his autobiography, <i>Praeterita</i>, 
                                posed a challenge to negotiate, and not to submerge, tenebral memory (see 
                                <a href="../bibiliography/bibliography.php#DARKWATERS" target="_blank" class="inactive">Hanson, &#x201C;The Dark Waters of <i>Praeterita</i>&#x201D;</a>; and 
                                <a href="../bibiliography/bibliography.php#SENTIMENTANDMATERIALITY" target="_blank" class="inactive">Hanson, &#x201C;Sentiment and Materiality in Late&#x2010;Victorian Book Collecting&#x201D;</a>).
               </p>
               
               <p>As a terminus ad quem for <span class="persName-JR">Ruskin</span>&#x02BC;s early writing, the editors of the 
                                <span class="title-book-JRWORKSLE">Library Edition</span> chose the publication of <span class="title-book-JRMODERNPAINTERS1"><i>Modern Painters I</i></span>, 
                                since the emerging biographical consensus followed <span class="persName-JR">Ruskin</span>&#x02BC;s autobiography in perceiving <span class="date-1843">1843</span> as the debut of his 
                                destined professional role as a critic. <span class="persName-VAB">Van Akin Burd</span> likewise chose to close 
                                <span class="title-book-RFL"><i>The Ruskin Family Letters</i></span> in <span class="date-1843-06">June 1843</span>, 
                                when <span class="title-book-JRMODERNPAINTERS1">the first volume of <i>Modern Painters</i></span> appeared. 
                                <i>ERM</i> follows suit, but again the aim respecting scope should be to open up questions for study. 
                                As <span class="persName-CAA">Christine Alexander</span> and <span class="persName-JMCM">Juliet McMaster</span> comment, 
                                owing to the pejorative connotations of the term <i>juvenilia</i> in literary criticism, the supposed end&#x2010;point of an authors&#x02BC; 
                                &#x201C;apprentice&#x201D; work tends reflect backward on the early writing in negative terms, whether the transition is conceived as a successful 
                                or as an unsuccessful rite of passage. The separation between the Brontë sisters&#x02BC; early writing and mature novels has been treated 
                                by some critics as a &#x201C;problem&#x201D; in a derogatory sense, with the <i>juvenile</i> understood to persist as a kind of infection 
                                into the later work. On these grounds, <span class="persName-PBB">Branwell Brontë</span> (1817&#x2013;48) has been permanently infantilized 
                                by some critics who regard all of his work as &#x201C;juvenilia&#x201D; despite his living and writing until age thirty&#x2010;one 
                                (<a href="../bibiliography/bibliography.php#ALEXANDERMCMASTERINTRODUCTION" target="_blank" class="inactive">Alexander and McMaster, &#x201C;Introduction&#x201D;</a>, 2; 
                                <a href="../bibiliography/bibliography.php#ALEXANDERDEFINING" target="_blank" class="inactive">Alexander, &#x201C;Defining and Representing Literary Juvenilia&#x201D;</a>, 71&#x2013;72). 
                                Of writers of our own time, the dubious term was applied to the novelist <span class="persName-PKF">Penelope Fitzgerald</span> (1916&#x2013;2000) 
                                by her publisher, who called her first novel, <span class="title-book-FITZGERALDGOLDENCHILD"><i>The Golden Child</i></span> 
                                (<span class="date-1977">1977</span>), &#x201C;the only piece of juvenilia I know of by a sixty&#x2010;one year old&#x201D; 
                                (<a href="../bibiliography/bibliography.php#GORDONFITZGERALD" target="_blank" class="inactive">Gordon, &#x201C;C&#x02BC;est qu&#x02BC; elle a v&#x00E9;cu"</a>). 
                                Amid these critical confusions, of which the slippery use of the term <i>juvenilia</i> is symptomatic, nineteenth&#x2010;century 
                                ideas of a writer&#x02BC;s or artist&#x02BC;s emergence need to be historically defined and situated, as <span class="persName-CBOCK">Carol Bock</span> 
                                has done for the concept that the early Victorians termed &#x201C;coming forward&#x201D; as an author 
                                (<a href="../bibiliography/bibliography.php#BOCKAUTHORSHIP" target="_blank" class="inactive">Bock, &#x201C;Authorship, the Brontës, and <i>Fraser&#x02BC;s Magazine</i>&#x201D;</a>). 
                                Arguably, <span class="persName-JR">Ruskin</span> effected this transition in <span class="date-1834">1834</span>, almost a decade prior to the publication of 
                                <span class="title-book-JRMODERNPAINTERS1"><i>Modern Painters I</i></span>, with the publication of two poems in the literary annual, 
                                <a href="../notes/friendships_offering_note.php" target="_blank"><span class="title-periodical-FRIENDSHIPSOFFERING"><i>Friendship&#x02BC;s Offering</i></span></a>, 
                                <a href="../witnesses/account_of_a_tour_on_the_continent_fo.php" target="_blank" class="inactive"><span class="title-poem-JRFRAGMENTS">&#x201C;Fragments from a Metrical Journal&#x201D;</span></a> 
                                (see <a href="../apparatuses/account_of_a_tour_on_the_continent_apparatus.php" target="_blank">Account of a Tour on the Continent</a>) 
                                and <a href="../apparatuses/saltzburg_apparatus.php" target="_blank"><span class="title-poem-JRSALTZBURG">&#x201C;Saltzburg&#x201D;</span></a>&#x2014;although 
                                he made this transition less independently than did the Brontës, not with self&#x2010;help advice from <span class="title-periodical-FRASERSMAGAZINE"><i>Fraser&#x02BC;s Magazine</i></span>, 
                                but with the careful preparation and guidance of mentors including his father and several Scottish men of letters 
                                (see <a href="../bibiliography/bibliography.php#HANSONRUSKIN1830S" target="_blank" class="inactive">Hanson, &#x201C;Ruskin in the 1830s&#x201D;</a>).
               </p>
               
               <p>Another rite&#x2010;of&#x2010;passage genre to be explored in nineteenth&#x2010;century juvenilia is the &#x201C;farewell,&#x201D; 
                                a self&#x2010;conscious parting of ways with the writing of one&#x02BC;s youth, particularly as modeled on some popular form such as Byronism. This rite of passage 
                                is epitomized by <span class="persName-CBW">Charlotte Brontë</span>&#x02BC;s <span class="title-essay-BRONTEFAREWELL">&#x201C;Farewell to Angria&#x201D;</span> (ca. <span class="date-1839">1839</span>), 
                                in which <span class="persName-CBW">Brontë</span> takes leave fondly and reluctantly, but with some relief, of her fictional world of <span class="placeName-fictional-BRONTEANGRIA">Angria</span>, 
                                which she represents in this essay as a gallery of landscapes and portraits in varying seasons and moods 
                                (<a href="../bibiliography/bibliography.php#BRONTESTALES" target="_blank" class="inactive">Alexander, ed., Brontës, <i>Tales</i></a>, 314, 557). 
                                Brontë was relinquishing her Byronism at a high pitch of intensity in her engagement with this poetic trend 
                                (<a href="../bibiliography/bibliography.php#ALEXANDEREARLYWRITINGS" target="_blank" class="inactive">Alexander, <i>Early Writings of Charlotte Brontë</i></a>, 192&#x2013;200). 
                                Her break was deliberate in <span class="title-essay-BRONTEFAREWELL">&#x201C;Farewell to Angria&#x201D;</span>, exhibiting a self&#x2010;consciousness 
                                that perhaps makes this piece a rarity as a genre, rather than what might be found in other youthful writers as a tendency to detachment developing 
                                across a span of pieces of more routine imitativeness. If <span class="persName-KC">Karen Chase</span> is correct about the influence of Byronism 
                                on the Brontës, however, a Carlylean break with Byronic romance was almost inevitable for promising young writers of the 
                                <span class="date-1830-1839">1830s</span>, since <span class="persName-CBW">Charlotte</span>&#x02BC;s and <span class="persName-PBB">Branwell</span>&#x02BC;s 
                                early Byronism presented only &#x201C;eros without psyche,&#x201D; in which &#x201C;no Bildung&#x201D; could occur, because characters&#x02BC; 
                                &#x201C;personalties do not develop; they merely intensify&#x201D; (<a href="../bibiliography/bibliography.php#CHASEEROSANDPSYCHE" target="_blank" class="inactive">Chase, <i>Eros and Psyche</i></a>, 15, 14). 
                                <span class="persName-JR">Ruskin</span> likewise composed a Byronic romance in <a href="../apparatuses/leoni_apparatus.php" target="_blank" class="inactive"><span class="title-story-JRLEONI">&#x201C;Leoni&#x201D;</span></a>, 
                                but much of his poetic Byronism took the form, not of erotic tales and personae, but of landscape imagery, as if in realization of <span class="persName-CBW">Charlotte</span>&#x02BC;s metaphor 
                                place as landscapes and portraits suffused with Byronism in <span class="title-essay-BRONTEFAREWELL">&#x201C;Farewell to Angria&#x201D;</span>. <i>ERM</i> 
                                contains several such fragmentary imitations of sublime landscapes that <span class="persName-JR">Ruskin</span> populates with &#x201C;spirits&#x201D; drawn from <span class="persName-GGB">Byron</span>&#x02BC;s 
                                <span class="title-poem-BYRONMANFRED"><i>Manfred</i></span> as well as from <span class="persName-WS">Walter Scott</span>&#x02BC;s poems and tales, 
                                fragments in which <span class="persName-JR">Ruskin</span>&#x02BC;s purpose was perhaps merely redundantly to intensify an effect. In making available all of these previously 
                                unpublished fragments, the benefit of <i>ERM</i>&#x02BC;s comprehensiveness prove only to demonstrate a boyish compulsion. If so, it is against these 
                                repetitious gothic landscape tropes that one may search for signs of <span class="persName-JR">Ruskin</span>&#x02BC;s break with Byronism&#x2014;a change typically 
                                discussed in <span class="persName-JR">Ruskin</span> studies in connection with <span class="title-book-JRSTONESOFVENICE"><i>Stones of Venice</i></span>.
               </p>
               
            </div>
            
            
            <div id="" class="sub-subsection">
               <span class="head-sub-subsection">The Scope of Commentary in <i>ERM</i>: Apparatuses, Notes, and Annotation</span>
               
               <p>For the kinds and arrangement of editorial commentary in <i>ERM</i>, see 
                                <a href="../notes/plan_of_archive_note.php" target="_blank">Plan of the Archive</a>. The archive follows a tradition, 
                                which has prevailed in <span class="persName-JR">Ruskin</span> studies since publication of the <span class="title-book-JRWORKSLE">Library Edition</span>, 
                                of supplying generous editorial commentary. In general, the principle guiding the scope of commentary in <i>ERM</i> 
                                is to inform professional scholars who are already knowledegable about <span class="placeName-BRITAIN">Britain</span> in the nineteenth century, 
                                but who are not necessarily specialists in <span class="persName-JR">Ruskin</span>. The archive takes for granted a common ground with its audience 
                                of professional interest in the culture and century, and enters this critical conversation by helping to situate the reader in 
                                <span class="persName-JR">Ruskin</span>&#x02BC;s youthful engagement with his times.
               </p>
               
               <p>Unless specified otherwise, all commentary is authored by the editor.</p>
               
            </div>
            
         </div>
         
      </div>
      
      
      <div id="DOCUMENTARYPRACTICES" class="section">
         <span class="head-section">Documentary Editorial Practices and Encoding</span>
         
         
         <div id="TRANSCRIPTION" class="subsection">
            <span class="head-subsection">Transcription and Markup Protocol</span>
            
            <p>In our transcription policy, we strive to abide by the definition of textual transcription proposed by 
                            <a href="../bibiliography/bibliography.php#VANDERMEULENTANSELLETRANSCRIPTION" target="_blank" class="inactive">Vander Meulen and Tanselle, <span class="title-essay-VANDERMEULENTANSELLETRANSCRIPTION">&#x201C;System of Manuscript Transcription&#x201D;</span></a>: 
                            &#x201C;the transcriber&#x02BC;s goal is to make an informed decision about what is actually inscribed at each point&#x201D; in a manuscript, 
                            although of course editorial &#x201C;judgment is necessarily involved in deciding what is in fact present,&#x201D; 
                            &#x201C;as when an ambiguously formed character resembles two different letters.&#x201D; Despite these calls on editorial judgment, which must be notated, 
                            in a documentary editorial procedure the resulting &#x201C;text cannot simultaneously be unemended and emended&#x201D; 
                            since &#x201C;no single text&#x201D; can be both a transcription and a critical text; these &#x201C;are mutually exclusive genres&#x201D; of editing, 
                            although the same <i>edition</i> might contain both transcriptions and emended, critical texts (pp. 201, 203).
            </p>
            
            <p>For most works in <i>ERM</i>, the editor supplies documentary transcriptions of witnesses paired with facsimiles (if available) of those witnesses. 
                            The archive also provides, as it were, documentary transcriptions of past critical texts of works, because we believe that researchers will benefit 
                            by being able to study, in close proximity with accurate transcriptions of manuscript witnesses, how <span class="persName-JR">Ruskin</span>&#x02BC;s first editors 
                            saw fit to represent those manuscripts to readers.
            </p>
            
            <p>The editor is responsible for the accuracy of all transcriptions of witnesses in <i>ERM</i>, having taken most of them himself 
                            over several years from the original manuscripts in the <span class="orgName-BEINECKE">Beinecke Library</span>, <span class="orgName-YALE">Yale University</span>; 
                            the <span class="orgName-BERG">Berg Collection, New York Public Library</span>; the <span class="orgName-HUNTINGTON">Huntington Library</span>; 
                            the <span class="orgName-MORGANLIBRARY">Pierpont Morgan Library</span>; <span class="orgName-PRINCETONLIBRARY">Rare Books and Special Collections, Princeton University Library</span>; 
                            the <span class="orgName-RUSKINMUSEUMCONISTON">Ruskin Museum, Coniston</span>; and the <span class="orgName-">Ruskin Library</span>, <span class="orgName-LANCASTERU">Lancaster University</span>. 
                            Later, the project acquired facsimiles in forms ranging from high&#x2010;resolution tiff files to microfilm, which have been used to confirm and improve on 
                            the editor&#x02BC;s original transcriptions, and to post in <i>ERM</i> for the reader&#x02BC;s benefit. The editor is also responsible for final decisions 
                            about the interpretation of doubtful readings of manuscripts and for notating these decisions with textual glosses. In scattered instances, mostly involving manuscripts 
                            used to supplement annotation of the works contained in <i>ERM</i>, the editor initially had time in the physical archives 
                            only to describe a manuscript and gather information for a critical apparatus, and not to transcribe its contents completely; 
                            in those cases, we have sometimes been able to capture a transcription based on a high&#x2010;resolution facsimile. This procedure is noted where it occurs, 
                            with the expectation of later revisiting the physical manuscript.
            </p>
            
            <p>For support of archival research as well as imaging of the manuscripts, the editor and the Digital Humanities program at 
                            <span class="orgName-SOUTHEASTERNU">Southeastern Louisiana University</span> are indebted to the agencies listed on the 
                            <a href="../webpages/staff.php" target="_blank">Staff and Support</a> page. Without the travel grants and fellowships awarded by these agencies, 
                            the research underpinning <i>ERM</i> would not have been possible. The editor is also grateful to the staffs of these libraries and archives, 
                            who shared their expertise and supported our research.
            </p>
            
            <p>In the earliest stage of developing the digital archive beyond the research and writing, <span class="persName-RGARSIDE">Roger Garside</span>, 
                            formerly senior lecturer in the <span class="orgName-LANCASTERUCOMPUTING">Department of Computing, Lancaster University</span>,
                            devised a helpful program for translating the editor&#x02BC;s word processing files into lightly <span class="orgName-TEI">TEI</span>&#x2010;encoded 
                            <span class="title-program-XML">XML</span>, and for generating transformations in the form of <span class="title-program-HTML">HTML</span> pages. 
                            This program was subsequently replaced as we elaborated our ideas about describing the early <span class="persName-JR">Ruskin</span> manuscripts 
                            with <span class="orgName-TEI">TEI</span> markup, and also as we pursued a pedagogy for introducing students to <span class="orgName-TEI">TEI</span> 
                            encoding and to designing and building online scholarly resources. <span class="persName-RGARSIDE">Garside</span>&#x02BC;s program, however, 
                            was foundational for helping us to envision the architecture of the archive. Meanwhile, to advance the Digital Humanities program at 
                            <span class="orgName-SOUTHEASTERNU">Southeastern Louisiana University</span>, we benefited from consultation by <span class="persName-SBAUMAN">Syd Bauman</span>, 
                            <span class="persName-MCHRISTY">Matthew Christy</span>, <span class="persName-JFLANDERS">Julia Flanders</span>, <span class="persName-LMANDELL">Laura Mandell</span>, 
                            <span class="persName-DPARKER">Dot Porter</span>, <span class="persName-LWOOF">Lawrence Woof</span>, and the staff of the <span class="date-2005">2005</span> 
               <span class="orgName-NINES">NINES</span> Summer Workshop in Digital Scholarship at the <span class="orgName-">University of Viriginia</span>. 
                            <i>ERM</i> is indebted to these individuals and their institutions for their generosity and good will, 
                            which has persisted long beyond their respective workshops or consultations that got us started.
            </p>
            
            <p>In the ongoing addition of new files to the archive, the following routines are observed by the encoding team. First, using the <span class="orgName-OXYGEN">SyncRO Soft Oxygen</span> XML editor, 
                            encoders pull the word&#x2010;processed files of the editor&#x02BC;s original transcript(s) of a work, along with files of his apparatus and other annotation, 
                            into appropriate templates built for the varying document types included in <i>ERM</i>. In a first pass, encoders mark up the editor&#x02BC;s original 
                            transcription and commentary according to the <span class="title-program-TEIP5">TEI P5</span> standard; and the encoder checks the editor&#x02BC;s original transcript 
                            against its manuscript facsimile, querying any possible inaccuracies. Team members are instructed to confirm transcription of every deliberate mark on a manuscript, 
                            in whatever hand. As <span class="persName-DLVM">Vander Meulen</span> and <span class="persName-GTT">Tanselle</span> comment: &#x201C;Obviously a transcription 
                            cannot exactly reproduce the relative precision or carelessness with which handwritten letters are formed, or their relative sizes, or the amount of space 
                            between words and lines; but it can aim to record every ink or pencil marking of textual significance on the manuscript&#x2014;all letters, punctuation, superscripts, 
                            canceled matter, lines linking or excising passages, and so on&#x201D; 
                            (<a href="../bibiliography/bibliography.php#VANDERMEULENTANSELLETRANSCRIPTION" target="_blank" class="inactive">&#x201C;System of Manuscript Transcription&#x201D;</a>, 201). 
                            We consider this aim, and nothing less, as defining the standard for first&#x2010;pass conversion of the editor&#x02BC;s original files, 
                            and for checking or completing transcription against its facsimile at this first stage, because it is impractical and an invitation to oversight to reserve some 
                            portion of transcription for a later stage. One can and should review the accuracy and thoroughness of transcription as often as one likes, but no systematic 
                            procedure for dividing a thorough transcription into stages would be practical, since one would have to redefine the procedure constantly in order to address 
                            the peculiarities of each manuscript.
            </p>
            
            <p>To maintain consistency of markup in this process, the encoding team references a Encoding Guide, compiled by the supervising encoder, 
                            which lists every element, attribute, and value so far employed in the archive, and which is continually updated, as additional <span class="title-program-TEIP5">TEI</span> 
                            elements and attributes or <i>ERM</i> values are discussed and added by the team. The team also constantly references and updates 
                            a project&#x2010;based Regularization Guide, which is a <span class="title-program-MSEXCEL">Microsoft Excel</span> spreadsheet listing every 
                            <span class="title-program-XML">XML</span> file name by category&#x2014;the names, that is, of files in the document&#x2010;type categories of 
                            apparatuses, manuscripts, witnesses, anthologies, drawings, essays, notes, and glosses. The Regularization Guide also lists all standardized editorial titles 
                            for these entities; and it serves as the encoders&#x02BC; crib for hex&#x2010;codes for special characters, <i>ERM</i>&#x02BC;s xml:ids for all proper names, 
                            titles, and bibliography entries used in the archive, the names used to identify hands, and dates and date ranges used to mark historical events. 
                            The team (mainly, in this case, the editor and supervising encoder) continually updates the Regularization Guide as new works, manuscripts, and commentary are added to the archive.
            </p>
            
            <p>To manage workflow, the team uses the shared&#x2010;file system, <span class="title-program-DROPBOX">Dropbox</span>, by <span class="orgName-DROPBOXINC">Dropbox Incorporated</span>. 
                            Encoders work within their assigned <span class="title-program-DROPBOX">Dropbox</span> folders, and for each <span class="title-program-XML">XML</span> file 
                            they add their name and responsibility to the <span class="title-program-TEIP5">TEI P5</span> header. When ready for review by more experienced encoders, 
                            the <span class="title-program-XML">XML</span> file is moved (not copied) from the encoder&#x02BC;s folder and into another folder, 
                            in order to guard against accidental confusion and overwriting of files. The editor examines first&#x2010;pass encoding for accuracy, consulting both his notes 
                            from on&#x2010;site archival research and the facsimile. After the editor has reviewed a file, it passes to the supervising encoder for a final check 
                            of consistency with the <i>ERM</i> Encoding Guide and Regularization Guide and for a review of other matters of well&#x2010;formedness and validation. 
                            Finally, when the files have undergone transformation by <span class="title-program-XSLT">XSLT</span> (written by the supervising encoder) and have been loaded 
                            onto the site, the editor reviews the live Web pages to confirm that the transformations have yielded the desired result and to search for any remaining typographical or encoding errors.
            </p>
            
            <p>Not only is the team steadily adding new works and manuscripts to the archive, but also the editor is constantly researching and developing the commentary 
                            in apparatuses, notes, and glosses in order to increase the usefulness of the archive for researchers. At any given time, hyperlinks to notes are embedded 
                            in the <span class="title-program-XML">XML</span> files that are presently inactive because the source notes are unfinished. 
                            When a source note is completed and added to the archive, any pre&#x2010;existing links to it should become active. All files are subject to revision and reloading 
                            with an appropriately updated version number.
            </p>
            
         </div>
         
         
         <div id="ELEMENT" class="subsection">
            <span class="head-subsection">Element, Attribute, and Value Usage</span>
            
            <p>See the Encoding Guide for lists of all elements and attributes used in <i>ERM</i> along with their assigned values.
            </p>
            
            <p>Because editing in <i>ERM</i> is documentary, we transcribe without correction <span class="persName-JR">Ruskin</span>&#x02BC;s (remarkably rare) 
                            misspellings and grammatical errors. Also, we retain his capitalizations, ampersands, and unhyphenated spaces in such words such as <i>to day</i>, 
                            <i>every day</i>, <i>every one</i>, and so on. If <span class="persName-JR">Ruskin</span> omits letters from words, 
                            he usually does so to serve poetic meter. Since the reader can in most cases compare the edited typescript against the facsimile, 
                            the cause of an apparent anomaly will be evident (e.g., doubled letters arising from dividing a word between lines, or doubled words occurring before and after page breaks); 
                            nonetheless, potentially confusing anomalies and other distinctive manuscript features receive discussion in a textual gloss. 
                            Some of the most anomalous and challenging markup decisions are presented by the earliest juvenilia, in which <span class="persName-JR">Ruskin</span> invented his own 
                            solutions for representing the print culture surrounding him.
            </p>
            
            
            <div id="HAND" class="sub-subsection">
               <span class="head-sub-subsection">Handwriting and Special Characters</span>
               
               <p><span class="persName-JR">Ruskin</span>&#x02BC;s handwriting, like that of any youth, changes and develops steadily over the course of time. 
                                In the years comprised by <i>ERM</i>, one can observe his handwriting evolve from print lettering to cursive, 
                                and from an awkward cursive to a skillful command of a range of lettering styles, including a &#x201C;copperplate&#x201D; hand reserved for 
                                fair&#x2010;copying. We can watch him exchange a graphite pencil for pen and ink, and we can even detect evidence of his using a slate, 
                                although all direct traces of that stage of composition have of course vanished. In his fair copies, we can compare his imitations of print typefaces 
                                against models found in a range of trends broadly characterizing English books of the late eighteenth and eary nineteenth centuries as well as against 
                                typographic innovations specific to the historic moment of the <span class="date-1820-1839">1820s through 1830s</span>.
               </p>
               
               <p>The <span class="title-program-TEIP5">TEI P5</span> element used to establish the rudiments of these evolving skills, media, and cultural conditions 
                                is &#x3008;handShift&#x3009;, which carries attributes of &#x0040;script and &#x0040;medium, 
                                and to which we assign an xml:id based on the calendar year enclosing the manuscript in question&#x2014;the latter a somewhat arbitrary but functional organizing principle. 
                                For a detailed survey of these developments in and influences over <span class="persName-JR">Ruskin</span>&#x02BC;s hand, see 
                                <a href="../notes/hand_note.php" target="_blank">Ruskin&#x02BC;s Handwriting</a>.
               </p>
               
               <p>Where <span class="persName-JR">Ruskin</span> imitates a special character in the style of a typeface, we highlight these using the &#x3008;hi&#x3009; element, 
                                with the &#x0040;rend value keyed to such special usages as &#x201C;doubleletter&#x201D; and &#x201C;doubleletter&#x2010;fill,𠇍; 
                                see <a href="../notes/hand_note.php" target="_blank">Ruskin&#x02BC;s Handwriting</a>.
               </p>
               
            </div>
            
            
            <div id="JUSTIFICATION" class="sub-subsection">
               <span class="head-sub-subsection">Justification, Runover, and Word Division</span>
               
               <p>As discussed in <a href="#MATERIALITY">Expressing the Materiality of the Manuscripts</a>, <span class="persName-JR">Ruskin</span> 
                                invented a mark to justify right and left margins in fair&#x2010;copy prose, which saved him from having to adjust space between words in a line of text. 
                                To fill the gap to the margin, he inserted a horizontal mark of variable length (and sometimes of variable appearance, shaped like an equal sign or a tilde). 
                                Since it would misrepresent the mark&#x02BC;s purpose to encode it according to its appearance in length as a hyphen, en&#x2010;dash, or em&#x2010;dash, 
                                or some other symbol, we use a glyph element, assigning it a &#x0040;type &#x201C;justification&#x201D; 
                                as follows:<br/>
                  <br/>
                  <span class="center">&#x3008;g type&#x003D;&#x201C;justification&#x201D;&#x3009;-&#x3008;/g&#x3009;.</span>
                  <br/>
               </p>
               
               <p><span class="persName-JR">Ruskin</span> often indicated paragraph breaks as minimally as possible. Whether because he meant to use space on a page efficiently, 
                                or because he liked the appearance of a more solid block of text, he often failed to indent a word beginning a new paragraph. The intention of a paragraph break 
                                can be signaled, despite the lack of indentation, by a significant gap between the end of a preceding line and the right margin, with no justification mark used 
                                to take up the slack. Sometimes, however, he fills such spaces with stars, like asterisks, and the following line still seems meant as a new paragraph. 
                                Signals become especially confusing when <span class="persName-JR">Ruskin</span> ends a block of text with a dash, which serves some rhetorical purpose 
                                such as an excited pause, and which would be indistinguishable from a justification mark apart from white space following it. In <i>ERM</i>, 
                                therefore, we insert paragraph breaks in a text when both sense and some definite scribal feature&#x2014;such as significant space at the end of a preceding 
                                line, and/or a rare indentation at the start of the next line&#x2014;seem to call for a new paragraph. If the manuscript evidence is ambiguous, 
                                the editorial decision is marked by a textual gloss.
               </p>
               
               <p>We encode where line breaks fall in prose manuscripts, and we render these as breaks in the <span class="title-program-XSLT">XSLT</span> transformation, 
                                so that prose witnesses match their facsimiles. In poetry, if <span class="persName-JR">Ruskin</span> wrote an extension of a line as a runover, 
                                the line&#x2010;break element &#x3008;lb/&#x3009; is inserted at the start of the runover text within the transcribed line, and the element is assigned a 
                                &#x0040;type &#x201C;runover&#x201D;, thus:<br/>
                  <br/>
                  <span class="center">&#x3008;lb type&#x003D;&#x201C;runover&#x201D;/&#x3009;&#x3008;space quantity&#x003D;&#x201C;00&#x201D; unit&#x003D;&#x201C;chars&#x201D;/&#x3009;.</span>
                  <br/>
                                Here the &#x3008;space&#x3009; element quantifies the number of characters that the runover is indented from the left text margin. 
                                (In <span class="title-program-XSLT">XSLT</span> transformation, the runover also renders as an interlineation.)
               </p>
               
               <p>In some cases of line runover in poetry, <span class="persName-JR">Ruskin</span> also signaled the runover with a mark apparently of his own 
                                invention, which in some places resembles an opening square bracket, and in others a vertical bar. Usually, he placed this mark at the start of the runover line. 
                                We tag this mark as a glyph element, &#x0040;type &#x201C;runover&#x201D;:<br/>
                  <br/>
                  <span class="center">&#x3008;g type&#x003D;&#x201C;runover&#x201D;&#x3009;&#x005B;&#x3008;/g&#x3009;.</span>
                  <br/>
                                As an example of a runover using this mark, see the opening line of 
                                <a href="../witnesses/the_defiance_of_war_msi.php"><span class="title-poem-">&#x201C;The Defiance of War&#x201D;</span></a>, 
                                which is encoded as follows:<br/>
                  <br/>
                  <span class="center">&#x3008;l&#x3009;War war thou art beating thy&#x3008;lb type&#x003D;&#x201C;runover&#x201D;/&#x3009;&#x3008;space quantity&#x003D;&#x201C;28&#x201D; unit&#x003D;&#x201C;chars&#x201D;/&#x3009;&#x3008;g type&#x003D;&#x201C;runover&#x201D;&#x3009;&#x005B;&#x3008;/g&#x3009;drum&#x3008;l/&#x3009;.</span>
                  <br/>
                  
               </p>
               
               <p><span class="persName-JR">Ruskin</span> sometimes used a mark to indicate word division at the end of a line. Like his justification mark, 
                                he varied the word&#x2010;division sign in length from a mere dot to an em&#x2010;dash, and in appearance from a horizontal line to something resembling an equal sign. 
                                All of these marks are interpreted without comment and encoded as a hyphen, since the intention is obvious in both facsimile and transcript. 
                                Sometimes he divided a word without using any mark at all, if his justified right margin did allow the space; in these cases, no mark is encoded and the line break is 
                                represented without comment&#x2014;the intention again being obvious in facsimile and transcript.
               </p>
               
            </div>
            
            
            <div id="COMMA" class="sub-subsection">
               <span class="head-sub-subsection">Commas, Periods, and Other Punctuation</span>
               
               <p>In the earliest juvenilia, those dating from <span class="date-1826-1827">1826&#x2013;27</span>, <span class="persName-JR">Ruskin</span> 
                                had trouble writing commas and periods on the baseline, with the result that these marks float as if they were apostrophes or quotation marks. 
                                In some cases, <span class="persName-JR">Ruskin</span> anchors these with an insertion caret 
                                (see <a href="#DELETIONANDADDITION">Deletion and Addition</a>), 
                                as in <a href="../apparatuses/on_the_rainbow_apparatus.php" target="_blank"><span class="title-poem-">&#x201C;On the Rainbow&#x201D;</span></a>.
                                In transcription, these floating marks are interpreted as conventional punctuation on the baseline.
               </p>
               
               <p>In another idiosyncracy of punctuation, occurring throughout the early manuscripts and perhaps related to what <span class="persName-VAB">Van Akin Burd</span> 
                                has identified in <span class="persName-JR">Ruskin</span>&#x02BC;s mature hand as a <i>half&#x2010;comma</i>, 
                                <span class="persName-JR">Ruskin</span> inscribed what look like periods in the middle of sentences, 
                                where syntax calls for commas; and conversely, he wrote what look like commas as terminal punctuation at the end of sentences. 
                                This reversal, while not consistent, occurs regularly enough that the marks can be treated as glyphs. 
                                Thus, the mark is transcribed as the period or comma that its scribal appearance suggests, but the mark is tagged as a glyph, &#x0040;type &#x201C;terminal&#x2010;comma&#x201D; 
                                for what appears intended as terminal punctuation, 
                                and &#x0040;type &#x201C;pause&#x2010;period&#x201D; for what appears meant to indicate a pause, not a terminus.
               </p>
               
               <p>As found likewise in letters written by all three members of the family, <span class="persName-JR">Ruskin</span> sometimes omits terminal punctuation and instead allows extra space 
                                between the end of one sentence and the start of the next. In these instances, the gap is encoded using the &#x3008;space&#x3009; element. 
                                However, if terminal punctuation is lacking, and no extra space is evident, we do not supply extra space where it does not exist, 
                                as <span class="persName-VAB">Burd</span> does in 
                                <a href="../bibiliography/bibliography.php#RFL" target="_blank" class="inactive"><span class="title-book-RFL"><i>Ruskin Family Letters</i></span></a> 
                                in order to aid the reader&#x02BC;s eye.
               </p>
               
               <p>If random flourishes and other marks in a manuscript appear to serve only decorative or doodling purposes, and no purpose of punctuation can be discerned, 
                                they are ignored in transcription and markup, apart from a textual note atesting to their presence.  
                            </p>
               
               
            </div>
            
            <div id="DELETIONANDADDITION" class="sub-subsection">
               <span class="head-sub-subsection">Deletion and Addition</span>
               
               <p>In the <i>ERM</i>&#x02BC;s Showcase display, deletions and additions are rendered as an approximation of a genetic text, 
                                such as that marked up (using typographical symbols) in 
                                <a href="../bibiliography/bibliography.php#MELVILLEBILLYBUDD" target="_blank" class="inactive">Melville, <span class="title-book-MELVILLEBILLYBUDD"><i>Billy Budd, Sailor</i></span>, ed. Hayford and Sealts</a> (pp. 270&#x2010;425), 
                                albeit limited to the genetic development of a single witness. (A genetic reconstruction of a work&#x02BC;s development using all available draft and fair&#x2010;copy witnesses 
                                is presented discursively in the work&#x02BC;s apparatus.) In <i>ERM</i> Showcase, using the Transcription Toggle 
                                on the toolbar (the curved arrow), the reader can view at stage one (indicated on the toggle arrow by its first third being highlighted) 
                                the earliest textual state of a given witness, with text that <span class="persName-JR">Ruskin</span> later deleted appearing gray. 
                                At stage two (indicated on the toggle arrow by two&#x2010;thirds being highlighted), the reader views the second state of text, 
                                with the added text replacing the deletion. In stage three (indicated by the toggle arrow being fully highlighted), the reader views 
                                deletions and additions simultaneously&#x2014;that is, the final state of the manuscript witness, as it presently appears&#x2014;with additions appearing above, 
                                below, or overlapping with the (grayed&#x2010;out) deletions, as the case may be.
               </p>
               
               <p>In <i>ERM</i>, addition and deletion is not marked up as a single act, using the substitution element (&#x3008;subst&#x3009;), 
                                except in cases of overwriting, which cannot be otherwise interpreted. In many instances of deletion followed immediately by a word 
                                that makes sense of the passage, or with such a word placed above or below the line, no other scenario than an immediate substitution seems probable&#x2014;particularly 
                                if the change is reflected in a subsequent fair copy. But we leave these inferences to the reader, relegating our own interpretations to a textual gloss or the apparatus.
               </p>
               
               <p>In the earliest extant juvenilia, a form of erasure and substitution is to allow a mistaken character to stand (or to be erased imperfectly), 
                                but to follow that character with a heavily inscribed character, as if the latter were in boldface, in order to emphasize the substitution.
                            </p>
               
            </div>
            
            
            <div id="METAMARKS" class="sub-subsection">
               <span class="head-sub-subsection">Metamarks</span>
               
               <p>In <span class="date-1833-1834">1833&#x2013;34</span>, in <a href="../witnesses/lille_poem_msia_g1.php"><span class="title-poem-JRLILLE">&#x201C;Lille&#x201D;</span></a>, 
                                one of the poems for the <a href="../apparatuses/msia_apparatus.php" target="_blank" class="inactive">MS IA, g.1</a>, version of 
                                , <span class="persName-JR">Ruskin</span> 
                                uses marginal symbols to instruct the transposition of two lines from one place in the draft to another place&#x2014;a meaning for the symbols that is confirmed 
                                by his carrying out the transposition in a later fair copy of the poem. We encode <span class="persName-JR">Ruskin</span>&#x02BC;s symbol for the point of insertion, 
                                an asterisk, with the element &#x3008;metamark&#x3009;, with its &#x0040;function designated in this case as &#x201C;insertion&#x201D;; and we encode the lines to be transposed, 
                                which <span class="persName-JR">Ruskin</span> brackets in the margin, as a span of text. This is a striking, early instance of <span class="persName-JR">Ruskin</span> 
                                using symbols that function in the way defined by <span class="title-program-TEIP5">TEI P5</span> for &#x3008;metamark&#x3009; &#x2014;to encode a scribal feature in a manuscript that does not form a part of the 
                                work, but that functions as a direction for how to read the text.
               </p>
               
               <p>All metamarks require an editorial gloss to confirm or speculate about their meaning. In general, it seems, the earlier a possible metamark, the more ambiguous its intention, 
                                and <span class="persName-JR">Ruskin</span> is more likely to use a word rather than a symbol. In <span class="date-1827">1827</span>, 
                                in <a href="../apparatuses/the_storm_apparatus.php" target="_blank"><span class="title-poem-JRTHESTORM">&#x201C;The storm&#x201D;</span></a>, 
                                <span class="persName-JR">Ruskin</span> inscribed a word, <i>bad</i>, which might be tagged as a &#x3008;metamark&#x3009;, but its &#x0040;function and &#x0040;target 
                                could not be specified with certainty. That <span class="persName-JR">Ruskin</span> intended the word as metadiscourse seems evident in its isolation, placed on the same line 
                                as a runover text without its forming a part of that runover in sense or grammar. We can speculate that he intended this negative judgment as a directive to reject the poem's strophe 
                                and replace it with another that follows; however, in this and any such ambiguous instance, we can only encode the word or symbol as a &#x3008;metamark&#x3009; 
                                without confidently supplying a &#x0040;function or &#x0040;target. Rather, we can only discuss a possible function and target in a textual gloss and/or 
                                (as in the case of <span class="title-poem-JRTHESTORM">&#x201C;The storm&#x201D;</span>) propose a meaning that is worked out in the apparatus for the poem. 
                                Any such apparent metadiscursive interjection in a work, the function of which is unclear&#x2014;such as the ejaculations, &#x201C;Play&#x201D; and &#x201C;arretez Oh arretez,&#x201D; 
                                in <a href="../apparatuses/on_skiddaw_and_derwent_water_apparatus" target="_blank" class="inactive"><span class="title-poem-JRONSKIDDAWANDDERWENTWATER">&#x201C;On Skiddaw and Derwent Water&#x201D;</span></a>&#x2014;is 
                                is encoded with &#x3008;metamark&#x3009; and its &#x0040;function assigned the value &#x201C;unclear&#x201D;; speculation about function and target is reserved for a textual gloss and/or apparatus.
               </p>
               
            </div>
            
            
            <div id="DAMAGE" class="sub-subsection">
               <span class="head-sub-subsection">Manuscript Damage and Supplying Illegible or Missing Writing</span>
               
               <p>The most widespread damage to <span class="persName-JR">Ruskin</span>&#x02BC;s manuscripts is scorching, caused by the fire in the house of 
                                <a href="../notes/goodspeed_charles_note.php" target="_blank" class="inactive"><span class="persName-CG">Charles Goodspeed</span> (<span class="date-1867-1950">1867&#x2013;1950</span>)</a> 
                                (see also <a href="../notes/provenance_sothebys_1930_note.php" target="_blank" class="inactive">Sotheby&#x02BC;s Sale of Ruskin Manuscripts and Library, <span class="date-1930">1930</span></a>; and 
                                <a href="../notes/provenance_sothebys_1931_note.php" target="_blank" class="inactive">Sotheby&#x02BC;s Sale of Ruskin Manuscripts and Library, <span class="date-1931">1931</span></a>)
               </p>
               
               <p>An affected area of the manuscript is encoded in transcript using the &#x3008;damage&#x3009; element with an &#x0040;agent 
                                ascribed to fire or some other cause. If text in this area is legible but partially unclear, it is additionally tagged as &#x3008;unclear&#x3009;; 
                                if visible but completely illegible, and able to be inferred from another source, text can be inserted and tagged as &#x3008;supplied&#x3009;; 
                                and if completely illegible, and unable to be inferred confidently from another source, then the element &#x3008;gap&#x3009; is used, 
                                typically with the &#x0040;extent given as &#x201C;several characters&#x201D;.</p>
               
            </div>
            
            
            
         </div>
         
         
         <div id="GLOSSES" class="subsection">
            <span class="head-subsection">Glosses</span>
            
            <p><i>Glosses</i> fall into two categories:
            </p>
            
            <ul>
               
               <li>Encoded as a &#x0040;type of &#x3008;div&#x3009;, a gloss is a kind of work (see 
                                    <a href="#DEFINING">Defining <i>Works</i> and <i>Manuscripts</i></a>), which is typically a commentary 
                                    on another work or a corpus, inscribed directly on the manuscript witness of that work or corpus, and often written by some agent other than the author 
                                    of the original work or corpus. As works, these sorts of glosses are represented by their own apparatus and witness. An example is 
                                    <a href="../apparatuses/mr_gloss_dating_msi_apparatus.php" target="_blank"><span class="persName-MR">Margaret Ruskin</span>&#x02BC;s Gloss on the Dating of <span class="title-manuscript-MSI">MS I</span></a></li>
               
               <li>Encoded as a &#x0040;type of &#x3008;note&#x3009;, a gloss is editorial commentary. It is this kind of gloss with which the present discussion is concerned, 
                                    since these glosses supply necessary clarifications of editorial procedure and extensions of markup. They are further subdivided into two kinds:
                                    
                  <ul>
                     
                     <li>explanatory;</li>
                     
                     <li>textual.</li>
                     
                  </ul>
                  
               </li>
               
            </ul>
            
            <p>The editor's explanatory and textual glosses are localized to annotating transcripts of specific works, as compared with the form of commentary 
                                called <i>notes</i>, which are free-standing and hyperlinked throughout the archive.
                                (see <a href="../notes/plan_of_archive_note.php" target="_blank">Plan of the Archive</a>). As the term implies, 
                                explanatory glosses contextualize specific passages in a work&#x2014;too specific to be annotated with a &#x3008;note&#x3009; that would be 
                                accessible by hyperlink througout the edition. A textual gloss draws attention a specific textual or bibliographical feature of a witness.
            </p>
            
            <p>Explanatory and textual glosses are accessed through clickable callouts embedded directly in the text. The callouts appear in a different color than 
                                that of the surrounding text; and explanatory gloss callouts are sequenced in arabic numerals, while textual gloss callouts are sequenced by lowercase letters.</p>
            
            <p>While it is typically recommended in print editions that such annotations be referenced by line number in order to maintain a clear text, 
                                without the clutter of note callouts (see, e.g., 
                                <a href="../bibiliography/bibliography.php#KLINEPERDUEDOCUMENTARY" target="_blank" class="inactive">Kline and Perdue, <i>Guide to Documentary Editing</i></a>, 117), 
                                two factors render embedded callouts more practical in <i>ERM</i>. First, because the archive preserves the separate integrity of multiple witnesses 
                                of a work, a gloss must be capable of hyperlinking to the same or similar string of characters found in more than one witness, 
                                without regard to differences between witnesses in line numbering. Second, because the archive preserves the evidence of 
                                <span class="persName-JR">Ruskin</span>&#x02BC;s own line numbering, which he applied to some witnesses, annotation callouts need to work independently 
                                that numbering, which is often confused or erroneous.
            </p>
            
         </div>
         
         
      </div>
      
   </div>   
   
   
   
</html>