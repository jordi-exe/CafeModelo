<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "proyectoc";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    $name = $_GET['phpuser'];
    $pass = $_GET['phppass'];

    $sql_query = "SELECT count(*) AS cntUser FROM usuarios WHERE Usuario ='$name' AND Contrasena = '$pass'";
    $result = mysqli_query($conn, $sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if($count > 0)
    {
        echo json_encode("ok");
        $_SESSION['name'] = $name;
    } else {
        return 0;
    }

?>