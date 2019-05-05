<?php

namespace App\Http\Controllers;

use App\Guide;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GuidePublicController extends Controller
{
    public function index()
    {
        $guides = Guide::where('publish_date', '<', Carbon::now())->get();
        return view('guides.index')->withGuides($guides);
    }

    public function show($slug)
    {
        $guide = Guide::where('slug', '=', $slug)->where('publish_date', '<', Carbon::now())->firstOrFail();
        return view('guides.show')->withGuide($guide);
    }
}
