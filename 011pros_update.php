<?PHP include ('001link_db_gaji.php'); 
$ud_id_pemain=$_POST['ud_id_pemain'];
$ud_nama_pemain=$_POST['ud_nama_pemain'];
$ud_umur=$_POST['ud_umur'];
$ud_no_jersi=$_POST['ud_no_jersi'];
$ud_posisi=$_POST['ud_posisi'];
$ud_gred_pemain=$_POST['ud_gred_pemain'];

$query="UPDATE pemain SET nama_pemain='$ud_nama_pemain', umur='$ud_umur',no_jersi='$ud_no_jersi',posisi='$ud_posisi',gred_pemain='$ud_gred_pemain'  
WHERE id_pemain='$ud_id_pemain'";
mysqli_query($conn,$query);
header("location:009editanddelete.php");
mysqli_close($conn);
?>