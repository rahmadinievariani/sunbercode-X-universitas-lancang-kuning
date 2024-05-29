<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function form(){
        return view(('page.register'));
    }

    public function hasil(Request $request) {
        $name = $request['name'];
        $Name = $request['Name'];
        $Bio = $request['Bio'];

        return view('page.home',['name' => $name, 'Name'=> $Name, 'Bio' => $Bio]);
    }
}
