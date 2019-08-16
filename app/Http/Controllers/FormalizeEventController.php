<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormalizeEvent;
use App\Church;

class FormalizeEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = [];

        foreach (FormalizeEvent::orderBy('created_at', 'ASC')->get() as $event) {
            array_push($events, [
                'id'     => $event->id,
                'space_available' => $event->space_available,
                'state' => $event->state,
                'dateInit' => ($event->created_at)->format('d-m-Y'),
                'dateFinish' => ($event->date_finish)->format('d-m-Y'),
            ]);
        }

        $events = json_encode($events);
        return view('app.formalize_events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $churches = [];

        foreach (Church::orderBy('church_name', 'ASC')->get() as $church) {
            array_push($churches, [
                'id'     => $church->id,
                'church' => $church->church_name,
                'pastor' => $church->pastor_surnames.', '.$church->pastor_names,
            ]);
        }

        $churches = json_encode($churches);
        return view('app.formalize_events.create-edit-form', compact('churches'));
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
     * @param  \App\FormalizeEvent  $formalizeEvent
     * @return \Illuminate\Http\Response
     */
    public function show(FormalizeEvent $formalizeEvent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FormalizeEvent  $formalizeEvent
     * @return \Illuminate\Http\Response
     */
    public function edit(FormalizeEvent $formalizeEvent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FormalizeEvent  $formalizeEvent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormalizeEvent $formalizeEvent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FormalizeEvent  $formalizeEvent
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormalizeEvent $formalizeEvent)
    {
        //
    }
}
