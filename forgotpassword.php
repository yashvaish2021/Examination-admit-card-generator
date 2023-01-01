<?php
$server = "localhost";
$username = "root";

$connect = mysqli_connect($server, $username);
mysqli_select_db($connect, 'dseu');
if (isset($_POST['reset'])) {
    $email = $_POST['email'];
    $sql = "";
    $query = mysqli_query($connect, $sql);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/forgotpassword.css">
</head>

<body>
    <div class="main-container">
        <div class="card text-center" style="width: 600px;">
            <div class="card-header h5 text-black bg-primary">Password Reset</div>
            <div class="card-body px-5">
                <p class="card-text py-2">
                    Enter your email address and we'll send you an email with instructions to reset your password.
                </p>
                <div class="form-outline">
                    <input type="email" id="typeEmail" class="form-control my-3" placeholder="ENTER YOUR EMAIL" />
                    <!-- <label class="form-label" for="typeEmail">Email input</label> -->
                </div>
                <button name="reset" class="btn btn-primary w-100 text-black">Reset password</button>
                <div class="d-flex justify-content-between mt-4">
                    <a class="" href="login.php">Login</a>
                    <a class="" href="register.php">Register</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>