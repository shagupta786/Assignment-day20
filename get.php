<!DOCTYPE html>
<html>
<head>
  <title>GET Form Result</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>GET Method Result</h2>
    <?php
      $name = $_GET['name'] ?? '';
      $email = $_GET['email'] ?? '';
      $phone = $_GET['phone'] ?? '';

      if (empty($name) || empty($email) || empty($phone)) {
        echo "<div class='error'>Please fill in all fields:</div>";
        if (empty($name)) echo "<div class='error'>❌ Name is required.</div>";
        if (empty($email)) echo "<div class='error'>❌ Email is required.</div>";
        if (empty($phone)) echo "<div class='error'>❌ Phone is required.</div>";
      } else {
        echo "<div class='success'>✅ Data submitted successfully via GET!</div>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Phone:</strong> $phone</p>";
      }
    ?>
  </div>
</body>
</html>
