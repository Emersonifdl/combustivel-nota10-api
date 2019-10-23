<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posto extends Model
{
    protected $fillable = [
        'gas_station_cod', 
        'gas_station_name',
        'latitude',
        'longitude',
        'city',
        'state',
        'show_in_app',
        'last_visit_date',
        'store',
        'oil_change',
        'washing',
        'rubber_repair',
        'common_ethanol',
        'additive_ethanol',
        'common_gasoline',
        'additive_gasoline',
        'premium_gasoline',
        's10_diesel_common',
        's10_diesel_additive',
        's500_diesel_common',
        's500_diesel_additive',
    ];
}