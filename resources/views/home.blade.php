
@extends('layout.layout')


@section('container')



    <div class="col-md-9">
        <div class="row">
            <div class="col-md-12 notice">
                <?php
                $current_date = date("Y-m-d H:i:s");
                 $end = $add_admition_form[0]->end . " " . "23:59:59";
                 $remove =  $add_admition_form[0]->remove . " " . "23:59:59";
                 if ($current_date < $end) {
                ?>
                        <div class="admition_notice">
                   
                            <h4 style="    width: 100%;padding-bottom: 2px;padding-top:1px;color: #a737a7;" class="float-right">
                                <marquee onmouseover="stop()" onmouseout="start()" style="width:80%;padding-top: 5px;">ভর্তির আবেদনের জন্য CLICK BUTTON এ চাপ দিন। ভর্তির আবেদনের শেষ তারিখ : <?php echo $end; ?></marquee><a class="btn btn-info" style="    width: 20%;padding-top: 9px;margin-top: -15px;padding-bottom: 9px;" target="_blank" href="{{ url('admissionOnlineForm') }}">CLICK</a>
                            </h4>
                        </div>
                        <?php
                    } else {
                        if ($current_date < $remove) {
                        ?>
                            <div class="admition_notice">
                               
                                <h4 style="    width: 100%;padding-bottom: 2px;padding-top:1px;color: #a737a7;" class="float-right">
                                    <marquee style="padding-top: 5px;">ভর্তির আবেদনের সময় শেষ</marquee>
                                </h4>
                            </div>
                <?php
                        } else {
                        }
                    }
                
                ?>
     

           
                </center>
            
         
               
                    <hr class="bacg" />
                    <div class="notice_head">
                        <h5>
                            <center>NOTICE</center>
                            </h1>
                    </div>
                    <hr class="bacg" />
              
                                <div class="des_title">
                                    <i class="fas fa-caret-right"></i>
                                    <a class="title" href="notice_view.php?id=1">
                                       head
                                    </a>
                                </div>
            
               
                    <hr class="bacg" />
                    <div class="notice_head">
                        <h5>
                            <center>CLASS ROUTINE</center>
                            </h1>
                    </div>
                    <hr class="bacg" />
                
                        <div class="des_title">
                            <i class="fas fa-caret-right"></i>
                            <a class="title" href="class_routine/Routine6.php?year=<?php echo date("Y"); ?>" target="blank">CLASS SIX CLASS ROUTINE</a>
                        </div>
                 
                        <div class="des_title">
                            <i class="fas fa-caret-right"></i>
                            <a class="title" href="class_routine/Routine7.php?year=<?php echo date("Y"); ?>" target="blank">CLASS SEVEN CLASS ROUTINE</a>
                        </div>
                   
                        <div class="des_title">
                            <i class="fas fa-caret-right"></i>
                            <a class="title" href="class_routine/Routine8.php?year=<?php echo date("Y"); ?>" target="blank">CLASS EIGHT CLASS ROUTINE</a>
                        </div>
                   
                        <div class="des_title">
                            <i class="fas fa-caret-right"></i>
                            <a class="title" href="class_routine/Routine9.php?year=<?php echo date("Y"); ?>" target="blank">CLASS NINE CLASS ROUTINE</a>
                        </div>
                    
                        <div class="des_title">
                            <i class="fas fa-caret-right"></i>
                            <a class="title" href="class_routine/Routine10.php?year=<?php echo date("Y"); ?>" target="blank">CLASS TEN CLASS ROUTINE</a>
                        </div>
            
               
                    <hr class="bacg" />
                    <div class="notice_head">
                        <h5>
                            <center>EXAM ROUTINE</center>
                            </h1>
                    </div>
                    <hr class="bacg" />
                  
                        <div class="des_title">
                            <i class="fas fa-caret-right"></i>
                            <a class="title" href="exam_routine/Routine6.php?exam_mounth=<?php echo date("Y-m"); ?>" target="blank">CLASS SIX CLASS ROUTINE</a>
                        </div>
                  
                        <div class="des_title">
                            <i class="fas fa-caret-right"></i>
                            <a class="title" href="exam_routine/Routine7.php?exam_mounth=<?php echo date("Y-m"); ?>" target="blank">CLASS SEVEN CLASS ROUTINE</a>
                        </div>
              
                        <div class="des_title">
                            <i class="fas fa-caret-right"></i>
                            <a class="title" href="exam_routine/Routine8.php?exam_mounth=<?php echo date("Y-m"); ?>" target="blank">CLASS EIGHT CLASS ROUTINE</a>
                        </div>
                  
                        <div class="des_title">
                            <i class="fas fa-caret-right"></i>
                            <a class="title" href="exam_routine/Routine9.php?exam_mounth=<?php echo date("Y-m"); ?>" target="blank">CLASS NINE CLASS ROUTINE</a>
                        </div>
                 
                        <div class="des_title">
                            <i class="fas fa-caret-right"></i>
                            <a class="title" href="exam_routine/Routine10.php?exam_mounth=<?php echo date("Y-m"); ?>" target="blank">CLASS TEN CLASS ROUTINE</a>
                        </div>
              
            </div>
        </div>
    </div>



@endsection
