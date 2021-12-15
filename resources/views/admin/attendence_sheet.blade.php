@extends('admin/layout.layout')
@section('page_title','Dashboard')

@section('container')
<div class="db-student-list mt-5">
    <div class="pt-3 pb-3 pl-3 pr-3">
        <div class="flexBBox"> 
            <fieldset>
              <legend><h2>Filter</h2></legend>
              <form id="form" enctype="multipart/form-data"   method="POST" action="{{ url('school/attendence_sheet/search') }}">
                @csrf
                        <div class="">
                            <div class="row">
                                <div class="col-md-3">
                                <div class="form-group student_class" >
                                    <label>Class:</label>
                                    <select  class="form-control select" style="width: 100%;" name="student_class" id="student_class" required>
                                        <option value="">
                                            SELECT
                                        </option>
                                        
                                        <option>
                                            Play
                                        </option>
                                        <option>
                                            One
                                        </option>
                                        <option>
                                            Two
                                        </option>
                                        <option>
                                            Three
                                        </option>
                                        <option>
                                            Four
                                        </option>
                                        <option>
                                            Five
                                        </option>
                                        <option>
                                            Six
                                        </option>
                                        <option>
                                            Seven
                                        </option>
                                        <option>
                                            Eight
                                        </option>
                                        <option>
                                            Nine
                                        </option>
                                        <option>
                                            Ten
                                        </option>
                                    </select>
                                </div> 
                                </div>
                                <div class="col-md-3">
                                <div class="form-group student_class" >
                                <label>View :</label>
                                 <select  class="form-control select" style="width: 100%;" name="view" onchange="getviewDatas()"  id="view"  required>
                                <option value="">select</option>
                                <option>Monthly</option>
                                <option>Daily</option>
                                    </select>
                                     </div>
                                     </div>
                                <div class="col-md-3" id="dateCol"  style='display:none' >
                                     </div>
                                <div class="col-md-3 customFlex" style="margin-top:11px">
                                <div class="form-group student_class" >
                                <label></label>
                                <br>
                                <input type="submit" class="btn btn-info" value="Filter"  id="submit"/>
                                     </div>
                                     </div>
                                </div>
                                <br />
                                <br />
                        </div>
                    </form>
            </fieldset>
                    </div>
                    <script>

document.getElementById("view").value="{{ $data }}";
document.getElementById("student_class").value="{{ $class }}";

 function  getviewDatas(){
    var value1 = document.getElementById("view").value;
    var classvalue = document.getElementById("student_class").value;
  if(value1=='Monthly'){
    document.getElementById('dateCol').innerHTML="<div class='form-group' ><label>Month:</label><input value='<?php echo $date_month; ?>' type='month' class='form-control' style='width: 100%;' name='date' id='month'  required /></div>";
    document.getElementById('dateCol').style.display='block';
  }else if(value1=='Daily'){
    document.getElementById('dateCol').innerHTML="<div class='form-group' ><label>Date:</label><input value='<?php echo $date_month; ?>' type='date' class='form-control' style='width: 100%;' name='date' id='date'  required /></div>";
    document.getElementById('dateCol').style.display='block';
  }else{
    document.getElementById('dateCol').innerHTML='';
    document.getElementById('dateCol').style.display='none';
  }
}
     
