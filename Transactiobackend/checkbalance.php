<?php 
session_start();
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    </head>
    <body>
    	<style>
    		body{
    			background-image: linear-gradient(to right top, #051937, #001d2f, #001d1f, #001a0f, #101602);
    			height: 120vh;

    		}
    		.tops{
    			margin-top: 190px;
    		}
    	</style>
        <?php 


	include_once $_SERVER['DOCUMENT_ROOT']. '\BankPro/connection/conn.php';
if(isset($_POST['sub'])){
	$Account_number= trim(mysqli_real_escape_string($conn,$_POST['account_number']));
	$Pin  = trim(mysqli_real_escape_string($conn,$_POST['pin']));


	if(empty($Account_number)||empty($Pin)){
		$_SESSION['error'] = 'Please fill all fields';
    	header('Location: /BankPro/Login_and_sighup/error_page.php');
		exit();
	}

	else{
		$fetch_data = "SELECT * FROM banksystem WHERE accountnumber = '".$Account_number."' and pin_number = '".$Pin."' ";
		$run_query = mysqli_query($conn,$fetch_data);

		// checking if account name or account number exist 
		if(mysqli_num_rows($run_query) > 0 ){
			if($row_data = mysqli_fetch_assoc($run_query)){
				$_SESSION['totalamount'] = $row_data['totalamount'];

				echo "<div class='columns'>
						<div class = 'column is-offset-4'>
						<h1 class='tops is-size-3 has-text-weight-bold title pt-6 pl-3 has-text-success'>YOUR BALANCE IS  &#x24 ".$_SESSION['totalamount']."  </h1> 
						</div>
						</div>	 ";
			}
		}else{
				$_SESSION['error'] = 'Account Number and Pin Number does not exist';
    			header('Location: /BankPro/Login_and_sighup/error_page.php');

		}

	}
}
?>
<div class="columns mt-6">
	<div class="card has-background-success column is-offset-3 is-7">
		<a href="\BankPro/Bankpage/ovahomepage.php">back to homepage</a>
	</div>
</div>
        <script src="js/main.js"></script>
    </body>
</html>