
<?php 

if(isset($_GET['class'])){
       $class = $_GET['class'];
}else{
    $class = '';
}
if(isset($_GET['examType'])){
        $examType = $_GET['examType'];
}else{
    $examType = '';
}


if(isset($_GET['date'])){
       $date = $_GET['date'];
   $year = explode("-",$date);
}else{
    $date = '';
    $year = date("Y");
}


if(isset($_GET['Subject'])){
       $Subject = $_GET['Subject'];
      $Subject = $extraFunction->subjectNameBangla($Subject);

}else{
 $Subject = '';

}

    
   // students/ActiveStudent/Play/Active/none/Active
if (isset($_POST['student_class'])) {
    $class = $_POST["student_class"];
    $ExamType = $_POST["ExamType"];
    $date = $_POST["date"];
    if(isset($_POST["Subject"])){
         $Subject = $_POST["Subject"];
     echo  $Subject =    $extraFunction->subjectNameEnglish($Subject);
    
        echo "<script>window.location = '".$rootDomain."studentresult/$class/$ExamType/$date/$Subject'</script>";
    }else{
        echo "<script>window.location = '".$rootDomain."studentresult/$class/$ExamType/$date'</script>";
    }
    }


?>

<div class="flexBBox"> 

<fieldset>
  <legend><h2>Filter</h2></legend>
  <form id="form" enctype="multipart/form-data"   method="POST" action="">
            <div class="">
                <div class="row">
                    <div class="col-md-3">
                    <div class="form-group student_class" >
                        <label>Class:</label>
                        <select  class="form-control select" style="width: 100%;" onchange="getExamData()"   name="student_class" id="student_class" required>
                            <option value="">
                                SELECT
                            </option>
                            <option <?php if($class=="All"){ echo "selected";} ?> value="All">
                                All
                            </option>
                            <option <?php if($class=="Play"){ echo "selected";} ?>  value="Play">
                                Play
                            </option>
                            <option <?php if($class=="One"){ echo "selected";} ?>  value="One">
                                One
                            </option>
                            <option <?php if($class=="Two"){ echo "selected";} ?>  value="Two">
                                Two
                            </option>
                            <option <?php if($class=="Three"){ echo "selected";} ?>  value="Three">
                                Three
                            </option>
                            <option <?php if($class=="Four"){ echo "selected";} ?>  value="Four">
                                Four
                            </option>
                            <option <?php if($class=="Five"){ echo "selected";} ?>  value="Five">
                                Five
                            </option>
                            <option <?php if($class=="Six"){ echo "selected";} ?>  value="Six">
                                Six
                            </option>
                            <option <?php if($class=="Seven"){ echo "selected";} ?>  value="Seven">
                                Seven
                            </option>
                            <option <?php if($class=="Eight"){ echo "selected";} ?>  value="Eight">
                                Eight
                            </option>
                            <option <?php if($class=="Nine"){ echo "selected";} ?>  value="Nine">
                                Nine
                            </option>
                            <option <?php if($class=="Ten"){ echo "selected";} ?>  value="Ten">
                                Ten
                            </option>
                        </select>
                    </div> 
                    </div>





                    <div class="col-md-3">
                    <div class="form-group student_class" >
                    <label>Exam Type:</label>
                     <select  class="form-control select" style="width: 100%;" name="ExamType" onchange="getExamData()"  id="ExamType"  required>
                       
                    <option value="">select</option>
                    <option <?php if($examType=="Weakly_Examination"){ echo "selected";} ?>  value="Weakly_Examination">Weakly Examination</option>
                    <option <?php if($examType=="ADMITION_TEST_RESULT"){ echo "selected";} ?>  value="ADMITION_TEST_RESULT">ADMITION TEST RESULT</option>
                    <option <?php if($examType=="First_Terminals_Examination"){ echo "selected";} ?>  value="First_Terminals_Examination">First Terminals Examination</option>
                    <option <?php if($examType=="Second_Terminals_Examination"){ echo "selected";} ?>  value="Second_Terminals_Examination">Second Terminals Examination</option>
                    <option <?php if($examType=="Annual_Examination"){ echo "selected";} ?>  value="Annual_Examination">Annual Examination</option>
                    <option <?php if($examType=="Test_Examination"){ echo "selected";} ?>  value="Test_Examination">Test Examination</option>
             
                          
                        </select>
                         </div>


                         </div>

                         

                    <div class="col-md-3" id="SubjectCol"  style='display:none' >
            
                     


                         </div>



                         <div class="col-md-3">
                    <div class="form-group student_class" >
                    <label>Exam Type:</label>
                     <input value="<?php echo $date; ?>" type="date" class="form-control" name="date">
                         </div>


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

