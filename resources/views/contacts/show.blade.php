@extends('layouts.app')

@section('content')
    <h1>Detalhes do Contato</h1>

    <table>
        <tr>
            <th>ID:</th>
            <td>{{ $contact->id }}</td>
        </tr>
        <tr>
            <th>Nome:</th>
            <td>{{ $contact->name }}</td>
        </tr>
        <tr>
            <th>Contato:</th>
            <td>{{ $contact->contact }}</td>
        </tr>
        <tr>
            <th>Email:</th>
            <td>{{ $contact->email }}</td>
        </tr>
    </table>

    <p>
        <a href="{{ route('contacts.edit', $contact) }}">Editar</a>
    </p>

    <form action="{{ route('contacts.destroy', $contact) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Excluir</button>
    </form>
@endsection
