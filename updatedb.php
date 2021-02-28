<?php

  include 'db.php';
  $id = $_POST['id'];
  $first = $_POST["first"];
  $last = $_POST["last"];
  $email = $_POST["email"];

  $query = "UPDATE emp SET first = ?, last = ?, email = ? WHERE id = ?";
  $stmt = $conn->prepare($query);
  $stmt->bind_param('sssi', $first, $last, $email, $id);
  $stmt->execute();
  $conn->close();

  header("location: test.php"); //re-direct to form page