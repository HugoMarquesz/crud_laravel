@extends('layouts.app')

@section('content')
    <h1>Editar Contato</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('contacts.update', $contact) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" value="{{ old('name', $contact->name) }}" required>
        </div>
        <div>
            <label for="contact">Contato:</label>
            <input type="text" name="contact" id="contact" value="{{ old('contact', $contact->contact) }}" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email', $contact->email) }}" required>
        </div>
        <button type="submit">Salvar</button>
    </form>
@endsection
