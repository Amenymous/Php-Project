<html>
<head>
	<title>  Search </title>
 
</head>
<link rel="stylesheet" media="screen" href = "/static/css/bootstrap.min.css">
<body body style="background: url('images/gambar4.jpg');background-repeat:no-repeat;background-size: 100% ;">

<h1 align="center"> CARIAN </h1>

<form  action="015proc_search2.php" method="post" >
  <div align="center"><span class="style1">Carian untuk</span>:<br/>
    <Select NAME="searchtype">
         <Option VALUE="id_pemain">ID PEMAIN</option>
         <Option VALUE="nama_pemain">NAMA PEMAIN</option>
         <Option VALUE="id_pasukan">ID PASUKAN</option>
		 <Option VALUE="jum_gaji_ditetapkan">JUM GAJI DITETAPKAN</option>
		 <Option VALUE="cukai_pemain">CUKAI PEMAIN</option>
		 <Option VALUE="imbuhan_mvp">IMBUHAN MVP</option>
         <Option VALUE="jum_gaji_bersih">JUM GAJI BERSIH</option>
        
    </Select>
    <br />
Masukkan data:<br />
<input name="searchterm" type="text" >
<br />

<input type="submit" name="search" value="Search" >
  </div>
</form>
</body>
</html>
