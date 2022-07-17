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
            <div class="col-md-8 d-flex justify-content-around">
                <div class="col-md-3  my-auto">
                        <div class="card" style="width: 18rem;">
                            <img src="{{asset('assets/img/profile/teacher1.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><b>Name : {{$teacher->name}}</b></h5>
                                <p class="text-sm"><b>Subject :</b> {{ $teacher->subject}}</p>
                            </div>
                        </div>
                </div>
                <div class="col-md-6 my-auto">
                    <h1>Exam Shedule</h1>
                    <button class="btn btn-info my-3" <?php $month = date('m');  if($month <= 1) echo "disabled='disabled'" ?> >January 2022</button>
                    <button class="btn btn-info my-3" <?php $month = date('m');  if($month <= 2) echo "disabled='disabled'" ?>>February 2022</button>
                    <button class="btn btn-info my-3" <?php $month = date('m');  if($month <= 3) echo "disabled='disabled'" ?>>March 2022</button>
                    <button class="btn btn-info my-3" <?php $month = date('m');  if($month <= 4) echo "disabled='disabled'" ?>>April 2022</button>
                    <button class="btn btn-info my-3" <?php $month = date('m');  if($month <= 5) echo "disabled='disabled'" ?>>May 2022</button>
                    <button class="btn btn-info my-3" <?php $month = date('m');  if($month <= 6) echo "disabled='disabled'" ?>>June 2022</button>
                    <button class="btn btn-info my-3" <?php $month = date('m');  if($month <= 7) echo "disabled='disabled'" ?>>July 2022</button>
                    <button class="btn btn-info my-3" <?php $month = date('m');  if($month <= 8) echo "disabled='disabled'" ?>>August 2022</button>
                    <button class="btn btn-info my-3" <?php $month = date('m');  if($month <= 9) echo "disabled='disabled'" ?>>September 2022</button>
                    <button class="btn btn-info my-3" <?php $month = date('m');  if($month <= 10) echo "disabled='disabled'" ?>>Auctober 2022</button>
                    <button class="btn btn-info my-3" <?php $month = date('m');  if($month <= 11) echo "disabled='disabled'" ?>>November 2022</button>
                    <button class="btn btn-info my-3" <?php $month = date('m');  if($month <= 12) echo "disabled='disabled'" ?>>December 2022</button>
                </div>
            </div>
            @foreach ($exams as $exam)
            <div class="col-md-3 d-flex justify-content-around my-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('assets/img/std.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><b> {{$exam->exam_title}}</b></h5>
                        <span class="position-absolute top-0 start-0 translate-middle badge rounded-pill bg-danger">
                            Free Exam
                          </span>
                        <p class="text-sm"><b>Exam Duration :</b> {{ $exam->duration}} Munites</p>
                        <p class="text-sm"><b>Total Question :</b> {{ $exam->lavel->where('exam_id',$exam->id)->sum('question_size')}}</p>
                        <a href="{{route('quizLavel',$exam->id)}}" class="btn btn-primary">Participate Now</a>
                    </div>
                </div>
            </div>  
            @endforeach
        </div>
    </div>
    {{-- Exam Category End --}}
</div>
