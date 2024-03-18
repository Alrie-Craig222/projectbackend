<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehiclelistModel extends Model
{
    use HasFactory;

    /**
		*The table associated with the model
		*
		*@var string
		*/
		protected $table = 'vehiclelist';
		
		/**
		*The primary key associated with the model
		*
		*@var string
		*/
		protected $primaryKey = 'vin';
		public $incrementing = false;

		/**
		*The attributes that are mass assignable
		*
		*@var array
		*/
		protected $fillable = 
    [   
        'vin',
        'brand-model',
        'body_style',
        'color',
        'price',
        'stock',
     	'engine',
        'transmission',

    
    ];
}
