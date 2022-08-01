<?php

namespace App\Http\Livewire;

use App\Models\Enroll;
use App\Models\Exam;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EnrollComponent extends Component
{
    public $exams;
    public $isDisabled = false;
    public function enroll($id){
        if(Auth::user()){
            Enroll::create([
                'user_id' => auth()->id(),
                'exam_id' => $id,
                'attendance_status' => 'Absent',
            ]);
            $this->isDisabled = true;
            return redirect()->back();
        }
        else{
            return redirect()->route('login');
        }
        
    }

    public function mount($id){
        $this->exams = Exam::where('id', $id)
        ->where('status', 'Active')
        ->first();

        $inrollstatus = Enroll::Where('user_id',auth()->id())
        ->Where('exam_id',$this->exams->id)
        ->get();

        foreach($inrollstatus as $inrollstatuss){
            if($inrollstatuss->attendance_status == 'Absent'){
                $this->isDisabled = true;
            }
            elseif($inrollstatuss->attendance_status == 'Present'){
                $this->isDisabled = true;
            }
        }

    }
    public function render()
    { 
        return view('livewire.enroll-component',['exams'=>$this->exams]);
    }
}
