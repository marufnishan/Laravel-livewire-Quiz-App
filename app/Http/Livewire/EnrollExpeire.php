<?php

namespace App\Http\Livewire;

use App\Models\Enroll;
use Carbon\Carbon;
use Livewire\Component;

class EnrollExpeire extends Component
{
    public function render()
    {
        $enrolls = Enroll::where('approval','Approved')->whereDate('expeire_at', '<=', Carbon::now())->paginate(10);
        $totalenrolls = Enroll::count();
        return view('livewire.enroll-expeire',['enrolls'=>$enrolls,'totalenrolls'=>$totalenrolls]);
    }
}
