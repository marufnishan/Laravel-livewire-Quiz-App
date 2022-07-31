<div>
    <div class="row ">
        <div class="col-md-6 py-3">
            <div class="col-md-12 d-flex justify-content-center">
                <h4>কুইজ লিডার</h4>
            </div>
            <div class="col-md-12 d-flex justify-content-center">
                @foreach($quizleader as $leader)
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="d-flex flex-column">
                        <div>
                            @if(!empty($leader->user->profile_photo_path))
                            <img src="{{asset('assets/img/'.$leader->user->profile_photo_path )}}"
                            alt="{{$leader->user->name }}"
                                style="width:100px;border-radius: 50%">
                            @else
                            <img src="{{$leader->user->profile_photo_url}}" alt="{{ $leader->user->name }}"
                            style="width:100px;border-radius: 50%">
                            @endif
                        </div>
                        <div class="d-flex justify-content-center">
                               {{$leader->user->name ?? 'Anonymous'}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-6 py-3">
            <div class="col-md-12 d-flex justify-content-center">
                <h4>চাকরির প্রস্তুতি লিডার</h4>
            </div>
            <div class="col-md-12 d-flex justify-content-center">
                @foreach($jobleader as $leader)
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="d-flex flex-column">
                        <div>
                            @if(!empty($leader->user->profile_photo_path))
                            <img src="{{asset('assets/img/'.$leader->user->profile_photo_path )}}"
                            alt="{{$leader->user->name }}"
                                style="width:100px;border-radius: 50%">
                            @else
                            <img src="{{$leader->user->profile_photo_url}}" alt="{{ $leader->user->name }}"
                            style="width:100px;border-radius: 50%">
                            @endif
                        </div>
                        <div class="d-flex justify-content-center">
                               {{$leader->user->name ?? 'Anonymous'}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
