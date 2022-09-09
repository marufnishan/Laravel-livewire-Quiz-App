<?php

namespace App\Http\Livewire;

use App\Models\Enroll;
use App\Models\Exam;
use Livewire\Component;

class JobExamComponent extends Component
{   public $exams;
    public function mount($id,$month,$cat_id){
        $this->exams = Exam::where('status', 'Active')
            ->where('exam_type','Job')
            //->where('subscription','free')
            ->where('teacher_id',$id)
            ->where('cat_id',$cat_id)
            ->whereMonth('exam_datetime',$month)
            ->get();
    }
    public function render()
    {
        $enrolls = Enroll::where('user_id',auth()->id())
            ->get();
        return view('livewire.job-exam-component',['exams'=>$this->exams,'enrolls'=>$enrolls]);
    }
}
