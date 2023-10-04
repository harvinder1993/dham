<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Instantiate a new controller instance.
     */
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Index Function
     */
    public function index(){
        return view('admin.index');
    }
}
