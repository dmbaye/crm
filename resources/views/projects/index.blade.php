@extends('layouts.app')

@section('content')
<div>
    <div class="mb-3">
        All Contact ({{ $projects->count() }}) |
        <a href="{{ route('projects.create') }}" class="btn btn-sm btn-primary">
            Add New
        </a>
    </div>
    @if ($projects->count())

    @else
        <p>No Data.</p>
    @endif
</div>
@endsection
