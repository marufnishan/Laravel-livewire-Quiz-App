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
                            <img src="{{asset('assets/img/profile/teacher1.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><b>Name : {{$teacher->name}}</b></h5>
                                <p class="text-sm"><b>Subject :</b> {{ $teacher->subject}}</p>
                            </div>
                        </div>
                </div>
                <div class="col-md-6 my-auto">
                    <h1>Exam Shedule</h1>
                    <a href="{{ route("jobExams",['id'=>$teacher->id,'month'=>1,'cat_id' => request()->route()->cat_id])}}"><button class="btn btn-info my-3" <?php $month = date('m');  if($month <= 1) echo "disabled='disabled'" ?> >January {{date("Y")}}</button></a>
                    <a href="{{ route("jobExams",['id'=>$teacher->id,'month'=>2,'cat_id' => request()->route()->cat_id])}}"><button class="btn btn-info my-3" <?php $month = date('m');  if($month <= 2) echo "disabled='disabled'" ?>>February {{date("Y")}}</button></a>
                    <a href="{{ route("jobExams",['id'=>$teacher->id,'month'=>3,'cat_id' => request()->route()->cat_id])}}"><button class="btn btn-info my-3" <?php $month = date('m');  if($month <= 3) echo "disabled='disabled'" ?>>March {{date("Y")}}</button></a>
                    <a href="{{ route("jobExams",['id'=>$teacher->id,'month'=>4,'cat_id' => request()->route()->cat_id])}}"><button class="btn btn-info my-3" <?php $month = date('m');  if($month <= 4) echo "disabled='disabled'" ?>>April {{date("Y")}}</button></a>
                    <a href="{{ route("jobExams",['id'=>$teacher->id,'month'=>5,'cat_id' => request()->route()->cat_id])}}"><button class="btn btn-info my-3" <?php $month = date('m');  if($month <= 5) echo "disabled='disabled'" ?>>May {{date("Y")}}</button></a>
                    <a href="{{ route("jobExams",['id'=>$teacher->id,'month'=>6,'cat_id' => request()->route()->cat_id])}}"><button class="btn btn-info my-3" <?php $month = date('m');  if($month <= 6) echo "disabled='disabled'" ?>>June {{date("Y")}}</button></a>
                    <a href="{{ route("jobExams",['id'=>$teacher->id,'month'=>7,'cat_id' => request()->route()->cat_id])}}"><button class="btn btn-info my-3" <?php $month = date('m');  if($month <= 7) echo "disabled='disabled'" ?>>July {{date("Y")}}</button></a>
                    <a href="{{ route("jobExams",['id'=>$teacher->id,'month'=>8,'cat_id' => request()->route()->cat_id])}}"><button class="btn btn-info my-3" <?php $month = date('m');  if($month <= 8) echo "disabled='disabled'" ?>>August {{date("Y")}}</button></a>
                    <a href="{{ route("jobExams",['id'=>$teacher->id,'month'=>9,'cat_id' => request()->route()->cat_id])}}"><button class="btn btn-info my-3" <?php $month = date('m');  if($month <= 9) echo "disabled='disabled'" ?>>September {{date("Y")}}</button></a>
                    <a href="{{ route("jobExams",['id'=>$teacher->id,'month'=>10,'cat_id' => request()->route()->cat_id])}}"><button class="btn btn-info my-3" <?php $month = date('m');  if($month <= 10) echo "disabled='disabled'" ?>>Auctober {{date("Y")}}</button></a>
                    <a href="{{ route("jobExams",['id'=>$teacher->id,'month'=>11,'cat_id' => request()->route()->cat_id])}}"><button class="btn btn-info my-3" <?php $month = date('m');  if($month <= 11) echo "disabled='disabled'" ?>>November {{date("Y")}}</button></a>
                    <a href="{{ route("jobExams",['id'=>$teacher->id,'month'=>12,'cat_id' => request()->route()->cat_id])}}"><button class="btn btn-info my-3" <?php $month = date('m');  if($month <= 12) echo "disabled='disabled'" ?>>December {{date("Y")}}</button></a>
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
