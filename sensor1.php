<?php


include 'koneksi.php';
 
$sql = mysqli_query($con, "SELECT nh3 FROM sensor order by id  DESC");
$data=mysqli_fetch_array($sql);
$nh3=$data["nh3"];
echo $nh3;


?>