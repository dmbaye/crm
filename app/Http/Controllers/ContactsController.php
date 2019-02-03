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
        $this->validate($request, [
            'first_name' => 'required|string',
            'middle_name' => 'sometimes|string',
            'last_name' => 'required|string',
            'company' => 'required|string',
            'title' => 'required|string',
            'email' => 'required|string|email|max:255',
            'phone_number' => 'required',
            'address' => 'required',
        ]);

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
            return redirect()->back()
                ->with('error', 'The form contains errors.');
        }

        return redirect()->route('contacts.index')
            ->with('success', 'Contact added successfully.');
    }

    public function show(Contact $contact)
    {
        $companies = Company::where('owner_id', auth()->id())->get();

        return view('contacts.show', compact('contact', 'companies'));
    }

    public function edit(Contact $contact)
    {}

    public function update(Request $request, Contact $contact)
    {
        // Validate submitted data
        $this->validate($request, [
            'first_name' => 'required|string',
            'middle_name' => 'sometimes|string',
            'last_name' => 'required|string',
            'company' => 'required|string',
            'title' => 'required|string',
            'email' => 'required|string|email|max:255',
            'phone_number' => 'required',
            'address' => 'required',
        ]);

        $contact = $contact;
        $contact->first_name = $request->first_name;
        $contact->middle_name = $request->middle_name;
        $contact->last_name = $request->last_name;
        $contact->company_name = $request->company;
        $contact->title = $request->title;
        $contact->email = $request->email;
        $contact->phone_number = $request->phone_number;
        $contact->address = $request->address;

        if (!$contact->save()) {
            return redirect()->back()
                ->with('error', 'The form contains errors.');
        }

        return redirect()->back()
            ->with('success', 'Contact added successfully.');
    }

    public function destroy(Contact $contact)
    {
        $contact = $contact;

        if (!$contact->delete()) {
            return redirect()->back()
                ->with('error', 'Unable to delete entry. Try again later.');
        }

        return redirect()->route('contacts.index')
            ->with('success', 'Contact was deleted successfully.');
    }
}
