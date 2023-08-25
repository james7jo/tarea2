
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    /*$apellido_parteno = $_POST['apellido_paterno'];
    $apellido_materno = $_POST['apellido_materno'];
    $direccion = $_POST['Direccion'];*/
    $age = $_POST['age'];
    echo "ok";
    if (empty($name)) 
        echo "Please enter name";
    elseif(empty($age))
        echo "Please enter age";
    else
        echo "$name is years old and email is $email and born the $date.";
  }
?>