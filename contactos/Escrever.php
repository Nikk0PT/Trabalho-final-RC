<!DOCTYPE HTML>
<html>
<head>
  <title>Form de registro</title>
  <style>

input{
  background-color: grey;
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
#input1{
  background-color: #33FF00;
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
td{
    font-size: 20px;
    font-weight: bold;
}
  body{
  
  background-image: url('background2.png');
}

form{
    position: absolute;
    top: calc(48% - 75px);
    left: calc(43% - 50px);
    height: 150px;
    width: 350px;
    z-index: 2;
    opacity: 100%;
}

div{
    position: absolute;
    top: calc(41% - 75px);
    left: calc(40% - 50px);
    opacity: 70%;
    width:500px;
    height:400px;
    background-color: green;


}
  </style>
</head>

<body>
<div>
</div>
 <form action="Insert.php" method="POST">
  <table>
   <tr>
    <td>Nome :</td>
    <td><input type="text" name="Nome" required></td>
   </tr>
   <tr>
    <td>Data de Nascimento :</td>
    <td><input type="date" name="DATA_NASC" required></td>
   </tr>
   <tr>
    <td>Telefone :</td>
    <td><input type="text" name="Telefone" required></td>
   </tr> 
   <tr>
    <td>Email :</td>
    <td><input type="email" name="Email" required></td>
   </tr>
   <tr>
    <td><input id="input1" type="submit" value="Submit"></td>
   </tr>
  </table>
 </form>

</body>
</html>
