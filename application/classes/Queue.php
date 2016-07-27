<?php
namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Queue extends Eloquent 
{
    protected $fillable = array('book_id');
    protected $table = 'queue';
    public $timestamps = false;
}