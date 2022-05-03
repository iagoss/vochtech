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
    <form action="{{ route('store.people') }}" method="POST">        
        <h1 class=" text-center text-xl pb-10 text-indigo-500">Adicionar nova pessoa</b></h1>
        @csrf
        <label for="name">Nome: </label>
        <input type="text" name="name" id="name" value="{{ old('name') }}">
        <label for="age">Idade: </label>
        <input type="number" name="age" id="age">
        <label for="user_id">Email de acesso: </label>
        <select name="user_id" id="user_id">
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->email }}</option>
            @endforeach
        </select>
        <input type="submit" value="Adicionar">
    </form>
@endsection
