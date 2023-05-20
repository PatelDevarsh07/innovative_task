<!DOCTYPE html>
<html>
<head>
  <title>File Upload</title>
</head>
<body>
  <h1>File Upload</h1>

  <?php
    // Check if a file has been uploaded
    if (isset($_FILES["file"])) {
      $file = $_FILES["file"];

      // File details
      $fileName = $file["name"];
      $fileType = $file["type"];
      $fileSize = $file["size"];
      $fileTmp = $file["tmp_name"];
      $fileError = $file["error"];

      // File upload directory
      $uploadDir = "uploads/";

      // Check for errors
      if ($fileError === 0) {
        // Generate a unique filename to avoid overwriting existing files
        $uniqueFilename = uniqid() . "_" . $fileName;

        // Move the uploaded file to the desired location
        if (move_uploaded_file($fileTmp, $uploadDir . $uniqueFilename)) {
          echo "File uploaded successfully!";
        } else {
          echo "Failed to upload file.";
        }
      } else {
        echo "Error occurred while uploading the file.";
      }
    }
  ?>

  <form method="POST" enctype="multipart/form-data">
    Select a file to upload:
    <input type="file" name="file" required>
    <button type="submit">Upload</button>
  </form>
</body>
</html>
