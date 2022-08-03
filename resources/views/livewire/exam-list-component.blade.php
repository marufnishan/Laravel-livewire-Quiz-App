<div>
    <x-slot name="header">
        <div class="md:flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('All Exam') }}
            </h2>
        </div>
    </x-slot>

    <div class="max-w-7xl m-4 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="mx-auto">
                <div class="flex justify-between items-center py-4">
                    <a href="{{route('createExam')}}" class="tracking-wide font-bold rounded border-2 border-blue-500 hover:border-blue-500 bg-blue-500 text-white hover:bg-blue-600 transition shadow-md py-2 px-6 items-center">Create a Exam</a>
                    <a href="{{route('adminhome')}}" class="tracking-wide font-bold rounded border-2 border-blue-500 hover:border-blue-500 bg-blue-500 text-white hover:bg-blue-600 transition shadow-md py-2 px-6 items-center">Back</a>
                </div>
                @if($exams->isEmpty())
                <div class="px-4 py-5 sm:px-6">
                    <h1 class="text-sm leading-6 font-medium text-gray-900">
                        No Exams found!
                    </h1>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">
                        Looks like you have just landed! Once you have created any sections, they will be listed here.
                    </p>
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
                                                Exam Thumbnail
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-white uppercase tracking-wider">
                                                Exam Date
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-white uppercase tracking-wider">
                                                Total Question
                                            </th>
                                            <th scope="col" class="relative px-6 py-3">
                                                <span class="sr-only">Edit</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="capitalize bg-white divide-y divide-gray-200">
                                        @foreach($exams as $exam)
                                        <tr class="hover:bg-green-100">
                                            <td class="px-6 ">
                                                <div class="flex items-center">
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            <a class="text-blue-400 hover:underline" href="{{-- {{ route('detailSection', $section->id) }} --}}">
                                                                {{ $exam->exam_title}}
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-1">
                                                @if(!empty($exam->exam_thumbnail))
                                                <img src="{{asset('assets/img/examthumbnail')}}/{{$exam->exam_thumbnail}}" width="100" alt="...">
                                                @else
                                                <img src="{{asset('assets/img/std.jpg')}}"  width="100" alt="...">
                                                @endif
                                            </td>
                                            <td class="px-6 py-1">
                                                <div class="text-sm text-gray-900">{{$exam->exam_datetime }}</div>
                                            </td>
                                            <td class="px-6 py-1">
                                                <div class="text-sm text-gray-900">{{ $exam->total_question }}</div>
                                            </td>
                                            <td class="sm:flex align-middle justify-center items-center px-6 py-1 text-right text-sm font-medium">
                                                <a href="{{ route('editExam', $exam->id )}} " class="text-green-500 hover:text-green-700">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 20 20" fill="currentColor">
                                                        <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                        <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                                    </svg>
                                                </a>
                                                    <div class="text-red-500 hover:text-red-700">
                                                        <button type="button" wire:click="delete({{ $exam->id }})">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 pt-1" viewBox="0 0 20 20" fill="currentColor">
                                                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="p-3">{{ $exams->links() }}</div>
                            
                        </div>
                    </div>
                </div>
                @endif
                <!-- ---------------- END NEW TABLE --------------------- -->
            </div>
        </div>
    </div>
</div>
