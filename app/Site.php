<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    //
    public $table = 'sites';

    public $fillable = [
    	'name',
    	'development',
    	'support',
    	'contextual_advertising',
    	'seo',
    	'smm'
    ];
}
