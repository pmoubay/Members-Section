<?php

namespace Reform\Middleware;
use Slim\Middleware;

class Before extends Middleware
{

  public function call()
  {
    $this->app->hook('slim.before', [$this, 'run']);

    $this->next->call();
  }

  public function run()
  {
    if(isset($_SESSION[$this->app->config->get('auth.session')])){
      //user has been authenticated
      $this->app->auth = $this->app->user->where('id',$_SESSION[$this->app->config->get('auth.session')])->first();
      }

      //check coookie remember me
      $this->checkRememberMe();

      //sharing data with all views
      $this->app->view()->appendData([
        'auth' => $this->app->auth,
        'baseURL' => $this->app->config->get('app.url')
        //'baseURL' => $this->app->config->get('app.url')
      ]);


  }

  protected function checkRememberMe()
  {
    if($this->app->getCookie($this->app->config->get('auth.remember')) && !$this->app->auth)
    {
      $data = $this->app->getCookie($this->app->config->get('auth.remember'));
      $credential = explode('___',$data);

      if(empty(trim($data)) || count($credential) !== 2){
        $this->app->response->redirect($this->app->urlFor('home'));
      } else {
        $identifier = $credential[0];
        $token = $this->app->hash->hash($credential[1]);

        $user = $this->app->user->
          where('remember_identifier', $identifier)
          ->first();

        if($user){
            if($this->app->hash->hashCheck($token, $user->remember_token)){
              $_SESSION[$this->app->config->get('auth.session')] = $user->id;
              $this->app->auth = $this->app->user->where('id', $user->id )->first();
            } else {
              $user->removeRememberCred();
            }
        }
      }

    }
  }

}


 ?>
