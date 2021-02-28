 <?php

  include 'db.php';

  $first = $_POST["first"];
  $last = $_POST["last"];
  $email = $_POST["email"];

  if (preg_match("/^[a-zA-Z-' ]*$/", $first) and !empty($first) and preg_match("/^[a-zA-Z-' ]*$/", $last) and !empty($last) and filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $stmt = $conn->prepare("INSERT INTO emp (first, last, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $first, $last, $email);
    $stmt->execute();
    $stmt->close();    
  } 

  header("location: test.php"); //re-direct to form page