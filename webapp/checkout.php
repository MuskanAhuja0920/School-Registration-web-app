<?php
session_start();
if(isset($_POST['amount'])){
	$amount=$_POST['amount'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Confirm</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
	<link rel="stylesheet"  href ="style(1).css">
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
  position: fixed;
  left: 0;
  right: 0;
  z-index: 9999;
  margin-left: 20px;
  margin-right: 20px;
  color: black;
}
.heading{ color:white}
hr.line {
  border-top: 2px solid white;
}
.form,th,td{
	background-color:white;
	border: 2px solid black
}
th {
  background-color: #33E6FF;
  color: black;
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
                    <li class="nav-item"><a href="index.php" style="color:gray"><strong>Form</strong></a></li>
                        <li class="nav-item"><a href="uploadimage.php" style="color:gray"><strong>Upload Image</strong></a></li>
                        <li class="nav-item"><a href="pay.php" style="color:gray"><strong>Pay Online</strong></a></li>
                        <li class="nav-item"><a href="help1.php" style="color:gray"><strong>Help</strong></a></li>
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
<div class="background-image"></div>
<div class="content">
<div class="heading">
<h1 align="center">Payment Details</h1>
</div>
<hr class="line">
<div class="form" align="center">
<form method="post" action="Paytm\PaytmKit\pgRedirect.php">
		<table border="1">
			<tbody>
				<tr>
					<th>S.No</th>
					<th>Label</th>
					<th>Value</th>
				</tr>
				<tr>
				<input class="form-control" required="true" type="hidden" placeholder="Email id" name="email" id="email" value="<?php echo $_SESSION['email'];?>" readonly/>
					<td>1</td>
					<td><label>PAYMENT_ID::*</label></td>
					<td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>" readonly>
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td><label>CUSTID ::*</label></td>
					<td><input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo $_SESSION['user']; ?>" readonly></td>
				</tr>
				<tr>
					<td>3</td>
					<td><label>INDUSTRY_TYPE_ID ::*</label></td>
					<td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Education" readonly></td>
				</tr>
				<tr>
					<td>4</td>
					<td><label>Channel ::*</label></td>
					<td><input id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB" readonly>
					</td>
				</tr>
				<tr>
					<td>5</td>
					<td><label>txnAmount*</label></td>
					<td><input title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="<?php echo $amount; ?>" readonly>
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input value="CheckOut" type="submit"	onclick=""></td>
				</tr>
			</tbody>
		</table>
		* - Mandatory Fields
	</form>
</div>
</div>

</body>
</html>