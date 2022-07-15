<?php

namespace App\Http\Livewire;

use App\Models\Enroll;
use App\Models\Exam;
use Livewire\Component;

class JobComponent extends Component
{
    public function render()
    {
        $exams = Exam::where('status', 'Active')
            ->where('exam_type','Job')
            ->get();
        $enrolls = Enroll::where('user_id',auth()->id())
            ->get();
        return view('livewire.job-component',['exams'=>$exams,'enrolls'=>$enrolls]);
    }
}
