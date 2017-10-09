<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataEntryController extends Controller
{
    public function index(){
        return view("dataentry");
    }

    public function submit(Request $request){
        $fname = $request->input('first_name');
        $lname = $request->input('last_name');
        $age = date('Y') - $request->input('birthyear');
        return view('result', ['fullname' => $fname . ' ' . $lname, 'age'=>$age]);
    }
}
