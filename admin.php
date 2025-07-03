<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel</title>
  <style>
    body { font-family: Arial; padding: 2rem; }
    table { width: 100%; border-collapse: collapse; }
    th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
  </style>
</head>
<body>
  <h2>Registered Users</h2>
  <table>
    <tr>
      <th>Name</th>
      <th>WhatsApp Number</th>
    </tr>
    <?php
      $file = fopen("data/registrations.csv", "r");
      while (($line = fgetcsv($file)) !== FALSE) {
        echo "<tr><td>$line[0]</td><td>$line[1]</td></tr>";
      }
      fclose($file);
    ?>
  </table>
</body>
</html>
