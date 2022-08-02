<?php

namespace App\Http\Livewire;

use App\Models\Slider;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;

class SliderEditComponent extends Component
{
    use WithFileUploads;
    public $newimage;
    public $slider;

    public function mount($id){
        $this->slider = Slider::find($id);
    }
    
    public function updateSlider( $id,Request $request){
        $data = $request->validate([
            'name' =>'required',
            'status' =>'required',
        ]);
        $slider = Slider::findOrFail($id);
        $slider->name = $request->name;
        if(request()->hasFile('slider_img')) {
            if($slider->slider_img){
                unlink('assets/img/slider/'.$slider->slider_img);
            }
            $imageName = time() . '.' . request()->file('slider_img')->getClientOriginalExtension();
            request()->file('slider_img')->storeAs('slider',$imageName);
            $slider->slider_img = $imageName;
        }
        $slider->status = $request->status;
        $slider->save();
        session()->flash('message', 'Slider Updated successfully !');
            return redirect()->route('allSlider');
    }
    public function render()
    {
        return view('livewire.slider-edit-component');
    }
}
