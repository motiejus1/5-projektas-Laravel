<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;


//Description pildymo laukeliams pritaikyti Summernote.

//1.summernote biblioteka nuoroda/arba parsisiusdavom x
//2. header.php ????? layouts/app.blade.php x
//3. formoje description pakeisdavo input i textarea
//4. jquery plaeidimo koda

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();

        return view("student.index", ["students" => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("student.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student();

        $student->name = $request->student_name;
        $student->surname = $request->student_surname;
        $student->group_id = $request->student_groupid;

        //Suteikineju paveiksliukui varda

        //2 vienodus paveiksliukus. Sistema tai turi leisti
        // PHPxxx.tmp
        //paveiksliukopavadinimas.webp

        //$imageName = "test".rand(1,15);

        //motiejus.jpg  -> 128485165.jpg
        //motiejus.jpg ->128485175.jpg
        //arturas.png -> 124155541534.png
        //arturas.svg -> 223432153.svg
        //patikrinina ar laukelis tuscias ar netuscias
        //jeigu laukelis netuscias - true
        //jeigu laukelis tuscias - false
        if($request->has('student_imageurl'))
        {
            $imageName = time().'.'.$request->student_imageurl->extension();
            $student->image_url = '/images/'.$imageName;
            $request->student_imageurl->move(public_path('images'), $imageName);
        } else {
            $student->image_url = '/images/placeholder.png';
        }


        //1. mes turime paveiksliuka/info apie paveiksliuka irasyt i DB x
        //2. as ji kazkur turiu ikelti? x

        // $student->image_url = "tekstas";

        // $request->student_imageurl;

        $student->save();
        return redirect()->route("student.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('student.show',["student" => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view("student.edit", ["student" => $student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $student->name = $request->student_name;
        $student->surname = $request->student_surname;
        $student->group_id = $request->student_groupid;

        //jeigu paveikslio inputus uzpildytas -> tada ikelia nauja paveiksliuka ir priskiria nauja reiksme duomenu bazeje
        // jeigu paveiksliu inputas neuzpildytas -> tada priskiria placholder.png !!!!

        if($request->has('student_imageurl'))
        {
            $imageName = time().'.'.$request->student_imageurl->extension();
            $student->image_url = '/images/'.$imageName;
            $request->student_imageurl->move(public_path('images'), $imageName);
        }

        $student->save();
        return redirect()->route("student.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route("student.index");

    }
}
