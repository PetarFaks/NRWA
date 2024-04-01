<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Aliases extends Model
{
    protected $primaryKey = ['title_id', 'ordering']; 
    public $incrementing = false; 
    protected $keyType = 'string'; 
    protected $fillable = ['title_id', 'ordering', 'title', 'region', 'language', 'is_original_title']; 

  
}
