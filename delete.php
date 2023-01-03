<?php
$server = 'localhost';
$username = 'root';

$connect = mysqli_connect($server, $username);
mysqli_select_db($connect, 'dseu');

$id = $_GET['id'];

$deletequery = "DELETE FROM `contactus` WHERE id = $id";
$query = mysqli_query($connect, $deletequery);

if ($query) {
    ?>
    <script>
        alert("DELETED SUCCESSFULLY");
    </script>
<?php
} else {
    ?>
    <script>
        alert("NOT DELETED SUCCESSFULLY");
    </script>
<?php
}

header('location:display-contact-us.php');
?>