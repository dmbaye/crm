@extends('layouts.app')

@section('content')
<div>
    <div class="card">
        <div class="card-header">{{ __('Create a New Company') }}</div>
        <div class="card-body">
            <form action="{{ route('companies.store') }}" method="post">
                @csrf

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">Name</label>

                            <input type="text" name="name" id="name" placeholder="Name" value="{{ old('name') }}" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}">

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
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
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="phone_number">Phone Number</label>

                            <input type="tel" name="phone_number" id="phone_number" placeholder="Phone Number" value="{{ old('phone_number') }}" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}">

                            @if ($errors->has('phone_number'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('phone_number') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="website">Website</label>

                            <input type="text" name="website" id="website" placeholder="Website" value="{{ old('website') }}" class="form-control{{ $errors->has('website') ? ' is-invalid' : '' }}">

                            @if ($errors->has('website'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('website') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="address">Address</label>

                            <input type="text" name="address" id="address" placeholder="Address" value="{{ old('address') }}" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}">

                            @if ($errors->has('address'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="city">City</label>

                            <input type="text" name="city" id="city" placeholder="City" value="{{ old('city') }}" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}">

                            @if ($errors->has('city'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('city') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="state">State</label>

                            <input type="text" name="state" id="state" placeholder="State" value="{{ old('state') }}" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}">

                            @if ($errors->has('state'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('state') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="contry">Country</label>

                            <input type="text" name="country" id="country" placeholder="Country" value="{{ old('country') }}" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}">

                            @if ($errors->has('country'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('country') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="tags">Tags</label>

                            <input type="text" name="tags" id="tags" placeholder="Tags" value="{{ old('tags') }}" class="form-control{{ $errors->has('tags') ? ' is-invalid' : '' }}">

                            @if ($errors->has('tags'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('tags') }}</strong>
                                </span>
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
