
<!DOCTYPE html>
<html lang="en">
<head>


</head>
<body>

    <Form method="POST">

    <label for="nombre">Ingrese su nombre</label>
    <input type="text" name="nombre">

    </Form>


    <?php

    /*Simula un formulario con variables $_POST que muestre un mensaje de saludo al usuario.*/

        Echo "Bienvenido " .$_POST["nombre"];

    ?>

</body>
</html>