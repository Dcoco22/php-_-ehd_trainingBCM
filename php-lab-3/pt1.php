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
        $credentials = array(
            0 => array("admin" , "123123"),
            1 => array("user" , "123456")
        );
        if (isset($_POST['username'], $_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $check = true;
            for ($i = 0; $i < count($credentials); $i++) {
                if ($username == $credentials[$i][0] || $password == $credentials[$i][1]) {
                    $check = false;
                    echo "Welcome back my master, $username!";
                    break;
                }
            }
            if ($check) {
                echo "User not found!";
            }
        }
    
    
    
    ?>
</body>
</html>

