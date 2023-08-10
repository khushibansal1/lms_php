<?php

include('conn.php');

session_start();

if(!isset($_SESSION['Student']))    

{ 
    echo "<script> location.href = '../login/form/student_login.php' </script>";

} else
{
    header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");  
    $stud_email=$_SESSION['Student'];

}
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="GENERATOR" content="Evrsoft First Page">

    <title>Checkout</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style=" width: 50vw; margin-left : 30vw;  margin-top : 10vw;">
<center> 
<div class="container">
<div class="row">
    <div class="col-sm-6 offset-sm-3 jumbotron">
        <h3 class="mb-5">Welcome to E-learning payment page</h3></br>
        <form method="post" action="../PaytmKit/pgRedirect.php" >
            <div class="form-group row">
		
				<label for="ORDER_ID" class="col-sm-4 col-form-label">ORDER_ID*</label>
                <div class="col-sm-8">
					<input id="ORDER_ID" class="form-control" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>">
                </div>
            </div>

              <div class="form-group row">
					<label for="CUST_ID" class="col-sm-4 col-form-label">Student Email*</label>
                    <div class="col-sm-8">
					<input id="CUST_ID" class="form-control" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php if(isset($stud_email)){ echo $stud_email;} ?>" readonly>
</div>
</div>

<div class="form-group row">
					<label for="TXN_AMOUNT" class="col-sm-4 col-form-label"> Amount</label>
                    <div class="col-sm-8">
					<input title="TXN_AMOUNT" value="800" class="form-control" tabindex="10" maxlength="12" size="12" name="TXN_AMOUNT" autocomplete="off" value="<?php if(isset($_POST['id'])){ echo $_POST['id'];} ?>" readonly>
</div>
</div>

<div class="form-group row">
					<!-- <label for="TXN_AMOUNT" class="col-sm-4 col-form-label"> Amount</label> -->
                    <div class="col-sm-8">
					<input type="hidden" class="form-control" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" readonly>
</div>
</div>

<div class="form-group row">
					<!-- <label for="TXN_AMOUNT" class="col-sm-4 col-form-label"> Amount</label> -->
                    <div class="col-sm-8">
					<input type="hidden" class="form-control" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off" value="WEB" readonly>
</div>
</div>

		<div class="text-center">
            
        <input value="Checkout" type="submit" class="btn btn-primary" onclick="">
        <a href="" class="btn btn-secondary">Cancel</a>
</div>
</form>
<!-- <small>Note:complete payment by clicking checkout button</small> -->
</div>
</div>

		
	</form>
</div>
</div>
</div>

</html>