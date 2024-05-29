
<!DOCTYPE HTML>  
<html>
<head>
  <link rel="stylesheet" href="css.css">
  <link rel="stylesheet" href="cssform.css">
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
          <a href="tabel1.php">tampil</a>
          <a href="#">Link 3</a>
      </div>
    </li>
  </ul>
</div>
<div style="overflow-x:auto;">
<table>
  <thead>
    <tr>
    <th>Nama</th>
    <th>Birth Date</th>
    <th>Age</th>
    <th>Adress</th>
    <th>Gender</th>
    <th>Action</th>
    </tr>
  </thead>
  <tbody id="data-output">
                    <?php
                        //fetch data from json
                        $data = file_get_contents('data.txt');
                        //decode into php array
                        $data = json_decode($data);
 
                        $index = 0;
                        foreach($data as $row){
                            echo "
                                <tr>
                                    <td>".$row->name."</td>
                                    <td>".$row->email."</td>
                                    <td>".$row->website."</td>
                                    <td>".$row->comment."</td>
                                    <td>".$row->gender."</td>
                                    <td>
                                        <a href='edit.php?index=".$index."' class='edit'>Edit</a>
                                        <a href='delete.php?index=".$index."' class='delete'>Delete</a>
                                    </td>
                                </tr>
                            ";
 
                            $index++;
                        }
                    ?>

  </tbody>
</table>
</div>
