<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sing up</title>
</head>
<body>
    
    <?php include './includes/header.php'; ?>
    <h1> HTML FORM </h1>

    <form id="registro"  action ="" method="">
        <label class="presentacion__contenido__texto" for=" nombre">Primer nombre:</label><br>
        <input class="espacio__para__escribir" type="text" id="nombre" name="nombre" placeholder="Ingrese su primer nombre" required><br><br>

        <label class="presentacion__contenido__texto" for=" nombre">Apellidos:</label><br>
        <input class="espacio__para__escribir" type="text" id="nombre" name="nombre" placeholder="Ingrese apellido"  required><br><br>


        <label class="presentacion__contenido__texto" for="email">Correo Electrónico:</label><br>
        <input class="espacio__para__escribir" type="email" id="email" name="email" placeholder="Ingrese su email" required><br><br>

        <label class="presentacion__contenido__texto" for="email">Contraseña:</label><br>
        <input class="espacio__para__escribir" type="password" id="password" name="password" placeholder="Ingrese su contraseña" required><br><br>
        
        <label class="presentacion__contenido__texto" for="mensaje">Mensaje:</label><br>
        <textarea class="espacio__para__escribir" id="mensaje" name="mensaje" rows="4" required></textarea><br><br>

        <button type="submit"  value="Enviar" class= "boton__de__envio" > enviar </button>
    </form>   

    
  
</body>

      <?php include './includes/footer.php'; ?>
    
</html>