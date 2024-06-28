<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $students = Student::orderBy('id','DESC')->get();
        return view('students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('students.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|string',
            'date_of_birth' => 'required|date',
            'roll_number' => 'nullable|string|max:255',
            'blood_group' => 'required|string|max:3',
            'religion' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:students',
            'class' => 'required|string|max:255',
            'section' => 'required|string|max:255',
            'admission_id' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
            'username' => 'required|string|max:255|unique:students',
            'password' => 'required|string|min:8|confirmed',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $student = new Student($validatedData);
        $student->password = Hash::make($request->password);

        if ($request->hasfile('photo')) {



            $image = $request->file('photo');

            $ext = $image->getClientOriginalExtension();

            $image_name = date('y-m-d') . '-' . rand() . '.' . $ext;

            $image->move('uploads/student/', $image_name);

            $student->photo_path = $image_name;

        }

        $student->save();

        return redirect()->route('students.index')->with('message', 'Student added successfully.');
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
        $student = Student::findOrFail($id);
        return view('students.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Retrieve the existing student record
        $student = Student::findOrFail($id);
    
        // Validate the incoming request data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|string',
            'date_of_birth' => 'required|date',
            'roll_number' => 'nullable|string|max:255',
            'blood_group' => 'required|string|max:3',
            'religion' => 'required|string|max:255',
            'class' => 'required|string|max:255',
            'section' => 'required|string|max:255',
            'admission_id' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
            'password' => 'nullable|string|min:8|confirmed',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Manually assign each attribute from the request
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->gender = $request->gender;
        $student->date_of_birth = $request->date_of_birth;
        $student->roll_number = $request->roll_number;
        $student->blood_group = $request->blood_group;
        $student->religion = $request->religion;
        $student->email = $request->email;
        $student->class = $request->class;
        $student->section = $request->section;
        $student->admission_id = $request->admission_id;
        $student->phone = $request->phone;
        $student->username = $request->username;
    
        // Hash the password if it is provided
        if ($request->filled('password')) {
            $student->password = Hash::make($request->password);
        }
    
        // Handle the photo upload
        if ($request->hasFile('photo')) {
            // Delete the old photo if it exists
            if ($student->photo_path) {
                Storage::delete('uploads/student/' . $student->photo_path);
            }
    
            $image = $request->file('photo');
            $ext = $image->getClientOriginalExtension();
            $image_name = date('Y-m-d') . '-' . rand() . '.' . $ext;
            $image->move('uploads/student/', $image_name);
            $student->photo_path = $image_name;
        }
    
        // Save the updated student data
        $student->save();
    
        return redirect()->route('students.index')->with('message', 'Student updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the teacher by ID
        $student = Student::findOrFail($id);

        // Delete the teacher
        $student->delete();

        // Redirect back with success message
        return redirect()->back()->with('message', 'Student deleted successfully.');
    }
}
