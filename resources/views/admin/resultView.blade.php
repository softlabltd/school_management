@extends('admin/layout.layout')
@section('page_title', 'Dashboard')
@section('container')


    <div class="db-student-list mt-5">
        <div class="pt-3 pb-3 pl-3 pr-3">
       
            <form id="form" enctype="multipart/form-data"  method="POST" action="{{ url('school/result/publish') }}">

@csrf

                <h5>
                    <div class="well text-center">
                        DATE :
                        <?php echo date('d-m-y'); ?>
                    </div>
                </h5>
                <div style="width: 100%;" class="exam">
                    <h5 class="float-left" style="    width: 50%;
                    float: left;">Exam Name: {{ $exam_name }}</h5>


<?php
if($rows[0]->status=='Published'){
?>
 <button type="submit" name="status" value="Draft"  class="btn btn-info float-left" style="float:right">Draft Now</button>


<?php 
}else{
    ?>
    <button type="submit" name="status" value="Published" class="btn btn-info float-left" style="float:right">Publish Now</button>

<?php 
}

?>

                   
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
                        <tr>
                            <th scope="col">Roll NO.</th>
                            <th scope="col">Full Name</th>
                            <?php
                        if ($class == 'Play' || $class == 'One' || $class == 'Two') {
                        ?>
                            <th class="" scope="col">বাংলা</th>
                            <th class="" scope="col">ইংলিশ</th>
                            <th class="" scope="col">গনিত</th>
                            <th class="" scope="col">মোট</th>
                            <?php
                        } else if ($class == 'Three' || $class == 'Four' || $class == 'Five') {
                        ?>
                            <th class="" scope="col">বাংলা</th>
                            <th class="" scope="col">ইংলিশ</th>
                            <th class="" scope="col">গনিত</th>
                            <th class="" scope="col">বিজ্ঞান</th>
                            <th class="" scope="col">বাংলাদেশ ও বিশ্ব পরিচয়</th>
                            <th class="" scope="col">ইসলাম ধর্ম</th>
                            <th class="" scope="col">হিন্দু ধর্ম</th>
                            <th class="" scope="col">মোট</th>
                            <?php
                        } else if ($class == 'Six' || $class == 'Seven' || $class == 'Eight') {
                        ?>
                            <th class="" scope="col">বাংলা ১ম</th>
                            <th class="" scope="col">বাংলা ২য়</th>
                            <th class="" scope="col">ইংলিশ ১ম</th>
                            <th class="" scope="col">ইংলিশ ২য়</th>
                            <th class="" scope="col">গনিত</th>
                            <th class="" scope="col">বিজ্ঞান</th>
                            <th class="" scope="col">বাংলাদেশ ও বিশ্ব পরিচয়</th>
                            <th class="" scope="col">ইসলাম ধর্ম</th>
                            <th class="" scope="col">হিন্দু ধর্ম</th>
                            <th class="" scope="col">কৃষি</th>
                            <th class="" scope="col">তথ্য ও যোগাযোগ প্রযোক্তি</th>
                            <th class="" scope="col">মোট</th>
                            <?php
                        } else {
                        ?>
                            <th class="" scope="col">বাংলা ১ম</th>
                            <th class="" scope="col">বাংলা ২য়</th>
                            <th class="" scope="col">ইংলিশ ১ম</th>
                            <th class="" scope="col">ইংলিশ ২য়</th>
                            <th class="" scope="col">গনিত</th>
                            <th class="" scope="col">রসায়ন</th>
                            <th class="" scope="col">পদার্থ</th>
                            <th class="" scope="col">জীববিজ্ঞান</th>
                            <th class="" scope="col">বাংলাদেশ ও বিশ্ব পরিচয়</th>
                            <th class="" scope="col">ইসলাম ধর্ম</th>
                            <th class="" scope="col">হিন্দু ধর্ম</th>
                            <th class="" scope="col">কৃষি</th>
                            <th class="" scope="col">তথ্য ও যোগাযোগ প্রযোক্তি</th>
                            <th class="" scope="col">মোট</th>
                            <?php
                        }
                        ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
              $counter = 1;
                        foreach ($rows as $row) {
                         
                        
                    ?>
          <input type="hidden" name="id[]" value="{{ $row->id }}">

                        <tr>
                            <td scope="col">
                                <?php echo $row->roll; ?>
                            </td>
                            <td scope="col">
                                <?php echo $row->name; ?>
                            </td>
                            <?php
                      
                                if ($class == 'Play' || $class == 'One' || $class == 'Two') {
                                ?>
                            <td scope="col">

                                {{ $row->Bangla_1st }}
                            
                            </td>
                            <td scope="col">
                                {{ $row->English_1st }}
                            </td>
                            <td scope="col">
                                {{ $row->Math }}
                            </td>
                            
                            <td scope="col">

<?php  

echo  $total =  $row->Bangla_1st+$row->English_1st+$row->Math

?>

<input type="hidden" name="total[]" value="{{ $total }}">
                             
                            </td>
                            <?php
                                } else if ($class == 'Three' || $class == 'Four' || $class == 'Five') {
                                ?>
                            <td scope="col">
                                {{ $row->Bangla_1st }}
                            </td>
                            <td scope="col">
                                {{ $row->English_1st }}
                                
                            </td>
                            <td scope="col">
                                {{ $row->Math }}
                              
                            </td>
                            <td scope="col">    {{ $row->Science }}
                               
                            </td>
                            <td scope="col">    {{ $row->B_and_B }}
                               
                            </td>
                            <td scope="col"> 
                                
                                {{ $row->ReligionIslam   }}                                                                        
                            </td>
                            <td scope="col">


                                {{ $row->ReligionHindu }}
                                                                                       
                            </td>
                            <td scope="col">

                                <?php  
                                
                                echo  $total =  $row->Bangla_1st+$row->English_1st+$row->Math+$row->Science+$row->B_and_B+$row->ReligionIslam
                                
                                ?>
                                
                                <input type="hidden" name="total[]" value="{{ $total }}">
                                                             
                                                            </td>
                            <?php
                                } else if ($class == 'Six' || $class == 'Seven' || $class == 'Eight') {
                                ?>
                            <td scope="col">
                                {{ $row->Bangla_1st }}
                      
                            </td>
                            <td scope="col">
                                {{ $row->Bangla_2nd }}
                            
                            </td>
                            <td scope="col">
                                {{ $row->English_1st }}
                          
                            </td>
                            <td scope="col">
                                {{ $row->English_2nd }}
                             
                            </td>
                            <td scope="col">
                                {{ $row->Math }}
                              
                            </td>
                            <td scope="col">
                                {{ $row->Science }}
                              
                            </td>
                            <td scope="col">
                                {{ $row->B_and_B }}
                                
                            </td>
                            <td scope="col">
                                {{ $row->ReligionIslam }}
                               
                            </td>
                            <td scope="col">
                                {{ $row->ReligionHindu }}
                                                                                          
                            </td>
                            <td scope="col">  {{ $row->Agriculture }}
                         
                            </td>
                            <td scope="col">  {{ $row->ICT }}
                              
                            </td>
                            <td scope="col">

                                <?php  
                                
                                echo  $total =  $row->Bangla_1st+$row->Bangla_2nd+$row->English_1st+$row->English_2nd+$row->Math+$row->Science+$row->B_and_B+$row->ReligionIslam+$row->Agriculture+$row->ICT
                                
                                ?>
                                
                                <input type="hidden" name="total[]" value="{{ $total }}">
                                                             
                                                            </td>
                            <?php
                                } else {
                                ?>
                            <td scope="col">
                                {{ $row->Bangla_1st }}
                               
                            </td>
                            <td scope="col">
                                {{ $row->Bangla_2nd }}
                             
                            </td>
                            <td scope="col">
                                {{ $row->English_1st }}
                            
                            </td>
                            <td scope="col">
                                {{ $row->English_2nd }}
                             
                            </td>
                            <td scope="col">
                                {{ $row->Math }}
                           
                            </td>
                            <td scope="col">
                                {{ $row->Chemistry }}
                             
                            </td>
                            <td scope="col">
                                {{ $row->physics }}
                              
                            </td>
                            <td scope="col">
                                {{ $row->Biology }}
                              
                            </td>
                            <td scope="col">
                                {{ $row->B_and_B }}
                            
                            </td>
                            <td scope="col">
                                {{ $row->ReligionIslam }}

                            </td>
                            <td scope="col">
                                {{ $row->ReligionHindu }}

                            </td>
                            <td scope="col">
                                {{ $row->Agriculture }}
                            
                            </td>
                            <td scope="col">
                                {{ $row->ICT }}
                             
                            </td>
                            <td scope="col">

                                <?php  
                                
                                echo  $total =  $row->Bangla_1st+$row->Bangla_2nd+$row->English_1st+$row->English_2nd+$row->Math+$row->Chemistry+$row->physics+$row->Biology+$row->B_and_B+$row->ReligionIslam+$row->Agriculture+$row->ICT
                                
                                ?>
                                
                                <input type="hidden" name="total[]" value="{{ $total }}">
                                                             
                                                            </td>
                            <?php
                                }
                                ?>
                        </tr>
                        <?php
                            $counter++;
                        }
                    
                    ?>
                    </tbody>
                </table>

            </form>
        </div>
    </div>


@endsection
