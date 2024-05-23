<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/chat.css">
    <title>chat para contactarnos</title>
</head>
<body>
    <div id="contenedor">
        <div id="caja-chat">
            <div id="chat">
                <div id="datos-chat">
                    <span>jeny</span>
                    <span>hola</span>
                    <span>10:04pm</span>
                </div>
            </div>
        </div>
    </div>
    <form action="index.php" method="post">
        <input type="text" name="nombre" placeholder="ingresa tu nombre">
        <textarea name="mensaje"  cols="30" rows="5"></textarea>
        <input type="submit" name="enviar" value="enviar">
    </form>
</body> 
</html>