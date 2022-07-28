<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostMessageController extends Controller
{
    public function __invoke(Request $request)
    {
        $message = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ], [
            'name.required' => __('I need your name')
            
        ]);

        // ENVIAR EMAIL

    Mail::to('descobic1998@gmail.com')->queue(new MessageReceived($message));
      



    return 'Datos validados';


    }
   
}