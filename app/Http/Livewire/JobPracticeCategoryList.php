<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class JobPracticeCategoryList extends Component
{
    public function render()
    {
        $categories = Category::paginate(10);
        return view('livewire.job-practice-category-list',['categories'=>$categories]);
    }
}
