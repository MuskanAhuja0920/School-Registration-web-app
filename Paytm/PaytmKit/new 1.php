<?php require_once 'controllers/authController.php';?>
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
<body style="background-image: url('backgroundh.jpg');background-repeat: ;background-size: 100%,100%" >
  <section id="nav-bar">
      <nav class="navbar navbar-expand-lg navbar-light ">
          <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><img src="CMS-LOGO-removebg-preview.png" style="height:40px" ></a>
              <ul class=" navbar-nav navbar-right" >
              <li class="nav-item"><a class="nav-link" href="images.jpg" style="color:gray" download="brochure.jpg"><strong>Download Brochure</strong></a></li>
                  <li class="nav-item"><a href="#" style="color:gray"><strong>Your Form</strong></a></li>
                  <li class="nav-item"><a href="uploadimage.php" style="color:gray"><strong>Upload Image</strong></a></li>
                  <li class="nav-item"><a href="#" style="color:gray"><strong>Pay Online</strong></a></li>
                  <li class="nav-item"><a href="help.php" style="color:gray"><strong>Help</strong></a></li>
                  <li class="nav-item dropdown ml-auto">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:gray">
                  <strong><?php echo $_SESSION['email'];?></strong></a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="login.php?logout=1" ><strong>Log Out</strong></a>
                  </div>
                  </li>
              </ul>
          </div>
      </nav>
  </section>
<div class="space">
</div>

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

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application’s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
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
				echo 'Order ID = '.$_POST['ORDERID'] . "<br/>"; 
				echo 'Transaction ID = '.$_POST['TXNID'] . "<br/>";
				echo 'Amount = '.$_POST['TXNAMOUNT'] . "<br/>";
				echo 'Mode of Payment = '.$_POST['PAYMENTMODE'] . "<br/>";
				echo 'Currency = '.$_POST['CURRENCY'] . "<br/>";
				echo 'Transaction date = '.$_POST['TXNDATE'] . "<br/>";
				echo 'Gateway Name = '.$_POST['GATEWAYNAME'] . "<br/>";
				echo 'Bank Transaction ID = '.$_POST['BANKTXNID'] . "<br/>";
				echo 'Bank Name = '.$_POST['BANKNAME'] . "<br/>";
				echo 'Checksum = '.$_POST['CHECKSUMHASH'];
				
				
		}
	
	

}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>
</div>

</body>
</html>
























