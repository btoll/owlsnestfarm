<?php
$device = include 'sniff.php';
$device = ($device === 'mobile') ? 'mobile' : 'desktop';

$HEAD = <<<COMMON
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>The Owl's Nest Farm</title>
    <link rel="stylesheet" type="text/css" href="/build/$device.css" />
    <script src="/build/owlsnestfarm.js"></script>
COMMON;

if ($device === 'mobile') {
    $HEAD .= '<script src="/build/nav.js"></script>';
}

$HEAD .= '</head>';

echo $HEAD;
?>

