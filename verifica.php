<?php
 
  $login=$_REQUEST["login"];
  $senha=$_REQUEST["senha"];
  $emailsenha=$_REQUEST["emailsenha"];
          
  if(($login==null)&& ($senha==null)){
     header('location:index.php?erro1'); 
  } else {
    header('location:Home.php');    
}
//VERIFICAÇÃO CADASTRO=============================

    


//verificação do ESQUECI MINHA SENHA!==================
if($emailsenha==null){
   header('location:index.php?erro1'); 
  } else {
      header('location:Home.php');   
}
?>
