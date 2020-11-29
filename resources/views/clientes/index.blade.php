<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.js" integrity="sha256-2JRzNxMJiS0aHOJjG+liqsEOuBb6++9cY4dSOyiijX4=" crossorigin="anonymous"></script>
    <title>clientes</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<h2>Lista de Processos </h2>

    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      <a href="{{ url('clientes/Novo') }}">Novo Cadastro</a>
      </li>
      <li class="nav-item">
      <a href="{{ url('processos_export') }}"class="btn btn-sm btn-primary">Baixar planilha</a>
      </li>
      <li class="nav-item dropdown">
        
      <form class="text-center" style="color: #757575;" action="{{url('processos_import')}}" enctype="multipart/form-data" method="POST">
                                @csrf
                                    <input type="file"  name="file" class="form-control" >
                                    <input type="submit"  class="form-control" value="upload">

                            </form>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0" method="get" action="{{url('/search')">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>

</nav>


<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12">
           
            


            <table class="table  table-sm" style="font-size: 0.8rem !important;">
                <thead class="thead-dark">
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
                    @foreach($clientes as $cliente)
                    <tr>
                        <th scope="row">{{ $cliente->id }}</th>
                        <td>{{ $cliente->nummeroProcesso }}</td>
                        <td>{{ $cliente->tribunal }}</td>
                        <td>{{ $cliente->comarca }}</td>
                        <td>{{ $cliente->orgao }}</td>
                        <td>{{ $cliente->autor }}</td>
                        <td>{{ $cliente->reu }}</td>
                        <td>{{ $cliente->estado }}</td>
                        
                        <td>{{ $cliente->status ? 'Finalizado' : 'Ativo'  }}</td>
                        <td>{{ $cliente->andamento }}</td>
                        <td>
                        <div class="row">
                            <div class="col">
                            <a href="{{ url('clientes/Ver', ['clientes' => $cliente->id]) }}" class="btn btn-sm btn-success"><i class="fas fa-search"></i></a>
                            </div>
                            <div class="col">
                            <a href="{{ url('clientes/Editar', ['clientes' => $cliente->id]) }}"class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                            </div>
                            <div class="col">
                            <a href="{{ url('clientes/Excluir', ['clientes' => $cliente->id]) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                            </div>
                        </div>
                          
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-md-12">
        {{$clientes ->links()}}
        </div>

    </div>
</div>

</body>
</html>