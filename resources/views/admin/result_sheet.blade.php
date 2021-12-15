@extends('admin/layout.layout')
@section('page_title', 'Dashboard')
@section('container')
    <div class="db-student-list mt-5">
        <div class="pt-3 pb-3 pl-3 pr-3">
            <div class="flexBBox">
                <fieldset>
                    <legend>
                        <h2>Filter</h2>
                    </legend>
                    <form id="form" enctype="multipart/form-data" method="POST"
                        action="{{ url('school/result_sheet/search') }}">
                        @csrf
                        <div class="">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group student_class">
                                        <label>Class:</label>
                                        <select class="form-control select" style="width: 100%;" onchange="getExamData()"
                                            name="student_class" id="student_class" required>
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
                                    <script>
                                        document.getElementById('student_class').value = "{{ $class }}";
                                    </script>
                                </div>


                                <div class="col-md-3" id="GroupSection" style="display:none">
                                    <div class="form-group student_class" id="Group">

<input type="hidden" value="All" name="group" id="group">

                                    </div>
                              
                                </div>
                                
                          
                                
                                <div class="col-md-3">
                                    <div class="form-group student_class">
                                        <label>Exam Type:</label>
                                        <select class="form-control select" style="width: 100%;" name="ExamType"
                                            onchange="" id="ExamType" required>
                                            <option value="">select</option>
                                            <option>Weakly Examination</option>
                                            <option>ADMITION TEST RESULT</option>
                                            <option>First Terminals Examination</option>
                                            <option>Second Terminals Examination</option>
                                            <option>Annual Examination</option>
                                            <option>Test Examination</option>
                                        </select>
                                    </div>
                                    <script>
                                        document.getElementById('ExamType').value = "{{ $ExamType }}";
                                    </script>
                                </div>
                                <div class="col-md-3" id="SubjectCol">

                                    <div class='form-group' ><label>Subject:</label><select  class='form-control select' style='width: 100%;' name='Subject' id='Subject'  required ><option value=''>SELECT</option><option>বাংলা </option><option>ইংলিশ</option><option>গনিত</option></select></div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group student_class">
                                        <label>Date:</label>
                                        <input value="<?php echo date('Y-m-d'); ?>" type="date"  class="form-control" name="date"
                                            id="date">
                                    </div>
                                    <script>
                                        document.getElementById('date').value = "{{ $date }}";
                                    </script>
                                </div>
                                <div class="col-md-3 customFlex" style="margin-top:11px">
                                    <div class="form-group student_class">
                                        <label></label>
                                        <br>
                                        <input type="submit" class="btn btn-info" value="Filter" id="submit" />
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


                function getExamData() {
                    var value1 = document.getElementById("ExamType").value;
                    var classvalue = document.getElementById("student_class").value;
                    if (classvalue == 'Play' || classvalue == 'One' || classvalue == 'Two') {
                        document.getElementById('SubjectCol').innerHTML =
                            "<div class='form-group' ><label>Subject:</label><select  class='form-control select' style='width: 100%;' name='Subject' id='Subject'  required ><option value=''>SELECT</option><option>বাংলা </option><option>ইংলিশ</option><option>গনিত</option></select></div>";


                            document.getElementById('GroupSection').innerHTML =
                            "<div class='form-group' ><label>Group:</label><input type='hidden' value='All' name='group'></div>";
                            document.getElementById('GroupSection').style.display = 'none';

                    } else if (classvalue == 'Three' || classvalue == 'Four' || classvalue == 'Five') {

                        
                        document.getElementById('GroupSection').innerHTML =
                            "<div class='form-group' ><label>Group:</label><input type='hidden' value='All' name='group'></div>";
                            document.getElementById('GroupSection').style.display = 'none';


                        document.getElementById('SubjectCol').innerHTML =
                            "<div class='form-group' ><label>Subject:</label><select  class='form-control select' style='width: 100%;' name='Subject' id='Subject'  required ><option value=''>SELECT</option><option>বাংলা </option><option>ইংলিশ</option><option>গনিত</option><option>বিজ্ঞান </option><option>বাংলাদেশ ও বিশ্ব পরিচয়</option><option>ইসলাম-ধর্ম</option><option>হিন্দু-ধর্ম</option></select></div>"
                    } else if (classvalue == 'Six' || classvalue == 'Seven' || classvalue == 'Eight') {

                        document.getElementById('GroupSection').innerHTML =
                            "<div class='form-group' ><label>Group:</label><input type='hidden' value='All' name='group'></div>";
                            document.getElementById('GroupSection').style.display = 'none';

                        document.getElementById('SubjectCol').innerHTML =
                            "<div class='form-group' ><label>Subject:</label><select  class='form-control select' style='width: 100%;' name='Subject' id='Subject'  required ><option value=''>SELECT</option><option> বাংলা ১ম</option><option> বাংলা ২য়</option><option> ইংলিশ ১ম</option><option> ইংলিশ ২য়</option><option> গনিত</option><option>বিজ্ঞান </option><option>বাংলাদেশ ও বিশ্ব পরিচয়</option><option>ইসলাম-ধর্ম</option><option>হিন্দু-ধর্ম</option><option>কৃষি</option><option>তথ্য ও যোগাযোগ প্রযোক্তি</option></select></div>"
                    } else  if (classvalue == 'Nine' || classvalue == 'Ten') {



                        document.getElementById('GroupSection').style.display = 'block';

                        document.getElementById('GroupSection').innerHTML ="<div class='form-group' ><label>Group:</label><select class='form-control select' style='width: 100%;' name='group' onchange='getGroupData()' id='group' required><option value=''>select</option><option>Science</option><option>Humanities</option></select></div>";





                        document.getElementById('SubjectCol').innerHTML =
                            "<div class='form-group' ><label>Subject:</label><select  class='form-control select' style='width: 100%;' name='Subject' id='Subject'  required ><option value=''>SELECT</option></select></div>"







                    }
           
                    document.getElementById('SubjectCol').style.display = 'block';
                    document.getElementById('Subject').value = "{{ $Subject }}";
                    document.getElementById('group').value = "{{ $group }}";
                }
             
