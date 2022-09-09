<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Exam;
use App\Models\Teacher;
use Livewire\Component;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class ExamComponent extends Component
{
    use WithFileUploads;
    public $examtype;
    public $jobcategory;
    //public $teachers;
    public $exam_thumbnail;
    /* public function mount(){
        $this->teachers = Teacher::where('cat_id',$this->jobcategory)->get();
    } */
    public function storeExam( Request $request)
    {
        $request->validate([
            'exam_title' =>'required|unique:exams,exam_title',
            'exam_datetime' => 'required',
            'total_question' => 'required',
            'marks_per_right_answer' => 'required',
            'exam_code' => 'required|unique:exams,exam_code',
            'status' => 'required',
            'exam_thumbnail' => 'required|mimes:jpeg,png,jpg',
        ]);

     
        $exam_thumbnail = $request->file('exam_thumbnail');
        $imageName  = time() . '.' . $exam_thumbnail->getClientOriginalExtension();
        $request->exam_thumbnail->storeAs('examthumbnail',$imageName);
        $request->exam_thumbnail = $imageName;
        if($request->exam_thumbnail == $imageName)
        {
            $exam = new Exam();
            $exam->exam_title = $request->exam_title;
            $exam->exam_thumbnail = $imageName;
            $exam->exam_datetime = $request->exam_datetime;
            $exam->total_question = $request->total_question;
            $exam->marks_per_right_answer = $request->marks_per_right_answer;
            $exam->exam_code = $request->exam_code;
            $exam->status = $request->status;
            $exam->exam_type = $request->exam_type;
            $exam->cat_id = $request->cat_id;
            $exam->price = $request->price;
            $exam->subscription = $request->subscription;
            $exam->teacher_id  = $request->teacher_id ;
            $exam->save();
            session()->flash('message', 'Exam Created !');
            return redirect()->back();
        }
        
        


    }
    public function render()
    {
        $categories = Category::get();
        $teachers = Teacher::get();
        return view('livewire.exam-component',['categories'=>$categories,'teachers'=>$teachers]);
    }
}
