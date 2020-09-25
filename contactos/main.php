<!DOCTYPE html>
<html>
<head>
<title>Visualizar</title>
<style>
body{
  
  background-image: url('background.jpg');
}



#input1{
  background-color: green;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
  #input2{
  background-color: red;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  }
  #input3{
  background-color: blue;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
table {
  margin-left:auto; 
    margin-right:auto;
border-collapse: collapse;
width: 60%;
color: blue;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(n+2) {background-color: #f2f2f2;
    opacity: 70%;
}

.button1 {background-color: #4CAF50; position: relative; } /* verde */
.button2 {background-color: #008CBA;} /* azul */
.button3 {background-color: red;} /* vermelho */


</style>
</head>
<body>
<table>
<tr>
<th>ID</th>
<th>Nome</th>
<th>Data de Nascimento</th>
<th>Telefone</th>
<th>Email</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "contactos");
// Verificar conexão
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT ID_PESSOA, NOME, DATA_NASC, TELEFONE, EMAIL FROM usuarios";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// Colocar dados em cada linha/coluna
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["ID_PESSOA"]. "</td><td>" . $row["NOME"] . "</td><td>". $row["DATA_NASC"] . "</td><td>"
. $row["TELEFONE"] . "</td><td>". $row["EMAIL"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>

<form action="Escrever.php">
<input id="input1" type="submit" value="Adicionar">
</form>
<form action="Eliminar.php" method="post"> 
<input id="input2" type="submit" value="Eliminar">

<input type="text" name="ID">

</form>
<form action="Editar.php">
<input id="input3" type="submit" value="Editar">

</form>
</body>
</html>