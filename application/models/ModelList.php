<?php
class ModelList extends Model
{
    public function getData()
    {
        $books = \App\Book::all();
        return $books;
    }
}