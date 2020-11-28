<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Deletar clientes</title>
</head>
<body>

<div class="container">
        <!-- Material form subscription -->
    <div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Deletar</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5">


            <p>delete os dados abaixo 
            </p>

            <form class="text-center" style="color: #757575;" action="{{route('excluir_produto', ['id'=> $clientes->id])}}"  method="post">

            @csrf

            <!-- Name -->
            <div class="md-form mt-3">
            <label for="NumProc">Tem certeza que deseja remover este Processo?</label>
                <input type="text" id="NumProc" name="nummeroProcesso" class="form-control" value="{{ $clientes->nummeroProcesso}}">
                
            </div>
            <br>
            <!-- E-mai -->
            <div class="md-form">
            <label for="tribunal">Tribunal</label>
                <input type="text" id="tribunal" name="tribunal" class="form-control" value="{{ $clientes->tribunal}}">
                
            </div>

            <br>
            <!-- E-mai -->
            <div class="md-form">
            <label for="comarca">Comarca</label>
                <input type="text" id="comarca" name="comarca" class="form-control" value="{{ $clientes->comarca}}">
               
            </div>
            <br>
            
            <!-- E-mai -->
            <div class="md-form">
            <label for="orgao">Orgão</label>
                <input type="text" id="orgao" name="orgao" class="form-control" value="{{ $clientes->orgao}}">
               
            </div>

            <br>
            <!-- E-mai -->
            <div class="md-form">
            <label for="autor">Autor</label>
                <input type="text" id="autor"  name="autor" class="form-control" value="{{ $clientes->autor}}">
               
            </div>
            <br>
            
            <!-- E-mai -->
            <div class="md-form">
            <label for="reu">Réu</label>
                <input type="text" id="reu"  name="reu" class="form-control" value="{{ $clientes->reu}}">
                
            </div>

            <br>
            <!-- E-mai -->
            <div class="md-form">
            <label for="estado">Estado</label>
                <input type="text" id="estado" name="estado" class="form-control" value="{{ $clientes->estado}}">
                
            </div>
            <br>
            
            

            
            <!-- Sign in button -->
            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect">Sim</button>
        </form>

    </div>





    </div>
</div>
<!-- Material form subscription -->
</body>
</html>