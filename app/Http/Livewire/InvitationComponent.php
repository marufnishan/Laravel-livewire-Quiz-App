<?php

namespace App\Http\Livewire;

use App\Mail\InvitationMail;
use App\Models\Exam;
use App\Models\Invitation;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class InvitationComponent extends Component
{
    public $invitation_mail;
    public $exams;
    protected $rules = [
        'invitation_mail' => 'required|email',
    ];
    public function mount($id){
        $this->exams = Exam::where('id', $id)
        ->where('status', 'Active')
        ->first();

    }

    public function invite(){
        $this->validate();
        $invitation = Invitation::create([
            'user_id' => auth()->id(),
            'exam_id' => $this->exams->id,
            'invitation_mail' => $this->invitation_mail,
            'invitation_link' => 'http://localhost:8000/quizlavel/'.$this->exams->id,
        ]);
        $this->sendInvitationMail($invitation);
        session()->flash('message', 'You have successfully invited your friend !');
        return redirect()->back();
    }

    public function sendInvitationMail($invitation){
        Mail::to($this->invitation_mail)->send(new InvitationMail($invitation));
    }
    public function render()
    {
        return view('livewire.invitation-component');
    }
}
