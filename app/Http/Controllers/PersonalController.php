<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalController extends Controller
{

public  function welcome() {
    return view('welcome');
}

public  function about() {
    return view('components.about');
}

public  function skills() {
    return view('components.skills');
}

public  function projects() {
    return view('components.projects');
}

}
