<?php
  function connectToDB($host, $user,$pass,$dbname)
  {
      return $dbh = mysqli_connect($host, $user,$pass,$dbname);
      
  }
  function ExecuteQuery($query)
  {
      global $db_host;
      global $db_user;
      global $db_pass;
      global $db_name;
      $dbh = connectToDB($db_host, $db_user, $db_pass, $db_name);
      $result = mysqli_query($dbh, "$query");
      return $result;
  }
?>
