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
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'required|numeric',
            'website' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'country' => 'required|string',
            'tags' => 'sometimes',
        ]);

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
        $companies = Company::latest()->where('owner_id', auth()->id())->get();

        return view('companies.show', [
            'company' => $company,
            'companies' => $companies,
        ]);
    }

    public function edit(Company $company)
    {
        return view('companies.edit', compact('company'));
    }

    public function update(Request $request, Company $company)
    {
        // Validate submitted data
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'required|numeric',
            'website' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'country' => 'required|string',
            'tags' => 'sometimes',
        ]);

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
    {
        $company = $company;

        if (!$company->delete()) {
            return redirect()->back()
                ->with('error', 'Unable to delete entry. Try again later.');
        }

        return redirect()->route('companies.index')
                ->with('success', 'Company deleted successfully.');
    }
}
