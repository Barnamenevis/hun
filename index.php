<?php
  include "include/bootstrap.php";
  if(isset($_GET['q']))
  {
    $q = $_GET['q'];
    echo "SELECT * FROM links WHERE ID = '$q'";
    $result = ExecuteQuery("SELECT * FROM links WHERE ID = '$q'")    ;
    $goto = mysqli_fetch_assoc($result);
    if($result)
    {
        ExecuteQuery("UPDATE links SET Visits= (Visits + 1) WHERE ID = '$q'");
       // echo 'location: ' . $goto['OriginalLink'];
        header('location: ' . $goto['OriginalLink']);
    }
  }
?>
