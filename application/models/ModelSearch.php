<?php
class ModelSearch extends Model
{
    public function getData($data)
    {
        require ($_SERVER['DOCUMENT_ROOT'].'/Capsule.php');

        $books = $capsule::table('records')->join('books', 'records.book_id', '=', 'books.id')->whereRaw("MATCH(records.record) AGAINST(? IN BOOLEAN MODE)", array($data))->get();
        return $books;
    }
}