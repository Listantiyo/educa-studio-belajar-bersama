<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'tbl_questions';
    
    
    public function mapel()
    {
        return $this->hasOne(Mapel::class, 'id');
    }

}
