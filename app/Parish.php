<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parish extends Model
{
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['name'];
}
