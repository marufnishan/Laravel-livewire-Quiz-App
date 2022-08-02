<?php

namespace App\Http\Livewire;

use App\Models\Slider;
use Livewire\Component;

class HomeSlider extends Component
{
    public function render()
    {
        $sliders = Slider::get();
        return view('livewire.home-slider',['sliders'=> $sliders]);
    }
}
