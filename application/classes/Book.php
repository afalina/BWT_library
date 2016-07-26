<?php
namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Book extends Eloquent 
{
    protected $fillable = array('author', 'title', 'published_year');
    public $timestamps = false;

    public function records()
    {
        return $this->hasMany('App\Record');
    }
}