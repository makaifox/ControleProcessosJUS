<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>clientes</title>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2>Listagem de Tarefas <a href="{{ url('clientes/Novo') }}">Novo Cadastro</a></h2>
            <a
                                href="{{ url('processos_export') }}"
                                class="btn btn-sm btn-primary">
                                Baixar planilha
                            </a>
                            <form class="text-center" style="color: #757575;" action="{{url('processos_import')}}" enctype="multipart/form-data" method="post">
                           
                            <input type="file" id="file" name="import" class="form-control" >
                            <input type="submit" id="finish" name="import" class="form-control" >

                            </form>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Número de Processo</th>
                        <th scope="col">Tribunal</th>
                        <th scope="col">Comarca</th>
                        <th scope="col">Órgão</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Réu</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Status</th>
                        <th scope="col">Andamento</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($clientes as $clientes)
                    <tr>
                        <th scope="row">{{ $clientes->id }}</th>
                        <td>{{ $clientes->nummeroProcesso }}</td>
                        <td>{{ $clientes->tribunal }}</td>
                        <td>{{ $clientes->comarca }}</td>
                        <td>{{ $clientes->orgao }}</td>
                        <td>{{ $clientes->autor }}</td>
                        <td>{{ $clientes->reu }}</td>
                        <td>{{ $clientes->estado }}</td>
                        
                        <td>{{ $clientes->status ? 'Finalizado' : 'Ativo'  }}</td>
                        <td>{{ $clientes->estado }}</td>
                        <td>
                            <a href="{{ url('clientes/Ver', ['clientes' => $clientes->id]) }}" class="btn btn-sm btn-primary">Ver</a>
                            <a
                                href="{{ url('clientes/Editar', ['clientes' => $clientes->id]) }}"
                                class="btn btn-sm btn-primary">
                                Editar
                            </a>
                            <a
                                href="{{ url('clientes/Excluir', ['clientes' => $clientes->id]) }}"
                                class="btn btn-sm btn-danger">
                                Excluir
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-md-12">
           
        </div>

    </div>
</div>

</body>
</html>