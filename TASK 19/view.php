<?php
$connection = mysqli_connect("localhost", "root", "", "students");
if (!$connection) {
  die("Database connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM student_info";
$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) > 0) {
  echo "<table>
        <tr>
          <th>Enrollment No</th>
          <th>Name</th>
          <th>Semester</th>
          <th>Gender</th>
          <th>Qualification</th>
        </tr>";

  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
          <td>".$row["enrolment_no"]."</td>
          <td>".$row["name"]."</td>
          <td>".$row["semester"]."</td>
          <td>".$row["gender"]."</td>
          <td>".$row["qualification"]."</td>
        </tr>";
  }
  echo "</table>";
} else {
  echo "No records found.";
}

mysqli_close($connection);
?>
