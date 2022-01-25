<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>UPDATE PEMAIN</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<?PHP
include ('001link_db_gaji.php'); 
$id_pemain=$_GET['id_pemain'];
$query="SELECT * FROM pemain WHERE id_pemain='$id_pemain'";
$result=mysqli_query($conn,$query);
$num= mysqli_num_rows($result);

$i=0;
while ($i < $num) {
$show=mysqli_fetch_assoc($result);
$id_pemain=$show['id_pemain'];
$nama_pemain=$show['nama_pemain'];
$umur=$show['umur'];
//$tarikh_lahir=$show['tarikh_lahir'];
$no_jersi=$show['no_jersi'];
$posisi=$show['posisi'];
$gred_pemain=$show['gred_pemain'];
?>
<div class="container">
<form action="011pros_update.php" method="post">
  <div class="form-group">
    <label for="id_pemain">ID PEMAIN:</label>
    <input type="text" class="form-control" name="ud_id_pemain" id="ud_id_pemain" readonly="readonly" value="<?php echo $id_pemain; ?>" />
  </div>
  <div class="form-group">
    <label for="nama_pemain">NAMA PEMAIN:</label>
    <input type="text" class="form-control" name="ud_nama_pemain" id="ud_nama_pemain"  value="<?php echo $nama_pemain; ?>" />
  </div>
  
  <div class="form-group">
    <label for="umur">UMUR:</label>
    <input type="text" class="form-control" name="ud_umur" id="ud_umur"  value="<?php echo $umur; ?>" />
  </div>
  
  <div class="form-group">
    <label for="no_jersi">NO JERSI:</label>
    <input type="text" class="form-control" name="ud_no_jersi" id="ud_no_jersi"  value="<?php echo $no_jersi; ?>" />
  </div>
  <div class="form-group">
    <label for="posisi">POSISI:</label>
    <input type="text" class="form-control" name="ud_posisi" id="ud_posisi"  value="<?php echo $posisi; ?>" />
  </div>
    <div class="form-group">
    <label for="gred_pemain">GRED PEMAIN:</label>
    <input type="text" class="form-control" name="ud_gred_pemain" id="ud_gred_pemain"  value="<?php echo $gred_pemain; ?>" />
  </div>

  <button  name="SUBMIT" type="SUBMIT" class="btn btn-default">SUBMIT</button>
</form>

<?PHP
++$i;
}
?>
</body>
</html>