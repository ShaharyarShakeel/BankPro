<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
	<title>Home Page</title>
</head>
<body>
<style>
	body{
		background-image: linear-gradient(to right top, #1b1a21, #172028, #11262c, #122c29, #1e3022);		
		height: 120vh;
	}
	.ova{
		margin-top: 120px;
	}
	
</style>
<nav class="navbar has-background-primary-dark" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="\BankPro/Bankpage/ovahomepage.php">
      <img src="data:image/png;base64,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" alt="logo" width="200" height="600">
    </a>
    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>
   <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary" href="\BankPro/Login_and_sighup/sighup.php">
            <strong>Sign up</strong>
          </a>
          <a class="button is-light" href="\BankPro/Login_and_sighup/login.php">
            Log in
          </a>
          <a class="button is-Dark" href="\BankPro/admin/index.php">
            Admin
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>
<html>
   <style>
      h1 {text-align: center;}
   </style>
   <body>
      <big><h1 class="card has-background-primary-light sub-title"><strong>Welcome to iBanking - Where Your Financial Journey Begins!</strong></h1></big>
      <big><h1 class="card has-background-primary-light sub-title"><strong>Home Page</strong></h1></big>
   </body>
</html>

<div class="container">
    <div class="ova columns">

        <!-- First Column -->
        <div class="column ml-6 mt-2">    
            <div class="card">
                <header class="card-header title">MOVING FUNDS LIKE SPEED</header>
                <div class="card-content">
                    <p>
                        "Step into a refined banking experience at iBanking, where precision meets personalized financial services. Our platform seamlessly combines cutting-edge technology with a commitment to excellence, ensuring a secure and effortless banking journey. Count on iBanking for a sophisticated and reliable financial partner, offering the tools and support to elevate your financial aspirations."
                    </p>
                </div>
                <form action="">
                    <button class="button is-success is-outlined ml-4" formaction="\BankPro/Transaction/checkbalance.php">Check Balance</button>
                    <button class="button is-info" formaction="\BankPro/Transaction/buyairtime.php">Recharge Phone</button>
                    <button class="button is-info has-background-black mb-5" formaction="\BankPro/Transaction/deposit.php">Deposit</button>
                </form>
            </div>
        </div>

        <!-- Second Column -->
        <div class="column mr-6 mt-2">
            <div class="card ml-6">
                <header class="card-header title">LEARN MORE</header>
                <div class="card-content">
                    <p>
                        Welcome to iBanking Customer Care, where your satisfaction is our priority. We are dedicated to providing you with the support and assistance you need to make your banking experience seamless and enjoyable.
                    </p>
                </div>
                <form action="">
                    <button class="button is-outlined is-inverted ml-4" formaction="\BankPro/LearnMore/customercare.php">Customer care</button>
                    <button class="button is-success mb-5" formaction="\BankPro/LearnMore/knowmore.php">Know more</button>
                </form>
            </div>
        </div>

    </div>
</div>		
</body>
</html>