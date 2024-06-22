<?php

namespace App\Http\Controllers;

use App\Http\Resources\BanerResource;
use App\Models\Baner;
use Illuminate\Http\Request;

class BanerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return  BanerResource::collection(Baner::where("is_active", 1)->get());
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
    public function show(Baner $baner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Baner $baner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Baner $baner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Baner $baner)
    {
        //
    }
}
