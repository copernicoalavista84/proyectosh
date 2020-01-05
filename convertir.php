<?php 
 $contents = file_get_contents('prueba.sh'); 
 echo shell_exec($contents); 
 ?>
