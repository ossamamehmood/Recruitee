<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Validated;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function seeker()
    {
        return view('register.seeker');
    }

    public function recruiter()
    {
        return view('register.recruiter');
    }

    public function storeRecruiter(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users|email:dns|max:255',
            'password' => 'required|min:5'
        ]);

        // Register as company or recruiter
        $validatedData['is_recruiter'] = true;
        $validatedData['password'] = bcrypt($validatedData['password']);

        user::create($validatedData);

        return redirect('/login')->with('success', 'Account has been created.');
    }

    public function storeSeeker(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users|max:255',
            'password' => 'required|min:5'
        ]);

        // Register as job seeker
        $validatedData['password'] = bcrypt($validatedData['password']);



        user::create($validatedData);

        return redirect('/login')->with('success', 'Account has been created.');
    }
}
