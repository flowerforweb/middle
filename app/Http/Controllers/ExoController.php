<?php

namespace App\Http\Controllers;

use App\Models\Exo;
use App\Http\Requests\StoreExoRequest;
use App\Http\Requests\UpdateExoRequest;
use Illuminate\Support\Facades\Redirect;

class ExoController extends Controller
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
     * @param  \App\Http\Requests\StoreExoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExoRequest $request)
    {
        if($request->hasFile('exo')){
            $file = $request->file('exo');
            $filename = $file->getClientOriginalName();
            $lesson = $request->input('lesson');
            $path = public_path().'/uploads/lessons/exercises/';

            $EXO = new Exo;
            $EXO ->lesson_id = $lesson;
            $EXO->title = $filename;
            $EXO -> path = $path;

            $file->move($path, $filename);

            $EXO->save();

            return "exo completly uploaded";
        }else{
            return "wa error";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exo  $exo
     * @return \Illuminate\Http\Response
     */
    public function show(Exo $exo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exo  $exo
     * @return \Illuminate\Http\Response
     */
    public function edit(Exo $exo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExoRequest  $request
     * @param  \App\Models\Exo  $exo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExoRequest $request, Exo $exo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exo  $exo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exo $exo)
    {
        //
    }
}
