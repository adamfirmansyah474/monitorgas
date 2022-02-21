
 <?php
 require 'koneksi.php';
    
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

    ?>