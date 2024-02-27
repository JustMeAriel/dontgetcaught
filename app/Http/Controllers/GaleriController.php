<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function controller()
    {
        return view('galeri.controller');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function model()
    {
        return view('galeri.model');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function migration()
    {
        return view('galeri.migration');
    }

    /**
     * Display the specified resource.
     */
    public function command()
    {
        return view('galeri.command');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function route()
    {
        return view('galeri.route');
    }

    
    public function view()
    {
        return view('galeri.view');
    }

    public function layouts()
    {
        return view('galeri.layouts');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
