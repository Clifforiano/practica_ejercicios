<?php

    /*
    - Crea una clase Producto con propiedades: nombre, precio y stock.
    - Agrega un método mostrarInfo() que devuelva los datos del producto en una frase.
    - Instancia 2 productos y usa mostrarInfo() para ver sus datos.
    - Agrega un método comprar($cantidad) que reste al stock la cantidad indicada, y muestre un mensaje de éxito o error si no hay stock suficiente.
    - Haz una pequeña simulación en consola (o navegador) con varias compras.
        
    */ 

    class producto
    {

        public $nombre;
        public $precio;
        public $stock;

        public function __construct($nombre, $precio, $stock)
        {
            $this->nombre = $nombre;
            $this->precio = $precio;
            $this->stock = $stock;
        }


        public function mostrarInfo(){

            echo "El producto es: " . $this->nombre ." con un precio de $" . $this->precio  ." ademas el stock es " . $this->stock ."un" ."<br>";

        }

        public function comprar($cantidad){

            if ($this->stock < $cantidad){

                echo "Error no hay suficiente stock solo quedan: ". $this->stock. "un" . "<br>";

            }

            else{

                $this->stock = $this->stock - $cantidad;
                echo "Su compra fue realizada con exito" . "<br>";

            }

        }

    }

    $producto1 = new producto("cereal", 1000, 100);
    $producto2 = new producto("papas fritas", 1500, 12);

    $producto1->mostrarInfo();
    $producto2->mostrarInfo();

    $producto1->comprar(50);
    $producto1->comprar(10); 
    $producto1->comprar(30); 
    $producto1->comprar(500);
    $producto1->comprar(10); 
    $producto1->comprar(10); 

?>


