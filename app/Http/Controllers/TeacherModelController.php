<?php

namespace App\Http\Controllers;

use App\Models\TeacherModel;
use App\Http\Requests\StoreTeacherModelRequest;
use App\Http\Requests\UpdateTeacherModelRequest;

class TeacherModelController extends Controller
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
     * @param  \App\Http\Requests\StoreTeacherModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeacherModelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TeacherModel  $teacherModel
     * @return \Illuminate\Http\Response
     */
    public function show(TeacherModel $teacherModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeacherModel  $teacherModel
     * @return \Illuminate\Http\Response
     */
    public function edit(TeacherModel $teacherModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeacherModelRequest  $request
     * @param  \App\Models\TeacherModel  $teacherModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeacherModelRequest $request, TeacherModel $teacherModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeacherModel  $teacherModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeacherModel $teacherModel)
    {
        //
    }
}
