

  <?php
    // Indexed Array
    $fruits = array("Apple", "Banana", "Orange");

    // Accessing elements of an Indexed Array
    echo "Indexed Array:<br>";
    echo "Fruit 1: " . $fruits[0] . "<br>";
    echo "Fruit 2: " . $fruits[1] . "<br>";
    echo "Fruit 3: " . $fruits[2] . "<br><br>";

    // Associative Array
    $student = array(
      "name" => "John Doe",
      "age" => 20,
      "university" => "ABC University"
    );

    // Accessing elements of an Associative Array
    echo "Associative Array:<br>";
    echo "Name: " . $student["name"] . "<br>";
    echo "Age: " . $student["age"] . "<br>";
    echo "University: " . $student["university"] . "<br><br>";

    // Multidimensional Array
    $employees = array(
      array("John", "Doe", "john@example.com"),
      array("Jane", "Smith", "jane@example.com"),
      array("Mike", "Johnson", "mike@example.com")
    );

    // Accessing elements of a Multidimensional Array
    echo "Multidimensional Array:<br>";
    echo "Employee 1: " . $employees[0][0] . " " . $employees[0][1] . ", Email: " . $employees[0][2] . "<br>";
    echo "Employee 2: " . $employees[1][0] . " " . $employees[1][1] . ", Email: " . $employees[1][2] . "<br>";
    echo "Employee 3: " . $employees[2][0] . " " . $employees[2][1] . ", Email: " . $employees[2][2] . "<br><br>";

    // Looping through an Array
    echo "Looping through an Array:<br>";
    foreach ($fruits as $fruit) {
      echo $fruit . "<br>";
    }
  ?>

