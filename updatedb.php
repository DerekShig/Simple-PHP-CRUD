<?php

  include 'db.php';
  $id = $_POST['id'];
  $first = $_POST["first"];
  $last = $_POST["last"];
  $email = $_POST["email"];

  if (preg_match("/^[a-zA-Z-' ]*$/", $first) and !empty($first) and preg_match("/^[a-zA-Z-' ]*$/", $last) and !empty($last) and filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $query = "UPDATE emp SET first = ?, last = ?, email = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('sssi', $first, $last, $email, $id);
    $stmt->execute();
    $conn->close();
    header("location: test.php"); //re-direct to form page
  } else {
    header("location: update.php?id=".$id);
  }