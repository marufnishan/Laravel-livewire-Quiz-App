<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update User') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl m-4 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white p-3 overflow-hidden shadow-xl sm:rounded-lg">
            <div class="mx-auto bg-gray-100">
                <h2 class="text-2xl font-bold card bg-green-600 p-4 text-gray-100 rounded-t-lg mx-auto">Update User</h2>
                <div class="mt-2 max-w-auto mx-auto card p-4 bg-white rounded-b-lg shadow-md">
                    <div class="grid grid-cols-1 gap-6">
                        <form action="{{route('updateUser', $user->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label class="block">
                                <span class="text-gray-700">User Name</span>
                                @error('name')
                                <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                @enderror
                                <input name="name" value="{{old('name', $user->name)}}" type="text" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" />
                            </label>
                            <label class="block">
                                <span class="text-gray-700">User Image</span>
                                @error('profile_photo_path')
                                <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                @enderror
                                <input name="profile_photo_path" value="{{old('profile_photo_path', $user->profile_photo_path)}}" type="file" class="from-control my-3" wire:model="newimage"/>
                                @if($newimage)
                                                <img src="{{$newimage->temporaryUrl()}}" width="120" class="my-3" />
                                                @elseif($user->profile_photo_path)
                                                <img src="{{asset('assets/img/'.$user->profile_photo_path)}}"
                                                    alt="{{$user->name }}" width="120" class="my-3" />
                                                @else
                                                    <img src="{{$user->profile_photo_url}}"
                                                    alt="{{$user->name }}" width="120" class="my-3" />
                                            @endif
                            </label>
                            <div class="flex items-center justify-end mt-4">
                                <a href="{{route('usersIndex')}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">Back</a>

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
