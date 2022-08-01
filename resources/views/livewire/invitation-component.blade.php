<div>
    <div class="max-w-7xl m-4 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="mx-auto my-5 px-3">
                <h2 class="text-2xl font-bold card bg-green-600 p-4 text-black-100 rounded-t-lg mx-auto">Exam Invitation</h2>
                <div class="mt-2 max-w-auto mx-auto card p-4 bg-white rounded-b-lg shadow-md">
                    <div class="grid grid-cols-1 gap-6 my-5">
                        <div>
                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif
                        </div>
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
                                <td colspan="2" align="center" class="bg-dark text-light p-2 my-5 rounded" style="margin-left:0px !important">
                                    <label class="form-label">Enter Your Friend Email ID :</label>
                                    <input class="form-control" name="invitation_mail" type="mail" placeholder="entre mail..." wire:model="invitation_mail" required autofocus autocomplete="invitation_mail">
                                    @error('invitation_mail') <span class="text-danger">{{ $message }}</span> @enderror
                                </td>
                                
                            </tr>
                                <tr>
                                    <td colspan="2" align="center">
                                        <button type="button" name="enroll_button my-3" id="enrollExam" class="btn btn-info" wire:click="invite">Invite Now</button>
                                    </td>
                                </tr></tbody></table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
