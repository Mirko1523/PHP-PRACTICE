<?php if (!empty($profiles)): ?>
<!-- CODIGO ENCARGADO DE MOSTRAR LOS PERFILES -->
<!-- empty: comprueba de que la variable $profiles no esta vacia -->
  <h2>Perfiles creados:</h2>
<!-- Se hace un metodo foreach que reccore cada objeto(perfiles) del array $profiles -->
  <?php foreach ($profiles as $profile): ?>
    <!--htmlspecialchars: es una manera de evitar ataques XSS(cross-site-scripting) y que nos implanten
    scripts maliciosos  -->
    <!-- $profiles llama al metodo textUser que devuelve la cadena de texto con la informacion del usuario -->
    <div class="profile"><?= htmlspecialchars($profile->textUser()) ?></div>
  <?php endforeach; ?>
<?php else: ?>
  <p>No hay perfiles creados aún. Creá uno :)</p>
<?php endif; ?>
