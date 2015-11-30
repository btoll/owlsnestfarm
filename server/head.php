<?php
$device = include 'sniff.php';
$device = ($device === 'mobile') ? 'mobile' : 'desktop';

echo <<<HEAD
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>The Owl's Nest Farm</title>
    <link rel="stylesheet" type="text/css" href="/owlsnestfarm/build/$device.css" />

    <!--
    <script src="/owlsnestfarm/build/pete.js"></script>
    <script src="/owlsnestfarm/build/main.js"></script>
    <script src="/owlsnestfarm/build/owlsnestfarm.js"></script>
    -->

    <script type="text/javascript" src="../../PeteJS/src/Pete.prototype.js"></script>
    <script type="text/javascript" src="../../PeteJS/src/Pete.js"></script>
    <script type="text/javascript" src="../../PeteJS/src/Pete.Observer.js"></script>
    <script type="text/javascript" src="../../PeteJS/src/Pete.Element.js"></script>
    <script type="text/javascript" src="../../PeteJS/src/Pete.Composite.js"></script>
    <script type="text/javascript" src="../../PeteJS/src/Pete.Rules.js"></script>
    <script type="text/javascript" src="../../PeteJS/src/Pete.Template.js"></script>
    <script type="text/javascript" src="../../PeteJS/src/Pete.util.js"></script>
    <script type="text/javascript" src="../../PeteJS/src/Pete.dom.js"></script>
    <script type="text/javascript" src="../../PeteJS/src/Pete.domQuery.js"></script>
    <script type="text/javascript" src="../../PeteJS/src/Pete.log.js"></script>
    <script type="text/javascript" src="../../PeteJS/src/Pete.DD.js"></script>
    <script type="text/javascript" src="../../PeteJS/src/request/Pete.ajax.js"></script>
    <script type="text/javascript" src="../../PeteJS/src/request/Pete.defer.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
<script>
</script>
</head>

<body>
</body>
</html>

</head>
HEAD;
?>

