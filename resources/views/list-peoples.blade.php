@extends('layout.layout')

@section('content')
    <div class=" w-full p-20 bg-white rounded-md shadow-md">
        <div>
            <a href="{{ route('create.people') }}" class="relative block px-3 py-2 border border-lime-60 rounded-md float-right text-center bg-sky-500 text-white">Cadastrar nova pessoa</a>
        </div>
        <table class="w-full">
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Id Usuário</th>
                <th>Ações</th>
            </tr>
            @foreach ($peoples as $people)
                <tr>
                    <td>{{ $people->name }}</td>
                    <td> {{ $people->age }} Anos</td>
                    <td>{{ $people->user_id }}</td>
                    <td>
                        <a href="{{ route('edit.people', $people->id) }}" 
                            class="relative block px-3 py-2 border border-lime-60 rounded-md float-left w-1/2 text-center bg-lime-600 text-white">Editar</a>
                        <form action="{{ route('destroy.people', $people->id) }}" method="post" class="delete">
                            @method('delete')
                            @csrf
                            <input type="submit" value="Remover" class="w-1/2 mb-0 text-center">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
