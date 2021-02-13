<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BankAccount;
use Illuminate\Http\Request;

class BankAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BankAccount::with('financialOrganization')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'account_name' => 'required|string|max:255',
            'financial_organization_id' => 'required',
            'account_no' => 'required|string|max:100',
            'branch' => 'required|string|max:50',
            'account_type' => 'required',
            'swift_code' => 'required|string|max:100',
            'route_no' => 'required|string|max:100',
        ]);

        $bankAccount = BankAccount::create($request->all());

        return $bankAccount;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BankAccount  $bankAccount
     * @return \Illuminate\Http\Response
     */
    public function show(BankAccount $bankAccount)
    {
        return $bankAccount;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BankAccount  $bankAccount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BankAccount $bankAccount)
    {
        $this->validate($request, [
            'account_name' => 'required|string|max:255',
            'financial_organization_id' => 'required',
            'account_no' => 'required|string|max:100',
            'branch' => 'required|string|max:50',
            'account_type' => 'required',
            'swift_code' => 'required|string|max:100',
            'route_no' => 'required|string|max:100',
        ]);

        $bankAccount->update($request->all());

        return $bankAccount;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BankAccount  $bankAccount
     * @return \Illuminate\Http\Response
     */
    public function destroy(BankAccount $bankAccount)
    {
        return $bankAccount->delete();
    }
}
