<div>
    <x-slot name="header">
        <div class="md:flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('চ্যাম্পিয়নশিপ') }}
            </h2>
        </div>
    </x-slot>
    {{-- Exam Category Start --}}
    <div class="container" style="background-color: #FFFFFF;">
        <div class="row">
            @foreach ($exams as $exam)
            <div class="col-md-3 d-flex justify-content-around my-3">
                <div class="card" style="width: 18rem;">
                    <img src="assets/img/std.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><b> {{$exam->exam_title}}</b></h5>
                        <p class="card-text"><b>Exam Duration :</b> {{ $exam->duration}} Munites</p>
                        <p class="card-text"><b>Total Question :</b> {{ $exam->total_question}}</p>
                        @if(!empty($exam->enroll->user_id))
                            @if($exam->enroll->user_id == auth()->id() && $exam->enroll->attendance_status	== 'Absent')
                            <a href="{{route('quizLavel',$exam->id)}}" class="btn btn-primary">Participate Now</a>
                            @else
                                @foreach($lavels as $lavel)
                                    @if($lavel->exam_id == $exam->id &&  $lavel->user_id == auth()->id() )
                                        <a href="{{route('userShowreasult',[$exam->id,auth()->id()])}}" type="button" class="btn btn-warning">Show Reasult</a>
                                    @endif
                                @endforeach
                            @endif
                        @else
                        <a href="{{route('champEnroll',$exam->id)}}" class="btn btn-success">Enroll Now</a>
                        @endif
                    </div>
                </div>
            </div>  
            @endforeach
        </div>
    </div>
{{-- Exam Category End --}}
{{-- Footer Start --}}
<div class="container-fluid py-5 "
style="background-color: #FFFFFF;box-shadow: 2px rgba(0, 0, 0, 0.1);text-align: center;">
<p>@Copyright Nishanbd 2022</p>
</div>
{{-- Footer End --}}
</div>
