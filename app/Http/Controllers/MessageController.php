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

        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->save();

        session()->flash('alert', ['text' => 'Message sent successfully!', 'type' => 'green']);

        return redirect()->back();
    }

    public function destroy(Request $request, Message $message)
    {
        if(!session('admin'))
            abort(403);

        $message->delete();

        session()->flash('alert', ['text' => 'Message deleted successfully!', 'type' => 'alert-success']);

        return redirect()->back();
    }
}
