<div>
    <x-slot name="header">
        <div class="md:flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('চ্যাম্পিয়নশিপ প্রস্তুতি চ্যালেঞ্জ') }}
            </h2>
        </div>
    </x-slot>
    {{-- Exam Category Start --}}
    <div class="container my-3" style="background-color: #FFFFFF;">
        <div class="row">
            @foreach($exams as $exam)
            <div class="col-md-3 my-3 d-flex justify-content-around">
                <div class="card" style="width: 18rem;">
                    @if(!empty($exam->exam_thumbnail))
                    <img src="{{asset('assets/img/examthumbnail')}}/{{$exam->exam_thumbnail}}" class="card-img-top" alt="championship_thumbnail">
                    @else
                    <img src="{{asset('assets/img/std.jpg')}}" class="card-img-top" alt="championship_thumbnail">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{$exam->exam_title}}</h5>
                        <p class="text-sm"><b>Total Question :</b>
                            {{ $exam->lavel->where('exam_id',$exam->id)->sum('question_size')}}</p>
                            @if(Auth::user())
                            @if(!empty($enrolls))
                            @foreach($enrolls as $enroll)
                                @if( $exam->id == $enroll->exam_id && $enroll->user_id == auth()->id() && $enroll->exam_state == 'Created')
                                    <a href="{{route('quizLavel',$exam->id)}}" class="btn btn-primary">Participate Now</a>
                                @endif
                                @if($enroll->exam_id == $exam->id && $enroll->user_id == auth()->id() && $enroll->exam_state == 'Participate')
                                    <a href="{{route('userShowreasult',[$exam->id,auth()->id()])}}" type="button" class="btn btn-warning">Show Reasult</a>
                                @endif
                            @endforeach
                                <a href="{{route('champEnroll',$exam->id)}}" class="btn btn-success">Enroll Now</a>
                        @else
                        <a href="{{route('champEnroll',$exam->id)}}" class="btn btn-danger">Enroll Now</a>
                        <a href="{{route('Invitation',$exam->id)}}" class="btn btn-primary">Invite</a>
                        @endif
                            @else
                        <a href="{{route('quizLavel',$exam->id)}}" class="btn btn-success me-3">Practice</a>
                        <a href="{{route('Invitation',$exam->id)}}" class="btn btn-primary">Invite</a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
    {{-- Exam Category End --}}
</div>
