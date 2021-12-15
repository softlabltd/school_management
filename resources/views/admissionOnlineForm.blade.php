<?php




 
    if ($current_date < $end) {

?>
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

                input#pic {
                    display: none;
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

                .col-md-5.mr-3.mt-3.border {
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

                .more {
                    position: relative;
                }

                h3.text-center.dash:after {
                    content: "";
                    width: 46%;
                    height: 2px;
                    position: absolute;
                    right: 0;
                    top: 17px;
                    background: #777474;
                }

                h3.text-center.dash:before {
                    content: "";
                    width: 46%;
                    height: 2px;
                    position: absolute;
                    left: 0;
                    top: 17px;
                    background: #777474;
                }

                .title.text-center {
                    width: 100%;
                    background: #0e87ce;
                    color: white;
                    border-radius: 6px;
                }

                label {
    background: #c4c4c4;
}
            </style>
        </head>

        <body>
            <div class="container">
                <?php if (isset($_REQUEST['Success'])) {
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Your Form successfully submited!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
                } ?>
                {{-- <div class="row">
                    <div class="title text-center">
                        <h2>OFFLINE FORM</h2>
                    </div>
                    <div class="col-md-12 text-center">
                        <form enctype="multipart/form-data" action="Admission_checkout.php" method="POST">
                       
                            <input class="mr-3 mt-3 form-control" type="hidden" value="<?php echo $admition_ID ?>" name="admition_id" readonly required />
                            <br />
                            <input type="submit" name="save_btnOffline" value="Click to Download Your Offline Form" class="btn btn-info" />
                        </form>
                    </div>
                </div>
                <br />
                <div class="more">
                    <h3 class="text-center dash">OR</h3>
                </div>
                <br /> --}}
                <form enctype="multipart/form-data" method="POST" action="{{ url('Admission_checkout') }}" name="signup" id="booking-form" onSubmit="return valid();">
               @csrf
                    <div class="row">
                        <div class="title text-center">
                            <h2>ONLONE FORM</h2>
                        </div>
                        <style type="text/css">
                        </style>
                     
                        <h3 class="col-md-12">STUDENT'S DETAILS :</h3>
                        <span class="col-md-5 mr-3 mt-3">Admission Id :</span>
                        <input class="col-md-5 mr-3 mt-3 form-control" type="text" value="<?php echo $admition_ID ?>" name="admition_id" readonly required />
                        <span class="col-md-5 mr-3 mt-3">Full Name :</span>
                        <input class="col-md-5 mr-3 mt-3 form-control" type="text" placeholder="Enter full Name" name="student_name" id="student_name" required />
                        <span class="col-md-5 mr-3 mt-3">Gender :</span>
                        <div class="col-md-5 mr-3 mt-3 border">
                            <div class="radioBtn">
                                <input type="radio" class="" name="student_gender" value="Male" id="student-genderm" required /> <label for="student-genderm" id="male"> Male</label>
                            </div>
                            <div class="radioBtn">
                                <input type="radio" name="student_gender" value="Female" id="student-genderf" required />
                                <label for="student-genderf"> Female</label>
                            </div>
                        </div>
                        <!--
                <select class="col-md-5 mr-3 mt-3 form-control" name="student_gender" class="mt-3 mb-3" id="student-gender"  >
                <option value="">select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            -->
                        <span class="col-md-5 mr-3 mt-3">Date of Birth :</span>
                        <input class="col-md-5 mr-3 mt-3 form-control" type="date" placeholder="Enter Date Of Birth" name="student_date_of_birth" id="student_date_of_birth" required />
                        <span class="col-md-5 mr-3 mt-3">Birth ID No :</span>
                        <input class="col-md-5 mr-3 mt-3 form-control" onkeyup="checkidAvailability()" type="text" minlength="8" maxlength="17" placeholder="Enter Birth ID No" name="birthIdNo" id="birthIdNo" required />
                        <span class="col-md-5 mr-3 mt-3" id="" style="font-size:12px;"></span>
                        <span class="col-md-5 mr-3 mt-3" id="user-id-availability-status" style="font-size:12px;"></span>
                        <span class="col-md-5 mr-3 mt-3">Religion :</span>
                        <div class="col-md-5 mr-3 mt-3 border">
                            <div class="radioBtn">
                                <input type="radio" name="student_Religion" value="Islam" id="student-ReligionI" required /> <label for="student-ReligionI" id="Islam"> Islam</label>
                            </div>
                            <div class="radioBtn">
                                <input type="radio" name="student_Religion" value="Hindu" id="student-ReligionH" required />
                                <label for="student-ReligionH"> Hindu</label>
                            </div>
                            <div class="radioBtn">
                                <input type="radio" name="student_Religion" value="Others" id="student-ReligionO" required />
                                <label for="student-ReligionO"> Others</label>
                            </div>
                        </div>
                        <span class="col-md-5 mr-3 mt-3">Class :</span>
                        <select class="col-md-5 mr-3 mt-3 form-control" name="class" class="mt-3 mb-3" id="classes" required>
                            <option value="">select</option>
                            <option value="Play">Play</option>
                            <option value="One">One</option>
                            <option value="Two">Two</option>
                            <option value="Three">Three</option>
                            <option value="Four">Four</option>
                            <option value="Five">Five</option>
                            <option value="Six">Six</option>
                            <option value="Seven">Seven</option>
                            <option value="Eight">Eight</option>
                            <option value="Nine">Nine</option>
                            <option value="Ten">Ten</option>
                        </select>
                        <span class="col-md-5 mr-3 mt-3">Group :</span>
                        <select class="col-md-5 mr-3 mt-3 form-control" name="Group" class="mt-3 mb-3" id="Group" required>
                            <option value="">select</option>
                            <option value="none">None</option>
                            <option value="Science">Science</option>
                            <option value="Humanely">Humanely</option>
                            <option value="Business">Business</option>
                        </select>
                        <input class="col-md-5 mr-3 mt-3 form-control" type="hidden" value="<?php $currentYear = date("Y");
                                                                                            echo $currentYear + 1; ?>" name="year" id="year" required />
                        <br />
                        <br />
                        <h3 class="col-md-12">PARENT'S DETAILS :</h3>
                        <span class="col-md-5 mr-3 mt-3">Father's Name :</span>
                        <input class="col-md-5 mr-3 mt-3 form-control" type="text" placeholder="Enter Father Name" name="Father_name" id="Father-name" required />
                        <span class="col-md-5 mr-3 mt-3">Father's occupation :</span>
                        <input class="col-md-5 mr-3 mt-3 form-control" type="text" placeholder="Enter Father's occupation" name="FathersOccupation" id="FathersOccupation" required />
                        <span class="col-md-5 mr-3 mt-3">Mother's Name :</span>
                        <input class="col-md-5 mr-3 mt-3 form-control" type="text" placeholder="Enter Mother Name" name="Mother_name" id="Mother-name" required />
                        <span class="col-md-5 mr-3 mt-3">Mother's occupation :</span>
                        <input class="col-md-5 mr-3 mt-3 form-control" type="text" placeholder="Enter Mother's occupation" name="MothersOccupation" id="Father-name" required />
                        <span class="col-md-5 mr-3 mt-3">Phone Number:</span>
                        <input class="col-md-5 mr-3 mt-3 form-control" type="tel" placeholder="Enter Phone Number" name="Phone_number" id="phone-number" required /><span class="col-md-5 mr-3 mt-3">Password:</span>
                        <input class="col-md-5 mr-3 mt-3 form-control" type="tel" placeholder="Enter Password" name="password" id="password" required />
                        <br />
                        <br />
                        <h3 class="col-md-12">ADDRESS :</h3>
                        <span class="col-md-5 mr-3 mt-3">Village :</span>
                        <input class="col-md-5 mr-3 mt-3 form-control" type="text" placeholder="Enter Village" name="vill" id="student-vill" required />
                        <span class="col-md-5 mr-3 mt-3">Post :</span>
                        <input class="col-md-5 mr-3 mt-3 form-control" type="text" placeholder="Enter Union" name="post" id="student-post" required />
                        <span class="col-md-5 mr-3 mt-3">Thana :</span>
                        <input class="col-md-5 mr-3 mt-3 form-control" type="text" placeholder="Enter Thana" name="thana" id="student-thana" required />
                        <span class="col-md-5 mr-3 mt-3">District :</span>
                        <input class="col-md-5 mr-3 mt-3 form-control" type="text" placeholder="Enter District" name="dist" id="student-dist" required />
                        <span class="col-md-5 mr-3 mt-3">Postal Code :</span>
                        <input class="col-md-5 mr-3 mt-3 form-control" type="tel" placeholder="Enter Postal Code" name="postal_code" id="postal-code" required />
                        <input class="col-md-10 mr-3 mt-3 btn btn-info" type="submit" value="NEXT" name="save_btnOnline" id="submit" />
                    </div>
                    <div id="spin"></div>
                </form>
            </div>
    <?php
    } else {
        echo "<script>window.top.location='index.php'</script>";
    }

    ?>
    <script type="text/javascript">

var submit = document.getElementById('submit');

submit.disabled  = true;
        function checkidAvailability() {

            var birthIdNo = $("#birthIdNo").val();
            $("#loaderIcon").show();
            jQuery.ajax({
                url: "{{ url('check_availability') }}/"+birthIdNo,
               
                type: "GET",
                success: function(data) {


                    if(data>0){
                        submit.disabled  = true;
                    $("#user-id-availability-status").html('<font color="red">This birth certificate already registered !</font>');

                    }else{
                        submit.disabled  = false;
                    $("#user-id-availability-status").html('<font color="green">This birth certificate is available !</font>');

                    }
    


                //   $("#user-id-availability-status").html(data);
                    $("#loaderIcon").hide();


                },
                error: function() {}
            });
        }
    </script>
    <script src="jquery.min.js"></script>