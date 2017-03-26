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



    }
  }

}


 ?>