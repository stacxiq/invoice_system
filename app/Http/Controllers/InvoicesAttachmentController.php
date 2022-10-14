<?php

namespace App\Http\Controllers;

use App\Models\InvoicesAttachment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InvoicesAttachmentController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InvoicesAttachment  $invoicesAttachment
     * @return \Illuminate\Http\Response
     */
    public function show(InvoicesAttachment $invoicesAttachment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InvoicesAttachment  $invoicesAttachment
     * @return \Illuminate\Http\Response
     */
    public function edit(InvoicesAttachment $invoicesAttachment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InvoicesAttachment  $invoicesAttachment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InvoicesAttachment $invoicesAttachment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InvoicesAttachment  $invoicesAttachment
     * @return \Illuminate\Http\Response
     */
    public function destroy(InvoicesAttachment $invoicesAttachment)
    {
        //
    }

    public function show_image($invoice_number , $file_name){
        $file = Storage::disk('public_uploads')->path($invoice_number.'/'.$file_name);
        $content = file_get_contents($file);

//        return response()->download($file);
        return response($content)->withHeaders(
            [
                'Content-Type' => mime_content_type($file)
            ]
        );
    }
    public function download_image($invoice_number , $file_name){
        $file = Storage::disk('public_uploads')->path($invoice_number.'/'.$file_name);
        $content = file_get_contents($file);

        return response()->download($file);
//        return response($content)->withHeaders(
//            [
//                'Content-Type' => mime_content_type($file)
//            ]
//        );
    }
}
