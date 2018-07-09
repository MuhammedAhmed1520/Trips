<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    function index(){
        return view('admin.index');
    }

    function testCreate(){
        return view('admin.test.create');

    }
    function testIndex(){
        return view('admin.test.index');

    }

}
