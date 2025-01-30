<?php  
// Este archivo esta encargado de la creacion y organizacion de los perfiles.
//! definimos el strict types para verificar que los datos que pongamos osn los correctos
declare(strict_types=1);

//! declaramos una clase en donde se representará el perfil del usuario generado con sus propiedades y metodos
class Profile {
    public string $name;
    public int $age;
    public string $language; 

// !trabajaré con __construct para definir la clase.
public function __construct(string $name, int $age, string $language) {
    //!asignamos el valor a los diferentes parametros con el parametro this (name, age y languaje)
  $this -> name = $name;
  $this -> age = $age;
  $this -> language = $language;
}

//!con esta funcion devolvemos una cadena de texto(string) que seria el perfil generado mostrando los diferentes valores.
public function textUser(): string{
  return "Nombre: $this->name | Edad: $this->age | Lenguaje Favorito: $this->language";
}
};