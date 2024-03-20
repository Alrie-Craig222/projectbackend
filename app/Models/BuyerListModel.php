<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyerListModel extends Model
{
    use HasFactory;

     /**
		*The table associated with the model
		*
		*@var string
		*/
		protected $table = 'buyerlist';
		
		/**
		*The primary key associated with the model
		*
		*@var string
		*/
		protected $primaryKey = 'buyerID';
		public $incrementing = false;

		/**
		*The attributes that are mass assignable
		*
		*@var array
		*/
		protected $fillable = 
    [   
        'buyerID',
        'Picture',
        'name',
        'address',
        'phone_number',
        'gender',
        'annual_income',
        'buyer_category',

    
    ];
}
