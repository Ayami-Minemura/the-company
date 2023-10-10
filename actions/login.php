<?php

include "../classes/User.php";

//create an object
$user = new User;

//call the method
$user->login($_POST);
// $_POST holds all the date from the form or from the index.php or the form
  // username and password
  /*
      $_POST['username'];
      $_POST['password'];
  */

?>