<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function index()
    {
        $companies = Company::latest()->where('owner_id', auth()->id())->get();

        return view('companies.index', compact('companies'));
    }

    public function create()
    {
        return view('companies.create');
    }

    public function store(Request $request)
    {
        // Validate submitted data

        $company = new Company();
        $company->owner_id = auth()->id();
        $company->name = $request->name;
        $company->email = $request->email;
        $company->phone_number = $request->phone_number;
        $company->website = $request->website;
        $company->address = $request->address;
        $company->city = $request->city;
        $company->state = $request->state;
        $company->country = $request->country;
        $company->tags = $request->tags;

        if (!$company->save()) {
            return redirect()->back()->with('error', 'Please correct the form and try again.');
        }

        return redirect()->route('companies.index')->with('success', 'Company saved successfully.');
    }

    public function show(Company $company)
    {
        return view('companies.show', compact('company'));
    }

    public function edit(Company $company)
    {
        return view('companies.edit', compact('company'));
    }

    public function update(Request $request, Company $company)
    {
        // Validate submitted data

        $company = $company;
        $company->name = $request->name;
        $company->email = $request->email;
        $company->phone_number = $request->phone_number;
        $company->website = $request->website;
        $company->address = $request->address;
        $company->city = $request->city;
        $company->state = $request->state;
        $company->country = $request->country;
        $company->tags = $request->tags;

        if (!$company->save()) {
            return redirect()->back()->with('error', 'Please correct the form and try again.');
        }

        return redirect()->back()->with('success', 'Company updated successfully.');
    }

    public function destroy(Company $company)
    {}
}
