<?php 

    $filePath = "file/path/if/any/";
    
    foreach (glob($filePath."*.*")) as $fileName) {
     //*.* is a wildcard that will delete all files contained in the directory location specified.
    unlink($fileName);
    echo $fileName." was deleted!";
 }


?>