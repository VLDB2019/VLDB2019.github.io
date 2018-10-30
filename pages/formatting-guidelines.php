<section class="formatting-guidelines">
    <h1>VLDB 2019: Formatting Guidelines</h1>

    <h3>Generation Information</h3>
    <p>All papers submitted to PVLDB and the VLDB Conference, irrespective of track, must adhere strictly to the PVLDB format detailed here. Any deviation will be liable to summary rejection of the paper. The paper should:</p>

    <ul>
        <li>
            strictly follow the PVLDB style template w.r.t. line spacing, font size or style of captions. For
            convenience, a sample is provided alongside the LaTeX and MS Word templates:<br>
            <strong>Note: those are templates for submissions only, templates for camera-ready can be found in the Camera
                Ready instruction below.</strong>
            <ul>
                <li><a href="./files/vldb.cls" rel="nofollow">vldb.cls</a>: LaTeX document class</li>
                <li><a href="./files/vldb_style_sample.zip" rel="nofollow">vldb_style_sample.zip</a>: LaTeX example</li>
                <li><a href="./files/vldb_sample.doc" rel="nofollow">vldb_sample.doc</a>: Microsoft Word Template</li>
            </ul>
        </li>
        <li>show no headers or footers;</li>
        <li>be formatted using US letter paper format;</li>
        <li>have no line overflows, no <a href="https://en.wikipedia.org/wiki/Widows_and_orphans">widows or orphans</a>, etc.;</li>
        <li>have balanced columns on the last page (LaTeX tip: \usepackage{balance});</li>
        <li>have all figures and tables readable (without having to turn the PDF reader's magnification to 400%);</li>
        <li>avoid abbreviations where not needed, e.g., when referencing the name of a journal or when referring to a
            Section, a Figure etc.;
        </li>
        <li>have no numbering issues, e.g., all floats (Figures, Tables etc) are numbered consecutively and also the
            references in the text use the correct numbers;
        </li>
        <li>use the abbrv bibliography style (LaTeX) including all references being alphabetically sorted. References
            should include author, title, proceedings, <strong>pages</strong>, and year; with proceedings or journal name in italics.
        </li>
        <li>embed all fonts, including Type 1 postscript fonts, within your PDF.</li>
        <li>You can check this with the 'Properties' menu of Acrobat Reader (should show 'embeded' for each font). TeX
            users can check with the command updmap --edit that pdftexDownloadBase14 is set to true for your pdftex
            installation (better also set dvipsDownloadBase35 true). This is a request by the ACM digital library to
            improve searchability of our papers; ACM maintains a <a href="http://www.acm.org/sigs/publications/sigfaq#a14">FAQ about embedding fonts in TeX</a>.
        </li>
        <li>contain the same author information as in <a href="https://cmt3.research.microsoft.com/VLDB2019/">CMT</a>. e.g., the order of the authors must be the same in the
            paper and <a href="https://cmt3.research.microsoft.com/VLDB2019/">CMT</a>. Middle names of the authors, if any, must be the same as it is in <a href="https://cmt3.research.microsoft.com/VLDB2019/">CMT</a>.
        </li>
        <li>contain no citations in the Abstract.</li>
        <li>contain the same Abstract as the one submitted to <a href="https://cmt3.research.microsoft.com/VLDB2019/">CMT</a>.</li>
    </ul>

    <h3>Important Notice</h3>
    <ul>
        <li>For research track papers that belong to a special category (Vision, Innovative Systems and Applications,
            Experiments and Analyses), authors <strong>MUST</strong> append the category tag as a <strong>SUFFIX</strong> to the title of the paper. For
            example, <strong>"Data Management in the Year 3000 [Vision]"</strong>. This must be done both in the paper file and in the
            <a href="https://cmt3.research.microsoft.com/VLDB2019/">CMT</a> submission title.
        </li>
        <li>VLDB is a <strong>single-blind</strong> conference. Therefore, authors MUST include their names and affiliations on the
            manuscript cover page.
        </li>
    </ul>

    <h3>Copyright and Camera Ready Information</h3>
    <p>All papers accepted for the VLDB 2019 Conference will be published in the Proceedings of the VLDB Endowment (PVLDB) Volume 12. It is the authors' responsibility to ensure that their submissions adhere strictly to the VLDB format detailed above. Please follow the process below to submit the final camera-ready copy of your accepted paper. You must complete this process by the 5th of the month following the acceptance notification date.</p>
    <ol>
        <li>Prepare the final version of your paper using the current camera-ready style files (available for LaTex and Word formats). You must download and use the latest style files since each month the issue number changes.</li>
        <li>Submit the final version of your paper as PDF using the VLDB 2019 conference management tool that is accessible at https://cmt3.research.microsoft.com/VLDB2019/.</li>
        <li>In <a href="https://cmt3.research.microsoft.com/VLDB2019/">CMT</a>, please check carefully the paper's meta-data such as title, abstract, authors' names, affiliations, and their order, and correct those if necessary; note that this information, once processed, will be final and used for producing the conference booklet.</li>
        <li>Rename your file to pid-contact-author.lastname.pdf and upload it to <a href="https://cmt3.research.microsoft.com/VLDB2019/">CMT</a>; for instance, if your submission was given the id 42 and your name is John Smith, you should name your file p42-smith.pdf.</li>
        <li>Finally, download the PVLDB Copyright License Form (available in .pdf format) and follow the instructions in the file to send the form to the Proceedings Chairs.</li>
    </ol>

    <h3>Publication Process</h3>
    <p>Accepted VLDB papers are continuously published in monthly issues. You can expect a couple of months (from the time you complete the camera-ready submission process) for your paper to appear in the Proceedings. PVLDB is an archival journal with monthly issues that is published online on vldb.org, in the ACM Digital Library, on DBLP and, since 2011, also in the Computing Research Repository (CoRR) on arxiv.org.</p>
</section>
<?php
define('PageTitle', "Formatting Guidelines");
define('PageDescription', "All papers submitted to PVLDB and the VLDB 2019 Conference, irrespective of track, must adhere strictly to the PVLDB format detailed here.");
?>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "WebPage",
  "name": "Formatting Guidelines",
  "url": "http://vldb.org/2019/?formatting-guidelines",
  "description": "All papers submitted to PVLDB and the VLDB 2019 Conference, irrespective of track, must adhere strictly to the PVLDB format detailed here.",
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [{
      "@type": "ListItem",
      "position": 1,
      "item": {
        "@id": "http://vldb.org/",
        "name": "VLDB"
      }
    },{
      "@type": "ListItem",
      "position": 2,
      "item": {
        "@id": "http://vldb.org/conference.html",
        "name": "Conferences"
      }
    },{
      "@type": "ListItem",
      "position": 3,
      "item": {
        "@id": "http://vldb.org/2019/",
        "name": "2019"
      }
    },{
      "@type": "ListItem",
      "position": 4,
      "item": {
        "@id": "http://vldb.org/2019/?dates-and-guidelines",
        "name": "Dates & Guidelines"
      }
    },{
      "@type": "ListItem",
      "position": 5,
      "item": {
        "@id": "http://vldb.org/2019/?formatting-guidelines",
        "name": "Formatting Guidelines"
      }
    }]
  }
}
</script>
