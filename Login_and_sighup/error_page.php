<?php
session_start();

// Check if an error message is set in the session
if (isset($_SESSION['error'])) {
    $error_message = htmlspecialchars($_SESSION['error']);
    unset($_SESSION['error']); // Clear the session variable after retrieving the error message
} else {
    $error_message = 'An unknown error occurred.';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .error-container {
            text-align: center;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #e44d26;
        }

        p {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <h1>Error Alert!</h1>
        <p><?php echo $error_message; ?></p>
        <!-- You can customize the appearance of the error message here -->
    </div>
</body>
</html>
