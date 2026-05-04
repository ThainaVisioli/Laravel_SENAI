<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Departamentos</title>
</head>
<body>

    <h1>Relatório de Departamentos</h1>

    <a href="{{ route('funcionario.cadastrar') }}">+ Cadastrar Novo Departamento</a>

    <br><br>

    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>SOBRENOME</th>
                <th>CARGO</th>
                <th>EMAIL</th>
                <th>DATA ADIMISSAO</th>
                <th>SALARIO</th>
                <th>ID DEPARTAMENTO</th>
                <th>ATUALIZAR</th>
                <th>DELETAR</th>
            </tr>
        </thead>

        <tbody>
            @forelse($funcionarios as $funcionario)
                <tr>
                    <td>{{ $funcionario->id }}</td>
                    <td>{{ $funcionario->nome }}</td>
                    <td>{{ $funcionario->sobrenome }}</td>
                    <td>{{ $funcionario->cargo }}</td>
                    <td>{{ $funcionario->email }}</td>
                    <td>{{ $funcionario->dataAdimissao }}</td>
                    <td>{{ $funcionario->salario }}</td>

                    <td>{{ $funcionario->departamento?->id ?? '-' }}</td>
                    <td>{{ $funcionario->departamento?->numDepartamento ?? '-' }}</td>

                    <td>
                        <a href="{{ route('funcionario.editar', $funcionario->id) }}">
                            Atualizar
                        </a>
                    </td>

                    <td>
                        <form action="{{ route('funcionario.deletar', $funcionario->id) }}" method="POST" onsubmit="return confirm('Deseja realmente excluir?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>

            @empty
                <tr>
                    <td colspan="8">Nenhum funcionario encontrado</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>