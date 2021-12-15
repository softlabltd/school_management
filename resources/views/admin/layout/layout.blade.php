<!DOCTYPE html>
<html class="fontawesome-i2svg-active fontawesome-i2svg-complete" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tepriganj Model School And College">
    <meta name="keywords" content="Freelancer nishad,tmscedu.com,tepriganj model school and collage">
    <meta name="author" content="Freelancer Nishad">
    <title>Tepriganj Model School And College</title>
   
    <link href="{{ asset('backend/dashbord/css.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/dashbord/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/dashbord/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/dashbord/core.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/dashbord/components.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/dashbord/colors.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">


    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet" type="text/css">

    <script src="{{ asset('backend/dashbord/jquery.js')}}"></script>

    <script type="text/javascript" src="{{ asset('backend/dashbord/bootstrap.js') }}"></script>
    <!-- /core JS files -->
    <script src="{{ asset('backend/js/datatables.min.js')}}"></script>
    <!-- Theme JS files -->
    <script type="text/javascript" src="{{ asset('backend/dashbord/app.js') }}"></script>
    <!-- /theme JS files -->
    <link rel="stylesheet" href="{{ asset('backend/dashbord/all.css') }}" >
    <script defer="defer" src="{{ asset('backend/dashbord/all.js') }}" ></script>

    <link href="https://kit-pro.fontawesome.com/releases/v5.15.2/css/pro.min.css" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('backend/dashbord/user_custom.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('backend/dashbord/customadmin.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>
    <script type="text/javascript">
        //logout
        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toGMTString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

        function checkCookies() {
            setCookie("cookie_name", "", -5);
            window.top.location = "../index.php";
        }
    </script>
<style>

    .d-none{
        display: none;
    }
</style>
</head>

<body class="expansion-alids-init">

                <div class="navbar navbar-inverse">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.php">Tepriganj Model School And College</a>
                        <ul class="nav navbar-nav visible-xs-block">
                            <li><a style="overflow:hidden" data-toggle="collapse" data-target="#navbar-mobile" class="collapsed" aria-expanded="false">
                                    <i class="far fa-user"></i>
                                </a> </li>
                            <li><a class="sidebar-mobile-main-toggle"><i class="fal fa-bars"></i></a></li>
                        </ul>
                    </div>
                    <div class="navbar-collapse collapse" id="navbar-mobile" aria-expanded="false" style="height: 1px;">
                        <ul class="nav navbar-nav">
                            <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="fal fa-bars" style="font-size: 22px;"></i></a></li>
                        </ul>
                        <p class="navbar-text">
                            <span class="label bg-success"></span>
                        </p>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown dropdown-user">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="" alt="">
                                    <span>{{ session('school_name') }}</span>
                                    <i class="fa fa-checked"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li id="profile"><a href="profile.php"><i class="icon-user-plus"></i> My profile</a></li>
                                    <li class="divider"></li>
                                    <li onclick="Submit()"><a href="profile.php?id=1&edit"><i class="icon-pencil"></i> Edit Account</a></li>
                                    <li><a href="#"><i class="icon-key"></i> Change Password</a></li>
                                    <li><a href="{{ url('logout') }}"><i class="icon-switch2"></i> Logout</a></li>
                                    
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

    <!-- /main navbar -->
    <!-- Page container -->
    <div class="page-container" style="min-height:NaNpx">
        <!-- Page content -->
        <div class="page-content">




<!-- Main sidebar -->
<div class="sidebar sidebar-main">
	<div class="sidebar-content">
		<!-- Main navigation -->
		<div class="sidebar-category sidebar-category-visible">
			<div class="category-content no-padding">
				<ul class="navigation navigation-main navigation-accordion">
					<!-- Main -->
					<li><a href="{{ url('school') }}"><i class="fad fa-home-lg"></i><span>Dashboard</span></a></li>
					{{--  <li><a href="payment.php"><i class="fal fa-dollar-sign"></i><span>Payment</span></a></li>  --}}
					{{--  <li><a href="zoom-class.php"><i class="fal fa-dollar-sign"></i><span>Zoom Class</span></a></li>  --}}
					<li class="navigation-header"><span>SCHOOL STAFFS PANEL</span> <i class="icon-menu" title="" data-original-title="Main pages"></i></li>
					<li id="teacher" class=""><a href="{{ url('/school/staffs') }}"><i class="fad fa-user-tie"></i><span>STAFFS</span></a></li>
					{{--  <li id="member" class=""><a href="view_member.php"><i class="fad fa-user-tag"></i> <span>manage MEMBERs</span></a></li>  --}}
					<li class="navigation-header"><span>ACTIVE STUDENTS PANEL</span> <i class="icon-menu" title="" data-original-title="Main pages"></i></li>
					<li id="student" class=""><a href="{{ url('/school/students/Active/list') }}"><i class="fal fa-users"></i> <span>STUDENTS</span></a></li>
					{{--  <li id="student" class=""><a href="{{ url('/school/students/transfer_in/list') }}"><i class="fal fa-users"></i> <span>TRANSFER IN STUDENT</span></a></li>  --}}
				
				
					<li class="">
						<a href="#" class="has-ul"><i class="fad fa-users-cog"></i> <span>PROMOTION STUDENTs</span></a>
						<ul class="hidden-ul" id="submenucustom" style="display: none;">
							<li id="promotion_play" class=""><a href="student.php?class=Play&promotion" class="has-ul"><i class="fa fa-play-circle" aria-hidden="true"></i> <span> &nbsp; play</span></a></li>
							<li id="promotion_class1" class=""><a href="student.php?class=One&promotion" class="has-ul"><i class="fa fa-play-circle" aria-hidden="true"></i> <span> &nbsp; one</span></a></li>
							<li id="promotion_class2" class=""><a href="student.php?class=Two&promotion" class="has-ul"><i class="fa fa-play-circle" aria-hidden="true"></i> <span> &nbsp; two</span></a></li>
							<li id="promotion_class3" class=""><a href="student.php?class=Three&promotion" class="has-ul"><i class="fa fa-play-circle" aria-hidden="true"></i> <span> &nbsp; three</span></a></li>
							<li id="promotion_class4" class=""><a href="student.php?class=Four&promotion" class="has-ul"><i class="fa fa-play-circle" aria-hidden="true"></i> <span> &nbsp; four</span></a></li>
							<li id="promotion_class5" class=""><a href="student.php?class=Five&promotion" class="has-ul"><i class="fa fa-play-circle" aria-hidden="true"></i> <span> &nbsp; five</span></a></li>
							<li id="promotion_class6" class=""><a href="student.php?class=Six&promotion" class="has-ul"><i class="fa fa-play-circle" aria-hidden="true"></i> <span> &nbsp; six</span></a></li>
							<li id="promotion_class7" class=""><a href="student.php?class=Seven&promotion" class="has-ul"><i class="fa fa-play-circle" aria-hidden="true"></i> <span> &nbsp; seven</span></a></li>
							<li id="promotion_class8" class=""><a href="student.php?class=Eight&promotion" class="has-ul"><i class="fa fa-play-circle" aria-hidden="true"></i> <span> &nbsp; eight</span></a></li>
							<li id="promotion_class9" class=""><a href="student.php?class=Nine&promotion" class="has-ul"><i class="fa fa-play-circle" aria-hidden="true"></i> <span> &nbsp; nine</span></a></li>
							<li id="promotion_class10" class=""><a href="student.php?class=Ten&promotion" class="has-ul"><i class="fa fa-play-circle" aria-hidden="true"></i> <span> &nbsp; ten</span></a></li>
						</ul>
					</li>
					<li class="navigation-header"><span>PANDING STUDENTS PANEL</span> <i class="icon-menu" title="" data-original-title="Main pages"></i></li>
					{{--  <li id="student" class=""><a href="{{ url('/school/students/transfer_out/list') }}"><i class="fal fa-users"></i> <span>TRANSFER OUT STUDENT</span></a></li>  --}}
					{{--  <li id="student" class=""><a href="{{ url('/school/students/aplication/list') }}"><i class="fal fa-users"></i> <span>NEW APLICATION</span></a></li>  --}}
		
					<li class="">
						<a href="#" class="has-ul"><i class=" icon-video-camera3"></i> <span>PANDING STUDENTs</span></a>
						<ul class="hidden-ul" id="submenucustom" style="display: none;">
							<li id="PANDING_play" class=""><a href="panding_student_list.php?class=Play" class="has-ul"><i class="fa fa-play-circle" aria-hidden="true"></i> <span> &nbsp; play</span></a></li>
							<li id="PANDING_class1" class=""><a href="panding_student_list.php?class=One" class="has-ul"><i class="fa fa-play-circle" aria-hidden="true"></i> <span> &nbsp; one</span></a></li>
							<li id="PANDING_class2" class=""><a href="panding_student_list.php?class=Two" class="has-ul"><i class="fa fa-play-circle" aria-hidden="true"></i> <span> &nbsp; two</span></a></li>
							<li id="PANDING_class3" class=""><a href="panding_student_list.php?class=Three" class="has-ul"><i class="fa fa-play-circle" aria-hidden="true"></i> <span> &nbsp; three</span></a></li>
							<li id="PANDING_class4" class=""><a href="panding_student_list.php?class=Four" class="has-ul"><i class="fa fa-play-circle" aria-hidden="true"></i> <span> &nbsp; four</span></a></li>
							<li id="PANDING_class5" class=""><a href="panding_student_list.php?class=Five" class="has-ul"><i class="fa fa-play-circle" aria-hidden="true"></i> <span> &nbsp; five</span></a></li>
							<li id="PANDING_class6" class=""><a href="panding_student_list.php?class=Six" class="has-ul"><i class="fa fa-play-circle" aria-hidden="true"></i> <span> &nbsp; six</span></a></li>
							<li id="PANDING_class7" class=""><a href="panding_student_list.php?class=Seven" class="has-ul"><i class="fa fa-play-circle" aria-hidden="true"></i> <span> &nbsp; seven</span></a></li>
							<li id="PANDING_class8" class=""><a href="panding_student_list.php?class=Eight" class="has-ul"><i class="fa fa-play-circle" aria-hidden="true"></i> <span> &nbsp; eight</span></a></li>
							<li id="PANDING_class9" class=""><a href="panding_student_list.php?class=Nine" class="has-ul"><i class="fa fa-play-circle" aria-hidden="true"></i> <span> &nbsp; nine</span></a></li>
							<li id="PANDING_class10" class=""><a href="panding_student_list.php?class=Ten" class="has-ul"><i class="fa fa-play-circle" aria-hidden="true"></i> <span> &nbsp; ten</span></a></li>
						</ul>
					</li>
					<li class="navigation-header"><span>ATTENDANCE PANEL</span> <i class="icon-menu" title="" data-original-title="Main pages"></i></li>
					<li id="student" class=""><a href="{{ url('/school/attendence_sheet') }}"><i class="fal fa-users"></i> <span>manage ATTENDENCE</span></a></li>

		
					<li class="navigation-header"><span>RESULT PUBLISH PANEL</span> <i class="icon-menu" title="" data-original-title="Main pages"></i></li>
                    <li id="student" class=""><a href="{{ url('/school/result_sheet') }}"><i class="fal fa-users"></i> <span>STUDENT RESULT</span></a></li>

				
					<li class="navigation-header"><span>ROUTINE PANEL</span> <i class="icon-menu" title="" data-original-title="Main pages"></i></li>
					<li id="examRoutine" class=""><a href="exam_routine.php"><i class="icon-home4"></i> <span>EXAM ROUTINE</span></a></li>
					<li id="classRoutine" class=""><a href="class_routine.php"><i class="icon-home4"></i> <span>CLASS ROUTINE</span></a></li>
					<li class="navigation-header"><span>Notice PANEL</span> <i class="icon-menu" title="" data-original-title="Main pages"></i></li>
					<li id="sendSms" class=""><a href="sent_sms.php"><i class="icon-home4"></i> <span>sent Notice</span></a></li>
					<li id="event" class=""><a href="event.php"><i class="icon-home4"></i> <span>Notice</span></a></li>
					<li id="ADMITION" class=""><a href="{{ url('school/StartAdmission') }}"><i class="icon-home4"></i> <span>admission form publish</span></a></li>
				</ul>
				<!--	<script src="assets/js/adminPannelSidebarse.js"></script> -->
			</div>
		</div>
		<!-- /main navigation  -->
	</div>
</div> <!-- /main sidebar -->
<!-- Main content -->
<div class="content-wrapper">
	<!-- Content area -->
	<div class="content" id="show_data">












			@section('container')
			@show()

    </div>
    <!-- /content area -->
    </div>
    <!-- /main content -->
    </div>
    <!-- /page content -->
    </div>
    <!-- /page container -->
    <!-- Chat Application -->
    <!-- /page container -->
    <script src="{{ asset('backend/dashbord/districts.js')}}"></script>
    <script src="{{ asset('backend/js/settings.js')}}"></script>




    <script type="text/javascript">
      $(document).ready(function() {
          $("#student_table").DataTable({
              "lengthMenu": [
                  [500],
                  ["All"]
              ]
          });
      });
  </script>
</div>
</div>

<div id="dataModal" class="modal fade">
<div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Employee Details</h4>
      </div>
      <div class="modal-body" id="employee_detail"></div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
  </div>
</div>
</div>







@if (session()->has('msg'))
<script>
    Swal.fire(
      'Success!',
      '{{ session("msg") }}',
      'success'
    )
    
        </script>
@endif



    </body>
    
    </html>
    <!-- /footer -->