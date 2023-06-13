<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('public/frontend/css/website-style.css')}}" />
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
<script type="text/javascript" src="{{asset('public/frontend/js/jquery-3.6.0.min.js')}}"></script>

<title>Booking</title>
</head>
<body style="background: #fafafa;">


<section class="full main_repair_steps01">
		<div class="full repair_steps01">
			<div class="row repair_steps01_flex">
				<div class="col-sm-2 col-xs-12">
					<input type="submit" value="Step 1">
					<i class="fal fa-chevron-right"></i>
				</div>
				<div class="col-sm-2 col-xs-12">
					<input type="submit" value="Step 2">
					<i class="fal fa-chevron-right"></i>
				</div>
				<div class="col-sm-2 col-xs-12">
					<input type="submit" value="Step 3">
					<i class="fal fa-chevron-right"></i>
				</div>
				<div class="col-sm-2 col-xs-12">
					<input type="submit" value="Step 4">
					<i class="fal fa-chevron-right"></i>
				</div>
				<div class="col-sm-2 col-xs-12">
					<input type="submit" value="Step 5">
					<i class="fal fa-chevron-right"></i>
				</div>
			</div>
		</div>
</section>


<section class="full main_bookingInfo">
	<div class="mycontainer">
		<div class="full my_bookingInfo">
			<div class="my_bookingInfo_top">
				<h2>Booking Information:</h2>
				<p>Repair Type: {{$select_repair_device->title ?? ''}}</p>
				<h2>Repair Price: {{$select_repair_device->currency ?? ''}}  {{$select_repair_device->price ?? ''}}</h2>
			</div>
			<div class="bookingInfo_form">
				<form action="{{URL::to('booking')}}" method="post">
                    @csrf
					<input type="text" required name="c_first_name" placeholder="First Name*" />
					<input type="text" required name="c_last_name" placeholder="Last Name*" />
					<input type="email" required name="c_email" placeholder="Email*" />
					<input type="text" required name="c_phone_number" placeholder="Phone*" />
					<input type="text" required placeholder="postcode" name="c_post_code" />
					<input type="text" required name="c_device_passcode" placeholder="Device Passcode*" />
					<label>Mobile Network</label>
					<select name="mobile_network" required>
						<option>Please select</option>
						<option value="Vodafone">Vodafone</option>
						<option value="O2">O2</option>
						<option value="EE/BT">EE/BT</option>
						<option value="Three">Three</option>
						<option value="Sky Mobile"> Sky Mobile</option>
						<option value="Virgin Mobile">Virgin Mobile</option>
						<option value="Giffgaff">Giffgaff</option>
						<option value="Smarty">Smarty</option>
						<option value="ID Mobile">ID Mobile</option>
						<option value="Other">Other</option>
						<option></option>
					</select>
					<div class="otherInfo1">
						<h3>Any additional information? (Optional)</h3>
						<textarea name="additional_information" rows="4" placeholder="e.g. I have an additional device to repair "></textarea>
						<div>
							<select name="special_offers" required>
								<option>Please select</option>
								<option value="NO">No</option>
								<option value="Yes">Yes</option>
							</select>
							<label>To provide further peace of mind, from time to time we like to send our loyal customers special offers, promotions & useful advice.</label>
						</div>
						<div>
							<select name="seen_web" required>
								<option>Please select</option>
								<option value="NO">No</option>
								<option value="YES">Yes</option>
							</select>
							<label>Have you seen the iSmash TV or video-on-demand campaign on Sky platforms?</label>
						</div>
						<div>
							<input type="checkbox" />
							<label> I agree to the <span>Terms & Conditions. *</span></label>
						</div>
						
					</div>
					<input type="submit" name="submit" value="Continue To Payment">

				</form>
			</div>
		</div>
	</div>
</section>






<script type="text/javascript" src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
</body>
</html>
