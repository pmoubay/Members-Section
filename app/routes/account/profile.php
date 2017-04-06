<?php
$app->get('/account/profile',$authenticated(), function() use ($app){
  $app->render('account/profile.php');
})->name('account.profile');

$app->post('/account/profile',$authenticated(), function() use ($app){
  $request = $app->request;
  $fname = $request->post('fname');
  $lname = $request->post('lname');
  $phone = $request->post('phone');



  $v = $app->validation;
  $v->validate ([
    'fname' => [$lname, 'required|alpha|max(30)|min(2)'],
    'lname' => [$lname, 'required|alpha|max(30)|min(2)'],
    'phone' => [$phone, 'required|min(10)']
  ]);

  if ($v->passes()){
    $app->auth->update([
        'fname' => $fname,
        'lname' => $lname,
        'telephone' => $phone
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