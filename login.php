<?php
    $con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'dseu');
	if(isset($_POST['submit'])){
		$username = $_POST['email'];
		$password = $_POST['password'];
		$q = " SELECT * FROM register WHERE email='$username' and password='$password' ";
		$query = mysqli_query($con,$q);
		$count = mysqli_num_rows($query);
		if($count>0){
			echo "Login Successfully";
			echo " <script> window.location = 'admit-card.php'; </script> ";
		}
		else{
			echo "Fail to Login";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/styles/login.css">
</head>

<body>
    <section class="vh-100" style="background-color: #ff9210;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="./images/logo-1.png" alt="login form" class="img-fluid img-logo"
                                    style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form method="POST">

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <span class="h1 fw-bold mb-0">Login</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your
                                            account</h5>

                                        <div class="form-outline mb-4">
                                            <input type="email" id="form2Example17"
                                                class="form-control form-control-lg" name="email"/>
                                            <label class="form-label" for="form2Example17">Email address</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="form2Example27"
                                                class="form-control form-control-lg" name="password"/>
                                            <label class="form-label" for="form2Example27">Password</label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="submit" name="submit">Login</button>
                                        </div>

                                        <a class="small text-muted" href="forgotpassword.php" target="_blank">Forgot
                                            password?</a>
                                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a
                                                href="register.php" style="color: #393f81;" target="_blank">Register
                                                here</a></p>
                                        <a href="https://dseu.ac.in/terms-and-conditions/" class="small text-muted"
                                            target="_blank">Terms of use.</a>
                                        <a href="https://dseu.ac.in/privacy-policy/" class="small text-muted"
                                            target="_blank">Privacy
                                            policy</a>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>

</html>