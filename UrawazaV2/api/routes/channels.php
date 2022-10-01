<?php 

use Illuminate\Support\Facades\Broadcast; 

//Broadcast channels -- register supported event broadcast channels
//auth callbacks are used to check if an auth user can listen to channel 

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->$id === (int) $id;
});