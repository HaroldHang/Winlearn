<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Language;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Page project for each language
     *
     * @param  string  $name
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $name) {
        //dd($request->all());
        $language = Language::where(['name' => $name])->first();

        if (!Auth::check()) {
            redirect('/logout');
        }
        $user = Auth::user();
        return view('pages.projects', [
            'language' => $language,
            'user' => $user
        ]);
    }
}
