<?php

namespace Reform\User;
use Illuminate\Database\Eloquent\Model as Eloquent;

class UserStat extends Eloquent
{
    protected $table = 'tblstat';
    protected $fillable = [
      'id',
      'stat',
      'date'
      'typeid'
    ];



}


 ?>