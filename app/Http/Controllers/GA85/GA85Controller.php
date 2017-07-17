<?php

namespace App\Http\Controllers\GA85;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class GA85Controller extends Controller
{
    //
    public function indexAction()
    {
        return view('ga85.index');
    }
}
