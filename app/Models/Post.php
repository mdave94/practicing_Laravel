<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Post extends Model
{   

    public $directory = "/images/";

    use HasFactory;
    
 

    protected $fillable = [
        'title',
        'body',
        'path'
    ];


    public function user(){
         return $this->belongsTo('App\Models\User');
    }

    //Accessor for directory path
   
    public function getPathAttribute($value){

        return $this->directory . $value;
    }
}
