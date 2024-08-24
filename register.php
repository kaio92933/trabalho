<!doctype html>
<html lang="en">

<head>
  <title>Register</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  
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
    <!-- Seção que ocupa toda a altura da tela com fundo cinza claro (#eee) -->
    <section class="vh-100">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-lg-12 col-xl-11">
            <!-- Cartão com bordas arredondadas -->
            <div class="card text-black" style="border-radius: 25px;">
              <div class="card-body p-md-2">
                <div class="row justify-content-center">
                  <!-- Título do formulário de registro -->
                  <p class="text-center h1 fw-bold mb-4 mx-1 mx-md-3 mt-3">Sign up</p>
                  
                  <!-- Coluna com o formulário de registro -->
                  <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                    <!-- Formulário de registro -->
                    <form class="mx-1 mx-md-4" action="add.php" method="post">
                      
                      <!-- Campo de entrada para o nome -->
                      <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                          <label class="form-label" for="form3Example1c">
                            <i class="bi bi-person-circle"></i> Nome
                          </label>
                          <input type="text" id="form3Example1c" class="form-control form-control-lg form-control-transparent py-3" 
                                 name="name" autocomplete="off" placeholder="Coloque um Nome" />
                        </div>
                      </div>

                      <!-- Campo de entrada para o email -->
                      <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                          <label class="form-label" for="form3Example3c">
                            <i class="bi bi-envelope-at-fill"></i> Email
                          </label>
                          <input type="email" id="form3Example3c" class="form-control form-control-lg form-control-transparent py-3" 
                                 name="username" autocomplete="off" placeholder="Coloque um Email" />
                        </div>
                      </div>

                      <!-- Campo de entrada para a senha -->
                      <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                          <label class="form-label" for="form3Example4c">
                            <i class="bi bi-chat-left-dots-fill"></i> Senha
                          </label>
                          <input type="password" id="form3Example4c" class="form-control form-control-lg form-control-transparent py-3" 
                                 name="password" autocomplete="off" placeholder="Crie uma Senha" />
                        </div>
                      </div>

                      <!-- Botão de envio do formulário de registro -->
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <input type="submit" value="Register" name="register" 
                             class="btn btn-warning btn-lg text-light my-2 py-3" 
                             style="width:100%; border-radius: 30px; font-weight:600;" />
                    </div>

                  </form>

                    </form>
                    
                    <!-- Link para a página de login -->
                    <p align="center">
                      Ja Tem Conta? 
                      <a href="index.php" class="text-warning" style="font-weight:600; text-decoration:none;">Entre Aqui!</a>
                    </p>
                  </div>
                  
                  <!-- Coluna com a imagem de registro -->
<div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center justify-content-center order-1 order-lg-2">
    <img src="pantera.png" class="img-fluid" alt="center image" height="300px" width="500px">
</div>


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Bibliotecas JavaScript do Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" 
          integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" 
          integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
