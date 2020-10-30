<?php
function pdo_connect_mysql()
{
      $DATABASE_HOST = 'localhost';
      $DATABASE_USER = 'root';
      $DATABASE_PASS = '';
<<<<<<< HEAD
      $DATABASE_NAME = 'dbconvenios';
=======
      $DATABASE_NAME = 'convenios';
>>>>>>> a25577d8e610001016915657894cb81cab1c4be3
      try {
            return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
      } catch (PDOException $exception) {
            
            exit('Failed to connect to database!');
      }
}
