<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class CatecogyComponent extends Component
{
    public function render()
    {
        $categories = Category::get();
        return view('livewire.catecogy-component',['categories'=>$categories]);
    }
}
