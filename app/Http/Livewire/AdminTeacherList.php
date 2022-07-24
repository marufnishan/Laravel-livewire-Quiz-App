<?php

namespace App\Http\Livewire;

use App\Models\Teacher;
use Livewire\Component;

class AdminTeacherList extends Component
{
    public function render()
    {
        $teachers = Teacher::paginate(10);
        return view('livewire.admin-teacher-list',['teachers'=>$teachers]);
    }
}
