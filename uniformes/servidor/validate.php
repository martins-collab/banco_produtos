<?php 

 include("banco.php");

 $nome_comprador = $_POST['nome_comprador']; #text
 $nome_uniforme = $_POST['nome_uniforme']; #text
 $cargo = $_POST['cargo']; #text
 $data_compra = $_POST['data']; #date
 $tamanho_uniforme = $_POST['tamanho_uniforme']; #select

 $btn = $_POST['btn'];

 if(strlen($nome_comprador) > 3){
   mysqli_query($conexao, "INSERT INTO uniforme(nome_comprador) VALUES('$nome_comprador')");
    echo "<script>window.location.replace('../formulario/index.php');</script>";

      if($nome_uniforme){
         mysqli_query($conexao, "UPDATE uniforme SET nome_uniforme = '$nome_uniforme' WHERE nome_comprador = '$nome_comprador'");
          echo "<script>window.location.replace('../formulario/index.php');</script>";

         if($cargo){
            mysqli_query($conexao, "UPDATE uniforme SET cargo = '$cargo' WHERE nome_comprador = '$nome_comprador'");
             echo "<script>window.location.replace('../formulario/index.php');</script>";

            if($data_compra){
               mysqli_query($conexao, "UPDATE uniforme SET data_compra = '$data_compra' WHERE nome_comprador = '$nome_comprador'");
                echo "<script>window.location.replace('../formulario/index.php');</script>";

               if($tamanho_uniforme){
                  mysqli_query($conexao, "UPDATE uniforme SET tamanho_uniforme = '$tamanho_uniforme' WHERE nome_comprador = '$nome_comprador'");
                  echo "<script>window.location.replace('../formulario/index.php');</script>";
               }

               else{
                  mysqli_query($conexao, "DELETE FROM uniforme WHERE uniforme.nome_comprador = '$nome_comprador'");
                  
              }
            }
            else{
               mysqli_query($conexao, "DELETE FROM uniforme WHERE uniforme.nome_uniforme = '$nome_uniforme'");
               
           }
         }
           else{
            mysqli_query($conexao, "DELETE FROM uniforme WHERE uniforme.cargo = '$cargo'");
            
        }
      }
        else{
         mysqli_query($conexao, "DELETE FROM uniforme WHERE uniforme.data_compra = '$data_compra'");
         
     }
   }
   else{
      mysqli_query($conexao, "DELETE FROM uniforme WHERE uniforme.tamanho_uniforme = '$tamanho_uniforme'");
      
  }
      
 



