<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Cliente</title>
    </head>
    <body>
        <div class="container">
            <h1>Editar Cliente</h1>
            <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" value="{{ $cliente->nome }}">
                </div>
                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="number" name="cpf" value="{{ $cliente->cpf }}">
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="number" name="telefone" value="{{ $cliente->telefone }}">
                </div>
                <div class="form-group">
                    <label for="sexo">Sexo:</label>
                    <input type="text" name="sexo" value="{{ $cliente->sexo }}">
                </div>
                <div class="form-group">
                <label for="endereco_id">Endereco</label>
                <select class="form-control" name="endereco_id" required>
                    <option value="">Selecione um endereco </option>
                    @foreach($enderecos as $endereco)
                        <option value="{{ $endereco->id }}" {{ $endereco->id == $cliente->endereco_id ? 'selected' : ''}}>{{ $endereco->cidade}}</option>
                    @endforeach
                </select>
                </div>
                <div class="form-group">
                <label for="pedido_id">Pedido</label>
                <select class="form-control" name="pedido_id" required>
                    <option value="">Selecione um Pedido</option>
                    @foreach($pedidos as $pedido)
                        <option value="{{ $pedido->id }}" {{ $pedido->id == $cliente->pedido_id ? 'selected' : ''}}>{{ $pedido->id}}</option>
                    @endforeach
                </select>
                </div>
                <button type="submit" class="btn btn-success">Salvar Alterações</button>
                <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</x-app-layout>
