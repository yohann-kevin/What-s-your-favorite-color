<?php  
require_once 'function/bdd.php';
include_once 'function/colors.php';
$bdd = bdd();
$u = red();
$v = blue();
$w = yellow();
$x = green();
$y = purple();
$z = orange();
include_once 'layouts/header.php';
?>


<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js"></script>
    <title>Test graph vertical</title>
    <style>
        /* set the CSS */

        body {
            font: 12px Arial;
        }

        path {
            stroke: steelblue;
            stroke-width: 2;
            fill: none;
        }

        .axis path,
        .axis line {
            fill: none;
            stroke: grey;
            stroke-width: 1;
            shape-rendering: crispEdges;
        }
    </style>
</head> -->

<body>

    <canvas id="myChart" width="400" height="200"></canvas>
    
    <script>
        var u = '<?= $u['number'] ?>';
        var v = '<?= $v['number'] ?>';
        var w = '<?= $w['number'] ?>';
        var x = '<?= $x['number'] ?>';
        var y = '<?= $y['number'] ?>';
        var z = '<?= $z['number'] ?>';
    </script>
    <script type="text/javascript" src="public/script/main.js"></script>
<?php include_once 'layouts/footer.php' ?>