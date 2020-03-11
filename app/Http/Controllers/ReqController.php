<?php

namespace App\Http\Controllers;

// use App\Req;
use App\User;
use App\Project;
use App\Services;
use App\Labelrelations;
use App\Offers;
use Illuminate\Http\Request;

class ReqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    {
        $offers = array();

        $project        = Project::where('id', $id)->first();
        $user           = User::where('id', $project->id)->first(); 
        $labelrelations = Labelrelations::where('id', $id)->first();

        $offers         = new Offers();
        $offers->type   = "project";

        $offers->relid          = $project->id;
        $offers->subject        = $project->projectname;
        $offers->from           = 1; //$user->id; //yang login gan
        $offers->to             = $project->userid;
        $offers->bidvalue       = $request->bidvalue;
        $offers->description    = $request->description;

        $offers->save();
        return response()->json([
        $offers,
        'status'  => '1',
      ]);
    }

    public function store(Request $request, $id)
    {
        $offers = array();

        $user           = User::where('id', $project->id)->first(); 
        $service        = Services::where('id', $id)->first();
        $labelrelations = Labelrelations::where('id', $id)->first();

        $offers         = new Offers();
        $offers->type   = "service";

        $offers->relid          = $service->id;
        $offers->subject        = $request->subject;
        $offers->from           = 1; //user->id; //yang login gan
        $offers->to             = $service->userid;
        $offers->bidvalue       = $service->minimumprice;
        $offers->description    = $request->descriptions;
        
        $offers->save();
        return response()->json([
        $offers,
        'status'  => '1',
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
    // public function store(Request $request)
    // {
    //     $req = new Req([
    //         'id'                    => $request->id,
    //         'from'                  => $request->from,
    //         'to'                    => $request->to,
    //         'subject'               => $request->subject,
    //         'description'           => $request->description,
    //         'type'                  => $request->type,
    //         'relid'                 => $request->relid,
    //         'created_at'            => now(),
    //         'updated_at'            => now(),
    //         'status'                => $request->status,
    //         'bidvalue'              => $request->bidvalue,
    //     ]);
        
    //     $req->save();
    //     return response()->json([
    //         'status'  => '1',
    //         'message' => 'Data penawaran berhasil ditambahkan!'
    //     ]);
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Req  $req
     * @return \Illuminate\Http\Response
     */
    public function show(Req $req)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Req  $req
     * @return \Illuminate\Http\Response
     */
    public function edit(Req $req)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Req  $req
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Req $req)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Req  $req
     * @return \Illuminate\Http\Response
     */
    public function destroy(Req $req)
    {
        //
    }
}



        
        // $offers->type   = $labelrelations->service;

        // if($labelrelations->type == 'service') {
        //     $offers->relid          = $service->id;
        //     $offers->subject        = $request->subject;
        //     $offers->from           = $service->id;
        //     $offers->to             = $service->userid;
        //     $offers->bidvalue       = $service->minimumprice;
        //     $offers->description    = $request->descriptions;
        // }
        // else {
        //     return response()->json([
        //         'status' => '0',
        //         'message' => 'Type tidak termasuk'
        //     ]);
        // }
