<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class staffsController extends Controller
{
    public function list()
    {

$data['rows'] = DB::table('staff')->get();

       return view('admin.staffs',$data);
    }


    public function staffs_view(Request $r, $id)
    {
    
        $data['rows'] = DB::table('staff')->where('id',$id)->orderBy('id', 'ASC')->get();


       return view('admin.staff_view', $data);
    }



    public function add()
    {
        $studentstable =  DB::getSchemaBuilder()->getColumnListing('staff');
        $row = [];
        foreach ($studentstable as $rowname) {
     
if($rowname=='TeacherId'){
    $row[$rowname] = strtoupper(Str::random(10));

}else{
    $row[$rowname] = '';
}

          
        };
        $rows[] = $row;
        $object = json_decode(json_encode($rows));
        $data['rows'] = $object;
        $data['status'] = 'Active';
        return view('form.teacher_form', $data);
    }



    public function edit(Request $r, $id)
    {

        $data['rows'] = DB::table('staff')->where('id', $id)->get();
        return view('form.teacher_form', $data);
    }

    public function staffs_submit(Request $r)
    {
        $id = $r->id;
        $status = $r->status;
        $data = [];
        $inputData = $r->all();
        foreach ($inputData as $key => $value) {
            if ($key == 'id' || $key == '_token' || $key == 'status' || $key == 'TeacherSubmit') {
            } else {
                $data[$key] = $value;
            }
        }
        if ($id == '') {
            DB::table('staff')->insert($data);
            $r->session()->flash('msg', 'Data Inserted Succcessfully');
            return redirect()->back();
        } else {
            DB::table('staff')->where('id', $id)->update($data);
            $r->session()->flash('msg', 'Data Updated Succcessfully');
            return redirect('/school/staffs');
        }
    }



    public function staffs_action(Request $r, $type,$id)
    {
    
if($type=='Delete'){

  DB::table('staff')->where('id',$id)->delete();

}else if($type=='Reject'){

    $dataUpdate = [
        'TeacherStatus'=>'Reject'
    ];
 DB::table('staff')->where('id',$id)->update($dataUpdate);

}else if($type=='Aprove'){
    $dataUpdate = [
        'TeacherStatus'=>'Aproved'
    ];
    DB::table('staff')->where('id',$id)->update($dataUpdate);

}



       


     return redirect()->back();
    }



    public function staffs_image(Request $r)
    {
    
        $id = $r->id;
    
    $info = DB::table('staff')->where('id',$id)->get();
    
    
        if(file_exists(env('FILE_PATH').'staffs/'.$info[0]->ProfilePicture)){
            unlink(env('FILE_PATH').'staffs/'.$info[0]->ProfilePicture);
            }
    
    
        // die();
    
    
            $data=[];		
        if($r->hasfile('ProfilePicture'))	{
            $image = $r->file('ProfilePicture');
        $imageext = $image->extension();
        $imagefile=time().'.'.$imageext;
        
        $image->storeAs('/public/staffs/',$imagefile);
            $data['ProfilePicture']=$imagefile;
        }
        
    DB::table('staff')->where('id',$id)->update($data);
    
    return redirect()->back();
    
    }
    
    


}
