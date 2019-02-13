<?php include 'server/init.php' ?>
<?php 
    if(isset($_POST['Register'])) {
        $UserName = $_POST['UserName'];
        $Name = $_POST['Name'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $reg_no = $_POST['reg_no'];
        $roll_no = $_POST['roll_no'];
        $department = $_POST['department'];
        $graduationYear = $_POST['graduationYear'];
        $email_id = $_POST['email_id'];
        $phonenumber=$_POST['phonenumber'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $pin_code = $_POST['pin_code'];
        $activation_status = "0";

        $confirm_password=md5($_POST['confirm_password']);
        $password=md5($_POST['password']);

        $id = "NULL";

        

        $reg_query = "INSERT INTO `users` (`id`, `username`, `name`, `dob`, `gender`, `regno`, `rollno`, `department`, `graduation_year`, `email_id`, `phonenumber`, `city`, `state`, `pin_code`, `password`, `activation_status`) VALUES ('$id' , '$UserName', '$Name','$dob','$gender','$reg_no','$roll_no','$department','$graduationYear','$email_id','$phonenumber', '$city', '$state', '$pin_code', '$password', '$activation_status')";

        if(!mysqli_query($con,$reg_query)){
            echo("Error description: " . mysqli_error($con));
        }                 
        else{
            echo "<script>
                alert('Successfully Registered. Please login');
                window.location.href='login.php';
                </script>";
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
    <title>Register</title>
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
        
        <div class="home-content" style="margin-top: 5%" action='register.php'>
            <form class="login" method="post">
                <p>REGSITER</p>
                <input type="text" id="UserName" name="UserName" placeholder="User Name" class="username" required>
                <input type="text" id="Name" name="Name" placeholder="Name" class="username" required>
                <br><br>
                <p style="display: inline;">GENDER : </p>
                <input type="radio" name="gender" value="male" required> Male &nbsp;
                <input type="radio" name="gender" value="female" required> Female
                <br><br>

                <p >Date of Birth </p>
                <input type="date" id="dob" name="dob" required><br><br>
                <p >Graduation Year </p>
                <input type="month" name="graduationYear" required><br><br>

                <input type="text" id="department" name="department" placeholder="Department" required>
                <br><br>
                <input type="text" id="roll-no" name="roll_no" placeholder="Roll Number" required>
                <br><br>
                <input type="text" id="reg-no" name="reg_no" placeholder="Registration Number" required>
                <br><br>
                
                <input type="email" id="email_id" name="email_id" placeholder="Email" required>
                <br><br>
                <input type="text" id="phonenumber" name="phonenumber" placeholder="Mobile Number" maxlength=10 required>
                <br><br>
                <input type="text" id="city" name="city" placeholder="City" required>
                <br><br>
                <input type="text" id="state" name="state" placeholder="State" required>
                <br><br>
                <input type="text" id="pin-code" name="pin_code" placeholder="Pin Code" required>
                <br><br>
                <input type="password" id="password" name="password" placeholder="Password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="Please include at least 1 uppercase character, 1 lowercase character, and 1 number." minlength="8" required>
                <br><br>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password"  pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="Please include at least 1 uppercase character, 1 lowercase character, and 1 number." minlength="8" required>
                <br><br>
                <input type="checkbox" id="myCheck"  onclick="myfunc()"> All the Details filled above are True<br><br>

                <input type="submit" value="REGISTER" name="Register" id="logButton">
                <br><br>

                <p class="message"><a href="login.php">LOGIN ?</a></p>
            </form>
        </div>

    </header>
    <script src="resources/js/jquery.min.js"></script>
    <script src="resources/js/script.js"></script>
</body>
</html>