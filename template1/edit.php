<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP JSON File CRUD (Create Read Update and Delete)</title>
  <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="cssform.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
    //get id from URL
    $index = $_GET['index'];
 
    //get json data
    $data = file_get_contents('data.txt');
    $data_array = json_decode($data);
 
    //assign the data to selected index
    $row = $data_array[$index];
 
    if(isset($_POST['save'])){
        $input = array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'website' => $_POST['website'],
            'comment' => $_POST['comment'],
            'gender' => $_POST['gender']
        );
 
        //update the selected index
        $data_array[$index] = $input;
 
        //encode back to json
        $data = json_encode($data_array, JSON_PRETTY_PRINT);
        file_put_contents('data.txt', $data);
 
        header('location: tabel1.php');
    }
?>
  <p><span class="error">* required field</span></p>
    <form method="post">  
      Name: <input type="text" id="name" name="name" value="<?php echo $row->name;?>">
  <br><br>
      Birth Date <input type="date" id="email" name="email" value="<?php echo $row->email;?>">
  <br><br>
      Age <input type="text" id="website" name="website" value="<?php echo $row->website;?>">
  <br><br>
      Address <textarea id="comment" name="comment" rows="5" cols="40"><?php echo $row->comment;?></textarea>
  <br><br>
      Gender:
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other 
  <br><br>
  <input type="submit" name="save" value="Save">  
    </form>    
</body>
</html>