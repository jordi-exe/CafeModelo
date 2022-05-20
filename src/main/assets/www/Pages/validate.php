<?php

include_once('connect.php');

// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $conn->prepare('SELECT Usuario, Contrasena FROM usuarios WHERE Usuario = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_GET['phpuser']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();

	if ($stmt->num_rows > 0) {
    	$stmt->bind_result($id, $password);
    	$stmt->fetch();
    	// Account exists, now we verify the password.
    	// Note: remember to use password_hash in your registration file to store the hashed passwords.
    	if ($_GET['phppass'] === $password) {
    		// Verification success! User has logged-in!
    		// Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
    		session_regenerate_id();
    		$_SESSION['loggedin'] = TRUE;
    		$_SESSION['uname'] = $_GET['phpuser'];
    		$_SESSION['name'] = $_GET['phppass'];
    		$_SESSION['id'] = $id;

    		echo json_encode("ok");
    	} else {
    		// Incorrect password
    		echo json_encode('Incorrect username and/or password!');
    	}
    } else {
    	// Incorrect username
    	echo json_encode('Incorrect username and/or password!');
    }


	$stmt->close();
}
?>