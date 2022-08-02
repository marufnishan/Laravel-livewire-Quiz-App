<?php

namespace App\Http\Livewire;

use App\Models\Slider;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;

class AddSliderComponent extends Component
{
    use WithFileUploads;
    public $slider_img;
    public function storeSlider( Request $request)
    {
        $request->validate([
            'name' =>'required',
            'slider_img' => 'required|mimes:jpeg,png,jpg',
            'status' =>'required',
        ]);
        $image = $request->file('slider_img');
        $imageName  = time() . '.' . $image->getClientOriginalExtension();
        $request->slider_img->storeAs('slider',$imageName);
        $request->slider_img = $imageName;
            $slider = new Slider();
            $slider->name = $request->name;
            $slider->slider_img = $imageName;
            $slider->status = $request->status;
            $slider->save();
            session()->flash('message', 'Slider added successfully !');
            return redirect()->back();
    }
    public function render()
    {
        return view('livewire.add-slider-component');
    }
}
