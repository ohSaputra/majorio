<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    //

    protected $table = 'result';

    protected $primaryKey = 'resultID';

    /**
    * Get the quiz data
    */
    public function quiz()
    {
        return $this->belongsTo('App\Quiz');
    }
}
