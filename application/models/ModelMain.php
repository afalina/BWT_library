<?php
Class ModelMain extends Model
{
    public function setData($data) {

        require ($_SERVER['DOCUMENT_ROOT'].'/Capsule.php');

        $bookId = $capsule::table('books')->insertGetId(
            ['author' => $data[0], 'title' => $data[1], 'published_year' => $data[2]]
        );

        $file = new \App\BookFile();
        $newBookFile = $file->uploadFile();
        $testingArray = $file->parseFile();
        foreach ($testingArray[0] as $testingUnit) {
            $capsule::table('records')->insert(['book_id' => $bookId, 'record' => $testingUnit]);
        }
    }
}