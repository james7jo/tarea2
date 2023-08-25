<?php
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
   
      //INSERT
      //TEST
      $now = $pdo->query('SELECT NOW()')->fetchColumn();
      var_dump($now);

      

      ?>

      