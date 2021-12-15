<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class StartAdmissionController extends Controller
{

    
    public function StartAdmission_sheet(Request $r)
    {

        $data['run_query'] = DB::table('add_admition_form')->orderBy('id','DESC')->get();



       return view('admin.StartAdmission',$data);
    }


    public function AdmissionDateSet(Request $r)
    {
        $onePlus = "1";
        $zero = "0";
        $cuYear = date("Y"); 
        
        $year = $cuYear + $onePlus;

        $items = [[
        'id'=>'',
        'start'=>'',
          'end' => '',
          'action' => '',
          'remove' => '',
          'year' => $year,
   
         ],];
         $object = json_decode(json_encode($items));
 
         $data['rows'] = $object;



       return view('form.AdmissionDateSet',$data);
    }



    public function AdmissionDateEdit(Request $r,$id)
    {
$data['rows'] =    DB::table('add_admition_form')->where('id',$id)->get();

       return view('form.AdmissionDateSet',$data);
    }


    public function AdmissionDateDelete(Request $r,$id)
    {

DB::table('add_admition_form')->where('id',$id)->delete();

       return redirect()->back();
    }



    public function AdmissionDateSet_submit(Request $r)
    {



        $data = [
            'start'=>$r->start_date,
            'end' => $r->end_date,
  
            'remove' => $r->remove_date,
            'year' => $r->year,


        ];
$id = $r->id;

if($id==''){
    DB::table('add_admition_form')->insert($data);

}else{
    DB::table('add_admition_form')->where('id',$id)->update($data);

}



return redirect()->back();



   
    }



}
