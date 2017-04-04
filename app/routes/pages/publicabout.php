<?php
$app->get('/aboutus', function() use ($app) {
  $app->render('/pages/publicabout.php');
})->name('aboutus');

 ?>