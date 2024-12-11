
# PHP Tutorial: Beginner to Advanced 🚀

Welcome to this PHP tutorial! 🌟 This document will walk you through various PHP concepts, from basic syntax to advanced features. Whether you're a beginner or looking to enhance your PHP skills, this guide has something for you! 🎉

---

## Table of Contents 📚
1. [Basic Syntax](#basic-syntax)
2. [Conditional Statements](#conditional-statements)
3. [Loops](#loops)
4. [Functions](#functions)
5. [Arrays](#arrays)
6. [Object-Oriented Programming](#object-oriented-programming)
7. [File Handling](#file-handling)
8. [Error Handling](#error-handling)
9. [Advanced Topics](#advanced-topics)
10. [Database Connection (MySQL)](#database-connection-mysql)
11. [Web Forms](#web-forms)

---

## 1. Basic Syntax 📝

Every PHP script begins with `<?php` and ends with `?>`.

### Outputting to the Screen
```php
echo "Hello, World!\n"; // Simple output
print "Welcome to PHP Programming!\n"; // Another way to output
```

### Variables and Data Types
```php
$name = "John"; // String
$age = 25;       // Integer
$height = 5.9;   // Float
$is_student = true; // Boolean

echo "My name is $name, I am $age years old, and my height is $height feet.\n";
```

### Constants
```php
define("PI", 3.14159);
echo "The value of PI is " . PI . "\n";
```

---

## 2. Conditional Statements 🧐

Conditional statements control the flow of execution based on conditions.

```php
if ($age >= 18) {
    echo "You are an adult.\n";
} else {
    echo "You are a minor.\n";
}
```

### Using Switch-Case
```php
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
```

---

## 3. Loops 🔄

Loops allow you to repeat code multiple times.

### For Loop
```php
for ($i = 1; $i <= 5; $i++) {
    echo "Iteration $i\n";
}
```

### While Loop
```php
$counter = 1;
while ($counter <= 3) {
    echo "Counter is at $counter\n";
    $counter++;
}
```

### Do-While Loop
```php
$counter = 5;
do {
    echo "Counter is $counter\n";
    $counter--;
} while ($counter > 0);
```

---

## 4. Functions 🧑‍💻

Functions are reusable blocks of code.

### Simple Function
```php
function greet($name) {
    return "Hello, $name!\n";
}

echo greet("Alice");
```

---

## 5. Arrays 🗂️

Arrays store multiple values in a single variable.

### Indexed Array
```php
$colors = ["Red", "Green", "Blue"];
array_push($colors, "Yellow"); // Add an element
```

### Associative Array
```php
$person = [
    "name" => "John",
    "age" => 25,
    "gender" => "Male"
];

echo "Name: " . $person['name'] . ", Age: " . $person['age'] . "\n";
```

---

## 6. Object-Oriented Programming 🏎️

Learn the power of objects and classes.

```php
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
```

---

## 7. File Handling 📝

PHP allows you to read and write files.

```php
$file = fopen("sample.txt", "w");
fwrite($file, "Hello, File Handling!\n");
fclose($file);

$file = fopen("sample.txt", "r");
while (!feof($file)) {
    echo fgets($file);
}
fclose($file);
```

---

## 8. Error Handling ⚠️

Handle errors gracefully using try-catch blocks.

```php
try {
    $num = 10 / 0;
} catch (DivisionByZeroError $e) {
    echo "Error: Division by zero.\n";
} finally {
    echo "This block always executes.\n";
}
```

---

## 9. Advanced Topics 🚀

Explore advanced concepts like JSON and Regular Expressions.

### Working with JSON
```php
$data = ["name" => "Alice", "age" => 30];
$json = json_encode($data);
echo $json . "\n";
```

### Regular Expressions
```php
$pattern = "/^Hello/";
$text = "Hello, World!";
if (preg_match($pattern, $text)) {
    echo "Pattern matched!\n";
}
```

---

## 10. Database Connection (MySQL) 🔗

Learn how to connect to a MySQL database.

```php
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
```

---

## 11. Web Forms 🌐

Handle form submissions with PHP.

```php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    echo "Hello, $username!\n";
}
```

