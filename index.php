<?php require_once 'classes/Process_Post.php'; ?>
<!-- Importo el archivo donde se procesa la creación del usuario -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="templates/Styles.php">
  <title>Proyecto de generador de Perfiles</title>
</head>

<body>
  <h1>Generador de Perfiles</h1>

  <!-- Formulario de creación -->
  <form action="index.php" method="POST">
    <label for="name">Nombre y Apellido:</label>
    <input type="text" id="name" name="name" required>

    <label for="age">Edad:</label>
    <input type="number" id="age" name="age" required>

    <label for="language">Lenguaje favorito:</label>
    <select id="language" name="language" required>
      <option value="PHP">PHP</option>
      <option value="JavaScript">JavaScript</option>
      <option value="Python">Python</option>
      <option value="Java">Java</option>
      <option value="C#">C#</option>
      <option value="Rust">Rust</option>
    </select>
    <button type="submit">Crear Perfil</button>
  </form>

  <!-- Ahora cargamos la lista de perfiles -->
  <?php 
  require_once 'classes/Profile_List.php'; 
  ?>
  
</body>
</html>
