<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Organization;
use App\Models\User;
use App\Models\HelpingCenter;

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
        $users = User::where('type', '<>' , 0)->count();
        $organizations = Organization::count();
        $products = Product::count();
        $helping_centers = HelpingCenter::count();
        return view('admin.index', compact(['users','organizations','products','helping_centers']));
    }

    
}
