<?php
$app->get('/services', function() use ($app) {
  $app->render('/pages/publicservices.php');
})->name('services');

 ?>