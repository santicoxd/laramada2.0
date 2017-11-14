<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Type;

class TypeController extends Controller
{
	public function verInterfazAdministrativa()
	{
		if(!Auth::check())
	    	return redirect()->back();	    

		$types= Type::All();

		return view('datos',['types'=>$types]);

	}

	public function addType(Request $request)
	{
		$input=$request->input();
		$newType= Type::FirstOrCreate(['name'=>$input['name']]);		
		
		return redirect()->back();
		
	}

	public function deleteType(Request $request)
	{
		$input=$request->input();

		$type= Type::find($input['typeId']);

		$type->purge();
		
		return redirect()->back();

	}

	public function editType(Request $request)
	{
		$input=$request->input();
		
		$type= Type::find($input['typeId']);

		$type->name=$input['name'];

		$type->save();
		
		return redirect()->back();
		
	}
    //
}
