<?php
include('Stripegateway.php');
$myStripe = new Stripegateway();
// contoh panggil yg edit
$data=["ID"=>"ch_1DPTekLmWhAjcIL9iUNsp72y",
	   "description"=>"Belanja barang"];
$result = $myStripe->update_charger($data);
echo "<pre>";print_r($result);

echo "<h1> contoh panggil payment detail</h1>";
$detail = $myStripe->payment_detail("ch_1DPTekLmWhAjcIL9iUNsp72y");
echo "<pre>";print_r($detail);
?>
