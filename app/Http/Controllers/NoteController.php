<?php

namespace App\Http\Controllers;
use App\Note;
use Illuminate\Http\Request;
use DateTime;
class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $notes = Note::all();
        return view('notes.index', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('notes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'points' => 'required'
        ]);
        $now = new Datetime;
        $new = new Note([
            'title' => $request->get('title'),
            'points' => $request->get('points'),
            'posted' => $now
        ]);
        $new->save();
        return redirect('/notes')->with('success', 'New notes successfully saved!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $note = Note::find($id);
        return view('notes.edit', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required',
            'points'=>'required'
        ]);
        $note = Note::find($id);
        $note->title = $request->get('title');
        $note->points = $request->get('points');
        $now = new DateTime();
        $note->posted = $now;
        $note->save();
        return redirect('/notes')->with('success', 'Notes has been edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $note = Note::find($id);
        $note->delete();
        return redirect('/notes')->with('success', 'Notes has been removed');
    }
}
