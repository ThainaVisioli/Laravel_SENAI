<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Cadastro Alunos</title>
</head>
<body>

    <h1>Cadastro Alunos</h1>

    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <form action="{{ route('aluno.salvar') }}" method="POST">
        @csrf

        <label>Nome:</label>
        <input type="text" name="nome" required value="{{ old('nome') }}">
        <br><br>

        <label>Email:</label>
        <input type="email" name="email" required value="{{ old('email') }}">
        <br><br>

        <label>Turma:</label>
        <select name="turma_id" required>
            <option value="">Selecione uma turma</option>

            @foreach($turmas as $turma)
                <option value="{{ $turma->id }}">
                    Sala {{ $turma->numSala }} - {{ $turma->serie }}
                </option>
            @endforeach
        </select>
        <br><br>

        <input type="submit" value="Cadastrar">
    </form>

    @if($errors->any())
        <div style="color:red">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</body>
</html>