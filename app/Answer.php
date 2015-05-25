<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model {


    /**
     * binds relevant field
     */
    public function field()
    {
        return $this->hasOne('Field');
    }

    /**
     * binds relevant submission
     */
    public function submission()
    {
        return $this->hasOne('Submission');
    }

}
