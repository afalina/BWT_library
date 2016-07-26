<?php
Class ModelMain extends Model
{
    public function setData($data) {

        require ($_SERVER['DOCUMENT_ROOT'].'/Capsule.php');
        
        $book =  \App\Book::create(array(
                            'author'         => $data[0],
                            'title'          => $data[1],
                            'published_year' => $data[2])
                            );
        $bookId = $book->id;

        $file = new \App\BookFile();
        $newBookFile = $file->uploadFile();
        $testingArray = $file->parseFile();
        foreach ($testingArray[0] as $testingUnit) {
            \App\Record::create(array(
                'book_id' => $bookId,
                'record'  => $testingUnit));
        }
    }
}