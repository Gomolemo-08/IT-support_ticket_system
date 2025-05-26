<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin - Ticket List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
  <h2>Admin Dashboard</h2>
  <table class="table table-bordered table-hover mt-3">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>User</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Status</th>
        <th>Created</th>
        <th>Update</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $result = $conn->query("SELECT * FROM tickets ORDER BY created_at DESC");
      while ($row = $result->fetch_assoc()):
      ?>
      <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['user_name'] ?></td>
        <td><?= $row['user_email'] ?></td>
        <td><?= $row['subject'] ?></td>
        <td>
          <form action="update_status.php" method="POST" class="d-flex">
            <input type="hidden" name="ticket_id" value="<?= $row['id'] ?>">
            <select name="status" class="form-select me-2">
              <?php foreach (['Open', 'In Progress', 'Resolved'] as $status): ?>
                <option value="<?= $status ?>" <?= $row['status'] == $status ? 'selected' : '' ?>><?= $status ?></option>
              <?php endforeach; ?>
            </select>
            <button class="btn btn-sm btn-primary" type="submit">Update</button>
          </form>
        </td>
        <td><?= $row['created_at'] ?></td>
        <td><a href="mailto:<?= $row['user_email'] ?>" class="btn btn-sm btn-secondary">Email User</a></td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</body>
</html>
