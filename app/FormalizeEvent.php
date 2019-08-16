<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormalizeEvent extends Model
{
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['space_available', 'state', 'date_finish'];
}
