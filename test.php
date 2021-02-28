<?php include('./partials/header.php'); ?>

  <main>

    <!-- Add Employee Form -->
    <div class="container">
      <form class="col-10 col-md-5 col-sm-8 mx-auto mb-5" action="create.php"  method="POST">
        <label for="first" class="form-label">First Name</label>
        <input type="text" name="first" class="form-control" id="first"><br>
        <label for="last" class="form-label">Last Name</label>
        <input type="text" name="last" class="form-control"><br>
        <label for="email" class="form-label">Email</label>
        <input name="email" class="form-control">
        <div class="col-auto mb-3">
          <span class="form-text">
            Must be valid email. Ex: john.smith@email.com
          </span>
        </div>
        <button class="btn btn-success" name="submit" type="submit">Add Employee</button>
      </form>
    </div>

    <!-- List of all Employees -->
    <div class="container col-12 mx-auto">
      <h2 class="mb-3">Employees</h2>
      <table class="table">
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
          <!-- Populate table -->
          <?php include 'select.php'; ?>
        </tbody>
      </table>
    </div>

  </main>

  <?php include('./partials/footer.php'); ?>