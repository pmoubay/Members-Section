<?php

use Slim\Slim;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;

use Noodlehaus\Config;
use RandomLib\Factory as Randomlib;

use Reform\User\User;

use Reform\User\UserStat;

use Reform\Mail\Mailer;
use Reform\Helpers\Hash;
use Reform\Validation\Validator;
use Reform\Middleware\Before;
use Reform\Middleware\CSRF;


session_cache_limiter(false);
session_start();

ini_set('display_errors', 'On');

define('INC_ROOT', dirname(__DIR__));

//loading all of the dependencies
require INC_ROOT . '/vendor/autoload.php';
//framework - everything will be attached to app
$app = new Slim([
  'mode' => file_get_contents(INC_ROOT . '/mode.php'),
  'view' => new Twig(),
  'templates.path' => INC_ROOT . '/app/views'
]);

$app->add(new Before);
$app->add(new CSRF);

$app->configureMode($app->config('mode'), function() use ($app) {
  $app->config = Config::load(INC_ROOT . "/app/config/{$app->mode}.php");
});

require 'db.php';
require 'filters.php';
require 'routes.php';


$app->auth = false;

$app->container->set('user', function(){
  return new User;
});

$app->container->singleton('hash', function() use ($app){
  return new Hash($app->config);
});

$app->container->singleton('validation', function() use ($app){
  return new Validator($app->user);
});

$app->container->singleton('mail', function() use ($app){

  $mailer = new PHPMailer;

  $mailer->isSMTP();
  $mailer->Host = $app->config->get('mail.host');
  $mailer->SMTPAuth = $app->config->get('mail.smtp_auth');
  $mailer->SMTPSecure = $app->config->get('mail.stmp_secure');
  $mailer->Port = $app->config->get('mail.port');
  $mailer->Username = $app->config->get('mail.username');
  $mailer->Password = $app->config->get('mail.password');
  $mailer->isHTML($app->config->get('mail.html'));
  $mailer->setFrom('reformottawa@gmail.com', 'Heather');

  return new Mailer($app->view,$mailer);


});

$app->container->singleton('randomlib',function() {
  $factory = new Randomlib;
  return $factory->getMediumStrengthGenerator();
});

$view = $app->view();
$view->parserOptions = [
  'debug' => $app->config->get('twig.debug')
];

$view->parserExtensions = [
  new TwigExtension //generate urls
];

$app->container->set('stat', function(){
  return new UserStat;
});

 ?>
