<?php
Class ModelMain extends Model
{
    public function setData($data) 
    {
        $errors = [];
        if (strlen($data[0]) > 255) {
            $errors[] = "Имя автора не может быть таким длинным\n";
        }
        if (strlen($data[1]) > 255) {
            $errors[] = "Название книги не может быть таким длинным\n";
        }
        if ($data[2] < 1901 || $data[2] > date(Y)) {
            $errors[] = "Книга не могла быть издана в таком году\n";
        }
        if ($data[3]['type'] != 'text/plain') {
            $errors[] = "Загрузите файл в текстовом формате\n";
        }
        if ($errors) {
            return $errors;
        } else {
            $book =  \App\Book::create(array(
                                'author'         => $data[0],
                                'title'          => $data[1],
                                'published_year' => $data[2])
                                );
            $bookId = $book->id;
            $uploadDir = '/Users/afalina/www/books';
            move_uploaded_file($data[3]['tmp_name'], $uploadDir . '/' . $bookId);
            $queue = \App\Queue::create(array('book_id' => $bookId));
        }
    }
}