<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventChurch extends Model
{
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['event_id', 'church_id'];
}
