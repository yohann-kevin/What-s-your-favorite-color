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

<body>
    <section id="chart">
        <canvas id="myChart" ></canvas>
    
        <script>
            //I transformed my PHP variables into JavaScript variables
            var u = '<?= $u['number'] ?>';
            var v = '<?= $v['number'] ?>';
            var w = '<?= $w['number'] ?>';
            var x = '<?= $x['number'] ?>';
            var y = '<?= $y['number'] ?>';
            var z = '<?= $z['number'] ?>';
        </script>
        <script type="text/javascript" src="public/script/main.js"></script>
    </section>
   
<?php include_once 'layouts/footer.php' ?>