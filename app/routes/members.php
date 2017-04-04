<?php
$app->get('/members', function() use ($app) {
  $app->render('members.php');
})->name('members');

echo $app->randomlib;

 ?>