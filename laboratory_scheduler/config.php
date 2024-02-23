<?php
  $connect = mysqli_connect('localhost', 'root', '', 'comlabscheduler') or die("Connection failed:" .mysqli_connect_error());
  // Check connection
  if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
  }
?>