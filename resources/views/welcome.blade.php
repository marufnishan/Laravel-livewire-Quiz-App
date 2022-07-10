<style>
    body{
        background-color: #F3F4F6 !important;
    }
</style>
<div>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Quiz App</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>

    <body>
        {{-- Navebar Start --}}
                <nav class="navbar navbar-expand-lg" style="background-color: #FFFFFF;box-shadow: 0 2px rgba(0, 0, 0, 0.1);">
                    <div class="container">
                        <a href="http://localhost:8000/appuser/userQuizHome">
                            <img src="http://localhost:8000/images/logo.jpeg" alt="Quiz Site" style="width:50px; height:50px">
                          </a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="line-height: 2rem;
                        font-weight: 500;
                        font-size: 0.875rem;">
                          <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
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
                                        <a class="dropdown-item" href="{{ route('userQuizHome') }}">Home</a>
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
                {{-- Carousel Start --}}
                <div id="carouselExampleControls" class="container carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" style="max-height: 500px">
                      <div class="carousel-item active">
                        <img src="assets/1649003581.jpeg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="assets/books.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="assets/1649003581.jpeg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                {{-- Carousel End --}}

                {{-- Exam Category Start --}}
                <div class="container"style="background-color: #FFFFFF;">
                    <div class="row">
                        <div class="col-md-12" style="background-color: azure">
                            <h1>Exam Category</h1>
                        </div>
                        <div class="col-md-3"><div class="card" style="width: 18rem;">
                            <img src="assets/std.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div></div>
                        <div class="col-md-3"><div class="card" style="width: 18rem;">
                            <img src="assets/std.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div></div>
                        <div class="col-md-3"><div class="card" style="width: 18rem;">
                            <img src="assets/std.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div></div>
                        <div class="col-md-3"><div class="card" style="width: 18rem;">
                            <img src="assets/std.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div></div>
                          <div class="col-md-3"><div class="card" style="width: 18rem;">
                            <img src="assets/std.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div></div>
                        <div class="col-md-3"><div class="card" style="width: 18rem;">
                            <img src="assets/std.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div></div>
                        <div class="col-md-3"><div class="card" style="width: 18rem;">
                            <img src="assets/std.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div></div>
                        <div class="col-md-3"><div class="card" style="width: 18rem;">
                            <img src="assets/std.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div></div>
                    </div>
                </div>
                {{-- Exam Category End --}}

                {{-- Footer Start --}}
                <div class="container-fluid py-5 " style="background-color: #FFFFFF;box-shadow: 2px rgba(0, 0, 0, 0.1);text-align: center;">
                    <p>@Copyright Nishanbd 2022</p>
                </div>
                {{-- Footer End --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
    </body>

    </html>
</div>
