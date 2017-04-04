<?php
namespace Contact\Contact;


use Illuminate\Database\Eloquent\Model as Eloquent;

class Contact extends Eloquent
{
  protected $name;
  protected $email;
  protected $message;

  protected $table = 'tblcontact';
  protected $fillable = [
      'name',
      'email',
      'message'
  ];

  public __construct(){

  }


}

 ?>
