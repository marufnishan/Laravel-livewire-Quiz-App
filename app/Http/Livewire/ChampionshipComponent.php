<?php

namespace App\Http\Livewire;

use App\Models\Exam;
use App\Models\Section;
use Livewire\Component;

class ChampionshipComponent extends Component
{
    public function render()
    {
        $exams = Exam::where('status', 'Active')
            ->get();
            $lavels = Section::where('user_id',auth()->id())
            ->get();
        return view('livewire.championship-component',['exams'=>$exams,'lavels'=>$lavels]);
    }
}
