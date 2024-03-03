<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as BaseModel;

class Model extends BaseModel {

    public static function getTableName() {
        return with(new static)->getTable();
    }

}