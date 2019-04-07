<?php

namespace App\Http\Controllers;

use Session;
use App\Event;
use App\Location;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::where('active', true)->get();
        $eventgroups = $events->groupBy('location');
        $locations = Location::get();
        return view('events/index')->withEventgroups($eventgroups)->withLocations($locations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
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
            'name'			=> 'required|max:255',
            'url'			=> 'required|max:255',
            'startdatetime'	=> 'required',
            'enddatetime'	=> 'required',
            'cost'			=> 'required|max:255',
            'location'		=> 'required|max:255',
            'description'	=> 'required|min:100',
        ));

        $location = new Location;
        $location->name = $request->location;
        $location->slug = $request->location;
        $delimiter = '-';
        $location->slug = iconv('UTF-8', 'ASCII//TRANSLIT', $location->slug);
        $location->slug = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $location->slug);
        $location->slug = preg_replace("/[\/_|+ -]+/", $delimiter, $location->slug);
        $location->slug = strtolower(trim($location->slug, $delimiter));
        $location->save();

        $event = new Event;
        $event->name = $request->name;
        $event->slug = $request->name;
        $delimiter = '-';
        $event->slug = iconv('UTF-8', 'ASCII//TRANSLIT', $event->slug);
        $event->slug = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $event->slug);
        $event->slug = preg_replace("/[\/_|+ -]+/", $delimiter, $event->slug);
        $event->slug = strtolower(trim($event->slug, $delimiter));
        $event->url = $request->url;
        $event->startdatetime = date('Y-m-d H:i:s',strtotime('+00 seconds',strtotime($request->startdatetime)));
		$event->enddatetime = date('Y-m-d H:i:s',strtotime('+00 seconds',strtotime($request->enddatetime)));
        $event->cost = $request->cost;
        $event->location = $request->location;
        $event->location_slug = $location->slug;
		$event->description = $request->description;
        $event->save();
        
        Session::flash('success', 'Event Submitted');
        return redirect()->route('events.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $event = Event::where('active', true)->where('slug', '=', $slug)->firstOrFail();
        return view('events.show')->withEvent($event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
