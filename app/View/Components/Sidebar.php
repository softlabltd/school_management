<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;


class Sidebar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $W = [
            'TeacherPosition'=>'Head Teacher',
            'TeacherStatus'=>'Active',
        ];

$count = DB::table('staff')->where($W)->count();
if($count>0){



$data['result'] = DB::table('staff')->where($W)->get();
}else{
    $items = [[
        'ProfilePicture'=>'',
        'TeacherName'=>'',
  
         ],];
         $object = json_decode(json_encode($items));
   
         $data['result'] = $object;
}

        return view('components.sidebar',$data);
    }
}
