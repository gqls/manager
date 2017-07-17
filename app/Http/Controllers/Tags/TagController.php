<?php

namespace App\Http\Controllers\Tags;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    public function indexAction()
    {
        return view('tag.index');
    }

    public function add()
    {
        return view('tag.added');
    }
}
