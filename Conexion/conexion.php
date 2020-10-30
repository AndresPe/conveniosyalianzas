<?php

function pdo_connect_mysql()
{
      $DATABASE_HOST = 'localhost';
      $DATABASE_USER = 'root';
      $DATABASE_PASS = '';
      $DATABASE_NAME = 'convenios';
<<<<<<< HEAD
     
=======
>>>>>>> 000fd002d81f7c43324549c9b39b65c7cae9e34e
      try {
            return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
      } catch (PDOException $exception) {
            
            exit('Failed to connect to database!');
      }
<<<<<<< HEAD
}
=======

}
?>
>>>>>>> 000fd002d81f7c43324549c9b39b65c7cae9e34e
