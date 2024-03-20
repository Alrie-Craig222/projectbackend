<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartsListModel extends Model
{
    use HasFactory;

     /**
		*The table associated with the model
		*
		*@var string
		*/
		protected $table = 'partslist';
		
		/**
		*The primary key associated with the model
		*
		*@var string
		*/
		protected $primaryKey = 'part_id';
		public $incrementing = false;

		/**
		*The attributes that are mass assignable
		*
		*@var array
		*/
		protected $fillable = 
    [   
        'partID',
        'image',
        'part_name',
        'compatibility',
        'price',
        'stock',

    
    ];
}
