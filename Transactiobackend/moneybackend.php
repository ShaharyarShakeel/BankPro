<?php
session_start();

include_once $_SERVER['DOCUMENT_ROOT']. '\BankPro/connection/conn.php';


if(isset($_POST['submit'])){

	$Account_number= trim(mysqli_real_escape_string($conn,$_POST['account_number']));
	$Amount_to_send  = trim(mysqli_real_escape_string($conn,$_POST['amount_to_send']));
	$Account_name= trim(mysqli_real_escape_string($conn,$_POST['account_name']));

	if(empty($Account_number)||empty($Amount_to_send) || empty($Account_name)){
		$_SESSION['error'] = 'Please fill all fields';
    	header('Location: /BankPro/Login_and_sighup/error_page.php');
		exit();
	}

	else{
		$fetch_data = "SELECT * FROM banksystem WHERE username = '".$Account_name."' and '".$Account_number."' ";
		$run_query= mysqli_query($conn,$fetch_data);

		// checking if account name or account number exist 
		if(mysqli_num_rows($run_query) > 0 ){
			while ($row_data = mysqli_fetch_assoc($run_query)) {
				$time = date('Y-m-d');
				$_SESSION['accountnumber'] = $row_data['accountnumber'];
				$_SESSION['username'] = $row_data['username'];
				$deposit_account = "INSERT INTO money(accountnumber,amounttransfer,accountname,dates) VALUES('".$_SESSION['accountnumber']."', '".$Amount_to_send."', '".$_SESSION['username']."','".$time."' )";
				mysqli_query($conn,$deposit_account);
				// update repesent amount in the database
				$_SESSION['totalamount'] = $row_data['totalamount'];
				$update_totalamount =  "UPDATE banksystem SET totalamount = '".$Amount_to_send."' + '".$_SESSION['totalamount']."'   where username= '".$Account_name."'  ";
				mysqli_query($conn,$update_totalamount);
				header('Location: /BankPro/Login_and_sighup/success_page.php');

			}


		}else{
			echo "<h1> Account number or Account name does not exist </h1> ";
		}



	}

}
?>