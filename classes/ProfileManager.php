<?php

//! declaro strict_types para verificar que pongo todos los datos correctos
declare(strict_types=1);

//! Exporto Profile php para que se pueda leer una vez
require_once 'Profile.php';

//! Creo la clase ProfileManager para manejar la logica de los perfiles (guardar, leer o procesar datos del archivo que se genera)
class ProfileManager{

    //!declaro la propiedad privada que será la ruta del archivo donde se van a guardar los perfiles. Al ser privada solo se puede
    //! entrar a ella dentro de la clase.
    private string $privateFile;

    //! Creo y defino la función constructora de la clase ProfileManager.
    public function __construct(string $privateFile){
        $this->privateFile = $privateFile;
    }
    
    //! Creo y defino la funcion donde guardamos los perfiles en un archivo (se genera automaticamente).
    public function saveProfile(Profile $profile): void{
        //profile text llama al metodo textUser para obtener la cadena de texto(Nombre:name, Edad:age, Lenguaje Favorito: language) 
        //a la hora de que se genere el perfil.
        //PHP_EOL: Añade saltos de linea al final de la cadena, permitiendo que cada perfil ocupe una linea diferente en el archivo
        // donde se guardan los perfiles
        $profileText = $profile->textUser(). PHP_EOL;
        //file_put_contets escribe el texto del perfil en el archivo.
        //FILE_APPEND asegura que la info se agrege al archivo en vez de sobreescribirlo.
        file_put_contents($this->privateFile, $profileText, FILE_APPEND);
    }

    //! Creé una funcion donde se leen TODOS los perfiles del archivo
    public function getProfiles(): array {
        $profiles = [];
        if (file_exists($this->privateFile)) {
            //FILE_IGNORE_NEW_LINES elimina los saltos de linea al final.
            $lines = file($this->privateFile, FILE_IGNORE_NEW_LINES);
            //el foreach va a iterar por cada perfil
            foreach ($lines as $line) {
                // Dividir los datos por el separador " | "
                [$name, $age, $language] = $this->parseProfileLine($line);
                $profiles[] = new Profile($name, (int)$age, $language);
            }
        }
        return $profiles;
    }

    //! defino un metodo private que devuelve los datos del perfil
    private function parseProfileLine(string $line): array {
        //explode: funcion que divide lineas del separador |
        $parts = explode(' | ', $line);
        //nos retornará un arreglo con los datos.
        // str_replace: elimina las etiquetas nombre: edad: y lenguage favorito:
        //trim elimina cualquier espacio extra. La combinacion de trim y str_replace evita renderizar 
        //las etiquetas nombre, edad y lenguaje favorito
        return [
           trim(str_replace('Nombre: ', '', $parts[0])),
           trim(str_replace('Edad: ', '', $parts[1])),
           trim(str_replace('Lenguaje Favorito: ', '', $parts[2])),
        ];
    }
}