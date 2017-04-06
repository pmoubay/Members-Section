<?php
$app->get('/register',$guest(), function() use ($app) {
  $app->render('auth/register.php');
})->name('register');

$app->post('/register',$guest(), function() use ($app){

  $request = $app->request;

  $email = $request->post('email');
  $username = $request->post('username');
  $password = $request->post('password');
  $confirmpass= $request->post('confirmpass');
  $fname = $request->post('fname');
  $lname = $request->post('lname');
  $phone = $request->post('phone');

  $v = $app->validation;
  $v->validate([
    'email' => [$email, 'required|email|uniqueEmail'],
    'username' => [$username, 'required|alnumDash|max(20)|uniqueUsername'],
    'password' => [$password, 'required|min(6)'],
    'confirmpass' => [$confirmpass, 'required|matches(password)'],
    'fname' => [$fname, 'required|alpha|max(30)|min(2)'],
    'lname' => [$lname, 'required|alpha|max(30)|min(2)'],
    'telephone' => [$phone, 'required|min(10)'],
  ]);

  if($v->passes()){

    $identifier = $app->randomlib->generateString(128);
    //$identifier = 'password';


    $user = $app->user->create([
      'email' => $email,
      'username' => $username,
      'password' => $app->hash->password($password),
      'active' => false,
      'active_hash' => $app->hash->hash($identifier),
      'fname' => $fname,
      'lname' => $lname,
      'telephone' => $phone

    ]);

    $app->mail->send('email/auth/registered.php', ['user' => $user, 'identifier' => $identifier], function($message) use ($user){
      $message->to($user->email);
      $message->subject('Welcome to Reform!');
    });

    $app->flash('global', 'You have been registered.');
    return $app->response->redirect($app->urlFor('home'));

  }

  $app->render('auth/register.php', [
    'errors' => $v->errors(),
    'request' => $request
  ]);



})->name('register.post');

 ?>