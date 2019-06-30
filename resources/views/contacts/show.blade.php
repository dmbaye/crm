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

                            <input type="text" name="first_name" id="first_name" placeholder="First Name" value="{{ old('first_name', $contact->first_name) }}" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}">

                            @if ($errors->has('first_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="middle_name">Middle Name</label>

                            <input type="text" name="middle_name" id="middle_name" placeholder="Middle Name" value="{{ old('middle_name', $contact->middle_name) }}" class="form-control{{ $errors->has('middle_name') ? ' is-invalid' : '' }}">

                            @if ($errors->has('middle_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('middle_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="last_name">Last Name</label>

                            <input type="text" name="last_name" id="last_name" placeholder="Last Name" value="{{ old('last_name', $contact->last_name) }}" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}">

                            @if ($errors->has('last_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('last_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="company">Company</label>

                            <input type="text" name="company" id="company" placeholder="Company" value="{{ old('company', $contact->company_name) }}" list="companies" class="form-control{{ $errors->has('company') ? ' is-invalid' : '' }}">

                            <datalist id="companies">
                                @foreach ($companies as $company)
                                    <option value="{{ $company->name }}">
                                @endforeach
                            </datalist>

                            @if ($errors->has('company'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('company') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="title">Title</label>

                            <input type="text" name="title" id="title" placeholder="Title" value="{{ old('title', $contact->title) }}" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}">

                            @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="email">Email Address</label>

                            <input type="email" name="email" id="email" placeholder="Email Address" value="{{ old('email', $contact->email) }}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}">

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="phone_number">Phone Number</label>

                        <input type="tel" name="phone_number" id="phone_number" placeholder="Phone Number" value="{{ old('phone_number', $contact->phone_number) }}" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}">

                        @if ($errors->has('phone_number'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('phone_number') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="address">Address</label>

                            <input type="text" name="address" id="address" placeholder="Address" value="{{ old('address', $contact->address) }}" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}">

                            @if ($errors->has('address'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Save') }}
                    </button>
                    <a href="{{ route('contacts.delete', $contact) }}" class="btn btn-danger">
                        {{ __('Delete') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
