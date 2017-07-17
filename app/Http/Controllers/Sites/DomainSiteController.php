<?php

namespace App\Http\Controllers\Sites;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DomainSiteController extends Controller
{

    public function indexAction()
    {
        return view('site.index');
    }

    public function singleAction()
    {
        return view('site.single');
    }
}
