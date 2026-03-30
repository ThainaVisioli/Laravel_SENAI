<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
      <h1>Relatório de produtos</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>QUANTIDADE</th>
                <th>PRECO</th>
                <th>Atualizar</th>
                <th>Deletar</th>
            </tr>
    </thead>
    <tbody>
        @forelse($produtos as $produto)
            <tr>
                <td>{{$produto->id}}</td>
                <td>{{$produto->nome}}</td>
                <td>{{$produto->quantidade}}</td>
                 <td>{{$produto->preco}}</td>
                <td>Faremos na próxima aula</td>
                <td>Faremos na próxima aula</td>
            </tr>
        
        @empty
            <tr> 
                <td colspan="3"> Nenhum produto encontrado</td>
            </tr>
        @endforelse
    </tbody>
</body>
</html>