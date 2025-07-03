<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel</title>
  <style>
    body {
      font-family: Arial;
      background: #f4f4f4;
      padding: 20px;
    }
    table {
      border-collapse: collapse;
      width: 100%;
      background: white;
    }
    th, td {
      padding: 12px;
      border-bottom: 1px solid #ddd;
      text-align: left;
    }
    th {
      background: #4facfe;
      color: white;
    }
    h2 {
      margin-bottom: 20px;
      color: #333;
    }
  </style>
</head>
<body>

<h2>Student Enquiries</h2>

<table>
  <tr>
    <th>#</th>
    <th>Name</th>
    <th>Class</th>
    <th>Phone</th>
    <th>Message</th>
    <th>Date</th>
  </tr>
  <?php
  $result = $conn->query("SELECT * FROM enquiries ORDER BY date DESC");
  $i = 1;
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()):
  ?>
  <tr>
    <td><?= $i++ ?></td>
    <td><?= htmlspecialchars($row['name']) ?></td>
    <td><?= htmlspecialchars($row['class']) ?></td>
    <td><?= htmlspecialchars($row['phone']) ?></td>
    <td><?= htmlspecialchars($row['message']) ?></td>
    <td><?= htmlspecialchars($row['date']) ?></td>
  </tr>
  <?php
    endwhile;
  } else {
    echo "<tr><td colspan='6'>No enquiries found.</td></tr>";
  }
  ?>
</table>

</body>
</html>
