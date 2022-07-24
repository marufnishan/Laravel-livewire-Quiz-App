<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Exam;
use Illuminate\Http\Request;
use Livewire\Component;

class ExamEditComponent extends Component
{
    public function updateExam( $id,Request $request)
    {
        $data = $request->validate([
            'exam_title' =>'required|unique:exams,exam_title',
            'exam_datetime' => 'required',
            'duration' => 'required',
            'total_question' => 'required',
            'marks_per_right_answer' => 'required',
            'exam_code' => 'required|unique:exams,exam_code',
            'status' => 'required'
        ]);
        $record = Exam::findOrFail($id);
        $input = $request->all();
        $record->fill($input)->save();
        session()->flash('success', 'Exam Updated successfully!');
        return redirect()->route('examList');
    }

    public $exam;
    public function mount($id){
        $this->exam = Exam::find($id);
    }
    public function render()
    {
        $categories = Category::get();
        return view('livewire.exam-edit-component',['exam'=>$this->exam,'categories'=>$categories]);
    }
}
