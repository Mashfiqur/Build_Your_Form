<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormInfo;
use App\Models\Field;
use App\Models\Parameter;
use DB;

class PostController extends Controller
{
    
    public function post_data($id){

        $form =  DB::table('form_infos')->join('parameters','form_infos.id','=','parameters.form_id')->where('form_infos.id',$id)->select('form_infos.id','form_infos.name','parameters.field_name','parameters.field_type')->get();
       return view('form',compact('form'));
    }
    public function submit_data(Request $request){
        $data = $request->except('_token','form_id');
        foreach($data as $id => $value){
           DB::table('posts')->insert([
                'form_id' => $request->form_id,
                'field_name' => $id,
                'field_value' => $value,

           ]);
        }
        return redirect()->route('home')->with('success','Data Saved Successfully!');
    }
    public function view_data($id){
      $data = DB::table('posts')->where('form_id',$id)->get();
      return view('datatable',compact('data'));

    }
}
