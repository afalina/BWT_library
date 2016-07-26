<?php
namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Record extends Eloquent 
{
    protected $fillable = array('book_id', 'record');
    public $timestamps = false;

    public function book() 
    {
        return $this->belongsTo('App\Book');
    }

    public function scopeMatching($query, $data) {
        return $query->whereRaw("MATCH(records.record) AGAINST(? IN BOOLEAN MODE)", array($data));
    }
}