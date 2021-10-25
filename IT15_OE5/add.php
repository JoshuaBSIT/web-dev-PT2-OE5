<?php

require_once('connect.php')

if($dbc) {

$fn = "Angela";
$ln = "dela Nega";
$email = "angeldelanega@gmail.com";
$pwd = "654321";

$query = "INSER INTO user(first_name, last_name, email, pass, reg_date) VALUES ('$fn','$ln','$email','$pwd',NOW())";

$result = @mysqli_query($dbc, $query);

if (!$result) {
$err[] = "Fail to add user: " . mysqli_error($dbc);
}
else{
echo 'One record successfully added to database...';
}
mysqli_close($dbc);

{
else{
exit('Could not be connect to database '.mysqli_connect_error());
}
?>