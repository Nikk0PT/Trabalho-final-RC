<?php
         $servername = "localhost";
         $username = "root";
         $dbname = "contactos";
         $ID = $_POST["ID"];
         $NOME = $_POST["Nome"];
         $DataNasc = $_POST["DATA_NASC"];
         $Telefone = $_POST["Telefone"];
         $Email= $_POST["Email"];
       

         $conn = new mysqli ($servername, $username, null, $dbname);

         if ($conn->connect_error){
             die("Connection failed: ". $conn->connect_error);
         }

         $sql = "UPDATE usuarios SET NOME = '$NOME', DATA_NASC = '$DataNasc', Telefone = '$Telefone', Email = '$Email' WHERE ID = '$ID'";
       

         if($conn->query($sql) === TRUE){
             echo "Dados guardados com sucesso!";
         }else{
             echo"error:".$sql. "<br>".$conn->error;
         }
         $conn->close();

         header("Location:main.php");
    ?>
