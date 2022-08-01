<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;

class UserEditComponent extends Component
{
    use WithFileUploads;
    public $user;
    public $newimage;
    public function mount($id){
        $this->user = User::find($id);
    }
    public function updateUser( $id,Request $request)
    {
        $data = $request->validate([
            'name' =>'required',
        ]);
        $user = User::findOrFail($id);
        $user->name = $request->name;
        if(request()->hasFile('profile_photo_path')) {
            if($user->profile_photo_path){
                unlink('assets/img/'.$user->profile_photo_path);
            }
            $imageName = time() . '.' . request()->file('profile_photo_path')->getClientOriginalExtension();
            request()->file('profile_photo_path')->storeAs('profile-photos',$imageName);
            $user->profile_photo_path = 'profile-photos/'.$imageName;
        }
        $user->save();
        session()->flash('success', 'User Updated successfully!');
        return redirect()->route('usersIndex');
    }
    public function render()
    {
        return view('livewire.user-edit-component');
    }
}
