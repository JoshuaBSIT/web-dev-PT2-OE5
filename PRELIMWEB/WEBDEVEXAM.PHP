<?php
    $firstname = $lastname = "";
    $street = $street2 = $state = "";
    $postal = $cpnumb =  "";
    $email = $select = "";
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      if (empty($_POST["firstname"])){
          //$firstnameErr = "Firstname is required...";
          echo "<script>alert('Please Input First Name')</script>";
      }else {
          $firstname = test_input($_POST["firstname"]);
      }
      if (empty($_POST["lastname"])){
          //$lastnameErr = "Lastname is required...";
          echo "<script>alert('Please Input Last Name')</script>";
      }else {
          $lastname = test_input($_POST["lastname"]);
      }
      if (empty($_POST["street"])){
        //$lastnameErr = "Lastname is required...";
        echo "<script>alert('Please Input Street')</script>";
      }else {
          $street = test_input($_POST["street"]);
      }
      if (empty($_POST["street2"])){
        //$lastnameErr = "Lastname is required...";
        echo "<script>alert('Please Input Street 2')</script>";
      }else {
          $street2 = test_input($_POST["street2"]);
      }
      if (empty($_POST["state"])){
        //$lastnameErr = "Lastname is required...";
        echo "<script>alert('Please Input State')</script>";
       }else {
        $state = test_input($_POST["state"]);
       } 
       if (empty($_POST["postal"])){
        //$lastnameErr = "Lastname is required...";
        echo "<script>alert('Please Input Postal Number')</script>";
       }else {
        $postal = test_input($_POST["postal"]);
       } 
       if (empty($_POST["cpnumb"])){
        //$lastnameErr = "Lastname is required...";
        echo "<script>alert('Please Input Phone Number')</script>";
       }else {
        $cpnumb = test_input($_POST["cpnumb"]);
       } 
       if (empty($_POST["email"])){
        //$lastnameErr = "Lastname is required...";
        echo "<script>alert('Please Input Email')</script>";
       }else {
        $email = test_input($_POST["email"]);
       } 
       if (empty($_POST["select"])){
        //$lastnameErr = "Lastname is required...";
        echo "<script>alert('Please Select.')</script>";
       }else {
        $select = test_input($_POST["select"]);
       }      
    
  }
   
    function test_input($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }
  ?>

  <?php
    echo "<h1>Congratulations you are now registered Voter! :</h1>". " ";
    echo "<br>";
    echo "Fullname :". $firstname . " " . $lastname;
    echo "<br>";
    echo "Street :". $street;
    echo "<br>";
    echo "Street2 :". $street2;
    echo "<br>";
    echo "State : ".$state;
    echo "<br>";
    echo "Postal :". $postal;
    echo "<br>";
    echo "Phone Number: ". $cpnumb;
    echo "<br>";
    echo "Email Address: ". $email;
    echo "<br>";
    echo "How did you hear about us?:".$select;
    echo "<br>";
?>