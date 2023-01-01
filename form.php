<?php
session_start();
    $server = "localhost";
    $username = "root";
    $connect = mysqli_connect($server, $username);
    mysqli_select_db($connect, 'dseu');

    if (isset($_POST['submit'])) {
        $fullName = $_POST['name'];
        $date = $_POST['dob'];
        $address = $_POST['address'];
        $department = $_POST['department'];
        $semester = $_POST['semester'];
        $testcenter = $_POST['center'];
        $fathersName = $_POST['father_name'];
        $mothersName = $_POST['mother_name'];
        $phone = $_POST['phone'];
        $universityNumber = $_POST['university_number'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $photo = $_FILES['image']['name'];
        $signature = $_FILES['signature']['name'];
        $result = " INSERT INTO `admitcard`(`name`, `dob`, `address`, `department`, `semester`, `center`, `father_name`, `mother_name`, `phone`, `university_number`, `email`, `gender`, `image`, `signature`) VALUES ('$fullName', '$date', '$address', '$department', '$semester', '$testcenter', '$fathersName', '$mothersName', '$phone', '$universityNumber', '$email', '$gender', '$photo', '$signature') ";
        $query = mysqli_query($connect,$result);
        echo "<script>window.location = 'form.php'</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="./styles/form.css">
    <title>FORM</title>
</head>

<body>
    <div class="container">
        <h1 class="well">Registration Form</h1>
            <div class="col-lg-12 well">
                <div class="row">
                    <form method="post" action="" enctype="multipart/form-data">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Full Name</label>
                                    <input type="text" placeholder="ENTER YOUR FULL NAME" class="form-control" name="name">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Date of Birth</label>
                                    <input type="date" placeholder="ENTER YOUR DATE OF BIRTH " class="form-control" name="dob">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea placeholder="ENTER YOUR ADDRESS" rows="3" class="form-control" name="address"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 form-group">
                                    <label>Department</label>
                                    <select name="department" class="form-control selectpicker">
                                        <option value="">Select your Department-</option>
                                        <option>Bachlor of Computer Application (BCA)</option>
                                        <option>Bachelor of Business Administration (BBA)</option>
                                        <option>B. Sc. Medical Laboratory Technology (MLT)</option>
                                        <option>BBA (Banking, Financial Services and Insurance)</option>
                                        <option>Diploma in Automobile Engineering</option>
                                        <option>Diploma in Chemical Engineering</option>
                                        <option>Diploma in Civil Engineering</option>
                                        <option>Diploma in Computer Engineering</option>
                                        <option>Diploma in Electrical Engineering</option>
                                        <option>Diploma in Electronics Engineering</option>
                                        <option>Diploma in Mechanical Engineering</option>
                                        <option>Diploma in Applied Arts</option>
                                        <option>Diploma in Architecture</option>
                                        <option>Diploma in Cosmetology & Health</option>
                                        <option>Diploma in Fashion Design</option>
                                        <option>Diploma in Pharmacy</option>
                                        <option>Diploma in Printing Technology</option>
                                        <option>Diploma in Information Technology Enabled Services & Management(ITES&M)
                                        </option>
                                        <option>Diploma in Textile Design</option>
                                        <option>Diploma in Medical Lab Technology</option>
                                    </select>
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label>Choose Semester</label>
                                    <select name="semester" class="form-control selectpicker">
                                        <option value="">SELECT YOUR SEMESTER-</option>
                                        <option>SEMESTER I</option>
                                        <option>SEMESTER II</option>
                                        <option>SEMESTER III</option>
                                        <option>SEMESTER IV</option>
                                        <option>SEMESTER V</option>
                                        <option>SEMESTER VI</option>
                                        <option>SEMESTER VII</option>
                                        <option>SEMESTER VIII</option>
                                    </select>
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label>Choose Center :</label>
                                    <select name="center" class="form-control selectpicker">
                                        <option value="">SELECT YOUR CENTER-</option>
                                        <option>DSEU RAJOKRI CAMPUS</option>
                                        <option>DSEU PUSA CAMPUS – II</option>
                                        <option>DSEU PUSA CAMPUS – I</option>
                                        <option>DSEU DWARKA CAMPUS</option>
                                        <option>SIR C.V. RAMAN DSEU DHEERPUR CAMPUS</option>
                                        <option>KASTURBA DSEU PITAMPURA CAMPUS</option>
                                        <option>GURU NANAK DEV DSEU ROHINI CAMPUS</option>
                                        <option>DSEU WAZIRPUR-I CAMPUS</option>
                                        <option>ARYABHATT DSEU ASHOK VIHAR CAMPUS</option>
                                        <option>MEERABAI DSEU MAHARANI BAGH CAMPUS</option>
                                        <option>DSEU SIRI FORT CAMPUS</option>
                                        <option>GB PANT DSEU OKHLA-III CAMPUS</option>
                                        <option>DSEU OKHLA-II CAMPUS</option>
                                        <option>CHAMPS DSEU OKHLA – II CAMPUS</option>
                                        <option>G.B. PANT DSEU OKHLA-I CAMPUS</option>
                                        <option>DSEU VIVEK VIHAR CAMPUS</option>
                                        <option>DR. H.J. BHABHA DSEU MAYUR VIHAR CAMPUS</option>
                                        <option>BHAI PARMANAND DSEU SHAKARPUR CAMPUS – II</option>
                                        <option>AMBEDKAR DSEU SHAKARPUR CAMPUS – I</option>
                                    </select>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Father's Name</label>
                                    <input type="text" placeholder="ENTER YOUR FATHER'S NAME" class="form-control" name="father_name">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Mother's Name</label>
                                    <input type="text" placeholder="ENTER YOUR MOTHER'S NAME" class="form-control" name="mother_name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" placeholder="ENTER YOUR PHONE NUMBER" class="form-control" name="phone">
                            </div>
                            <div class="form-group">
                                <label>University Enrollment No.</label>
                                <input type="text" placeholder="ENTER YOUR UNIVERSITY ENROLLMENT NUMBER" class="form-control" name="university_number">
                            </div>
                            <div class="form-group">
                                <label>Email </label>
                                <input type="text" placeholder="ENTER YOUR EMAIL" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <input type="text" placeholder="ENTER YOUR GENDER" class="form-control" name="gender">
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Upload Photo</label>
                                    <input type="file" required name="image">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Upload Signature</label>
                                    <input type="file" required name="signature">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-lg btn-info" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
    </div>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
</body>

</html>