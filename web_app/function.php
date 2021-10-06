<?php
include("connection.php");

function check_login($mysqli)
{
    if (isset($_SESSION['admin_id'])) {
        $id = $_SESSION['admin_id'];

        $query = "SELECT * FROM credentials where admin_id = '$id' limit 1";

        $result = mysqli_query($mysqli, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    //if the above statement all false, redirect to signup or login
    header("Location: login.php");
    die;
}
