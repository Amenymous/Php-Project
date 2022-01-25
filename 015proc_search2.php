<html>
<head>
 <title> Search Result </title>
 </head>
<body body style="background: url('images/gambar4.jpg');background-repeat:no-repeat;background-size: 100% ;">

<center>
<h1> Search Result </h1>
</center>
<?php

$searchtype=$_POST['searchtype'];
$searchterm=$_POST['searchterm'];
$searchterm= trim($searchterm);

if (!$searchtype || !$searchterm)
{
	echo ' Please Enter your search. Please enter again.';
	exit;
}

include ('001link_db_gaji.php');
$query = "select * from v_gajii where ".$searchtype." like '%".$searchterm."%'";
$result = mysqli_query($conn,$query);
$num_results = mysqli_num_rows($result);
echo "<center>";
echo '<p>Bilangan yang dijumpai: '.$num_results.'</p>';

?>
<P><strong><center>SENARAI NAMA GAJI PEMAIN</strong></center>  
<table border="1" width="849" align="center" cellspacing="2" cellpadding="2">
<tr>
<td align="center" bgcolor="#FFCC00"><strong>ID PEMAIN</strong></td>
<td align="center" bgcolor="#FFCC00"><strong>NAMA PEMAIN</strong></td>
<td align="center" bgcolor="#FFCC00"><strong>ID PASUKAN</strong></td>
<td align="center" bgcolor="#FFCC00"><strong>JUM GAJI DITETAPKAN</strong></td>
<td align="center" bgcolor="#FFCC00"><strong>CUKAI PEMAIN</strong></td> 
<td align="center" bgcolor="#FFCC00"><strong>IMBUHAN MVP</strong></td> 
<td align="center" bgcolor="#FFCC00"><strong>JUM GAJI BERSIH</strong></td>

</tr>
<?PHP

for ($i=0; $i <$num_results; $i++)
{
 $row = mysqli_fetch_array($result);
 echo "<tr>";
 echo "<td>" .$row["id_pemain"]. "</td>";
 echo "<td>" .$row["nama_pemain"].  "</td>";
 echo "<td>" .$row["id_pasukan"]."</td>";
 echo "<td>" .$row["jum_gaji_ditetapkan"]."</td>";
 echo "<td>" .$row["cukai_pemain"]."</td>";
 echo "<td>" .$row["imbuhan_mvp"]."</td>";
 echo "<td>" .$row["jum_gaji_bersih"]."</td>";
}
echo "</table>";
echo "<center>";
echo "<br>";
 

 ?>
</body>
</html>
