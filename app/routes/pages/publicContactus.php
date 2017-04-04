<?php
$app->get('/contactus', $guest(), function() use ($app) {
  $app->render('/pages/publicContactUs.php');
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


      $app->mail->send('email/auth/usermessage.php',['username' => $username, 'message' => $message], function($message) use ($app) {
      $message->to('reformottawa@gmail.com');
      $message->subject('New Contact Us entry');
    });

    $app->mail->send('email/auth/feedback.php',['username' => $username, 'message' => $message, 'email' => $email] ,function($message) use ($app){
      $message->to($app->contact->email);
      $message->subject('Thank you for your feedback!');
    });

    $app->flash('global', 'Thank you for sending us your feedback.');
    return $app->response->redirect($app->urlFor('home'));

  }


  $app->render('auth/contactus.php', [
    'errors' => $v->errors(),
    'request' => $request
  ]);


})->name('contactus.post');


 ?>
