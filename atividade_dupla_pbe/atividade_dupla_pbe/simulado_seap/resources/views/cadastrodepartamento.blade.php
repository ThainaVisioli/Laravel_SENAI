<!DOCTYPE html>
<html lang="{{str_replace('_','-',app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Departamento</title>
</head>
<body>
    <h1>Cadastro Departamento</h1>

    @if(session('success'))
        <p style="color:green">{{ session('success')}}</p>
    @endif

    <form action="{{route('departamento.salvar')}}" method="POST">
        @csrf
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" placeholder="Nome" require value="{{old('nome')}}">
        <br><br>

         <label for="nome">Data Criação: </label>
        <input type="date" name="datacriacao" id="datacriacao" placeholder="datacriacao" require value="{{old('dataCriacao')}}">
        <br><br>
      

         <label for="nome">Orçamento: </label>
        <input type="number" name="orcamento" id="orcamento" placeholder="orcamento" require value="{{old('orcamento')}}">
        <br><br>

          <label for="nome">Sigla: </label>
        <input type="text" name="sigla" id="sigla" placeholder="sigla" require value="{{old('sigla')}}">
        <br><br>

        <input type="submit" value="Cadastrar">
    </form>

    @if($errors->any())
        <div style="color: red">
            <ul>
                @foreach ($errors->all() as $erroor)
                    <li>{{$errors}}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html>