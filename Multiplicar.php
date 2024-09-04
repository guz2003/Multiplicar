<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLA DE MULTIPLICAR</title>
<p>
</head>
<body>
    <form action="" method="GET">
     <h1>TABLA DE MULTIPLICAR</h1>
      <label for="">Ingrese numero </label>
      <input type="text" name="numero" >
     <button type="submit">enviar </button>
        
    </form>
    <?php
    if (isset($_GET['numero'])){
    $numero = $_GET['numero'];

   }
?>
<table>
    <thead>
        <tr>
            <th>Numero</th>
            <th>Operador</th>
            <th>Numero</th>
            <th>Resultados</th>
        </tr>
    </thead>
    <tbody>
        <?php if (isset($numero)){
            for($i = 1; $i < 10; $i ++){
                echo "<tr>"."<td>".$numero." </td> <td>*</td><td>".$i."</td><td>".
                $numero*$i."</td></tr>";
            }
        }?>

    </tbody>
</table>
</p>

</html>