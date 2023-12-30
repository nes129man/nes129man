<?php
$host        = "dpg-cjhakhj6fquc73b0mtqg-a";
$port        = "5432";
$dbname      = "mytestdb_fp6w";
$credentials = "W6GfzH3AjFgU09HTzRLxLbZUiSIlFYsk";

$db = pg_connect( "$host $port $dbname $credentials"  );
if(!$db) {
  echo "Error : Unable to open database\n";
} else {
  echo "Opened database successfully\n";
}
?>
