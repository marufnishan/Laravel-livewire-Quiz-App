<?php

namespace App\Http\Livewire;

use App\Models\Enroll;
use App\Models\Exam;
use App\Models\Teacher;
use Livewire\Component;

class JobComponent extends Component
{
    public $exams;
    public $teacher;
    public function mount($id){
        $this->exams = Exam::where('status', 'Active')
            ->where('exam_type','Job')
            ->where('subscription','free')
            ->where('teacher_id',$id)
            ->get()
            ->take(1);
        $this->teacher = Teacher::find($id);
    }
    public function render()
    {
        $enrolls = Enroll::where('user_id',auth()->id())
            ->get();
        return view('livewire.job-component',['exams'=>$this->exams,'teacher'=>$this->teacher,'enrolls'=>$enrolls]);
    }
}
