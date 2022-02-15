<?php
include 'koneksi.php';
 
 
$sql = mysqli_query($con, "SELECT  h2s FROM sensor order by id  DESC");
$data=mysqli_fetch_array($sql);
$h2s=$data["h2s"];
echo $h2s;


?>