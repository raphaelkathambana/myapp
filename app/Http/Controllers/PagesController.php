<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {
    public function index() {
        $title = "Welcome to My Nuts!";
        return view ('pages.index')->with('title', $title);
    }
    public function about() {
        $title = "About";
        return view ('pages.about')->with('title', $title);
    }
    public function services() {
        $data = [
            'title'  => 'Services!',
            'services' => ['CAT 1', 'CAT 2', 'RAT', 'Poverty']
        ];
        return view ('pages.services')->with($data);
    }
}
