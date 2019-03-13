<?php
error_reporting(0);
define("Root", preg_replace("@\\\\@", '/', dirname(__FILE__)));

list($q, $s) = explode("=", array_shift(preg_split("/(?<!\|)(&|;)/i", $_SERVER['QUERY_STRING'])), 2);
$q = preg_replace(array("/<.*script>/i", "/%3C.*ScRiPt%3E/i", "/<\?/", "/\?>/", "/<%/", "/%>/"), array('', '', '', '', '', ''), rawurldecode($q));
$s = preg_replace(array("/<.*script>/i", "/%3C.*ScRiPt%3E/i", "/<\?/", "/\?>/", "/<%/", "/%>/"), array('', '', '', '', '', ''), $s);
$q = trim($q);
if (empty($q)) {
    $q = 'home';
}
$page = Root . '/pages/' . $q . '.php';

ob_start();
if (file_exists($page)) {
    include(Root . '/pages/' . $q . '.php');
    $lastModified = gmdate('D, d M Y H:i:s ', filemtime(Root . '/pages/' . $q . '.php')) . 'GMT';
    if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) && $_SERVER['HTTP_IF_MODIFIED_SINCE'] == $lastModified) {
        header('HTTP/1.1 304 Not Modified');
        exit();
    }
    header("Last-Modified: " . $lastModified);
} else {
    include(Root . '/pages/coming-soon.php');
}
$content = ob_get_clean();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115776710-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-115776710-1');
    </script>
    <!-- // Google Analytics -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="http://vldb.org/2019/<?= $q == 'home' ? '' : "?{$q}"; ?>">
    <style>
        body{visibility:hidden}
    </style>
    <link rel="icon" type="image/png" href="./img/favicon.png">
    <title>VLDB 2019 - <?= defined('PageTitle') && PageTitle ? PageTitle : "45th International Conference on Very Large Data Bases"; ?></title>
    <?php if (defined('PageDescription') && PageDescription) { ?>
        <meta name="description" content="<?= PageDescription; ?>" />
    <? } else { ?>
        <meta name="description" content="The VLDB 2019 conference, will take place in Los Angeles, California, 26-30 August 2019, and will feature research talks, tutorials, demonstrations, and workshops. It will cover issues in data management, database and information systems research. VLDB is a premier annual international forum for data management and database researchers, vendors, practitioners, application developers, and users." />
    <?php } ?>
</head>
<body>

