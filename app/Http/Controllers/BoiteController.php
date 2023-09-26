<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PharIo\Manifest\Email;

class BoiteController extends Controller
{
    public function storemessage(Request $request, Email $boitemail)
    {

        request()->validate([
            "name" => ["required"],
            "message" => ["required"],
            "email" => ["required"],
            "sujet" => ["required"],
        ]);



        $data = [
            "name" => $request->name,
            "message" => $request->message,
            "email" => $request->email,
            "sujet" => $request->sujet,
            "show" => 0,
        ];


        $boitemail->create($data);
        return redirect()->back()->with("success" , "le email a été envoiyer avec succès");
    }
}
