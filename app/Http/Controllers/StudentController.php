<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use App\Student;

class StudentController extends Controller
{

    public function store(Request $request)
    {
        $students = new Student;

        $students->first_name = $request->first_name;
        $students->last_name = $request->last_name;
        $students->slug = Str::slug($request->first_name);
        $students->email = $request->email;
        $students->password = $request->password;

        $students->save();
        return response()->json("Student Data Insertion Done Successfully",201);
       
    }


    public function show()
    {
        $students = Student::all();
        return response()->json($students);
    }


    public function showId($id)
    {
        $students = Student::find($id);
        return response()->json($students);
    }


    public function updateId(Request $request, $id)
    {
        $students = Student::find($id);
        $students->first_name = $request->first_name;
        $students->last_name = $request->last_name;
        $students->email = $request->email;
        $students->password = $request->password;

        $students->save();
        return response()->json("Student Data Updated Successfully",200);
    }

    
    public function deleteId(Request $request, $id)
    {
        $students = Student::find($id);
        $students->delete();
        return response()->json("Student Data Deleted Successfully",204);
    }
}
