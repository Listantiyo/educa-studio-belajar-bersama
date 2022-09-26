<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question_Votes extends Model
{
    protected $table='tbl_question_votes';

    public function question()
    {
        return $this->hasMany(Question_Votes::class,'id','id_quest');
    }
}
