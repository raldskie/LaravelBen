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


        <table class="table-auto rounded-t-lg m-5 w-full mx-auto bg-gray-200 text-gray-800">
        <tr class="text-left border-b-2 border-gray-300">
            <th class="px-4 py-3">Name</th>
            <th class="px-4 py-3">Status</th>
            <th class="px-4 py-3">Created At</th>
            <th class="px-4 py-3">Role</th>
        </tr>
        
        @foreach($members as $member)
            <tr class="bg-gray-100 border-b border-gray-200">
                <td class="px-4 py-3">{{ $member->name }}</td>
                <td class="px-4 py-3">{{ $member->email_verified_at ? 'Active' : 'Non Active' }}</td>
                <td class="px-4 py-3">{{ $member->created_at }}</td>
                <td class="px-4 py-3">{{ $member->role }}</td>
            </tr>
        @endforeach

        </table>
        
        @endsection
    </body>
</html>