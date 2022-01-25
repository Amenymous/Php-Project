<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>
</head>
<body>
<?php 
include ('001link_db_gaji.php'); 
$id_pemain = $_POST['id_pemain'];
$id_pasukan = $_POST['id_pasukan'];
$no_resit_gaji = $_POST['no_resit_gaji'];
$jum_gaji_ditetapkan = $_POST['jum_gaji_ditetapkan'];
$cukai_pemain = $_POST['cukai_pemain'];
$imbuhan_mvp = $_POST['imbuhan_mvp'];
$jum_gaji_bersih = $_POST['jum_gaji_bersih'];
$query ="insert into gajii (id_pemain,id_pasukan,no_resit_gaji,jum_gaji_ditetapkan,cukai_pemain,imbuhan_mvp,jum_gaji_bersih)
values('$id_pemain','$id_pasukan','$no_resit_gaji','$jum_gaji_ditetapkan', '$cukai_pemain', '$imbuhan_mvp', '$jum_gaji_bersih')";
if (mysqli_query($conn, $query)) {
	   
	header("location: 003gajipemain.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?> 
</body>
</html>
