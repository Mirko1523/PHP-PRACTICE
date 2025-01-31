<?php
// <!-- Archivo donde se muestra el proceso de creacion y guardado de perfiles. -->
//! declaramos los datos estrictos, para evitar poner datos erroneos
declare(strict_types=1);
//! importamos profile.php y profilemanager.php
require_once 'classes/Profile.php';
require_once 'classes/Profile_Manager.php';

//! importo el archivo de datos generado automaticamente
//funciona como una BD simple(creando un archivo)
$dataFile = 'data/perfiles.txt';

//! Creé la instancia para el administrador de perfiles
$profileManager = new ProfileManager($dataFile);

//! En este if se hace el proceso POST del formulario
//$_SERVER['REQUEST_METHOD']: variable global que contiene el METODO HTTP
// Verifica si el metodo utilizado para crear es EL METODO POST
//si el usuario que creó su perfil hace todo correcto se activa el codigo dentro de if
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //$name, $age, $languaje captura los datos del formulario
    //htmlspecialchars: es una manera de evitar ataques XSS(cross-site-scripting) y que nos implanten
    // scripts maliciosos  
    $name = htmlspecialchars($_POST['name']);
    $age = (int)$_POST['age'];
    $language = htmlspecialchars($_POST['language']);

    //! Se crea y guarda el perfil generado
    $profile = new Profile($name, $age, $language);
    //guardamos el perfil del usuario en perfiles.txt
    $profileManager->saveProfile($profile);

    //eco renderiza este mensaje una vez se crea el usuario o perfil.
    echo "<p><strong>Perfil guardado correctamente.</strong></p>";
    //! Con este header evitamos el reenvio del formulario (al apretar f5 se volvia a crear el usuario)
    header("Location: index.php");
    exit;
}

//! con getProfiles obtenemos todos los perfiles guardados de la lista
$profiles = $profileManager->getProfiles();
?>