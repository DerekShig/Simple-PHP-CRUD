<?php
    include 'db.php';
    $sql = "SELECT * FROM emp;";
    $res = $conn->query($sql);
    if ($res->num_rows > 0) {
        while($row = $res->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td  class='text-break'>" . $row['first'] . "</td>";
            echo "<td  class='text-break'>" . $row['last'] . "</td>";
            echo "<td  class='text-break'>" . $row['email'] . "</td>";
            echo "<td><a href='update.php?id=". $row['id'] ."' title='update'><button class='btn btn-sm btn-primary'>Update</button></a> <a href='delete.php?id=". $row['id'] ."' title='delete'><button class='btn btn-sm btn-danger'>Delete </button></a></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No rows selected</td></tr>";
    }
    $conn->close();