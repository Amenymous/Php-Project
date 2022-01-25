<?PHP
$id_pemain = $_GET['id_pemain'];
include ('001link_db_gaji.php'); 
$query = "delete from pemain where id_pemain = '$id_pemain'";
$result = mysqli_query($conn,$query);

if ($result==TRUE)
{	echo "record successfully Deleted";
    header("location:009editanddelete.php");
 }
if ($result==FALSE) 
{echo "record unsuccessfully Deleted";
  header("location:009editanddelete.php");}
mysqli_close($conn);
?>