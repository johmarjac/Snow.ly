<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    //API
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $article = new Message();
        $article->name = $request->name;
        $article->email = $request->email;
        $article->subject = $request->subject;
        $article->message = $request->message;
        $article->save();

        session()->flash('alert', ['text' => 'Message sent successfully!', 'type' => 'green']);

        return redirect()->back();
    }
}
