<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Http\Request;

class AddJobCategoryComponent extends Component
{
    public function storeCategory( Request $request)
    {
        $request->validate([
            'cat_name' =>'required|unique:categories,cat_name',
        ]);
        Category::create($request->all());

        return redirect()->back()->with('success', 'Category Created');

    }
    public function render()
    {
        return view('livewire.add-job-category-component');
    }
}
