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
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Owned By</th>
                        <th>Modified</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{ $project->name }}</td>
                            <td>{{ auth()->user()->name }}</td>
                            <td>{{ date('d/m/Y', strtotime($project->updated_at)) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p>No Data.</p>
    @endif
</div>
@endsection
