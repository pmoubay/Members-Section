<?php
$app->get('/account/profile',$authenticated(), function() use ($app){
  $app->render('account/profile.php');
})->name('account.profile');

$app->post('/account/profile',$authenticated(), function() use ($app){
  $request = $app->request;
  $email = $request->post('email');
  $fname = $request->post('fname');
  $lname = $request->post('lname');

  var_dump($email);
  die();
  $v = $app->validation;
  $v->validate ([
    //'email' => [$email, 'required|email|uniqueEmail'],
    'fname' => [$fname, 'alpha|max(30)'],
    'lname' => [$lname, 'alpha|max(30)']
  ]);

  if ($v->passes()){
    $app->user->update([
        'email' => $email,
        'fname' => $fname,
        'lname' => $lname
        ]);

        $app->flash('global', 'Your details have been update :)');
        $app->response->redirect($app->urlFor('account.profile'));
  }

  $app->render('account/profile.php', [
    'errors' => $v->errors(),
    'request' => $request
  ]);



})->name('account.profile.post');

 ?>