
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
   $paterno = $_POST['paterno'];
    $direccion = $_POST['direccion'];
    $fecha_nac = $_POST['fechanac'];
    $depto = $_POST['deptos'];
    $ci = $_POST['ci'];
    $email = $_POST['email'];
    //if (isset($_POST["send"])) {

      //  DATABASE SETTINGS 
      define("DB_HOST", "localhost");
      define("DB_NAME", "test");
      define("DB_CHARSET", "utf8mb4");
      define("DB_USER", "root");
      define("DB_PASSWORD", "");
   
      //  CONNECT TO DATABASE
      $pdo = new PDO(
        "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET, 
        DB_USER, DB_PASSWORD, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
      ]);
   
      if ($pdo) {
        
      
        //INSERT
        $sql = "INSERT INTO usuarioS (nombre,paterno,email) VALUES (?,?,?)";
        $stmt= $pdo->prepare($sql);
        $stmt->execute([$nombre, $paterno, $email]);
        echo "Inserción exitosa!";
      }
    
    

    /*
    if (empty($nombre)) 
        echo "Ingrese el Nombre";
    elseif(empty($apellidos))
        echo "Ingrese el Apellido";
    elseif(empty($direccion))
        echo "Ingrese la direccion";
        elseif(empty($fecha_nac))
        echo "Ingrese la Fecha de nacimiento";
        else echo "OK";
   */
  }
?>