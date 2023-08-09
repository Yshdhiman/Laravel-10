<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    function showStudents()
    {
        $students = DB::table('students')->get(); // it returns JSON format
        // $students = DB::table('students')->where('id')->get(); // it returns JSON format
        // $students = DB::table('students')->find(4); //this returns array

        return view('allStudents', ['students' => $students]);
        // return $students;
        // dd($students); //it will show data and stop execution here
        // dump($students); //it will show data and keep execution
    }
    function singleStudent($id)
    {
        $student = DB::table('students')->find($id);
        return $student;
    }
}