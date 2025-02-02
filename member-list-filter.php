<?php
require('validation.php');

include('database.php');
$conn = mysqli_connect($host, $user, $paswoord, $database);

function validate($data){
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

$section = validate($_POST['section']);

header("Location: member-list.php?section=$section");

?>