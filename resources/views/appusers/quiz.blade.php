<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('AppUser Home') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl m-1 mx-auto sm:px-6 lg:px-8">
        <!-- Pass the variables and load Livewire component -->
        <livewire:user-quizlv />
    </div>
    {{-- Footer Start --}}
    <div class="container-fluid py-5 "
    style="background-color: #FFFFFF;box-shadow: 2px rgba(0, 0, 0, 0.1);text-align: center;">
    <p>@Copyright Nishanbd 2022</p>
</div>
{{-- Footer End --}}
</x-app-layout>