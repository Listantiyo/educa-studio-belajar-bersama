<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer_Groups extends Model
{
    protected $table='tbl_group_answers';

    public function likes()
    {
        return $this->hasMany(Like_Answer_Groups::class,'id_answer');
    }

    public function dislikes()
    {
        return $this->hasMany(Dislike_Answer_Groups::class,'id_answer');
    }
    public function user()
    {
        return $this->hasOne(User::class,'id','id_user_dil');
    }
    public function user_detail()
    {
        return $this->hasOne(User_Detail::class,'id_user','id_user_dil');
    }
}
