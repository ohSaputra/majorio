<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    //

    protected $table = 'questionnaire';

    protected $primaryKey = 'questionnaireID';

    /**
    * Get the result data
    */
    public function quiz()
    {
        return $this->belongsTo('App\Quiz');
    }
}
