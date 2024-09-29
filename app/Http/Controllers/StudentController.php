<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(Request $request){
        $query = $request->input('search'); 
        
        $students = Student::latest();
    
        if ($query) {
            $students->where('name', 'like', '%' . $query . '%')
                     ->orWhere('email', 'like', '%' . $query . '%');
        }
    
        $students = $students->paginate(5);
    
        return view('students.index', compact('students', 'query'));
    }
    

    public function create(){
        return view('students.create');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'roll_no'=>'required',
            'perstange'=>'required'
        ]);
        $student = new Student;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->roll_no = $request->roll_no;
        $student->perstange = $request->perstange;
        $student->save();
        return redirect()->route('students.index')->with('message','Student Added Successfully');
    }
    public function edit($id){
        $student = Student::where('id',$id)->first();
        return view('students.edit',['student'=>$student]);
    }

    public function update(Request $request,$id){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'roll_no'=>'required',
            'perstange'=>'required'
        ]);
        $student = Student::where('id',$id)->first();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->roll_no = $request->roll_no;
        $student->perstange = $request->perstange;
        $student->save();
        return redirect()->route('students.index')->with('message','Student Updated Successfully');
    }

    public function show($id){
        $student = Student::where('id',$id)->first();
        return view('students.show',['student'=>$student]);
    }

    public function destory($id){
        $student = Student::findOrFail($id);
        $student->delete();
    }
}
