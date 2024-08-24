<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  
  <link rel="stylesheet" href="style.css">

  <style>
    body, html {
      height: 100%;
      margin: 0;
      overflow: hidden;
    }
    .video-background {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -2;
    }
    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5); /* Cor preta com 50% de opacidade */
      z-index: -1;
    }
    .content-wrapper {
      position: relative;
      z-index: 1;
      height: 100vh;
    }
    .form-control-transparent {
      background-color: rgba(255, 255, 255, 0.8); /* Branco com 80% de opacidade */
      border-radius: 25px;
      border: 1px solid #ccc;
    }
  </style>
</head>

<body>

  <video autoplay muted loop class="video-background">
    <source src="FotosTerceirão/videos/panteralogin.mp4" type="video/mp4">
  </video>

  <div class="overlay"></div>

  <div class="content-wrapper">
    <!-- Seção que ocupa toda a altura da tela (100vh) -->
    <section class="vh-100">
      <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
          <!-- Coluna para a imagem à esquerda -->
          <div class="col-md-8 col-lg-7 col-xl-6">
            <img src="pantera.png" class="img-fluid" alt="Phone image" height="300px" width="600px">
          </div>
          <!-- Coluna para o formulário de login à direita -->
          <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
            <!-- Formulário de login -->
            <form action="login.php" method="post">
              <p class="text-center h1 fw-bold mb-4 mx-1 mx-md-3 mt-3">Login</p>
              
              <!-- Campo de entrada para o email/username -->
              <div class="form-outline mb-4">
                <label class="form-label" for="form1Example13">
                  <i class="bi bi-person-circle"></i> Email
                </label>
                <input type="email" id="form1Example13" class="form-control form-control-lg form-control-transparent py-3" name="username" 
                       autocomplete="off" placeholder="Digite seu email" />
              </div>

              <!-- Campo de entrada para a senha -->
              <div class="form-outline mb-4">
                <label class="form-label" for="form1Example23">
                  <i class="bi bi-chat-left-dots-fill"></i> Senha
                </label>
                <input type="password" id="form1Example23" class="form-control form-control-lg form-control-transparent py-3" name="password" 
                       autocomplete="off" placeholder="Digite sua Senha" />
              </div>

              <!-- Botão de envio do formulário -->
              <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                <input type="submit" value="Entrar" name="login" 
                       class="btn btn-dark btn-lg text-light my-2 py-3" 
                       style="width:100%; border-radius: 30px; font-weight:600;" />
              </div>

            </form><br>
            <!-- Link para a página de registro -->
            <p align="center">
              Ainda não tem conta?
              <a href="register.php" class="text-black" style="font-weight:600;text-decoration:none;">Cadastre Aqui!</a>
            </p>
          </div>
        </div>
      </div>
    </section>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" 
          integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" 
          integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
