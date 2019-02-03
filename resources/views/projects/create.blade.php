@extends('layouts.app')

@section('content')
<div>
    <div class="card">
        <div class="card-header">{{ __('Create a New Project') }}</div>
        <div class="card-body">
            <form action="{{ route('projects.store') }}" method="post">
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
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="status">Status</label>

                            <select name="status" id="status" class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}">
                                <option value="0">Open</option>
                                <option value="1">Completed</option>
                            </select>

                            @if ($errors->has('status'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('status') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
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
                    <label for="description">Description</label>

                    <textarea name="description" id="description" placeholder="Description" cols="30" rows="3" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}">{{ old('description') }}</textarea>

                    @if ($errors->has('description'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
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
