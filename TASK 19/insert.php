<?php
$connection = mysqli_connect("localhost", "root", "", "students");
if (!$connection) {
  die("Database connection failed: " . mysqli_connect_error());
}

$enrollment = $_POST["enrollment"];
$name = $_POST["name"];
$semester = $_POST["semester"];
$gender = $_POST["gender"];
$qualification = $_POST["qualification"];

$query = "INSERT INTO student_info (enrolment_no, name, semester, gender, qualification)
          VALUES ('$enrollment', '$name', $semester, '$gender', '$qualification')";

if (mysqli_query($connection, $query)) {
  echo "Record inserted successfully.";
} else {
  echo "Error inserting record: " . mysqli_error($connection);
}

mysqli_close($connection);
?>
