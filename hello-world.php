<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
</head>
<body>
    <?php            
        for ($x = 0; $x <=10 ; $x++){
            echo "The number is: $x <br />";
        }
    ?> 
    <br>
    <br> 

<form method="post" action="processForm.php" onsubmit="return validateForm();">
        <div class="form-group">
            <label for="name">Nombre: </label>
            <input id="name" class="form-control" placeholder="Ingrese el nombre" name="nombre" type="text"
                onchange="changeInput();" required minlength="5" maxlength="30">
        </div>
        <div class="form-group">
            <label for="age">Edad: </label>
            <input id="age" class="form-control" placeholder="Ingrese la edad" name="edad" type="text"
                onchange="changeInput();">
        </div>
        <div class="form-group">
            <label for="address">Dirección: </label>
            <input id="address" class="form-control" placeholder="Ingrese la dirección" name="dirección" type="text"
                onchange="changeInput();" required pattern="[A-Za-z ]+">
        </div>
        <div class="form-group">
            <label for="email">Email: </label>
            <input id="email" class="form-control" placeholder="Ingrese el correo electronico" onkeydown="onKeyDown();"
                name="correo" type="email">
        </div>
        <div class="form-group">
            <label for="comentario">Comentario: </label>
            <textarea id="comentario" class="form-control" placeholder="Ingrese el comentario" name="comentario"
                cols="23" rows="3"></textarea>
        </div>
        <br />
        <div>
            <input type="submit" value="Enviar" class="btn btn-secondary">
        </div>
    </form>
    <script>
        function validateForm(params) {
            var inputAge = document.getElementById("age");
            if (isNaN(inputAge.value) || inputAge.value < 0 || inputAge.value > 100) {
                return false;;
            }
        }
    </script>
</body>
</html>