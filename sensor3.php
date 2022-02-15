<?php

include 'koneksi.php';
 
$sql = mysqli_query($con, "SELECT  tgl FROM sensor order by id  DESC");
$data=mysqli_fetch_array($sql);
$tgl=$data["tgl"];
echo $tgl;


?>