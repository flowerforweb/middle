<?php

namespace App\Http\Controllers;

use App\Models\studantModel;
use App\Http\Requests\StorestudantModelRequest;
use App\Http\Requests\UpdatestudantModelRequest;

class StudantModelController extends Controller
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
     * @param  \App\Http\Requests\StorestudantModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorestudantModelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\studantModel  $studantModel
     * @return \Illuminate\Http\Response
     */
    public function show(studantModel $studantModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\studantModel  $studantModel
     * @return \Illuminate\Http\Response
     */
    public function edit(studantModel $studantModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatestudantModelRequest  $request
     * @param  \App\Models\studantModel  $studantModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatestudantModelRequest $request, studantModel $studantModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\studantModel  $studantModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(studantModel $studantModel)
    {
        //
    }
}
