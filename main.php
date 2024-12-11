<?php
/**
 * PHP Tutorial: Beginner to Advanced
 * This file includes examples and explanations for PHP concepts ranging from basic syntax to advanced features.
 */

// 1. Basic Syntax
// Every PHP script starts with <?php and ends with ?>.

// Outputting to the screen
echo "Hello, World!\n"; // Simple output
print "Welcome to PHP Programming!\n"; // Another way to output

// Variables and Data Types
$name = "John"; // String
$age = 25;       // Integer
$height = 5.9;   // Float
$is_student = true; // Boolean

// Display variables
echo "My name is $name, I am $age years old, and my height is $height feet.\n";

// Additional Examples
$multi_line_string = "This is a \nmulti-line string.";
echo $multi_line_string;

// Constant
define("PI", 3.14159);
echo "The value of PI is " . PI . "\n";

// 2. Conditional Statements
if ($age >= 18) {
    echo "You are an adult.\n";
} else {
    echo "You are a minor.\n";
}

// Using switch-case
$grade = 'A';
switch ($grade) {
    case 'A':
        echo "Excellent!\n";
        break;
    case 'B':
        echo "Good Job!\n";
        break;
    default:
        echo "Keep Trying!\n";
}

// Nested Conditions
if ($age > 0) {
    if ($age < 18) {
        echo "You are a child.\n";
    } else {
        echo "You are an adult.\n";
    }
}

// Ternary Operator
$message = ($age >= 18) ? "Adult" : "Minor";
echo $message . "\n";

// 3. Loops
// For loop
for ($i = 1; $i <= 5; $i++) {
    echo "Iteration $i\n";
}

// While loop
$counter = 1;
while ($counter <= 3) {
    echo "Counter is at $counter\n";
    $counter++;
}

// Do-while loop
$counter = 5;
do {
    echo "Counter is $counter\n";
    $counter--;
} while ($counter > 0);

// Foreach loop
$fruits = ["Apple", "Banana", "Cherry"];
foreach ($fruits as $fruit) {
    echo "$fruit\n";
}

// 4. Functions
function greet($name) {
    return "Hello, $name!\n";
}

// Call the function
echo greet("Alice");

function sum($a, $b) {
    return $a + $b;
}

// Use the sum function
echo "The sum of 3 and 5 is " . sum(3, 5) . "\n";

// Recursive Function
function factorial($n) {
    if ($n <= 1) return 1;
    return $n * factorial($n - 1);
}
echo "Factorial of 5 is " . factorial(5) . "\n";

// 5. Arrays
// Indexed array
$colors = ["Red", "Green", "Blue"];
array_push($colors, "Yellow"); // Add an element

// Associative array
$person = [
    "name" => "John",
    "age" => 25,
    "gender" => "Male"
];

// Display values
echo "Name: " . $person['name'] . ", Age: " . $person['age'] . "\n";

// Multidimensional array
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

echo "Matrix center: " . $matrix[1][1] . "\n"; // Access middle value

// Array Functions
sort($colors);
print_r($colors);

// 6. Object-Oriented Programming
class Car {
    public $brand;
    public $model;

    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function display() {
        echo "This is a $this->brand $this->model.\n";
    }
}

$myCar = new Car("Toyota", "Corolla");
$myCar->display();

// Inheritance
class ElectricCar extends Car {
    public $batteryCapacity;

    public function __construct($brand, $model, $batteryCapacity) {
        parent::__construct($brand, $model);
        $this->batteryCapacity = $batteryCapacity;
    }

    public function display() {
        echo "This is a $this->brand $this->model with a battery capacity of $this->batteryCapacity kWh.\n";
    }
}

$myElectricCar = new ElectricCar("Tesla", "Model S", 100);
$myElectricCar->display();

// Interface
interface Vehicle {
    public function start();
    public function stop();
}

class Bike implements Vehicle {
    public function start() {
        echo "Bike started.\n";
    }

    public function stop() {
        echo "Bike stopped.\n";
    }
}

$myBike = new Bike();
$myBike->start();
$myBike->stop();

// 7. File Handling
$file = fopen("sample.txt", "w"); // Open file for writing
fwrite($file, "Hello, File Handling!\n");
fclose($file);

$file = fopen("sample.txt", "r"); // Open file for reading
while (!feof($file)) {
    echo fgets($file); // Read line by line
}
fclose($file);

// Checking if a file exists
if (file_exists("sample.txt")) {
    echo "File exists.\n";
}

// 8. Error Handling
try {
    $num = 10 / 0; // This will cause an error
} catch (DivisionByZeroError $e) {
    echo "Error: Division by zero.\n";
} finally {
    echo "This block always executes.\n";
}

// Custom Error Handler
function customError($errno, $errstr) {
    echo "Error [$errno]: $errstr\n";
}
set_error_handler("customError");
echo $undefinedVariable;

// 9. Advanced Topics
// Working with JSON
$data = ["name" => "Alice", "age" => 30];
$json = json_encode($data); // Convert to JSON string
echo $json . "\n";

$decoded = json_decode($json, true); // Convert back to array
print_r($decoded);

// Regular Expressions
$pattern = "/^Hello/";
$text = "Hello, World!";
if (preg_match($pattern, $text)) {
    echo "Pattern matched!\n";
}

// 10. Database Connection (MySQL)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tutorial";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "User: " . $row['name'] . ", Email: " . $row['email'] . "\n";
    }
}
$conn->close();

// Using Prepared Statements
$conn = new mysqli($servername, $username, $password, $dbname);
$stmt = $conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
$stmt->bind_param("ss", $name, $email);
$name = "John Doe";
$email = "john@example.com";
$stmt->execute();
$stmt->close();
$conn->close();

// 11. Web Forms
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    echo "Hello, $username!\n";
}
?>

<!-- Sample HTML Form -->
<!DOCTYPE html>
<html>
