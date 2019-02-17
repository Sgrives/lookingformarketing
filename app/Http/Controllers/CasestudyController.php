<?php

namespace App\Http\Controllers;

use App\Casestudy;
use Illuminate\Http\Request;

class CasestudyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('casestudies');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Casestudy  $casestudy
     * @return \Illuminate\Http\Response
     */
    public function show(Casestudy $casestudy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Casestudy  $casestudy
     * @return \Illuminate\Http\Response
     */
    public function edit(Casestudy $casestudy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Casestudy  $casestudy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Casestudy $casestudy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Casestudy  $casestudy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Casestudy $casestudy)
    {
        //
    }
}
