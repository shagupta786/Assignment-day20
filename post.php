<!DOCTYPE html>
<html>
<head>
  <title>POST Form Result</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>POST Method Result</h2>
    <?php
      $name = $_POST['name'] ?? '';
      $email = $_POST['email'] ?? '';
      $phone = $_POST['phone'] ?? '';

      if (empty($name) || empty($email) || empty($phone)) {
        echo "<div class='error'>Please fill in all fields:</div>";
        if (empty($name)) echo "<div class='error'>❌ Name is required.</div>";
        if (empty($email)) echo "<div class='error'>❌ Email is required.</div>";
        if (empty($phone)) echo "<div class='error'>❌ Phone is required.</div>";
      } else {
        echo "<div class='success'>✅ Data submitted successfully via POST!</div>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Phone:</strong> $phone</p>";
      }
    ?>
  </div>
</body>
</html>
