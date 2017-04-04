<?php
$app->get('/contactus',$guest(), function() use ($app) {
  $app->render('auth/contactus.php');
})->name('contactus');

$app->post('/contactus',$guest(), function() use ($app){



  $request = $app->request;

  $email = $request->post('email');
  $username = $request->post('username');
  $message = $request->post('message');

  $v = $app->validation;


  $v->validate([
    'email' => [$email, 'required|email'],
    'username' => [$username, 'required|min(2)'],
    'message' => [$message, 'required|min(2)']
  ]);

  if($v->passes()){



    $contact = $app->contact->create([
      'email' => $email,
      'username' => $username,
      'message' => $message

    ]);

    $app->mail->send('email/auth/usermessage.php', ['username' => $username, 'message' => $message], function($message) use ($user){
      $message->to('reformottawa@gmail.com');
      $message->subject('Message was sent');
    });

    $app->mail->send('email/auth/feedback.php', function($message) use ($user){
      $message->to($email);
      $message->subject('Thank you for your feedback!');
    });

    $app->flash('global', 'You have sent us your feed.');
    return $app->response->redirect($app->urlFor('home'));

  }


  $app->render('auth/contactus.php', [
    'errors' => $v->errors(),
    'request' => $request
  ]);


})->name('contactus.post');


 ?>
