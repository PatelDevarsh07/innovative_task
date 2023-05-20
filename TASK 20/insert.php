<?php
$connection = mysqli_connect("localhost", "root", "", "books");
if (!$connection) {
  die("Database connection failed: " . mysqli_connect_error());
}

$book_id = $_POST["book_id"];
$title = $_POST["title"];
$author = $_POST["author"];
$price = $_POST["price"];

$query = "INSERT INTO book_info (book_id, title, author, price)
          VALUES ($book_id, '$title', '$author', $price)";

if (mysqli_query($connection, $query)) {
  echo "Book inserted successfully.";
} else {
  echo "Error inserting book: " . mysqli_error($connection);
}

mysqli_close($connection);
?>
