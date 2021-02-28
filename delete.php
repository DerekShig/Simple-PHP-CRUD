<?php

  include 'db.php';
  $id = $_GET['id'];

  $sql = "DELETE FROM emp WHERE id = $id";
  $conn->query($sql);
  $conn->close();

  header("location: test.php"); //re-direct to form page