<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers=Teacher::all();
        // dd($teachers);
        return view('teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Teacher::create([
            'teacher_name' =>$request->teachername,
            'classteacher_of' =>$request->classteacher_of,
            'salary' =>$request->salary,
        ]);
        return redirect('/teachers/index')->with('sms' , 'Teacher has been added!..');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $teacher_id
     * @return \Illuminate\Http\Response
     */
    public function show($teacher_id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $teacherid
     * @return \Illuminate\Http\Response
     */
    public function edit($teacher_id)
    {
        // $teacher=Teacher::whereId($teacher_id)->firstOrFail(); 
        $teacher=Teacher::find($teacher_id)->firstOrFail();
        // dd($teacher);  
        return view('teachers.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $teacher_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $teacher_id)
    {
        $teacher=Teacher::find($teacher_id)->firstOrFail();
        $teacher->teacher_name=$request->teacher_name;
        $teacher->classteacher_of=$request->classteacher_of;
        $teacher->salary=$request->salary;
        $teacher->save();

        return redirect('/teachers/index')->with('sms', 'Teacher has been updated!...');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $teacher_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($teacher_id)
    {
        $teacher=Teacher::find($teacher_id)->firstOrFail();
        $teacher->delete();
        return redirect('/teachers/index')->with('sms', "Teacher '{$teacher_id}' has been deleted!.. ");
    }
}
