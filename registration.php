<?php
    include_once 'config/settings-configuration.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1 id="registration">REGISTRATION</h1>
            <form action="dashboard/admin/authentication/admin-class.php" method="POST">
                <input type="hidden" name="csrf_token" value="<?php echo $csrf_token ?>">
                <div class="input-box">
                    <input type="text" name="username" placeholder="Enter Username" required>
                </div>
                <div class="input-box">
                    <input type="email" name="email" placeholder="Enter Email" required>
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="Enter Password" required>
                </div>
                <button type="submit" class="btn" name="btn-signup">SIGN UP</button>
            </form>
            <span>Already have an account? <a href="index.php"> Signin Here</a></span>
        </div>
    </div>
</body>
</html>