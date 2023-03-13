<!DOCTYPE html>
<html>
  <head>
    <title>Users</title>
  </head>
  <body>
    <h1>Users</h1>
    <table>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Profile Picture</th>
        <th>Date Registered</th>
      </tr>
      <?php
        // Read user data from CSV file and display in table
        $file = fopen('users.csv', 'r');
        while (($data = fgetcsv($file)) !== false) {
          echo "<tr>";
          echo "<td>" . $data[0] . "</td>";
          echo "<td>" . $data[1] . "</td>";
          echo "<td><img src='uploads/" . $data[2] . "' height='100'></td>";
          echo "<td>" . $data[3] . "</td>";
          echo "</tr>";
        }
        fclose($file);
      ?>
    </table>
  </body>
</html>
