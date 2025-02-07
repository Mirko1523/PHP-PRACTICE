<?php 
class validationPerfil {
public string $name;
public int $age;

public function __construct(string $name, int $age)
{
  $this ->name = trim($name);
  $this ->age = $age;   
}

public function incorrectVerif(): string {

   if (!preg_match("/^[A-Z][a-zA-Z\s]+$/", $this->name)) {
          return "Error: El nombre debe comenzar con mayúscula y solo contener letras.";
    }

    if (!filter_var($this->age, FILTER_VALIDATE_INT) || $this->age <= 0 || !ctype_digit((string) $this->age)) {
      return "Error: La edad debe ser un número entero positivo.";
  }

  return "Validación exitosa.";
}
}
?>
