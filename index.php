
						<form action="pay.php" method="post" class="form-horizontal">
							<div class="form-group">
								<label class="control-label col-md-3">Card Number</label>
								<input type="text" size="20" autocomplete="off" name="cardnumber" value="4242424242424242"  />
							</div>							
							<div class="form-group">
								<label class="control-label col-md-3">Expiration (MM/YYYY)</label>
								<input type="text" size="2" name="expirymonth" value="8" />
								<span> / </span>
								<input type="text" size="4" name="expiryyear" value="2019" />
							</div>
							<div class="form-group">
								<label class="control-label col-md-3">Amount</label>							
								<input type="text" size="4" name="amount" />
							</div>
							<button type="submit" name="btnsubmit" class="btn btn-primary">Submit Payment</button>
						</form>	
					