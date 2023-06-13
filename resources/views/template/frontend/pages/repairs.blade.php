<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('public/frontend/css/website-style.css')}}" />
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
<script type="text/javascript" src="{{asset('public/frontend/js/jquery-3.6.0.min.js')}}"></script>

<title>Repairs</title>
<style>

    .custom_btn{
        width:300px;
        display: block;
    font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen-Sans, Ubuntu, Cantarell, Helvetica Neue, sans-serif;
    margin: 0 auto;
    font-weight: 700;
    font-size: 14px;
    padding: 8px 20px;
    background: #ff148b;
    border-radius: 6px;
    color: #fff;
    margin-top: 16px;
    }
	#map {
    position: relative;
    overflow: hidden;
    width: 100%;
    height: 100%;
}

.title {
    position: absolute;
    font-size: 88px;
    color: #333;
    text-transform: uppercase;
    z-index: 100;
    font-weight: bold;
    top: 100px;
    left: 100px;
}
</style>
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


<section class="full choose_your_repair_main">
	<div class="mycontainer">
		<div class="full choose_your_repair">
			<h2>Please choose your repair service</h2>
			<div class="your_repair_tabs row">
				<div class="col-md-6">
					<div class="your_repair_tabs1">
						<span><i class="fas fa-map-marker-alt"></i></span>
						<p>Visit Us In Store</p>
						<h4>38 Locations Nationwide</h4>
					</div>
				</div>
				<div class="col-md-6">
					<div class="your_repair_tabs2">
						<span><i class="fas fa-envelope"></i></span>
						<p>Mail-in Your Device</p>
						<h4>UK-wide:<br> 7 business days</h4>
					</div>
				</div>
			</div>
				<div class="repair_tabs1_clickshow">
					<h2>Enter your email to receive a booking confirmation</h2>
					<form>
						<input type="text" id="get_email" name="email" placeholder="Email" autocomplete="true" />
						<!-- <input type="submit" id="proceed_to_store" value="Proceed to choose a store" /> -->
                        <a href="javascript:;" class="custom_btn" id="proceed_to_store">Proceed to choose a store</a>
                      
					</form>
					<hr>
				</div>


				<div class="repair_tabs2_clickshow">
					<p>Thank you for selecting our mail-in repair service. This is our most widely accessible service and ideal for customers who do not live near one of our service centres.</p>
					<h3>What's the process?</h3>
					<p>Within 1-2 business days of receiving your order, we will send you a mail-in pack which you will need to drop into your local post office. Once we receive your device, we will diagnose the issue, complete the repair, and mail your device back to you.</p>
					<h3>How long will it take?</h3>
					<p>Usually, your device will be returned to you within 2-3 business days from the point we receive your device at our central service centre. In certain circumstances, depending on the nature of the issue and parts availability, your repair may take longer than this. In these circumstances we will contact you so that you remain up to date on how your repair is progressing.</p>
<form action="{{URL::to('proceed_store_post_pack')}}" method="post">
	@csrf
	<input type="hidden" name="post_in_pack" value="{{$post_in_pack_price ?? ''}}">
					<button type="submit" name="submit" class="post_pack1" style="margin-bottom: 100px;">
						<span><i class="fas fa-envelope"></i></span>
						<h4>Post-In Pack</h4>
						<p>Royal Mail Special Delivery for maximum speed and security</p>
						<h2>GBP {{$post_in_pack_price ?? ''}}</h2>
</button>

				</div>
</form>

		</div>
	</div>
</section>

