<?php
  $app->get('/u/:username', function($username) use ($app){
    echo $username;
  });

 ?>
