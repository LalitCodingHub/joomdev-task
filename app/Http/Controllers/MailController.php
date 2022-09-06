<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendMailRequest;
use App\Mail\Templatemail;
use App\Models\template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index(){
        $templates = template::all();
        return response()->json(array(
            'status' => 'success',
            'pages' => $templates->toArray()),
            200
        );
    }
    public function sendmail(SendMailRequest $request){
        
        $email = $request->email;
        $template_id = $request->template_id;
        \Mail::to($email)->send(new Templatemail($template_id));

        
        return response()->json(array(
            'status' => 'success',
            'message' => 'Your mail has sent'
        ),
            200
        );


      
    }
}
