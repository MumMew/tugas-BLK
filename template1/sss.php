<!DOCTYPE HTML>  
<html>
<head>
  <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="cssform.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
.error {color: #FF0000;}
table, th, td {
  border:1px solid black;
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
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = $commentErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "input your birth date";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["website"])) {
    $websiteErr = "please input your age";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $commentErr = "fill your address";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

  <p><span class="error">* required field</span></p>
    <form method="post" action="tabel1.php">  
      Name: <input type="text" name="name" value="<?php echo $name;?>">
        <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
      Birth Date <input type="date" name="email" value="<?php echo $email;?>">
        <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
      Age <input type="text" name="website" value="<?php echo $website;?>">
        <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
      Address <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
      Gender:
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
        <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
    </form>
</body>
</html>