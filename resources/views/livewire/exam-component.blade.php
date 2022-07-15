<div>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Create Exam') }}
            </h2>
        </x-slot>
        <div class="max-w-7xl m-4 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-3">
                <div class="mx-auto">
                    <h2 class="text-2xl font-bold card bg-green-600 p-4 text-gray-100 rounded-t-lg mx-auto">New Exam</h2>
                    <div class="mt-2 max-w-auto mx-auto card p-4 bg-white rounded-b-lg shadow-md">
                        <div class="grid grid-cols-1 gap-6">
                            @if (Session::has('message'))
                            <div class="alert alert-info my-3">{{ Session::get('success') }}</div>
                            @endif
                            <form action="{{route('storeExam')}}" method="post">
                                @csrf
                                <label class="block">
                                    <span class="text-gray-700">Exam Thumbnail</span>
                                    @error('exam_thumbnail')
                                    <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                    @enderror
                                    <input cl name="exam_thumbnail" value="{{ old('exam_thumbnail') }}" type="file" class="mt-1 p-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" />
                                </label>
                                <label class="block">
                                    <span class="text-gray-700">Exam Name</span>
                                    @error('exam_title')
                                    <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                    @enderror
                                    <input name="exam_title" value="{{ old('exam_title') }}" type="text" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" />
                                </label>
                                <label class="block">
                                    <span class="text-gray-700">Exam Date-Time</span>
                                    @error('exam_datetime')
                                    <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                    @enderror
                                    <input name="exam_datetime" value="{{ old('exam_datetime') }}" type="datetime-local" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" />
                                </label>
                                <label class="block">
                                    <span class="text-gray-700">Exam Duration</span>
                                    @error('duration')
                                    <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                    @enderror
                                    <input name="duration" value="{{ old('duration') }}" type="number" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" />
                                </label>
                                <label class="block">
                                    <span class="text-gray-700">Total Question</span>
                                    @error('total_question')
                                    <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                    @enderror
                                    <input name="total_question" value="{{ old('total_question') }}" type="number" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" />
                                </label>
                                <label class="block">
                                    <span class="text-gray-700">Marks Per Question</span>
                                    @error('marks_per_right_answer')
                                    <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                    @enderror
                                    <input name="marks_per_right_answer" value="{{ old('marks_per_right_answer') }}" type="number" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" />
                                </label>
                                <label class="block">
                                    <span class="text-gray-700">Exam Code</span>
                                    @error('exam_code')
                                    <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                    @enderror
                                    <input name="exam_code" value="{{ old('exam_code') }}" type="text" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" />
                                </label>
                                <label class="block">
                                    <span class="text-gray-700">Exam Status</span>
                                    @error('status')
                                    <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                    @enderror
                                    <select name="status" value="{{ old('section.status') }}" class="block w-full mt-1 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                                        <option value="">Select One Exam</option>
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                </label>
                                <div class="flex items-center justify-end mt-4">
                                    <a href="{{route('listSection')}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">Back</a>
    
                                    <x-jet-button type="submit" class="ml-4">
                                        {{ __('Create') }}
                                    </x-jet-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
