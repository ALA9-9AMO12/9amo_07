<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\User;


class UserController extends Controller

{

    public function create()

    {

        return view('create');

    }


    public function store(Request $request)

    {

        $input = $request->all();


        $request->validate([

            'name' => 'required',

            'email' => 'required|email',

            'mobile_no' => 'required|min:10|numeric',

            'password' => 'required|min:6'

        ]);


        User::create($input);


        return back()

            ->with('success','User Created Successfully');

    }

}


