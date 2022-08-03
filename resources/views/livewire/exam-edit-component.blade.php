<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Exam') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl m-4 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white p-3 overflow-hidden shadow-xl sm:rounded-lg">
            <div class="mx-auto bg-gray-100">
                <h2 class="text-2xl font-bold card bg-green-600 p-4 text-gray-100 rounded-t-lg mx-auto">Update Exam</h2>
                <div class="mt-2 max-w-auto mx-auto card p-4 bg-white rounded-b-lg shadow-md">
                    <div class="grid grid-cols-1 gap-6">
                        <form action="{{route('updateExam', $exam->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label class="block">
                                <span class="text-gray-700">Exam Name</span>
                                @error('exam_title')
                                <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                @enderror
                                <input name="exam_title" value="{{old('exam_title', $exam->exam_title)}}" type="text" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" />
                            </label>
                            <label class="block">
                                @error('exam_thumbnail')
                                <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                @enderror
                                <input name="exam_thumbnail" value="{{ old('exam_thumbnail') }}" type="file" class="form-control my-3" wire:model="newimage" />
                                @if($newimage)
                                    <img class="my-3" src="{{$newimage->temporaryUrl()}}" width="200" height="200" />
                                @elseif($exam->exam_thumbnail)
                                <img src="{{asset('assets/img/examthumbnail')}}/{{$exam->exam_thumbnail}}" width="200" alt="...">
                                @endif
                                
                            </label>
                            <label class="block">
                                <span class="text-gray-700">Exam Date-Time</span>
                                @error('exam_datetime')
                                <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                @enderror
                                <input name="exam_datetime" value="{{old('exam_datetime', $exam->exam_datetime)}}" type="datetime-local" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" />
                            </label>
                            <label class="block">
                                <span class="text-gray-700">Total Question</span>
                                @error('total_question')
                                <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                @enderror
                                <input name="total_question" value="{{old('total_question', $exam->total_question)}}" type="text" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" />
                            </label>
                            <label class="block">
                                <span class="text-gray-700">Marks Per Question</span>
                                @error('marks_per_right_answer')
                                <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                @enderror
                                <input name="marks_per_right_answer" value="{{old('marks_per_right_answer', $exam->marks_per_right_answer)}}" type="text" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" />
                            </label>
                            <label class="block">
                                <span class="text-gray-700">Exam Code</span>
                                @error('exam_code')
                                <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                @enderror
                                <input name="exam_code" value="{{old('exam_code', $exam->exam_code)}}" type="text" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" />
                            </label>

                            <label class="block">
                                <span class="text-gray-700">Exam Type</span>
                                @error('exam_type')
                                <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                @enderror
                                <select name="exam_type" value="{{old('exam_type', $exam->exam_type)}}" class="block w-full mt-1 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                                    <option value="Practice" {{ $exam->exam_type === 'Practice' ? 'selected' : '' }}>
                                        Practice
                                    </option>
                                    <option value="Championship" {{ $exam->exam_type === 'Championship' ? 'selected' : '' }}>
                                        Championship
                                    </option>
                                    <option value="Job" {{ $exam->exam_type === 'Job' ? 'selected' : '' }}>
                                        Job
                                    </option>
                                </select>
                            </label>
                            <label class="block">
                                <span class="text-gray-700">Exam Category</span>
                                @error('cat_id')
                                <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                @enderror
                                <select name="cat_id" value="{{old('cat_id', $exam->cat_id)}}" class="block w-full mt-1 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                                    @foreach($categories as $categories)
                                    <option value="{{$categories->id}}" {{ $exam->cat_id == $categories->id ? 'selected' : '' }}>
                                        {{$categories->cat_name}}
                                    </option>
                                    @endforeach
                                </select>
                            </label>
                            <label class="block">
                                <span class="text-gray-700">Exam Price</span>
                                @error('price')
                                <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                @enderror
                                <input name="price" value="{{old('price', $exam->price)}}" type="text" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" />
                            </label>
                            <label class="block">
                                <span class="text-gray-700">Exam Subscription</span>
                                @error('subscription')
                                <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                @enderror
                                <select name="subscription" value="{{old('subscription', $exam->subscription)}}" class="block w-full mt-1 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                                    <option value="paid" {{ $exam->subscription === 'paid' ? 'selected' : '' }}>
                                        Paid
                                    </option>
                                    <option value="free" {{ $exam->subscription === 'free' ? 'selected' : '' }}>
                                        Free
                                    </option>
                                    <option value="promotional" {{ $exam->subscription === 'promotional' ? 'selected' : '' }}>
                                        Promotional
                                    </option>
                                </select>
                            </label>
                            <label class="block">
                                <span class="text-gray-700">Teacher</span>
                                @error('teacher_id')
                                <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                @enderror
                                <select name="teacher_id" value="{{old('teacher_id', $exam->teacher_id)}}" class="block w-full mt-1 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                                    @foreach ($teachers as $teacher)
                                    <option value="{{$teacher->id}}" {{ $exam->teacher_id === $teacher->id ? 'selected' : '' }}>
                                        {{$teacher->name}}
                                    </option>
                                    @endforeach
                                </select>
                            </label>
                            <label class="block">
                                <span class="text-gray-700">Is this Exam active?</span>
                                @error('status')
                                <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                @enderror
                                <select name="status" value="{{old('status', $exam->status)}}" class="block w-full mt-1 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                                    <option value="Active" {{ $exam->status === 'Active' ? 'selected' : '' }}>
                                        Active
                                    </option>
                                    <option value="Inactive" {{ $exam->status === 'Inactive' ? 'selected' : '' }}>
                                        Inactive
                                    </option>
                                </select>
                            </label>
                            <div class="flex items-center justify-end mt-4">
                                <a href="{{route('examList')}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">Back</a>

                                <x-jet-button type="submit" class="ml-4">
                                    {{ __('Update') }}
                                </x-jet-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
