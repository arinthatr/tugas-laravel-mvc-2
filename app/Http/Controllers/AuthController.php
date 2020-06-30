<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form() {
        return view('form');
    }

    public function welcome(Request $request) {
        //dd($request->all());
        $fname = $request["fname"];
        $lname = $request["lname"];
        return view('welkom', ["fname" => $fname, "lname"=> $lname]);
    }

    public function welcome_get(Request $request) {
        //dd($request["gender"]);
        $fname = $request["fname"];
        $lname = $request["lname"];
        return view('welkom', ["fname" => $fname, "lname"=> $lname]);
    }

}