function getGroupData(){



var group = document.getElementById('group').value;

if(group=='Science'){


    document.getElementById('SubjectCol').innerHTML ="<div class='form-group' ><label>Subject:</label><select  class='form-control select' style='width: 100%;' name='Subject' id='Subject'  required ><option value=''>SELECT</option><option> বাংলা ১ম</option><option> বাংলা ২য়</option><option> ইংলিশ ১ম</option><option> ইংলিশ ২য়</option><option> গনিত</option><option>রসায়ন</option><option>পদার্থ</option><option>জীব-বিজ্ঞান</option><option>বাংলাদেশ ও বিশ্ব পরিচয়</option><option>ইসলাম-ধর্ম</option><option>হিন্দু-ধর্ম</option><option>কৃষি</option><option>তথ্য ও যোগাযোগ প্রযোক্তি</option></select></div>";




}else if(group=='Humanities'){


    document.getElementById('SubjectCol').innerHTML ="<div class='form-group' ><label>Subject:</label><select  class='form-control select' style='width: 100%;' name='Subject' id='Subject'  required ><option value=''>SELECT</option><option> বাংলা ১ম</option><option> বাংলা ২য়</option><option> ইংলিশ ১ম</option><option> ইংলিশ ২য়</option><option> গনিত</option><option>ভূগোল</option><option>অর্থনীতি</option><option>বিজ্ঞান</option><option>ইতিহাস</option><option>ইসলাম-ধর্ম</option><option>হিন্দু-ধর্ম</option><option>কৃষি</option><option>তথ্য ও যোগাযোগ প্রযোক্তি</option></select></div>";


// ভূগোল 
// অর্থনীতি
// বিজ্ঞান 
// ইতিহাস


}else if(group=='Commerce'){
 
    document.getElementById('SubjectCol').innerHTML ="<div class='form-group' ><label>Subject:</label><select  class='form-control select' style='width: 100%;' name='Subject' id='Subject'  required ><option value=''>SELECT</option><option> বাংলা ১ম</option><option> বাংলা ২য়</option><option> ইংলিশ ১ম</option><option> ইংলিশ ২য়</option><option> গনিত</option><option>রসায়ন</option><option>পদার্থ</option><option>জীব-বিজ্ঞান</option><option>বাংলাদেশ ও বিশ্ব পরিচয়</option><option>ইসলাম-ধর্ম</option><option>হিন্দু-ধর্ম</option><option>কৃষি</option><option>তথ্য ও যোগাযোগ প্রযোক্তি</option></select></div>";


}

document.getElementById('Subject').value = "{{ $Subject }}";

}

                getExamData();

                getGroupData();


            
                             
                            

            </script>
            <form id="form" enctype="multipart/form-data" method="POST" action="{{ url('school/result_sheet/submit') }}">
                @csrf
                <div style="width: 100%;" class="exam">
                    <h5 class="float-left">
                        Exam Name: {{ $ExamType }}
                    </h5>
                    <input type="hidden" value="{{ $date }}" name="date" />
                    <input type="hidden" value="{{ date('F', strtotime($date)) }}" name="month" />
                    <input type="hidden" value="{{ date('Y', strtotime($date)) }}" name="year" />
                    <input type="hidden" value="{{ $class }}" name="sctudent_class" />
                    <input type="hidden" value="{{ $ExamType }}" name="exam_name" />
                    <input type="hidden" value="{{ $Subject }}" name="subject" />
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group student_class">
                            <h5 class="float-left">
                                Subject: {{ $Subject }}
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group student_class">

                            @if ($resultCount > 0)
                            

