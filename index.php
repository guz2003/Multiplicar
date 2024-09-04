<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Y POST</title>
</head>
<body>
<form action="" method="GET">
<h1>suma de 2 numeros</h1>
<p>
    <label for="">ingrese numero 1</label>
    <input type="text" name="n1" 
    value = <?php if (isset($_GET['n1'])){ echo $_GET['n1'];}?>>
</p>
<p>
<label for="">ingrese numero 2</label>
    <input type="text" name="n2" value=0>
</p>
    <button type="submit">
        enviar
    </button>
    </form>
    <?php
    if (isset($_GET['n1'])){
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $suma = $n1+$n2;
    echo "<p> la suma es:".$suma."</p";
}
    ?>
</body>
</html>