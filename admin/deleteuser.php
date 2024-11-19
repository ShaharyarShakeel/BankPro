<?php
// Include your database connection file here
$localhost = 'localhost';
$username = 'root';
$password  = '';
$database_name  = 'banking';





$conn = mysqli_connect($localhost,$username,$password,$database_name);
if (!$conn) {
    die("not exit ").mysqli_error();
}

// Initialize a variable to hold the message
$message = "";

// Check if the account number is provided
if (isset($_GET['accountnumber'])) {
    $accountnumber = $_GET['accountnumber'];

    // Perform the delete operation
    $deleteQuery = "DELETE FROM banksystem WHERE accountnumber = '$accountnumber'";

    if ($conn->query($deleteQuery)) {
        $message = "User deleted successfully.";
    } else {
        $message = "Error deleting user: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .message {
            margin-top: 16px;
            color: #f00;
        }
    </style>
</head>
<body>

<form method="get" action="deleteuser.php">
    <label for="accountnumber">Account Number:</label>
    <input type="text" name="accountnumber" required>
    <button type="submit">Delete User</button>
</form>

</body>
</html>
