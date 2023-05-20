<!DOCTYPE html>
<html>
<head>
  <title>Student Information</title>
</head>
<body>
  <h1>Student Information</h1>
  <form action="insert.php" method="POST">
    <label for="enrollment">Enrollment No:</label>
    <input type="text" name="enrollment" required><br>
    <label for="name">Name:</label>
    <input type="text" name="name" required><br>
    <label for="semester">Semester:</label>
    <input type="number" name="semester" required><br>
    <label for="gender">Gender:</label>
    <input type="text" name="gender" required><br>
    <label for="qualification">Qualification:</label>
    <input type="text" name="qualification" required><br>
    <button type="submit">Save</button>
  </form>
  <br>
  <a href="view.php">View Student Information</a>
</body>
</html>
