<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/c42e809f4e.js" crossorigin="anonymous"></script>

		<!DOCTYPE HTML>
		<html lang="en-US">

		<head>
			<meta charset="UTF-8">
			<title></title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
            <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
			<style type="text/css">
				body {
					margin: 76px 0;
				}

				.container {
					background: #eaeaea;
					box-shadow: 0px 0px 26px 1px #0000003d;
					width: 1000px;
					padding: 49px 49px;
				}

				input#file-5 {
					display: none;
				}
				label#stu_img {
					width: 22%;
					background: #408040;
					border-radius: 22%;
					color: #95f195;
					/* font-weight: bold; */
					cursor: pointer;
				}

				img#student_image {
					/* position: absolute;*/
					z-index: 10;
					/* overflow: hidden; */
					height: 76px;
				}

				i#upload_icon {
					font-size: 2pc;
				}

				.view_display.v {
					background: #7f7f7f94;
				}

				input:checked+label {
					color: white;
					background: #0e87ce;
				}

				.col-md-5 col-5 .mr-3.mt-3.border {
					border-radius: 3px;
				}

				input[type="radio"] {
					display: none;
				}

				label {
					float: left;
					padding: 5px 10px;
					margin: 0px 20px;
					/* background: red; */
					font-size: 18px;
					cursor: pointer;
				}

				b.Reference {
					background: yellow;
					color: red;
					font-size: 22px;
				}

				label#stu_img {
					width: 89% !important;
					background: #408040 !important;
					border-radius: 0 !important;
					color: #ffffff !important;
					/* font-weight: bold; */
					cursor: pointer !important;
					margin-top: 13px !important;
				}
			</style>
		</head>

		<body>
			<?php
	






			?>
				<div class="container">
					<form enctype="multipart/form-data" method="POST" action="{{ url('Admission_success') }}" name="signup" id="booking-form">
						@csrf
						<input type="hidden" name="student_name" value="<?php echo $rows[0]->student_name ?>" />
						<input type="hidden" name="student_gender" value="<?php echo $rows[0]->student_gender ?>" />
						<input type="hidden" name="student_date_of_birth" value="<?php echo $rows[0]->student_date_of_birth ?>" />
						<input type="hidden" name="birthIdNo" value="<?php echo $rows[0]->birthIdNo ?>" />
						<input type="hidden" name="student_Religion" value="<?php echo $rows[0]->student_Religion ?>" />
						<input type="hidden" name="class" value="<?php echo $rows[0]->class ?>" />
						<input type="hidden" name="Group" value="<?php echo $rows[0]->Group ?>" />
						<input type="hidden" name="year" value="<?php echo $rows[0]->year ?>" />
						<input type="hidden" name="Father_name" value="<?php echo $rows[0]->Father_name ?>" />
						<input type="hidden" name="FathersOccupation" value="<?php echo $rows[0]->FathersOccupation ?>" />
						<input type="hidden" name="Mother_name" value="<?php echo $rows[0]->Mother_name ?>" />
						<input type="hidden" name="MothersOccupation" value="<?php echo $rows[0]->MothersOccupation ?>" />
						<input type="hidden" name="vill" value="<?php echo $rows[0]->vill ?>" />
						<input type="hidden" name="post" value="<?php echo $rows[0]->post ?>" />
						<input type="hidden" name="thana" value="<?php echo $rows[0]->thana ?>" />
						<input type="hidden" name="dist" value="<?php echo $rows[0]->dist ?>" />
						<input type="hidden" name="Phone_number" value="<?php echo $rows[0]->Phone_number ?>" />
						<input type="hidden" name="password" value="<?php echo $rows[0]->password ?>" />
						<input type="hidden" name="postal_code" value="<?php echo $rows[0]->postal_code ?>" />
						<input type="hidden" name="admition_id" value="<?php echo $rows[0]->admition_id ?>" />

						<div class="row">
							<h3 class="col-md-12 col-12 ">STUDENT DETAILS :</h3>
							<span class="col-md-5 col-5  mr-3 mt-3">Admission Id :</span>
							<span class="col-md-5 col-5  mr-3 mt-3"><?php echo $rows[0]->admition_id ?></span>
							<span class="col-md-5 col-5  mr-3 mt-3">Full Name :</span>
							<span class="col-md-5 col-5  mr-3 mt-3"><?php echo $rows[0]->student_name ?></span>
							<span class="col-md-5 col-5  mr-3 mt-3">Gender :</span>
							<span class="col-md-5 col-5  mr-3 mt-3"><?php echo $rows[0]->student_gender ?></span>
							<span class="col-md-5 col-5  mr-3 mt-3">Date of Birth :</span>
							<span class="col-md-5 col-5  mr-3 mt-3"><?php echo $rows[0]->student_date_of_birth ?></span>
							<span class="col-md-5 col-5  mr-3 mt-3">Birth ID No :</span>
							<span class="col-md-5 col-5  mr-3 mt-3"><?php echo $rows[0]->birthIdNo ?></span>
							<span class="col-md-5 col-5  mr-3 mt-3">Religion :</span>
							<span class="col-md-5 col-5  mr-3 mt-3"><?php echo $rows[0]->student_Religion ?></span>
							<span class="col-md-5 col-5  mr-3 mt-3">Class :</span>
							<span class="col-md-5 col-5  mr-3 mt-3"><?php echo $rows[0]->class ?></span>
							<span class="col-md-5 col-5  mr-3 mt-3">Group :</span>
							<span class="col-md-5 col-5  mr-3 mt-3"><?php echo $rows[0]->Group ?></span>
							<span class="col-md-5 col-5  mr-3 mt-3">year :</span>
							<span class="col-md-5 col-5  mr-3 mt-3"><?php echo $rows[0]->year ?></span>
							<br />
							<br />
							<h3 class="col-md-12 col-12 ">PARENT DETAILS :</h3>
							<span class="col-md-5 col-5  mr-3 mt-3">Father's Name :</span>
							<span class="col-md-5 col-5  mr-3 mt-3"><?php echo $rows[0]->Father_name ?></span>
							<span class="col-md-5 col-5  mr-3 mt-3">Father's occupation :</span>
							<span class="col-md-5 col-5  mr-3 mt-3"><?php echo $rows[0]->FathersOccupation ?></span>
							<span class="col-md-5 col-5  mr-3 mt-3">Mother's Name :</span>
							<span class="col-md-5 col-5  mr-3 mt-3"><?php echo $rows[0]->Mother_name ?></span>
							<span class="col-md-5 col-5  mr-3 mt-3">Mother's occupation :</span>
							<span class="col-md-5 col-5  mr-3 mt-3"><?php echo $rows[0]->MothersOccupation ?></span>
							<span class="col-md-5 col-5  mr-3 mt-3">Phone Number:</span>
							<span class="col-md-5 col-5  mr-3 mt-3"><?php echo $rows[0]->Phone_number ?></span>
							<br />
							<br />
							<h3 class="col-md-12 col-12 ">ADDRESS :</h3>
							<span class="col-md-5 col-5  mr-3 mt-3">Village :</span>
							<span class="col-md-5 col-5  mr-3 mt-3"><?php echo $rows[0]->vill ?></span>
							<span class="col-md-5 col-5  mr-3 mt-3">Post :</span>
							<span class="col-md-5 col-5  mr-3 mt-3"><?php echo $rows[0]->post ?></span>
							<span class="col-md-5 col-5  mr-3 mt-3">Thana :</span>
							<span class="col-md-5 col-5  mr-3 mt-3"><?php echo $rows[0]->thana ?></span>
							<span class="col-md-5 col-5  mr-3 mt-3">District :</span>
							<span class="col-md-5 col-5  mr-3 mt-3"><?php echo $rows[0]->dist ?></span>
							<span class="col-md-5 col-5  mr-3 mt-3">Postal Code :</span>
							<span class="col-md-5 col-5  mr-3 mt-3"><?php echo $rows[0]->postal_code ?></span>
							<span class="col-md-5 mr-3 mt-3">Upload Image :</span>
							<input class="col-md-5 mr-3 mt-3 form-control" type="file" placeholder="Enter full Name" name="student_image" id="pic" required />
							<!--   <center>
  <label id="stu_img"  for="pic"><center><i class="fas fa-upload" style="font-size: 48px;"></i></center></label> 
  </center>-->
							<center>
								<img width="17%" id="blah" src="" alt="" />
							</center>
							<br />
							<br />
							<br />
							<script type="text/javascript">
								function readURL(input) {
									if (input.files && input.files[0]) {
										var reader = new FileReader();
										reader.onload = function(e) {
											$('#blah').attr('src', e.target.result);
										}
										reader.readAsDataURL(input.files[0]);
									}
								}
								$("#pic").change(function() {
									readURL(this);
								});
							</script>
							<br />
							<br />
							<h3 class="col-md-12 col-12 ">Payment :</h3>
							<div class="col-md-12 col-12 ">
								<h5>পেমেন্ট করার নিয়মঃ</h5>
								<ol class="col-md-12 col-12 ">
									<li class="col-md-12 col-12 ">প্রথমে *২৪৭# ডাইল করুন</li>
									<li class="col-md-12 col-12 ">Cash Out অপশন সিলেক্ট করুন</li>
									<li class="col-md-12 col-12 ">Enter Agent bkash Account No এর জায়গায় <b>01744599229</b> নাম্বারটি দিন</li>
									<li class="col-md-12 col-12 ">Enter Amount এ 70 টাকা দিন</li>
									<li class="col-md-12 col-12 ">তারপর আপনার bkash pin দিয়ে sent করুন এবং প্রয়োজনে TRXID টি সংগ্রহ করুন</li>
								</ol>
								---------------------or----------------------
								<br />
								<h6 class="col-md-12 col-12 ">যদি bkash app ব্যাবহার করেনঃ</h6>
								<ol class="col-md-12 col-12 ">
									<li class="col-md-12 col-12 ">প্রথমে bkash app এ প্রবেশ করুন</li>
									<li class="col-md-12 col-12 ">Cash Out অপশন চাপ দিন</li>
									<li class="col-md-12 col-12 ">Enter Agent number or name এর জায়গায় <b>01744599229</b> নাম্বারটি দিন এবং arrow button এ চাপ দিন</li>
									<li class="col-md-12 col-12 ">Amount এ 7০ টাকা দেন এবং arrow button এ চাপ দিন</li>
									<li class="col-md-12 col-12 ">আপনার bkash pin টি দিয়ে arrow button এ চাপ দিন</li>
									<li class="col-md-12 col-12 ">তারপর tap and hold to make payment এ কিছুক্ষন চাপ দিয়ে ধরে রাখুন এবং প্রয়োজনে TRXID টি সংগ্রহ করুন</li>
								</ol>
								<p class="col-md-12 col-12 "><b>বিঃদ্রঃ TRXID ভুলের কারণে ফর্ম বাতিল হলে কর্তৃপক্ষ দায়ী থাকবে না । দয়া করে TRXID টি ভালোভাবে check করেন</b></p>
							</div>
							<br />
							<input type="hidden" name="paymentType" value="admissionFormFee" />
							<input type="hidden" name="paymentDate" value="<?php echo date("d-m-Y h:i:s") ?>" />
							<input type="hidden" name="paymentAmount" value="70" />
							<span class="col-md-5 col-5  mr-3 mt-3">Phone Number (যে নাম্বার থেকে পেমেন্ট করেছেন) :</span>
							<input class="col-md-5 col-5  mr-3 mt-3 form-control" type="text" placeholder="Enter Phone Number (যে নাম্বার থেকে পেমেন্ট করেছেন)" name="PaymentNumber" required />
							<span class="col-md-5 col-5  mr-3 mt-3">TRXID (SMS এ পাওয়া TRXID টি ) :</span>
							<input class="col-md-5 col-5  mr-3 mt-3 form-control" onBlur="checktrxidAvailability()" type="text" placeholder="Enter TRXID (SMS এ পাওয়া TRXID টি )" name="TRXID" id="TRXID" required />
							<span class="col-md-5 col-5  mr-3 mt-3"></span>
							<span id="TRXIDav_ailability_status" class="col-md-5 col-5  mr-3 mt-3"></span>
							<input class="col-md-10 mr-3 mt-3 btn btn-info" type="submit" onchange='showFileSize();' value="Submit Your Form" name="SubmitForm" id="submit" />
						</div>
						<div id="spin"></div>
					</form>
				</div>







 
	<script type="text/javascript">
		function preventBack() {
			window.history.forward();
		}
		setTimeout("preventBack()", 0);
		window.onunload = function() {
			null
		};
	</script>
	<script type="text/javascript">
		function checktrxidAvailability() {

		var TRXID = $("#TRXID").val();

			$("#loaderIcon").show();
			jQuery.ajax({
				url: "{{ url('check_availabilitytrx') }}/"+TRXID,
		
				type: "GET",
				success: function(data) {



                    if(data>0){
                        submit.disabled  = true;
                    $("#TRXIDav_ailability_status").html('<font color="red">This TRXID already Used !</font>');

                    }else{
                        submit.disabled  = false;
                    $("#TRXIDav_ailability_status").html('<font color="green">This TRXID is available !</font>');

                    }


				
					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}




		// upload image validation
		document.getElementById("submit").disabled = true;
	
		var a = 0;
		//binds to onchange event of your input field
		function showFileSize() {
			if ($('input:submit').attr('disabled', false)) {
				$('input:submit').attr('disabled', true);
			}
			var ext = $('#pic').val().split('.').pop().toLowerCase();
			if ($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
				$('#error1').slideDown("slow");
				$('#error2').slideUp("slow");
				a = 0;
			} else {
				var picsize = (this.files[0].size);
				if (picsize > 100000) {
					$('#error2').slideDown("slow");
					a = 0;
				} else {
					a = 1;
					$('#error2').slideUp("slow");
				}
				$('#error1').slideUp("slow");
				if (a == 1) {
					$('input:submit').attr('disabled', false);
				}
			}
		};

	</script>
	<script src="jquery.min.js"></script>