<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\FormInfo;
use App\Models\Field;
use App\Models\Parameter;
use DB;

class Form extends Component
{

    public $sampledata,$form_values, $form_name, $field_name1, $field_type1,$field_name2, $field_type2,$field_name3, $field_type3,$field_name4, $field_type4, $field_name5, $field_type5, $field_name6, $field_type6, $field_name7, $field_type7, $field_name8, $field_typ8;

    public function render()
    {
        $this->sampledata = FormInfo::all();
        return view('livewire.form');
    }
    public function resetInputFields()
    {
    	$this->form_name = '';
        $this->field_name1 = '';
        $this->field_type1= '';
        $this->field_name2 = '';
        $this->field_type2 = '';
        $this->field_name3 = '';
        $this->field_type3 = '';
        $this->field_name4 = '';
        $this->field_type4 = '';
        $this->field_name5 = '';
        $this->field_type5 = '';
        $this->field_name6 = '';
        $this->field_type6 = '';
        $this->field_name7 = '';
        $this->field_type7 = '';
        $this->field_name8 = '';
        $this->field_type8 = '';
    
    }
    public function store()
    {    
    	$validation = $this->validate([
    		'form_name'		=>	'bail|required',
            'field_name1'			=>	'required',
            'field_type1'			=>	'required'
    	]);

        $form = new FormInfo();
        $form->name = $this->form_name;
        $form->save();
        
        if($this->field_name1 != Null){
            // dd($this->field_type1,$this->field_name1);
               $field = new Parameter();
               $field->form_id = $form->id;
               $field->field_name = $this->field_name1;
               $field->field_type =  $this->field_type1;
               $field->save();

        }
        if($this->field_name2 != Null){
            $field = new Parameter();
            $field->form_id = $form->id;
            $field->field_name =$this->field_name2;
            $field->field_type =  $this->field_type2;
            $field->save();

     }
     if($this->field_name3 != Null){
        $field = new Parameter();
        $field->form_id = $form->id;
        $field->field_name =$this->field_name3;
        $field->field_type =  $this->field_type3;
        $field->save();

        }
        if($this->field_name4 != Null){
            $field = new Parameter();
            $field->form_id = $form->id;
            $field->field_name =$this->field_name4;
            $field->field_type =  $this->field_type4;
            $field->save();

        }
        if($this->field_name5 != Null){
            $field = new Parameter();
            $field->form_id = $form->id;
            $field->field_name =$this->field_name5;
            $field->field_type =  $this->field_type5;
            $field->save();

        }
        if($this->field_name6 != Null){
            $field = new Parameter();
            $field->form_id = $form->id;
            $field->field_name = $this->field_name6;
            $field->field_type =  $this->field_type6;
            $field->save();

        }
        if($this->field_name7 != Null){
            $field = new Parameter();
            $field->form_id = $form->id;
            $field->field_name = $this->field_name7;
            $field->field_type =  $this->field_type7;
            $field->save();

        }
        if($this->field_name8 != Null){
            $field = new Parameter();
            $field->form_id = $form->id;
            $field->field_name = $this->field_name8;
            $field->field_type =  $this->field_type8;
            $field->save();

        }
    	session()->flash('message', 'Form Created Successfully.');

    	$this->resetInputFields();

    	$this->emit('userStore');
    }


}
