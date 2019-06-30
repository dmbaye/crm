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
                        <th>Name <i class="fa fa-filter"></i></th>
                        <th>Phone Number <i class="fa fa-filter"></i></th>
                        <th>Contact <i class="fa fa-filter"></i></th>
                        <th>Website <i class="fa fa-filter"></i></th>
                        <th>Contact Type <i class="fa fa-filter"></i></th>
                        <th>Email Address <i class="fa fa-filter"></i></th>
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
                            <td>
                                <a href="tel:{{ $company->phone_number }}">
                                    {{ $company->phone_number }}
                                </a>
                            </td>
                            <td>-</td>
                            <td>
                                <a href="{{ $company->website }}" target="_blank">
                                    {{ $company->website }}
                                </a>
                            </td>
                            <td>Potential Customer</td>
                            <td>
                                <a href="mailto:{{ $company->email }}">
                                    {{ $company->email }}
                                </a>
                            </td>
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
