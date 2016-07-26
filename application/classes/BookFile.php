<?php
namespace App;

class BookFile
{
    private $booksDirectory = '/Users/afalina/www/books/';

    public function uploadFile() 
    {
        if (is_uploaded_file($_FILES["filename"]["tmp_name"])) {
            move_uploaded_file($_FILES["filename"]["tmp_name"], $booksDirectory.$_FILES["filename"]["name"]);
        }
    }
    
    public function parseFile() 
    {
        $textOfFile = file_get_contents($booksDirectory.($_FILES["filename"]["name"]));
        if (!mb_detect_encoding($textOfFile, 'UTF-8', true)) {
            $textOfFile = mb_convert_encoding($textOfFile, 'UTF-8', 'CP1251');
        }
        $sentencesOfBook = [];
        preg_match_all("/[^.!?\r\n]+[.!?\r\n]+/", $textOfFile, $sentencesOfBook);
        return $sentencesOfBook;
    }
}
?>