<?php

namespace App\Http\Controllers;

use App\Get;
use Illuminate\Http\Request;

class GetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getProject($id)
    {
        $project = Get::where('id', $id)->first();

        $data["project"] = $project;
        $data["status"] = 1;
        return response($data);
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
     * @param  \App\Get  $get
     * @return \Illuminate\Http\Response
     */
    public function show(Get $get)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Get  $get
     * @return \Illuminate\Http\Response
     */
    public function edit(Get $get)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Get  $get
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Get $get)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Get  $get
     * @return \Illuminate\Http\Response
     */
    public function destroy(Get $get)
    {
        //
    }
}
