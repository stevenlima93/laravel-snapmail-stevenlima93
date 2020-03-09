<?php

namespace App\Http\Controllers;

use App\Mailtrap;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store(Request $request,Message $message){
        $request->validate([
            "email"=>"required|email","message"=>"required","image"=>"required"
        ]);
        $message->message=$request->get("message");
        $message->code=sha1(\Illuminate\Support\Str::random(10));
        $message->photo_url=$request->file("image")->hashName();
        $message->save();
        $request->file("image")->store("public");
        Mail::to($request->get("email"))->send(new Mailtrap($message->code));
        $request->session()->flash("success", "Message envoyé");
        return redirect("/");
    }

    /**
     * @param Request $request
     * @param Message $message
     * @param $token
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Request $request, Message $message, $token){
        $msg=$message::where("code", $token)->get()->first();
        if ($msg==null){
            return redirect("/");
        }
        else{
            $message::where("code", $token)->delete();
        }
        return view("message", array("message"=>$msg));
    }
}
