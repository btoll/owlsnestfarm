<?php
$device = include 'sniff.php';
$device = ($device === 'mobile') ? 'mobile' : 'desktop';

echo <<<HEAD
<!DOCTYPE html>
<html>
<head>
    <title>The Owl's Nest Farm</title>
    <link rel="stylesheet" type="text/css" href="/owlsnestfarm/build/$device.css" />

    <!--
    <script src="/owlsnestfarm/build/pete.js"></script>
    <script src="/owlsnestfarm/build/main.js"></script>
    -->
    <script src="/owlsnestfarm/build/owlsnestfarm.js"></script>
</head>
HEAD;
?>

