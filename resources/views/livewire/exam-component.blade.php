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
                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif
                            <form action="{{route('storeExam')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <label class="block">
                                    @error('exam_thumbnail')
                                    <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                    @enderror
                                    <input name="exam_thumbnail" value="{{ old('exam_thumbnail') }}" type="file" class="form-control" wire:model="exam_thumbnail" />
                                    @if($exam_thumbnail)
                                        <img class="my-3" src="{{$exam_thumbnail->temporaryUrl()}}" width="200" height="200" />
                                    @endif
                                    
                                </label>
                                <label class="block">
                                    <span class="text-gray-700 my-3">Exam Name</span>
                                    @error('exam_title')
                                    <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                    @enderror
                                    <input name="exam_title" value="{{ old('exam_title') }}" type="text" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" />
                                </label>
                                <label class="block">
                                    <span class="text-gray-700 my-3">Exam Date-Time</span>
                                    @error('exam_datetime')
                                    <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                    @enderror
                                    <input name="exam_datetime" value="{{ old('exam_datetime') }}" type="datetime-local" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" />
                                </label>
                                <label class="block">
                                    <span class="text-gray-700 my-3">Total Question</span>
                                    @error('total_question')
                                    <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                    @enderror
                                    <input name="total_question" value="{{ old('total_question') }}" type="number" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" />
                                </label>
                                <label class="block">
                                    <span class="text-gray-700 my-3">Marks Per Question</span>
                                    @error('marks_per_right_answer')
                                    <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                    @enderror
                                    <input name="marks_per_right_answer" value="{{ old('marks_per_right_answer') }}" type="number" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" />
                                </label>
                                <label class="block">
                                    <span class="text-gray-700 my-3">Exam Code</span>
                                    @error('exam_code')
                                    <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                    @enderror
                                    <input name="exam_code" value="{{ old('exam_code') }}" type="text" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" />
                                </label>
                                <label class="block">
                                    <span class="text-gray-700 my-3">Exam Type</span>
                                    @error('exam_type')
                                    <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                    @enderror
                                    <select name="exam_type" value="{{ old('section.exam_type') }}" class="block w-full mt-1 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" wire:model="examtype">
                                        <option value="">Select One Exam</option>
                                        <option value="Practice">Practice</option>
                                        <option value="Championship">Championship</option>
                                        <option value="Job">Job</option>
                                    </select>
                                </label>
                                @if($examtype =='Job')
                                <label class="block">
                                    <span class="text-gray-700 my-3">Job Category</span>
                                    @error('cat_id')
                                    <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                    @enderror
                                    <select name="cat_id" value="{{ old('section.cat_id') }}" class="block w-full mt-1 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" wire:model="jobcategory">
                                        <option value="">Select Job Type</option>
                                         @foreach ($categories as $categorie)
                                        <option value="{{$categorie->id}}">{{$categorie->cat_name}}</option>
                                        @endforeach
                                    </select>
                                </label>
                                <label class="block">
                                    <span class="text-gray-700 my-3">Teacher</span>
                                    @error('teacher_id')
                                    <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                    @enderror
                                    <select name="teacher_id" value="{{ old('section.teacher_id') }}" class="block w-full mt-1 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                                        <option value="">Select Teacher</option>
                                         @foreach ($teachers->where('cat_id',$jobcategory) as $teacher)
                                        <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                                        @endforeach
                                    </select>
                                </label>
                                @endif
                                <label class="block">
                                    <span class="text-gray-700 my-3">Exam Price</span>
                                    @error('price')
                                    <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                    @enderror
                                    <input name="price" value="{{ old('price') }}" type="text" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" />
                                </label>
                                <label class="block">
                                    <span class="text-gray-700 my-3">Exam Subscription</span>
                                    @error('subscription')
                                    <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                    @enderror
                                    <select name="subscription" value="{{ old('section.subscription') }}" class="block w-full mt-1 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                                        <option value="">Select One Exam</option>
                                        <option value="paid">Paid</option>
                                        <option value="free">Free</option>
                                        <option value="promotional">Promotional</option>
                                    </select>
                                </label>
                                <label class="block">
                                    <span class="text-gray-700 my-3">Exam Status</span>
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
                                    <a href="{{route('examList')}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">Back</a>
    
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
