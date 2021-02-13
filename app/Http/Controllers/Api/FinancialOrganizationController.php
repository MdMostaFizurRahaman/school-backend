<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FinancialOrganization;

class FinancialOrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return FinancialOrganization::all();
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
     * @param  \App\Models\FinancialOrganization  $financialOrganization
     * @return \Illuminate\Http\Response
     */
    public function show(FinancialOrganization $financialOrganization)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FinancialOrganization  $financialOrganization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FinancialOrganization $financialOrganization)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FinancialOrganization  $financialOrganization
     * @return \Illuminate\Http\Response
     */
    public function destroy(FinancialOrganization $financialOrganization)
    {
        //
    }
}
