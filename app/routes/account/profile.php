<?php
$app->get('/account/profile',$authenticated(), function() use ($app){
  $app->render('account/profile.php');
})->name('account.profile');

$app->post('/account/profile',$authenticated(), function() use ($app){
  $request = $app->request;
  $email = $app->$request->post('first_name');
})->name('account.profile.post');

 ?>