<?php
$device = include 'sniff.php';
$device = ($device === 'mobile') ? 'mobile' : 'desktop';

echo <<<HEAD
<!DOCTYPE html>
<html>
<head>
    <title>The Owl's Nest Farm</title>
    <link rel="stylesheet" type="text/css" href="/owlsnestfarm/build/$device.css" />

    <script src="/owlsnestfarm/build/jslite.js"></script>
    <script src="/owlsnestfarm/js/main.js"></script>
</head>
HEAD;
?>

