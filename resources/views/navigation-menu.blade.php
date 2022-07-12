{{-- Navebar Start --}}
<nav class="navbar navbar-expand-lg" style="background-color: #FFFFFF;box-shadow: 0 2px rgba(0, 0, 0, 0.1);">
    <div class="container">
        <a href="/">
            <img src="{{asset('assets/img/logo/logo.jpg')}}" alt="" style="height: 50px;width:80px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="line-height: 2rem;
                font-weight: 500;
                font-size: 0.875rem;">
                @hasrole('admin')
                <a class="nav-link" href="{{ route('adminhome') }}" :active="request()->routeIs('adminhome')">এডমিন 
                    ড্যাশবোর্ড</a>
                @endhasrole
                @hasrole('user|admin|superadmin')
            <a class="nav-link" href="{{ route('userQuizHome') }}" :active="request()->routeIs('userQuizHome')">ইউজার কুইজ 
                ড্যাশবোর্ড
            </a>
            @endhasrole
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('champPractice') }}" :active="request()->routeIs('champPractice')">চ্যাম্পিয়নশিপ প্রস্তুতি</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Championship') }}" :active="request()->routeIs('Championship')">চ্যাম্পিয়নশিপ</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown"><a class="nav-link">চাকরির প্রস্তুতি
                    </a>
                        <div class="dropdown-content">
                            <a href="#">বাংলা ভাষা ও সাহিত্য</a>
                            <a href="#">ইংরেজি ভাষা ও সাহিত্য</a>
                            <a href="#">বাংলােদশ বিষয়াবলী</a>
                            <a href="#">আন্তর্জাতিক বিষয়াবলী</a>
                            <a href="#">ভূগোল ( বাংলাদেশ ও বিশ্ব ) পরিবেশ ও দুর্যোগ ব্যবস্থাপনা</a>
                            <a href="#">সাধারণ বিজ্ঞান</a>
                            <a href="#">কম্পিউটার ও তথ্য প্রযুক্তি</a>
                            <a href="#">গাণিতিক যুক্তি</a>
                            <a href="#">মানসিক দক্ষতা</a>
                            <a href="#">নৈতিকতা মূল্যবোধ ও সুশাসন</a>
                            <a href="#">সমন্বিত</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    
                        <div class="dropdown"><a class="nav-link">লিডারবোর্ড
                        </a>
                            <div class="dropdown-content">
                                <a href="{{route('QuizledarBoard')}}">কুইজ</a>
                                <a href="#">চাকরির প্রস্তুতি</a>
                                <a href="#">চ্যাম্পিয়নশিপ</a>
                            </div>
                        </div>
                </li>
            </ul>
            <span class="navbar-text">
                @if (Route::has('login'))
                <div class="dropdown"><a class="nav-link">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <button class="flex text-sm me-3 border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                        <img class="h-12 w-12 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </button>
                    @else
                    <span class="inline-flex rounded-md">
                        <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                            {{ Auth::user()->name }}

                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </span>
                    @endif
                </a>
                <div class="dropdown-content">
                    <a href="{{ route('profile.show') }}">Profile</a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    this.closest('form').submit();">Log Out</a>
                </div>
                @endif
            </span>
        </div>
    </div>
</nav>
{{-- Navebar End --}}