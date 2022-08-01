<?php

namespace App\Http\Livewire;

use App\Models\Exam;
use Livewire\Component;
use Livewire\WithPagination;

class ExamListComponent extends Component
{
    use WithPagination;

    public function delete($id){
        $exam = Exam::findOrFail($id);
        if($exam->exam_thumbnail)
        {
            unlink('assets/img/examthumbnail'.'/'.$exam->exam_thumbnail);
        }
        $exam->delete();
        return redirect()->back()->withSuccess('Exam with id: ' . $exam->id . ' deleted successfully');
    }
    public function render()
    {
        $exams = Exam::paginate(10);
        return view('livewire.exam-list-component',['exams'=>$exams]);
    }
}
