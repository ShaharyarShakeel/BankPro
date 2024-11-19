<?php
session_start();
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
	<title>Buy Airtime</title>
</head>
<body>

<style>
	body{
		background-image: linear-gradient(to right top, #4a494f, #5c4c6a, #7c497b, #a33d7e, #cb2474);
	}
	  .title, .sub-title {
    font-family: 'Your Chosen Font', sans-serif; /* Replace 'Your Chosen Font' with the desired font family */
  }
	.tops{
			margin-top: 120px;
		}
</style>
</body>
<html>
   <style>
      h1 {text-align: center;}
   </style>
   <body>
      <big><h1 class="title has-text-white pt-2">iBanking</h1></big>
      <big><h1 class="title has-text-white pt-2">Recharge your Phone!</h1></big>
   </body>
</html>



<form action="\BankPro/Transactiobackend/airtimebackend.php" method="post">



<div class="columns">
		<div class="tops column is-offset-4">

			<label for="" class="is-size-3 has-text-white">Phone  Number</label><br>
			<input type="text" class="input is-primary  column is-5" placeholder="Phone Number" name="phone_number"><br>


			<label for="" class="is-size-3 has-text-white">Amount  </label><br>
			<input type="text" class="input is-primary column is-5" placeholder="Amount" name="amount_to_buy"><br>


			<label for="" class="is-size-3 has-text-white">Pin Number </label><br>
			<input type="password" class="input is-primary column is-5" placeholder="Pin Number" name="pin"><br>






					<button class="button is-primary is-outlined px-6 mb-5" name="submit" type="submit">Buy</button>





		</div>



















</form>

























</body>
</html>