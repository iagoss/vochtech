<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Login</title>
</head>

<body class="bg-indigo-50">
    <div class="flex h-screen items-center justify-center p-20">
        <form action="{{ route('auth.login') }}" method="POST">

            <h1 class=" text-center text-xl pb-10 text-indigo-500">Fazer Login</b></h1>
            @csrf
            @if ($errors->any())
                <div class="bg-red-500 w-full rounded-md text-red-50 text-center py-3">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <label for="email">Usuário: </label>
            <input type="email" name="email" id="email" value="{{ old('email') }}">
            <label for="password">Senha: </label>
            <input type="password" name="password" id="password">
            <input type="submit" value="Acessar">
        </form>

    </div>
</body>

</html>
