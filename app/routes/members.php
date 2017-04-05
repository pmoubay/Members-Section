<?php
$app->get('/members', $authenticated, function() use ($app) {
  $app->render('members.php');
})->name('members');

 ?>