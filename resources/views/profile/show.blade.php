@extends('layouts.app')

@section('content')
<div>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Personnal Info') }}</div>
                <div class="card-body">
                    <form action="{{ route('profile.update', $user) }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="name">{{ __('Name') }}</label>

                            <input type="text" name="name" id="name" placeholder="Name" value="{{ old('name', $user->name) }}" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}">

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="email">Email Addres</label>

                            <input type="text" name="email" id="email" placeholder="Email Address" value="{{ old('email', $user->email) }}" class="form-control" disabled>
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
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Password') }}</div>
                <div class="card-body">
                    <form action="{{ route('password.update', $user) }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="current_password">Current Password</label>

                            <input type="password" name="current_password" id="current_password" placeholder="Current Password" class="form-control{{ $errors->has('current_password') ? ' is-invalid' : '' }}">

                            @if ($errors->has('current_password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('current_password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="new_password">New Password</label>

                            <input type="password" name="new_password" id="new_password" placeholder="New Password" class="form-control{{ $errors->has('new_password') ? ' is-invalid' : '' }}">

                            @if ($errors->has('new_password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('new_password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="new_password_confirmation">Confirm New Password</label>

                            <input type="password" name="new_password_confirmation" id="new_password_confirmation" placeholder="Confirm New Password" class="form-control">
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
    </div>
</div>
@endsection
