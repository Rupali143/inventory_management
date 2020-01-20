<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = 'users';

    public static function formstore($req){
        $user = new User();
        $user->name =  $req->name;
        $user->email = $req->email;
        $user->password = bcrypt($req->password);
        $user->save();
        return $user;
    }
}
