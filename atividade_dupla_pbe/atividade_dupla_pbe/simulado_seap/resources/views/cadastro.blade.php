<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Cadastro Funcionarios</title>
</head>
<body>

    <h1>Cadastro Funcionarios</h1>

    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <form action="{{ route('funcionario.salvar') }}" method="POST">
        @csrf

        <label>Nome:</label>
        <input type="text" name="nome" required value="{{ old('nome') }}">
        <br><br>

              <label>Sobrenome:</label>
        <input type="sobrenome" name="sobrenome" required value="{{ old('sobrenome') }}">
        <br><br>

        <label>Cargo:</label>
        <input type="cargo" name="cargo" required value="{{ old('cargo') }}">
        <br><br>

         <label>E-mail:</label>
        <input type="email" name="email" required value="{{ old('email') }}">
        <br><br>

          <label>DataAdmissão:</label>
        <input type="dataAdmissao" name="dataAdmissao" required value="{{ old('dataAdmissao') }}">
        <br><br>

          <label>Salário:</label>
        <input type="salario" name="salario" required value="{{ old('salario') }}">
        <br><br>


        <label>Departamento:</label>
        <select name="departamento_id" required>
            <option value="">Selecione um departamento</option>

            @foreach($departamentos as $departamento)
                <option value="{{ $departamento->id }}">
                    Departamento {{ $departamento->departamento }} - {{ $departamento->nome }}
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