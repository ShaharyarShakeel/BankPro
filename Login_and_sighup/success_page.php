<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <title>Success</title>
    <style>
        body {
            background-image: linear-gradient(to right top, #282d34, #1c272b, #14201f, #0f1813, #0b0f02);
            height: 100vh;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .success-box {
            max-width: 400px;
            padding: 20px;
            background-color: #f5f5f5;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            color: #363636;
        }

        .success-icon {
            font-size: 3rem;
            color: #00d1b2;
            margin-bottom: 20px;
        }

        .success-message {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .back-to-home {
            display: block;
            text-decoration: none;
            color: #00d1b2;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="success-box">
        <span class="icon is-large success-icon">
            <i class="fas fa-check-circle"></i>
        </span>
        <p class="success-message">Congratulations! Transaction was successful.</p>
        <a href="/BankPro/Bankpage/ovahomepage.php" class="back-to-home">Back to Home</a>
    </div>
</body>

</html>