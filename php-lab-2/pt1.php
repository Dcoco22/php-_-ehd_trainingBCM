<html>
<head>
<h1> tinh phuong trinh bac mot</h1>
</head>
<body>
<form action="" method="get">
Input a: <input type=text name=a required><br>
Input b: <input type=text name=b required>
<br>ax + b = 0
<br><br><input type=submit value="Calculate">
</form>
</body>
<?php
$a=$_GET["a"];
$b=$_GET["b"];
if (isset($a) && isset($b)){
if ($a!=0)
{
$x=-($b)/$a ;
}
else
{
if ($b==0) {
$x="vo so nghiem";
}
else
{
$x="vo nghiem";
}
}
echo "phuong trinh co nghiem x = ". $x;
}
?>
</html>


