<?php
$app->get('/activate',$guest(), function() use ($app) {

  $request = $app->request;
  $email = $request->get('email');
  $identifier = $request->get('identifier');



  //$hashedIdentifier = $app->hash->hash('identifier');

  $user = $app->user->where('email', $email)
      ->where('active',false)
      ->first();
 $test = $app->hash->hash($identifier);
 //die($app->hash->hashCheck($user->active_hash,$test));

  if(!$user || !$app->hash->hashCheck($user->active_hash,$test)){
    $app->flash('global','Error activating account.');
    $app->response->redirect($app->urlFor('home'));
  } else {
    $user->activateAccount();
    $app->flash('global','Account has been activated. You can now sign it.');
    $app->response->redirect($app->urlFor('home'));
  }

})->name('activate');
 ?>