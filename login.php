<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">

    <!--Css do bootsstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

   

    <!--Ícones do bootsstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="css/style.css">

    
    <p></p>

    <script>
function entrar(){

  //redireciona pra a listagem
  
}

    </script>


</head>

<body >
  <a href="home.php">Voltar</a>
  <div class="container mt-4">
    <div class="row align-items-center">
      <div class="col-md-10 mx-auto col-lg-5">
     
    <main class="form-signin w-100 m-auto">
        <form class="p-4 p-md-5 border rounded-3 bg-ligth">
         
          <img class="img-fluid mb-3" id="cba" src="/home/est.psantos/Documentos/imagem.jpg" alt="70" width="150" height="150">
          
            
         
          <h1 class="h3 mb-3 fw-normal">Faça seu login</h1>
      
          <div class="form-floating">
            <input type="text" name="usuario" class="form-control mb-3" id="floatingInput" placeholder="seu Usuário" required>
            <label for="floatingInput" >Usuário</label>
          </div>
          <div class="form-floating">
            <input type="password" name="senha" class="form-control mb-3" id="floatingPassword" placeholder="Digite sua senha" required>
            <label for="floatingPassword">Senha</label>
          </div>
      
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Lembre de mim
            </label>
          </div>
          <button class="w-50 btn btn-lg btn-primary" type="submit" name="submit" value="enviar">Entrar</button>     
          <p class="mt-5 mb-3 text-muted">&copy; 2022–2023</p>
          <a href="recuperarsenha.html">Esqueci minha senha</a>
          <p></p>
          <a href="cadastro.php">Não tem cadastro? Cadastre-se Aqui </a>
        </form>
      </div>
    </div>
  </div>
  <script>
    window.alert('Por favor, faça seu login.' )
  </script>
      </main>
       <!--script do bootsstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
      
</body>

</html>