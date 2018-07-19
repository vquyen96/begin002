<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassModel;
class ClassController extends Controller
{
    public function getList(){
    	$data['items'] = ClassModel::paginate(8);
    	return view('class', $data);
    }
    public function getAdd(){
    	return view('class_form');
    }
    public function postAdd(Request $request){
    	$class = new ClassModel;
    	$class->name = $request->name;
    	$class->status = 1;
    	$class->save();
    	return redirect('class');
    }
    public function getEdit($id){
    	$data['item'] = ClassModel::find($id);
    	return view('class_form', $data);
    }
    public function postEdit(Request $request, $id){
    	$class = ClassModel::find($id);
    	$class->name = $request->name;
    	$class->status = 1;
    	$class->save();
    	return back();
    }
	public function getDelete($id){
    	ClassModel::destroy($id);
    	return back();
    }

}
