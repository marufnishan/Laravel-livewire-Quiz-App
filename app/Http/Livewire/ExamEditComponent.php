<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Exam;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithFileUploads;

class ExamEditComponent extends Component
{
    use WithFileUploads;
    public $newimage ;
    public function updateExam( $id,Request $request)
    {
        $data = $request->validate([
            'exam_title' =>'required|unique:exams,exam_title',
            'exam_datetime' => 'required',
            'total_question' => 'required',
            'marks_per_right_answer' => 'required',
            'exam_code' => 'required|unique:exams,exam_code',
            'status' => 'required'
        ]);
        $exam = Exam::findOrFail($id);
        $exam->exam_title =$request->exam_title;
        if($request->hasFile('exam_thumbnail')) {
            if($exam->exam_thumbnail){
                unlink('assets/img/teacherprofile/'.$exam->exam_thumbnail);
            }
            $imageName = time() . '.' . $request->file('exam_thumbnail')->getClientOriginalExtension();
            
            $request->file('exam_thumbnail')->storeAs('examthumbnail',$imageName);
            $exam->exam_thumbnail = $imageName;
        }
        $exam->exam_datetime =$request->exam_datetime;
        $exam->total_question =$request->total_question;
        $exam->marks_per_right_answer =$request->marks_per_right_answer;
        $exam->exam_code =$request->exam_code;
        $exam->status =$request->status;
        $exam->exam_type =$request->exam_type;
        $exam->cat_id  =$request->cat_id ;
        $exam->price  =$request->price ;
        $exam->subscription  =$request->subscription ;
        $exam->teacher_id  =$request->teacher_id ;
        //dd($exam->teacher_id);
        $exam->save();
        session()->flash('message', 'Exam Updated successfully !');
            return redirect()->route('examList');
    }

    public $exam;
    public function mount($id){
        $this->exam = Exam::find($id);
    }
    public function render()
    {
        $categories = Category::get();
        $teachers = Teacher::get();
        return view('livewire.exam-edit-component',['exam'=>$this->exam,'categories'=>$categories,'teachers'=>$teachers]);
    }
}
