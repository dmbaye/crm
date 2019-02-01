@extends('layouts.app')

@section('content')
<div>
    <div class="card">
        <div class="card-header">{{ $project->name }}</div>
        <div class="card-body">
            <form action="{{ route('projects.update', $project) }}" method="post">
                @csrf

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">Name</label>

                            <input type="text" name="name" id="name" placeholder="Name" value="{{ old('name', $project->name) }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="status">Status</label>

                            <select name="status" id="status" class="form-control">
                                <option value="0" {{ $project->status == 0 ? 'selected' : '' }}>Open</option>
                                <option value="1" {{ $project->status == 1 ? 'selected' : '' }}>Completed</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="tags">Tags</label>

                            <input type="text" name="tags" id="tags" placeholder="Tags" value="{{ old('tags', $project->tags) }}" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>

                    <textarea name="description" id="description" placeholder="Description" cols="30" rows="3" class="form-control">{{ old('description', $project->description) }}</textarea>
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
