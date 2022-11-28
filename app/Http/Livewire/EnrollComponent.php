<?php

namespace App\Http\Livewire;

use App\Models\Enroll;
use App\Models\Exam;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EnrollComponent extends Component
{
    public $exams;
    public $trx_id;
    public $phone;
    public $student_mail;
    public $inrollstatus;

    protected $rules = [
        'trx_id' => 'required|unique:enrolls',
    ];

    public $isDisabled = false;
    public function enroll($id){
        $this->validate();
        if(Auth::user()){            
            Enroll::create([
                'user_id' => auth()->id(),
                'exam_id' => $id,
                'attendance_status' => 'Absent',
                'phone_number' => $this->phone,
                'trx_id' => $this->trx_id,
                'email' => $this->student_mail,
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

        $this->inrollstatus = Enroll::Where('user_id',auth()->id())
        ->Where('exam_id',$this->exams->id)->latest()
        ->first();

        /* foreach($this->inrollstatus as $inrollstatuss){ */
            if($this->inrollstatus){
                if($this->inrollstatus->approval == 'Pending' || $this->inrollstatus->approval == 'Approved'){
                    $this->isDisabled = true;
                }
                elseif($this->inrollstatus->approval == 'Cancel' || $this->inrollstatus->approval == 'Expeired' || $this->inrollstatus->attendance_status == 'Present'){
                    $this->isDisabled = false;
                }
            }
            
        /* } */

    }
    public function render()
    { 
        return view('livewire.enroll-component',['exams'=>$this->exams,'inrollstatus'=>$this->inrollstatus]);
    }
}
