@extends('layout.layout')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('update.people', $people->id) }}" method="post">
        <h1 class=" text-center text-xl pb-10 text-indigo-500">Alterando <b>{{ $people->name }}</b></h1>
        @method('PUT')
        @csrf
        <label for="name">Nome: </label>
        <input type="text" name="name" id="name" value="{{ $people->name }}">
        <label for="age">Idade: </label>
        <input type="number" name="age" id="age" value="{{ $people->age }}">
        <label for="user_id">Email de acesso: </label>
        <select name="user_id" id="user_id">
            @foreach ($users as $user)
                <option value="{{ $user->id }}" {{ $user->id == $people->user_id ? 'required' : '' }}>
                    {{ $user->email }}</option>
            @endforeach
        </select>
        <input type="submit" value="Alterar">
    </form>
@endsection
