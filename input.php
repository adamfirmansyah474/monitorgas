<?php
//variabel data
//$con = mysqli_connect("localhost","root","","ta");
require "koneksi.php";
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

date_default_timezone_set('Asia/Jakarta');
$waktu = date('Y-m-d H:i:s');
$var1 = $_GET['nh3'];
$var2 = $_GET['h2s'];
$var5 = $waktu;

$result = mysqli_query($con,"INSERT INTO sensor(nh3,h2s,tgl) VALUES ('$var1','$var2','$var5')");
if(!$result)
{
die('invalid query:'.mysqli_error($con));
}
?>