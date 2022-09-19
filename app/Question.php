<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'tbl_questions';
    
    
    public function quest_tag()
    {
        return $this->belongsToMany(Question_Tags::class,'tbl_question_tags','id_quest','id_tag')
                    ->withTimestamps();
    }

    public function tag()
    {
        return $this->belongsToMany(Tags::class,'tbl_question_tags','id_quest','id_tag');
    }
    
    public function likes()
    {
        return $this->hasOne(Likes::class,'id_quest');
    }
    
    // public function dislike()
    // {
    //     return $this->hasOne(Dislikes::class,'tbl_dislikes','id_quest','id_user');
    // }
}
