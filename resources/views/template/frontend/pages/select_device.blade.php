<?php
 //print_r($select_device['id']);die();

?>

@extends('template/frontend/layout/default')
 @section('content')

     




 <section class="full main_steps_top">
	<div class="">
		<div class="full steps_top">
			<ul>
				<li>1 Select device <i class="fas fa-chevron-right"></i></li>
				<li>2 Select repair <i class="fas fa-chevron-right"></i></li>
				<li>3 Select store <i class="fas fa-chevron-right"></i></li>
				<li>4 Select date <i class="fas fa-chevron-right"></i></li>
				<li>5 Book repair</li>
			</ul>
		</div>
	</div>
</section>

<section class="full page_content_main01">
	<div class="mycontainer">
		<div class="full page_content_01">
			<h2>{{$select_device['name'] ?? ''}}</h2>
			<div class="content_hide_&_show">
				<p>{{$select_device['sub_mobile_description'] ?? ''}}
					<span id="text_hide_show">
						 No matter how little the crack on your screen is, the complete screen will need to be replaced and you will only need to wait around 30 minutes for this to be repaired.
						No matter how little the crack on your screen is, the complete screen will need to be replaced and you will only need to wait around 30 minutes for this to be repaired.
						<br><br>
If it is an iPhone 11 Pro replacement battery service that you need we can replace it in as little as 30 minutes. You may need an iPhone battery replacement if your device is running a little slower than usual, if it has a low battery life or if it has stopped charging altogether. If this sounds like your situation then book a repair appointment at you nearest iSmash store today.
					</span>
					<button class="hide_toggle">Read More +</button>
				</p>
			</div>
		</div>
	</div>
</section>


