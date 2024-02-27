<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index(){
        // dd('dd');
        return view('permission.index');
    }
    public function create(){
        return view('permission.create');
    }
    public function show(){

    }
    public function edite(){

    }
    public function distory(){

    }
}
