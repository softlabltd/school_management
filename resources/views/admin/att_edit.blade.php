
<style type="text/css">
    input[type=radio] {
        display: none;
    }

    .Presents:checked+label.Presents {
        background: green;
    }
</style>
<div id="success"></div>
<div class="db-student-list mt-5">
    <div class="pt-3 pb-3 pl-3 pr-3">
  
        <form id="form" enctype="multipart/form-data" method="POST" action="{{ url('school/attendence_sheet/edit/submit') }}">

@csrf
<input type="hidden" name="attId" value="<?php echo $attInfo[0]->id; ?>">
            <table class="table " border="1">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" colspan="8">
                            <h5>
                                <center>CLASS <?php echo $attInfo[0]->student_class; ?> ATTENDANCE</center>
                                </center>
                            </h5>
                        </th>
                    </tr>
                    <tr>
                        <th scope="col">Roll NO.</th>
                        <th scope="col">Full Name</th>
                        <th class="" scope="col">Attendance</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        
                       $att = json_decode($attInfo[0]->attendance);
                       $counter = 0;
                        ?>
                   @foreach ($att as $row)
              
             
                    @if ($row->id==$attId)
                        
                   
         
                
           
        

             



                            <tr>
                                <td scope="col"><?php echo $row->stu_roll; ?>
                                    <input type="hidden" name="id[]" value="{{ $row->id }}" />
                               
                                    <input type="hidden" name="stu_roll[]" value="<?php echo $row->stu_roll; ?>" />
                            
                    
                                    <input type="hidden" name="fatherName[]" value="<?php echo $row->fatherName; ?>" />
                                    <input type="hidden" name="motherName[]" value="<?php echo $row->motherName; ?>" />
                                    <input type="hidden" name="stu_id[]" value="<?php echo $row->stu_id; ?>" />
                                    <input type="hidden" name="AdmisionId[]" value="<?php echo $row->AdmisionId; ?>" />
                                </td>
                                <td scope="col"><?php echo $row->stu_name; ?>
                                    <input type="hidden" name="stu_name[]" value="<?php echo $row->stu_name; ?>" />
                                    <input type="hidden" name="phone[]" value="<?php echo $row->phone; ?>" />
                             
                                </td>
                                <style type="text/css">
                                    #Present<?php echo $counter; ?>,
                                    #Absent<?php echo $counter; ?> {
                                        display: none;
                                    }
                                </style>
                                     <td scope="col">
                                        <input type="radio" class="Presents Present" id="Presents" name="attendence[]" value="Present" <?php if ($row->attendence == "Present") { echo"checked=checked";} ?> required /><label class="Presents att" for="Presents">Present</label>
            
                                        <input type="radio" id="Absents" name="attendence[]" value="Absent" <?php if ($row->attendence == "Absent") {echo "checked=checked";} ?> required /><label class="att" for="Absents">Absent</label>
                                    </td>
                            </tr>












                            @endif
                            @endforeach
                </tbody>
            </table>
            <input class="btn btn-success" type="submit" value="SUBMIT" name="updateAttendance"  id="save_btn" />
        </form>
    </div>
</div>