<scction class="full my_tabs_main">
	<div class="mycontainer">

	<ul class="tabs">
        <?php
        if(isset($select_device['sub_mobile_front_screen']))
        {
        ?>
		<li class="tab-link current" data-tab="tab-1"><img src="{{asset('public/frontend/images/Group_1491.png')}}" alt="" />
		<p>Front<br> Screen</p>
    </li>
    <?php
        }
        ?>
         <?php
        if(isset($select_device['sub_mobile_front_back_cover']))
        {
        ?>
		<li class="tab-link" data-tab="tab-2"><img src="{{asset('public/frontend/images/Group_1492.png')}}" alt="" />
			<p>Back<br> Cover</p>
		</li>
        <?php
        }
        ?>
        <?php
        if(isset($select_device['sub_mobile_battery_charging']))
        {
        ?>
		<li class="tab-link" data-tab="tab-3"><img src="{{asset('public/frontend/images/Group_1493.png')}}" alt="" />
		<p>Battery <br>& charging</p>
    </li>
        <?php
        }
        ?>
        <?php
        if(isset($select_device['sub_mobile_camera_front_rear']))
        {
        ?>
		<li class="tab-link" data-tab="tab-4"><img src="{{asset('public/frontend/images/Group_1494.png')}}" alt="" />
		<p>Camera<br> (front or rear)</p>
    </li>
    <?php
        }
        ?>
    <?php
        if(isset($select_device['sub_mobile_custom']))
        {
        ?>
		<li class="tab-link" data-tab="tab-5"><img src="{{asset('public/frontend/images/Group_1497.png')}}" alt="" />
		<p>I don't<br>
know</p>
</li>
<?php
        }
        ?>

	</ul>

    <?php
        if(isset($select_device['sub_mobile_front_screen']))
        {
            $sub_mobile_front_screen=$select_device['sub_mobile_front_screen'];
$front_screen=json_decode($sub_mobile_front_screen);
        ?>
	<div id="tab-1" class="tab-content current">
		<div class="tab1_content">
			<div class="row">
				<div class="col-md-6">
				<img src="{{asset('public/frontend/images/front_screen.png')}}" alt="" />
			<h2>{{$front_screen->title}}</h2>
			<ul>
				<li class="tooltip01_main">Screen Type 
					<div class="tooltip01_inner">
						<svg class="tooltip01" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
							<path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg>
							<div class="show_tooltip01">
								<p>If your iPhone 11 Pro is damaged whether it is a broken screen, cracked camera or if you need an iPhone 11 Pro battery replacement. We understand that you would want this repaired in no time so you can go back to enjoying the great features of the iPhone 11 Pro... Read More +</p>
							</div>
					</div>
				</li>
				<li class="tooltip01_main">True Tone Colour 
					<div class="tooltip01_inner">
						<svg class="tooltip01" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
							<path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg>
							<div class="show_tooltip01">
								<p>If your iPhone 11 Pro is damaged whether it is a broken screen, cracked camera or if you need an iPhone 11 Pro battery replacement. We understand that you would want this repaired in no time so you can go back to enjoying the great features of the iPhone 11 Pro... Read More +</p>
							</div>
					</div>
				</li>
				<li class="tooltip01_main">Warranty Period
					<div class="tooltip01_inner">
						<svg class="tooltip01" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
							<path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg>
							<div class="show_tooltip01">
								<p>If your iPhone 11 Pro is damaged whether it is a broken screen, cracked camera or if you need an iPhone 11 Pro battery replacement. We understand that you would want this repaired in no time so you can go back to enjoying the great features of the iPhone 11 Pro... Read More +</p>
							</div>
					</div>
				</li>
				<li class="tooltip01_main">Important Display Message
					<div class="tooltip01_inner">
						<svg class="tooltip01" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
							<path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg>
							<div class="show_tooltip01">
								<p>If your iPhone 11 Pro is damaged whether it is a broken screen, cracked camera or if you need an iPhone 11 Pro battery replacement. We understand that you would want this repaired in no time so you can go back to enjoying the great features of the iPhone 11 Pro... Read More +</p>
							</div>
					</div>
				</li>
				<li class="tooltip01_main">Repair Time
					<div class="tooltip01_inner">
						<svg class="tooltip01" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
							<path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg>
							<div class="show_tooltip01">
								<p>If your iPhone 11 Pro is damaged whether it is a broken screen, cracked camera or if you need an iPhone 11 Pro battery replacement. We understand that you would want this repaired in no time so you can go back to enjoying the great features of the iPhone 11 Pro... Read More +</p>
							</div>
					</div>
				</li>
				
			</ul>
			</div>


		<div class="col-md-6">
				<img class="full" src="{{asset('public/frontend/images/logo-blue.png')}}" alt="" />
				<h2><br/> </h2>
				<h3>{{$front_screen->currency}}  {{$front_screen->price ?? ''}}</h3>
				<ul style="margin-top: 56%;">
				<li class="tooltip01_main">
				{{$front_screen->screen_type}}
					
				</li>
				<li class="tooltip01_main">
				{{$front_screen->true_tone_colour}}
					
				</li>
				<li class="tooltip01_main">
				{{$front_screen->warranty_period}}
					
				</li>
				<li class="tooltip01_main">
				{{$front_screen->imp_message ?? 'important message'}}
					
				</li>
				<li class="tooltip01_main">
					{{$front_screen->repair_time}}
					
				</li>


				
			</ul>

				
			</div>
			<div class="col-md-6">
			</div>
			<div class="col-md-6" style="text-align: -webkit-center;margin-top: 40px;">

		<?php
			$slug='front_screen';
		?>
<form method="post" action="{{URL::to('book/repair')}}/{{$slug}}" style="width:200px;">
@csrf
<input type="hidden" name="mbl_name" value='<?php print_r($select_device['name']);  ?>' >
<input type="hidden" name="front_screen_details" value='<?php print_r($sub_mobile_front_screen);  ?>' >


<select class="form-control" name="slc_color">
<option value="not_selected">Select Color</option>
<option value="Selver">Selver</option>
<option value="Space Gray">Space Gray</option>
<option value="midnight Green">midnight Green</option>
<option value="Gold">Gold</option>
</select>

<input type="submit" name="submit" value="Book Repair">
</form>




</div>
			</div>
		</div>
		
		

	</div>
    <?php
        }
        ?>
         <?php
        if(isset($select_device['sub_mobile_front_back_cover']))
        {
			$sub_mobile_front_back_cover=$select_device['sub_mobile_front_back_cover'];
			$sub_mobile_front_back_cover=json_decode($sub_mobile_front_back_cover);
        ?>
	<div id="tab-2" class="tab-content">
			<div class="tab1_content">
			<div class="row">
				<div class="col-md-6">
				<img src="{{asset('public/frontend/images/back_screen.png')}}" alt="" />
			<h2>{{$sub_mobile_front_back_cover->title}}<br/> Replacement</h2>
			<ul>
				<li class="tooltip01_main">Saving VS Apple store 
					<div class="tooltip01_inner">
						<svg class="tooltip01" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
							<path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg>
							<div class="show_tooltip01">
								<p>If your iPhone 11 Pro is damaged whether it is a broken screen, cracked camera or if you need an iPhone 11 Pro battery replacement. We understand that you would want this repaired in no time so you can go back to enjoying the great features of the iPhone 11 Pro... Read More +</p>
							</div>
					</div>
				</li>
				<li class="tooltip01_main">Apple Logo  
					<div class="tooltip01_inner">
						<svg class="tooltip01" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
							<path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg>
							<div class="show_tooltip01">
								<p>If your iPhone 11 Pro is damaged whether it is a broken screen, cracked camera or if you need an iPhone 11 Pro battery replacement. We understand that you would want this repaired in no time so you can go back to enjoying the great features of the iPhone 11 Pro... Read More +</p>
							</div>
					</div>
				</li>
				<li class="tooltip01_main">Genuine Apple part 
					<div class="tooltip01_inner">
						<svg class="tooltip01" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
							<path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg>
							<div class="show_tooltip01">
								<p>If your iPhone 11 Pro is damaged whether it is a broken screen, cracked camera or if you need an iPhone 11 Pro battery replacement. We understand that you would want this repaired in no time so you can go back to enjoying the great features of the iPhone 11 Pro... Read More +</p>
							</div>
					</div>
				</li>
				<li class="tooltip01_main">Warranty 
					<div class="tooltip01_inner">
						<svg class="tooltip01" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
							<path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg>
							<div class="show_tooltip01">
								<p>If your iPhone 11 Pro is damaged whether it is a broken screen, cracked camera or if you need an iPhone 11 Pro battery replacement. We understand that you would want this repaired in no time so you can go back to enjoying the great features of the iPhone 11 Pro... Read More +</p>
							</div>
					</div>
				</li>
				<li class="tooltip01_main">Repair time 
					<div class="tooltip01_inner">
						<svg class="tooltip01" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
							<path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg>
							<div class="show_tooltip01">
								<p>If your iPhone 11 Pro is damaged whether it is a broken screen, cracked camera or if you need an iPhone 11 Pro battery replacement. We understand that you would want this repaired in no time so you can go back to enjoying the great features of the iPhone 11 Pro... Read More +</p>
							</div>
					</div>
				</li>
				
			</ul>
			</div>


			<div class="col-md-6">
				<img class="full" src="{{asset('public/frontend/images/logo-blue.png')}}" alt="" />
				<h2><br/> </h2>
				<h3>{{$sub_mobile_front_back_cover->currency}}  {{$sub_mobile_front_back_cover->price}}</h3>
				<ul style="margin-top: 56%;">
				<li class="tooltip01_main">
				{{$sub_mobile_front_back_cover->currency}} {{$sub_mobile_front_back_cover->save_price}}
					
				</li>
				<li class="tooltip01_main">
				{{$sub_mobile_front_back_cover->apple_logo}}
					
				</li>
				<li class="tooltip01_main">
				{{$sub_mobile_front_back_cover->apple_part}}
					
				</li>
				<li class="tooltip01_main">
				{{$sub_mobile_front_back_cover->warranty_period ?? 'important message'}}
					
				</li>
				<li class="tooltip01_main">
					{{$sub_mobile_front_back_cover->repair_time}}
					
				</li>


				
			</ul>

				
			</div>
			<div class="col-md-6">
			</div>
			<div class="col-md-6" style="text-align: -webkit-center;margin-top: 40px;">
<?php
$slug='back_cover';
?>
<form method="post" action="{{URL::to('book/repair')}}/{{$slug}}" style="width:200px;">
@csrf
<input type="hidden" name="mbl_name" value='<?php print_r($select_device['name']);  ?>' >
<input type="hidden" name="back_cover_details" value='<?php print_r(json_encode($sub_mobile_front_back_cover));  ?>' >

<select class="form-control" name="slc_color">
<option value="not_selected">Select Color</option>
<option value="Selver">Selver</option>
<option value="Space Gray">Space Gray</option>
<option value="midnight Green">midnight Green</option>
<option value="Gold">Gold</option>
</select>

<input type="submit" name="submit" value="Book Repair">
</form>



</div>
			</div>
		</div>
	</div>
    <?php
        }
        ?>
        <?php
        if(isset($select_device['sub_mobile_battery_charging']))
        {
			$sub_mobile_battery_charging=$select_device['sub_mobile_battery_charging'];
			$sub_mobile_battery_charging=json_decode($sub_mobile_battery_charging);
        ?>
	<div id="tab-3" class="tab-content">
		<div class="tab3_content row">
			<div class="col-md-5">
				<img class="full" src="{{asset('public/frontend/images/battery_c2.png')}}" alt="" />
				<h2>{{$sub_mobile_battery_charging->title}} <br/> Replacement</h2>
				<h3>{{$sub_mobile_battery_charging->currency}}  {{$sub_mobile_battery_charging->price}}</h3>
				<?php
$slug='battery_charging';
?>
<form method="post" action="{{URL::to('book/repair')}}/{{$slug}}" style="width:200px;">
@csrf
<input type="hidden" name="mbl_name" value='<?php print_r($select_device['name']);  ?>' >
<input type="hidden" name="battery_charging_details" value='<?php print_r(json_encode($sub_mobile_battery_charging));  ?>' >
				<input type="submit" name="submit" value="Book Repair">
		</form>
			</div>
			<div class="col-md-7">
				<div class="tab3_content_collapse">
					<div class="tab3_content_collapse_inner">
						<h4>Repair description:</h4>
						<p>{{$sub_mobile_battery_charging->message}}</p>
					</div>
					<hr>
					<div class="tab3_content_collapse_inner">
						<h4>Warranty:{{$sub_mobile_battery_charging->warranty_period}}</h4>
					</div>
					<hr>
					<div class="tab3_content_collapse_inner">
						<h4>Repair time: <span>{{$sub_mobile_battery_charging->repair_time}}</span></h4>
						<p>Please ensure you book online prior to arriving, so we can make sure your required part is on site and ready for your repair.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
    <?php
        }
        ?>
        <?php
        if(isset($select_device['sub_mobile_camera_front_rear']))
        {
			$sub_mobile_camera_front_rear=$select_device['sub_mobile_camera_front_rear'];
			$sub_mobile_camera_front_rear=json_decode($sub_mobile_camera_front_rear);
        ?>
<div id="tab-4" class="tab-content">
		
		<div class="tab4_content row">
			<?php
			if($sub_mobile_camera_front_rear->camera == 'Front')
			{
			?>
			<div class="col-md-6">
				<img src="{{asset('public/frontend/images/rearcamera.png')}}" alt="" />
				<h2>{{$sub_mobile_camera_front_rear->camera_title}}</h2>
				<h3>{{$sub_mobile_camera_front_rear->camera_currency}} {{$sub_mobile_camera_front_rear->camera_price}}</h3>
				<?php
$slug='camera_front';
?>
<form method="post" action="{{URL::to('book/repair')}}/{{$slug}}" style="width:200px;">
@csrf
<input type="hidden" name="mbl_name" value='<?php print_r($select_device['name']);  ?>' >
<input type="hidden" name="camera_front_details" value='<?php print_r(json_encode($sub_mobile_camera_front_rear));  ?>' >
				<input type="submit" name="submit" value="Book Repair">
		</form>
				<div class="tab3_content_collapse_inner">
						<h4>Warranty: <span>{{$sub_mobile_camera_front_rear->camera_warranty_period}}</span></h4>
					</div>
					<hr>
				<div class="tab3_content_collapse_inner">
						<h4>Repair time: <span>{{$sub_mobile_camera_front_rear->camera_repair_time}}</span></h4>
						<p>{{$sub_mobile_camera_front_rear->camera_message}}</p>
					</div>
			</div>
<?php
}
?>
<?php
if($sub_mobile_camera_front_rear->camera == 'Back')
{
?>
			<div class="col-md-6">
				<img src="{{asset('public/frontend/images/lens_9.png')}}" alt="" />
				<h2>iPhone 11 Pro / 11 Pro Max Rear Camera Lens.</h2>
				<h3>£49</h3>
				<input type="submit" value="Book Repair">
				<div class="tab3_content_collapse_inner">
						<h4>Warranty: <span>Lifetime</span></h4>
					</div>
					<hr>
				<div class="tab3_content_collapse_inner">
						<h4>Repair time: <span>Up to 60 minutes</span></h4>
						<p>Please ensure you book online prior to arriving, so we can make sure your required part is on site and ready for your repair.</p>
					</div>
			</div>
			<?php
			}
			?>
		</div>

</div>
<?php
        }
        ?>
         <?php
        if(isset($select_device['sub_mobile_custom']))
        {
			$sub_mobile_custom=$select_device['sub_mobile_custom'];
			$sub_mobile_custom=json_decode($sub_mobile_custom);
        ?>
	<div id="tab-5" class="tab-content">
		<div class="tab3_content row">
			<div class="col-md-5">
				<img class="full" src="{{asset('public/frontend/images/idon_tknow.png')}}" alt="" />
				<h2>I don't know what's wrong</h2>
				<h3>{{$sub_mobile_custom->currency}} {{$sub_mobile_custom->price}}</h3>
				<?php
$slug='custom_repair';
?>
<form method="post" action="{{URL::to('book/repair')}}/{{$slug}}" style="width:200px;">
@csrf
<input type="hidden" name="mbl_name" value='<?php print_r($select_device['name']);  ?>' >
<input type="hidden" name="custom_repair_details" value="<?php print_r(htmlspecialchars(json_encode($sub_mobile_custom)));  ?>" >
				<input type="submit" name="submit" value="Book Repair">
		</form>
			</div>
			<div class="col-md-7">
				<div class="tab5_content">
					<div class="">
						<h4>Diagnostic description:</h4>
						<p>{{$sub_mobile_custom->message}}</p>
						<ul>
							<li>Tested by qualified technicians</li>
							<li>We will diagnose your issue</li>
							<li>If any parts need to be replaced, we will advise you of any further costs before proceeding</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php
        }
        ?>
		</div>
</scction>

      
<script src="https://code.jquery.com/jquery-3.6.3.slim.min.js" integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
<script type="text/javascript">

$(document).ready(function(){
	$(".tab3_content_collapse_inner h4").click(function(){
		$(this).next().slideToggle();
	})
})

$(document).ready(function(){
	$(".tooltip01").hover(function(){
		$(this).next().show();
	})
	$(".tooltip01").mouseleave(function(){
		$(this).next().hide();
	})
})


$(document).ready(function() {
  $(".hide_toggle").click(function() {
    var elem = $(".hide_toggle").text();
    if (elem == "Read More +") {
     
      $(".hide_toggle").text("Read Less -");
      $("#text_hide_show").slideDown(1000);
    } else {
      $(".hide_toggle").text("Read More +");
      $("#text_hide_show").slideUp(1000);
    }
  });
});

$(document).ready(function(){
	
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})

})
</script>


@stop

