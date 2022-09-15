<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'tbl_questions';
    
    
    public function quest_tag()
    {
        return $this->belongsToMany(Question_Tags::class,'tbl_question_tags','id_tag','id_quest')
                    ->withTimestamps();
    }

}
