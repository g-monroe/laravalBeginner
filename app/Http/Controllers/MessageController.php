<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function create(Request $request){
        $message = Message::get;
        $message->title = $request->title;
        $message->content = $request->input('content');
        $message->save();
        return redirect('/');
    }
    public function message($id){
        $message = Message::findOrFail($id);
        return view('message', [
            'message' => $message,
            'id' => $id
        ]);
    }
    public function edit(Request $request){
        $message = Message::findOrFail($request->id);
        $message->title = $request->title;
        $message->content = $request->input('content');
        $message->save();
        return redirect('/message/'.$request->id);
    }
    public function delete(Request $request){
        $message = Message::findOrFail($request->id);
        $message->delete();
        return redirect('/');
    }
}
