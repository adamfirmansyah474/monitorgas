<?php 
    
    include "koneksi.php";

    $sql = mysqli_query($con, "SELECT format(avg(nh3),2) as nh3, format(avg(h2s),2) as h2s, tgl  as tgl from sensor GROUP BY hour(tgl)");
$no =1;
$data = array();
    while ($row = $sql->fetch_array()) {
        $nh3 = $row['nh3'];
        $h2s= $row['h2s'];
        $tgl = $row['tgl'];
     

        echo "<tr>
        <td>".$no++."</td>
        <td>".$nh3."</td>
        <td>".$h2s."</td>
        <td>".$row['tgl']."</td>
        </tr>";
    }

 ?>