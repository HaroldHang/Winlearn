<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'statut' => true])) {
            return redirect()->intended('/dashboard');
        }
        session()->flash('error', 'Les informations de connexion sont incorrectes.');
        return redirect()->back();
    }

    public function register(Request $request)
    {
        #dd($request->photo);
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'role' => 'required',
            'phone' => 'required|unique:users',
            'adresse' => 'nullable',
            'photo' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        $validatedData = $validator->validated();
        $user = new User;
        $user->first_name = $validatedData['first_name'];
        $user->last_name = $validatedData['last_name'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->statut = true;
        $user->profile_photo = $this->treatPhoto($request);
        $user->save();
        return redirect()->route('userlist');
    }
}
