<?php 
    namespace Projeto\DAO;

    class Conexao{
        function conectar(){
            try{
                $conn = mysqli_connect('localhost', 'root','','ticketcinema');
                if($conn){
                    echo "<br> Conectado com sucesso!";
                    return $conn;
                }
                echo "<br> Algo deu errado!";
            }
            catch(Exception $erro){
                return "Algo deu errado!!<br><br> $erro";
            }
        }
    }
?>