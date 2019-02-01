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
                        <th>Name <i class="fa fa-filter"></i></th>
                        <th>Owned By <i class="fa fa-filter"></i></th>
                        <th>Status <i class="fa fa-filter"></i></th>
                        <th>Modified <i class="fa fa-filter"></i></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>
                                <a href="{{ route('projects.show', $project) }}">
                                    {{ $project->name }}
                                </a>
                            </td>
                            <td>{{ auth()->user()->name }}</td>
                            <td>{{ $project->status == 0 ? 'Open' : 'Completed' }}</td>
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
