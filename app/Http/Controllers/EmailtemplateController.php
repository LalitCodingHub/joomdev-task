<?php

namespace App\Http\Controllers;

use App\Models\template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmailtemplateController extends Controller
{
    public function index(){
        return view('emailTemplate');
    }
    public function store(request $request){
        //dd(Auth::id());
        $validate = $request->validate([
            'template'=>'required'
        ]);
        $result = new template([
            'user_id' => Auth::id(),
            'template'=>$request->template
        ]);
        $result->save();
        return redirect()->back()->with('message','Template saved successfully');
    }
    public function showall(){
        $templates = template::all();
        return view('template-list',compact('templates'));
    }
}
