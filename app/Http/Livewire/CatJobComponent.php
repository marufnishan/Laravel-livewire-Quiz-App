<?php

namespace App\Http\Livewire;

use App\Models\Teacher;
use Livewire\Component;

class CatJobComponent extends Component
{
    public $teachers;
    public function mount($id){
        
        $this->teachers = Teacher::where('cat_id',$id)
        ->get();
    }
    public function render()
    {
        return view('livewire.cat-job-component',['teachers'=>$this->teachers]);
    }
}
