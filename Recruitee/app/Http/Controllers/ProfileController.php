<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('profile', [
            'user' => User::find(auth()->user()->id)
        ]);
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'image' => 'image|file|max:5000',
            'file' => 'file|max:5000',
            'desc' => 'required'
        ]);


        $user = auth()->user();

        if ($request->file('image')) {
            if ($user->img !== 'noimage.jpg') {
                Storage::delete($user->image);
            }
            $validatedData['image'] = $request->file('image')->store('profile-images');
        }

        if ($request->file('file')) {
            if ($user->file) {
                Storage::delete($user->file);
            }
            $validatedData['file'] = $request->file('file')->store('files');
        }


        User::where('id', $user->id)
            ->update($validatedData);

        return redirect('/profile')->with('success', 'Data has been updated');
    }
}
