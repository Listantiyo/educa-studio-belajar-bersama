<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer_Commment_Groups extends Model
{
    protected $table = 'tbl_group_answer_comments';

    public function user()
    {
        return $this->hasOne(User::class,'id','id_user');
    }
}
