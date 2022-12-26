<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us @ dseu</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="./styles/contact-us.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light nav-color navigation">
            <div class="container">
                <a class="navbar-brand name" href="https://dseu.ac.in/"><img src="./images/logo_long.png"
                        class="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about-us.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact-us.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="login.php" target="_blank"><button type="button"
                                    class="btn btn-primary">Login/Register</button></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <form method="post" action="">
        <div class="container contact">
            <div class="row">
                <div class="col-md-3">
                    <div class="contact-info">
                        <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image" />
                        <h2>Contact Us</h2>
                        <h4>We would love to hear from you !</h4>
                        <a href="tel: +917827690520" class="action-icons"><i class="fas fa-phone"></i></a>
                        <a href="mailto:helpdesk@dseu.ac.in" target="_blank" class="action-icons"><i
                                class="fa-solid fa-envelope"></i></a>
                        <a href="https://www.youtube.com/channel/UCI15NHqMRNTjPdzrteFuwgA" target="_blank"
                            class="action-icons"><i class="fa-brands fa-youtube"></i></a>
                        <a href="https://www.facebook.com/dseuofficial" target="_blank" class="action-icons"><i
                                class="fa-brands fa-facebook"></i></a>
                        <br>
                        <a href="https://twitter.com/dseu_official" target="_blank" class="action-icons"><i
                                class="fa-brands fa-twitter"></i></a>
                        <a href="https://www.instagram.com/dseu_official/" target="_blank" class="action-icons"><i
                                class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/school/delhi-skill-and-entrepreneurship-university/"
                            target="_blank" class="action-icons"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="contact-form">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="fname">First Name:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="fname" placeholder="Enter First Name"
                                    name="fname">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="lname">Last Name:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="lname" placeholder="Enter Last Name"
                                    name="lname">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Email:</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" placeholder="Enter email"
                                    name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="comment">Comment:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="5" id="comment"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/f607490a0e.js" crossorigin="anonymous"></script>

</body>

</html>