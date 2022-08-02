<x-app-layout>
        {{-- Leader Start --}}
        <div class="container-fluid" style="background-color: #FFFFFF;box-shadow: 0 2px rgba(0, 0, 0, 0.1);">
            @livewire('home-leaderboard')
            {{-- Leader End --}}
            {{-- Carousel Start --}}
            @livewire('home-slider')
            {{-- Carousel End --}}
    </x-app-layout>