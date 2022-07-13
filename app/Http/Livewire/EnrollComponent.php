<?php

namespace App\Http\Livewire;

use App\Models\Enroll;
use App\Models\Exam;
use Livewire\Component;

class EnrollComponent extends Component
{
    public $exams;
    public $isDisabled = false;
    public function enroll($id){
        Enroll::create([
            'user_id' => auth()->id(),
            'exam_id' => $id,
            'attendance_status' => 'Absent',
        ]);
        return $this->isDisabled = true;
    }

    public function mount($id){
        $this->exams = Exam::where('id', $id)
        ->where('status', 'Active')
        ->first();

        $inrollstatus = Enroll::Where('user_id',auth()->id())
        ->Where('exam_id',$this->exams->id)
        ->where('attendance_status','Absent')
        ->first();
        if($inrollstatus){
            $this->isDisabled = true;
        }

    }
    public function render()
    { 
        return view('livewire.enroll-component',['exams'=>$this->exams]);
    }
}
