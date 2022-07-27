<x-app-layout>
        {{-- Leader Start --}}
        <div class="container-fluid" style="background-color: #FFFFFF;box-shadow: 0 2px rgba(0, 0, 0, 0.1);">
            @livewire('home-leaderboard')
            {{-- Leader End --}}
            {{-- Carousel Start --}}
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" style="max-height: 500px;">
                    <div class="carousel-item active">
                        <img src="assets/img/slider/6663.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/slider/books.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/slider/6663.jpg" class="d-block w-100" alt="...">
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
    </x-app-layout>