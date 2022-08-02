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
                <div class="col-md-3  my-auto">
                        <div class="card" style="width: 18rem;">
                            @if(!empty($teacher->image))
                            <img src="{{asset('assets/img/teacherprofile')}}/{{$teacher->image}}" class="card-img-top" alt="job_exam_thumbnail">
                            @else
                            <img src="{{asset('assets/img/profile/teacher1.png')}}" class="card-img-top" alt="teacherimg">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title"><b>Name : {{$teacher->name}}</b></h5>
                                <p class="text-sm"><b>Subject :</b> {{ $teacher->subject}}</p>
                            </div>
                        </div>
                </div>
                <div class="col-md-6 my-auto">
                    <h1>Exam Shedule</h1>
                    <a href="{{ route("jobExams",['id'=>$teacher->id,'month'=>1,'cat_id' => request()->route()->cat_id])}}"><button class="btn btn-info my-3 <?php $month = date('m');  if($month < 1) echo "d-none"?>" >January {{date("Y")}}</button></a>
                    <a href="{{ route("jobExams",['id'=>$teacher->id,'month'=>2,'cat_id' => request()->route()->cat_id])}}"><button class="btn btn-info my-3 <?php $month = date('m');  if($month < 2) echo "d-none"?>">February {{date("Y")}}</button></a>
                    <a href="{{ route("jobExams",['id'=>$teacher->id,'month'=>3,'cat_id' => request()->route()->cat_id])}}"><button class="btn btn-info my-3 <?php $month = date('m');  if($month < 3) echo "d-none"?>">March {{date("Y")}}</button></a>
                    <a href="{{ route("jobExams",['id'=>$teacher->id,'month'=>4,'cat_id' => request()->route()->cat_id])}}"><button class="btn btn-info my-3 <?php $month = date('m');  if($month < 4) echo "d-none"?>">April {{date("Y")}}</button></a>
                    <a href="{{ route("jobExams",['id'=>$teacher->id,'month'=>5,'cat_id' => request()->route()->cat_id])}}"><button class="btn btn-info my-3 <?php $month = date('m');  if($month < 5) echo "d-none"?>">May {{date("Y")}}</button></a>
                    <a href="{{ route("jobExams",['id'=>$teacher->id,'month'=>6,'cat_id' => request()->route()->cat_id])}}"><button class="btn btn-info my-3 <?php $month = date('m');  if($month < 6) echo "d-none"?>">June {{date("Y")}}</button></a>
                    <a href="{{ route("jobExams",['id'=>$teacher->id,'month'=>7,'cat_id' => request()->route()->cat_id])}}"><button class="btn btn-info my-3 <?php $month = date('m');  if($month < 7) echo "d-none"?>">July {{date("Y")}}</button></a>
                    <a href="{{ route("jobExams",['id'=>$teacher->id,'month'=>8,'cat_id' => request()->route()->cat_id])}}"><button class="btn btn-info my-3 <?php $month = date('m');  if($month < 8) echo "d-none"?>">August {{date("Y")}}</button></a>
                    <a href="{{ route("jobExams",['id'=>$teacher->id,'month'=>9,'cat_id' => request()->route()->cat_id])}}"><button class="btn btn-info my-3 <?php $month = date('m');  if($month < 9) echo "d-none"?>">September {{date("Y")}}</button></a>
                    <a href="{{ route("jobExams",['id'=>$teacher->id,'month'=>10,'cat_id' => request()->route()->cat_id])}}"><button class="btn btn-info my-3 <?php $month = date('m');  if($month < 10) echo "d-none"?>">Auctober {{date("Y")}}</button></a>
                    <a href="{{ route("jobExams",['id'=>$teacher->id,'month'=>11,'cat_id' => request()->route()->cat_id])}}"><button class="btn btn-info my-3 <?php $month = date('m');  if($month < 11) echo "d-none"?>">November {{date("Y")}}</button></a>
                    <a href="{{ route("jobExams",['id'=>$teacher->id,'month'=>12,'cat_id' => request()->route()->cat_id])}}"><button class="btn btn-info my-3 <?php $month = date('m');  if($month < 12) echo "d-none"?>">December {{date("Y")}}</button></a>
                </div>
            @foreach ($exams as $exam)
            <div class="col-md-3 d-flex justify-content-around my-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('assets/img/std.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><b> {{$exam->exam_title}}</b></h5>
                        <span class="position-absolute top-0 start-10 translate-middle badge rounded-pill bg-danger">
                            Free Exam
                          </span>
                        <p class="text-sm"><b>Exam Duration :</b> {{ $exam->duration}} Munites</p>
                        <p class="text-sm"><b>Total Question :</b> {{ $exam->lavel->where('exam_id',$exam->id)->sum('question_size')}}</p>
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
                        @endif
                    </div>
                </div>
            </div>  
            @endforeach
        </div>
    </div>
    {{-- Exam Category End --}}
</div>
