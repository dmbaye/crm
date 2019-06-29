@extends('layouts.app')

@section('content')
<div>
    <div class="mb-3">
        All Files (0) |
        <a href="#" class="btn btn-sm btn-primary">
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
    <hr>
    <h1>Files</h1>
    <div class="card">
        <div class="card-body">
            @if($files->count())
                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <td>File Name</td>
                                <td>Upload Date</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($files as $file)
                                <tr>
                                    <td>
                                        <a href="{{ $file->path }}">
                                            {{ $file->path }}
                                        </a>
                                    </td>
                                    <td>{{ $file->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p>No files</p>
            @endif
        </div>
    </div>
</div>
@endsection
