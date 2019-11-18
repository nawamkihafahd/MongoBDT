<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Rating extends Eloquent
{
    //
	protected $connection = 'mongodb';
	protected $collection = 'ratings';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
		'Rank','Title','Year','Score','Metascore','Genre','Vote','Director','Runtime','Revenue','Description'
    ];
}
