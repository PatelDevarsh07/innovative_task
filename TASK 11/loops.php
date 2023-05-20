<!DOCTYPE html>
<html>
<head>
  <title>PHP Loop Examples</title>
</head>
<body>
  <h1>PHP Loop Examples</h1>

  <?php
    // While Loop
    $counter = 1;
    while ($counter <= 5) {
      echo "While Loop: Counter is $counter<br>";
      $counter++;
    }

    echo "<br>";

    // Do...While Loop
    $counter = 1;
    do {
      echo "Do...While Loop: Counter is $counter<br>";
      $counter++;
    } while ($counter <= 5);

    echo "<br>";

    // For Loop
    for ($counter = 1; $counter <= 5; $counter++) {
      echo "For Loop: Counter is $counter<br>";
    }

    echo "<br>";

    // For Each Loop
    $colors = array("Red", "Green", "Blue", "Yellow");
    foreach ($colors as $color) {
      echo "For Each Loop: Color is $color<br>";
    }
  ?>
</body>
</html>
