<?php

include 'connection.php';

$id = $_GET['id'];

$deletequery ="DELETE FROM jobregistration WHERE id=$id ";

$query = mysqli_query($conn, $deletequery);


if($query){
  ?>
  
  <script>
    alert ("Deleted Succesfully");
  </script>
  
  <?php
}else{

  ?>
  
  <script>
    alert (" Not Deleted");
  </script>
  
  <?php

}

header('Location:display.php');

?>