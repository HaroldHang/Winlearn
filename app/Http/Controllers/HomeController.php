<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Language;

class HomeController extends Controller
{
    // Routing to HomePage
    public function index(Request $request) {
        $languages = Language::paginate(6);
        //dd($languages);
        if (!Auth::check()) {
            redirect('/logout');
        }
        $user = Auth::user();
        return view('pages.home', [
            'languages' => $languages,
            'user' => $user
        ]);
    }
}
