<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Contact Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/display-contact-us.css">
</head>

<body>
    <div class="main-div">
        <h1>List of students who have query</h1>
        <div class="center-div">
            <div class="table-responsive">
                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Comments</th>
                            <th scope="col">Date Time</th>
                            <th scope="col">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $server = 'localhost';
                        $username = 'root';

                        $connect = mysqli_connect($server, $username);
                        mysqli_select_db($connect, 'dseu');

                        $selectquery = "SELECT * FROM contactus";

                        $query = mysqli_query($connect, $selectquery);

                        $nums = mysqli_num_rows($query);



                        while ($result = mysqli_fetch_array($query)) {
                            ?>

                            <tr>
                                <th scope="row"><?php echo $result['id']; ?></th>
                                <td><?php echo $result['firstname']; ?></td>
                                <td><?php echo $result['lastname']; ?></td>
                                <td><?php echo $result['email']; ?></td>
                                <td><?php echo $result['comment'];?></td>
                                <td><?php echo $result['datetime']; ?></td>
                                <td><a href="delete.php?id=<?php echo $result['id'];?>" data-toogle="tooltip" data-placement="bottom" title="DELETE"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>

</html>