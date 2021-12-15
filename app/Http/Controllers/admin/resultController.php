<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class resultController extends Controller
{
    public function result_sheet()
    {
        $data['class'] = '';
        $data['ExamType'] = '';
        $data['Subject'] = '';
        $data['date'] = date('Y-m-d');
        $data['resultCount'] = 0;
        return view('admin.result_sheet', $data);
    }
    public function result_sheet_search(Request $r)
    {
        // echo '<pre>';
        // print_r($r->all());
        $sutdent_class = $r->student_class;
        $ExamType = $r->ExamType;
        $Subject = $r->Subject;
        $date = $r->date;
        $group = $r->group;
        return redirect("school/result_sheet/$group/$sutdent_class/$ExamType/$Subject/$date");
    }
    public function result_sheet_result(Request $r,$group, $student_class, $exam, $subject, $date)
    {
        $data['class'] = $student_class;
        $data['ExamType'] = $exam;
        $data['Subject'] = $subject;
        $data['date'] = $date;
        if ($data['ExamType'] == 'Weakly Examination') {
            $resultW = [
                'date' => $date,
                'year' => date("Y", strtotime($date)),
                'sctudent_class' => $student_class,
                'exam_name' => $exam,
                'subject' => $subject,
            ];
            $data['resultCount'] = DB::table('results_single')->where($resultW)->count();
        } else if ($data['ExamType'] == 'First Terminals Examination' || $data['ExamType'] == 'Second Terminals Examination' || $data['ExamType'] == 'Test Examination' || $data['ExamType'] == 'Annual Examination') {
            $resultW = [
                'year' => date("Y", strtotime($date)),
                'class' => $student_class,
                'exam_name' => $exam,
            ];
            $resultCount = DB::table('student_result')->where($resultW)->count();
            if ($resultCount > 0) {
                $info = DB::table('student_result')->where($resultW)->get();
                //  id	stu_id	name	roll	year	exam_name	class	Bangla_1st	Bangla_2nd	English_1st	English_2nd	Math	Chemistry	physics	Biology	Science	B_and_B	ReligionIslam	ReligionHindu	Agriculture	ICT	total	status	FinalResultStutus	date
                if ($subject == 'বাংলা') {
                    if ($info[0]->Bangla_1st == '') {
                        $data['resultCount'] = 0;
                    } else {
                        $data['resultCount'] = 1;
                    }
                } else if ($subject == 'বাংলা ১ম') {
                    if ($info[0]->Bangla_1st == '') {
                        $data['resultCount'] = 0;
                    } else {
                        $data['resultCount'] = 1;
                    }
                } else if ($subject == 'বাংলা ২য়') {
                    if ($info[0]->Bangla_2nd == '') {
                        $data['resultCount'] = 0;
                    } else {
                        $data['resultCount'] = 1;
                    }
                } else if ($subject == 'ইংলিশ') {
                    if ($info[0]->English_1st == '') {
                        $data['resultCount'] = 0;
                    } else {
                        $data['resultCount'] = 1;
                    }
                } else if ($subject == 'ইংলিশ ১ম') {
                    if ($info[0]->English_1st == '') {
                        $data['resultCount'] = 0;
                    } else {
                        $data['resultCount'] = 1;
                    }
                } else if ($subject == 'ইংলিশ ২য়') {
                    if ($info[0]->English_2nd == '') {
                        $data['resultCount'] = 0;
                    } else {
                        $data['resultCount'] = 1;
                    }
                } else if ($subject == 'গনিত') {
                    if ($info[0]->Math == '') {
                        $data['resultCount'] = 0;
                    } else {
                        $data['resultCount'] = 1;
                    }
                } else if ($subject == 'বিজ্ঞান') {
                    if ($info[0]->Science == '') {
                        $data['resultCount'] = 0;
                    } else {
                        $data['resultCount'] = 1;
                    }
                } else if ($subject == 'রসায়ন') {
                    if ($info[0]->Chemistry == '') {
                        $data['resultCount'] = 0;
                    } else {
                        $data['resultCount'] = 1;
                    }
                } else if ($subject == 'পদার্থ') {
                    if ($info[0]->physics == '') {
                        $data['resultCount'] = 0;
                    } else {
                        $data['resultCount'] = 1;
                    }
                } else if ($subject == 'জীব-বিজ্ঞান') {
                    if ($info[0]->Biology == '') {
                        $data['resultCount'] = 0;
                    } else {
                        $data['resultCount'] = 1;
                    }
                } else if ($subject == 'বাংলাদেশ ও বিশ্ব পরিচয়') {
                    if ($info[0]->B_and_B == '') {
                        $data['resultCount'] = 0;
                    } else {
                        $data['resultCount'] = 1;
                    }
                } else if ($subject == 'ইসলাম-ধর্ম') {
                    if ($info[0]->ReligionIslam == '') {
                        $data['resultCount'] = 0;
                    } else {
                        $data['resultCount'] = 1;
                    }
                } else if ($subject == 'হিন্দু-ধর্ম') {
                    if ($info[0]->ReligionHindu == '') {
                        $data['resultCount'] = 0;
                    } else {
                        $data['resultCount'] = 1;
                    }
                } else if ($subject == 'কৃষি') {
                    if ($info[0]->Agriculture == '') {
                        $data['resultCount'] = 0;
                    } else {
                        $data['resultCount'] = 1;
                    }
                } else if ($subject == 'তথ্য ও যোগাযোগ প্রযোক্তি') {
                    if ($info[0]->ICT == '') {
                        $data['resultCount'] = 0;
                    } else {
                        $data['resultCount'] = 1;
                    }
                }
                // echo  $data['resultCount'];
            } else {
                $data['resultCount'] = 0;
            }
            // echo $data['resultCount'];
            //       die();
        } else {
            $data['resultCount'] = 0;
        }
        if ($data['resultCount'] > 0) {
            if ($data['ExamType'] == 'First Terminals Examination' || $data['ExamType'] == 'Second Terminals Examination' || $data['ExamType'] == 'Test Examination' || $data['ExamType'] == 'Annual Examination') {
                $data['rows'] = DB::table('student_result')->where($resultW)->get();
            } else {
                $data['rows'] = DB::table('results_single')->where($resultW)->get();
            }
        } else {
      





          
                $sw = [
                    'StudentClass' => $student_class,
                    'Year' => date('Y'),
                    'StudentStatus' => 'Active',
                
                ];

$data['searchSubject']  = $subject;
$data['group']  = $group;

                $data['rows'] = DB::table('students')->where($sw)->orderBy('StudentRoll', 'ASC')->get();
       
         


        }
        return view('admin.result_sheet', $data);
    }
    public function result_sheet_submit(Request $r)
    {
   
        
        if ($r->exam_name == 'Weakly Examination') {

            $resultW = [
                'year' => $r->year,
                'class' => $r->sctudent_class,
                'exam_name' => $r->exam_name,
            ];
            $resultCount = DB::table('student_result')->where($resultW)->count();

            $resultW = [
                'date' => $r->date,
                'year' => date("Y", strtotime($r->date)),
                'sctudent_class' => $r->sctudent_class,
                'exam_name' => $r->exam_name,
                'subject' => $r->subject,
            ];

// print_r($resultW);

       echo    $resultCount = DB::table('results_single')->where($resultW)->count();
if($resultCount>0){
    $count = count($r->StudentRoll);
    for ($i = 0; $i < $count; $i++) {
        $result[$i] = [
            'id' => $r->id[$i],
            'Subject' => $r->Subject[$i],
            'StudentRoll' => $r->StudentRoll[$i],
            'StudentName' => $r->StudentName[$i],
            'StudentID' => $r->StudentID[$i],
            'AdmissionID' => $r->AdmissionID[$i],
            'StudentFatherName' => $r->StudentFatherName[$i],
            'StudentMotherName' => $r->StudentMotherName[$i],
            'StudentGender' => $r->StudentGender[$i],
            'StudentReligion' => $r->StudentReligion[$i],
            'StudentPhoneNumber' => $r->StudentPhoneNumber[$i],
            'StudentEmail' => $r->StudentEmail[$i],
            'StudentGroup' => $r->StudentGroup[$i],
            'total_mark_s' => $r->total_mark_s[$i],
            'mark' => $r->mark[$i],
            'status' => 'pending',
        ];
    }
    $results = json_encode($result);
    $data = [
        'date' => $r->date,
        'month' => $r->month,
        'year' => $r->year,
        'sctudent_class' => $r->sctudent_class,
        'subject' => $r->subject,
        'exam_name' => $r->exam_name,
        'total_mark' => $r->total_mark,
        'result' => $results,
        'status' => $r->status
    ];
    DB::table('results_single')->where($resultW)->update($data);


}else{
              $count = count($r->StudentRoll);
            for ($i = 0; $i < $count; $i++) {
                $result[$i] = [
                    'id' => $r->id[$i],
                    'Subject' => $r->Subject[$i],
                    'StudentRoll' => $r->StudentRoll[$i],
                    'StudentName' => $r->StudentName[$i],
                    'StudentID' => $r->StudentID[$i],
                    'AdmissionID' => $r->AdmissionID[$i],
                    'StudentFatherName' => $r->StudentFatherName[$i],
                    'StudentMotherName' => $r->StudentMotherName[$i],
                    'StudentGender' => $r->StudentGender[$i],
                    'StudentReligion' => $r->StudentReligion[$i],
                    'StudentPhoneNumber' => $r->StudentPhoneNumber[$i],
                    'StudentEmail' => $r->StudentEmail[$i],
                    'StudentGroup' => $r->StudentGroup[$i],
                    'total_mark_s' => $r->total_mark_s[$i],
                    'mark' => $r->mark[$i],
                    'status' => 'pending',
                ];
            }
            $results = json_encode($result);
            $data = [
                'date' => $r->date,
                'month' => $r->month,
                'year' => $r->year,
                'sctudent_class' => $r->sctudent_class,
                'subject' => $r->subject,
                'exam_name' => $r->exam_name,
                'total_mark' => $r->total_mark,
                'result' => $results,
                'status' => $r->status
            ];
            DB::table('results_single')->insert($data);


}

  

// die();



        } else {





            $resultW = [
                'year' => $r->year,
                'class' => $r->sctudent_class,
                'exam_name' => $r->exam_name,
            ];
            $resultCount = DB::table('student_result')->where($resultW)->count();
            if ($resultCount > 0) {
                //  id	stu_id	name	roll	year	exam_name	class	Bangla_1st	Bangla_2nd	English_1st	English_2nd	Math	Chemistry	physics	Biology	Science	B_and_B	ReligionIslam	ReligionHindu	Agriculture	ICT	total	status	FinalResultStutus	date	
                $count = count($r->StudentRoll);
                for ($i = 0; $i < $count; $i++) {
                    $data = [
                        'roll' => $r->StudentRoll[$i],
                        'name' => $r->StudentName[$i],
                        'stu_id' => $r->StudentID[$i],
                        'year' => $r->year,
                        'exam_name' => $r->exam_name,
                        'class' => $r->sctudent_class,
                        'status' => 'pending',
                    ];
                    //  বাংলা  বাংলা ১ম   বাংলা ২য়   ইংলিশ    ইংলিশ ১ম   ইংলিশ ২য়  গনিত   বিজ্ঞান   রসায়ন   পদার্থ  জীব-বিজ্ঞান   বাংলাদেশ ও বিশ্ব পরিচয়   ইসলাম-ধর্ম   হিন্দু-ধর্ম   কৃষি   তথ্য ও যোগাযোগ প্রযোক্তি 
                    if ($r->Subject[0] == 'বাংলা') {
                        $data['Bangla_1st'] = $r->mark[$i];
                    } else if ($r->Subject[0] == 'বাংলা ১ম') {
                        $data['Bangla_1st'] = $r->mark[$i];
                    } else if ($r->Subject[0] == 'বাংলা ২য়') {
                        $data['Bangla_2nd'] = $r->mark[$i];
                    } else if ($r->Subject[0] == 'ইংলিশ') {
                        $data['English_1st'] = $r->mark[$i];
                    } else if ($r->Subject[0] == 'ইংলিশ ১ম') {
                        $data['English_1st'] = $r->mark[$i];
                    } else if ($r->Subject[0] == 'ইংলিশ ২য়') {
                        $data['English_2nd'] = $r->mark[$i];
                    } else if ($r->Subject[0] == 'গনিত') {
                        $data['Math'] = $r->mark[$i];
                    } else if ($r->Subject[0] == 'বিজ্ঞান') {
                        $data['Science'] = $r->mark[$i];
                    } else if ($r->Subject[0] == 'রসায়ন') {
                        $data['Chemistry'] = $r->mark[$i];
                    } else if ($r->Subject[0] == 'পদার্থ') {
                        $data['physics'] = $r->mark[$i];
                    } else if ($r->Subject[0] == 'জীব-বিজ্ঞান') {
                        $data['Biology'] = $r->mark[$i];
                    } else if ($r->Subject[0] == 'বাংলাদেশ ও বিশ্ব পরিচয়') {
                        $data['B_and_B'] = $r->mark[$i];
                    } else if ($r->Subject[0] == 'ইসলাম-ধর্ম') {
                        $data['ReligionIslam'] = $r->mark[$i];
                    } else if ($r->Subject[0] == 'হিন্দু-ধর্ম') {
                        $data['ReligionHindu'] = $r->mark[$i];
                    } else if ($r->Subject[0] == 'কৃষি') {
                        $data['Agriculture'] = $r->mark[$i];
                    } else if ($r->Subject[0] == 'তথ্য ও যোগাযোগ প্রযোক্তি') {
                        $data['ICT'] = $r->mark[$i];
                    }
                    // print_r($data);
                    $ww = [
                        'year' => $r->year,
                        'class' => $r->sctudent_class,
                        'exam_name' => $r->exam_name,
                        'stu_id' => $r->StudentID[$i],
                    ];
                    DB::table('student_result')->where($ww)->update($data);
                }
            } else {
                //  id	stu_id	name	roll	year	exam_name	class	Bangla_1st	Bangla_2nd	English_1st	English_2nd	Math	Chemistry	physics	Biology	Science	B_and_B	ReligionIslam	ReligionHindu	Agriculture	ICT	total	status	FinalResultStutus	date	




                    // if ($r->Subject[0] == 'ইসলাম-ধর্ম') {
                    //     $sw = [
                    //         'StudentClass' => $r->sctudent_class,
                    //         'Year' => date('Y'),
                    //         'StudentStatus' => 'Active',
                            
                        
                    //     ];
                    //     $count = DB::table('students')->where($sw)->count();


                  
                    // } else if ($r->Subject[0] == 'হিন্দু-ধর্ম') {

                    //     $sw = [
                    //         'StudentClass' => $r->sctudent_class,
                    //         'Year' => date('Y'),
                    //         'StudentStatus' => 'Active',
                            
                            
                    //     ];
                    //     $count = DB::table('students')->where($sw)->count();


                   
                    // }else{
                    //     $count = count($r->StudentRoll);
                    // }
// echo $count;

// die();
$count = count($r->StudentRoll);

                for ($i = 0; $i < $count; $i++) {
                    $data = [
                        'roll' => $r->StudentRoll[$i],
                        'name' => $r->StudentName[$i],
                        'stu_id' => $r->StudentID[$i],
                        'year' => $r->year,
                        'exam_name' => $r->exam_name,
                        'class' => $r->sctudent_class,
                        'status' => 'pending',
                    ];
                    //  বাংলা  বাংলা ১ম   বাংলা ২য়   ইংলিশ    ইংলিশ ১ম   ইংলিশ ২য়  গনিত   বিজ্ঞান   রসায়ন   পদার্থ  জীব-বিজ্ঞান   বাংলাদেশ ও বিশ্ব পরিচয়   ইসলাম-ধর্ম   হিন্দু-ধর্ম   কৃষি   তথ্য ও যোগাযোগ প্রযোক্তি 
                    if ($r->Subject[0] == 'বাংলা') {
                        $data['Bangla_1st'] = $r->mark[$i];
                    } else if ($r->Subject[0] == 'বাংলা ১ম') {
                        $data['Bangla_1st'] = $r->mark[$i];
                    } else if ($r->Subject[0] == 'বাংলা ২য়') {
                        $data['Bangla_2nd'] = $r->mark[$i];
                    } else if ($r->Subject[0] == 'ইংলিশ') {
                        $data['English_1st'] = $r->mark[$i];
                    } else if ($r->Subject[0] == 'ইংলিশ ১ম') {
                        $data['English_1st'] = $r->mark[$i];
                    } else if ($r->Subject[0] == 'ইংলিশ ২য়') {
                        $data['English_2nd'] = $r->mark[$i];
                    } else if ($r->Subject[0] == 'গনিত') {
                        $data['Math'] = $r->mark[$i];
                    } else if ($r->Subject[0] == 'বিজ্ঞান') {
                        $data['Science'] = $r->mark[$i];
                    } else if ($r->Subject[0] == 'রসায়ন') {
                        $data['Chemistry'] = $r->mark[$i];
                    } else if ($r->Subject[0] == 'পদার্থ') {
                        $data['physics'] = $r->mark[$i];
                    } else if ($r->Subject[0] == 'জীব-বিজ্ঞান') {
                        $data['Biology'] = $r->mark[$i];
                    } else if ($r->Subject[0] == 'বাংলাদেশ ও বিশ্ব পরিচয়') {
                        $data['B_and_B'] = $r->mark[$i];
                    } else if ($r->Subject[0] == 'ইসলাম-ধর্ম') {
                        $data['ReligionIslam'] = $r->mark[$i];
                    } else if ($r->Subject[0] == 'হিন্দু-ধর্ম') {
                        $data['ReligionHindu'] = $r->mark[$i];
                    } else if ($r->Subject[0] == 'কৃষি') {
                        $data['Agriculture'] = $r->mark[$i];
                    } else if ($r->Subject[0] == 'তথ্য ও যোগাযোগ প্রযোক্তি') {
                        $data['ICT'] = $r->mark[$i];
                    }
                    DB::table('student_result')->insert($data);
                }
            }








        }
        return redirect()->back()->with('msg', '');
    }
    public function result_sheet_edit(Request $r, $id)
    {
        $data['attId'] = $r->id;
        $data['attInfo'] = DB::table('results')->where('id', $id)->get();
        return view('admin.att_edit', $data);
    }
    public function result_sheet_edit_submit(Request $r)
    {
        $attId = $r->attId;
        // echo $r->id[0];
        $oldData = DB::table('results')->where('id', $attId)->get();
        $attData = json_decode($oldData[0]->attendance);
        $j = 0;
        foreach ($attData as $list) {
            if ($list->id == $r->id[0]) {
            } else {
                $attendance[$j] = [
                    'id' => $list->id,
                    'stu_roll' => $list->stu_roll,
                    'fatherName' => $list->fatherName,
                    'motherName' => $list->motherName,
                    'stu_id' => $list->stu_id,
                    'AdmisionId' => $list->AdmisionId,
                    'stu_name' => $list->stu_name,
                    'phone' => $list->phone,
                    'result' => $list->result,
                    'status' => 'pending',
                ];
            }
            $j++;
        }
        // echo '<pre>';
        // print_r($attendance);
        //  die();
        $attendance[$j] = [
            'id' => $r->id[0],
            'stu_roll' => $r->stu_roll[0],
            'fatherName' => $r->fatherName[0],
            'motherName' => $r->motherName[0],
            'stu_id' => $r->stu_id[0],
            'AdmisionId' => $r->AdmisionId[0],
            'stu_name' => $r->stu_name[0],
            'phone' => $r->phone[0],
            'result' => $r->result[0],
            'status' => 'pending',
        ];
        // echo  '<pre>';
        // print_r($attendance);
        // die();
        $results = json_encode($attendance);
        $data = [
            'attendance' => $results
        ];
        DB::table('results')->where('id', $attId)->update($data);
        return redirect()->back()->with('msg', '');
    }




public function resultView(Request $r, $student_class, $exam, $date)
{

$data['class']=$student_class;
$data['exam_name']=$exam;

$resultW = [
    'year' => date("Y", strtotime($date)),
    'class' => $student_class,
    'exam_name' => $exam,
];
$data['rows'] = DB::table('student_result')->where($resultW)->get();



    return view('admin.resultView',$data);
    
}



public function result_publish(Request $r)
{
// echo '<pre>';
// print_r($r->all());
$count = count($r->id);
for ($i = 0; $i < $count; $i++) {
    $data = [
  
        'total' => $r->total[$i],
        'status' => $r->status,
    ];

    $ww = [
        'id' => $r->id[$i],

    ];
    DB::table('student_result')->where($ww)->update($data);



}
   // return view('admin.resultView',$data);
   return redirect()->back()->with('msg', ''); 

}


}
