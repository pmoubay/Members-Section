<?php

namespace Reform\User;

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    protected $table = 'tblusers';
    protected $fillable = [

      'email',
      'username',
      'fname',
      'lname',
      'telephone',
      'password',
      'active',
      'active_hash',
      'remember_identifier',
      'remember_token'
    ];


    public function getFullName()
    {
      if(!$this->fname || !$this->lname){
        return null;
      }

      return "{$this->fname} {$this->lname}";

    }

    public function getNameOrUser()
    {

      return $this->getFullName() ?: $this->username;
    }

    public function activateAccount()
    {
      $this->update([
        'active' => true,
        'active_hash' => null
      ]);
    }

    public function updateRememberCred($identifier, $token)
    {
      $this->update ([
        'remember_identifier' => $identifier,
        'remember_token' => $token
      ]);
    }

    public function removeRememberCred()
    {
      $this->updateRememberCred(null, null);
    }

    public function stat()
    {
        return $this->hasMany('Reform\User\Userstat', 'id');
    }

    public function getId()
    {
        return $this->id;
    }

}
 ?>