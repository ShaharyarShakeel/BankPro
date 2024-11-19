<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposit History</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            background-color: #4CA;
            color: black;
            padding: 10px;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2;
        }
    </style>
</head>
<body>
    <style>
        body{
            background-image: linear-gradient(to right top, #9184a0, #8584a3, #7684a5, #6585a5, #5385a2);
        }
        .tops{
            margin-top: 120px;
        }
        .title {
            font-family: 'Your Chosen Font', sans-serif; /* Replace 'Your Chosen Font' with the desired font family */
        }
    </style>
    <html>
   <style>
      h1 {text-align: center;}
   </style>
   <body>
      <big><h1 class="title has-text-white pt-2">Deposit History</h1></big>
   </body>

<?php
// Assuming you have a session or some way to identify the logged-in user
// Replace 'your_user_id_session_key' with the key you use to store the user ID in the session
session_start();
$accountnumber = $_SESSION['accountnumber'];

// Replace these values with your actual database connection details
$localhost = 'localhost';
$username = 'root';
$password  = '';
$database_name  = 'banking';





$conn = mysqli_connect($localhost,$username,$password,$database_name);
if (!$conn) {
    die("not exit ").mysqli_error();
}

// Assuming your deposit table is named 'deposits'
// Adjust the WHERE clause to filter by the logged-in user's ID
$sql = "SELECT * FROM deposit WHERE accountnumber = $accountnumber";
$result = mysqli_query($conn, $sql);

if (!$result) {
    // If there's an error with the query, display the error message
    die("Error in query: " . mysqli_error($conn));
}

if (mysqli_num_rows($result) > 0) {
    echo "<table>
            <tr>
                <th>Account Number</th>
                <th>Amount Deposit</th>
                <th>Account Owner</th>
                <th>Depositor Name</th>
                <th>Date</th>
            </tr>";

    // Output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . $row["accountnumber"] . "</td>
                <td>" . $row["amountdeposit"] . "</td>
                <td>" . $row["accountowner"] . "</td>
                <td>" . $row["depositorname"] . "</td>
                <td>" . $row["dates"] . "</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

</body>
</html>
