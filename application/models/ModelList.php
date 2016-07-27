<?php
class ModelList extends Model
{
    public function getData()
    {
        \App\DB::init();
        $books = \App\Book::all();
        return $books;
    }
}