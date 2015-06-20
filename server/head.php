<?php
$device = include 'sniff.php';
#$device = ($device === 'mobile') ? 'phone' : 'laptop';
$device = ($device === 'mobile') ? 'mobile' : 'desktop';

echo <<<HEAD
<!DOCTYPE html>
<html>
<head>
    <title>The Owl's Nest Farm</title>
    <!--
    <link rel="stylesheet" type="text/css" href="/owlsnestfarm/resources/css/media/$device.css" />
    -->
    <link rel="stylesheet" type="text/css" href="/owlsnestfarm/resources/css/nav-$device.css" />
    <link rel="stylesheet" type="text/css" href="/owlsnestfarm/resources/css/main.css" />

    <script src="/owlsnestfarm/build/jslite.js"></script>
    <script src="/owlsnestfarm/js/main.js"></script>
</head>
HEAD;
?>

