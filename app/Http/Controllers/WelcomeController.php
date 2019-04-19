<?php

namespace App\Http\Controllers;

use App\Job;
use App\Book;
use App\Event;
use App\Category;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function subscribe()
    {
        return view('subscribe');
    }
}
