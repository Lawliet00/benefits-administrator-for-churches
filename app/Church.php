<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Church extends Model
{
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['pastor_names', 'pastor_surnames', 'ci', 'pastors_address', 'phone',
							'email', 'church_name', 'church_address', 'state_id','municipality_id',
							'city_id', 'parish_id', 'denomination_id'
						];
	
}
