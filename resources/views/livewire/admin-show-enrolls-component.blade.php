<div>
    <x-slot name="header">
        <div class="md:flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('All Enrolls') }}
            </h2>
        </div>
    </x-slot>

    <section>
        <div class="max-w-7xl m-4 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="mx-auto">
                    <div class="flex justify-between items-center py-4">
                        <a href="{{route('adminhome')}}" class="tracking-wide font-bold rounded border-2 border-blue-500 hover:border-blue-500 bg-blue-500 text-white hover:bg-blue-600 transition shadow-md py-2 px-6 items-center">Dashboard</a>
                        <a href="#" class="tracking-wide font-bold rounded border-2 border-blue-500 hover:border-blue-500 bg-blue-500 text-white hover:bg-blue-600 transition shadow-md py-2 px-6 items-center">Total Enrolls : {{$totalenrolls}} </a>
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
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-white uppercase tracking-wider">
                                                    Expeires At
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
                                                <td class="px-6 py-1">
                                                    <div class="text-sm text-gray-900">{{$enroll->expeire_at}}</div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                {{ $enrolls->links() }}
                            </div>
                        </div>
                    </div>
                    @endif
                    <!-- ---------------- END NEW TABLE --------------------- -->
                </div>
            </div>
        </div>
    </section>
</div>
