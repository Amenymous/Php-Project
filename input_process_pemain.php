<!DOCTYPE html>
<html>
<head>
<title>PENDAFTARAN AHLI PEMAIN BARU</title>
</head>
<body>
<?php 
include ('001link_db_gaji.php'); 
$id_pemain = $_POST['id_pemain'];
$nama_pemain = $_POST['nama_pemain'];
$umur = $_POST['umur'];
$no_jersi = $_POST['no_jersi'];
$posisi = $_POST['posisi'];
$gred_pemain = $_POST['gred_pemain'];
$query ="insert into pemain  values ('$id_pemain','$nama_pemain','$umur','$no_jersi', '$posisi', '$gred_pemain')";
if (mysqli_query($conn, $query)) {
	//echo "<center><p><img src=\"$target_file\" width=\"190\" height=\"200\"><p>";
  echo "Harga :".$id_pemain."<br>";
  echo "Deposit :".$nama_pemain."<br>";
  echo "Tahun :".$umur."<br>";
  echo "Kadar :".$no_jersi."<br>";
  echo "Bulanan :".$posisi."<br>";
  echo "Bulanan :".$gred_pemain."<br>";
  
    echo "New record created successfully";
	//echo "<a href=\"003data_tbl.php\">  list</a>"; 
	header("location: 002datapemain.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?> 
</body>
</html>
