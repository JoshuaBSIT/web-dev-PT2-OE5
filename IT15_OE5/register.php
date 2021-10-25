<?php
require_once('connect.php');

if(isset($_POST['submit'])) {

    $fn = $_POST['firstname'];
    $ln = $_POST['lastname'];
    $bdate = $_POST['birthdate'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $psw = $_POST['password'];
    

    $query = "INSERT INTO users(first_name, last_name, date_of_birth, email, addres, pass, reg_date) VALUES ('$fn','$ln','2021-10-01','$email', '$address', '$psw',NOW())";
    
    $result = @mysqli_query($dbc, $query);
    
    if (!$result) {
        $err[] = "Fail to add user: " . mysqli_error($dbc);
    }
    else{
    echo 'One record successfully added to database...';
    }
    mysqli_close($dbc);
    
}
    else{
    exit('Could not be connect to database '.mysqli_connect_error());
    }

?>