<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('এডমিন হোম') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl m-4 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white mt-4 overflow-hidden shadow-xl sm:rounded-lg">
            <div class="mx-auto bg-green-200">
                <h2 class="text-2xl font-bold card bg-green-600 p-4 text-gray-100 rounded-t-lg mx-auto">New Question</h2>
                <div class="mt-2 max-w-auto mx-auto card p-4 bg-white rounded-b-lg shadow-md">
                    <div class="grid grid-cols-1 gap-6">
                        <form action="{{route('storeQuestion', $section)}}" method="post">
                            @csrf
                            <label class="block">
                                <span class="text-gray-700">Question</span>
                                @error('question')
                                <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                @enderror
                                <input name="question" value="{{ old('question') }}" type="text" class="mt-1 block w-full text-xs  bg-gray-200 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" />
                            </label>
                            <label class="block">
                                <span class="text-gray-700">Explanation</span>
                                @error('explanation')
                                <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                @enderror
                                <textarea name="explanation" type="text" class="mt-1 bg-gray-200 block w-full text-xs  bg-graygray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" rows="2">{{ old('explanation') }}</textarea>
                            </label>
                            <label class="block">
                                <span class="text-gray-700">Is this question active?</span>
                                @error('is_active')
                                <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                @enderror
                                <select name="is_active" value="{{ old('is_active') }}" class="block w-1/2 mt-1 text-xs  bg-gray-200 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </label>
                            <div class="grid grid-cols-1 my-5 justify-center">
                                <label class="flex items-center">
                                    @error('answers.0.answer')
                                    <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                    @enderror
                                    <input type="hidden" value="0" name="answers[0][is_checked]">
                                    <input type="checkbox" value="1" name="answers[0][is_checked]">
                                    <span class="min-w-full mx-auto px-5">
                                        <input name="answers[0][answer]" value="{{ old('answers.0.answer') }}" type="text" class="mt-1 text-xs block w-full bg-gray-200 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" />
                                    </span>
                                </label>
                                <label class="flex items-center">
                                    @error('answers.0.answer')
                                    <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                    @enderror
                                    <input type="hidden" value="0" name="answers[1][is_checked]">
                                    <input type="checkbox" value="1" name="answers[1][is_checked]">
                                    <span class="min-w-full mx-auto px-5">
                                        <input name="answers[1][answer]" value="{{ old('answers.1.answer') }}" type="text" class="mt-1 block w-full text-xs  bg-gray-200 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" />
                                    </span>
                                </label>
                                <label class="flex items-center">
                                    @error('answers.0.answer')
                                    <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                    @enderror
                                    <input type="hidden" value="0" name="answers[2][is_checked]">
                                    <input type="checkbox" value="1" name="answers[2][is_checked]">
                                    <span class="min-w-full mx-auto px-5">
                                        <input name="answers[2][answer]" value="{{ old('answers.2.answer') }}" type="text" class="mt-1 block w-full text-xs  bg-gray-200 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" />
                                    </span>
                                </label>
                                <label class="flex items-center">
                                    @error('answers.0.answer')
                                    <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                    @enderror
                                    <input type="hidden" value="0" name="answers[3][is_checked]">
                                    <input type="checkbox" value="1" name="answers[3][is_checked]">
                                    <span class="min-w-full mx-auto px-5">
                                        <input name="answers[3][answer]" value="{{ old('answers.3.answer') }}" type="text" class="mt-1 block w-full text-xs  bg-gray-200 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" />
                                    </span>
                                </label>
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                <a href="{{route('adminhome')}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent text-xs  font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">Back</a>
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
</x-app-layout>