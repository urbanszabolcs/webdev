@extends('layout')

@section('title', 'Kapcsolatfelvételi üzenetek')

@section('content')
    <h1>Kapcsolatfelvételi üzenetek</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Név</th>
                <th>Email</th>
                <th>Üzenet</th>
                <th>Dátum</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($messages as $message)
                <tr>
                    <td>{{ $message->name }}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->message }}</td>
                    <td>{{ $message->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
