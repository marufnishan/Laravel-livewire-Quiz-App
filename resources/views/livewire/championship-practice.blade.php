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
                    <img src="{{asset('assets/img/std.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$exam->exam_title}}</h5>
                        <p class="text-sm"><b>Total Question :</b>
                            {{ $exam->lavel->where('exam_id',$exam->id)->sum('question_size')}}</p>
                        <a href="#" class="btn btn-success me-3">Practice</a>
                        <a href="#" class="btn btn-primary">Invite</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
    {{-- Exam Category End --}}
</div>
