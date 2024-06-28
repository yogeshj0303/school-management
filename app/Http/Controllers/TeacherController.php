<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $teachers = Teacher::orderBy('id','DESC')->get();
        return view('teachers.index',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('teachers.add');
    }

    /**
     * Store a newly created resource in storage.
     */
   
     public function store(Request $request)
     {
         $request->validate([
             'teacher_id' => 'required|unique:teachers,teacher_id',
             'name' => 'required|string|max:255',
             'gender' => 'required|string',
             'date_of_birth' => 'required|date',
             'mobile' => 'required|string|max:15',
             'joining_date' => 'required|date',
             'qualification' => 'required|string|max:255',
             'experience' => 'required|string|max:255',
             'class' => 'required|string|max:255',
             'subject' => 'required|string|max:255',
             'username' => 'required|string|max:255|unique:teachers,username',
             'email' => 'required|string|email|max:255|unique:teachers,email',
             'password' => 'required|string|min:8|confirmed',
             'address' => 'required|string|max:255',
             'city' => 'required|string|max:255',
             'state' => 'required|string|max:255',
             'zip' => 'required|string|max:10',
             'country' => 'required|string|max:255',
         ]);
 
         $teacher = new Teacher();
         $teacher->teacher_id = $request->teacher_id;
         $teacher->name = $request->name;
         $teacher->gender = $request->gender;
         $teacher->date_of_birth = $request->date_of_birth;
         $teacher->mobile = $request->mobile;
         $teacher->joining_date = $request->joining_date;
         $teacher->qualification = $request->qualification;
         $teacher->experience = $request->experience;
         $teacher->class = $request->class;
         $teacher->subject = $request->subject;
         $teacher->username = $request->username;
         $teacher->email = $request->email;
         $teacher->password = Hash::make($request->password);
         $teacher->address = $request->address;
         $teacher->city = $request->city;
         $teacher->state = $request->state;
         $teacher->zip = $request->zip;
         $teacher->country = $request->country;
         if ($request->hasfile('image')) {



            $image = $request->file('image');

            $ext = $image->getClientOriginalExtension();

            $image_name = date('y-m-d') . '-' . rand() . '.' . $ext;

            $image->move('uploads/student/', $image_name);

            $teacher->image = $image_name;

        }
         $teacher->save();
 
         return redirect()->route('teachers.index')->with('message', 'Teacher added successfully');
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
        $teacher = Teacher::findOrFail($id);
        return view('teachers.edit',compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
            // Validate input
            // $request->validate([
           
            //     'name' => 'required|string|max:255',
            //     'gender' => 'required|string',
            //     'date_of_birth' => 'required|date',
            //     'mobile' => 'required|string|max:15',
            //     'joining_date' => 'required|date',
            //     'qualification' => 'required|string|max:255',
            //     'experience' => 'required|string|max:255',
            //     'subject' => 'required|string|max:255',
            //     'class' => 'required|string|max:255',
            //     'address' => 'required|string|max:255',
            //     'city' => 'required|string|max:255',
            //     'state' => 'required|string|max:255',
            //     'zip' => 'required|string|max:10',
            //     'country' => 'required|string|max:255',
            // ]);
    
        
            // Find the teacher by ID
            $teacher = Teacher::findOrFail($id);
            $teacher->teacher_id = $request->teacher_id;
            $teacher->name = $request->name;
            $teacher->gender = $request->gender;
            $teacher->date_of_birth = $request->date_of_birth;
            $teacher->mobile = $request->mobile;
            $teacher->joining_date = $request->joining_date;
            $teacher->qualification = $request->qualification;
            $teacher->experience = $request->experience;
            $teacher->subject = $request->subject;
            $teacher->class = $request->class;
            $teacher->username = $request->username;
            $teacher->email = $request->email;
            $teacher->password = Hash::make($request->password);
            $teacher->address = $request->address;
            $teacher->city = $request->city;
            $teacher->state = $request->state;
            $teacher->zip = $request->zip;
            $teacher->country = $request->country;
            if ($request->hasfile('image')) {
   
   
   
               $image = $request->file('image');
   
               $ext = $image->getClientOriginalExtension();
   
               $image_name = date('y-m-d') . '-' . rand() . '.' . $ext;
   
               $image->move('uploads/student/', $image_name);
   
               $teacher->image = $image_name;
   
           }
            // Save the updated data
            $teacher->save();
        
            // Redirect back with success message
            return redirect()->route('teachers.index')->with('message', 'Teacher updated successfully.');
        }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the teacher by ID
        $teacher = Teacher::findOrFail($id);

        // Delete the teacher
        $teacher->delete();

        // Redirect back with success message
        return redirect()->back()->with('message', 'Teacher deleted successfully.');
    }
}
