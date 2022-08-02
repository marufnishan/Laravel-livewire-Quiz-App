<?php

namespace App\Http\Livewire;

use App\Models\Slider;
use Livewire\Component;

class SliderListComponent extends Component
{
    public function delete($id)
    {
        $slider = Slider::find($id);
        if($slider->slider_img)
        {
            unlink('assets/img/slider'.'/'.$slider->slider_img);
        }
        $slider->delete();
        session()->flash('warning','Slider has been deleted successfully');
        return redirect()->back();
    }
    public function render()
    {
        $sliders = Slider::paginate(10);
        return view('livewire.slider-list-component',['sliders'=>$sliders]);
    }
}