<section class="full main_map_content">
	<div class="mycontainer">
		<div class="full mapWithContent">
			<h2>Enter your postcode or select from our lists of London and UK wide stores</h2>
			<div class="row">
				<div class="col-md-5">
				<form>
					<input type="text" name="pcode" placeholder="Postcode..." />
					<select>
						<option>10 miles</option>
						<option>15 miles</option>
						<option>20 miles</option>
						<option>30 miles</option>
						<option>40 miles</option>
						<option>50 miles</option>
						<option>75 miles</option>
						<option>100 miles</option>
						<option>200 miles</option>
					</select>
					<input type="submit" value="Search" name="">
				</form>

				<div class="our_store_location">
					<h3>Our Stores</h3>
					<div class="our_store_items">
						<div class="mystore_item">
							<div class="row">
								<div class="col-md-7">
									<h4>Bank Station</h4>
									<p>Parts in stock | Repair immediately</p>
								</div>
								<div class="col-md-5">
									<button>View Details</button>
								</div>
							</div>
							<div class="address_opening">
								<div class="row">
									<div class="">
										<span>Address</span>
										<p>Kiosk in the Ticket Hall, Bank Station, London, EC3V3LA</p>
									</div>
									<div class="">
										<span>Opening Times</span>
										<p>Mon to Fri: 08:00-17:00<br>Sat: Closed<br>Sun: Closed</p>
									</div>
									<button>Select This Store</button>
								</div>
							</div>
						</div>
						<div class="mystore_item">
							<div class="row">
								<div class="col-md-7">
									<h4>Bank Station</h4>
									<p>Parts in stock | Repair immediately</p>
								</div>
								<div class="col-md-5">
									<button>View Details</button>
								</div>
							</div>
							<div class="address_opening">
								<div class="row">
									<div class="">
										<span>Address</span>
										<p>Kiosk in the Ticket Hall, Bank Station, London, EC3V3LA</p>
									</div>
									<div class="">
										<span>Opening Times</span>
										<p>Mon to Fri: 08:00-17:00<br>Sat: Closed<br>Sun: Closed</p>
									</div>
									<button>Select This Store</button>
								</div>
							</div>
						</div>
						<div class="mystore_item">
							<div class="row">
								<div class="col-md-7">
									<h4>Bank Station</h4>
									<p>Parts in stock | Repair immediately</p>
								</div>
								<div class="col-md-5">
									<button>View Details</button>
								</div>
							</div>
							<div class="address_opening">
								<div class="row">
									<div class="">
										<span>Address</span>
										<p>Kiosk in the Ticket Hall, Bank Station, London, EC3V3LA</p>
									</div>
									<div class="">
										<span>Opening Times</span>
										<p>Mon to Fri: 08:00-17:00<br>Sat: Closed<br>Sun: Closed</p>
									</div>
									<button>Select This Store</button>
								</div>
							</div>
						</div>
						<div class="mystore_item">
							<div class="row">
								<div class="col-md-7">
									<h4>Bank Station</h4>
									<p>Parts in stock | Repair immediately</p>
								</div>
								<div class="col-md-5">
									<button>View Details</button>
								</div>
							</div>
							<div class="address_opening">
								<div class="row">
									<div class="">
										<span>Address</span>
										<p>Kiosk in the Ticket Hall, Bank Station, London, EC3V3LA</p>
									</div>
									<div class="">
										<span>Opening Times</span>
										<p>Mon to Fri: 08:00-17:00<br>Sat: Closed<br>Sun: Closed</p>
									</div>
									<button>Select This Store</button>
								</div>
							</div>
						</div>
						<div class="mystore_item">
							<div class="row">
								<div class="col-md-7">
									<h4>Bank Station</h4>
									<p>Parts in stock | Repair immediately</p>
								</div>
								<div class="col-md-5">
									<button>View Details</button>
								</div>
							</div>
							<div class="address_opening">
								<div class="row">
									<div class="">
										<span>Address</span>
										<p>Kiosk in the Ticket Hall, Bank Station, London, EC3V3LA</p>
									</div>
									<div class="">
										<span>Opening Times</span>
										<p>Mon to Fri: 08:00-17:00<br>Sat: Closed<br>Sun: Closed</p>
									</div>
									<button>Select This Store</button>
								</div>
							</div>
						</div>
						<div class="mystore_item">
							<div class="row">
								<div class="col-md-7">
									<h4>Bank Station</h4>
									<p>Parts in stock | Repair immediately</p>
								</div>
								<div class="col-md-5">
									<button>View Details</button>
								</div>
							</div>
							<div class="address_opening">
								<div class="row">
									<div class="">
										<span>Address</span>
										<p>Kiosk in the Ticket Hall, Bank Station, London, EC3V3LA</p>
									</div>
									<div class="">
										<span>Opening Times</span>
										<p>Mon to Fri: 08:00-17:00<br>Sat: Closed<br>Sun: Closed</p>
									</div>
									<button>Select This Store</button>
								</div>
							</div>
						</div>
						<div class="mystore_item">
							<div class="row">
								<div class="col-md-7">
									<h4>Bank Station</h4>
									<p>Parts in stock | Repair immediately</p>
								</div>
								<div class="col-md-5">
									<button>View Details</button>
								</div>
							</div>
							<div class="address_opening">
								<div class="row">
									<div class="">
										<span>Address</span>
										<p>Kiosk in the Ticket Hall, Bank Station, London, EC3V3LA</p>
									</div>
									<div class="">
										<span>Opening Times</span>
										<p>Mon to Fri: 08:00-17:00<br>Sat: Closed<br>Sun: Closed</p>
									</div>
									<button>Select This Store</button>
								</div>
							</div>
						</div>
						<div class="mystore_item">
							<div class="row">
								<div class="col-md-7">
									<h4>Bank Station</h4>
									<p>Parts in stock | Repair immediately</p>
								</div>
								<div class="col-md-5">
									<button>View Details</button>
								</div>
							</div>
							<div class="address_opening">
								<div class="row">
									<div class="">
										<span>Address</span>
										<p>Kiosk in the Ticket Hall, Bank Station, London, EC3V3LA</p>
									</div>
									<div class="">
										<span>Opening Times</span>
										<p>Mon to Fri: 08:00-17:00<br>Sat: Closed<br>Sun: Closed</p>
									</div>
									<button>Select This Store</button>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-md-7">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158858.659152703!2d-0.3886634397647109!3d51.52850500529439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2s!4v1677761180679!5m2!1sen!2s" 
				 style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			</div>
			
		</div>
	</div>
