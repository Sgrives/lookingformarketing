<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\Guide;
use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GuideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guides = Guide::get();
		return view('admin/guides/index')->withGuides($guides);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('admin/guides/create')->withCategories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$this->validate($request, array(
            'title' => 'required',
            'preface' => 'required',
            'category' => 'required',
            'publish_date' => 'required',
            'body' => 'required',
        ));

        $guide = new Guide;
        $guide->user_id = Auth::user()->id;
        $guide->title = $request->title;
        $guide->slug = $request->title;
        $delimiter = '-';
        $guide->slug = iconv('UTF-8', 'ASCII//TRANSLIT', $guide->slug);
        $guide->slug = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $guide->slug);
        $guide->slug = preg_replace("/[\/_|+ -]+/", $delimiter, $guide->slug);
        $guide->slug = strtolower(trim($guide->slug, $delimiter));
        $guide->preface = $request->preface;
        $guide->category_id = $request->category;
        $guide->publish_date = $request->publish_date;
        $guide->body = $request->body;
        $guide->save();

        Session::flash('status', 'Guide Created');
        return redirect('/admin/guides');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Guide  $guide
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $guide = Guide::where('slug', '=', $slug)->firstOrFail();
        return view('admin.guides.show')->withGuide($guide);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Guide  $guide
     * @return \Illuminate\Http\Response
     */
    public function edit($guide)
    {
        $guide = Guide::where('slug', '=', $guide)->firstOrFail();
        $categories = Category::get();
        return view('admin.guides.edit')->withGuide($guide)->withCategories($categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Guide  $guide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $guide = Guide::where('slug', '=', $slug)->firstOrFail();

        $this->validate($request, array(
            'title' => 'required',
            'preface' => 'required',
            'category' => 'required',
            'publish_date' => 'required',
            'body' => 'required',
        ));

        $guide->title = $request->title;
        $guide->preface = $request->preface;
        $guide->category_id = $request->category;
        $guide->publish_date = $request->publish_date;
        $guide->body = $request->body;
        $guide->save();

        Session::flash('status', 'Guide Updated');
        return redirect()->route('guides.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Guide  $guide
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $guide = Guide::where('slug', '=', $slug)->firstOrFail();
        $guide->delete();

        Session::flash('status', 'Guide Deleted');
        return redirect()->route('guides.index');
    }
}
