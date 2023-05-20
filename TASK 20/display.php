<?php
$connection = mysqli_connect("localhost", "root", "", "books");
if (!$connection) {
  die("Database connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM book_info";
$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) > 0) {
  echo "<table>
        <tr>
          <th>Book ID</th>
          <th>Title</th>
          <th>Author</th>
          <th>Price</th>
        </tr>";

  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
          <td>".$row["book_id"]."</td>
          <td>".$row["title"]."</td>
          <td>".$row["author"]."</td>
          <td>".$row["price"]."</td>
        </tr>";
  }
  echo "</table>";
} else {
  echo "No books found.";
}

mysqli_close($connection);
?>
