<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=`, initial-scale=1">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
	<title>Check Balance</title>
</head>
<body>
    	<style>
    		body{
    			background-image: linear-gradient(to right top, #aa5c83, #7c4c78, #4f3c64, #262c4b, #051a2e);
    		}
    		  .title, .sub-title {
    font-family: 'Your Chosen Font', sans-serif; /* Replace 'Your Chosen Font' with the desired font family */
  }
    		.tops{
    			margin-top: 80px;
    		}
    	</style></body>
    		<html>
   <style>
      h1 {text-align: center;}
   </style>
   <body>
      <big><h1 class="title has-text-white pt-2">iBanking</h1></big>
      <big><h1 class="title has-text-white pt-2">Balance check!</h1></big>
   </body>
</html>

<form action="\BankPro/Transactiobackend/checkbalance.php" method="post">
	<div class="columns">
		<div class="tops column is-offset-4">
			
			<label for="" class="is-size-3 has-text-white">Account Number</label><br>
			<input type="text" class="input is-primary  column is-5" placeholder="Account Number" name="account_number"><br>
			<label for="" class="is-size-3 has-text-white">Pin Number</label><br>
			<input type="password" class="input is-primary column is-5" placeholder="Pin Number" name="pin"><br>
			<div class="mt-5">
				<button class="button is-info px-6  mr-3" type="submit" name="sub">Check Balance</button>
			</div>
		</div>
	</div>










</form>








</body>
</html>