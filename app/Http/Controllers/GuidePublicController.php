<?php

namespace App\Http\Controllers;

use App\Guide;
use Illuminate\Http\Request;

class GuidePublicController extends Controller
{
    public function index()
    {
      $guides = Guide::get();
		  return view('guides.index')->withGuides($guides);
    }

    public function show($slug)
    {
        //$guide = WinkPost::where('slug', '=', $slug)->firstOrFail();
        $guide = Guide::where('slug', '=', $slug)->firstOrFail();
        return view('guides.show')->withGuide($guide);
    }
}
