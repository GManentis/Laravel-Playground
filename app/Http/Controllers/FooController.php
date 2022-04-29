<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        /*
        $myAssocArray = ["skill" => "Makis Takis"];

        $skill = new Skill($myAssocArray); // Eloquent accepts associative array if we pass params as constructor
        //return response()->json($skill); //if we return the result before save we will get the properties without id because no save to db has occured
        $skill->save();
        //return response()->json($skill); //if we return the result after save we will get the properties with id as expected

        //$skill->delete(); if we delete the entry and return it, we will still get all the info including id but the entry we no longer be in db

        //Important Note: We either save() or delete()!!! if we save() first and delete() later as expected the entry will be removed
        //If we delete() and then in next line save() the entry still exists in db
        //So the eloquent object in either delete() or save() not both!!!
        return response()->json($skill);
        */
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
