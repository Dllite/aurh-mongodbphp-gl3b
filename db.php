<?php  

require_once 'db.php';

require_once dirname( __FILE__ ) . '/vendor/autoload.php';

$collection = (new MongoDB\Client)->test->etudiants;
//var_dump($collection)
 
?>  