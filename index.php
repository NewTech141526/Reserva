<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>ReservaAi.com</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/Estilo.css"
    </head>
    <body>
        <nav>
            <div class="conatainer">
                
                <div class="jumbotron"  id="jub"style="background-color:#0066CB" >
                    <h1 id="intro">Reserva Aí</h1>              
                </div>
               </div>
        </nav>
        
        
        
        <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto" >
        <div class="card card-signin my-5"   >
            <div class="card-body" >
            <h5 id="login" class="card-title">Login</h5>
            <form class="form-signin"  action="verifica.php" method="post" >
            
                <p><input type="text" id="usuario" name="login" class="form-control" style="background-color:whitesmoke" placeholder="Digite seu Usuario" required autofocus></p>
           
                <p>   <input type="password" id="senha" name="senha" class="form-control" style="background-color:whitesmoke" placeholder="Digite Sua Senha" required></p>
               
              </div>

              
               
            <a href="#" class="card-link" data-toggle="modal" data-target="#ExemploModalCentralizado" style="color:whitesmoke " id="al">Cadastrar-se?</a>
                <button id="btentrar"  type="submit" >Entrar</button>
                 
                
              <hr class="my-4" id="cl">
              
              <a href="#" class="card-link" data-toggle="modal" data-target="#EsqueceuSenha" style="color:whitesmoke"  id="esqueceu">Esqueceu Sua Senha?</a>
              <br>
                 </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
        
         <!-- Modal  Cadastrar-->
<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Cadastre-se</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
          <form  action="verifica.php" method="POST">
  <div class="form-group">
      <label for="nome">Digite o nome da Instituição:</label>
    <input type="text" class="form-control" id="nome"  placeholder="Nome da Instituição">
  </div>
             <div class="form-group">
    <label for="email">Digite Email da Instituição:</label>
    <input type="email" class="form-control" id="email" placeholder="Digite o Email">
  </div>
            <div class="form-group">
    <label for="cnpj">Digite o CNPJ da Instituição:  </label>
    <input type="text" class="form-control" id="cnpj" placeholder="Digite o CNPJ">
  </div>
            <div class="form-group">
    <label for="telefone">Digite o Telefone de Contato da Instituição:  </label>
    <input type="tel" class="form-control" id="telefone" placeholder="Digite o Telefone">
  </div>
     <div class="form-group">
    <label for="login">Digite o nome de Usuário:</label>
    <input type="text" class="form-control" id="usuariocad" placeholder="Digite o Usuário">
  </div>        
  <div class="form-group">
    <label for="senha">Digite sua Senha:</label>
    <input type="password" name="senhacad" class="form-control" id="senhacad" placeholder="Digite a Senha">
  </div> 
  <div class="form-group">
    <label for="conf_senha">Confirme sua Senha:</label>
    <input type="password" class="form-control" name="confsenha" id="confsenha" placeholder="Confirme a Senha">
       
              
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Cadastrar</button> 
      </div>
          </form>        
     </div>    
    </div>
  </div>
</div> 

<!-- |============================================================================================================    -->    
      <!-- MOdal ESQUECEU SENHA   -->   
        
  <div class="modal fade" id="EsqueceuSenha" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Esqueci minha Senha!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
          <form  action="verifica.php" method="Post">
  <div class="form-group">
      <p>Enviaremos uma nova Senha para o Email Digitado:</p>
             <div class="form-group">
    <label for="email">Digite o Email desejado:</label>
    <input type="email" name="emailsenha" class="form-control" id="emailsenha" placeholder="Digite o Email">
  </div>
           
        
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit"  class="btn btn-primary" >Enviar</button>
     </form>  
      </div>
              
    </div>
  </div>
</div>        
        
         
         
         
         
         
         
         
         
         
         
         
         
         
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>