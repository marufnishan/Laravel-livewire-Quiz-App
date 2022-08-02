<?php

namespace App\Http\Livewire;

use App\Models\Slider;
use Livewire\Component;

class SliderListComponent extends Component
{
    public function render()
    {
        $sliders = Slider::paginate(10);
        return view('livewire.slider-list-component',['sliders'=>$sliders]);
    }
}
