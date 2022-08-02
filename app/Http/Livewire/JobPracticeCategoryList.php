<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class JobPracticeCategoryList extends Component
{
    public function delete($id){
        $category = Category::findOrFail($id);
        $category->delete();
        session()->flash('warning','Exam has been deleted successfully');
        return redirect()->back();
    }
    public function render()
    {
        $categories = Category::paginate(10);
        return view('livewire.job-practice-category-list',['categories'=>$categories]);
    }
}
