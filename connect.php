<?php
global $connection;

   
echo 'passo21'; 

$host = 'localhost';
$port = 'xxxxx';
$dbname = 'xxxxxx';
$username = 'xxxxxxx';
$password = 'xxxxxx';

$connection = "host=$host port=$port dbname=$dbname user=$username password=$password";

echo $connection;
$db = pg_connect($connection);
echo $connection;
echo 'passo22'; 

     
     // echo 'passo23'; 
      
      if(!$db) {
         echo "Error : Unable to open database\n";
      } else {
         echo "Opened database successfully\n";
      }

/*

  // SELECT
  $query = "SELECT * FROM tb_usuario";
  $result = pg_query($db, $query);
  if (!$result) {
     echo "An error occurred.\n";
     exit;
  }
  
  while ($row = pg_fetch_row($result)) {
     echo "id: " . $row[0] . " nome: " . $row[1] . "<br />\n";
  }



  // INSERT
  $query = "INSERT INTO tabela_nome (id, nome) values (1, 'João')";
  $result = pg_query($db, $query);
  if (!$result) {
     echo "An error occurred.\n";
     exit;
  }

/*
  // UPDATE
  $query = "UPDATE tabela_nome SET nome = 'José' WHERE id = 1";
  $result = pg_query($db, $query);
  if (!$result) {
     echo "An error occurred.\n";
      exit;
  }


  // DELETE
  $query = "DELETE from tabela_nome WHERE id = 1";
  $result = pg_query($db, $query);
  if (!$result) {
     echo "An error occurred.\n";
     exit;
  }
  
  pg_close($db);
*/
?>

