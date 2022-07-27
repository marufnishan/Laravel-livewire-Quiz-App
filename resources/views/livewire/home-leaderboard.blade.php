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
                            @if(!empty($leader->user->profile_photo_url))
                            <img src="{{$leader->user->profile_photo_url }}"
                            alt="{{$leader->user->name }}"
                                style="width:100px;border-radius: 50%">
                            @else
                            <img src="{{asset('assets/img/profile/anonimus.jpg')}}" alt="anonimus.jpg"
                            style="width:100px;border-radius: 50%">
                            @endif
                        </div>
                        <div class="d-flex justify-content-center">
                               {{$leader->user->name ?? 'Anonymous'}}
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-md-4 d-flex justify-content-center">
                    <div class="d-flex flex-column">
                        <div><img src="assets/img/profile/profile2.png" alt="Avatar"
                                style="width:100px;border-radius: 50%">
                        </div>
                        <div class="d-flex justify-content-center">
                            <p>Ms.salma</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="d-flex flex-column">
                        <div><img src="assets/img/profile/profile4.png" alt="Avatar"
                                style="width:100px;border-radius: 50%">
                        </div>
                        <div class="d-flex justify-content-center">
                            <p>Mr.Sabbir</p>
                        </div>
                    </div>
                </div> --}}
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
                            @if(!empty($leader->user->profile_photo_url))
                            <img src="{{$leader->user->profile_photo_url }}"
                            alt="{{$leader->user->name }}"
                                style="width:100px;border-radius: 50%">
                            @else
                            <img src="{{asset('assets/img/profile/anonimus.jpg')}}" alt="anonimus.jpg"
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
