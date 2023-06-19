<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use Illuminate\Support\Facades\Auth;

class LanguageController extends Controller
{
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $name
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $name) {
        //dd($request->all());
        $language = Language::where(['name' => $name])->first();
        //dd($language);
        if (!Auth::check()) {
            redirect('/logout');
        }
        $user = Auth::user();
        return view('pages.language', [
            'language' => $language,
            'user' => $user
        ]);
    }
}
