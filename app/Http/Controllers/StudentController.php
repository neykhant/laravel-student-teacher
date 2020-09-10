<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = student::all();
        // dd($students);
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
     return view('students.create');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request)
    {
        // validation
        // $validatedData = $request->validate([
        //     'student_name'=>'required',
        //     'student_age'=>'required',
        //     'student_class'=>'required',
        //     'class_teacher'=>'required',
        // ]);

        // $validated = $request->validated();
        Student::create([
            'student_name'=>$request->studentname,
            'student_age'=>$request->studentage,
            'student_class'=>$request->studentclass,
            'class_teacher'=>$request->classteacher,

        ]);

        //new student email
        $data = array(
            'name' => $request->studentname,
            );
            
            Mail::send('emails.welcome', $data, function ($message) {
            $message->from('kokhant228abc@gmail.com', 'Khant Maw Hein');
            $message->to('khantmaw48@gmail.com')->subject('There is a new Student here!');
            });
            // return "Your email has been sent successfully";

        return redirect('/index')->with('sms', 'Student has been Add!...');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $students=Student::where('student_id', $id);
        // $students = Student::all();
        // dd($students);
        // $student = DB::table('students')->where('student_id', $id)->first();
        // $student=Student::WhereSlug($id)->firstOrFail();
        $student=student::whereId($id)->firstOrFail();
        // dd($students);
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student=student::whereId($id)->firstOrFail();
        // dd($student);
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $student=student::whereId($id)->firstOrFail();
        // $student->student_name =$request->studentname;
        // $student->student_class =$request->studentclass;
        // $student->student_age =$request->studentage;
        // $student->class_teacher =$request->classteacher;
        // $student->save();

        student::where('id', $id)
            ->update([
                'student_name' =>$request->studentname,
                'student_class' =>$request->studentclass,
                'student_age' =>$request->studentage,
                'class_teacher' =>$request->classteacher,
                
            ]);

        return redirect('/index' )->with('sms', "Student '{$id}' has been updated!.. ");
        // return redirect('/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student=student::whereId($id)->firstOrFail();

        $student->delete();

        return redirect('/index')->with('sms', "Student '{$id}' has been deleted!.. ");
        // return redirect('/');
    }
}
