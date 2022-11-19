<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class StudentController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function index(){
        $data = student::paginate(10);
        return view('/studentlist',compact('data'));
    }
    public function addstudent(){
        return view('/add-student');
    }
    public function savestudent(Request $request){
        //dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required | email | unique:students,email',
            'age' => 'required',
            'contact' => 'required|unique:students,contact',
        ]);

        $name = $request->name;
        $email = $request->email;
        $age = $request->age;
        $contact = $request->contact;

        $student= new student();
        $student->name = $name;
        $student->email = $email;
        $student->age = $age;
        $student->contact = $contact;


        $student->save();
        return redirect('/studentlist')->with('success','Student Added Successfully');

    }

    public function editstudent($id){
        $data = student::where('id','=',$id)->first();
        return view('/edit-student',compact('data'));
    }

    public function updatestudent(Request $request){


        $id = $request->id;
        $name = $request->name;
        $email = $request->email;
        $age = $request->age;
        $contact = $request->contact;

        student::where('id','=',$id)->update([
            'name'=>$name,
            'email'=>$email,
            'age'=>$age,
            'contact'=>$contact,
        ]);
        return redirect('/studentlist')->with('success','Student Updated Successfully');
    }

    public function deletestudent($id){
        student::where('id','=',$id)->delete();

        return redirect()->back()->with('success','Student Deleted Successfully');
    }

    public function check_contact(Request $request){
        $data = student::where('contact','=',$request->contact)->get();
        $data_count = count($data);
        return $data_count;
    }
    public function check_email(Request $request){
        $data = student::where('email','=',$request->email)->get();
        $data_count = count($data);
        return $data_count;
    }
}
