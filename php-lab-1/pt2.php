  GNU nano 6.2                                duongcoco.php                                          
<html>
<head>
<body>
<h1>Calculator Basic</h1>
<form action = "" method = "post">
input a:<input type=text name= a><br>
input b:<input type=text name= b><br>
<br> <input type=submit value="calculate">
</form>
</body>
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
</html>


