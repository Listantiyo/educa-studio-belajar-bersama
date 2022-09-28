<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question_Groups extends Model
{
    protected $table = 'tbl_group_questions';

    public function quest_tag()
    {
        return $this->belongsToMany(Question_Tag_Groups::class,'tbl_group_quest_tags','id_quest','id_tag')
                    ->withTimestamps();
    }
    public function tag()
    {
        return $this->belongsToMany(Tags::class,'tbl_group_quest_tags','id_quest','id_tag');
    }
    public function user()
    {
        return $this->hasOne(User::class,'id','id_user_dil');
    }
    public function answers()
    {
        return $this->hasMany(Answer_Groups::class,'id_question');
    }
    public function likes()
    {
        return $this->hasMany(Like_Groups::class,'id_quest');
    }
    
    public function dislikes()
    {
        return $this->hasMany(Dislike_Groups::class,'id_quest');
    }
}
