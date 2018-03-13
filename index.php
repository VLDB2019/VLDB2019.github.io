<?php
define("Root", preg_replace("@\\\\@", '/', dirname(__FILE__)));

list($q,$s) = explode("=", array_shift(preg_split("/(?<!\|)(&|;)/i", $_SERVER['QUERY_STRING'])),2);
$q = preg_replace(array("/<.*script>/i", "/%3C.*ScRiPt%3E/i", "/<\?/", "/\?>/", "/<%/", "/%>/"), array('', '', '', '', '', ''), rawurldecode($q));
$s = preg_replace(array("/<.*script>/i", "/%3C.*ScRiPt%3E/i", "/<\?/", "/\?>/", "/<%/", "/%>/"), array('', '', '', '', '', ''), $s);
if (empty($q)) {
    $q = 'home';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./main.css">
    <link rel="stylesheet" href="./font/font.css">
    <link rel="icon" type="image/png" href="./img/favicon.png">
    <title>VLDB 2019 - 45th International Conference on Very Large Data Bases</title>
    <script src="./js/router.js"></script>
</head>
<body>

<header>
    <div class="small-menu"><a class="hamburger"></a></div>
    <div class="small-header"><figure class="logo"><img src="./img/logo.svg"></figure></div>
    <nav>
        <figure class="logo"><img src="./img/logo.svg"></figure>
        <div>
            General Information
            <div class="menu">
                <a href="./index.php">Conference overview</a>
                <a href="./?officers">Conference officers</a>
                <a href="./?review-board">PVLDB review board</a>
                <a href="./?contacts">Contacts</a>
            </div>
        </div>
        <div>
            Call for Contributions
            <div class="menu">
                <a href="./?call-for-research-track">Research track</a>
                <a href="./?call-for-industrial-track">Industrial track</a>
                <a href="./?call-for-phd-workshop">PhD workshop</a>
                <hr />
                <a href="./?demonstrations">Demonstrations</a>
                <a href="./?tutorials">Tutorials</a>
                <a href="./?panels">Panels</a>
                <a href="./?workshops">Workshops</a>
            </div>
        </div>
        <div>
            Dates &amp; Guidelines
            <div class="menu">
                <a href="./?important-dates">Important dates</a>
                <hr />
                <a href="./?formatting-guidelines">Formatting guidelines</a>
                <a href="./?submission-guidelines">Submission guidelines</a>
            </div>
        </div>
        <div class="no-sub"><a href="./?sponsorship">Sponsorship</a></div>
        <div>
            Participant Information
            <div class="menu">
                <a href="./?registration">Registration</a>
                <a href="./?info-conference-venue">Conference venue</a>
                <a href="./?info-lodging">Lodging</a>
                <a href="./?info-travel-fellowship">Travel fellowship</a>
                <a href="./?info-visa">Visa information</a>
                <a href="./?info-public-transport">Public transport</a>
                <a href="./?info-local-attractions">Local attractions</a>
                <a href="./?info-public-safety">Public safety</a>
            </div>
        </div>
    </nav>
    <section class="carousel<?= $q == 'home' ? '' : ' small'; ?>"
             data-images="./img/1.png|./img/2.png|./img/3.png|./img/4.png|./img/5.png|./img/6.png|./img/7.png">
        <span>45<sup>th</sup> International Conference on Very Large Data Bases</span>
        <span>Los Angeles, California - August 26-30, 2019</span>
    </section>
</header>

<main class="body">
    <?php
    $page = Root.'/pages/'.$q.'.php';
    if (file_exists($page)) {
        include(Root . '/pages/' . $q . '.php');
    } else {
        include(Root . '/pages/coming-soon.php');
    }
    ?>
    <div class="spinner"></div>
</main>

<footer>
    <div>45<sup>th</sup> International Conference on Very Large Data Bases<br />Los Angeles, California - August 26-30, 2019</div>
    <a class="github" href="https://github.com/VLDB2019/VLDB2019.github.io/pulls" title="Collaborate on GitHub">
        <svg height="32" version="1.1" viewBox="0 0 16 16" width="32"><path fill="#fff" fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path></svg>
    </a>
</footer>


<script src="./js/carousel.js"></script>
<script src="./js/menu.js"></script>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Event",
  "name": "VLDB2019: 45th International Conference on Very Large Data Bases",
  "sameAs": "http://vldb.org/2019",
  "startDate": "2019-08-26T10:00-08:00",
  "location": {
    "@type": "Place",
    "name": "The Westin Bonaventure Hotel",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "404 S Figueroa St.",
      "addressLocality": "Los Angeles",
      "postalCode": "90071",
      "addressRegion": "CA",
      "addressCountry": "US"
    }
  },
  "image": [
    "http://vldb.org/2019/img/logo.png"
   ],
  "description": "VLDB is a premier annual international forum for data management and database researchers, vendors, practitioners, application developers, and users. The VLDB 2019 conference will feature research talks, tutorials, demonstrations, and workshops. It will cover issues in data management, database and information systems research, since they are the technological cornerstones of the emerging applications of the 21st century.",
  "endDate": "2019-08-30T18:00-08:00"
}
</script>

</body>
</html>