<?php
//Midlleware to check if user is guest or an user
$authenticationChk = function ($required) use($app){
  return function () use($required, $app) {
    if ((!$app->auth && $required) || ($app->auth && !$required) ){
        $app->redirect($app->urlFor('home'));
    }
  };
};

$authenticated = function () use ($authenticationChk){
  return $authenticationChk(true);
};

$guest = function () use ($authenticationChk){
  return $authenticationChk(false);
};

 ?>