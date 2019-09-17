<?php

class db{
    //host
    private $host = 'localhost';
    //usuario
    private $usuario = 'root';
     //senha
    private $senha = '';    
    //banco de dados
    private $database = 'reservabd';
    public function conecta_mysql() {
    //criar conexão
    $con = mysql_conect($this ->host, $this ->usuario, $this ->senha, $this ->database );
    mysqli_set_charset($con, 'utf8');
        
    if (mysql_conect_erro()){
    echo 'Erro ao tentar se conectar com o BD mysql:' . mysqli_connect_error();
    return $con;
        }
    } 
}
?>
