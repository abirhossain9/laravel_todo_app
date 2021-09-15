<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display the dashboard page
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        //return the dashboard page
        return view('backend.dashboard');
    }
}
