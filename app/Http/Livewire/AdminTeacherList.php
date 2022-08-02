<?php

namespace App\Http\Livewire;

use App\Models\Teacher;
use Livewire\Component;

class AdminTeacherList extends Component
{
    public function delete($id)
    {
        $teacher = Teacher::find($id);
        if($teacher->image)
        {
            unlink('assets/img/teacherprofile'.'/'.$teacher->image);
        }
        $teacher->delete();
        session()->flash('warning','Teacher has been deleted successfully');
        return redirect()->back();
    }
    public function render()
    {
        $teachers = Teacher::paginate(10);
        return view('livewire.admin-teacher-list',['teachers'=>$teachers]);
    }
}
