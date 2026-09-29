<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<script>
   fetch('datos.php')
     .then((response) => response.json())
     .then((data) => console.log(data))

    </script>
    <form action="datos.php" method = "GET">
        <label for="pais">Ponga el nombre del pais</label>
        <input type = "text" id = "pais" name="pais" required>

        <button type= "sumbit" onclick=enviarDatos(event)>Enviar</button>
    </form>



</body>
</html>