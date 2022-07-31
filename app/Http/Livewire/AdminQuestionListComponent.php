<?php

namespace App\Http\Livewire;

use App\Models\Question;
use Livewire\Component;

class AdminQuestionListComponent extends Component
{
    public function render()
    {
        $questions = Question::paginate(10);
        return view('livewire.admin-question-list-component',['questions' => $questions]);
    }
}
