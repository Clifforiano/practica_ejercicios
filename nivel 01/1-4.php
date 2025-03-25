//nivel 1

<?php

    /*Declara tres variables: nombre, edad y ciudad, y muéstralas en pantalla con echo.*/

    $nombre = 'Juan';
    $edad = '18';
    $ciudad = 'Concepcion';

    echo "$nombre $edad $ciudad";

?>

<?php

    /*Crea una función que reciba una edad y devuelva si es mayor o menor de edad.*/
    $edad = 14;

    if ($edad>=18){
        
        echo "Es mayor de edad";

    }
    else{

        echo "Es menor de edad";
    }

?>

<?php

    /*- Crea un array de 5 frutas y muestra cada una con un foreach.*/ 
 
    $frutas = array('pera','manzana','platano','tomate','pepino');
    foreach($frutas as $fruta)
    {

        echo "$fruta";

    }

?>

<?php

    /*- Escribe un programa que recorra los números del 1 al 50 e indique si son pares o impares.*/

    for($contador = 1; $contador <=50; $contador++){


        if($contador%2==0){

            echo "$contador es par \n";
        }

        else {

            echo "$contador es impar \n";

        }


    }

?>


<?php

    echo 'Ingrese su nombre';
    $nombre = 'juanito';

    $_POST['$nombre'];

?>