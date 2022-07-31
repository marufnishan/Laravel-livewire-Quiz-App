<div>
        <x-slot name="header">
            <div class="md:flex justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('সকল প্রশ্ন') }}
                </h2>
            </div>
        </x-slot>
    
        <div class="max-w-7xl m-4 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="mx-auto">
                    <div class="flex justify-between items-center py-4">
                        <a href="{{route('listSection')}}" class="tracking-wide font-bold rounded border-2 border-blue-500 hover:border-blue-500 bg-blue-500 text-white hover:bg-blue-600 transition shadow-md py-2 px-6 items-center">Add A Question</a>
                        <a href="{{route('adminhome')}}" class="tracking-wide font-bold rounded border-2 border-blue-500 hover:border-blue-500 bg-blue-500 text-white hover:bg-blue-600 transition shadow-md py-2 px-6 items-center">Back</a>
                    </div>
                    @if($questions->isEmpty())
                    <div class="px-4 py-5 sm:px-6">
                        <h1 class="text-sm leading-6 font-medium text-gray-900">
                            No Question found!
                        </h1>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">
                            Looks like you have just landed! Once you have created any sections, they will be listed here.
                        </p>
                    </div>
                    @else
                    <!-- --------------------- START NEW TABLE --------------------->
                    <div class="flex flex-col">
                        <div class="-my-2 p-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="tracking-wide font-bold rounded border-2 bg-green-500 text-white  transition shadow-md py-2 px-6 items-center">
                                            <tr>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-white uppercase tracking-wider">
                                                    Question
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-white uppercase tracking-wider">
                                                    Explanation
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-white uppercase tracking-wider">
                                                    Published
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-white uppercase tracking-wider">
                                                    Lavel
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-white uppercase tracking-wider">
                                                    Created By
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-white uppercase tracking-wider">
                                                    Created At
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="capitalize bg-white divide-y divide-gray-200">
                                            @foreach($questions as $question)
                                            <tr class="hover:bg-green-100">
                                                <td class="px-6 ">
                                                    <div class="flex items-center">
                                                        <div class="ml-4">
                                                            <div class="text-sm font-medium text-gray-900">
                                                                    {{ $question->question}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 ">
                                                    <div class="flex items-center">
                                                        <div class="ml-4">
                                                            <div class="text-sm font-medium text-gray-900">
                                                                    {{ $question->explanation}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-1">
                                                    <div class="text-sm text-gray-900">{{ $question->is_active === '1'  ? 'Yes' : 'No' }}</div>
                                                </td>
                                                <td class="px-6 py-1">
                                                    <div class="text-sm text-gray-900">{{ $question->section->name }}</div>
                                                </td>
                                                <td class="px-6 py-1">
                                                    <div class="text-sm text-gray-900">{{ $question->user->name }}</div>
                                                </td>
                                                <td class="px-6 py-1">
                                                    <div class="text-sm text-gray-900">{{ $question->created_at }}</div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                {{ $questions->links() }}
                            </div>
                        </div>
                    </div>
                    @endif
                    <!-- ---------------- END NEW TABLE --------------------- -->
                </div>
            </div>
        </div>
</div>
