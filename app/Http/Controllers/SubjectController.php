<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $subjects = Subject::orderBy('id','DESC')->get();
        return view('subjects.index',compact('subjects'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('subjects.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'subject_id' => 'required|string|max:255',
            'subject_name' => 'required|string|max:255',
            'class' => 'required|string|max:255',
        ]);

        $subject = new Subject();
        $subject->subjectID = $validatedData['subject_id'];
        $subject->subject_name = $validatedData['subject_name'];
        $subject->class_name = $validatedData['class'];
        $subject->save();

        return redirect()->route('subjects.index')->with('message', 'Subject created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $subject = Subject::findOrFail($id);
        return view('subjects.edit',compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'subject_id' => 'required|string|max:255',
            'subject_name' => 'required|string|max:255',
            'class' => 'required|string|max:255',
        ]);

        $subject = Subject::findOrFail($id);
        $subject->subjectID = $validatedData['subject_id'];
        $subject->subject_name = $validatedData['subject_name'];
        $subject->class_name = $validatedData['class'];
        $subject->save();

        return redirect()->route('subjects.index')->with('message', 'Subject updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $subject = Subject::findOrFail($id);
        $subject->delete();
    
        return redirect()->route('subjects.index')->with('message', 'Subject deleted successfully.');
    }


    public function fetchSubjects(Request $request)
    {
        $class = $request->input('class');
        
        // Query subjects based on the selected class
        $subjects = Subject::where('class_name', $class)->get(['subject_name']);

        return response()->json($subjects);
    }

}
