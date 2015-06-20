<?php
$device = include 'sniff.php';
$device = ($device === 'mobile') ? 'mobile' : 'desktop';

echo <<<HEAD
<!DOCTYPE html>
<html>
<head>
    <title>The Owl's Nest Farm</title>
    <!--
    <link rel="stylesheet" type="text/css" href="/owlsnestfarm/resources/css/media/$device.css" />
    -->
    <link rel="stylesheet" type="text/css" href="/owlsnestfarm/resources/css/main.css" />
    <link rel="stylesheet" type="text/css" href="/owlsnestfarm/resources/css/$device/nav.css" />
    <link rel="stylesheet" type="text/css" href="/owlsnestfarm/resources/css/$device/media.css" />
    <link rel="stylesheet" type="text/css" href="/owlsnestfarm/resources/css/$device/main.css" />

    <script src="/owlsnestfarm/build/jslite.js"></script>
    <script src="/owlsnestfarm/js/main.js"></script>
</head>
HEAD;
?>

