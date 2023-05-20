

  <?php
    // Function without parameters
    function sayHello() {
      echo "Hello, World!<br>";
    }

    // Function with parameters
    function greet($name) {
      echo "Hello, $name!<br>";
    }

    // Function with a return value
    function square($num) {
      return $num * $num;
    }

    // Calling functions
    sayHello();

    greet("John");
    greet("Jane");

    $result = square(5);
    echo "Square: $result";
  ?>

