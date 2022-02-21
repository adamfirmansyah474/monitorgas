
 <?php
 require 'koneksi.php';
    $jam = "";
    $jumlahnh3 = null;

    $result1 = mysqli_query($con, "SELECT hour(tgl) as date from sensor where day(tgl) = day(now()) GROUP BY hour(tgl) ORDER BY Date ASC Limit 25");
    while ($row = mysqli_fetch_array($result1)) {
        $jams = $row['date'];
        $jam .= "'$jams'" . ",";
    }

    $result1 = mysqli_query($con, "SELECT nh3 from sensor where day(tgl) = day(now())  GROUP BY hour(tgl) ORDER BY tgl ASC Limit 25");
    while ($row = mysqli_fetch_array($result1)) {
        $nh3 = $row['nh3'];
        $jumlahnh3 .= "'$nh3'" . ",";
    }

    $jumlahh2s = null;
    $result2 = mysqli_query($con, "SELECT h2s from sensor where day(tgl) = day(now()-1)  GROUP BY hour(tgl) ORDER BY tgl ASC Limit 25");
    while ($row = mysqli_fetch_array($result2)) {
        $h2s = $row['h2s'];
        $jumlahh2s .= "'$h2s'" . ",";
    }

    ?>