@if($ExamType == 'First Terminals Examination' || $ExamType == 'Second Terminals Examination' || $ExamType == 'Test Examination' || $ExamType == 'Annual Examination' || $ExamType == 'Test Examination')

<a href="{{ url('school/result_sheet/view/'.$class.'/'.$ExamType.'/All/'.$date) }}" class="btn btn-info float-right" style="float: right;" >View Full Result</a>
@else

<?php
if($rows[0]->status=='Published'){
?>
 <button type="submit" name="status" value="Draft"  class="btn btn-info float-left" style="float:right">Draft Now</button>
 &nbsp;
 <button type="submit" name="sms" value="Draft"  class="btn btn-info float-left" style="float:right;margin-right: 15px;">Published By SMS</button>


<?php 
}else{
    ?>
    <button type="submit" name="status" value="Published" class="btn btn-info float-left" style="float:right">Publish Now</button>

<?php 
}

?>
@endif
                            @else

<input type="hidden" name="status" value="Draft">

                                <label>Total Mark:</label>
                                <input type="text" name="total_mark" id="total_mark" onkeyup="getTotal()"
                                    placeholder="Input Total Mark" class="mt-3 mb-5 col-md-6 form-control" required />
                            @endif
                        </div>
                    </div>
                </div>
                <table class="table" border="1">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" colspan="15">
                                <h5>
                                    <center>
                                        CLASS
                                        <?php echo $class; ?>
                                        RESULT
                                    </center>
                                </h5>
                            </th>
                        </tr>
                        <tr id="changeTableHead">
                            @if ($resultCount > 0)


                          
                            <th scope="col">Roll NO.</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Mark</th>
                           
                            



                            @else
                                <th scope="col">Roll NO.</th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Mark</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                     
                        @if ($resultCount > 0)


                        @if($ExamType == 'First Terminals Examination' || $ExamType == 'Second Terminals Examination' || $ExamType == 'Test Examination' || $ExamType == 'Annual Examination' || $ExamType == 'Annual Examination')



                    
                        @foreach ($rows as $row)

<?php





if($Subject=='বাংলা'){

   $mark =  $row->Bangla_1st;

}else if($Subject=='বাংলা ১ম'){
    $mark =  $row->Bangla_1st;
}else if($Subject=='বাংলা ২য়'){
    $mark =  $row->Bangla_2nd;
}else if($Subject=='ইংলিশ'){
    $mark =  $row->English_1st;
}else if($Subject=='ইংলিশ ১ম'){
    $mark =  $row->English_1st;
}else if($Subject=='ইংলিশ ২য়'){
    $mark =  $row->English_2nd;
}

