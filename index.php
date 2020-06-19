<?php 
	define('TITLE', 'SMS');
	include("header.php"); 
?>


		<div class="container-fluid">
			<div class="row">
				<div class="col-md-5 p-3 text-white shadow-lg" style="background-color: rgba(0,0,0,0.4); margin:100px auto; border-radius: 50px;">
					<form method="post" action="result.php">
						<div class="form-group">
							<label><strong>Select Standard</strong></label>
							<select name="standard" class="form-control">
								<option value="">seletc standard</option>
								<option value="5">5th</option>
								<option value="6">6th</option>
								<option value="7">7th</option>
								<option value="8">8th</option>
								<option value="9">9th</option>
								<option value="10">10th</option>
							</select>
						</div>
						<div class="form-group">
							<label><strong>Enter Roll</strong></label>
							<input type="text" name="roll" class="form-control">
						</div>
						<div class="form-group">
							<input type="submit" name="submit" value="Result" class="btn btn-danger btn-block mt-5">
						</div>
					</form>
				</div>
			</div>
		</div>

<?php include("footer.php"); ?>