<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{

    public function studentCreate()
    {
        return view('pages.student.studentCreate');
    }

    public function studentCreateSubmitted(Request $request)
    {
        // return view('pages.student.studentCreate');
        $validate = $request->validate([
            "name"=>'required | min:5 | max:7',
            "id"=>'required | integer',
            "dob"=>'required | string',
            "email"=>'required',
            "phone"=>'required'
        ],
        ['name.required'=>"this is some custom message...Don't it?"]
    );
      //  return $request;

      $student=new Student();
      $student->name=$request->name;
      $student->student_id=$request->id;
      $student->email=$request->email;
      $student->save();
 
    //  return $student;
      return redirect()->route('studentList');

    }
    
    // public function studentList()
    // {
    //     $student=array();

    //     for($i=0; $i<10; $i++)
    //     {
    //         $student=array(
    //             "name"=>"student ". ($i+1),
    //             "id"=>"00". ($i+1),
    //             "dob"=>"11-11-11"
    //         );
    //         $students[]=(object)$student;
        
    //     }
    //     return view('pages.student.list')->with("std",$students);
    // }

    public function studentList()
    {
       $students= Student::all();

       return view('pages.student.list')->with("std",$students);
    }

    public function studentEdit(Request $request)
    {
        $student = Student::where('id',$request->id)->first();
        
        return view('pages.student.studentEdit')->with('student',$student);
    }

    public function studentEditSubmitted(Request $request){

        $validate = $request->validate([
            "name"=>'required | min:2 | max:70',
            "student_id"=>'required',
            "email"=>'required'
        ],
        ['name.required'=>"Put name...Don't it?"]
    );
        $student = Student::where('id', $request->id)->first();

        $student->name = $request->name;
        $student->student_id = $request->student_id;
        $student->email = $request->email;
        $student->save();

        return redirect()->route('studentList');
    }
    
    public function studentDelete(Request $request){
        $student = Student::where('id', $request->id)->first();
        $student->delete();

        return redirect()->route('studentList');
    }

    
}