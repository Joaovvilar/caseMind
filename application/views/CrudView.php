<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>CRUD Mind</title>
  </head>

  <body>
   <!-- As a link -->
   <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">CRUD Case Mind</a>
    </nav>

    <!-- Esse container contém a tabela com os atributos -->
    <div class="container">
    <br>

        <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Cadastre-se
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cadastro</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            ...
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary">Salvar</button>
        </div>
        </div>
    </div>
    </div>
    <br>
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome Completo</th>
            <th scope="col">E-mail</th>
            <th scope="col">Senha</th>
            </tr>
        </thead>
            <tbody>
                <tr>
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td></td>
                </tr>
            </tbody>
    </table>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>