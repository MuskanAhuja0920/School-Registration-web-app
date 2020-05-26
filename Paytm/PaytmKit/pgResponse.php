<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
<style>
.background-image {
  position: fixed;
  left: 0;
  right: 0;
  z-index: 1;
  display: block;
  background-image: url('backgroundh.jpg');
  width: 1500px;
  height: 1000px;
  -webkit-filter: blur(5px);
  -moz-filter: blur(5px);
  -o-filter: blur(5px);
  -ms-filter: blur(5px);
  filter: blur(5px);
}
.content {
  font-size: 125%;
  position: fixed;
  left: 0;
  right: 0;
  z-index: 9999;
  margin-left: 20px;
  margin-right: 20px;
  color: white;
  border: 2px solid white
  
}
.heading{ 
 position: fixed;
  left: 0;
  right: 0;
  z-index: 9999;
  margin-left: 20px;
  margin-right: 20px;
  color: white;
}

</style>
</head>
<body>

<div class="background-image"></div>
<div class="heading">
<h1 align="center">Transaction Details</h1>
</div>

<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");


$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo "<h1 align='center'>Transaction status is success</h1>" . "<br/>";	

		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
	}
	else {
		echo "<b>Transaction status is failure</b>" . "<br/>";
	}
	
echo '<div class="content">';
	if (isset($_POST['ORDERID'],$_POST['TXNID'],$_POST['TXNAMOUNT'],$_POST['PAYMENTMODE'],$_POST['CURRENCY'],$_POST['TXNDATE'],$_POST['GATEWAYNAME'],$_POST['BANKTXNID'],$_POST['BANKNAME'],$_POST['CHECKSUMHASH']) )
	{ 
    //echo 'Email = '.$_POST['email'] . "<br/>"; 
				echo 'Order ID = '.$_POST['ORDERID'] . "<br/>"; 
				echo 'Transaction ID = '.$_POST['TXNID'] . "<br/>";
				echo 'Amount = '.$_POST['TXNAMOUNT'] . "<br/>";
				echo 'Mode of Payment = '.$_POST['PAYMENTMODE'] . "<br/>";
				echo 'Currency = '.$_POST['CURRENCY'] . "<br/>";
				echo 'Transaction date = '.$_POST['TXNDATE'] . "<br/>";
				echo 'Gateway Name = '.$_POST['GATEWAYNAME'] . "<br/>";
				echo 'Bank Transaction ID = '.$_POST['BANKTXNID'] . "<br/>";
				echo 'Bank Name = '.$_POST['BANKNAME'] . "<br/>";
				echo 'Checksum = '.$_POST['CHECKSUMHASH'] . "<br/>";
        
				
    }
  
   
	
	

	
		// Create connection
$conn = mysqli_connect("localhost", "root", "", "userverification","3307");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//$email=$_POST['email'];
$order_id = $_POST['ORDERID'];
$tran_id = $_POST['TXNID'];
$tran_amt = $_POST['TXNAMOUNT'];
$mode = $_POST['PAYMENTMODE'];
$currency = $_POST['CURRENCY'];
$tran_date = $_POST['TXNDATE'];
$gateway = $_POST['GATEWAYNAME'];
$btran_id = $_POST['BANKTXNID'];
$b_name = $_POST['BANKNAME'];
$checksum = $_POST['CHECKSUMHASH'];

$sql = " INSERT INTO payment_details (Order_ID, Transaction_ID, Amount, Mode_of_payment, Currency, Transaction_date,Gateway_name, Bank_transaction_ID, Bank_name, Checksum)
VALUES ('$order_id','$tran_id','$tran_amt','$mode','$currency','$tran_date','$gateway','$btran_id','$b_name','$checksum')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>
<div align="middle"><br><br><br>
        <input type="submit" name="finish" value="FINISH" class="btn btn-primary" onclick="window.location.href ='http://localhost/webapp/terminate.php';">
</div>
<br>
</div>

</body>
</html>