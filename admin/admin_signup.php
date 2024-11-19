    <html lang="en">
<head>
    <!-- <meta charset="UTF-8"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <title>Admin Sign up</title>
</head>
<body>
<style>
    body{
        background-image: linear-gradient(to right top, #16181a, #213243, #294f70, #336da1, #418bd5);
            min-height: 150vh;
    margin: 0 auto;
    }
      .title {
            font-family: 'Your Chosen Font', sans-serif; /* Replace 'Your Chosen Font' with the desired font family */
    }

</style>
    <div class="column is-offset-4">
        <h1 class="title has-text-white  pt-4">Sign up as Admin</h1>
    </div>
<form action="\BankPro/admin/admin_signup_backend.php" method="post">
    <div class="columns">
        <div class="column is-offset-4">
            
            <label for="" class="is-size-5 has-text-primary">Username</label><br>
            <input type="text" class="input is-outlined column is-5 " name="username"><br>
            <label for="" class="is-size-5 has-text-primary">Password</label><br>
            <input type="password" class="input is-outlined       column is-5" name="password"><br>
                <label for=""  class="is-size-5 has-text-primary">Confirm Password</label><br>
            <input type="password" class="input is-outlined    column is-5 " name="confirm_password"><br>
            
            <div class="mt-5">
                <button class="button is-primary px-6  mr-3"  name="sub" type="submit">Sign up</button>
            </div>
        </div>
    </div>
</form>
</body>
</html>