<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model {

	//

    public function fields()
    {
        return $this->hasMany('Field');
    }
}
