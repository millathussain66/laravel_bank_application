<?php

namespace App\Http\Controllers;

use App\Models\NewContract;
use Illuminate\Http\Request;

class NewContractController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('newcontract.newcontract');
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

       return $request;


    }

    /**
     * Display the specified resource.
     */
    public function show(NewContract $newContract)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NewContract $newContract)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NewContract $newContract)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NewContract $newContract)
    {
        //
    }
}
