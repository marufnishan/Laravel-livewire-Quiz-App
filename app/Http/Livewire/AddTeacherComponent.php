<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Teacher;
use Livewire\Component;
use Illuminate\Http\Request;

class AddTeacherComponent extends Component
{
    public function storeTeacher( Request $request)
    {
        $request->validate([
            'name' =>'required',
            'subject' =>'required',
            'cat_id' =>'required',
        ]);
        Teacher::create($request->all());

        return redirect()->back()->with('success', 'Category Created');

    }
    public function render()
    {
        $categories = Category::get();
        return view('livewire.add-teacher-component',['categories'=> $categories]);
    }
}
