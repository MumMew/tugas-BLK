<?php
$name = '';
$email = '';
$website = '';
$comment = '';
$gender = '';
if(!empty($_POST)) 
{
$name = $_POST['name']; 
$email = $_POST['email']; 
$website = $_POST['website']; 
$comment = $_POST['comment']; 
$gender = $_POST['gender'];
}
?>
<!DOCTYPE HTML>  
<html>
<head>
  <link rel="stylesheet" href="css.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
.error {color: #FF0000;}
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}
th, td {
  text-align: left;
  padding: 8px;
}

</style>
</head>
<body>  
  <div class="sheader">
      <header>Selamat datang di indomaret selamat berbelanja</header>
  </div>
<div class="topnav">
  <ul>
    <li><a href="web.html">Home</a></li>
    <li><a href="#news">News</a></li>
    <li><a href="#contact">Contact</a></li>
    <li class="dropdown">
      <a href="javascript:void(0)" class="dropbtn">About</a>
        <div class="dropdown-content">
          <a href="sss.php">Input</a>
          <a href="tabel.php">tampil</a>
          <a href="#">Link 3</a>
      </div>
    </li>
  </ul>
</div>
<div style="overflow-x:auto;">
<?php
echo "<table>";
  echo"<tr>";
  echo  "<th>Nama</th>";
   echo "<th>Birth Date</th>";
   echo "<th>Age</th>";
    echo "<th>Adress</th>";
     echo "<th>Gender</th>";
  echo "</tr>";
  echo "<tr>";
    echo "<td>$name</td>";
   echo "<td>$email</td>";
   echo "<td>$website</td>";
   echo "<td>$comment</td>";
   echo "<td>$gender</td>";
  echo "</tr>";
echo"</table>";
echo "</div>" ;
?>