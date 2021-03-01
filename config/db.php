<?php 

  $db = mysqli_connect('localhost', 'root', '', 'carleader');

  if(!$db){
    echo "Database connection error" . mysqli_error($db);
  }

?>