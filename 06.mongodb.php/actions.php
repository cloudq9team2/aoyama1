<?php
$m = new MongoClient( 'mongodb://localhost:27001');
$cursor = $m->tem->users->find( array( 'name' => 'user1'));
$result = $cursor->getNext();
echo json_encode( $result); 
?>
