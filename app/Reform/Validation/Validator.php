<?php

namespace Reform\Validation;

use Violin\Violin;
use Reform\User\User;

class Validator extends Violin
{
    public function __construct(User $user)
    {
      $this->user = $user;
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
        $user = $this->user->where('email',$value);
        return ! (bool) $user->count();
    }

    public function validate_uniqueUsername($value,$input, $args)
    {
        return ! (bool) $this->user->where('username',$value)->count();
    }

}


 ?>