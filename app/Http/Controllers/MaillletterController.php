<?php

namespace App\Http\Controllers;

use App\Mail\mailnewletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MaillletterController extends Controller
{
    public function store(Request $request){

        request()->validate([
            'email'=>['required'],
        ]);

        $mailData = [
            'body' => 'You are subscribed to our newsletter'
        ];
        
        Mail::to($request->email)->send(new mailnewletter($mailData));
        return redirect()->back();
    }
}
