<div>
    <x-slot name="header">
        <div class="md:flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('চাকরির প্রস্তুতি') }}
            </h2>
        </div>
    </x-slot>
    {{-- Exam Category Start --}}
    <div class="container my-3" style="background-color: #FFFFFF;">
        <div class="row">
            @foreach ($teachers as $teacher)
                <div class="col-md-3 d-flex justify-content-around my-3">     
            <a href="{{ route('jobPeparation',['id'=>$teacher->id,'cat_id' => request()->route()->id]) }}">
                <div class="card" style="width: 18rem;">
                    @if($teacher->image)
                    <img src="{{asset('assets/img/teacherprofile')}}/{{$teacher->image}}" class="card-img-top" alt="...">
                    @else
                    <img src="{{asset('assets/img/profile/teacher1.png')}}" class="card-img-top" alt="...">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title"><b>Name : {{$teacher->name}}</b></h5>
                        <p class="text-sm"><b>Subject :</b> {{ $teacher->subject}}</p>
                    </div>
                </div>
            </a>
                </div>   
            @endforeach
        </div>
    </div>
    {{-- Exam Category End --}}
</div>
