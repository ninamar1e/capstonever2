<?php
    $firstname = $_POST['firstname'];
     $middlename = $_POST['middlename'];
     $lastname = $_POST['lastname'];
     $birthdate = $_POST['birthdate'];
     $address = $_POST['address'];
     $gender = $_POST['gender'];
     $phone = $_POST['phone'];
     $email = $_POST['email'];
     $address = $_POST['address'];
     $city = $_POST['city'];
     $school = $_POST['school'];
     $schooladdress = $_POST['schooladdress'];
     $lrn = $_POST['lrn'];
     $grades = $_POST['grades'];
     $form = $_POST['form'];
     $picture = $_POST['picture'];

$ conn = new mysqli('localhost' , 'root' '' '' 'test');
if($conn->connect_error){
    die('Connection Fieled :' . $conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(firstname, middlename, lastname, address, graduated, schooladdress, emailaddress, grades, form, picture)"
    values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?));
    $stmt->bind_param("ssssssssss", $firstname, $middlename, $lastname, $address, $graduated, $schooladdress, $emailaddress, $grades, $form, $picture);
    $stmt->execute();
    echo "registration successfully";
    $stmt->close();
    $conn->close();
}
?>
    