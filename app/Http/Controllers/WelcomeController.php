<?php

namespace App\Http\Controllers;

use App\Job;
use App\Book;
use App\Event;
use App\Category;
use Wink\WinkPost;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $guides = WinkPost::with('tags')
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->limit(2)
            ->simplePaginate(12);
            
        $jobs = Job::with('category')->where('active', true)->orderBy('updated_at', 'DESC')->limit(6)->get();
        $events = Event::where('active', true)->orderBy('startdatetime', 'DESC')->limit(6)->get();
        $books = Book::where('approved', true)->orderBy('created_at', 'DESC')->limit(6)->get();

        return view('welcome')->withGuides($guides)->withJobs($jobs)->withEvents($events)->withBooks($books);
    }

    public function subscribe()
    {
        return view('subscribe');
    }
}
