<?php

namespace App\Http\Livewire;

use App\Models\Exam;
use Livewire\Component;

class ChampionshipPractice extends Component
{
    public function render()
    {
        $exams = Exam::where('status', 'Active')
            ->where('exam_type','Practice')
            ->get();
        return view('livewire.championship-practice',['exams'=>$exams]);
    }
}
