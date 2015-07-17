<!DOCTYPE html>
<html>
<head>
<title>The Owl's Nest Farm</title>
<?php
$device = include 'server/sniff.php';
$device = ($device === 'mobile') ? 'mobile' : 'desktop';

echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"./resources/css/$device/home.css\" />";
?>
<!--
<script src="./build/pete.js"></script>
<script src="./build/main.js"></script>
-->
<script src="./build/owlsnestfarm.js"></script>
</head>

<body id="home">
    <header>
        <p>The Owl's Nest Farm</p>
        <p>circa 1780</p>
    </header>

    <nav>
        <ul>
            <li><a href="about/" title="About Us">About Us</a></li>
            <li><a href="history/" title="History">History</a></li>
            <li><a href="animals/" title="Animals">Animals</a></li>
            <li><a href="market/" title="Farmer's Market">Farmer's Market</a></li>
            <li><a href="contact/" title="Contact Us">Contact Us</a></li>
        </ul>
    </nav>

    <figure id="about">
        <img src="./resources/images/garden_boxes.jpg" alt="History">
    </figure>

    <figure id="history">
        <img src="./resources/images/utley_on_bobseat.jpg" alt="Animals">
    </figure>

    <figure id="animals">
        <img src="./resources/images/main_farm.jpg" alt="Market">
    </figure>

    <figure id="market">
        <img src="./resources/images/pete_with_log.jpg" alt="About">
    </figure>
</body>
</html>

