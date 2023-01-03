<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Display Data</title>
</head>

<body>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end p-3">
      <button class='btn btn-success'><a href="login.php" class="text-white" style="text-decoration:none;">Logout</a></button>
    </div>
    <div class="container">
        <div class="col-lg-12">
            <br><br>
            <div class="card-header bg-dark">
                <h1 class="text-white text-center">ADMIT CARD</h1>
            </div>
            <br>
            <table class="table table-bordered">
                <?php
                    $con = mysqli_connect('localhost','root');
                    mysqli_select_db($con,'dseu');
                    $email = $_SESSION['email'];
                    $q = " SELECT * FROM admitcard WHERE email='$email' ";
                    $query = mysqli_query($con,$q);
                    $result = mysqli_fetch_array($query);
                ?>
                <tr>
                    <th scope="row">University Roll Number</th>
                    <td colspan="2"> <?php echo $result['university_number']; ?> </td>
                </tr>
                <tr>
                    <th scope="row">Name</th>
                    <td colspan="1"> <?php echo $result['name']; ?> </td>
                    <td colspan="1" rowspan="4"> <img src="<?php echo $result['image']; ?>" height="150px" width="150px" alt="image"> </td>
                </tr>
                <tr>
                    <th scope="row">Father's Name</th>
                    <td colspan="1"> <?php echo $result['father_name']; ?> </td>
                </tr>

                <tr>
                    <th scope="row">Mother's Name</th>
                    <td colspan="1"> <?php echo $result['mother_name']; ?> </td>
                </tr>

                <tr>
                    <th scope="row">Date of Birth</th>
                    <td colspan="1"> <?php echo $result['dob']; ?> </td>
                </tr>

                <tr>
                    <th scope="row">Gender</th>
                    <td colspan="1"> <?php echo $result['gender'] ?> </td>
                    <td colspan="1" rowspan="2"> <img src="<?php echo $result['signature']; ?>" height="70px" width="150px" alt="signature"> </td>

                </tr>

                <tr>
                    <th scope="row">Email</th>
                    <td colspan="1"> <?php echo $result['email']; ?> </td>
                </tr>

                <tr>
                    <th scope="row">Date of Examination</th>
                    <td colspan="2">06-01-2023</td>

                </tr>

                <tr>
                    <th scope="row">Timing of Test</th>
                    <td colspan="2">09:00 - 11:30 AM</td>
                </tr>

                <tr>
                    <th scope="row">Venue of the Test</th>
                    <td colspan="2">DSEU DWARKA CAMPUS</td>
                </tr>

            </table>
        </div>
    </div>
</body>

</html>