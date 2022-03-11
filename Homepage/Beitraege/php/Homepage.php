<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php

if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || preg_match('~Trident/7.0(; Touch)?; rv:11.0~', $_SERVER['HTTP_USER_AGENT'])) {
    echo "<h1>Dieser Browser wird nicht unterstützt und wir bald abgeschaltet, deswegen bitten wir sie eines der unterliegenden Browser zu installieren, ist auf jeden falle besser als Internet Explorer</h1>";
    echo "<p><a href='https://www.google.com/chrome/index.html'></a></p>";
    echo "<p><a href='https://www.foxload.com/firefox-download/?ref=bing&msclkid=e0216ddc0f5e1c1558820ff708926608'>Get Mozilla Firefox</a></p>";
    die;
}
?>

<img name="logo" src="">
<nav id="navigation">
    <img src=""tabindex="1">
    <a href="Homepage.php">Beitraege</a>
    <a href="../../Galery/php/Galery.php">Galery</a>
    <form method="post">
        <select name="date">
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
        </select>
        <select name="Category">
            <option value="Glitches">Glitches</option>
            <option value="Bug">Bug</option>
            <option value="Speedrun">Speedrun</option>
        </select>
        <select name="license">
            <option value="all-rights-reserved" selected>All rights reserved</option>
            <option value="cc-by-nc-nd">CC BY-NC-ND</option>
            <option value="cc-by-nd">CC BY-ND</option>
            <option value="cc-by-nc-sa">CC BY-NC-SA</option>
            <option value="cc-by-nc">CC BY-NC</option>
            <option value="cc-by-sa">CC BY-SA</option>
            <option value="cc-by">CC BY</option>
            <option value="cc0">CC0 / Public Domain</option>
        </select>
    </form>
</nav>


<form method="post" ></form>
<input type="">
</body>
</html>


