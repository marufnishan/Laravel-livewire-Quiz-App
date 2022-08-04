{{-- Navebar Start --}}
<nav class="navbar navbar-expand-lg" style="background-color: #FFFFFF;box-shadow: 0 2px rgba(0, 0, 0, 0.1);">
    <div class="container">
        <a href="/">
            <img src="{{asset('assets/img/logo/logo.jpg')}}" alt="" style="height: 50px;width:100px;">
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
                {{-- @hasrole('user|admin|superadmin')
                <a class="nav-link" href="{{ route('userQuizHome') }}"
                    :active="request()->routeIs('userQuizHome')">ইউজার কুইজ
                    ড্যাশবোর্ড
                </a>
                @endhasrole --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('champPractice') }}"
                        :active="request()->routeIs('champPractice')">চ্যাম্পিয়নশিপ প্রস্তুতি</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Championship') }}"
                        :active="request()->routeIs('Championship')">চ্যাম্পিয়নশিপ</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown"><a class="nav-link">চাকরির প্রস্তুতি
                        </a>
                        @livewire('catecogy-component')
                    </div>
                </li>
                
                <li class="nav-item">
                    <div class="dropdown"><a class="nav-link">আডমিশন প্রস্তুতি 
                        </a>
                        <div class="dropdown-content">
                            <a href="#">মেডিক্যাল</a>
                            <a href="#">ভার্সিটি</a>
                            <a href="#">ইঞ্জিনিয়ারিং</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown"><a class="nav-link">লিডারবোর্ড
                        </a>
                        <div class="dropdown-content">
                            <a href="{{route('QuizledarBoard')}}">চ্যাম্পিয়নশিপ প্রস্তুতি</a>
                            @hasrole('user|admin|superadmin')
                            <a href="{{route('ChampledarBoard')}}">চ্যাম্পিয়নশিপ</a>
                            <a href="{{route('JobledarBoard')}}">চাকরির প্রস্তুতি</a>
                            <a href="{{route('userQuizHome')}}">কুইজ হোম</a>
                            @endhasrole
                        </div>
                    </div>
                </li>
            </ul>
            <span class="navbar-text">
                @if (Route::has('login'))
                @auth
                <div class="dropdown"><a class="nav-link">
                    @if (Auth::user())
                    @if(Auth::user()->profile_photo_path)
                    <button
                        class="flex text-sm me-3 border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                        <img class="h-12 w-12 rounded-full object-cover" src="{{asset('assets/img/'.Auth::user()->profile_photo_path)}}"
                            alt="{{ Auth::user()->name }}" />
                    </button>
                    @else
                    <img class="h-12 w-12 rounded-full object-cover" src="{{Auth::user()->profile_photo_url}}"
                            alt="{{ Auth::user()->name }}" />
                    @endif
                    @else
                    <span class="inline-flex rounded-md">
                        <button type="button"
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                            {{ Auth::user()->name }}

                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </span>
                    @endif
                    </a>
                    <div class="dropdown-content">
                        {{-- <a href="{{ route('profile.show') }}">Profile</a> --}}
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    this.closest('form').submit();">Log Out</a>
                        </form>
                    </div>
                    @else
                    <div class="dropdown"><a class="nav-link">
                            <span class="inline-flex rounded-md">
                                <button type="button"
                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                    Authentication
                                </button>
                            </span>
                        </a>
                        <div class="dropdown-content">
                            <a href="{{ route('login') }}"
                                class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                            @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            @endif
                        </div>
                        @endauth
                        @endif
            </span>
        </div>
    </div>
</nav>
{{-- Navebar End --}}