else if($Subject=='গনিত'){
    $mark =  $row->Math;
}

else if($Subject=='বিজ্ঞান'){
    $mark =  $row->Science;
}


else if($Subject=='রসায়ন'){
    $mark =  $row->Chemistry;
}



else if($Subject=='পদার্থ'){
    $mark =  $row->physics;
}



else if($Subject=='জীব-বিজ্ঞান'){
    $mark =  $row->Biology;
}



else if($Subject=='বাংলাদেশ ও বিশ্ব পরিচয়'){
    $mark =  $row->B_and_B;
}



else if($Subject=='ইসলাম-ধর্ম'){
    $mark =  $row->ReligionIslam;



}



else if($Subject=='হিন্দু-ধর্ম'){
    $mark =  $row->ReligionHindu;

}



else if($Subject=='কৃষি'){
    $mark =  $row->Agriculture;
}



else if($Subject=='তথ্য ও যোগাযোগ প্রযোক্তি'){
    $mark =  $row->ICT;
}


                            $dis = '';
                            
                            $vv = 0;

 $stu_id = $row->stu_id;
                               
 $PDO = \DB::connection()->getPdo();
$QUERY = $PDO->prepare("SELECT DISTINCT * FROM `students` WHERE `StudentID`='$stu_id'");
$QUERY->execute();
$users=$QUERY->fetchAll(PDO::FETCH_OBJ);

                            if($Subject=='ইসলাম-ধর্ম'){


                                if($users[0]->StudentReligion=='Hindu'){
                                $dis = 'display:none';
                                $vv = 0;
                            }
                            
                            } else if($Subject=='হিন্দু-ধর্ম'){
                          


                                if($users[0]->StudentReligion=='Islam'){
                                    $dis = 'display:none';
                                    $vv = 0;
                            }
                            
                            }
                            ?>
  <tr style="{{ $dis }}" >


                            
                                <input type="hidden" name="Subject[]" value="{{ $Subject }}">
                                <input type="hidden" name="StudentRoll[]" value="{{ $row->roll }}">
                                <input type="hidden" name="StudentName[]" value="{{ $row->name }}">
                                <input type="hidden" name="StudentID[]" value="{{ $row->stu_id }}">
        
                             
                              
                                <td scope="col">{{ $row->roll }}</td>
                                <td scope="col">{{ $row->name }}</td>
                                <td scope="col"><input type="number" name="mark[]" value="{{ $mark }}" class="form-control"></td>
                        
                            </tr>
                        @endforeach
                   @else
                        
                      



                            <?php
                            $result = json_decode($rows[0]->result);
                            $result = json_decode(json_encode($result), true);
                            // rsort($attendance);
                            $price = array_column($result, 'StudentRoll');
                            array_multisort($price, SORT_ASC, $result);
                            ?>
                            @foreach ($result as $row)

                          




                            <input type="hidden" name="id[]" value="{{ $row['id'] }}">
                            <input type="hidden" name="Subject[]" value="{{ $row['Subject'] }}">
                            <input type="hidden" name="StudentRoll[]" value="{{ $row['StudentRoll'] }}">
                            <input type="hidden" name="StudentName[]" value="{{ $row['StudentName'] }}">
                            <input type="hidden" name="StudentID[]" value="{{ $row['StudentID'] }}">
                            <input type="hidden" name="AdmissionID[]" value="{{ $row['AdmissionID'] }}">
                            <input type="hidden" name="StudentFatherName[]" value="{{ $row['StudentFatherName'] }}">
                            <input type="hidden" name="StudentMotherName[]" value="{{ $row['StudentMotherName'] }}">
                            <input type="hidden" name="StudentGender[]" value="{{ $row['StudentGender'] }}">
                            <input type="hidden" name="StudentReligion[]" value="{{ $row['StudentReligion'] }}">
                            <input type="hidden" name="StudentPhoneNumber[]" value="{{ $row['StudentPhoneNumber'] }}">
                            <input type="hidden" name="StudentEmail[]" value="{{ $row['StudentEmail'] }}">
                            <input type="hidden" name="StudentGroup[]" value="{{ $row['StudentGroup'] }}">
                            <input type="hidden" name="total_mark_s[]" id="total_mark_s{{ $row['id'] }}" value="{{ $row['total_mark_s'] }}">
                            <tr>
                            
                                    <td scope="col">{{ $row['StudentRoll'] }}</td>
                                    <td scope="col">{{ $row['StudentName'] }}</td>
                                    <td scope="col"><input type="number" name="mark[]" value="{{ $row['mark'] }}" class="form-control"></td>
                         
                                </tr>
                            @endforeach

                            @endif
                            
                        @else

