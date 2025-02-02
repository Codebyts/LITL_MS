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

$student_number = validate($_POST['studentnumber']);
$update_mem_fee_status = validate($_POST['mem_fee_status']);

echo $student_number;
echo $update_mem_fee_status;

?>