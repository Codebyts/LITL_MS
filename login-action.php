<?php 
    require ('database.php');
    session_start();

    if ($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])) {
        $_SESSION['status'] = 'invalid'; 
    }

    if($_SESSION['status'] == 'valid') {
        header('Location: dashboard.php');
    }

    if (isset($_POST['login'])) {
        $officerid = trim($_POST['officerid']);
        $password = trim($_POST['password']);

        if (empty($officerid) || empty($password)) {
            echo 'Please fill in the fields';
        } else {
            $sql = "SELECT * FROM accounts WHERE officer_id = '$officerid' AND password = md5('$password')";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);

            if (mysqli_num_rows($result) > 0) {
                $_SESSION['status'] = 'valid';
                $_SESSION['officer_id'] = $row['officer_id'];
                header('Location: dashboard.php');

            } else {
                $_SESSION['status'] = 'invalid';
                echo 'Invalid Officer ID or Password';
            }
            
        }
    }

?>