
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the value of N from the form
        $n = $_POST["n"];

        // Validate the input
        if ($n <= 0) {
          echo "<li>Please enter a positive integer.</li>";
        } else {
          // Generate and print the Fibonacci sequence
          $fibonacci = [0, 1];
          for ($i = 2; $i < $n; $i++) {
            $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
          }

          foreach ($fibonacci as $number) {
            echo "<li>$number</li>";
          }
        }
      }
    ?>
