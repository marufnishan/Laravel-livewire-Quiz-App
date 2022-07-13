<?php

namespace App\Http\Livewire;

use App\Models\Exam;
use App\Models\QuizHeader;
use Livewire\Component;

class ChampionshipComponent extends Component
{
    public function render()
    {
        $exams = Exam::where('status', 'Active')
            ->get();
            $lavels = QuizHeader::where('user_id',auth()->id())
            ->get();
        return view('livewire.championship-component',['exams'=>$exams,'lavels'=>$lavels]);
    }
}
