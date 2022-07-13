<?php

namespace App\Http\Livewire;

use App\Models\Exam;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\QuizHeader;
use Livewire\Component;

class ChampionshipComponent extends Component
{
    public function render()
    {
        $exams = Exam::where('status', 'Active')
            ->get();
        return view('livewire.championship-component',['exams'=>$exams]);
    }
}
