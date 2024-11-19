<?php
session_start();
include_once $_SERVER['DOCUMENT_ROOT']. '\BankPro/connection/conn.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DashBoard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>
<body>
	<style>
		body{
			background-image: linear-gradient(to right top, #583b29, #563437, #463243, #313344, #23323b);
			height: 120vh;	
		}
		.title {
    		font-family: 'Your Chosen Font', sans-serif; /* Replace 'Your Chosen Font' with the desired font family */
  }
	</style>
<div class="columns">
	<h1 class="title column is-offset-4-desktop pt-5 has-text-white">iBanking User's DashBoard</h1>
</div>
<div class="columns ml-4 mt-5">
	<figure class="image is-64x64 has-background-white">
		<image class="is-rounded" src="images.png"></image>
	</figure>
</div>
<div class="columns ml-4">
	<div class="card column is-5">
		<header class="card-header title pl-4 column">Account Balance</header>
		<div class="card-content">
			<p class="is-size-5 has-text-weight-semibold pr-3 pt-1">Account Name: <?php echo $_SESSION['username'];?></p>

			<?php
				$collect_from_database = "SELECT * FROM banksystem WHERE accountnumber = '". $_SESSION['accountnumber']."' ";
				$query_database = mysqli_query($conn,$collect_from_database);
				if($row_data = mysqli_fetch_assoc($query_database)){
					$_SESSION['totalamount'] = $row_data['totalamount'];
					echo "<p class='is-size-5 has-text-weight-semibold pr-3 pt-1' values='&#x24'>Total Balance: &#x24 ".$_SESSION['totalamount']."</p>";
				}
			?>

			<?php
				$collect_from_database = "SELECT * FROM banksystem WHERE accountnumber = '". $_SESSION['accountnumber']."' ";
				$query_database = mysqli_query($conn,$collect_from_database);
				if($row_data = mysqli_fetch_assoc($query_database)){
					$_SESSION['airtime'] = $row_data['airtime'];
					echo "<p class='is-size-5 has-text-weight-semibold pr-3 pt-1'>Total Airtime: ".$_SESSION['airtime']."</p>";
				}
			?>
			<p class="is-size-5 has-text-weight-semibold pr-3 pt-1">Account Number: <?php echo $_SESSION['accountnumber'];?></p>
			
		</div>
		<div>
			<form action="">
				<button class="button is-success is-size-6 ml-4" formaction="Userairtime/airtime.php">Recharge your phone</button>
				<button class="button is-success has-background-black is-size-6 ml-2" formaction="Transfer/transfer.php">Make Transfer</button>
				<button class="button is-dark is-size-6 ml-2" formaction="Transfer/transactionhistory.php">Deposit History</button>
			</form>
		</div>
	</div>
</div>
<!-- second step-->

<div class="columns ml-4">
	<div class="card mt-6">
		<header class="card-header title is-size-4">
			Profile Details
		</header>
		<div class="card-content">
			<p class="is-size-5 has-text-weight-semibold pr-3 pt-1">Account Holder: <?php echo $_SESSION['username'];?></p>
			<p class="is-size-5 has-text-weight-semibold pr-3 pt-1">BVN: <?php echo $_SESSION['bvn'];?></p>
			<p class="is-size-5 has-text-weight-semibold pr-3 pt-1">Phone Number: <?php echo $_SESSION['phonenumber'];?></p>
			<p class="is-size-5 has-text-weight-semibold pr-3 pt-1">Date of Birth: <?php echo $_SESSION['birthdate'];?></p>
		</div>
	</div>

	<div class="card mt-6 ml-6">
		<header class="card-header title is-size-4">
			Account Details
		</header>
		<div class="card-content">
			<p class="is-size-5 has-text-weight-semibold pr-3 pt-1">Balance: <?php echo $_SESSION['totalamount'];?></p>
			<p class="is-size-5 has-text-weight-semibold pr-3 pt-1">Account Type: Savings Account </p>
			<p class="is-size-5 has-text-weight-semibold pr-3 pt-1">Location: <?php echo $_SESSION['location'];?></p>
		</div>
	</div>

	<div class="card mt-6 ml-6">
		<header class="card-header title is-size-4">
			Card Details
		</header>
		<div class="card-content">
			<p class="is-size-5 has-text-weight-semibold pr-3 pt-1">Debit Card Number: <?php echo $_SESSION['debitcard'];?></p>
			<p class="is-size-5 has-text-weight-semibold pr-3 pt-1">Pin: <?php echo $_SESSION['pin'];?></p>
		</div>
	</div>
</div>
<form action="\BankPro/logout.php" method="post">
	<button class="button is-success is-outlined ml-4" name="logout" type="submit">Log out</button>
</form>











</body>
</html>