<html>
<head>
<body>
<h1>Calculator Basic</h1>
    <form action = "" method = "post">
    </form>
<?php
if (isset($_POST["a"]) && isset($_POST["b"])) {
    $a = $_POST["a"];
    $b = $_POST["b"];

    $addition = $a + $b;
    $subtraction = $a - $b;
    $multiplication = $a * $b;

    if ($b != 0) {
        $division = $a / $b;
        echo "Addition: $addition <br>";
        echo "Subtraction: $subtraction <br>";
        echo "Multiplication $multiplication <br>";
        echo "Division: $division <br>";
    }
}
?>

