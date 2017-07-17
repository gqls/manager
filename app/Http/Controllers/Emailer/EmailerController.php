<?php

namespace App\Http\Controllers\Emailer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmailerController extends Controller
{
    public function indexAction()
    {
        return view('emailer.index');
    }
}
