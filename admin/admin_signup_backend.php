<?php 
session_start();
// connection file 
include_once $_SERVER['DOCUMENT_ROOT']. '\BankPro/connection/conn.php';

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize user input
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $confirm_password = mysqli_real_escape_string($conn, $_POST["confirm_password"]);

    // Check if passwords match
    if ($password !== $confirm_password) {
        $_SESSION['error'] = 'Password does not match';
    	header('Location: /BankPro/Login_and_sighup/error_page.php');
		exit();
    } else {
    	$statement = mysqli_stmt_init($conn);
		$check_databse = "SELECT * FROM admins WHERE username = ?";

		if(!mysqli_stmt_prepare($statement, $check_databse)){
			header('Location:\BankPro/admin/admin_signup.php?ERROR WITH THE DATABASE ');
			exit();
		}else{
			// checking if sighup user is giving a existing name or emaill 
			mysqli_stmt_bind_param($statement,'s',$username);
			mysqli_stmt_execute($statement);

			$check_data = mysqli_stmt_get_result($statement);
			if($row_data = mysqli_fetch_assoc($check_data)){
				$_SESSION['error'] = 'Username already exist';
    			header('Location: /BankPro/Login_and_sighup/error_page.php');
				exit();
			}
		}
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $hashed_confirm_password = password_hash($confirm_password, PASSWORD_DEFAULT);

        // Insert data into the database
        $query = "INSERT INTO admins (username, password,confirmpassword) VALUES ('$username', '$hashed_password','$hashed_confirm_password')";
        if($row_data = mysqli_fetch_assoc($check_data)){
			$_SESSION['error'] = 'Usernamealready exist';
    		header('Location: /BankPro/Login_and_sighup/error_page.php');
			exit();
		}

        if (mysqli_query($conn, $query)) {
            header('Location:\BankPro/admin/admin_login.php?WELCOME  ');
			exit();
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }
}

// Close the database connection
mysqli_close($conn);
?>