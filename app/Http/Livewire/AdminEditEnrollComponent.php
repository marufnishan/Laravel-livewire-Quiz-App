<?php

namespace App\Http\Livewire;

use App\Models\Enroll;
use Livewire\Component;
use Illuminate\Http\Request;

class AdminEditEnrollComponent extends Component
{
    public $enroll;
    public function mount($id){
        $this->enroll  = Enroll::find($id);
    }

    public function updateEnroll($id,Request $request){
        $data = $request->validate([
            'approval' =>'required',
            'expeire_at' =>'required',
        ]);
        $enroll = Enroll::findOrFail($id);
        $enroll->approval = $request->approval;
        $enroll->expeire_at = $request->expeire_at;
        $enroll->save();
        session()->flash('message', 'Enroll Updated successfully !');
            return redirect()->route('enrollList');
    }
    public function render()
    {
        return view('livewire.admin-edit-enroll-component',['enroll'=>$this->enroll]);
    }
}
