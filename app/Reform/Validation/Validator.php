<?php

namespace Reform\Validation;

use Violin\Violin;
use Reform\User\User;
use Reform\Helpers\Hash;

class Validator extends Violin
{
    protected $user;
    protected $auth;

    public function __construct(User $user, $auth = null)
    {
      $this->user = $user;
      $this->auth = $auth;


      $this->addFieldMessages([
        'email'=>[
          'uniqueEmail' => 'email already in use'
        ],
        'username' => [
          'uniqueUsername' => 'username already in use'
        ]
      ]);
    }

    public function validate_uniqueEmail($value,$input, $args)
    {
        $user = $this->user->where('email', $value);

        if($this->auth && $this->auth->email === $value){
          return true;
        }


        return ! (bool) $user->count();
    }

    public function validate_uniqueUsername($value,$input, $args)
    {
        return ! (bool) $this->user->where('username',$value)->count();
    }

}


 ?>