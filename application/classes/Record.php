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

    public function createForBook($bookId, $text)
    {
        $text = convertToUTF8($text);
        $sentencesOfBook = splitIntoSentences($text);
        $insertSentences = [];
        foreach ($sentencesOfBook as $sentence) {
            $insertSentences[] = ['book_id' => $bookId, 'record' => $sentence];
        }
        \App\Record::insert($insertSentences);
    }
}