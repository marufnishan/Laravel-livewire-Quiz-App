<?php

namespace App\Http\Livewire;

use App\Models\Exam;
use Livewire\Component;
use Illuminate\Http\Request;

class ExamComponent extends Component
{
    public function storeExam( Request $request)
    {
        $request->validate([
            'exam_title' =>'required|unique:exams,exam_title',
            'exam_datetime' => 'required',
            'duration' => 'required',
            'total_question' => 'required',
            'marks_per_right_answer' => 'required',
            'exam_code' => 'required|unique:exams,exam_code',
            'status' => 'required'
        ]);

        Exam::create($request->all());

        return redirect()->back()->with('success', 'Exam Created');

    }
    public function render()
    {
        return view('livewire.exam-component');
    }
}
