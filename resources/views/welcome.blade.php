<div>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Quiz App</title>
        <link rel="stylesheet" href="assets/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>

    <body>
        {{-- Navebar Start --}}
        <nav class="navbar navbar-expand-lg" style="background-color: #FFFFFF;box-shadow: 0 2px rgba(0, 0, 0, 0.1);">
            <div class="container">
                <a href="http://localhost:8000/appuser/userQuizHome">
                    <img src="assets/img/logo/logo.jpg" alt="" style="height: 50px;width:80px;">
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
                        <a class="nav-link" href="{{ route('adminhome') }}" :active="request()->routeIs('adminhome')">এডমিন হোম</a>
                        @endhasrole
                        @hasrole('user|admin|superadmin')
                    <a class="nav-link" href="{{ route('startQuiz') }}" :active="request()->routeIs('startQuiz')">কুইজ
                    </a>
                    <a class="nav-link" href="{{ route('userQuizHome') }}" :active="request()->routeIs('userQuizHome')">ইউজার কুইজ হোম
                    </a>
                    @endhasrole
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('champPractice') }}" :active="request()->routeIs('champPractice')">চ্যাম্পিয়নশিপ প্রস্তুতি</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">চ্যাম্পিয়নশিপ</a>
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
                        <div class="dropdown">
                            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                @auth
                                {{Auth::user()->name}}
                                @else
                                Authentication
                                @endauth
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                @auth
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
        
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        this.closest('form').submit();">Logout
                                        </a>
                                    </form>
                                </li>
                                @else
                                <li>
                                    <a class="dropdown-item" href="{{ route('login') }}">Log in</a>
                                </li>
                                @if (Route::has('register'))
                                <li>
                                    <a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                                @endif
                                @endauth
                            </ul>
                        </div>
                        @endif
                    </span>
                </div>
            </div>
        </nav>
        {{-- Navebar End --}}
        {{-- Leader Start --}}
        <div class="container-fluid" style="background-color: #FFFFFF;box-shadow: 0 2px rgba(0, 0, 0, 0.1);">
            <div class="row ">
                <div class="col-md-6 py-3">
                    <div class="col-md-12 d-flex justify-content-center">
                        <h4>কুইজ লিডার</h4>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center">
                        <div class="col-md-4 d-flex justify-content-center">
                            <div class="d-flex flex-column">
                                <div><img src="assets/img/profile/profile1.png" alt="Avatar"
                                        style="width:100px;border-radius: 50%">
                                </div>
                                <div class="d-flex justify-content-center">
                                    <p>Mr.Nishan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex justify-content-center">
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
                        </div>
                    </div>
                </div>
                <div class="col-md-6 py-3">
                    <div class="col-md-12 d-flex justify-content-center">
                        <h4>চাকরির প্রস্তুতি লিডার</h4>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center">
                        <div class="col-md-4 d-flex justify-content-center">
                            <div class="d-flex flex-column">
                                <div><img src="assets/img/profile/profile1.png" alt="Avatar"
                                        style="width:100px;border-radius: 50%">
                                </div>
                                <div class="d-flex justify-content-center">
                                    <p>Mr.Nishan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex justify-content-center">
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
                        </div>
                    </div>
                </div>
            </div>
            {{-- Leader End --}}
            {{-- Carousel Start --}}
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" style="max-height: 500px;">
                    <div class="carousel-item active">
                        <img src="assets/img/slider/1649003581.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/slider/books.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/slider/1649003581.jpeg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            {{-- Carousel End --}}

            

        {{-- Footer Start --}}
        <div class="container-fluid py-5 "
            style="background-color: #FFFFFF;box-shadow: 2px rgba(0, 0, 0, 0.1);text-align: center;">
            <p>@Copyright Nishanbd 2022</p>
        </div>
        {{-- Footer End --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
    </body>

    </html>
</div>