<?php if ($data == 'Monthly') { ?>
    getviewDatas();
    <?php } elseif ($data == 'Daily') { ?>

        getviewDatas();
    <?php } 
    
    // $dateimplode = explode('-',$date_month);
 
    ?>



                    </script>
        <form id="form" enctype="multipart/form-data" method="POST" action="{{ url('school/attendence_sheet/submit') }}">




   <input type="hidden" name="date" value="{{ $date_month }}">
   <input type="hidden" name="month" value="{{ date("F", strtotime($date_month)) }}">
   <input type="hidden" name="cYear" value="{{ date("Y", strtotime($date_month)) }}">


            <h5>
                <div class="well tex-center">DATE :
                    <?php echo $date_month;       ?>
                </div>
            </h5>
            <table class="table " border="1">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" colspan="8">
                            <h5>
                                <center>CLASS <?php echo $class; ?> ATTENDANCE</center>
                                </center>
                            </h5>
                        </th>
                    </tr>
                    <tr>
                        <?php if ($data == 'Monthly') { ?>
                            <th scope="col">SL.</th>
                            <th scope="col">Date</th>
                            <th class="" scope="col">Action</th>
                            <?php } elseif ($data == 'Daily') {
                          
                            if ($count>0) { ?>
                                <th scope="col">Roll NO.</th>
                                <th scope="col">Full Name</th>
                                <th class="" scope="col">Attendance</th>
                                <th class="" scope="col">Action</th>
                            <?php } else { ?>
                                <th scope="col">Roll NO.</th>
                                <th scope="col">Full Name</th>
                                <th class="" scope="col">Attendance</th>
                        <?php }
                        } ?>
                    </tr>
                </thead>
                <tbody>
                  
              <?php
 $counter = 0;
                    if ($data == 'Daily') {
                                if ($count>0) { 
                                    $attendance = json_decode($attten[0]->attendance);     
                                    
                                    
                              
    $attendance = json_decode(json_encode($attendance), true);
    // rsort($attendance);

$price = array_column($attendance, 'stu_roll');
array_multisort($price, SORT_ASC, $attendance);
//     echo '<pre>';
// print_r($attendance);
// echo '</pre>';

                                  //  die();
                                    ?>





    
@foreach ($attendance as $row)
    


                                    <tr>
                                        <td scope="col"><?php echo $row['stu_roll']; ?></td>
                                        <td scope="col"><?php echo $row['stu_name']; ?></td>
                                        <style type="text/css">
                                            #Present<?php echo $counter; ?>,
                                            #Absent<?php echo $counter; ?> {
                                                display: none;
                                            }
                                        </style>
                                        <td scope="col">
                                        <input type="radio" class="Present" id="Present<?php echo $counter; ?>" value="Present" <?php if ($row['attendence'] == 'Present') {
    echo 'checked=checked';
} ?> required disabled /><label class="Present att" for="Present<?php echo $counter; ?>">Present</label>
                                         <input type="radio" id="Absent<?php echo $counter; ?>" value="Absent" <?php if ($row['attendence'] == 'Absent') {
    echo 'checked=checked';
} ?> required disabled /><label class="att" for="Absent<?php echo $counter; ?>">Absent</label>
                                        </td>
                                        <td><span onclick="view('<?php echo $row['id']; ?>','/school/attendence_sheet/edit/<?php echo $attten[0]->id; ?>')" class='btn btn-info'>edit</span></td>
                                    </tr>

                                 <?php 
                                 
                                 $counter++;
                                 ?>
                                    @endforeach



                                <?php } else { 
                                   
                                    ?>
                                    @foreach ($rows as $row)

                               
                                    <tr>
                                        <td scope="col"><?php echo $row->StudentRoll; ?>
                                            <input type="hidden" name="id[]" value="{{ $counter }}" />
                                            <input type="hidden" name="mounth[]" value="<?php echo date("F"); ?>" />
                                            <input type="hidden" name="stu_roll[]" value="<?php echo $row->StudentRoll; ?>" />
                                            <input type="hidden" name="class[]" value="<?php echo $row->StudentClass; ?>" />
                                            <input type="hidden" name="profilePicture[]" value="<?php echo $row->StudentPicture; ?>" />
                                            <input type="hidden" name="fatherName[]" value="<?php echo $row->StudentFatherName; ?>" />
                                            <input type="hidden" name="motherName[]" value="<?php echo $row->StudentMotherName; ?>" />
                                            <input type="hidden" name="stu_id[]" value="<?php echo $row->StudentID; ?>" />
                                            <input type="hidden" name="AdmisionId[]" value="<?php echo $row->AdmissionID; ?>" />
                                        </td>
                                        <td scope="col"><?php echo $row->StudentName; ?>
                                            <input type="hidden" name="stu_name[]" value="<?php echo $row->StudentName; ?>" />
                                            <input type="hidden" name="phone[]" value="<?php echo $row->StudentPhoneNumber; ?>" />
                                            <input type="hidden" name="year[]" value="<?php echo $row->Year; ?>" />
                                        </td>
                                        <style type="text/css">
                                            #Present<?php echo $counter; ?>,
                                            #Absent<?php echo $counter; ?> {
                                                display: none;
                                            }
                                        </style>
                                        <td scope="col">
                                            <input type="radio" class="Present" id="Present<?php echo $counter; ?>" name="attendence[<?php echo $counter; ?>]" value="Present" required /><label class="Present att" for="Present<?php echo $counter; ?>">Present</label>
                                            <input type="radio" id="Absent<?php echo $counter; ?>" name="attendence[<?php echo $counter; ?>]" value="Absent" required /><label class="att" for="Absent<?php echo $counter; ?>">Absent</label>
                                        </td>
                                    </tr>
                                    <?php 
                                    $counter++;
                                    ?>
                                    @endforeach
                                    
                                    <?php }
                            } elseif ($data == 'Monthly') { ?>

@foreach ($rows as $row)
    


                                <tr>
                                    <td scope="col"><?php echo $counter + 1; ?></td>
                                    <td scope="col"><?php echo $row->date; ?></td>
                                    <style type="text/css">
                                        #Present<?php echo $counter; ?>,
                                        #Absent<?php echo $counter; ?> {
                                            display: none;
                                        }
                                    </style>
                                    <td scope="col">
                                        <a href="{{ url('/school/attendence_sheet/'.$row->student_class.'/Daily/'.$row->date) }}" class="btn btn-info">View Full Data</a>
                                        <?php if ($row->message_status == 'Pending') { ?>
                                            <a href='Message/<?php echo $class . '/' . $row->date; ?>' class="btn btn-info float-right" id="att_class6_msg">SENT SMS ABSENT
                                                STUDENT </a>
                                        <?php } else { ?>
                                            <span class="btn btn-info float-right">ALREADY SMS SENT</span>
                                        <?php } ?>
                                    </td>
                                </tr>

                                @endforeach

                    <?php }
                            
                            
                            
                            ?>





             
     


                </tbody>
            </table>
            <?php if ($data == 'Daily') {
   
                if ($count>0) {
                } else {
                     ?>
                    <input class="btn btn-success" type="submit" value="SUBMIT" id="save_btn" name="SubmitAttendance">
            <?php
                }
            } ?>


            @csrf
        </form>
    </div>
</div>
@endsection