<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <form action="" method="POST">
         <label for="username">Username</label>
         <input type="text" id="username" name="username" required><br>
         <label for="password">Password</label>
         <input type="password" id="password" name="password" required>
         <button type="submit">Login</button>
    </form>

  <?php
  $groups = array(
    0 => array("admin" , "123123"),
    1 => array("user" , "123456")
    );
    if (isset($_POST['username'], $_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (strlen(trim($username)) > 0 && strlen(trim($password)) > 0) {
    $check = true;
    for ($i = 0; $i < count($groups); $i++) {
    if ($username == $groups[$i][0] || $password == $groups[$i][1]) {
    $check = false;
    echo "Log in successfully, $username!";
    break;
    }
    }
    if ($check) {
    echo "User invalid!";
    }
    } else {
    echo "pls enter somethings";
    }
    }
    ?>
</body>
</html>


