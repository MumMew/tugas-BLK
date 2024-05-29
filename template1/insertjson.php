<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
                   
    function get_data() {
        $file_name='data'. '.txt'; 
   
        if(file_exists("$file_name")) {  
            $current_data=file_get_contents("$file_name"); 
            $array_data=json_decode($current_data, true); 
                               
            $extra=array( 
               'name' => $_POST['name'], 
                'email' => $_POST['email'], 
                'website' => $_POST['website'],
                'comment' => $_POST['comment'], 
                'gender' => $_POST['gender'],
                ); 
            $array_data[]=$extra; 
            echo "file exist<br/>"; 
            return json_encode($array_data);
        } 
        else { 
            $datae=array(); 
            $datae[]=array( 
                'name' => $_POST['name'], 
                'email' => $_POST['email'], 
                'website' => $_POST['website'],
                'comment' => $_POST['comment'], 
                'gender' => $_POST['gender'],
            ); 
            echo "file not exist<br/>"; 
            return json_encode($datae);    
        } 
    } 
  
    $file_name='data'. '.txt'; 
      
    if(file_put_contents("$file_name", get_data())) { 
        echo 'success<br/>'; 
        header('location: tabel1.php');
    }                 
    else { 
        echo 'There is some error';                 
    } 
} 
?> 
