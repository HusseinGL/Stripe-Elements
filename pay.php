<?php
include('Stripegateway.php');
$myStripe = new Stripegateway();
if(isset($_POST['btnsubmit'])){
	$data= array('number' => $_POST['cardnumber'],
				 'exp_month' => $_POST['expirymonth'],
				 'exp_year' => $_POST['expiryyear'],
				 'amount'=>($_POST['amount']*100));
	$result= $myStripe->checkout($data);
	echo "<pre>";print_r($result);
}
?>
