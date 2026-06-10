@extends('layouts.app')

@section('title', 'index')

@section('content')


    <p>Bonjour</p>
    <p>La liste des tâhes ici.</p>
    <button>Ajouter</button>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Content</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @forelse($todolists as $todo)
                <tr>
                    <td>{{ $todo->id }}</td>
                    <td> {{ $todo->Title }} </td>
                    <td> {{ $todo->Content }} </td>
                </tr>
            @empty
                <p>Il n'ya rien encore.</p>
            @endforelse
        </tbody>
    </table>

@endsection
