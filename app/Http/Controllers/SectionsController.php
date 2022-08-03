<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionsController extends Controller
{
    public function createSection()
    {
        $exams = Exam::where('status','Active')->get();
        return view('admins.create_section',['exams'=>$exams]);
    }

    public function listSection()
    {
        $sections = Section::withCount('questions')->paginate(10);
        //$sections = Section::where('is_active', '1')->paginate(5);
        return view('admins.list_sections', compact('sections'));
    }

    public function storeSection(Request $request)
    {
        $data = $request->validate([
            'section.*' => 'required',
        ]);
        auth()->user()->sections()->createMany($data);
        return redirect()->route('listSection')->with('success', 'Lavel created successfully!');
    }

    public function editSection(Section $section)
    {
        $exams = Exam::where('status','Active')->get();
        return view('admins.edit_section', compact('section','exams'));
    }

    public function updateSection(Section $section, Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:5|max:255',
            'description' => 'required|min:5|max:255',
            'is_active' => 'required',
            'question_size' => 'required',
            'duration' => 'required',
            'details' =>    'required|min:10|max:1024',
            'exam_id' => 'required',
        ]);
        $record = Section::findOrFail($section->id);
        $input = $request->all();
        $record->fill($input)->save();
        session()->flash('success', 'Lavel saved successfully!');
        return redirect()->route('listSection');
    }

    public function detailSection(Section $section)
    {
        $questions = $section->questions()->paginate(10);
        return view('admins.detail_sections', compact('questions', 'section'));
    }

    public function deleteSection($id)
    {
        //$sections = Section::paginate(10);
        $section = Section::findOrFail($id);
        $section->delete();
        return redirect()->back()->withSuccess('Lavel with id: ' . $section->id . ' deleted successfully');
    }
}
