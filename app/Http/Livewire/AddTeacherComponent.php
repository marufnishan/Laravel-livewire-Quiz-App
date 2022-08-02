<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Teacher;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;

class AddTeacherComponent extends Component
{
    use WithFileUploads;
    public $image;
    public function storeTeacher( Request $request)
    {
        $request->validate([
            'name' =>'required',
            'subject' =>'required',
            'cat_id' =>'required',
            'image' => 'required|mimes:jpeg,png,jpg',
        ]);
        $image = $request->file('image');
        $imageName  = time() . '.' . $image->getClientOriginalExtension();
        $request->image->storeAs('teacherprofile',$imageName);
        $request->image = $imageName;
            $teacher = new Teacher();
            $teacher->name = $request->name;
            $teacher->image = $imageName;
            $teacher->subject = $request->subject;
            $teacher->cat_id = $request->cat_id;
            $teacher->save();
            session()->flash('message', 'Teacher Created !');
            return redirect()->back();

    }
    public function render()
    {
        $categories = Category::get();
        return view('livewire.add-teacher-component',['categories'=> $categories]);
    }
}
