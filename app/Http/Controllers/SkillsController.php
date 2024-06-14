<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{

    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function laravel() {

        return view('pages.laravel', []);
    }

    public function symfony() {
        return view('pages.symfony', []);
    }

    public function node() {
        return view('pages.node', []);
    }
}
