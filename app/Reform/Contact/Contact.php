<?php
namespace Reform\Contact;


use Illuminate\Database\Eloquent\Model as Eloquent;

class Contact extends Eloquent
{

  protected $table = 'tblcontact';
  protected $fillable = [
      'name',
      'email',
      'message'
  ];

}

 ?>
