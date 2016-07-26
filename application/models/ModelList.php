<?php
class ModelList extends Model
{
    public function getData()
    {
        require ($_SERVER['DOCUMENT_ROOT'].'/Capsule.php');
        $books = \App\Book::all();
        return $books;
    }
}