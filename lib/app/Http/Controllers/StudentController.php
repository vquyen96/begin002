<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\ClassModel;
class StudentController extends Controller
{
    public function getList($id_class){
    	$data['items'] = ClassModel::find($id_class);
    	return view('student', $data);
    }
    public function getAdd($id_class){
    	$data['items'] = ClassModel::find($id_class);
    	return view('student_form', $data);
    }
    public function postAdd(Request $request, $id_class ){
    	$student = new Student;
    	$student->name = $request->name;
    	$student->rollNumber = $request->rollNumber;
    	$student->class_id = $id_class;
    	$student->status = 1;
    	$student->save();
    	return redirect('class/detail/'.$id_class);
    }
    public function getEdit($id_class, $id_stu){
    	$data['item'] = Student::find($id_stu);
    	$data['items'] = ClassModel::find($id_class);
    	return view('student_form', $data);
    }
    public function postEdit(Request $request, $id_class, $id_stu){
    	$student = Student::find($id_stu);
    	$student->name = $request->name;
    	$student->rollNumber = $request->rollNumber;
    	$student->status = 1;
    	$student->save();
    	return back();
    }
	public function getDelete($id_class, $id_stu){
    	Student::destroy($id_stu);
    	return back();
    }
}
