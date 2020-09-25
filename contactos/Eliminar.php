
<?php


         $servername = "localhost";
         $username = "root";
         $dbname = "contactos";
         $ID = $_POST["ID"];
         
       

         $conn = new mysqli ($servername, $username, null, $dbname);

         if ($conn->connect_error){
             die("Connection failed: ". $conn->connect_error);
         }

         $sql = "DELETE FROM usuarios WHERE ID_PESSOA = '$ID' ";

         if($conn->query($sql) === TRUE){
             echo "Dados inseridos com sucesso!";
         }else{
             echo"error:".$sql. "<br>".$conn->error;
         }
         $conn->close();

         header("Location:main.php");
    ?>

    