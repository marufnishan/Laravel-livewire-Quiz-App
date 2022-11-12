<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('এডমিন হোম') }}
        </h2>
    </x-slot>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-5 mx-auto">
            <div class="flex flex-wrap -m-4 text-center ">
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full ">
                    <a href="{{route('teacherList')}}">
                        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg bg-white hover:bg-green-100">
                            <img class="mx-auto my-3" style="width: 48px;height: 36px" src="{{asset('assets/img/svg/teacher.png')}}" alt="" >
                            <h2 class="title-font font-medium text-xl text-gray-900">{{$teacherCount}}</h2>
                            <p class="leading-relaxed">শিক্ষক সংখ্যা</p>
                        </div>
                    </a>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full ">
                    <a href="{{route('examList')}}">
                        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg bg-white hover:bg-green-100">
                            <img class="mx-auto my-3" style="width: 48px;height: 34px" src="{{asset('assets/img/svg/exam.png')}}" alt="" >
                            <h2 class="title-font font-medium text-xl text-gray-900">{{$examCount}}</h2>
                            <p class="leading-relaxed">পরীক্ষা সংখ্যা</p>
                        </div>
                    </a>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full ">
                    <a href="{{route('listSection')}}">
                        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg bg-white hover:bg-green-100">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                                <path d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                            <h2 class="title-font font-medium text-xl text-gray-900">{{$sectionCount}}</h2>
                            <p class="leading-relaxed">লেভেল সংখ্যা</p>
                        </div>
                    </a>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full ">
                    <a href="{{route('jobcatList')}}">
                        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg bg-white hover:bg-green-100">
                            <img class="mx-auto my-3" style="width: 48px;height: 34px" src="{{asset('assets/img/svg/job.png')}}" alt="" >
                            <h2 class="title-font font-medium text-xl text-gray-900">{{$categories}}</h2>
                            <p class="leading-relaxed">চাকরির ধরন</p>
                        </div>
                    </a>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <a href="{{route('allquestion')}}">
                    <div class="border-2 border-gray-200 px-4 py-6 rounded-lg bg-white">
                        <svg fill=" none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                            <path d="M11 3a1 1 0 10-2 0v1a1 1 0 102 0V3zM15.657 5.757a1 1 0 00-1.414-1.414l-.707.707a1 1 0 001.414 1.414l.707-.707zM18 10a1 1 0 01-1 1h-1a1 1 0 110-2h1a1 1 0 011 1zM5.05 6.464A1 1 0 106.464 5.05l-.707-.707a1 1 0 00-1.414 1.414l.707.707zM5 10a1 1 0 01-1 1H3a1 1 0 110-2h1a1 1 0 011 1zM8 16v-1h4v1a2 2 0 11-4 0zM12 14c.015-.34.208-.646.477-.859a4 4 0 10-4.954 0c.27.213.462.519.476.859h4.002z"></path>
                        </svg>
                        <h2 class="title-font font-medium text-xl text-gray-900">{{$questionCount}}</h2>
                        <p class="leading-relaxed">প্রশ্ন সংখ্যা</p>
                    </div>
                    </a>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <a href="{{route('globalQuizzes')}}">
                        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg bg-white">
                            <svg fill=" none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <h2 class="title-font font-medium text-xl text-gray-900">{{$quizCount}}</h2>
                            <p class="leading-relaxed">মোট পরীক্ষা সম্পন্ন</p>
                        </div>
                    </a>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <a href="{{route('usersIndex')}}">
                        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg bg-white hover:bg-green-100">
                            <svg fill=" none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                                <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>
                            </svg>
                            <h2 class="title-font font-medium text-xl text-gray-900">{{$userCount}}</h2>
                            <p class="leading-relaxed">ইউজার সংখ্যা</p>
                        </div>
                    </a>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full ">
                    <a href="{{route('allSlider')}}">
                        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg bg-white hover:bg-green-100">
                            <img class="mx-auto my-3" style="width: 48px;height: 34px" src="{{asset('assets/img/svg/slider.png')}}" alt="" >
                            <h2 class="title-font font-medium text-xl text-gray-900">{{$sliders}}</h2>
                            <p class="leading-relaxed">হোম স্লাইডার</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="max-w-7xl m-4 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="mx-auto">
                    <div class="flex justify-between items-center py-4">
                        <a href="{{route('enrollList')}}" class="tracking-wide font-bold rounded border-2 border-blue-500 hover:border-blue-500 bg-blue-500 text-white hover:bg-blue-600 transition shadow-md py-2 px-6 items-center">All Enrolls</a>
                        <a href="{{route('adminhome')}}" class="tracking-wide font-bold rounded border-2 border-blue-500 hover:border-blue-500 bg-blue-500 text-white hover:bg-blue-600 transition shadow-md py-2 px-6 items-center">Back</a>
                    </div>
                    @if($enrolls->isEmpty())
                    <div class="px-4 py-5 sm:px-6">
                        <h1 class="text-sm leading-6 font-medium text-gray-900">
                            No Latest Enrolls found!
                        </h1>
                    </div>
                    @else
                    <!-- --------------------- START NEW TABLE --------------------->
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="p-2 shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <div>
                                        @if (session()->has('message'))
                                            <div class="alert alert-success">
                                                {{ session('message') }}
                                            </div>
                                        @endif
                                        @if (session()->has('warning'))
                                            <div class="alert alert-danger">
                                                {{ session('warning') }}
                                            </div>
                                        @endif
                                    </div>
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="tracking-wide font-bold rounded border-2 bg-green-500 text-white  transition shadow-md py-2 px-6 items-center">
                                            <tr>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-white uppercase tracking-wider">
                                                    Exam Name
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-white uppercase tracking-wider">
                                                    Transection Number
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-white uppercase tracking-wider">
                                                    Transection ID
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-white uppercase tracking-wider">
                                                    Student Email
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-white uppercase tracking-wider">
                                                    Attendense
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-white uppercase tracking-wider">
                                                    Approval
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="capitalize bg-white divide-y divide-gray-200">
                                            @foreach($enrolls as $enroll)
                                            <tr class="hover:bg-green-100">
                                                <td class="px-6 ">
                                                    <div class="flex items-center">
                                                        <div class="ml-4">
                                                            <div class="text-sm font-medium text-gray-900">
                                                                {{$enroll->exam->exam_title}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-1">
                                                    {{$enroll->phone_number}}
                                                </td>
                                                <td class="px-6 py-1">
                                                    <div class="text-sm text-gray-900">{{$enroll->trx_id}}</div>
                                                </td>
                                                <td class="px-6 py-1">
                                                    <div class="text-sm text-gray-900">{{$enroll->email}}</div>
                                                </td>
                                                <td class="px-6 py-1">
                                                    <div class="text-sm text-gray-900">{{$enroll->attendance_status}}</div>
                                                </td>
                                                <td class="px-6 py-1">
                                                    <div class="text-sm text-gray-900">{{$enroll->approval}}</div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    @endif
                    <!-- ---------------- END NEW TABLE --------------------- -->
                </div>
            </div>
        </div>
    </section>
    <!-- Cards -->
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-5 mx-auto">
            <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-2">
                <div class="flex items-center p-1 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                    <div class="p-4 w-full">
                        <div class="container px-5 mx-auto" id="chart">
                        </div>
                    </div>
                </div>
                <!-- Card -->
                <div class="flex items-center p-1 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                    <div class="p-4 w-full">
                        <div class="container px-5 mx-auto" id="chart2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @push('js')
    <script>
        const GlobalQuizChart = new Chartisan({
            el: '#chart',
            url: "@chart('global_quizzes')",
            loader: {
                color: '#ff00ff',
                size: [60, 60],
                type: 'bar',
                textColor: '#ffff00',
                text: 'Loading chart data...',
            },
            hooks: new ChartisanHooks()
                .colors()
                .beginAtZero()
                .title('Quiz Scores')
                .datasets(['line'])
                .stepSize(25)
                .responsive()
        });
    </script>
    <script>
        const MonthlyUserChart = new Chartisan({
            el: '#chart2',
            url: "@chart('monthly_users')",
            loader: {
                color: '#ff00ff',
                size: [60, 60],
                type: 'bar',
                textColor: '#ffff00',
                text: 'Loading chart data...',
            },
            hooks: new ChartisanHooks()
                .colors()
                .beginAtZero()
                .title('Monthly Users')
                .datasets(['line'])
                .stepSize(25)
                .responsive()
        });
    </script>
    @endpush
</x-app-layout>