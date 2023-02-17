<?php



    if(isset($_POST['submit'])) 
    {
  
      echo 'passo1'; 
      include_once('connect.php');


        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $data_nasc = $_POST['data_nascimento'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        
        
        echo 'passo2'; 
      

        $result = pg_query ($connection, "INSERT INTO tb_usuario(nomeusuario,emailusuario,dtnascimento,cpf,telefone,login,senha) 
        VALUES ('$nome','$email','$data_nasc','$cpf','$telefone','$usuario','$senha')");
        
        echo 'passo3'; 
        
        header('Location: login.php');
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

   

    <!--Css do bootsstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

   

    <!--Ícones do bootsstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    
 

    
    <p></p>



</head>

<body >
<form action="cadastro.php" method="POST">
  <a href="home.php">Voltar</a>
  <div class="container mt-4">
    <div class="row align-items-center">
      <div class="col-md-10 mx-auto col-lg-5">
     
    <main class="form-signin w-100 m-auto">
        <form class="p-4 p-md-5 border rounded-3 bg-ligth">
         
    
          
            
         
          <h1 class="h3 mb-3 fw-normal">Cadastro</h1>
      
          <div class="form-floating">
            <input type="text" name="nome" maxlength="60" minlength="5" class="form-control mb-3" id="floatingInput" placeholder="seu Usuário" required>
            <label for="floatingInput" >Nome completo</label>
          </div>
          <div class="form-floating">
            <input type="number" name="cpf" class="form-control mb-3" id="floatingPassword" placeholder="Digite sua senha" required>
            <label for="floatingPassword">CPF</label>
          </div>

		  <div class="form-floating">
            <input type="date" name="data_nascimento" class="form-control mb-3" id="floatingPInput" required>
            <label for="floatingdat">Data de nascimento</label>
          </div>

		  <div class="form-floating">
            <input type="email" name="email" class="form-control mb-3" id="floatingInput" required>
            <label for="floatingInput">Email</label>
          </div>

		  <div class="form-floating">
            <input type="tel" name="telefone" class="form-control mb-3" id="floatingInput" required>
            <label for="floatingInput">Telefone</label>
          </div>

		  <div class="form-floating">
            <input type="text" name="usuario" maxlength="40" minlength="4" class="form-control mb-3" id="floatingInput" required>
            <label for="floatingInput">Usuário</label>
          </div>

		  <div class="form-floating">
            <input type="password" name="senha" minlength="8" class="form-control mb-3" id="floatingPassword" required>
            <label for="floatingPassword">Senha</label>
          </div>

   
          <input class="w-50 btn btn-lg btn-primary" type="submit" name="submit" id="submit">  
          <p class="mt-5 mb-3 text-muted">&copy; 2022–2023</p>
          <p></p>
          <a href="login.php">Já fez seu cadastro? Faça seu login </a>
        </form>
      </div>
    </div>
  </div>
      </main>
       <!--script do bootsstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
      
</body>

</html>