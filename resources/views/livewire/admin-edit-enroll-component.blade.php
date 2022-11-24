<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Enroll') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl m-4 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white p-3 overflow-hidden shadow-xl sm:rounded-lg">
            <div class="mx-auto bg-gray-100">
                <h2 class="text-2xl font-bold card bg-green-600 p-4 text-gray-100 rounded-t-lg mx-auto">Update Enroll</h2>
                <div class="mt-2 max-w-auto mx-auto card p-4 bg-white rounded-b-lg shadow-md">
                    <div class="grid grid-cols-1 gap-6">
                        <form action="{{route('updateEnroll', $enroll->id)}}" method="post" >
                            @csrf
                            <label class="block">
                                <span class="text-gray-700">Approval</span>
                                @error('approval')
                                <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                @enderror
                                <select name="approval" value="{{old('approval', $enroll->approval)}}" class="block w-full mt-1 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                                    <option value="Approved" {{ $enroll->approval === 'Approved' ? 'selected' : '' }}>
                                        Approved
                                    </option>
                                    <option value="Pending" {{ $enroll->approval === 'Pending' ? 'selected' : '' }}>
                                        Pending
                                    </option>                                    
                                    <option value="Cancel" {{ $enroll->approval === 'Cancel' ? 'selected' : '' }}>
                                        Cancel
                                    </option>
                                </select>
                            </label>
                            <label class="block">
                                <span class="text-gray-700">Expeire Date-Time</span>
                                @error('expeire_at')
                                <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                @enderror
                                <input name="expeire_at" value="{{old('expeire_at', $enroll->expeire_at)}}" type="text" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" placeholder="type dayes..." />
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
