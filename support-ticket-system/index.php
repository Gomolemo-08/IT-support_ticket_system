<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Submit Support Ticket</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
  <h2>Submit a Support Ticket</h2>
  <form action="submit_ticket.php" method="POST">
    <div class="mb-3">
      <label>Your Name</label>
      <input type="text" name="user_name" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Your Email</label>
      <input type="email" name="user_email" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Subject</label>
      <input type="text" name="subject" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Description</label>
      <textarea name="message" class="form-control" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit Ticket</button>
  </form>
</body>
</html>
