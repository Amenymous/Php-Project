<html>
<head>
<title>Buku Javascript dan PHP </title>
<link rel="stylesheet" type="text/css" href="../menu/pro_dropdown_3/pro_dropdown_3.css" />
<script src="../menu/pro_dropdown_3/stuHover.js" type="text/javascript"></script>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
</head>
</head>
<body body style="background: url('images/gambar4.jpg');background-repeat:no-repeat;background-size: 100% ;">
<?PHP
//include ('../menu/main_menu.php'); 
include ('001link_db_gaji.php'); 
$sql="SELECT * from pemain ORDER BY nama_pemain ASC";
$result = mysqli_query($conn,$sql) or die(mysql_error());

?>
<div class="container">
<P><strong><center> DATA PEMAIN </strong></center>  
<table class="table table-hover" border="0" width="849" align="center" cellspacing="2" cellpadding="2">
  <thead>
<tr>

<td align="center" bgcolor="#FFCC00"><strong>ID PEMAIN</strong></td>
<td align="center" bgcolor="#FFCC00"><strong>NAMA PEMAIN</strong></td>
<td align="center" bgcolor="#FFCC00"><strong>UMUR</strong></td> 
<td align="center" bgcolor="#FFCC00"><strong>NO JERSI</strong></td> 
<td align="center" bgcolor="#FFCC00"><strong>POSISI</strong></td> 
<td align="center" bgcolor="#FFCC00"><strong>GRED PEMAIN</strong></td> 
</tr>
 </thead>
<?PHP
while ($row=mysqli_fetch_array($result))
{
 echo "<tr>";
 echo "<td>" .$row["id_pemain"]. "</td>";
 echo "<td>" .$row["nama_pemain"]."</td>";
 echo "<td>" .$row["umur"]."</td>";
 echo "<td>" .$row["no_jersi"]. "</td>";
 echo "<td>" .$row["posisi"]."</td>";
 echo "<td>" .$row["gred_pemain"]."</td>";
}
echo "</table>";
echo "<center>";
echo "<br>";
echo "</div>";
?>
</body>
</html>