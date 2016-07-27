<?php
Class ModelMain extends Model
{
    public function setData($data) 
    {
        \App\DB::init();
        $book =  \App\Book::create(array(
                            'author'         => $data[0],
                            'title'          => $data[1],
                            'published_year' => $data[2])
                            );
        $bookId = $book->id;
        $textOfFile = file_get_contents(($_FILES["filename"]["tmp_name"]));
        \App\Record::createForBook($bookId, $textOfFile);
    }
}

function convertToUTF8($string) 
{
    if (!mb_detect_encoding($string, 'UTF-8', true)) {
        $string = mb_convert_encoding($string, 'UTF-8', 'CP1251');
    }
    return $string;
}

function splitIntoSentences($string)
{
    preg_match_all("/[^.!?\r\n]+[.!?\r\n]+/", $string, $matches);
    return $matches[0];
}


