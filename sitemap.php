<?php
header("Content-type: application/xml");
echo '<' . '?xml version = "1.0" encoding = "UTF-8"?' . '>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    <?php
    define("Root", preg_replace("@\\\\@", '/', dirname(__FILE__)));
    $files = array_map(function ($name) {
        return substr($name, 0, -4);
    }, array_filter(scandir(Root . '/pages'), function ($file) {
        return preg_match('@\.php$@', $file) && !in_array($file, array('home.php', 'coming-soon.php'));
    }));
    ?>
    <url>
        <loc>http://vldb.org/2019/</loc>
        <lastmod><?= date('c', filemtime(Root . '/pages/home.php')); ?></lastmod>
        <priority>1.00</priority>
    </url>
    <?php foreach ($files as $file) { ?>
        <url>
            <loc>http://vldb.org/2019/?<?= $file; ?></loc>
            <lastmod><?= date('c', filemtime(Root . '/pages/' . $file . '.php')); ?></lastmod>
            <priority>0.80</priority>
        </url>
    <? } ?>
</urlset>
