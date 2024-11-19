<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;

        }

        header {
            background-color: MediumSeaGreen;
            color: #fff;
            padding: 20px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            margin: 10px;
            cursor: pointer;
            background-color: darkslategray;
            color: #fff;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

    </style>
</head>
<body>

    <header>
        <h1>Welcome Admin!</h1>
    </header>

    <button onclick="window.location.href=' deleteuser.php'">Delete Users</button>
    <button onclick="window.location.href=' seetransaction.php'">See Transactions </button>
    <button onclick="window.location.href=' accinfo.php'">User's Account Information </button>
    <form action="\BankPro/logout.php" method="post">
    <button class="button is-success is-outlined ml-4" name="logout" type="submit">Log out</button>
</form>

</body>
</html>
