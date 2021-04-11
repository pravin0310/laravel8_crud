<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Student::paginate(5);
        return view('Student.index',['data'=>$data])->with('no', 1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $student=new Student();
       $student->studentname=$request->studentname;
       $student->course=$request->course;
       $student->fee=$request->fees;
       $student->save();
       return redirect('student')->with('student_created','student has beend created succesfuully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $id)
    {
         $editdet=Student::find($id);
        return view('student.edit',['data'=>$editdet]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
       $data=Student::find($request->id);
       $data->studentname=$request->studentname;
       $data->course=$request->course;
       $data->fee=$request->fees;
       $data->save();
       return redirect('student')->with('student_updated','student has been Updated succesfuully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $data=Student::find($request->id);
        $data->delete();
        return redirect('student')->with('student_deleted','student has been Deleted succesfuully');
    }
}
