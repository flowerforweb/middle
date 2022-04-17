<?php

namespace App\Http\Controllers;

use App\Models\Pdffile;
use App\Http\Requests\StorePdffileRequest;
use App\Http\Requests\UpdatePdffileRequest;

class PdffileController extends Controller
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
     * @param  \App\Http\Requests\StorePdffileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePdffileRequest $request)
    {
        if($request->hasFile('pdf')){
            $file = $request->file('pdf');
            $filename = $file->getClientOriginalName();
            $lesson = $request->input('lesson');
            $path = public_path().'/uploads/lessons/pdf/';

            $pdf = new Pdffile();
            $pdf ->lesson_id = $lesson;
            $pdf->title = $filename;
            $pdf -> path = $path;

            $file->move($path, $filename);

            $pdf->save();

            return "PDf file completly uploaded";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pdffile  $pdffile
     * @return \Illuminate\Http\Response
     */
    public function show(Pdffile $pdffile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pdffile  $pdffile
     * @return \Illuminate\Http\Response
     */
    public function edit(Pdffile $pdffile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePdffileRequest  $request
     * @param  \App\Models\Pdffile  $pdffile
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePdffileRequest $request, Pdffile $pdffile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pdffile  $pdffile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pdffile $pdffile)
    {
        //
    }
}
