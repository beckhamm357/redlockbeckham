<?php
  // Connect to database  
  # $conn = mysqli_connect("mysql", "root", "password", "Redlock");
  $conn = mysqli_connect("mysql_db", "root", "password", "Redlock");

  // Fetch data from database
  $result = mysqli_query($conn, "SELECT * FROM users");
?>
<!DOCTYPE html>
<head>
</head>
<body>
  <table>
    <tr>
      <th>ID</th>
      <th>Nama</th>
      <th>Alamat</th>
      <th>Jabatan</th>
    </tr>
    <?php
      // Display data in a table
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>". $row["ID"]. "</td>";
        echo "<td>". $row["Nama"]. "</td>";
        echo "<td>". $row["Alamat"]. "</td>";
        echo "<td>". $row["Jabatan"]. "</td>";
        echo "</tr>";
      }
      echo "<tr>Jumlah User: " . $result->num_rows . "</tr>";
    ?>
  </table>
</body>
</html>
