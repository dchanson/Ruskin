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
      <title>&#x201C;A Theme&#x201D;</title><?php require_once(ROOT_PATH."layout_includes/site_top.inc.php"); ?>
          <link href="<?php echo r_build_url("style.php?p=site_styles.scss"); ?>" rel="stylesheet" type="text/css">
        </head>
   
   <?php require_once(ROOT_PATH."layout_includes/navigation.inc.php"); ?>
   
   <div class="apparatus" id="">
      
      <h1 class="page-title">&#x201C;A Theme&#x201D;</h1>
      
      
      <div id="TITLE" class="section">
         <span class="head-section">Title</span>
         
         <div class="p"><span class="persName-JR">Ruskin</span> wrote the title <span class="title-essay-JRATHEME">&#x201C;a theme&#x201D;</span> centered and on a line by itself above the text, just as he wrote the title 
                        &#x201C;A sermon&#x201D; 
                        centered and on a line by itself above the brief text that immediately precedes <span class="title-essay-JRATHEME">&#x201C;a theme&#x201D;</span> on the same page of <span class="title-manuscript-MSII">MS II</span>. 
                        In both cases, it appears that <span class="persName-JR">Ruskin</span> positioned the title prior to the text as if he was naming a routine genre or exercise.</div>
         </div>
      
      
      <div id="GENRE" class="section">
         <span class="head-section">Genre</span>
         
         <div class="p">If by <i>theme</i> <span class="persName-JR">Ruskin</span> means a written exercise.</div>
         
         <div class="p"> <span class="persName-JR">Ruskin</span> calls this piece <span class="title-essay-JRATHEME">&#x201C;a theme&#x201D;</span>, rather than a &#x201C;sermon&#x201D;, 
                        possibly because he did not hear the text in church. The discourse reads like notes on an address to a missionary society. 
                        <span class="persName-JR">Ruskin</span>&#x2019;s handwriting is unusually illegible for this piece.</div>
         </div>
      
      
      <div id="MAJORMS" class="section">
         <span class="head-section">Manuscripts</span>
         
         <div class="p"><span class="title-manuscript-MSII">MS II</span> .</div>
         </div>
      
      
      <div id="DATE" class="section">
         <span class="head-section">Date</span>
         
         <div class="p"><span class="date-1829-02-1829-03">February to March 1829</span>.</div>
         
         <div class="p">So dated by its position between <span class="title-sermon-JRSERMONBEAUTIFULALLEGORY">&#x201C;A Sermon&#x201D; &#x005B;&#x201C;beautiful allegory&#x201D;&#x005D;</span> and <span class="title-poem-JRONSKIDDAWANDDERWENTWATER">On Skiddaw and Derwent Water"</span> in <span class="title-manuscript-MSII">MS II</span> .</div>
         </div>
      
      
      <div id="COMPPUB" class="section">
         <span class="head-section">Composition &#x0026; Publication</span>
         
         <div class="p">Previously unpublished.</div>
         </div>
      
      
      <div id="DISCUSSION" class="section">
         <span class="head-section">Discussion</span>
         
         
         <div class="p">While <span class="persName-JR">Ruskin</span>&#x02BC;s fragment lacks clues to the specific occasion that he was transcribing or summarizing, 
                        one can connect the piece generally with the stir of interest in missionary work that arose in the Ruskins&#x02BC; environment of worship 
                        during the <span class="date-1825-1829">second half of the 1820s</span>, and specifically with arguments for <i>Christian liberality</i> in support of foreign missions.</div>
         
         
         <div id="" class="subsection">
            <span class="head-subsection">Christian Liberality</span>
            
            <div class="p">In its scolding of those who spend money on &#x201C;useless&#x201D; entertainments and &#x201C;trinkets&#x201D; instead of supporting missionaries, 
                            the fragment of argument transcribed by <span class="persName-JR">Ruskin</span> corresponds to the sentiments, if not specific language and examples, of an essay 
                            in the <a href="/notes/evangelical_magazine_note" target="_self"><span class="title-periodical-EVANGELICALMAG"><i>Evangelical Magazine</i></span></a>, 
                            <span class="title-essay-ANONLIBERALITYEVANGELICALMAG1829-05">&#x201C;The Question of Liberality Considered in Reference to Missions and Other Christian Efforts&#x201D;</span>. Published in the <span class="date-1829-05">May 1829</span> issue, 
                            its date makes a good fit with a terminus ad quem for <span class="title-essay-JRATHEME">&#x201C;a theme&#x201D;</span> based on the position of <span class="persName-JR">Ruskin</span>&#x02BC;s piece in <span class="title-manuscript-MSII">MS II</span>, 
                            particularly if the magazine essay originated in a sermon or lecture that <span class="persName-JR">Ruskin</span> might have heard a month or two earlier. 
                            Regardless of whether this published essay had any specific connection with the origin of <span class="persName-JR">Ruskin</span>&#x02BC;s transcript, however, 
                            its argument and context may help to illuminate the circumstances surrounding what <span class="persName-JR">Ruskin</span> heard.</div>
            
            
            <div class="p">The subtitle of the <span class="title-periodical-EVANGELICALMAG"><i>Evangelical Magazine</i></span> essay describes its purpose: 
                            &#x201C;An attempt to ascertain what Classes of Professing Christians are most defective in liberality towards the cause of Evangelical Religion, both at Home and Abroad&#x201D;. 
                            The audience is the &#x201C;church of <span class="persName-scriptural-CREATOR">God</span>&#x201D;, and the London Missionary Society (LMS) in particular, which has taken on &#x201C;nothing less 
                            <i>than the conversion of the whole world to <span class="persName-scriptural-CREATOR">God</span></i>&#x201D;. The writer believes that the Christian liberality on which this enormous mission depends is 
                            &#x201C;but imperfectly understood, and but partially felt&#x201D; if the LMS congratulates itself on having raised forty&#x2010;six thousand pounds in the previous year&#x2014;a sum that 
                            may seem munificent compared to collections prior to the cause of foreign missions, but that is paltry compared to the goal that the (British) church has now set for itself. 
                            The moral danger of underestimating both the mission and its price is a &#x201C;prone&#x005B;ness&#x005D; to set up wrong standards of duty, and to make ill&#x2010;established comparisons of conduct, 
                            and thus to flatter ourselves into groundless conceits of our high attainments in moral excellence&#x201D;. Rhetorically, then, the speaker poses both as an &#x201C;expostulating friend&#x201D; 
                            against the &#x201C;unbelief and selfishness&#x201D; of the &#x201C;Classes of Professing Christians&#x201D; who are &#x201C;defective in liberality&#x201D; and as a skeptical agent who is not dazzled into complacency by seeming success (pp. 180&#x2013;81, 184&#x2013;85). 
                            <span class="persName-JR">Ruskin</span>&#x02BC;s speaker targets comparatively punier classes of theater&#x2010;goers and trinket buyers, 
                            and the speaker even falters when invoking the enormity of the charitable goal, but the rhetorical structure of the talk that <span class="persName-JR">Ruskin</span> heard presumably was similar to this essay. 
                            Such arguments formed a context of <span class="persName-JR">Ruskin</span>&#x02BC;s later rhetorical exaggerations in <span class="title-essay-JRNATUREOFGOTHIC">&#x201C;The Nature of Gothic&#x201D;</span> in which he compares ladies who buy glass beads to slave drivers.</div>
            
            
            <div class="p">At the head of the guilty classes in the <span class="title-periodical-EVANGELICALMAG"><i>Evangelical Magazine</i></span> essay, the writer first calls out &#x201C;our more wealthy ministers&#x201D; 
                            for their hypocrisy in hoarding wealth while urging their congregations to philanthropy. The next classification would have struck the Ruskins as closer to home&#x2014;the 
                            the secular &#x201C;rich&#x201D;, specifically &#x201C;the men who have either retired from business with their comfortable competency of one, two, or three thousand a year and upwards; 
                            or who are still in trade with an income of the same amount&#x201D;. Rich men in these circumstances, the writer supposes, annually allow perhaps a total of thirty pounds to 
                            &#x201C;the cause of religion generally, both at home and abroad&#x201D;, which the writer considers the least amount &#x201C;they ought to contribute to the cause of Missions alone&#x201D; (pp. 182&#x2013;83). 
                            By this standard, <span class="persName-JJR">John James Ruskin</span> was generous, effectively tithing a tenth of his income. In <span class="date-1829">1829</span>, to sample just that year, he received &#x00A3;3853 in income from his firm plus a few hundred pounds from other sources, 
                            while he logged &#x00A3;229 in &#x201C;Charity &#x0026; Gifts&#x201D; as well as &#x0026;135 to support three of his nieces and nephews orphaned by the death of his sister and &#x0026;38 to help <span class="persName-MR">Margaret</span>&#x02BC;s relations. 
                            <span class="persName-JJR">John James</span>&#x02BC;s abbreviated notes make it difficult to sort the donations precisely among religious, secular, and family causes, but all three categories 
                            are certainly represented. The various &#x201C;church&#x201D; and &#x201C;Bible&#x201D; donations include &#x0026;50 for &#x201C;orphans&#x201D; paid to the family&#x02BC;s clergyman, <span class="persName-EA">Edward Andrews</span>, 
                            but how much, if any, went to foreign missions is obscure (<a href="/notes/bibliography#RFMS28" target="_self">Account Book</a>, 15r, 13r, 13v).</div>
            
            
            <div class="p">The remaining classes named in the essay as failing to give their share are &#x201C;the Christians who inhabit small towns and villages&#x201D;, 
                            the fault lying in part with the &#x201C;great public institutions of the age&#x201D; habitually looking to the metropolis for support, but also 
                            with village dwellers who &#x201C;have never seriously considered their obligations to the cause of <span class="persName-scriptural-JESUSCHRIST">Christ</span> at large&#x201D; (p. 183). Finally, the writer is stern 
                            with &#x201C;young persons, who, though they live with their parents, possess a separate income at their own disposal&#x201D;, yet substitute their parents&#x02BC; benevolence 
                            for their own (p. 184). <span class="persName-JR">Ruskin</span> relied on his father for charities that <span class="persName-JJR">John James</span> did not necessarily approve, but <span class="persName-JR">John</span> controlled no income of his own until after his father&#x02BC;s death.
                        </div>
            </div>
         
         
         <div id="" class="subsection">
            <span class="head-subsection">The London Missionary Society in Walworth</span>
            
            <div class="p">The Ruskins appear to have been drawn into an interest in missionary work by the rising career of their favorite preacher, 
                            the <a href="/notes/andrews_edward_note" target="_self"><span class="persName-EA">Reverend Dr. Edward Andrews</span></a>. Their excitement peaked around the time of <span class="persName-EA">Andrews</span>&#x02BC;s engagement as <span class="persName-JR">John</span>&#x02BC;s tutor, starting in <span class="date-1829-04-1829-05">April&#x2013;May 1829</span>, 
                            about the same time when <span class="persName-JR">John</span> transcribed his &#x201C;theme&#x201D;, and also when all three Ruskins and cousin <span class="persName-MRC">Mary Richardson</span> were reading together the journals of <span class="persName-RHBC">Reginald Heber, Bishop of Calcutta</span> 
                            (<a href="/notes/bibliography#HEBERINDIA" target="_self"><span class="persName-RHBC">Heber</span>, <span class="title-book-HEBERINDIA"><i>Narrative of a Journey through the Upper Provinces of India from Calcutta to Bombay</i>, <span class="date-1822-1825">1822&#x2013;25</span></span></a> &#x005B;<a href="/notes/bibliography#DEARDENRUSKINLIBRARY" target="_self"><span class="persName-JSD">Dearden</span>, <span class="title-book-DEARDENRUSKINLIBRARY"><i>Library of John Ruskin</i></span></a>, 154 &#x005B;no. 1218&#x005D;). 
                            <span class="persName-MR">Margaret</span> considered <span class="persName-RHBC">Heber</span>&#x02BC;s &#x201C;prose . . . highly poetical&#x201D; and looked forward to &#x201C;hearing it read . . . again&#x201D; by <span class="persName-JJR">John James</span> when he returned home 
                            (<a href="/notes/bibliography#RFL" target="_self"><span class="title-letter-mr_to_jjr_1829-03-04">Margaret to John James Ruskin, <span class="date-1829-03-04">4 March 1829</span></span>, <span class="title-book-RFL"><i>RFL</i></span>, ed. <span class="persName-VAB">Burd</span></a>, 186). A week later, <span class="persName-JR">John</span> wrote in response to <span class="persName-RHBC">Heber</span>&#x02BC;s poems, 
                            which <span class="persName-JJR">John James</span> was sending home: &#x201C;Every poem that I meet with now is by bishop <span class="persName-RHBC">Heber</span> bishop <span class="persName-RHBC">Heber</span> bishop <span class="persName-RHBC">Heber</span> nothing but bishop <span class="persName-RHBC">Heber</span>, 
                            why I scarcely knew his name a fortnight ago, and all the poems that are by him I like&#x2014;especially the one that you sent to <span class="persName-MRC">Mary</span>&#x201D; 
                            (<a href="/notes/bibliography#RFL" target="_self"><span class="title-letter-jr_to_jjr_1829-03-10">John to John James Ruskin, <span class="date-1829-03-10">10 March 1829</span></span>, <span class="title-book-RFL"><i>RFL</i></span>, ed. <span class="persName-VAB">Burd</span></a>, 192). Soon, <span class="persName-EA">Andrews</span> would arrange for the first publication of <span class="persName-JR">Ruskin</span>&#x02BC;s own poems</div>
            
            
            <div class="p"><span class="persName-EA">Andrews</span>&#x02BC;s association with the LMS started at least two years earlier, when, on <span class="date-1827-04-19">19 April 1827</span>, he 
                            helped to organize a meeting at his <span class="placeName-building-BERESFORDCHAPEL">Beresford Street Chapel</span>, <span class="placeName-WALWORTH">Walworth</span>, to form a local auxiliary to the LMS, 
                            &#x201C;lament&#x005B;ing&#x005D; that a Society had not been formed earlier&#x201D; 
                            (<a href="/notes/bibliography#MISSCHRONICLE1827-07_WALWORTH" target="_self"><span class="title-essay-MISSCHRONICLE1827-07_WALWORTH">&#x201C;Missionary Chronicle for <span class="date-1827-07">July, 1827</span>&#x2014;Domestic Missionary Intelligence&#x2014;Walworth&#x201D;</span></a>). 
                            By the next year in <span class="date-1828-05">May 1828</span>, at the thirty&#x2010;fourth annual meeting of the LMS in <span class="placeName-LONDON">London</span>, 
                            <span class="persName-EA">Andrews</span>&#x02BC;s star was rising in the LMS. His engraved portrait in gown and bands, 
                            <a href="<?php echo r_build_url("figures/andrews_edward_evangelicalmag_engraving.php");?>" target="_self"><span class="title-artwork-WILDMANANDREWS"><i>Rev<sup>d</sup>. D<sup>r</sup>. Andrews</i></span></a>, 
                            was featured in the <span class="date-1828-06">June 1828</span> issue of the <a href="/notes/evangelical_magazine_note" target="_self"><span class="title-periodical-EVANGELICALMAG"><i>Evangelical Magazine</i></span></a>, the society&#x02BC;s official periodical, 
                            which regularly headed each monthly issue with a full&#x2010;page portrait engraving of a prominent clergyman. 
                            At the annual meeting in May, he was chosen to deliver the concluding prayer for the opening sermon of the proceedings.</div>
            
            
            <div class="p"><span class="persName-EA">Andrews</span> was networking. The opening sermon of the <span class="date-1828">1828</span> annual meeting was preached at <span class="placeName-building-SURREYCHAPEL">Surrey Chapel</span>, 
                            the massive <span class="placeName-LONDON">London</span> venue built for the famed evangelical preacher, <span class="persName-RHREV">Rowland Hill</span> (<span class="date-1744-1833">1744&#x2013;1833</span>) 
                            (<a href="/notes/bibliography#MISSCHRONICLE1828-06_SURREY-CHAPEL" target="_self">&#x201C;Missionary Chronicle for June, 1828&#x2014;Surrey Chapel&#x201D;</a>, 262). 
                            A month earlier, on <span class="date-1828-04-09">9 April</span>, <span class="persName-RHREV">Hill</span> himself had paid <span class="persName-EA">Andrews</span> the compliment of preaching and chairing a meeting of the 
                            Surrey Mission Society at &#x201C;<span class="persName-EA">Dr. Andrews</span>&#x02BC;s Chapel, <span class="placeName-WALWORTH">Walworth</span>&#x201D;. The size and ornateness of these chapels were indexes of the preachers&#x02BC; fame. 
                            The <span class="placeName-building-BERESFORDCHAPEL">Beresford Street Chapel</span>, <span class="placeName-WALWORTH">Walworth</span> (founded <span class="date-1818">1818</span>), was built for <span class="persName-EA">Andrews</span> to accommodate over a thousand of his admiring followers, 
                            while <span class="placeName-building-SURREYCHAPEL">Surrey Chapel</span> in <span class="placeName-BLACKFRIARS">Blackfriars</span> had been erected to house an audience of over three thousand for <span class="persName-RHREV">Hill</span>&#x02BC;s popular preaching 
                            (<a href="/notes/bibliography#SURREYMISSIONSOCIETYEVANGELICALMAG1828-07" target="_self">&#x201C;Religious Intelligence&#x2014;London&#x2014;Surrey Mission Society&#x201D;</a>; 
                            and see <a href="/notes/andrews_edward_note" target="_self"><span class="persName-EA">Edward Andrews</span> &#x005B;<span class="date-1787-1841">1787&#x2013;1841</span>&#x005D;</a>; and 
                            <a href="/notes/bibliography#HILLDNB" target="_self"><span class="persName-AFMUNDEN">Munden</span>, <span class="title-dictionary_entry-HILLDNB">&#x201C;Hill, Rowland &#x005B;1744&#x2013;1833&#x005D;&#x201D;</span></a>).</div>
            
            
            <div class="p">Like the <span class="date-1829">1829</span> essay in the <span class="title-periodical-EVANGELICALMAG"><i>Evangelical Magazine</i></span>, the sermon delivered at the <span class="placeName-building-SURREYCHAPEL">Surrey Chapel</span> at the opening of the <span class="date-1828">1828</span> LMS meeting harped on the theme of Christian liberality. 
                            Preached by the <span class="persName-RAREV">Reverend Richard Alliott</span>, <span class="title-sermon-ALLIOTTNATUREOBLIGATION">&#x201C;The Nature and Obligation of Christian Liberality&#x201D;</span> was based on <span class="title-scripture-MATTHEW10_8">Matthew 10:8</span>: 
                            &#x201C;Heal the sick, cleanse the lepers, raise the dead, cast out devils: freely ye have received, freely give&#x201D;. 
                            The argument traced the Christian obligation of liberality to the Apostles&#x02BC; endowment with &#x201C;miraculous powers by the use of which they might bave enriched themselves&#x201D; 
                            were it not that such use of their powers &#x201C;was wholly inconsistent the chaaracter of . . . &#x005B;<span class="persName-scriptural-JESUSCHRIST">Christ</span>&#x02BC;s&#x005D; dispensation&#x201D;. Just so, <span class="persName-RAREV">Alliott</span> pressed his hearers, 
                            Christians possess &#x201C;the Gospel in our hands, conveying greater and better blessings;&#x2014;for these we are indebted to the bounty of <span class="persName-scriptural-CREATOR">God</span>, and it is according to his purpose that, 
                            that which we bave freely received, we should also freely communicate&#x201D;. The perorartion appealed to &#x201C;<i>Philanthropists</i>, 
                            as above all other means calculated to ameliorate and improve the condition of the most barbarous and wretched of the human race; and to Englishmen, 
                            as involving in its results the honour and prosperity of our own country,&#x2014;the cause of Missions being considered as, indeed, the cause of our country&#x2014;of the world&#x2014;of 
                            the salvation of men,&#x2014;and of the glory of our great <span class="persName-scriptural-CREATOR">Creator</span>&#x201D; (<a href="/notes/bibliography#MISSCHRONICLE1828-06_SURREY-CHAPEL" target="_self">&#x201C;Missionary Chronicle for June, 1828&#x2014;Surrey Chapel&#x201D;</a>, 261&#x2013;62).</div>
            </div>
         
         
         <div id="" class="subsection">
            <span class="head-subsection">The London Missionary Society in Camberwell</span>
            
            
            <div class="p">Fixated on the poetical <span class="persName-RHBC">Heber</span> and the ambitious <span class="persName-EA">Andrews</span>, the Ruskins would have followed <span class="persName-EA">Andrews</span>&#x02BC;s rise in the LMS, 
                            having attended <span class="placeName-building-BERESFORDCHAPEL">Beresford Street Chapel</span> since <span class="date-1826">1826</span> if not earlier, while they may have given less attention to a humbler, yet more influential local connection with the society. 
                            The Surrey County Auxiliary Missionary Society, which arose from the <span class="date-1827-04">April 1827</span> meeting in <span class="placeName-WALWORTH">Walworth</span>, was next reported as organizing in <span class="placeName-DORKING">Dorking</span>. 
                            The sermon on that occasion was delivered by the <span class="persName-WO">Reverend William Orme</span> (<span class="date-1787-1830">1787&#x2013;1830</span>), who served as foreign secretary of the LMS, 
                            and who since <span class="date-1824">1824</span> had ministered at a Congregational chapel in <span class="placeName-CAMBERWELL">Camberwell</span> (known at that time as the <span class="placeName-building-PDMH">Protestant Dissenting Meeting House</span>, 
                            according to an account of the ordination of his successor, <span class="persName-JBURNETT">John Burnett</span> &#x005B;<span class="date-1789-1862">1789&#x2013;1862</span>&#x005D;). <span class="persName-WO">Orme</span> was a Scot, who started his ministry as pastor 
                            of the Congregational Tabernacle in <span class="placeName-PERTH">Perth</span>, and played a significant role in the organization of Scottish Congregationalism before moving south, 
                            where he soon gained his post in the LMS, but died suddenly in <span class="date-1830">1830</span> following an illness 
                            (<a href="/notes/bibliography#MISSCHRONICLE1828-01_SURREY-AUXILIARY" target="_self">&#x201C;Missionary Chronicle for January, 1828&#x2014;Domestic Missionary Intelligence&#x2014;Surrey Auxiliary&#x201D;</a>; 
                            <a href="/notes/bibliography#WORMEDNB" target="_self"><span class="persName-AGORDON">Gordon</span> and <span class="persName-APB">Pimlott</span>, <span class="title-dictionary_entry-WORMEDNB">&#x201C;Orme, William &#x005B;<span class="date-1787-1830">1787&#x2013;1830</span>&#x005D;&#x201D;</span></a>; 
                            <a href="/notes/bibliography#ORDINATIONEVANGELICALMAG1830-12" target="_self">&#x201C;Religious Intelligence&#x2014;London&#x2014;Ordinations&#x201D;</a>).</div>
            
            
            <div class="p">It seems inevitable that the Ruskins would have been aware of <span class="persName-WO">Orme</span>&#x02BC;s ministry in <span class="placeName-CAMBERWELL">Camberwell</span>. They 
                            owned a copy of his posthumously published <span class="title-book-ORMERICHARDBAXTER"><i>Life and Times of Richard Baxter</i> (<span class="date-1830">1830</span>)</span> (<a href="/notes/bibliography#DEARDENRUSKINLIBRARY" target="_self"><span class="persName-JSD">Dearden</span>, <span class="title-book-DEARDENRUSKINLIBRARY"><i>Library of John Ruskin</i></span></a>, 245 &#x005B;no. 1917&#x005D;),
                            and they could not have missed his engraved portrait in the <span class="date-1830-01">January 1830</span> issue of the <span class="title-periodical-EVANGELICALMAG"><i>Evangelical Magazine</i></span> and his memorial in the <span class="date-1830-07">July 1830</span> issue. 
                            Could <span class="persName-WO">Orme</span>&#x02BC;s chapel have been the site of the meeting in the early months of <span class="date-1829">1829</span> that gave <span class="persName-JR">Ruskin</span> the text of his <span class="title-essay-JRATHEME">&#x201C;theme&#x201D;</span>? 
                            The disdain for the theater reflected in <span class="persName-JR">Ruskin</span>&#x02BC;s theme seems an unlikely viewpoint for <span class="persName-EA">Andrews</span>, who wrote plays himself; and the memorial of <span class="persName-WO">Orme</span> 
                            suggests other contrasts with the <span class="placeName-WALWORTH">Walworth</span> preacher. Regarding <span class="persName-WO">Orme</span>&#x02BC;s scholarship, it was admitted, &#x201C;&#x005B;i&#x005D;n what was strictly philological 
                            he might be excelled by those whose superior classical attainments or greater advantages might qualify them for such pursuits&#x201D;&#x2014;those 
                            such as the <span class="persName-EA">Reverend Dr. Andrews</span> whose classical learning was widely respected, qualifying him to tutor the precocious <span class="persName-JR">Ruskin</span>&#x2014;&#x201C;but by none was &#x005B;<span class="persName-WO">Orme</span>&#x005D; excelled 
                            in an extensive and accurate acquaintance with the word of <span class="persName-scriptural-CREATOR">God</span>&#x201D;. In his preaching, moreover, <span class="persName-WO">Orme</span> &#x201C;sought not for figures but facts; 
                            and was more conversant with arguments than ornaments&#x201D;; and unlike the florid and poetically fanciful <span class="persName-EA">Andrews</span>, 
                            he &#x201C;aimed to convince the judgment and impress the heart . . . with no attempt at ingenious conceits and far&#x2010;fetched resemblances&#x201D; 
                            (<a href="/notes/bibliography#WORMEMEMOIR" target="_self">&#x201C;Memoir of the Late Rev. William Orme&#x201D;</a>, 292, 293).</div>
            
            
            <div class="p">(Note: The Surrey County Auxiliary Missionary Society was not the same organization as the Surrey Mission Society, at which, as mentioned above, 
                            <span class="persName-RHBC">Rowland Hill</span> officiated in a meeting at <span class="persName-EA">Andrews</span>&#x02BC;s chapel. The latter had been established over thiry years earlier, 
                            &#x201C;composed of Christians of various denominations&#x201D; for the domestic, not foreign, &#x201C;purpose of preaching the Gospel, establishing Schools&#x201D;, 
                            and &#x201C;circulating the Scriptures and Religious Tracts in the villages of <span class="placeName-SURREY">Surrey</span>&#x201D;. <span class="persName-RHBC">Hill</span>&#x02BC;s sermon to the Society on the text of <span class="title-scripture-1TIMOTHY4_12">1 Timothy 4:12</span>, 
                            &#x201C;Let no man despise thy youth; but be thou an example of the believers, in word, in conversation, in charity, in spirit, in faith, in purity&#x201D;, 
                            was probably directed at the society&#x02BC;s local missionaries who had &#x201C;been the means of introducing the Gospel into about 100 villages&#x201D; in the county 
                            (<a href="/notes/bibliography#SURREYMISSIONSOCIETYEVANGELICALMAG1828" target="_self">&#x201C;Religious Intelligence&#x2014;London&#x2014;Surrey Mission Society&#x201D;</a>; 
                            <a href="/notes/bibliography#MISSCHRONICLE1828-01_SURREY-AUXILIARY" target="_self">&#x201C;Missionary Chronicle for January, 1828&#x2014;Domestic Missionary Intelligence&#x2014;Surrey Auxiliary&#x201D;</a>)</div>
            </div>
         </div>
      </div>
   
   
   </html>