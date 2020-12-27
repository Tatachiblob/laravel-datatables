@extends('layouts.app')

@section('title', 'ユーザー')

@section('contents')
<table id="users_table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Introduction</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->gender }}</td>
            <td>{{ $user->age }}</td>
            <td>{{ $user->introduction }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

@push('script')
<script type="text/javascript">
    $(document).ready( function () {
        $('#users_table').DataTable();
    });
</script>
@endpush
