<?php

namespace App\Http\Controllers;

use App\Models\Organizer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OrganizerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.organizer.index', [
            'organizers' => Organizer::all()
        ]);
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
        $validateData = $this->validator($request);

        if ($request->photo) {
            $validateData['photo'] = $request->file('photo')->store('/img/organizer');
        }

        Organizer::create($validateData);

        return back()->with('success', "data $request->name berhasil ditambakan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Organizer  $organizer
     * @return \Illuminate\Http\Response
     */
    public function show(Organizer $organizer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Organizer  $organizer
     * @return \Illuminate\Http\Response
     */
    public function edit(Organizer $organizer)
    {
        return response()->json([
            'organizer' => $organizer
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Organizer  $organizer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organizer $organizer)
    {
        $validateData = $this->validator($request);

        // check img
        if ($request->file('photo')) {
            if (Storage::exists($organizer->photo)) {
                Storage::delete($organizer->photo);
            }
            $validateData['photo'] = $request->file('photo')->store('/img/organizer');
        }

        Organizer::where('id', $organizer->id)->update($validateData);

        return back()->with('success', 'data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Organizer  $organizer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organizer $organizer)
    {
        // delete img if exist
        if (Storage::exists($organizer->photo)) {
            Storage::delete($organizer->photo);
        }

        $organizer->delete();

        return back()->with('success', "data $organizer->name berhasih dihapus");
    }

    /**
     * function validat of data.
     *
     * @return \Illuminate\Http\Response
     */
    public function validator(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:100',
            'address' => 'required',
            'job' => 'required|max:100',
            'photo' => ''
        ]);

        return $validateData;
    }
}
