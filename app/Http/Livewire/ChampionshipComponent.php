<?php

namespace App\Http\Livewire;

use App\Models\Enroll;
use App\Models\Exam;
use Livewire\Component;

class ChampionshipComponent extends Component
{
    public function render()
    {
        $exams = Exam::where('status', 'Active')
            ->where('exam_type','Championship')
            ->get();
            $enrolls = Enroll::where('user_id',auth()->id())
            ->get();
        return view('livewire.championship-component',['exams'=>$exams,'enrolls'=>$enrolls]);
    }
}
