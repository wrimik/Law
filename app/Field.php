<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model {

	//

    public function document()
    {
        return $this->hasOne('Document');
    }
}
