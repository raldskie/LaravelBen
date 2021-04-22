<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="antialiased">

        @extends('layouts.dashboard')

        @section('content')
            <p>{{ $name }}</p>
            <p>{{ $team_name->name }}</p>


        <table class="table-auto mt-8">
        <tr>
            <th class="w-1/2 text-left">Name</th>
            <th class="w-1/4 text-left">Status</th>
            <th class="w-1/4 text-left">Created At</th>
            <th class="w-1/4 text-left">Role</th>
        </tr>
            @foreach($members as $member)
            <tr>
                <td>{{ $member->name }}</td>
                <td>{{ $member->email_verified_at ? 'Active' : 'Non Active' }}</td>
                <td>{{ $member->created_at }}</td>
            </tr>
            @endforeach
        </table>

        @endsection

    </body>
</html>