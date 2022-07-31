<?php

namespace App\Http\Livewire;

use App\Models\Question;
use App\Models\QuizHeader;
use App\Models\Section;
use App\Models\User;
use Livewire\Component;

class LeaderBoardComponent extends Component
{
    public function deleteQuiz($id)
    {
        $quizheader = QuizHeader::findOrFail($id);
            $quizheader->delete();
            return redirect()->back();
    }
    public function render()
    {
        $quizAverage = QuizHeader::where('exam_type','Practice')->max('score');
        $sectionCount = Section::count();
        $userCount = User::count();
        $questionCount = Question::count();
        $quizCount = QuizHeader::where('exam_type','Practice')->count();

        $userQuizzes = QuizHeader::where('exam_type','Practice')->orderBy('score', 'DESC')
            ->orderBy('quiz_size', 'DESC')
            ->paginate(10);
        return view('livewire.leader-board-component',['quizAverage'=>$quizAverage,'sectionCount'=>$sectionCount,'userCount'=>$userCount,'questionCount'=>$questionCount,'quizCount'=>$quizCount,'userQuizzes'=>$userQuizzes]);
    }
}
