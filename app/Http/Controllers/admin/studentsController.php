<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class studentsController extends Controller
{
    public function StudentAdmissionId($admition_id)
    {
        $mutiple = (rand(1, 9));
        $admition_ID = $admition_id;
        return $admition_ID += $mutiple;
    }
    public function word_digit($word)
    {
        $warr = explode(';', $word);
        $result = '';
        foreach ($warr as $value) {
            switch (trim($value)) {
                case 'Play':
                    $result .= '0';
                    break;
                case 'One':
                    $result .= '1';
                    break;
                case 'Two':
                    $result .= '2';
                    break;
                case 'Three':
                    $result .= '3';
                    break;
                case 'Four':
                    $result .= '4';
                    break;
                case 'Five':
                    $result .= '5';
                    break;
                case 'Six':
                    $result .= '6';
                    break;
                case 'Seven':
                    $result .= '7';
                    break;
                case 'Eight':
                    $result .= '8';
                    break;
                case 'Nine':
                    $result .= '9';
                    break;
                case 'Ten':
                    $result .= '10';
                    break;
            }
        }
        return $result;
    }
    public function StudentId($class, $roll)
    {
        $classidd = $this->word_digit($class);
        $classid = str_pad($classidd, 2, '0', STR_PAD_LEFT);
        $yearid = date("y");
        $rollid = str_pad($roll, 3, '0', STR_PAD_LEFT);
        return $yearid . $classid . $rollid;
    }


public function student_image(Request $r)
{

    $id = $r->id;

$info = DB::table('students')->where('id',$id)->get();


    if(file_exists(env('FILE_PATH').'/students/'.$info[0]->StudentPicture)){
        unlink(env('FILE_PATH').'/students/'.$info[0]->StudentPicture);
        }


    // die();


		$data=[];		
    if($r->hasfile('StudentPicture'))	{
        $image = $r->file('StudentPicture');
    $imageext = $image->extension();
    $imagefile=time().'.'.$imageext;
    
    $image->storeAs('/public/students/',$imagefile);
        $data['StudentPicture']=$imagefile;
    }
    
DB::table('students')->where('id',$id)->update($data);

return redirect()->back();

}


public function student_search(Request $r)
{
    $class = $r->student_class;
  $status = $r->status;

if($class=='All'){
    return redirect('/school/students/'.$status.'/list');
}else{
    return redirect('/school/students/'.$status.'/'.$class.'/list');
}




}




    public function Search_list(Request $r, $status,$class)
    {

$data['class']=$class;
 $data['status'] = $status;


        if ($status == 'Active') {
            $wheredata = [
                'StudentStatus' => 'Active',
                'StudentClass' => $class,
            ];
        }else 
        if ($status == 'Pending') {
            $wheredata = [
                'StudentStatus' => 'Pending',
                'StudentClass' => $class,
            ];
        }else 
        if ($status == 'Reject') {
            $wheredata = [
                'StudentStatus' => 'Reject',
                'StudentClass' => $class,
            ];
        }else 
        if ($status == 'Application Aproved') {
            $wheredata = [
                'StudentStatus' => 'Aproved',
                'StudentClass' => $class,
            ];
        }
        $data['rows'] = DB::table('students')->where($wheredata)->orderBy('id', 'ASC')->get();
        return view('admin.students', $data);
    } 
    



    public function list(Request $r, $status)
    {

$data['class']="All";


        $data['status'] = $status;




        if ($status == 'Active') {
            $wheredata = [
                'StudentStatus' => 'Active',
              
            ];
        }else 
        if ($status == 'Pending') {
            $wheredata = [
                'StudentStatus' => 'Pending',
             
            ];
        }else 
        if ($status == 'Reject') {
            $wheredata = [
                'StudentStatus' => 'Reject',
               
            ];
        }else 
        if ($status == 'Application Aproved') {
            $wheredata = [
                'StudentStatus' => 'Aproved',
                
            ];
        }





        $data['rows'] = DB::table('students')->where($wheredata)->orderBy('id', 'ASC')->get();
        return view('admin.students', $data);
    } 
    



    public function student_view(Request $r, $id)
    {
    
        $data['rows'] = DB::table('students')->where('id',$id)->orderBy('id', 'ASC')->get();


       return view('admin.students_view', $data);
    }



    public function student_action(Request $r, $type,$id)
    {
    
if($type=='Delete'){

  DB::table('students')->where('id',$id)->delete();

}else if($type=='Reject'){

    $dataUpdate = [
        'StudentStatus'=>'Reject'
    ];
 DB::table('students')->where('id',$id)->update($dataUpdate);

}else if($type=='Aprove'){
    $dataUpdate = [
        'StudentStatus'=>'Aproved'
    ];
    DB::table('students')->where('id',$id)->update($dataUpdate);

}



       


     return redirect()->back();
    }




    public function add()
    {
        $studentstable =  DB::getSchemaBuilder()->getColumnListing('students');
        $row = [];
        foreach ($studentstable as $rowname) {
            $row[$rowname] = '';
        };
        $rows[] = $row;
        $object = json_decode(json_encode($rows));
        $data['rows'] = $object;
        $data['status'] = 'Active';
        return view('form.student_form', $data);
    }
    public function edit(Request $r, $status, $id)
    {
        $data['status'] = $status;
        $data['rows'] = DB::table('students')->where('id', $id)->get();
        return view('form.student_form', $data);
    }
    public function student_check(Request $r)
    {
        $class = $r->classvalue;
        $wheredata = [
            'StudentStatus' => 'Active',
            'StudentClass' => $class,
        ];
        $count = DB::table('students')->where($wheredata)->count();
        if ($count > 0) {
            $row = DB::table('students')->where($wheredata)->orderBy('id', 'DESC')->get();
            $admition_id = $row[0]->AdmissionID;
            $roll = $row[0]->StudentRoll + 1;
            $admition_ID = $this->StudentAdmissionId($admition_id);
            $StudentID = $this->StudentId($class, $roll);
            echo $admition_ID;
            echo ",";
            echo $StudentID;
            echo ",";
            echo $row[0]->StudentRoll + 1;
        } else {
            $one = "0001";
            $year = date("dmy");
            $admition_ID = $year . $one;
            ////////////////////////////////
            $StudentID = $this->StudentId($class, "1");
            echo $admition_ID;
            echo ",";
            echo $StudentID;
            echo ",";
            echo '1';
        }
    }
    public function student_submit(Request $r)
    {
        $id = $r->id;
        $status = $r->status;
        $data = [];
        $inputData = $r->all();
        foreach ($inputData as $key => $value) {
            if ($key == 'id' || $key == '_token' || $key == 'status') {
            } else {
                $data[$key] = $value;
            }
        }
        if ($id == '') {
            DB::table('students')->insert($data);
            $r->session()->flash('msg', 'Data Inserted Succcessfully');
            return redirect()->back();
        } else {
            DB::table('students')->where('id', $id)->update($data);
            $r->session()->flash('msg', 'Data Updated Succcessfully');
            return redirect('/school/students/' . $status . '/list');
        }
    }
    public function transfer_in_list()
    {
        return view('admin.students');
    }
    public function transfer_out_list()
    {
        return view('admin.students');
    }
    public function aplication_list()
    {
        return view('admin.students');
    }
}
