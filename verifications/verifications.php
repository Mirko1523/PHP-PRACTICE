<?php 
class validationPerfil {
public string $name;
public int $age;

public function __construct(string $name, int $age)
{
  $this ->name = trim($name);
  $this ->age = trim($age);   
}

public function incorrectVerif(): string {

   if (!preg_match("/^[A-Z][a-zA-Z\s]+$/", $this->name)) {
          return "Error: El nombre debe comenzar con mayúscula y solo contener letras.";
    }

if ($this->age <= 0){
    return "Error: la edad debe ser un numero positivo";
}

}

}
?>
