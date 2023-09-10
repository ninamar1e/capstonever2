<?php
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $number = $_POST['number']

    $conn = new mysqli('localhost', 'root', '', 'test');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into reg(firstname, middlename, lastname, gender, email, number)
            values(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssi", $firstname, $middlename, $lastname, $gender, $email, $number);
        $stmt->execute();
        echo "Registration Successfully";
        $stmt->close();
        $conn->close();
    }
?>