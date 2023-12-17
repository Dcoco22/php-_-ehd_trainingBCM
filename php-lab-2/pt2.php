<html>
<body>
<form action="" method="get">
enter n : <input type=text name=n><br>
<input type=submit value="Calculate">
</form>
</body>
<?php
$n = $_GET['n'];
$a = 0;
if ($n<=0){
echo " only positive number";}
else{
for($x = 0; $x<=$n;$x++){
$a = $x + $a;
}
echo"Sum = " .$a;
}
?>
</html>

