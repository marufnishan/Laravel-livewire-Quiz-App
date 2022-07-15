<div>
    <div class="max-w-7xl m-4 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="mx-auto my-5 px-3">
                <h2 class="text-2xl font-bold card bg-green-600 p-4 text-black-100 rounded-t-lg mx-auto">New Championship</h2>
                <div class="mt-2 max-w-auto mx-auto card p-4 bg-white rounded-b-lg shadow-md">
                    <div class="grid grid-cols-1 gap-6 my-5">
                        <table class="table table-striped table-hover table-bordered">
			
                            <tbody><tr>
                                <td><b>Exam Title</b></td>
                                <td>{{$exams->exam_title}}</td>
                            </tr>				
                            <tr>
                                <td><b>Exam Duration</b></td>
                                <td>{{$exams->duration}} Minute</td>
                            </tr>
                            <tr>
                                <td><b>Exam Total Question</b></td>
                                <td>{{$exams->total_question}} </td>
                            </tr>
                            <tr>
                                <td><b>Marks Per Right Answer</b></td>
                                <td>{{$exams->marks_per_right_answer}}</td>
                            </tr>
                            <tr>
                                <td><b>Exam Code</b></td>
                                <td>{{$exams->exam_code}}</td>
                            </tr>
                                <tr>
                                    <td colspan="2" align="center">
                                        @if($isDisabled)
                                        <button type="button" disabled='disabled' class="btn btn-danger my-3">You Are Enrolled</button>
                                        @else
                                        <button type="button" name="enroll_button my-3" id="enrollExam" class="btn btn-warning" wire:click="enroll({{ $exams->id }})">Enroll to this exam</button>
                                        @endif
                                    </td>
                                </tr></tbody></table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
