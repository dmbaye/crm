@extends('layouts.app')

@section('content')
<div>
    <div class="mb-3">
        All Companies ({{ $companies->count() }}) |
        <a href="{{ route('companies.create') }}" class="btn btn-sm btn-primary">
            Add New
        </a>
    </div>
    @if ($companies->count())
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Contact</th>
                        <th>Website</th>
                        <th>Contact Type</th>
                        <th>Email Address</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($companies as $company)
                        <tr>
                            <td>
                                <a href="{{ route('companies.show', $company) }}">
                                    {{ $company->name }}
                                </a>
                            </td>
                            <td>{{ $company->phone_number }}</td>
                            <td>-</td>
                            <td>
                                <a href="{{ $company->website }}" target="_blank">
                                    {{ $company->website }}
                                </a>
                            </td>
                            <td>Potential Customer</td>
                            <td>{{ $company->email }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p>No data.</p>
    @endif
</div>
@endsection
