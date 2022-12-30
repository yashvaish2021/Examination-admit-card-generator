<?php
session_start();
$server = "localhost";
$username = "root";

$connect = mysqli_connect($server, $username);
mysqli_select_db($connect, 'dseu');

if (isset($_POST['submit'])) {
    $firstName = $_POST['First Name'];
    $lastName = $_POST['Last Name'];
    $address = $_POST['Address'];
    $department = $_POST['Department'];
    $centerI = $_POST['Center I'];
    $centerII = $_POST['Center II'];
    $fathersName = $_POST['Fathers Name'];
    $mothersName = $_POST['Mothers Name'];
    $phone = $_POST['Phone'];
    $universityNumber = $_POST['University Number'];
    $email = $_POST['Email'];
    $gender = $_POST['Gender'];
    $img_photo = $_FILES['img_photo']['name'];
    $temp_img_photo = $_FILES['img_photo']['temp_name'];
    $img_signature = $_FILES['img_signature']['name'];
    $temp_img_signature = $_FILES['img_signature']['temp_name'];
    move_uploaded_file($img_photo, $temp_img_photo);
    move_uploaded_file($img_signature, $temp_img_signature);
    // $sql = ;
    // $query = mysqli_query($connect,$sql);
    echo "<script>window.location = 'form.php'</script>";
}
?>