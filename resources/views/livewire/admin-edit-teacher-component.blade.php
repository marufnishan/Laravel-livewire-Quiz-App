<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Teacher') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl m-4 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white p-3 overflow-hidden shadow-xl sm:rounded-lg">
            <div class="mx-auto bg-gray-100">
                <h2 class="text-2xl font-bold card bg-green-600 p-4 text-gray-100 rounded-t-lg mx-auto">Update Teacher</h2>
                <div class="mt-2 max-w-auto mx-auto card p-4 bg-white rounded-b-lg shadow-md">
                    <div class="grid grid-cols-1 gap-6">
                        <form action="{{route('updateTeacher', $teacher->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label class="block">
                                <span class="text-gray-700">Teacher Name</span>
                                @error('name')
                                <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                @enderror
                                <input name="name" value="{{old('name', $teacher->name)}}" type="text" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" />
                            </label>
                            <label class="block">
                                <span class="text-gray-700">Teacher Image</span>
                                @error('image')
                                <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                @enderror
                                <input name="image" value="{{old('image', $teacher->image)}}" type="file" class="from-control my-3" wire:model="newimage"/>
                                @if($newimage)
                                                <img src="{{$newimage->temporaryUrl()}}" width="120" height="120" class="my-3" />
                                                @elseif($teacher->image)
                                                <img src="{{asset('assets/img/teacherprofile/'.$teacher->image)}}"
                                                    alt="Teacher" width="120" height="120" class="my-3" />
                                                @else
                                                <img class="my-3" src="{{asset('assets/img/profile/teacher1.png')}}" alt="Teacher" width="120" height="120" />
                                            @endif
                            </label>
                            <label class="block">
                                <span class="text-gray-700">Teacher Subject</span>
                                @error('subject')
                                <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                @enderror
                                <input name="subject" value="{{old('subject', $teacher->subject)}}" type="text" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" />
                            </label>
                            <label class="block">
                                <span class="text-gray-700">Teacher Category</span>
                                @error('cat_id')
                                <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                @enderror
                                <select name="cat_id" value="{{ old('cat_id', $teacher->cat_id) }}" class="block w-full mt-1 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                                    <option value="{{$teacher->cat_id}}">{{$teacher->category->cat_name}}</option>
                                     @foreach ($categories as $categorie)
                                    <option value="{{$categorie->id}}">{{$categorie->cat_name}}</option>
                                    @endforeach
                                </select>
                                
                            </label>
                            <div class="flex items-center justify-end mt-4">
                                <a href="{{route('teacherList')}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">Back</a>

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
