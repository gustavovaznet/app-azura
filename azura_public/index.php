<!DOCTYPE html>
  <html lang="pt-br">
    <head> 
      <title>Azura Sistemas</title>     
      <!-- META TAGS -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="author" content="Gustavo Vaz">
      <meta name="descryption" content="Sistema Web">
      <meta name="keywords" content="sistemas,web,tecnologia,software,suporte,ti">
      <meta name="robots" content="index,follow">
      <!-- CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <!-- CUSTOM -->
      <link rel="stylesheet" href="css/custom.css"> 
      <!-- ICON MATERIAL -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- FAVICON -->
      <link rel="icon" href="img/icon.png">     
    </head>
    <body>
      <!-- NAVBAR -->
      <div class="navbar-fixed">
      <nav class="purple lighten-2">
          <div class="nav-wrapper container">
            <a href="index.php" class="brand-logo"><img class="logo" src="img/logo.png"></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="#home">Login</a></li>
              <li><a href="#cadastro">Criar conta</a></li>
              <li><a href="#rodape">Contato</a></li>
            </ul>
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          </div>
        </nav>
        </div>
      <!-- SIDENAV -->
        <ul id="slide-out" class="sidenav">                     
           <li><a class="waves-effect sidenav-close" href="#home">Login</a></li>
           <li><a class="waves-effect sidenav-close" href="#cadastro">Criar conta</a></li>
           <li><a class="waves-effect sidenav-close" href="#rodape">Contato</a></li>
         </ul>
      <!-- HOME -->
        <section class="home block" id="home">
          <div class="row container">
            <div class="col s12 m6 l3">
              <div class="formm center-align">
                <img class="logo2" src="img/logo-black.png">
              <form action="login_controller.php?action=login" method="post">                     
                <div class="input-field">
                  <i class="material-icons prefix">email</i>
                  <input id="login" type="email" class="validate" name="email">
                  <label for="login">Email</label>
                </div>
                <div class="input-field">
                  <i class="material-icons prefix">https</i>
                  <input id="senha" type="password" class="validate" name="senha">
                  <label for="senha">Senha</label>                   
                </div>                               
                <button class="btn waves-effect waves-light purple lighten-2" onclick="M.toast({html: 'Favor digite um email e/ou senha válido(s)!'})">Entrar
                  <i class="material-icons right">send</i>
                </button>              
              </form>
            </div>
            </div>
          </div>
        </section>        
      <!-- REGISTER -->
        <section class="cadastro background-color1" id="cadastro">
          <div class="row container model">
            <div class="col s12 m6">
              <img src="img/man.png" class="hide-on-small-only pic-p">
            </div>
            <div class="col s12 m6">
              <h4 class="title">Cadastre-se aqui!</h4>
              <form class="formm" method="post" action="login_controller.php?action=register">
                <div class="input-field">
                  <i class="material-icons prefix">account_box</i>                  
                  <input id="nome-reg" type="text" class="validate" name="nome">
                  <label for="nome-reg">Nome*</label>
                </div>                                  
                <div class="input-field">
                  <i class="material-icons prefix">email</i>                  
                  <input id="login-reg" type="email" class="validate" name="email">
                  <label for="login-reg">Email*</label>
                </div>
                <div class="input-field">
                  <i class="material-icons prefix">https</i>                  
                  <input id="senha-reg" type="password" class="validate" name="senha">
                  <label for="senha-reg">Senha*</label>                   
                </div>
                <div class="input-field"> 
                  <i class="material-icons prefix">https</i>                 
                  <input id="conf-senha-reg" type="password" class="validate" name="confirma_senha">
                  <label for="conf-senha-reg">Confirmar senha*</label>
                  <span class="helper-text" data-error="wrong" data-success="right">* Campos obrigatórios</span>                   
                </div>
                <div class="center">                               
                <button class="btn waves-effect waves-light purple lighten-2" onclick="M.toast({html: 'Cadastro efetuado com sucesso!'})" type="submit" name="action">Cadastrar
                  <i class="material-icons right">check</i>
                </button>
                </div>              
              </form>
            </div>
          </div>
        </section>
      <!-- FOOTER -->
        <footer class="rodape background-color2 model" id="rodape">
          <div class="row container">            
            <div class="col s12 m3">
              <img src="img/logo.png" class="pic-tam">
              <h6 class="white-text">Azura Sistemas LTDA</h6>
              <p class="white-text">CNPJ: 99.888.000/0001-07</p>                      
            </div>
            <div class="row container">            
            <div class="col s12 m6">              
              <h6 class="white-text">Matriz SP</h6>
              <p class="white-text"> - Av. Paulista n° 2525 9° andar, São Paulo-SP</p>
              <p class="white-text"> - Fone: (11) 2255-2020</p>
              <p class="white-text"> - contato@azurasistemas.com</p><br>
              <h6 class="white-text">Filial PR</h6>
              <p class="white-text"> - Av. XV de novembro n° 25 4° andar, Curitiba-PR</p>
              <p class="white-text"> - Fone: (41) 5562-1000</p>
              <p class="white-text"> - contato.pr@azurasistemas.com</p><br>
              <h6 class="white-text">Central de Suporte Técnico</h6>              
              <p class="white-text"> - Fone: 0800 222 456 2000 </p>
            </div>            
            <div class="col s12 m3">              
              <img src="img/footer_one.png" class="pic-size2">
              <img src="img/footer_two.png" class="pic-size2">
              <img src="img/footer_three.png" class="pic-size2">
            </div>            
          </div>
          <hr class="hr-color">
          <p class="white-text center">Azura Sistemas - Todos os direitos reservados</p>
        </footer>         
      <!-- JQUERY -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <!-- JAVASCRIPT -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <!-- JQUERY CODE -->
      <script>        
        $(document).ready(function(){
          //SIDENAV 
            $('.sidenav').sidenav();
        });
      </script>
      <!-- PHP CODE -->
      <!-- TOAST INVALID -->
      <?php if(isset($_GET['status']) && $_GET['status'] == 'invalid'){ ?>      
          <script>
               M.toast({html: 'Favor digite um email e/ou senha válido(s)!'})         
          </script>
      <?php } ?>
      <!-- TOAST REGISTERED -->
      <?php if(isset($_GET['status']) && $_GET['status'] == 'registered'){ ?>      
          <script>
               M.toast({html: 'Cadastro efetuado com sucesso!'})         
          </script>
      <?php } ?>
      <!-- CAMPOS EMPTY -->
      <?php if(isset($_GET['status']) && $_GET['status'] == 'empty'){ ?>      
          <script>
               alert('Favor preencha todos os campos obrigatórios!*')         
          </script>
      <?php } ?> 
      <!-- CAMPOS REQUIRED -->
      <?php if(isset($_GET['status']) && $_GET['status'] == 'different'){ ?>      
          <script>
               alert('ERRO: Senhas não confirmam, tente fazer o cadastro novamente!')         
          </script>
      <?php } ?> 
      <!-- USUÁRIO EXIST -->
      <?php if(isset($_GET['status']) && $_GET['status'] == 'user_exist'){ ?>      
          <script>
               alert('ERRO: Email já cadastrado, usuário já possui uma conta ativa!')         
          </script>
      <?php } ?>       
    </body>
  </html>
