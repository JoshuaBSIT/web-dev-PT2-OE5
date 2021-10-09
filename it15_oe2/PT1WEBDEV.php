<?php

$firstname = $lastname = $gender = $dateBirth = "";
$address = $country = $username = $password = $cpassword = "";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$first = test_input($_POST["firstName"]);
$last = test_input($_POST["lastName"]);
$gender = test_input($_POST["gender"]);
$dateBirth = test_input($_POST["date"]);
$address = test_input($_POST["Address"]);
$country = test_input($_POST["Country"]);
$username = test_input($_POST["username"]);
if($_POST["password"] != $_POST["Cpassword"]){
    echo '<script type="text/JavaScript"> 
    alert("Noice");
    </script>';
}
else{
    $password = test_input($_POST["password"]);       
    $cpassword = test_input($_POST["Cpassword"]);
}
}
?>

<br>
                <?php
                echo "Name: " . $first . " " .  $last . "</br>";
                echo "Gender: " . $gender . "</br>";
                echo "Date of Birth: " . $dateBirth. "</br>";
                echo "Address: " . $address. "</br>";
                echo "Country: " . $country. "</br>";
                echo "Username: " . $username. "</br>";

                ?>