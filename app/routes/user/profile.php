<?php
  $app->get('/u/:username', function($username) use ($app){
    $user = $app->user->where('username', $username)->first();

    if(!$user){
      $app->notFound();
    }



    $stat1 = $app->stat->where('id',$user->getId())->where('typeid','1')->get();
    $stat2 = $app->stat->where('id',$user->getId())->where('typeid','2')->get();
    $stat3 = $app->stat->where('id',$user->getId())->where('typeid','3')->get();
    $stat4 = $app->stat->where('id',$user->getId())->where('typeid','4')->get();




    $app->render('user/profile.php',[
      'user' => $user,
      'stats' => $stat1,
      'physios' => $stat2,
      'cardios' => $stat3,
      'strongs' => $stat4
    ]);

  })->name('user.profile');

 ?>
