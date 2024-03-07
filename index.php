<?php
//Crear objeto
//Crear un array
$platillo = [
  "Nombre" => "Sushi",
  "Precio" => 150,
  "Porcion" => "Dos personas",
  "Origen del plato" => "Japon",
  "Ingredientes" => "Arroz,alga,camaron queso philadelfia",
  "Tiempo de preparacion" => "20min",
  "Dias que se sirve" => "Lunes,Miercoles,Viernes,Sabado y Domingo",
  "Bebida de acompañamiento" => "Te helado",
  "Mesero" => "Natalia",
  "Calidad de los ingredientes" => "Frescos",
  "Presentacion" => "Dos rollos cortados en partes iguales",
  "Salsas" => "Soja",
  "Cubiertos" => "Palillos",
  "Orden para" => "Llevar",
  "Tamaño" => "Mediano",
  "Tipo de preparacion" => "Enrollado con Makiso",
  "Acompañamientos" => "Aderezo y wasabi",
  "Menu" => "Menu con gran variedad",
  "Pedido para" => "Pacheco",
  "Nombre del restaurante" => "El lince",
  ];
//Se crea el arrelgo
$platillo2 = [
  "Nombre" => "Hamburguesa",
  "Precio" => $80,
  "Porcion" => "Individual",
  "Ingredientes" => "Pan,carne,queso,tomate,pepinillos,lechuga y cebolla",
  "Peso" => 500gr,
  "Tiempo de preparacion" => "30min",
  "Tamaño de la bebida" => $450,
  "Dias que se sirve" => "Lunes a domingo",
  "Mesero" => "Yofran",
  "Presentacion" => "Servida en tabla de madera",
  "Salsas" => "Captsu",
  "Cubiertos inlcuidos" => false,
  "Orden para" => "Comer en el restaurante",
  "Tamaño" => "Mediano",
  "Acompañamientos" => "Papas fritas",
  "Termino" => 3.5
  "Tipo de pan" => "Integral",
  "Pedido para" => "Alejandro",
  "Comida en buen estado => true,
  "el platillo es pizza" => false,
  //Finalmente se cierra la variable con "[;"
  ];

  $platillo3 = [
  "nombre" => "mole",
  "color" => "cafe",
  "precio" => $70,
  "de donde es originario" => "mexico",
  "ingredientes" =>"pollo,cacao,jitomate,ajo,cebolla,almendras,nueces,pasas,pimienta,clavo y chile ancho",
  "porcion" =>"una persona",
  "nombre del mesero" => "yuliana",
  "edad" => 17,
  "altura" => 1.59,
  "calidad de los ingredientes" => "frescos",
  "el platillo fue para llevar" => true,
  "higiene de la comida" => "la comida es higienica",
  "mole de vainilla" => false,
  "tipo de preparacion" => "se vierte el caldo en el pollo",
  "acompañamientos extras" => "salsa",
  "tamaño" => "mediano",
  "tiempo de preparacion" => "1hr y 30min";
  "variedad de platillos" => true,
  "bebida de acompañamiento" => "coca cola o vino",
  "nombre del restaurante" => "mexico en tu casa"];
  //variable que une los arreglos
  $platillos = [
    $platillo,
    $platillo2,
    $platillo3,
    ];
   //se ejecuta la condicion con la variable entre comillas
echo json_encode($platillos);


  
  
  










  