<header>
    <div class="small-menu"><a class="hamburger"></a></div>
    <div class="small-header"><figure class="logo"><img src="./img/new-logo-2.png" alt="VLDB 2019 LA CA USA"></figure></div>
    <nav itemscope itemtype="http://schema.org/SiteNavigationElement">
        <figure class="logo"><img src="./img/new-logo.png" alt="VLDB 2019 LA CA USA"><img src="./img/new-logo-2.png" alt="VLDB 2019 LA CA USA"></figure>
        <div>
            General Information
            <div class="menu">
                <a href="./" itemprop="url"><span itemprop="name">Conference overview</span></a>
                <a href="./?officers" itemprop="url"><span itemprop="name">Conference officers</span></a>
                <a href="./?review-board" itemprop="url"><span itemprop="name">PVLDB review board</span></a>
                <a href="./?contacts" itemprop="url"><span itemprop="name">Contacts</span></a>
            </div>
        </div>
        <div>
            Call for Contributions
            <div class="menu">
                <a href="./?call-for-research-track" itemprop="url"><span itemprop="name">Research track</span></a>
                <a href="./?call-for-industrial-track" itemprop="url"><span itemprop="name">Industrial track</span></a>
                <a href="./?call-for-phd-workshop" itemprop="url"><span itemprop="name">PhD workshop</span></a>
                <hr/>
                <a href="./?call-for-demonstrations" itemprop="url"><span itemprop="name">Demonstrations</span></a>
                <a href="./?call-for-tutorials" itemprop="url"><span itemprop="name">Tutorials</span></a>
                <!--a href="./?panels" itemprop="url"><span itemprop="name">Panels</span></a-->
                <a href="./?call-for-workshops" itemprop="url"><span itemprop="name">Workshops</span></a>
            </div>
        </div>
        <div>
            Dates &amp; Guidelines
            <div class="menu">
                <a href="./?important-dates" itemprop="url"><span itemprop="name">Important dates</span></a>
                <hr/>
                <a href="./?formatting-guidelines" itemprop="url"><span itemprop="name">Formatting guidelines</span></a>
                <a href="./?submission-guidelines" itemprop="url"><span itemprop="name">Submission guidelines</span></a>
            </div>
        </div>
        <div class="no-sub"><a href="./?sponsorship" itemprop="url"><span itemprop="name">Sponsorship</span></a></div>
        <div>
            Participant Information
            <div class="menu">
                <a href="./?registration" itemprop="url"><span itemprop="name">Registration</span></a>
                <a href="./?info-conference-venue" itemprop="url"><span itemprop="name">Conference venue</span></a>
                <a href="./?info-lodging" itemprop="url"><span itemprop="name">Lodging</span></a>
                <a href="./?info-travel-fellowship" itemprop="url"><span itemprop="name">Travel fellowship</span></a>
                <a href="./?info-visa" itemprop="url"><span itemprop="name">Visa information</span></a>
                <a href="./?info-public-transport" itemprop="url"><span itemprop="name">Public transport</span></a>
                <a href="./?info-local-attractions" itemprop="url"><span itemprop="name">Local attractions</span></a>
                <a href="./?info-public-safety" itemprop="url"><span itemprop="name">Public safety</span></a>
            </div>
        </div>
    </nav>
    <section class="carousel<?= $q == 'home' ? '' : ' small'; ?>" data-images='[{"i":"https://vldb2019.github.io/img/1.png","t":"<a href=\"https://www.flickr.com/photos/richo-fan/12582164774\">Photo</a> by Richo.Fan / <a href=\"https://creativecommons.org/licenses/by/2.0/\" class=\"cc-lic\">CC BY 2.0</a> / Modified"},{"i":"https://vldb2019.github.io/img/2.png","t":"<a href=\"https://commons.wikimedia.org/wiki/File:Hollywood_Sign.jpg\">Photo</a> by Thomas Wolf, <a href=\"http://www.foto-tw.de\">www.foto-tw.de</a> / <a href=\"https://creativecommons.org/licenses/by-sa/3.0/deed.en\" class=\"cc-lic\">CC BY-SA 3.0</a> / Modified"},{"i":"https://vldb2019.github.io/img/3.png","t":"<a href=\"https://www.flickr.com/photos/giuseppemilo/25822037213\">Photo</a> by Giuseppe Milo / <a href=\"https://creativecommons.org/licenses/by/2.0/\" class=\"cc-lic\">CC BY 2.0</a> / Cropped"},{"i":"https://vldb2019.github.io/img/4.png","t":"<a href=\"https://www.flickr.com/photos/demxx/9481976931\">Photo</a> by demxx / <a href=\"https://creativecommons.org/licenses/by/2.0/\" class=\"cc-lic\">CC BY 2.0</a> / Cropped"},{"i":"https://vldb2019.github.io/img/5.png","t":"<a href=\"http://mainelighthousesandbeyond.blogspot.com/2012/04/los-angles-harbor-angeles-gate.html\">Photo</a> by John Shaw / Permission obtained / Cropped"},{"i":"https://vldb2019.github.io/img/6.png","t":"<a href=\"https://www.flickr.com/photos/158652122@N02/26632628017\">Photo</a> by Mike McBey / <a href=\"https://creativecommons.org/licenses/by/2.0/\" class=\"cc-lic\">CC BY 2.0</a> / Modified"},{"i":"https://vldb2019.github.io/img/7.png","t":"<a href=\"https://commons.wikimedia.org/wiki/File:SleepingBeautyCastle.JPG\">Photo</a> by Cd637 / <a href=\"https://creativecommons.org/licenses/by-sa/3.0/deed.en\" class=\"cc-lic\">CC BY-SA 3.0</a> / Modified"}]'>
        <span>45<sup>th</sup> International Conference on Very Large Data Bases</span>
        <span>Los Angeles, California - August 26-30, 2019</span>
    </section>
</header>

<main class="body">
    <?= $content; ?>
    <div class="spinner"></div>
</main>

<footer>
    <div>45<sup>th</sup> International Conference on Very Large Data Bases<br />Los Angeles, California - August 26-30, 2019</div>
    <a class="github no-ext-icon" href="https://github.com/VLDB2019/VLDB2019.github.io/pulls" title="Collaborate on GitHub">
        <svg height="32" version="1.1" viewBox="0 0 16 16" width="32"><path fill="#fff" fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path></svg>
    </a>
</footer>

<?php if ($_COOKIE['env'] == 'dev') { ?>
    <link rel="stylesheet" href="./font/font.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/carousel.css">
    <link rel="stylesheet" href="./css/sponsors.css">
    <script src="./js/polyfills.js"></script>
    <script src="./js/carousel.js"></script>
    <script src="./js/menu.js"></script>
    <script src="./js/router.js"></script>
<?php } else { ?>
    <link rel="stylesheet" href="./css/prod.min.css">
    <script async src="./js/prod.min.js"></script>
<?php } ?>

<script async src="https://platform.twitter.com/widgets.js"></script>
<script>
    (function() {
        var last = 0,
            docBody = document.body,
            header = document.querySelector('body>header'),
            nav = header && header.querySelector('nav'),
            requestAnimationFrame = window.requestAnimationFrame || function(callback, element) {
                var now = Date.now(),
                    next = Math.max(0, 16 - (now - last)),
                    id = window.setTimeout(function() {
                        callback(now + next);
                    }, next);
                last = now + next;
                return id;
            },
            cancelAnimationFrame = window.cancelAnimationFrame || function(id) {
                clearTimeout(id);
            },
            update = function () {
                if (!nav) return;

                var isStatic = docBody.classList.contains('static');
                if (header.getBoundingClientRect().bottom > 70) {
                    if (isStatic) docBody.classList.remove('static');
                } else if (!isStatic) docBody.classList.add('static');
            },
            lid;

        window.addEventListener('scroll', function(e) {
            if (lid) cancelAnimationFrame(lid);
            lid = requestAnimationFrame(update);
        });

        update();
    }());
</script>
</body>
</html>