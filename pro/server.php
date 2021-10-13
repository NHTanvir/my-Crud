<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// databse connnection
$db = mysqli_connect('localhost', 'root', '', 'registration');



  
  ?>