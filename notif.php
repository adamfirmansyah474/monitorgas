<?php
include 'koneksi.php';
 
 
$sql = mysqli_query($con, "SELECT nh3 FROM sensor order by id  DESC");
$data_nh3=mysqli_fetch_array($sql);
$nh3=$data_nh3["nh3"];

$sql = mysqli_query($con, "SELECT  h2s FROM sensor order by id  DESC");
$data_h2s=mysqli_fetch_array($sql);
$h2s=$data_h2s["h2s"];



if($h2s > 100 && $nh3 > 100){
	$alert = "<script>
  swal({  title: 'bersihkan kotoran dan urin sapi yang menumpuk pada kandang',
    type: 'info',
    showCancelButton: true,
    confirmButtonColor: '#ff0055',
    reverseButtons: true,
    focusConfirm: false,
    focusCancel: true});
</script>";
echo $alert;
}else if ($nh3 > 100){
	$alert = "<script>
  swal({  title: 'Bersihkan kadang dari kotoran yang menumpuk',
    type: 'info',
    showCancelButton: true,
    confirmButtonColor: '#ff0055',
    reverseButtons: true,
    focusConfirm: false,
    focusCancel: true});
</script>";
echo $alert;
}else if ($h2s > 100){
	$alert = "<script>
  swal({  title: 'Bersihkan kadang dari air kencing sapi',
    type: 'info',
    showCancelButton: true,
    confirmButtonColor: '#ff0055',
    reverseButtons: true,
    focusConfirm: false,
    focusCancel: true});
</script>";
echo $alert;

}else {
	$alert = "";
}
echo $alert;



?>