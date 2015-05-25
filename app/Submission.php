<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model {

	//

    /**
     * binds relevant document
     */
    public function document()
    {
        $this->hasOne('Document');
    }
}
