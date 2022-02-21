<?php session_start();
if (empty($_SESSION['id'])) :
    header('Location:login.php');
endif; ?>
<?php
// Create database connection using config file
include_once('koneksi.php');

// Fetch all users data from database
$result = mysqli_query($con, "SELECT * FROM sensor ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>home</title>
    <link rel="stylesheet" href="css1.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="chart/chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body bgcolor="red">
    

    <div style="margin-left:auto;margin-right:auto" class="top-wrapper" style="background-image: none;">
        <div class="container">
            <div class="lesson-wrapper" style=" padding-bottom: 1280px;">
                <div class="container">
                    <div class="heading">
                        <h3 style="margin-top: 40px;  text-decoration: none;">Grafik Monitoring</h3>
                        <div class="row" style="margin-top: 50px; margin-left: 250px;">
                            <div class="card">
                                <form method="get" action="">
                                    <label>Tanggal</label>
                                    <input type="date" name="tgl">
                                    <button name="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                            <div class="col-md-10" style="height: 100px; width: 600px;margin-top: 50px;">
                                <h2>Grafik Gas Amoniak dan Hidrogen Sulfida</h2>
                                <canvas id="datagrafik"></canvas>
                            </div>
                            
                            <?php
                            if(empty($_GET['submit']) && empty($_GET['tgl'])){
                                    $jam = "";
                            $jumlahnh3 = null;
                            $jumlahh2s = null;
                            $result1 = mysqli_query($con, "SELECT hour(tgl) as date, nh3, h2s  from sensor where day(tgl) = day(now()) GROUP BY hour(tgl) ORDER BY Date ASC Limit 25");
                            while ($row = mysqli_fetch_array($result1)) {
                                $jams = $row['date'];
                                $jam .= "'$jams'" . ",";
                                $nh3 = $row['nh3'];
                                $jumlahnh3 .= "'$nh3'" . ",";
                                $h2s = $row['h2s'];
                                $jumlahh2s .= "'$h2s'" . ",";
                            }
                            }else if (isset($_GET['submit'])) {
                                if (isset($_GET['tgl'])) {
                            $tgl = $_GET['tgl'];
                            $jam = "";
                            $jumlahnh3 = null;
                            $jumlahh2s = null;
                            $result1 = mysqli_query($con, "SELECT hour(tgl) as date, nh3, h2s  from sensor where left(tgl,10) = '$tgl' GROUP BY hour(tgl) ORDER BY Date ASC Limit 25");
                            while ($row = mysqli_fetch_array($result1)) {
                                $jams = $row['date'];
                                $jam .= "'$jams'" . ",";
                                $nh3 = $row['nh3'];
                                $jumlahnh3 .= "'$nh3'" . ",";
                                $h2s = $row['h2s'];
                                $jumlahh2s .= "'$h2s'" . ",";

                                    }    
                            }
                            }

                            ?>
                            <script>
                                var ctx = document.getElementById("datagrafik").getContext('2d');
                                var myChart = new Chart(ctx, {
                                    type: 'line',
                                    data: {
                                        // labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24],
                                        labels: [<?php
                                                    echo $jam;
                                                    ?>],
                                        datasets: [{
                                                label: 'amoniak',
                                                data: [
                                                    <?php
                                                    echo $jumlahnh3;
                                                    ?>
                                                ],
                                                backgroundColor: [
                                                    'rgba(255, 99, 132, 0.2)',
                                                    'rgba(54, 162, 235, 0.2)',
                                                    'rgba(255, 206, 86, 0.2)',
                                                    'rgba(75, 192, 192, 0.2)',
                                                    'rgba(153, 102, 255, 0.2)',
                                                    'rgba(255, 159, 64, 0.2)'
                                                ],
                                                borderColor: [
                                                    'rgba(255,99,132,1)',
                                                    'rgba(54, 162, 235, 1)',
                                                    'rgba(255, 206, 86, 1)',
                                                    'rgba(75, 192, 192, 1)',
                                                    'rgba(153, 102, 255, 1)',
                                                    'rgba(255, 159, 64, 1)'
                                                ],
                                                borderWidth: 1
                                            },
                                            {
                                                label: 'Hidrogen Sulfida',
                                                data: [
                                                    <?php
                                                    echo $jumlahh2s;
                                                    ?>
                                                ],
                                                backgroundColor: [
                                                    'rgba(255, 99, 132, 0.2)',
                                                    'rgba(54, 162, 235, 0.2)',
                                                    'rgba(255, 206, 86, 0.2)',
                                                    'rgba(75, 192, 192, 0.2)',
                                                    'rgba(153, 102, 255, 0.2)',
                                                    'rgba(255, 159, 64, 0.2)'
                                                ],
                                                borderColor: [
                                                    'rgba(255,99,132,1)',
                                                    'rgba(54, 162, 235, 1)',
                                                    'rgba(255, 206, 86, 1)',
                                                    'rgba(75, 192, 192, 1)',
                                                    'rgba(153, 102, 255, 1)',
                                                    'rgba(255, 159, 64, 1)'
                                                ],
                                                borderWidth: 1
                                            },
                                            
                                        ]
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>