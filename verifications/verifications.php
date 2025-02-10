<?php 
// creamos variables
class validationPerfil {
public string $name;
public int $age;

// las definimos con el metodo construct
public function __construct(string $name, int $age)
{
  $this ->name = trim($name);
  $this ->age = $age;   
}

// creamos una funcion en la cual se van a crear las verificaciones
public function incorrectVerif(): string {
//utilizará el preg_match que sirve para comparar expresiones regulares.
//no permitira que ningun usuario no se cree arrancando con Mayuscula
//no permitira usar . ni , ni numeros, ni nada que no sea una letra
   if (!preg_match("/^[A-Z][a-zA-Z\s]+$/", $this->name)) {
          return "Error: El nombre debe comenzar con mayúscula y solo contener letras.";
    }
    //el valor de la edad tendra que ser siempre mayor a cero
    //si la edad es menor o mayor a -1 saldra el error
    if ($this->age <= -1) {
      return "Error: La edad debe ser un número positivo.";
  }

  return "Validación exitosa.";
}
}
?>
