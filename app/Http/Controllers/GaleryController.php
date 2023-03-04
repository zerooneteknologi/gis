<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use App\Models\Tour;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(request('tourName'));
        return view('admin.galery.index', [
            'tours' => Tour::orderBy('tourName', 'asc')->get(),
            'galeries' => Galery::latest()->filter(request('tourName'))->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Galery $galery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galery $galery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galery $galery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galery $galery)
    {
        $galery->delete();

        return back()->with('session', "photo $galery->galeryName berhasil");
    }
}
