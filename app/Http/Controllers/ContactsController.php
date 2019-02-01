<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Company;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $contacts = Contact::latest()->where('owner_id', auth()->id())->get();

        return view('contacts.index', compact('contacts'));
    }

    public function create()
    {
        $companies = Company::where('owner_id', auth()->id())->get();

        return view('contacts.create', compact('companies'));
    }

    public function store(Request $request)
    {
        // Validate user inputs

        $contact = new Contact();
        $contact->owner_id = auth()->id();
        $contact->first_name = $request->first_name;
        $contact->middle_name = $request->middle_name;
        $contact->last_name = $request->last_name;
        $contact->company_name = $request->company;
        $contact->title = $request->title;
        $contact->email = $request->email;
        $contact->phone_number = $request->phone_number;
        $contact->address = $request->address;

        if (!$contact->save()) {
            return redirect()->back()->with('error', 'The form contains errors.');
        }

        return redirect()->route('contacts.index')->with('success', 'Contact added successfully.');
    }

    public function show(Contact $contact)
    {}

    public function edit(Contact $contact)
    {}

    public function update(Request $request)
    {}

    public function destroy(Contact $contact)
    {}
}
