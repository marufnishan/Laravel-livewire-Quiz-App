<?php

namespace App\Http\Livewire;

use App\Models\QuizHeader;
use Livewire\Component;

class HomeLeaderboard extends Component
{
    public function render()
    {
        $quizleader = QuizHeader::orderBy('score', 'DESC')
            ->orderBy('quiz_size', 'DESC')
            ->where('exam_type','Championship')
            ->take(3)->get();
        $jobleader = QuizHeader::orderBy('score', 'DESC')
            ->orderBy('quiz_size', 'DESC')
            ->where('exam_type','Job')
            ->take(3)->get();
        return view('livewire.home-leaderboard',['quizleader'=>$quizleader,'jobleader'=>$jobleader]);
    }
}
