@extends('layouts.app')

@section('content')
    <h1>Adicionar Contato</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        </div>
        <div>
            <label for="contact">Contato:</label>
            <input type="text" name="contact" id="contact" value="{{ old('contact') }}" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        </div>
        <button type="submit">Salvar</button>
    </form>
@endsection
