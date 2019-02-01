@extends('layouts.app')

@section('content')
<div>
    <div class="card">
        <div class="card-header">{{ $contact->getName() }}</div>
        <div class="card-body">
            <form action="{{ route('contacts.update', $contact) }}" method="post">
                @csrf

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="first_name">First Name</label>

                            <input type="text" name="first_name" id="first_name" placeholder="First Name" value="{{ old('first_name', $contact->first_name) }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="middle_name">Middle Name</label>

                            <input type="text" name="middle_name" id="middle_name" placeholder="Middle Name" value="{{ old('middle_name', $contact->middle_name) }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="last_name">Last Name</label>

                            <input type="text" name="last_name" id="last_name" placeholder="Last Name" value="{{ old('last_name', $contact->last_name) }}" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="company">Company</label>

                            <input type="text" name="company" id="company" placeholder="Company" value="{{ old('company', $contact->company) }}" list="companies" class="form-control">

                            <datalist id="companies">
                                @foreach ($companies as $company)
                                    <option value="{{ $company->name }}">
                                @endforeach
                            </datalist>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="title">Title</label>

                            <input type="text" name="title" id="title" placeholder="Title" value="{{ old('title', $contact->title) }}" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="email">Email Address</label>

                            <input type="email" name="email" id="email" placeholder="Email Address" value="{{ old('email', $contact->email) }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="phone_number">Phone Number</label>

                        <input type="tel" name="phone_number" id="phone_number" placeholder="Phone Number" value="{{ old('phone_number', $contact->phone_number) }}" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="address">Address</label>

                            <input type="text" name="address" id="address" placeholder="Address" value="{{ old('address', $contact->address) }}" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Save') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
