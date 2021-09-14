<?php 
 
include("vendor/autoload.php"); 
 
class Stripegateway {
	
	public function __construct(){
		$stripe = array(
			"secret_key" => "",
			"public_key" => ""
		);
		\Stripe\Stripe::setApiKey($stripe["secret_key"]);
	}
	
	public function checkout($data){
		$message = "";
		try{
			$mycard = array('number' => $data['number'],
							'exp_month' => $data['exp_month'],
							'exp_year' => $data['exp_year']);
			$charge = \Stripe\Charge::create(array('card'=>$mycard,
													'amount'=>$data['amount'],
													'currency'=>'usd'));

			  echo "<pre>", print_r($charge), "</pre>";

			$message = $charge->status;											
		}catch (Exception $e){
			$message = $e->getMessage();
		}	
		return $message;
	}
	
	public function update_charger($data){
		$message = "";
		try{
			//ch_1DPTekLmWhAjcIL9iUNsp72y
			$ch = \Stripe\Charge::retrieve($data["ID"]);
			$ch->description = $data["description"];
			$message =	$ch->save();
		}catch (Exception $e){
			$message = $e->getMessage();
		}	
		return $message;	
	}
	
	public function payment_detail($ID){
		$message = "";
		try{
			$ch = \Stripe\Charge::retrieve($ID);			
		$message =	$ch->capture();
		}catch (Exception $e){
			$message = $e->getMessage();
		}	
		return $message;	
	}
	
	
	
	
	
}			  