<?php

namespace App\Http\Controllers;

use App\Models\Choice;
use App\Http\Requests\StoreChoiceRequest;
use App\Http\Requests\UpdateChoiceRequest;

class ChoiceController extends Controller
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
     * @param  \App\Http\Requests\StoreChoiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChoiceRequest $request)
    {
        $mychoice = $request->input('mychoice');
        $ask = $request->input('question');
        $isTrue = $request->input('isCorrect');

        $choice = new Choice;
        $choice->question_id = $ask;
        $choice->choice = $mychoice;
        $choice->status = $isTrue;

        $choice->save();
        return true;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Choice  $choice
     * @return \Illuminate\Http\Response
     */
    public function show(Choice $choice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Choice  $choice
     * @return \Illuminate\Http\Response
     */
    public function edit(Choice $choice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChoiceRequest  $request
     * @param  \App\Models\Choice  $choice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChoiceRequest $request, Choice $choice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Choice  $choice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Choice $choice)
    {
        //
    }
}