@if ($class=='')
    
@else


                            @php
                                $id = 1;
                            @endphp
                            @foreach ($rows as $row)
                            <?php
                            $dis = '';
                            
                            $vv = 0;
                            if($Subject=='ইসলাম-ধর্ম'){
                              
                                if($row->StudentReligion=='Hindu'){
                                $dis = 'display:none';
                                $vv = 0;
                            }
                            
                            } else if($Subject=='হিন্দু-ধর্ম'){
                          
                                if($row->StudentReligion=='Islam'){
                                    $dis = 'display:none';
                                    $vv = 0;
                            }
                            
                            }


                            if($group=='Science'){
                                if($row->StudentGroup=='Humanities'){
                                    $dis = 'display:none';
                                    $vv = 0;
                            }
                            }else if($group=='Humanities'){
                                if($row->StudentGroup=='Science'){
                                    $dis = 'display:none';
                                    $vv = 0;
                            }
                            }



                            ?>
                                <input type="hidden" name="id[]" value="{{ $id }}">
                                <input type="hidden" name="Subject[]" value="{{ $Subject }}">
                                <input type="hidden" name="StudentRoll[]" value="{{ $row->StudentRoll }}">
                                <input type="hidden" name="StudentName[]" value="{{ $row->StudentName }}">
                                <input type="hidden" name="StudentID[]" value="{{ $row->StudentID }}">
                                <input type="hidden" name="AdmissionID[]" value="{{ $row->AdmissionID }}">
                                <input type="hidden" name="StudentFatherName[]" value="{{ $row->StudentFatherName }}">
                                <input type="hidden" name="StudentMotherName[]" value="{{ $row->StudentMotherName }}">
                                <input type="hidden" name="StudentGender[]" value="{{ $row->StudentGender }}">
                                <input type="hidden" name="StudentReligion[]" value="{{ $row->StudentReligion }}">
                                <input type="hidden" name="StudentPhoneNumber[]" value="{{ $row->StudentPhoneNumber }}">
                                <input type="hidden" name="StudentEmail[]" value="{{ $row->StudentEmail }}">
                                <input type="hidden" name="StudentGroup[]" value="{{ $row->StudentGroup }}">
                                <input type="hidden" name="total_mark_s[]" id="total_mark_s{{ $id }}">
                                <tr style="{{ $dis }}">
                                    <td scope="col">{{ $row->StudentRoll }}</td>
                                    <td scope="col">{{ $row->StudentName }}</th>
                                    <td scope="col"><input type="number" name="mark[]" value="{{ $vv }}" class="form-control"></td>
                                </tr>
                                @php
                                    $id++;
                                @endphp

                            @endforeach
                            @endif
                        @endif
                    </tbody>
                </table>
                <input class="btn btn-success" type="submit" value="SUBMIT" name="SubmitResult" id="save_btn" />
            </form>
        </div>
    </div>

    @if ($class=='')
    
@else
    <script>
        function getTotal() {
            var total_mark = document.getElementById('total_mark').value;
            <?php
 if ($resultCount>0){
 }else{
    $id = 1;
    foreach ($rows as $row){
        ?>
            document.getElementById('total_mark_s<?php echo $id; ?>').value = total_mark;
            <?php
        $id++;
    }
 }
?>
        }
    </script>

@endif

@endsection
