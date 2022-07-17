<?php

namespace App\Http\Livewire;

use App\Models\Teacher;
use Livewire\Component;

class AllTeacherComponent extends Component
{
    public function render()
    {
        $teachers = Teacher::get();
        return view('livewire.all-teacher-component',['teachers'=>$teachers]);
    }
}
