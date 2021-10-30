<?php

//Array of Errors
$fails = [];
if(isset($_POST['submit'])) {
   $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING); 
   $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); 
   $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
   //Variables to Validate Password
   $number = preg_match('@[0-9]@', $password);
   $uppercase = preg_match('@[A-Z]@', $password);
   $lowercase = preg_match('@[a-z]@', $password);
   $specialChars = preg_match('@[^\w]@', $password); 
   $password2 = filter_var($_POST['password2'], FILTER_SANITIZE_STRING); 
   $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
   if(empty($name) ) {
      $name = '';
      $fails[0] = 'The name is mandatory in this Form';
   } 
   if(!$email) {
      $email = '';
      $fails[1] = 'You Much Put a Correct Email on this Form';
   } 
   if(strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
      $password = '';
      $fails[2] = "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
   } 
   if($password2 !== $password) {
      $password2 = '';
      $fails[3] = 'The Password Confirmation Must Mach';
   } 
   if(strlen($message) < 30 ) {
      $message = '';
      $fails[4] = 'The message must be longer than 30 characters';
   } 
   
}
require 'index.view.php';
?>
<!DOCTYPE html>
<html lang="en">