<?php

namespace App\Http\Livewire;

use App\Models\Enroll;
use Livewire\Component;
use Livewire\WithPagination;

class AdminShowEnrollsComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $enrolls = Enroll::paginate(10);
        $totalenrolls = Enroll::count();
        return view('livewire.admin-show-enrolls-component',['enrolls' => $enrolls,'totalenrolls'=>$totalenrolls]);
    }
}
