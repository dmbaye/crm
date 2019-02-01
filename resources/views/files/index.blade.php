@extends('layouts.app')

@section('content')
<div>
    <div class="mb-3">
        All Files (0) |
        <a href="{{ route('contacts.create') }}" class="btn btn-sm btn-primary">
            Add New
        </a>

        <form action="{{ route('files.store') }}" method="post" enctype="multipart/form-data" class="form-inline">
            @csrf

            <input type="file" name="document" id="document">
            <button type="submit" class="btn btn-sm btn-primary">
                {{ __('Upload File') }}
            </button>
        </form>
    </div>
    <div class="card">
        <div class="card-body">

        </div>
    </div>
</div>
@endsection
