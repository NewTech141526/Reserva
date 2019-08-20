<?php
 
  $login=$_REQUEST["login"];
  $senha=$_REQUEST["senha"];
  
  if(isset($login)&& isset($senha)&& $login=="top"){
      header('location:Home.php');
  } else {
   header('location:index.php?erro1');    
}

?>

