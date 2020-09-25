<?php
         $servername = "localhost";
         $username = "root";
         $dbname = "contactos";
         $NOME = $_POST["Nome"];
         $DataNasc = $_POST["DATA_NASC"];
         $Telefone = $_POST["Telefone"];
         $Email= $_POST["Email"];
       

         $conn = new mysqli ($servername, $username, null, $dbname);

         if ($conn->connect_error){
             die("Connection failed: ". $conn->connect_error);
         }

         $sql = "INSERT INTO usuarios (NOME, DATA_NASC, TELEFONE, EMAIL) VALUES ('$NOME', '$DataNasc', '$Telefone', '$Email')";

         if($conn->query($sql) === TRUE){
             echo "Dados inseridos com sucesso!";
         }else{
             echo"error:".$sql. "<br>".$conn->error;
         }
         $conn->close();

         header("Location:main.php");
    ?>