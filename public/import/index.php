<?php

include("conf/config.php");

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: dashboard/");
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
   $password = $_POST['password']; 

    $sql = "SELECT * FROM users WHERE name='$email' AND email='$password'";
    $result = mysqli_query($mysqli, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        //tentukan session
        $_SESSION['username'] = $row['name'];
        $_SESSION['id'] = $row['ID'];
        $_SESSION['nama'] = $row['name'];

        header("Location: dashboard/");
        
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/style.css">
    <title>Login</title>
</head>

<body>
    <div class="alert alert-warning" role="alert">
        <?php echo $_SESSION['error'] ?>
    </div>

    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            <p class="login-register-text">Anda belum punya akun? <a href="register.php">Register</a></p>
        </form>
    </div>
</body>

</html>