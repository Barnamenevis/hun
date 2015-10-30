<?php

function getUI($filename)
{
    global $site_root; 
    $fileFullName = "$site_root/themes/$filename";
    if(file_exists($fileFullName))
        include $fileFullName;
    else
        return false;

}
  
?>
