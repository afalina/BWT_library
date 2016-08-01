<?php
Class ModelMain extends Model
{
    public function setData($data) 
    {
        $book =  \App\Book::create(array(
                            'author'         => $data[0],
                            'title'          => $data[1],
                            'published_year' => $data[2])
                            );
        $bookId = $book->id;
        $uploadDir = '/Users/afalina/www/books';
        move_uploaded_file($_FILES["filename"]["tmp_name"], $uploadDir . '/' . $bookId);
        $queue = \App\Queue::create(array('book_id' => $bookId));
    }
}