</section>
<!-- <div id="map"></div> -->
<section class="full main_repair_summary01">
	<div class="mycontainer">
		<div class="full repair_summary01">
			<div class="repair_summary01_item">
				<h3>Repair type:</h3>
				<h2>iPhone 11 Pro LCD Screen Replacement - Black</h2>
			</div>
			<div class="repair_summary01_item">
				<h3>Price</h3>
				<h2>£149</h2>
			</div>
			<div class="repair_summary01_item">
				<h3>Time:</h3>
				<h2>Up to 60 minutes</h2>
			</div>
		</div>
	</div>
</section>



<!-- <script src="{{asset('public/frontend/mapjs/store-data.js')}}"></script>
    <script src="{{asset('public/frontend/mapjs/index.js')}}"></script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBImeeitkm-wI-p8SfcYAjy5UyEpb5ciVA&callback=initMap">
    </script> -->

<script>

$(document).ready(function(){
	$(".mystore_item").click(function(){
		$(this).find(".address_opening").slideToggle();	
	})
})

$(".custom_btn").click(function(){
	$(".main_map_content").show();
})


	$(document).ready(function(){
		$(".your_repair_tabs1").click(function(){
			$(".repair_tabs1_clickshow").slideToggle();
		})

		$(".your_repair_tabs2").click(function(){
			$(".repair_tabs2_clickshow").slideToggle();
		});
	})


    $("#proceed_to_store").click(function(){

        var email = $('#get_email').val();
        //console.log(email);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{ url('proceed_store') }}",
            method: 'post',
            data: {
                "_token": "{{ csrf_token() }}",
                "email": email,
            },
            success: function(result){
                console.log(result);
              
            },
            error:function(error){
                console.log(error);
            }
        });

})
    
</script>

<script type="text/javascript" src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
</body>
</html>
