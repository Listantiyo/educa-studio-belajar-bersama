<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    
    
    public function mapel()
    {
        return $this->hasOne(Mapel::class, 'id');
    }

}
