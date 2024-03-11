@extends('layout')
<style type="text/css">
    .cntry{
        width: 100%;
        height: 40px;
        background-color: #dbd1d1;
        border: none;
        padding: 8px;
    }
    .btn {
        width: 100%;
    }

    .cnl{
        border: 1px solid #5732c6 !important;
        color: #5732c6;
    }
    .sbm {
        background-color: #5732c6 !important;
        color: white !important;

    }
</style>

@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="row">
			<div class="col-md-12" style="border-bottom: 1px solid dimgray;">
				<div class="mt-3">
					<h3 style="color: #0c266c; margin-bottom: 30px;">
						Send Money
					</h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-7">
				<div class="mt-3" style="border-bottom: 1px solid dimgray;">
					<h5 style="color:#0c266c;">
						Create new recipient,& Continue
					</h5>
					<p style="color:#0c266c; margin-bottom: 30px;">
						This information must be accurate or your transfer will be delayed.
					</p>
				</div>
				<div class="mt-5">
					<form method="php">
						<label for="country">Country</label><br>
                 		<select class="cntry">
                 			<option>Bangladesh</option>
                 			<option>Bangali</option>
                 			<option>Ghana</option>
                 			<option>China</option>
                 			<option>United Kingdom</option>
                 		</select><br>
                 		<div class="row">
                 			<div class="col-md-6">
                 				<label class="mt-3" for="name">First Name</label>
                 				<input style="width:100%;" type="name" name="Email" class="form-control" placeholder="Enter First Name" required>
                 			</div>
                 			<div class="col-md-6">
                 				<label class="mt-3" for="name">Beneficiary BIC Code</label>
                 				<input style="width:100%;" type="name" name="Email" class="form-control" placeholder="Enter BIC Code" required>
                 			</div>
                 		</div>
                 		<div class="row">
                 			<div class="col-md-6">
                 				<label class="mt-3" for="name">Phone Number</label>
                 				<input style="width:100%;" type="number" name="phonenumber" class="form-control" placeholder="Enter Phone Number" required>
                 			</div>
                 			<div class="col-md-6">
                 				<label for="country" style="margin-top: 16px;">Relationship</label><br>
                 		<select style=" width: 100%; height: 38px; border: 1px solid #d7cbcb; border-radius: 5px; ">
                 			<option>Brother</option>
                 			<option>Sister</option>
                 			<option>Mother</option>
                 			<option>Father</option>
                 		</select>
                 			</div>
                 		</div>
                 		<div class="row">
                 			<div class="col-md-6">
                 				<label class="mt-3" for="name">Beneficiary Account Name</label>
                 				<input style="width:100%;" type="name" name="name" class="form-control" placeholder="Enter Bank Name" required>
                 			</div>
                 			<div class="col-md-6">
                 				<label class="mt-3" for="name">Beneficiary Account Number</label>
                 				<input style="width:100%;" type="number" name="number" class="form-control" placeholder="Enter Account Number" required>
                 			</div>
                 		</div>
                 		<div class="row">
                 			<div class="col-md-6">
                 				<div class="mt-3">
                 					<button class="btn cnl">Cancel</button>
                 				</div>
                 			</div>
                 			<div class="col-md-6">
                 				<div class="mt-3">
                 					<button class="btn sbm">Submit</button>
                 				</div>
                 			</div>
                 		</div>
					</form>
				</div>
			</div>
			<div class="col-md-5">
				<div style="border:1px solid gray; padding:10px; border-radius:20px;" class="mt-5">
					<p style="color:#0c266c;">
						Recipients gets
					</p>
					<div style=" border-bottom: 1px solid gray;">
						<h5 style="color:#0c266c; margin-bottom: 20px;"><b>AL Arapha Islami</b></h5>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div>
								<p style="text-align: start; color:#0c266c;">You send</p>
							</div>
						</div>
						<div class="col-md-6">
							<div>
								<p style="text-align: end;color:#0c266c;"><b> 50 GBP</b></p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div>
								<p style="text-align: start; color:#0c266c;">They get</p>
							</div>
						</div>
						<div class="col-md-6">
							<div>
								<p style="text-align: end;color:#0c266c;"><b> 500 BDT</b></p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div>
								<p style="text-align: start; color:#0c266c;">Exchange rate</p>
							</div>
						</div>
						<div class="col-md-6">
							<div>
								<p style="text-align: end;color:#0c266c;"><b> 10 BDT</b></p>
							</div>
						</div>
					</div>
					<div class="row" style="border-bottom :1px solid lightblue;width: 105%; margin-left: -10px;">
						<div class="col-md-6">
							<div>
								<p style="text-align: start; color:#0c266c;">Transfer fee:</p>
							</div>
						</div>
						<div class="col-md-6">
							<div>
								<p style="text-align: end;color:#0c266c;"><b> 0 GBP</b></p>
							</div>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-md-6">
							<div>
								<p style="text-align: start; color:#0c266c;">Payout Amount:</p>
							</div>
						</div>
						<div class="col-md-6">
							<div>
								<p style="text-align: end;color:#0c266c;"><b> 500 BDT</b></p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div>
								<p style="text-align: start; color:#0c266c;">Total Due Amount</p>
							</div>
						</div>
						<div class="col-md-6">
							<div>
								<p style="text-align: end;color:#0c266c;"><b> 50 GBP</b></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>
@endsection