function getExamData(){
    var value1 = document.getElementById("ExamType").value;
    var classvalue = document.getElementById("student_class").value;
   
    
    if(value1=='Weakly_Examination'){





        if (classvalue == 'Play' || classvalue == 'One' || classvalue == 'Two') {

            document.getElementById('SubjectCol').innerHTML="<div class='form-group' ><label>Subject:</label><select  class='form-control select' style='width: 100%;' name='Subject' id='Subject'  required ><option value=''>SELECT</option><option <?php if($Subject=='বাংলা'){ echo 'selected'; } ?> value='বাংলা'>বাংলা </option><option <?php if($Subject=='ইংলিশ'){ echo 'selected'; } ?> value='ইংলিশ'>ইংলিশ</option><option  <?php if($Subject=='গনিত'){ echo 'selected'; } ?> value='গনিত'>গনিত</option></select></div>";
            } else if (classvalue == 'Three' || classvalue == 'Four' || classvalue == 'Five') {
            document.getElementById('SubjectCol').innerHTML="<div class='form-group' ><label>Subject:</label><select  class='form-control select' style='width: 100%;' name='Subject' id='Subject'  required ><option value=''>SELECT</option><option <?php if($Subject=='বাংলা'){ echo 'selected'; } ?> value='বাংলা'>বাংলা </option><option <?php if($Subject=='ইংলিশ'){ echo 'selected'; } ?> value='ইংলিশ'>ইংলিশ</option><option <?php if($Subject=='গনিত'){ echo 'selected'; } ?> value='গনিত'>গনিত</option><option <?php if($Subject=='বিজ্ঞান'){ echo 'selected'; } ?> value='বিজ্ঞান'>বিজ্ঞান </option><option <?php if($Subject=='বাংলাদেশ ও বিশ্ব পরিচয়'){ echo 'selected'; } ?> value='বাংলাদেশ ও বিশ্ব পরিচয়'>বাংলাদেশ ও বিশ্ব পরিচয়</option><option <?php if($Subject=='ইসলাম-ধর্ম'){ echo 'selected'; } ?> value='ইসলাম-ধর্ম'>ইসলাম-ধর্ম</option><option <?php if($Subject=='হিন্দু-ধর্ম'){ echo 'selected'; } ?>  value='হিন্দু-ধর্ম'>হিন্দু-ধর্ম</option></select></div>"
            } else if (classvalue == 'Six' || classvalue == 'Seven' || classvalue == 'Eight') {
            document.getElementById('SubjectCol').innerHTML="<div class='form-group' ><label>Subject:</label><select  class='form-control select' style='width: 100%;' name='Subject' id='Subject'  required ><option value=''>SELECT</option><option <?php if($Subject=='বাংলা ১ম'){ echo 'selected'; } ?>  value='বাংলা ১ম'> বাংলা ১ম</option><option <?php if($Subject=='বাংলা ২য়'){ echo 'selected'; } ?>  value='বাংলা ২য়'> বাংলা ২য়</option><option <?php if($Subject=='ইংলিশ ১ম'){ echo 'selected'; } ?>  value='ইংলিশ ১ম'> ইংলিশ ১ম</option><option <?php if($Subject=='ইংলিশ ২য়'){ echo 'selected'; } ?>  value='ইংলিশ ২য়'> ইংলিশ ২য়</option><option <?php if($Subject=='গনিত'){ echo 'selected'; } ?>  value='গনিত'> গনিত</option><option <?php if($Subject=='বিজ্ঞান'){ echo 'selected'; } ?>  value='বিজ্ঞান'>বিজ্ঞান </option><option <?php if($Subject=='বাংলাদেশ ও বিশ্ব পরিচয়'){ echo 'selected'; } ?>  value='বাংলাদেশ ও বিশ্ব পরিচয়'>বাংলাদেশ ও বিশ্ব পরিচয়</option><option <?php if($Subject=='ইসলাম-ধর্ম'){ echo 'selected'; } ?>  value='ইসলাম-ধর্ম'>ইসলাম-ধর্ম</option><option <?php if($Subject=='হিন্দু-ধর্ম'){ echo 'selected'; } ?>  value='হিন্দু-ধর্ম'>হিন্দু-ধর্ম</option><option <?php if($Subject=='কৃষি'){ echo 'selected'; } ?>  value='কৃষি'>কৃষি</option><option <?php if($Subject=='তথ্য ও যোগাযোগ প্রযোক্তি'){ echo 'selected'; } ?>  value='তথ্য ও যোগাযোগ প্রযোক্তি'>তথ্য ও যোগাযোগ প্রযোক্তি</option></select></div>"
            } else {
            document.getElementById('SubjectCol').innerHTML="<div class='form-group' ><label>Subject:</label><select  class='form-control select' style='width: 100%;' name='Subject' id='Subject'  required ><option value=''>SELECT</option><option <?php if($Subject=='বাংলা ১ম'){ echo 'selected'; } ?>  value='বাংলা ১ম'> বাংলা ১ম</option><option <?php if($Subject=='বাংলা ২য়'){ echo 'selected'; } ?>  value='বাংলা ২য়'> বাংলা ২য়</option><option <?php if($Subject=='ইংলিশ ১ম'){ echo 'selected'; } ?>  value='ইংলিশ ১ম'> ইংলিশ ১ম</option><option <?php if($Subject=='ইংলিশ ২য়'){ echo 'selected'; } ?>  value='ইংলিশ ২য়'> ইংলিশ ২য়</option><option <?php if($Subject=='গনিত'){ echo 'selected'; } ?>  value='গনিত'> গনিত</option><option <?php if($Subject=='রসায়ন'){ echo 'selected'; } ?>  value='রসায়ন'>রসায়ন</option><option <?php if($Subject=='পদার্থ'){ echo 'selected'; } ?>  value='পদার্থ'>পদার্থ</option><option <?php if($Subject=='জীব-বিজ্ঞান'){ echo 'selected'; } ?>  value='জীব-বিজ্ঞান'>জীব-বিজ্ঞান</option><option <?php if($Subject=='বাংলাদেশ ও বিশ্ব পরিচয়'){ echo 'selected'; } ?>  value='বাংলাদেশ ও বিশ্ব পরিচয়'>বাংলাদেশ ও বিশ্ব পরিচয়</option><option <?php if($Subject=='ইসলাম-ধর্ম'){ echo 'selected'; } ?>  value='ইসলাম-ধর্ম'>ইসলাম-ধর্ম</option><option <?php if($Subject=='হিন্দু-ধর্ম'){ echo 'selected'; } ?>  value='হিন্দু-ধর্ম'>হিন্দু-ধর্ম</option><option <?php if($Subject=='কৃষি'){ echo 'selected'; } ?>  value='কৃষি'>কৃষি</option><option <?php if($Subject=='তথ্য ও যোগাযোগ প্রযোক্তি'){ echo 'selected'; } ?>  value='তথ্য ও যোগাযোগ প্রযোক্তি'>তথ্য ও যোগাযোগ প্রযোক্তি</option></select></div>"
            }
                        



        document.getElementById('SubjectCol').style.display='block';


     
    }else{
        document.getElementById('SubjectCol').style.display='none';
        document.getElementById('SubjectCol').innerHTML="";

    }
}

<?php

if(isset($_GET['Subject'])){
    ?>
    getExamData();
    <?php
}
?>



        
        </script>
