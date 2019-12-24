<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserContact;

class UserContactController extends Controller
{
    
    public function store(Request $request)
    {
            $user= new UserContact();
            $user->name= $request->input('name');
            $user->email= $request->input('email');
            $user->description= $request->input('description');
            $user->save();
            // return $user;
    return redirect('contact');



    }
}
