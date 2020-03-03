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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</head>

<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js"></script>
    <canvas id="myChart" width="400" height="200"></canvas>
    <script>
        var u = '<?= $u['number'] ?>';
        var v = '<?= $v['number'] ?>';
        var w = '<?= $w['number'] ?>';
        var x = '<?= $x['number'] ?>';
        var y = '<?= $y['number'] ?>';
        var z = '<?= $z['number'] ?>';

        var tabTest1 = [u, v, w, x, y, z];
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: tabTest1,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.3)',
                        'rgba(54, 162, 235, 0.3)',
                        'rgba(255, 206, 86, 0.3)',
                        'rgba(75, 192, 192, 0.3)',
                        'rgba(153, 102, 255, 0.3)',
                        'rgba(255, 159, 64, 0.3)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 3
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
    
</body>

</html>