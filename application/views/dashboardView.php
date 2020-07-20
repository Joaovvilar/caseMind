<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>h1 {text-align: center;}</style>
    <title>Dashboard</title>
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 
      <?php if($this->session->flashdata("success")) : ?>
        <p><?php $this->session->flashdata("sucess") ?></p>
      <?php endif ?>

      
      <?php if($this->session->flashdata("danger")) : ?>
        <p><?php $this->session->flashdata("danger") ?></p>
        <?php endif ?>


        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/index.php/dashboardController/">Case Mind - Dashboard: Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
              <li class="nav-item active">
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Inserir</a>
                  <a class="dropdown-item" href="#">Atualizar</a>
                  <a class="dropdown-item" href="#">Deletar</a>
                  </div>
              </li>
              </ul>
          </div>
        </nav>
        <br>


<div class='container'>
        <h1>Usuários</h1>
        <!-- Tabelinha de cima para exibir as informações -->
        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">CPF</th>
      <th scope="col">E-mail</th>
      <th scope="col">Senha</th>
      <th scope="col">Acesso</th>
      <th scopt="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <!-- Aqui são exibidos os dados-->
  <?php foreach($result as $row) {?>
    <tr> 
      <th scope="row"><?php echo $row->id; ?></th>
      <td><?php echo $row->nome; ?></td>
      <td><?php echo $row->cpf; ?></td>
      <td><?php echo $row->email; ?></td>
      <td><?php echo $row->senha; ?></td>
      <td><?php echo $row->acesso; ?></td>
      <td><a href="<?php echo site_url('/index.php/dashboardController/edit/'.$row->id);?>">Editar</a>
       | <a href="<?php echo site_url('/index.php/dashboardController/delete/'.$row->id);?> ">Deletar</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>

  </body>
</html>