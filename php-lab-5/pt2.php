<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Birthday Countdown</title>
    <h1>MY BIRTHDAY COUNT DOWN</h1>
    
</head>
<body>
    <form action="" method="post">
        your next bỉthday:<br>
        Date<input file type="text" name= day required>
        Month<input file type="text" name= month required>
        Year<input file type="text" name= year required><br>
        today is:<br>
        Date<input file type="text" name= day1 required>
        Month<input file type="text" name= month1 required>
        Year<input file type="text" name= year1 required><br>
        <button type ="submit" value=submit>submit</button><br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST['day'];
    $b = $_POST['month'];
    $c = $_POST['year']; 
    $d = $_POST['day1'];
    $e = $_POST['month1'];
    $f = $_POST['year1'];
    $ngay_thang_nam = date("d/m/Y", strtotime($a . "-" . $b . "-" . $c));    
    echo "sinh nhat cua ban la". $ngay_thang_nam. "<br>" ; 
    $ngay_thang_namhientai = date("d/m/Y", strtotime($d . "-" . $e . "-" . $f));    
    echo "hom nay la ngay". $ngay_thang_namhientai. "<br>" ;
    $first_date = strtotime($a . "-". $b . "-" . $c);
    $second_date = strtotime($d . "-" . $e . "-" . $f);
    $datediff = abs($first_date - $second_date);
    echo ($datediff / (60*60*24));   
    }    
    ?>
