<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Information</title>
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
            background-image: linear-gradient(to right top, #a25d40, #a7584c, #a95459, #a75268, #a25376);
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
      <big><h1 class="title has-text-white pt-2">Account Information</h1></big>
   </body>
<?php
// Replace these values with your actual database credentials
// Replace these values with your actual database connection details
$localhost = 'localhost';
$username = 'root';
$password  = '';
$database_name  = 'banking';





$conn = mysqli_connect($localhost,$username,$password,$database_name);
if (!$conn) {
    die("not exit ").mysqli_error();
}

// SQL query to retrieve data from the 'deposits' table
$sql = "SELECT * FROM banksystem";
$result = $conn->query($sql);

if (!$result) {
    // If there's an error with the query, display the error message
    die("Error in query: " . mysqli_error($conn));
}

if (mysqli_num_rows($result) > 0) {
    echo "<table>
            <tr>
                <th>User Name</th>
                <th>Account Number</th>
                <th>Email</th>
                <th>Total Amount</th>
                <th>Phone Number</th>
                <th>User Bank ID</th>
                <th>Date of Birth</th>
                <th>Location</th>
            </tr>";

    // Output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . $row["username"] . "</td>
                <td>" . $row["accountnumber"] . "</td>
                <td>" . $row["emaill"] . "</td>
                <td>" . $row["totalamount"] . "</td>
                <td>" . $row["phonenumber"] . "</td>
                <td>" . $row["userbank_id"] . "</td>
                <td>" . $row["birthdate"] . "</td>
                <td>" . $row["location"] . "</td>
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
