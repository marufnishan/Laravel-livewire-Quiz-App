<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Teacher;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;

class AdminEditTeacherComponent extends Component
{
    use WithFileUploads;
    public $teacher;
    public $newimage;
    public function mount($id){
        $this->teacher = Teacher::find($id);
    }
    
    public function updateTeacher( $id,Request $request)
    {
        $data = $request->validate([
            'name' =>'required',
            'subject' =>'required',
            'cat_id' =>'required',
        ]);
        $teacher = Teacher::findOrFail($id);
        $teacher->name = $request->name;
        if(request()->hasFile('image')) {
            if($teacher->image){
                unlink('assets/img/teacherprofile/'.$teacher->image);
            }
            $imageName = time() . '.' . request()->file('image')->getClientOriginalExtension();
            request()->file('image')->storeAs('teacherprofile',$imageName);
            $teacher->image = $imageName;
        }
        $teacher->subject = $request->subject;
        $teacher->cat_id = $request->cat_id;
        $teacher->save();
        session()->flash('message', 'Teacher Updated successfully !');
            return redirect()->route('teacherList');
    }
    public function render()
    {
        $categories = Category::get();
        return view('livewire.admin-edit-teacher-component',['categories'=>$categories]);
    }
}
