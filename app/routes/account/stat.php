<?php
$app->get('/account/stat', function() use ($app){
  $app->render('/account/stat.php');
})->name('account.stat');

$app->post('/account/profile',$authenticated(), function() use ($app){
  
})->name('account.stat.post');



 ?>