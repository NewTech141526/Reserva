<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         <link rel="stylesheet" type="text/css" href="css/EstiloH.css">
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>
    <script type="text/javascript"  src="SPA.js"></script>
    </head>
    <body  ng-spa="Spa">
       <nav class="navbar navbar-dark bg-primary">
           <a class="navbar-brand" href="#" id="nav">
     <img src="img/logo.png" width="64" height="64" class="d-inline-block align-top" >
   
  </a>
  <p>Reaserva aí</p>
<input type="checkbox" id="check">
  <label id="icone" for="check"><img src="img/icone.png" ></label>
  
</nav>

<div class="menu">
<nav >
        <h3>ETE Gil Rodrigues </h3>
        
  <ul> 
      
      <li><a href="/p1">Cadastrar professores</a></li>
      <li><a href="/p2">Criar horários</a></li>
      <li><a href="/p3">Verificar reservas</a></li>
  </ul>
        
</nav>
</div>
        
            
            <div ng-view> </div>
       
    </body>
</html>
