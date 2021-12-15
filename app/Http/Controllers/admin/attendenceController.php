<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class attendenceController extends Controller
{
    public function attendence_sheet()
    {
        $data['data'] = '';
        $data['class'] = '';
        $data['date_month'] = '';
        return view('admin.attendence_sheet', $data);
    }
    public function attendence_sheet_search(Request $r)
    {
        // echo '<pre>';
        // print_r($r->all());
        $sutdent_class = $r->student_class;
        $view = $r->view;
        $date = $r->date;
        return redirect("school/attendence_sheet/$sutdent_class/$view/$date");
    }
    public function attendence_sheet_result(Request $r, $student_class, $view, $date)
    {
        $data['data'] = $view;
        $data['class'] = $student_class;
        $data['date_month'] = $date;
        if ($data['data'] == 'Daily') {
            $coutnWhere = [
                'student_class' => $student_class,
                'date' => $date,
                'year' => date("Y"),
            ];
            $data['count'] = DB::table('attendances')->where($coutnWhere)->count();
            if ($data['count'] > 0) {

                $aWhere = [
                    'date' => $date,
                    'student_class' => $student_class,
                   
                ];
                $data['attten'] = DB::table('attendances')->where($aWhere)->get();

            } else {
                $sWhere = [
                    'StudentClass' => $student_class,
                    'Year' => date('Y'),
                    'StudentStatus' => 'Active',
                ];
                $data['rows'] = DB::table('students')->where($sWhere)->get();
            }
        }else if ($data['data'] == 'Monthly'){


            $aWhere = [
                'month' => date("F", strtotime($date)),
                'student_class' => $student_class,
               
            ];
            $data['rows'] = DB::table('attendances')->where($aWhere)->get();



        }
        return view('admin.attendence_sheet', $data);
    }
    public function attendence_sheet_submit(Request $r)
    {
        $count = count($r->stu_roll);
        for ($i = 0; $i < $count; $i++) {
            $attendance[$i] = [
                'id' => $r->id[$i],
                'stu_roll' => $r->stu_roll[$i],
                'fatherName' => $r->fatherName[$i],
                'motherName' => $r->motherName[$i],
                'stu_id' => $r->stu_id[$i],
                'AdmisionId' => $r->AdmisionId[$i],
                'stu_name' => $r->stu_name[$i],
                'phone' => $r->phone[$i],
                'attendence' => $r->attendence[$i],
                'status' => 'pending',
            ];
        }
        $attendances = json_encode($attendance);
        $data = [
            'date' => $r->date,
            'month' => $r->month,
            'year' => $r->cYear,
            'student_class' => $r->class[0],
            'attendance' => $attendances
        ];


//         print_r($data);
// die();
        DB::table('attendances')->insert($data);

return redirect()->back()->with('msg','');

    }


public function attendence_sheet_edit(Request $r,$id)
{
//    echo $id;

//    echo '<br>';
//    echo $r->id;


$data['attId'] = $r->id;

   $data['attInfo'] = DB::table('attendances')->where('id',$id)->get();

//   $record = json_decode($attInfo[0]->attendance);
// foreach($record as $list){



// if($list->id==$r->id){
// echo $list->id;
// }
 // }

return view('admin.att_edit',$data);




}

public function attendence_sheet_edit_submit(Request $r)
{


$attId = $r->attId;
// echo $r->id[0];


$oldData = DB::table('attendances')->where('id',$attId)->get();
$attData = json_decode($oldData[0]->attendance);


$j=0;
foreach($attData as $list){

if($list->id==$r->id[0]){

}else{


$attendance[$j] = [
    'id' => $list->id,
    'stu_roll' => $list->stu_roll,
    'fatherName' => $list->fatherName,
    'motherName' => $list->motherName,
    'stu_id' => $list->stu_id,
    'AdmisionId' => $list->AdmisionId,
    'stu_name' => $list->stu_name,
    'phone' => $list->phone,
    'attendence' => $list->attendence,
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
            'attendence' => $r->attendence[0],
            'status' => 'pending',
        ];


// echo  '<pre>';
// print_r($attendance);
// die();
    $attendances = json_encode($attendance);
    $data = [

        'attendance' => $attendances
    ];


    DB::table('attendances')->where('id',$attId)->update($data);

    return redirect()->back()->with('msg','');


}




}
