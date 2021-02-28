<?php   
  include './partials/header.php';
  include 'db.php';
 
  $stmt = "SELECT * FROM emp WHERE id = " . $_GET['id'] . ";";
  $res = $conn->query($stmt);
?> 
  

<?php
  $row = $res->fetch_assoc(); ?>

  <!-- Update Employee Form -->
  <div class="container">
    <form class="col-10 col-md-5 col-sm-8 mx-auto mb-5" action="updatedb.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
      <label for="first" class="form-label">First Name</label>
      <input type="text" name="first" class="form-control" value="<?php echo $row['first'] ?>"><br>
      <label for="last" class="form-label">Last Name</label>
      <input type="text" name="last" class="form-control" value="<?php echo $row['last'] ?>"><br>
      <label for="email" class="form-label">Email</label>
      <input type="email" name="email" class="form-control" value="<?php echo $row['email'] ?>"><br>
      <button class="btn btn-success" type="submit">Update Employee</button>
    </form>
  </div>

  <!-- Employee to be Updated -->
  <div class="container">
    <h2 class="mb-3">Update Employee</h2>
    <table class="table col-12 mx-auto"> 
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
    <tbody>    

    <?php
      echo "<tr>";
      echo "<td>" . $row['id'] . "</td>";
      echo "<td class='text-break'>" . $row['first'] . "</td>";
      echo "<td class='text-break'>" . $row['last'] . "</td>";
      echo "<td class='text-break'>" . $row['email'] . "</td>";
      echo "<td><a href='update.php?id=". $row['id'] ."' title='update'><button class='btn btn-sm btn-primary'>Update</button></a></td>";
      echo "</tr>";
    ?>

    </tbody>
  </table>
</div>

<?php include './partials/footer.php' ?>