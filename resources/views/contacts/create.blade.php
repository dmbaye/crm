@extends('layouts.app')

@section('content')
<div>
    <div class="card">
        <div class="card-header">{{ __('Add a New Contact') }}</div>
        <div class="card-body">
            <form action="{{ route('contacts.store') }}" method="post">
                @csrf

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="first_name">First Name</label>

                            <input type="text" name="first_name" id="first_name" placeholder="First Name" value="{{ old('first_name') }}" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}">

                            @if ($errors->has('first_name'))
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="middle_name">Middle Name</label>

                            <input type="text" name="middle_name" id="middle_name" placeholder="Middle Name" value="{{ old('middle_name') }}" class="form-control{{ $errors->has('middle_name') ? ' is-invalid' : '' }}">

                            @if ($errors->has('middle_name'))
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('middle_name') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="last_name">Last Name</label>

                            <input type="text" name="last_name" id="last_name" placeholder="Last Name" value="{{ old('last_name') }}" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}">

                            @if ($errors->has('last_name'))
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('last_name') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="company">Company</label>

                            <input type="text" name="company" id="company" list="companies" placeholder="Company" value="{{ old('company') }}" class="form-control{{ $errors->has('company') ? ' is-invalid' : '' }}">

                            <datalist id="companies">
                                @foreach ($companies as $company)
                                    <option value="{{ $company->name }}">
                                @endforeach
                            </datalist>

                            @if ($errors->has('company'))
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('company') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="title">Title</label>

                            <input type="text" name="title" id="title" placeholder="Title" value="{{ old('title') }}" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}">

                            @if ($errors->has('title'))
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="email">Email Address</label>

                            <input type="email" name="email" id="email" placeholder="Email Address" value="{{ old('email') }}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}">

                            @if ($errors->has('email'))
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="phone_number">Phone Number</label>

                        <input type="tel" name="phone_number" id="phone_number" placeholder="Phone Number" value="{{ old('phone_number') }}" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}">

                        @if ($errors->has('phone_number'))
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('phone_number') }}</strong>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="address">Address</label>

                            <input type="text" name="address" id="address" placeholder="Address" value="{{ old('address') }}" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}">

                            @if ($errors->has('address'))
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </div>
                            @endif
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
