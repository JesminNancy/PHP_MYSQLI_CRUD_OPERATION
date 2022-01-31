<?php

$server = 'localhost';
$username = "root";
$password = "";
$dbname = "crudregform";

$conn = mysqli_connect($server,$username,$password,$dbname);

if($conn){
    // echo "Connection Successful";
    ?>
    
    <script>
    alert('Connection Successful');
    </script>
    
    <?php
}else{
    die("No Connection" . mysqli_connect_error());
}

?>