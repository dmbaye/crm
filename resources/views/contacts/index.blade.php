@extends('layouts.app')

@section('content')
<div>
    <div class="mb-3">
        All Contact ({{ $contacts->count() }}) |
        <a href="{{ route('contacts.create') }}" class="btn btn-sm btn-primary">
            Add New
        </a>
    </div>
    @if ($contacts->count())
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name <i class="fa fa-filter"></i></th>
                        <th>Title <i class="fa fa-filter"></i></th>
                        <th>Company <i class="fa fa-filter"></i></th>
                        <th>Email <i class="fa fa-filter"></i></th>
                        <th>Contact Type <i class="fa fa-filter"></i></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr>
                            <td>
                                <a href="{{ route('contacts.show', $contact) }}">
                                    {{ $contact->getName() }}
                                </a>
                            </td>
                            <td>{{ $contact->title }}</td>
                            <td>{{ $contact->company_name }}</td>
                            <td>
                                <a href="mailto:{{ $contact->email }}">
                                    {{ $contact->email }}
                                </a>
                            </td>
                            <td>Potential Customer</td>
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
