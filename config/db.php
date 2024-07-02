<?php 

  $db = mysqli_connect('localhost', 'root', 'Qwerty12345', 'carleader');

  if(!$db){
    echo "Database connection error" . mysqli_error($db);
  }

?>

