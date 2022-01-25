<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Create a column layout with Flexbox */
.row {
  display: flex;
}

/* Left column (menu) */
.left {
  flex: 35%;
  padding: 15px 0;
}

.left h2 {
  padding-left: 8px;
}

/* Right column (page content) */
.right {
  flex: 65%;
  padding: 15px;
}

/* Style the search box */
#mySearch {
  width: 100%;
  font-size: 18px;
  padding: 11px;
  border: 1px solid #ddd;
}

/* Style the navigation menu inside the left column */
#myMenu {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myMenu li a {
  padding: 12px;
  text-decoration: none;
  color: black;
  display: block
}

#myMenu li a:hover {
  background-color: #ABE6F2;
}
</style>
</head>
<body>



<div class="row">
  <div class="left" style="background-color:#bbb;">
    <h2>MAIN MENU</h2>
    <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="type.." title="Type in a category">
    <ul id="myMenu">
      <LI><A HREF="002datapemain.php" TARGET="RightFrame">DATA PEMAIN</A></LI>
	  <LI><A HREF="004datapasukan.php" TARGET="RightFrame">DATA PASUKAN</A></LI>
      <LI><A HREF="003gajipemain.php" TARGET="RightFrame">DATA GAJI PEMAIN</A></LI>
      <LI><A HREF="new_form_pemain.html" TARGET="RightFrame">PEMAIN BARU</A></LI>
      <LI><A HREF="new_form_kiragajipemain.html" TARGET="RightFrame">NILAI GAJI BARU</A></LI>
      <LI><A HREF="009editanddelete.php" TARGET="RightFrame">DELETE DAN UPDATE</A></LI>
      <LI><A HREF="014frm_search.php" TARGET="RightFrame">CARIAN</A></LI>
	  <LI><A HREF="logout.php" TARGET="RightFrame">Logout</A></LI> 
    </ul>
  </div>
  
  

<script>
function myFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myMenu");
  li = ul.getElementsByTagName("li");
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>

</body>
</html>
