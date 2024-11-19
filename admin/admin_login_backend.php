<?php  
// connection file from database 

include_once $_SERVER['DOCUMENT_ROOT']. '\BankPro/connection/conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize user input
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    // Check user credentials
    $query = "SELECT * FROM admins WHERE username = '$username'";
    $result = mysqli_query($conn, $query);
    if(empty($username)||empty($password)){
		$_SESSION['error'] = 'Please fill all fields';
    	header('Location:/BankPro/Login_and_sighup/error_page.php');
		exit();
	}

	elseif (preg_match('/[0-9]/',$username)) {
		header('Location:\BankPro/admin/admin_login.php? username must be words');
		exit();
	}

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Verify password
        if (password_verify($password, $row['password'])) {
            // Redirect to admin_dashboard.php upon successful login
            header('Location: \BankPro/admin/manage-admin.php?');
            exit();
        } else {
            $_SESSION['error'] = 'Invalid Password';
    		header('Location: /BankPro/Login_and_sighup/error_page.php');
			exit();
        }
    } else {
        $_SESSION['error'] = 'Invalid Username';
    	header('Location: /BankPro/Login_and_sighup/error_page.php');
		exit();
    }
}

// Close the database connection
mysqli_close($conn);
?>