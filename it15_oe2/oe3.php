<?php

define('TAG',"\"GOAT\"");

if(['Submit']){

    $name = $_POST['name'];
    $id = $_POST['id'];
    $work = $_POST['work'];
    $rate = $_POST['rate'];
    $salary = $_POST['salary'];

    echo "Hello".$name;
 

    if($work <= 500){
       $salary = ($work * $rate - 3000);
    }
    else{
        $salary = ($work * $rate - 4500) + (($work - 40) * ($rate * 0.12));
    }
    echo "<br>Your salary is ".$salary;
}

?>