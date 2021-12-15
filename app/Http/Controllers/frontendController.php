<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
class frontendController extends Controller
{
    public function home()
    {
        $fromCount = DB::table('add_admition_form')->count();
        if ($fromCount > 0) {
            $data['add_admition_form'] = DB::table('add_admition_form')->get();
        } else {
            $items = [[
                'start' => '',
                'end' => '',
                'action' => '',
                'remove' => '',
            ],];
            $object = json_decode(json_encode($items));
            $data['add_admition_form'] = $object;
        }
        return view('home', $data);
    }
    public function teacher()
    {
        $data['rows'] = DB::table('staff')->get();
        return view('teacher', $data);
    }
    public function student_at_a_glance()
    {
        //$data['rows'] = DB::table('students')->get();
        $class = ['Play', 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine', 'Ten'];
        $classCount = count($class);
        $totalStudent = [];
        $maleStudent = [];
        $FemaleStudent = [];
        $scienceStudent = [];
        $HumanitiesStudent = [];
        $CommerceStudent = [];
        for ($i = 0; $i < $classCount; $i++) {
            //total
            $whereTotal = [
                'StudentStatus' => 'Active',
                'StudentClass' => $class[$i],
            ];
            $totalStudent[$class[$i]] = DB::table('students')->where($whereTotal)->count();
            //maleStudent
            $wheremale = [
                'StudentGender' => 'Male',
                'StudentStatus' => 'Active',
                'StudentClass' => $class[$i],
            ];
            $maleStudent[$class[$i]] = DB::table('students')->where($wheremale)->count();
            //FemaleStudent
            $whereFemale = [
                'StudentGender' => 'Female',
                'StudentStatus' => 'Active',
                'StudentClass' => $class[$i],
            ];
            $FemaleStudent[$class[$i]] = DB::table('students')->where($whereFemale)->count();
            //science
            $wherescience = [
                'StudentGroup' => 'Science',
                'StudentStatus' => 'Active',
                'StudentClass' => $class[$i],
            ];
            $scienceStudent[$class[$i]] = DB::table('students')->where($wherescience)->count();
            //HumanitiesStudent
            $whereHumanities = [
                'StudentGroup' => 'Humanities',
                'StudentStatus' => 'Active',
                'StudentClass' => $class[$i],
            ];
            $HumanitiesStudent[$class[$i]] = DB::table('students')->where($whereHumanities)->count();
            //CommerceStudent
            $whereCommerce = [
                'StudentGroup' => 'Commerce',
                'StudentStatus' => 'Active',
                'StudentClass' => $class[$i],
            ];
            $CommerceStudent[$class[$i]] = DB::table('students')->where($whereCommerce)->count();
        }
        for ($j = 0; $j < $classCount; $j++) {
            $studentCount[$class[$j]] = [
                ['class' => $class[$j]],
                [
                    'totalStudent' => $totalStudent,
                    'maleStudent' => $maleStudent,
                    'FemaleStudent' => $FemaleStudent,
                    'scienceStudent' => $scienceStudent,
                    'HumanitiesStudent' => $HumanitiesStudent,
                    'CommerceStudent' => $CommerceStudent,
                ]
            ];
        }
        $data['staudents'] = $studentCount;
        //   echo '<pre>';
        // print_r($studentCount);
        $j = 0;
        // foreach($staudents as $list){
        // //   echo   $class[$j];
        //      print_r($list);
        // $j++;
        // }
        return view('student_at_a_glance', $data);
    }
    public function student_list(Request $r)
    {
        return view('student_list');
    }
    public function total_student(Request $r)
    {
        $class  = $r->class;
        $year = $r->year;
        $wd = [
            'StudentClass' => $class,
            'Year' => $year,
            'StudentStatus' => 'Active',
        ];
        $data['count'] = DB::table('students')->where($wd)->count();
        if ($data['count'] > 0) {
            $data['rows'] = DB::table('students')->where($wd)->get();
        }
        return view('total_student', $data);
    }
    public function public_result(Request $r)
    {
        return view('public_result');
    }
    public function result(Request $r)
    {
        return view('result');
    }
    public function view_result(Request $r)
    {
        $data['class'] = $r->class;
        $data['roll'] = $r->roll;
        $data['year'] = $r->year;
        $data['exam_name'] = $r->exam_name;
        $wd = [
            'class' => $r->class,
            'roll' => $r->roll,
            'year' => $r->year,
            'exam_name' => $r->exam_name,
        ];
        $data['check'] = DB::table('student_result')->where($wd)->count();
        if ($data['check'] > 0) {
            $data['rows'] = DB::table('student_result')->where($wd)->get();
        }
        return view('view_result', $data);
    }
    public function weakly_result(Request $r)
    {
        $data['date'] = DB::table('results_single')->select('date')->distinct()->get();
        $data['subject'] = DB::table('results_single')->select('subject')->distinct()->get();
        return view('weakly_result', $data);
    }
    public function weakly_result_data(Request $r)
    {
        $data['class'] = $r->class;
        $data['roll'] = $r->roll;
        $data['subject'] = $r->subject;
        $data['date'] = $r->exam_date;
        $wd = [
            'sctudent_class' => $r->class,
            'subject' => $r->subject,
            'date' => $r->exam_date,
        ];
        $data['check'] = DB::table('results_single')->where($wd)->count();
        if ($data['check'] > 0) {
            $data['rows'] = DB::table('results_single')->where($wd)->get();
        }
        return view('weakly_result_data', $data);
    }
    public function admissionOnlineForm(Request $r)
    {
        $ww = [
            'year' => date("Y") + 1
        ];
        $data['rows'] = DB::table('add_admition_form')->where($ww)->get();
        $data['current_date'] =  date("Y-m-d H:i:s");
        $data['end'] = $data['rows'][0]->end . " " . "23:59:59";
        $year = date("Y");
        $yearForCheck = $year + 1;
        $date = date("Y-m-d");
        $wh = [
            'year' => $yearForCheck,
            'StudentStatus' => 'panding',
        ];
        $cc = DB::table('students')->where($wh)->orderBy('id', 'ASC')->count();
        if ($cc) {
            $query1 = DB::table('students')->where($wh)->orderBy('id', 'ASC')->get();
            $admition_id = $query1[0]->AdmissionID;
            $mutiple = (rand(1, 9));
            $admition_ID = $admition_id;
            $admition_ID += $mutiple;
        } else {
            $one = "0001";
            $year = date("dmy");
            $admition_ID = $year . $one;
        }
        $data['admition_ID'] = $admition_ID;
        return view('admissionOnlineForm', $data);
    }  
    
    
    
    public function Admission_checkout(Request $r)
    {


        $items = [[
            'student_name'=>$r->student_name,
            'student_gender'=>$r->student_gender,
              'student_date_of_birth' => $r->student_date_of_birth,
              'birthIdNo' => $r->birthIdNo,
              'student_Religion' => $r->student_Religion,
              'class' => $r->class,
              'Group' => $r->Group,
              'year' => $r->year,
              'date' => $r->date,
              'Father_name' => $r->Father_name,
              'FathersOccupation' => $r->FathersOccupation,
              'Mother_name' => $r->Mother_name,
              'MothersOccupation' => $r->MothersOccupation,
              'vill' => $r->vill,
              'post' => $r->post,
              'thana' => $r->thana,
              'dist' => $r->dist,
              'Phone_number' => $r->Phone_number,
              'password' => $r->password,
              'postal_code' => $r->postal_code,
              'admition_id' => $r->admition_id,
              'Referance' => $r->Referance,
       
             ],];
             $object = json_decode(json_encode($items));
     
             $data['rows'] = $object;



        return view('Admission_checkout', $data);
    }    
    
    public function Admission_success(Request $r)
    {


        $data = [
            'StudentName'=>$r->student_name,
            'StudentGender'=>$r->student_gender,
              'StudentDateOfBirth' => $r->student_date_of_birth,
              'StudentBirthCertificateNo' => $r->birthIdNo,
              'StudentReligion' => $r->student_Religion,
              'StudentClass' => $r->class,
              'StudentGroup' => $r->Group,
              'Year' => $r->year,
        
              'StudentFatherName' => $r->Father_name,
              'StudentFatherOccupation' => $r->FathersOccupation,
              'StudentMotherName' => $r->Mother_name,
              'StudentMotherOccupation' => $r->MothersOccupation,
              'StudentAddress' => $r->vill.', '.$r->post.', '.$r->thana.', '.$r->dist,
         
     
              'StudentPhoneNumber' => $r->Phone_number,
    
              'AreaPostalCode' => $r->postal_code,
              'AdmissionID' => $r->admition_id,
              'StudentStatus' => 'Pending',
  
       
             ];
      

			
             if($r->hasfile('student_image'))	{
                $image = $r->file('student_image');
            $imageext = $image->extension();
            $imagefile=time().'.'.$imageext;
            
            $image->storeAs('/public/students/',$imagefile);
                $data['StudentPicture']=$imagefile;
            }

DB::table('students')->insert($data);

$datap = [
    'admissionID'=>$r->admition_id,
    'Name'=>$r->student_name,
    'paymentType'=>$r->paymentType,
    'paymentDate'=>$r->paymentDate,
    'paymentAmount'=>$r->paymentAmount,
    'year'=>$r->year,
    'totalAmount'=>$r->paymentAmount,
    'TRXID'=>$r->TRXID,
    'paymentNumber'=>$r->PaymentNumber,
];

DB::table('payment')->insert($datap);

return redirect("/admit/$r->admition_id");


    }    

function admit($id){

    $wh = [
        'AdmissionID'=>$id,
    ];
$data['row'] = DB::table('students')->where($wh)->get();


        //in Controller    
        $pathgovlogo = 'frontend/logo.png';
        $typegovlogo = pathinfo($pathgovlogo, PATHINFO_EXTENSION);
        $dataigovlogo = file_get_contents($pathgovlogo);
        $govlogo = 'data:image/' . $typegovlogo . ';base64,' . base64_encode($dataigovlogo);

$data['govlogo'] = $govlogo;


$StudentPicture = $data['row'][0]->StudentPicture;
        //in Controller    
        $pathStudentPicture = env('FILE_PATH')."students/$StudentPicture";
        $typeStudentPicture = pathinfo($pathStudentPicture, PATHINFO_EXTENSION);
        $dataiStudentPicture = file_get_contents($pathStudentPicture);
        $StudentPicture = 'data:image/' . $typeStudentPicture . ';base64,' . base64_encode($dataiStudentPicture);

$data['StudentPicture'] = $StudentPicture;



$aadId = str_split($data['row'][0]->AdmissionID);
$uot = '';
$lenth = count($aadId);
for($i=0;$i<$lenth;$i++){

$uot .= "<span class='addborder'>$aadId[$i]</span>";


}
$data['uot'] = $uot;

// print_r($uot);

// die();

$pdf = PDF::loadView('Admission_success', $data);
return $pdf->stream('document.pdf');
  //  return view('Admission_success', $data);




}

    public function check_availability(Request $r,$nid)
    {
$wh = [
    'StudentBirthCertificateNo'=>$nid,
];

echo  $infoCount = DB::table('students')->where($wh)->count(); 

    }

    public function check_availabilitytrx(Request $r,$TRXID)
    {

$wh = [
    'TRXID'=>$TRXID,
];

echo  $infoCount = DB::table('payment')->where($wh)->count(); 

    }
}
