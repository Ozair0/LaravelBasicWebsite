<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    // Submit Function
    public function submit(Request $request){
        $this->validate($request, [
           'name' => 'required',
            'email' => 'required',
        ]);

        // Create a new Message in Database

        $message = new Message();
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');

        // Save Message
        $message->save();

        // redirect to home
        return redirect('/')->with('success', 'Message Sent!');
    }

    // Getting messages from the database function
    public function getMessages(){
        $messages = Message::all();
        return view('messages')->with('messages', $messages);
    }
}
