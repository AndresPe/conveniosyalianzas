<?php

function pdo_connect_mysql()
{
      $DATABASE_HOST = 'localhost';
      $DATABASE_USER = 'root';
      $DATABASE_PASS = '';
      $DATABASE_NAME = 'convenios';
<<<<<<< HEAD
      
=======
     
>>>>>>> c1b834252c4575cac98929b2c97b26a43efce383
      try {
            return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
      } catch (PDOException $exception) {
            
            exit('Failed to connect to database!');
      }
}