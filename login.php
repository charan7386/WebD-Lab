<?php include 'server/init.php' ?>
<?php 
    //student login
    if(isset($_POST['LOGIN_STUDENT'])){
        $username = mysqli_real_escape_string($con, $_POST['stu_username']);
        $password = mysqli_real_escape_string($con, $_POST['stu_password']);
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($con, $query);

        if (mysqli_num_rows($results) == 1) {
            session_start();
             $_SESSION['username'] = $username;
             $_SESSION['password']=$password;
            header('location: profile.php');
        }else {
            echo "<script>alert('Invalid username or password');window.location.href='login.php';</script>";
        }
    }

    //admin login
    if(isset($_POST['LOGIN_ADMIN'])){
        $username = mysqli_real_escape_string($con, $_POST['admin_username']);
        $password = mysqli_real_escape_string($con, $_POST['admin_password']);
        $password = md5($password);
        $query = "SELECT * FROM admin_info WHERE username='$username' AND password='$password'";
        $results = mysqli_query($con, $query);

        if (mysqli_num_rows($results) == 1) {
            session_start();
             $_SESSION['username'] = $username;
             $_SESSION['password']=$password;
            header('location: admin_panel.php');
        }else {
            echo "<script>alert('Invalid username or password');window.location.href='login.php';</script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Student Information System">
    <link rel="stylesheet" type="text/css" href="resources/css/styles.css">
    <link rel="stylesheet" href="resources/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <header>
        <nav>
            <div class="nav-bar-div">
                <img src="resources/img/logo.png" alt="NIT DGP logo" class="logo">
                <a href="#">Student Information System</a>
                <ul class="main-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                </ul>
            </div>
        </nav>
        
        <div class="home-content">
            <form class="login" method="POST" action='login.php'>
                <p>LOGIN AS STUDENT</p>
                <input type="text" id="logUsername" name="stu_username" placeholder="Username" class="username" required>
                <br><br>
                <input type="password" id="logPassword" name="stu_password" placeholder="Password" required>
                <br><br>
                <input type="submit" id="logButton" name="LOGIN_STUDENT" value="LOGIN">
                <br><br>
                <p class="message"><a href="#" style="text-decoration: none;">LOGIN AS ADMIN</a></p>
                <p><a href="register.php" style="color: #225fe7;text-decoration: none;">REGISTER</a></p>
            </form>
            <form class="register" method='POST'>
                <p>LOGIN AS ADMIN</p>
                <input type="text" id="regUsername" name="admin_username" placeholder="Username" class="username" required>
                <br><br>
                <input type="password" id="regPassword" name="admin_password" placeholder="Password" required>
                <br><br>
                <input type="submit" id="regButton" name="LOGIN_ADMIN" value="LOGIN">
                <br><br>
                <p class="message"><a href="#" style="text-decoration: none;">LOGIN AS STUDENT ?</a></p>
            </form>
        </div>

    </header>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</body>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.register').hide()
            $('.message a').click(function(){
                $('.login, .register').toggle('fast')
            });
        });
    </script>
</html>