<?php
$app->get('/programs', function() use ($app) {
  $app->render('/pages/publicprograms.php');
})->name('programs');

 ?>