<?php

include_once('connect.php');

$Fname = $_GET['rFname'];
$Lname = $_GET['rLname'];
$Username = $_GET['rUser'];
$Password = $_GET['rPass'];
$PNum = $_GET['rNum'];
$Email = $_GET['rEmail'];

// query the database to see if the username is taken
$query = $conn->prepare("SELECT * FROM usuarios WHERE Usuario='{$Username}'");
$query->execute();
$query->store_result();
if ($query->num_rows === 0){
    $query->close();
    // create and format some variables for the database
    $id = '';
    $date_created = time();
    $last_login = 0;
    $RoleID = 1;

    // insert the user into the database
    $reg = $conn->prepare("INSERT INTO usuarios VALUES (
        '{$id}', '{$Fname}', '{$Lname}', '{$PNum}', '{$Email}', '{$Username}', '{$Password}', '{$RoleID}', '{$date_created}', '{$last_login}'
    )");
    if(!$reg){
        echo "Prepare failed: (". $conn->errno.")".$conn->error."<br>";
    }
    $reg->execute();
    $reg->close();
}
else {
    $error_msg = 'The username <i>'.$Username.'</i> is already taken. Please use another.';
    echo $error_msg;
}
echo json_encode("ok");

?>