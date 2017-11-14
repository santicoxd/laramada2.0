<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PageInfo;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('home' ,['HomeInfo'=>PageInfo::where('page_name', 'home')->first()]);
    }

    public function changePageContent(Request $request){
        $input=$request->input();
        $pageInfo= PageInfo::where('page_name', 'home')->first();
        $pageInfo->page_title=$input['title'];
        $pageInfo->page_subtitle=$input['subtitle'];
        $pageInfo->save();
        return redirect()->back();
    }

    public function loadAdminPage(){
        return view('adminViews/homeAdmin' ,['HomeInfo'=>PageInfo::where('page_name', 'home')->first()]);
    }
}
