<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`, initial-scale=1">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <title>Log in </title>
</head>
<body>
    <style>
        body{
            background-image: linear-gradient(to right top, #554755, #4a5267, #355e6f, #2e6966, #4a6f52);
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
      <big><h1 class="title has-text-white pt-2">Log in as admin</h1></big>
   </body>
</html>
<form action="\BankPro/admin/admin_login_backend.php" method="post">
    <div class="columns">
        <div class="tops column is-offset-4">
            
            <label for="" class="is-size-3 has-text-white">Username</label><br>
            <input type="text" class="input is-primary  column is-5" placeholder="Username or Emaill" name="username"><br>
            <label for="" class="is-size-3 has-text-white">Password</label><br>
            <input type="password" class="input is-primary column is-5" placeholder=" Password" name="password"><br>
            <div class="mt-5">
                <button class="button is-primary px-6  mr-3" type="submit" name="sub">Login </button>
            </div>
        </div>
    </div>
</form>
</body>
</html>